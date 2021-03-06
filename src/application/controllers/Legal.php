<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Legal extends MY_Controller 
{
	public function __construct()
	{
		parent::__construct();
	}

    public function index() {
        redirect('legal/cookie_policy');
    }

    public function cookie_policy() {

        $data['title'] = "Cookie Policy";
        $this->load->template('legal/cookie_policy', $data);

    }

    public function privacy_policy() {

        $data['title'] = "Privacy Policy";
        $this->load->template('legal/privacy_policy', $data);

    }

    public function terms() {

        $data['title'] = "Terms and Conditions";
        $this->load->template('legal/terms', $data);

    }

    public function refund_policy() {

        $data['title'] = "Refund Policy";
        $this->load->template('legal/refund_policy', $data);

    }

}
