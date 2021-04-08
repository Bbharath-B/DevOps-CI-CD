<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Twilio\Rest\Client;

class Admin extends MY_Controller 
{
	public function __construct()
	{
		parent::__construct();
		require_auth_admin();
		
		$this->load->model('user_model');
		$this->load->model('delivery_model');

	}

	public function index()
	{

		$data['title'] = "Admin";
		$data['packages'] = $this->delivery_model->get_all_packages(10);
		$data['delivery_status_titles'] = $this->delivery_model->get_delivery_status_titles();

		$data['user_count'] = count($this->user_model->get_all_users_reg());
		$data['staff_count'] = count($this->user_model->get_all_staff());
		$data['packages_in_transit'] = count($this->delivery_model->get_all_packages_in_transit());
		
		$this->load->view('admin/admin_bar');
		$this->load->template('admin/index', $data);

	}

	public function server_info() {
		$this->load->view('admin/server_info.php');
	}

    public function add_package()
	{
		if($_SERVER['REQUEST_METHOD'] == "GET") {
			
			$data['title'] = "Add Package";
			$data['users'] = $this->user_model->get_all_users();
			
			$this->load->view('admin/admin_bar');
			$this->load->template('admin/add_package.php', $data);
		
		} else if($_SERVER['REQUEST_METHOD'] == "POST") {

			$this->form_validation->set_rules('deliver_to', 'Deliver To', 'trim|required');
			$this->form_validation->set_rules('tracking_id', 'Tracking ID', 'trim|required');
			$this->form_validation->set_rules('delivery_title', 'Delivery Title', 'trim|required');
			$this->form_validation->set_rules('delivery_details', 'Delivery Details', 'trim|required');
			$this->form_validation->set_rules('weight', 'Weight', 'trim|required|numeric');

			//run validation
			if ($this->form_validation->run() == FALSE) {
				//failed validations
				echo json_encode(array("response" => "failed_validations", "message" => '<div class="alert alert-danger">' . validation_errors() . '</div>' ));
			} else {

				$this->user_model->add_package(
					$this->input->post('deliver_to'), 
					strtoupper($this->input->post('tracking_id')), 
					$this->input->post('delivery_title'), 
					$this->input->post('delivery_details'),
					$this->input->post('weight')
				);

				$this->session->set_userdata('package_added', 'Package has been added to the database.');

				// Get user data
				$user = $this->user_model->get_user_by_id($this->input->post('deliver_to'));
				$email_to = $user[0]['email'];
				$phone = $user[0]['phone'];

				// Send Email
				$this->email->from('no-reply@app.com', 'AppName');
				$this->email->to($email_to);
				$this->email->subject('New Package');
				$this->email->message(default_email_template('You have a new package on the way. <br><br>
					<div><b>Package: </b>'.$this->input->post('delivery_title').'</div>
					<div><b>Description: </b>'.$this->input->post('delivery_details').'</div>
					<div><b>Delivering to: </b>'.$this->input->post('deliver_to').'</div>
					<div style="height:30px;"></div>
				'));

				$this->email->set_mailtype('html');
				//$this->email->send();

				// Send SMS Message
				if($this->input->post('notify_user_sms') == true){
					// Twilio API
					$account_sid = env('TWILIO_ACCOUNT_SID');
					$auth_token = env('TWILIO_AUTH_TOKEN');
					$twilio_number = env('TWILIO_NUMBER');

					$client = new Client($account_sid, $auth_token);
					$client->messages->create(
						$phone,
						array(
							'from' => $twilio_number,
							'body' => 'You have a package on the way. Please check your account on ICS.'
						)
					);
				}


				$data['title'] = "Add Package";
				$data['users'] = $this->user_model->get_all_users();
				$this->load->template('admin/add_package.php', $data);

			}

		}

	}

	public function manage_packages()
	{
		if($_SERVER['REQUEST_METHOD'] == "GET") {
			
			$data['title'] = "Manage Packages";
			$data['packages'] = $this->delivery_model->get_all_packages();
			$data['delivery_status_titles'] = $this->delivery_model->get_delivery_status_titles();

			$this->load->view('admin/admin_bar');
			$this->load->template('admin/manage_packages.php', $data);
		
		}
	}

	public function all($status) {
		$this->load->view('admin/admin_bar');
		
		if($status == 'delivered'){
			$data['title'] = "Delivered Packages";
			$data['packages'] = $this->delivery_model->get_packages_by_status(4);
			$this->load->template('admin/all', $data);
		} else if($status == 'in_transit') {
			$data['title'] = "In Transit Packages";
			$data['packages'] = $this->delivery_model->get_packages_by_status(3);
			$this->load->template('admin/all', $data);
		} else if($status == 'dispatched') {
			$data['title'] = "Dispatched Packages";
			$data['packages'] = $this->delivery_model->get_packages_by_status(2);
			$this->load->template('admin/all', $data);
		} else if($status == 'pending_dispatch') {
			$data['title'] = "Packages Pending Dispatch";
			$data['packages'] = $this->delivery_model->get_packages_by_status(1);
			$this->load->template('admin/all', $data);
		}
	}


	public function package($tracking_id)
	{
		if($tracking_id != null) {

			$package = $this->delivery_model->get_package_by_id($tracking_id);

			if($package) {
				$data['title'] = "Track your package";
				$data['user_address'] = $this->user_model->get_user_address_by_id($this->session->user_id);
				$data['package'] = $package;
				$data['delivery_address'] = $this->user_model->get_user_address_by_id($package[0]['user_id']);
				$data['current_status'] = $this->delivery_model->get_current_status($tracking_id);
				$data['delivery_status'] = $this->delivery_model->get_delivery_status_by_tracking_id($tracking_id);
				$data['delivery_status_titles'] = $this->delivery_model->get_delivery_status_titles();

				$data['load_extra_js'] = array(base_url('resources/js/admin_package.js'));

				$this->load->view('admin/admin_bar');
				$this->load->template('admin/package', $data);
			} else {
				redirect('admin');
			}
		} else {
			redirect('admin');
		}
	}

	public function update_tracking($endpoint = null)
	{

		$tracking_id = $this->input->post('tracking_id');

		if($endpoint != null) {

			$package = $this->delivery_model->get_package_by_id($tracking_id);

			if($package) {
				if($endpoint == 'delivered') {
					$this->delivery_model->set_delivered($tracking_id);
					echo json_encode(array("response" => "success"));
				} else if($endpoint == 'in_transit') {
					$this->delivery_model->set_in_transit($tracking_id);
					echo json_encode(array("response" => "success"));
				} else if($endpoint == 'dispatch') {
					$this->delivery_model->set_dispatched($tracking_id);
					echo json_encode(array("response" => "success"));
				}
			} else {
				echo json_encode(array("response" => "error", "message" => "An error occured. Please try again later." ));
			}
		} else {
			echo json_encode(array("response" => "error", "message" => "An error occured. Please try again later." ));
		}
	}

	public function users() {
		$data['title'] = "Manage Users";

		$data['staff'] = $this->user_model->get_all_staff();
		$data['users'] = $this->user_model->get_all_users_reg();
		
		$this->load->view('admin/admin_bar');
		$this->load->template('admin/users', $data);
	}

	public function user($user_id) {

		$user = $this->user_model->get_user_by_id($user_id);

		if($_SERVER['REQUEST_METHOD'] == "GET") {

			if($user) {

				$data['title'] = "Manage User - " . $user[0]['username'];

				$data['user'] = $user;
				$data['address'] = $this->user_model->get_user_address_by_id($user_id);

				$this->load->view('admin/admin_bar');
				$this->load->template('admin/edit_user', $data);

			} else {
				redirect('admin/users');
			}
		} else if($_SERVER['REQUEST_METHOD'] == "POST") {
			$this->form_validation->set_rules('title', 'Title', 'trim|required');
			$this->form_validation->set_rules('first_name', 'First name', 'trim|required|min_length[5]');
			$this->form_validation->set_rules('last_name', 'Last name', 'trim|required');
			$this->form_validation->set_rules('phone', 'Telephone', 'trim|required|min_length[10]|numeric', array('numeric' => 'Please only include numbers in this field (no spaces or hyphens).'));
			$this->form_validation->set_rules('company', 'Company', 'trim|required');
			$this->form_validation->set_rules('address', 'Address', 'trim|required|min_length[5]');
			$this->form_validation->set_rules('country', 'Country', 'trim|required');
			$this->form_validation->set_rules('state', 'State', 'trim|required');
			$this->form_validation->set_rules('city', 'City', 'trim|required');
			$this->form_validation->set_rules('zip', 'Zipcode', 'trim|required|min_length[4]');
			$this->form_validation->set_error_delimiters('<div class="danger-alert"><i class="fas fa-exclamation-triangle"></i> ', '</div>');

			if($user[0]['email'] != $this->input->post('email')) {
				$this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[user.email]|valid_email', array('is_unique' => 'That %s ('.$this->input->post('email').') is already in use. Please pick another.'));
			}

			if($user[0]['username'] != $this->input->post('username')) {
				$this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[user.username]', array('is_unique' => 'That %s ('.$this->input->post('username').') is already in use. Please pick another.'));
			}

			//run validation
			if ($this->form_validation->run() == FALSE) {
				$data['title'] = "Manage User - " . $user[0]['username'];
				$data['load_extra_js_header'] = array(base_url("resources/js/countries.js"));
				$data['user'] = $user;
				$data['address'] = $this->user_model->get_user_address_by_id($user_id);
				
				$this->session->set_flashdata('result', 'Validation Errors.<br> '.validation_errors());
				$this->load->view('admin/admin_bar');
				$this->load->template('admin/edit_user', $data); //failed registration
			} else {
				//registration successful
				$data['title'] = "Manage User - " . $user[0]['username'];
				$data['reg_success'] = "Registration successful. Please check your email (" . $this->input->post('email') . ")";
				$this->user_model->update_account(
					$this->input->post('title'),
					$this->input->post('first_name'),
					$this->input->post('last_name'),
					$this->input->post('email'),
					$this->input->post('phone'),
					$this->input->post('company'),
					$this->input->post('address'),
					$this->input->post('country'),
					$this->input->post('state'),
					$this->input->post('city'),
					$this->input->post('zip'),
					$this->input->post('user_id')
				);

				$data['user'] = $user;
				$data['address'] = $this->user_model->get_user_address_by_id($user_id);

				$this->load->view('admin/admin_bar');
				$this->session->set_flashdata('result', 'Account has been updated.');
				//$this->load->template('admin/edit_user', $data);
				redirect('admin/user/'.$user_id);
			}
		}
	}

}