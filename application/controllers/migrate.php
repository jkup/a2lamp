<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migrate extends CI_Controller {

    public function index()
    {
        $this->load->library('migration');

        if ( $this->migration->latest() ) {
            echo('DB migrated to latest version.');
        } else {
            show_error($this->migration->error_string());
        }
    }

    public function version( $version )
    {
        $this->load->library('migration');

        if ( $this->migration->version($version) ) {
            echo("DB migrated to version $version.");
        } else {
            show_error($this->migration->error_string());
        }
    }

}