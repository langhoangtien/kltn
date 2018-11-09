<?php 
class Home extends My_controller
{
	function index()
	{
		$this->data['temp']='admin/home/index';
		$this->load->view('admin/main',$this->data);
		
	}
}
?>