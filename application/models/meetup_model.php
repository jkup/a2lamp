<?php

class Meetup_model extends CI_Model {

    public function get_upcoming_meetup()
    {
        $meetup = false;

        // request params
        $params = array(
            'group_urlname' => 'ann-arbor-php-mysql',
            'page' => 1,
            'key' => '103b112f312e41aa235c1d41bc21'
        );

        $request_uri = 'https://api.meetup.com/2/events?' . http_build_query($params);

        $this->load->library('RESTClient');

        // make the request
        $json = RESTClient::get($request_uri);

        // parse the response
        $response = json_decode($json);

        if ( isset($response->results[0]) ) {
            $meetup = $response->results[0];
        }

        return $meetup;
    }

}

