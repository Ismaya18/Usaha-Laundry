<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_security Extends CI_Model {

    public function getSecurity()
    {
        if (empty($this->session->userdata('username'))) {
            $this->session->sess_destroy();
            redirect('panel','refresh');
        }
    }
}