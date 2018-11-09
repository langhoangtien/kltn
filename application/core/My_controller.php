<?php
Class My_controller extends CI_controller
{
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
				$this->_check_login();
				break;
			}
		default :
		{
			 
		}
		
		}
	}
	//kiểm tra tt đăng nhập của admin
	private function _check_login()
	{
		
		$controller=$this->uri->segment('1');
		//pre($controller);
		//ép kiểu về chữ thường
		$controller=strtolower($controller);
		$login=$this->session->userdata('login');
		//chưa đăng nhập mà truy cập vào controller khác admin sẽ quya về đăng nhập
		if(!$login && $controller!= 'login'){
			// echo "demo";exit();
			redirect(admin_url('login'));
		}
		if($login && $controller== 'login')
		{
			redirect(admin_url('home'));
		}
	}
}
 ?>
