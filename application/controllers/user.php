<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
    
    const CONSUMER_KEY    = '1j3ccm3ha5mtr9lb67ne3fn0d4';
    const CONSUMER_SECRET = 'mngdqn29fohnpgoneu4k2pgpbg';

    public function login()
    {
        $redirect_uri = urlencode(site_url('/login'));
        
        if ( $this->input->get('error') === false ) {

            // get session state, CSRF protection
            $state = $this->session->userdata('oauth_state');
            
            // if we haven't yet set up an OAuth state, do so now.
            if ( $state === FALSE ) {                
                // store unique state var for CSRF protection
                $this->session->set_userdata('oauth_state', md5(uniqid(rand(), true)));
            }            
            
            // do we have an OAuth code?
            $code = $this->input->get('code');

            // get the state from the URI
            $state_param = $this->input->get('state');

            // if no code, we are at step 1 and need to redirect to OAuth dialog
            if ( $code === FALSE ) {        
                $code_url = 'https://secure.meetup.com/oauth2/authorize'
                          . '?client_id=' . self::CONSUMER_KEY
                          . '&redirect_uri=' . $redirect_uri
                          . '&state=' . $this->session->userdata('oauth_state')
                          . '&response_type=code';

                redirect($code_url);
            } else if ( $state_param === $state ) { // if state params match...
                // ...let's get an access_token
                if ( $code ) {
                    
                    $this->load->library('RESTClient');
                    
                    // build the token url
                    $token_url = 'https://secure.meetup.com/oauth2/access'
                               . '?client_id=' . self::CONSUMER_KEY
                               . '&redirect_uri=' . $redirect_uri
                               . '&client_secret=' . self::CONSUMER_SECRET
                               . '&code=' . $code
                               . '&grant_type=authorization_code';

                    // submit POST request
                    $json = RESTClient::post($token_url);

                    // parse the response
                    $response = json_decode($json);

                    // if we have a token...
                    if ( !empty($response->access_token) ) {
                        
                        // get user profile data and create user account in DB
                        $json = file_get_contents('https://api.meetup.com/2/member/self?access_token=' . $response->access_token);

                        if ( !empty($json) ) {
                                                 
                            // parse the response
                            $response = json_decode($json);

                            $this->load->model('user_model');

                            $user = $this->user_model->get_user($response->id);

                            if ( empty($user) ) {
                                $user = $this->user_model->add_user($response);
                            }

                            if ( !empty($user) ) {
                                $this->session->set_userdata('user', $user);
                                redirect('/');
                            } else {
                                show_error('Unable to create user account. Sorry about that. :o/');
                            }
                            
                        }
                    }                
                }
            }
        } else {
            $this->load->view('user/login_error');
        }
    }
    
    public function logout()
    {
        $this->session->unset_userdata('user');
        redirect('/');
    }
    
}