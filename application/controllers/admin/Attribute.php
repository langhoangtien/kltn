<?php 
class Attribute extends My_controller{
	function __construct(){
		parent:: __construct();
		$this->load->Model('Attribute_model');
	}
	function index()
	{
		$input =array();
		$list=$this->Attribute_model->get_list($input);
		$this->data['list']=$list;
		$total= $this->Attribute_model->get_total();
		$this->data['total']=$total;
		$message=$this->session->flashdata('message');
		$this->data['message']=$message;
		$this->data['temp']='admin/attribute/index';
		$this->load->view('admin/main',$this->data);
	}
	function add()
	{
		$this->load->library('form_validation');
		$this->load->helper('form');
		if($this->input->post())
		{
			$this->form_validation->set_rules('manufacture','hãng xe','required');
			$this->form_validation->set_rules('type','loại xe','required');
			$this->form_validation->set_rules('color','màu sắc','required');
			if($this->form_validation->run())
			{
				$manufacture=$this->input->post('manufacture');
				$type=$this->input->post('type');
				$color=$this->input->post('color');
				$data=array(
				'manufacture' =>$manufacture,
				'type'=> $type,
				'color' =>$color
				);
				if($this->Attribute_model->create($data))
				{
					$this->session->set_flashdata('message','thêm mới thành công');
				}
				else{
					$this->session->set_flashdata('message','thêm mới không thành công');
				}
				redirect (admin_url('attribute'));
			}
		}
		$this->data['temp']='admin/attribute/add';
	$this->load->view('admin/main',$this->data);

	}
	function edit()
{
	$id=$this->uri->segment('4');
	$id=intval($id);
	$this->load->library('form_validation');
	$this->load->helper('form');
	$info=$this->Attribute_model->get_info($id);
	if(!$info){
		$this->session->set_flashdata('message','không tồn tại thuộc tính này');
		redirect(admin_url('attribute'));
	} 
	$this->data['info']=$info;
	if($this->input->post())
	{
		$this->form_validation->set_rules('manufacture','hãng sản xuất','required');
		$this->form_validation->set_rules('type','loại xe','required');
		$this->form_validation->set_rules('color','màu sắc','required');
		if($this->form_validation->run())
		{
				$manufacture=$this->input->post('manufacture');
				$type=$this->input->post('type');
				$color=$this->input->post('color');
				$data=array(
					'manufacture' => $manufacture,
					'type' => $type,
					'color' => $color
				);	
				if($this->Attribute_model->update($id,$data))
				{
					$this->session->set_flashdata('message','cập nhật dữ liệu  thành công');
				}
				else{
					$this->session->set_flashdata('message','cập nhật dữ liệu  không thành công');
				}
				redirect (admin_url('attribute'));
		}
	}
	
	$this->data['temp']='admin/attribute/edit';
	$this->load->view('admin/main',$this->data);
}
	function delete()
{
	$id=$this->uri->segment('4');
	$id=intval($id);
	// lấy thông tin của quản trị viên
	$info=$this->Attribute_model->get_info($id);
	if(!$info){
		$this->session->set_flashdata('message','khong ton tai ');
		redirect(admin_url('admin'));	
	}
	//thuc hien xoa
	$this->Attribute_model->delete($id);
	$this->session->set_flashdata('message','xoa du lieu thanh cong');
	redirect(admin_url('attribute'));
}


}