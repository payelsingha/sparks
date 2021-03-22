<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    public function __construct()
	{
		parent:: __construct();
		$this->load->helper('url');
		$this->load->database();
		$this->load->model('database');
	}



	public function index()
	{
		$this->load->model('database');
		$data['show_datas'] = $this->database->show_datas();
		$data['show_name'] = $this->database->show_name();
		$this->load->view('business',$data);	
	}

	public function put_data()
	{
		$this->load->model('database');
		
		$name = $this->input->post('name');
		$ammount = $this->input->post('ammount');
		$email = $this->input->post('email');
		

		$data = array(
			'name' => $name,
			'ammount' => $ammount,
			'email' =>$email,
		);
		if($this->input->post("update"))  
		{  
			 $this->main_model->update_data($data, $this->input->post("hidden_id"));  
			 redirect(base_url() . "welcome/index");  
		}
		

		if(isset($_POST['email'])){
			
			echo "<script>alert('Payment Successfully Initiated!')</script>";
			 echo"<script>window.open('../index.php','_self')</script>";
		}
		else{
			
			echo "<script>alert('Payment Failed!')</script>";
			 echo"<script>window.open('../index.php','_self')</script>";
			
		}

	}
}


	