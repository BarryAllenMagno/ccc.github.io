<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backup extends MY_Controller {

    public function view(){

        $this->load->view('homebackup');
    }
}
