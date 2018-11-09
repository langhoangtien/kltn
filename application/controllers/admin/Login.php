<?php 
class Login extends CI_Controller{

	public $data=array();
	function __construct()
	{
		parent:: __construct();
		// laay ra phan doan tinh sau base_url
		$controller=$this->uri->segment(1);
		switch ($controller) {
			case'admin':
			{
				$this->load->helper('admin');
				//$this->_check_login();
				break;
			}
		default :
		{
			 
		}
		
		}
	}
	
	function index()
	{
		//load thu vien form_validate
		$this->load->library('form_validation');
		$this->load->helper('form');
		if($this->input->post())
		{
			//thuc hien set tap luat 
			$this->form_validation->set_rules('login','login','callback_check_login');
			if($this->form_validation->run())
			{
				//session thông báo đăng nhập thành công gán login =true
				$this->session->set_userdata('login',true);
				redirect(admin_url('home'));
			}

		}
		$this->load->view('admin/login/index');
	}

		function check_login()
	{
		//lâý email,pass
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$password=md5($password);
		// gọi hàm check exit kiểm tra tồn tại hay k?
		$where = array('email' => $email,'password' => $password);
		$this->load->Model('Login_model');

		if($this->Login_model->check_exists($where)){
			return true;
		}
		
		$this->form_validation->set_message( __FUNCTION__,'không đăng nhập thành công ');
			return false;
	}


}

?>