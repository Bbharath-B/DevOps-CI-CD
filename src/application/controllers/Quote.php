<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quote extends MY_Controller 
{
	public function __construct()
	{
		parent::__construct();
    }

	public function index()
	{
		$data['title'] = "Get A Quote";
		$this->load->template('quote', $data);

	}
}