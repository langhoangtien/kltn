<?php 
class Login extends My_controller{
	function __construct(){
		parent:: __construct();
		$this->load->Model('Admin_model');
	}
	function index()
	{
		$this->load->library('form_validation');
		$this->load->helper('form');
		// if($this->input->post())
		// {
		// 	$this->form_validation->set_rules('login','login','callback_check_login');
		// 	if($this->form_validation->run())
		// 	{
				//set_userdata gán dl cho biến session
				$this->session->set_userdata('login',true);
				 redirect(admin_url('admin'));
		// 	}
		// }
		
		$this->load->view('admin/login/index');
	}
	//kiem tra email,pass
	function check_login()
	{
		$email=$this->input->post('email');
		$password = $this->input->post('password');
		$password = md5($password);
		// điều kiện email ,pass đăng nhập trùng với db
		$where=array('email' => $email,'password' => $password);
		if($this->Admin_model->check_exists($where)){
			return true;
		}

		else{
			$this->form_validation->set_message( __FUNCTION__,'Không đăng nhập thành công' );
			return false;
		
		}
	}
}

?>