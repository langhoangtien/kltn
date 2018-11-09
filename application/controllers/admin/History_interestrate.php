<?php 
class History_interestrate extends My_controller{
	function __construct(){
		parent:: __construct();
		$this->load->Model('History_interestrate_model');
	}
	function index()

{
	$this->load->Model('History_interestrate_model');
	 $list = $this->History_interestrate_model->join();
	 $total= $this->History_interestrate_model->get_total();
	 $message=$this->session->flashdata('message');
	$this->data['message']=$message;
	 $this->data['temp']='admin/history_interestrate/index';
	$this->data['list']= $list;	
	$this->data['total']= $total;	
	$this->load->view('admin/main',$this->data);       
}

function add()
{
	$this->load->library('form_validation');
	$this->load->helper('form');
	$this->load->model('Interestrate_model');
	$ds= $this->Interestrate_model->get_list();
	//pre($ds);
	$this->load->model('History_interestrate_model');
	$list = $this->History_interestrate_model->get_list();
	//pre($list);
	$data = array();
	
	if($this->input->post())
	{
		$this->form_validation->set_rules('startdate','ngày bắt đầu','required');
		$this->form_validation->set_rules('percent','tỷ lệ lãi suất','required');
		$this->form_validation->set_rules('note','ghi chú ','required');
	
		$this->form_validation->set_rules('tenls','tên lãi suất ','required');
		
		if($this->form_validation->run())

		{
			
			$startdate=$this->input->post('startdate');
			$percent=$this->input->post('percent');
			$note=$this->input->post('note');
			$tenls=$this->input->post('tenls');
			$data=array(
				'startdate' => $startdate,
				'percent' =>$percent,
				'note' =>$note,
				'interestrate_id' =>$tenls
			);
			$this->load->model('History_interestrate_model');
			if($this->History_interestrate_model->create($data))
				{
					$this->session->set_flashdata('message','thêm mới thành công');
					redirect (admin_url('history_interestrate'));
				}
				else{
					$this->session->set_flashdata('message','thêm mới không thành công');
				}
		}
	}
	
	$this->data['temp']='admin/History_interestrate/add';
	$this->data['list'] = $list;
	$this->data['ds'] = $ds;
	$this->load->view('admin/main',$this->data);

}
function edit()
{

	$id=$this->uri->segment('4');

	$id=intval($id);
	$this->load->library('form_validation');
	$this->load->helper('form');
	$this->load->model('Interestrate_model');
	$ds= $this->Interestrate_model->get_list();
	//pre($ds);
	$this->load->model('History_interestrate_model');
	$list = $this->History_interestrate_model->get_list();
	//pre($list);
	$data = array();
	$info=$this->History_interestrate_model->get_info($id);
	//pre($info);
	if(!$info){
		$this->session->set_flashdata('message','không tồn tại');
		redirect(admin_url('category'));
	} 
	//gan info vaof data
	$this->data['info']=$info;
	$this->data['ds']=$ds;
	$this->data['list']=$list;
	if($this->input->post())
	{
		$this->form_validation->set_rules('startdate','ngày bắt đầu','required');
		$this->form_validation->set_rules('percent','tỷ lệ lãi suất','required');
		$this->form_validation->set_rules('note','ghi chú ','required');
	
		$this->form_validation->set_rules('tenls','tên lãi suất ','required');
		
		if($this->form_validation->run())

		{
			
			$startdate=$this->input->post('startdate');
			$percent=$this->input->post('percent');
			$note=$this->input->post('note');
			$tenls=$this->input->post('tenls');
			$data=array(
				'startdate' => $startdate,
				'percent' =>$percent,
				'note' =>$note,
				'interestrate_id' =>$tenls
			);
			$this->load->model('History_interestrate_model');
			if($this->History_interestrate_model->create($data))
				{
					$this->session->set_flashdata('message','thêm mới thành công');
					redirect (admin_url('history_interestrate'));
				}
				else{
					$this->session->set_flashdata('message','thêm mới không thành công');
				}
		}
	}
	
	$this->data['temp']='admin/history_interestrate/edit';
	//tham so truyen vao $this->data
	$this->load->view('admin/main',$this->data);
}
function delete()
{
	$id=$this->uri->segment('4');
	$id=intval($id);
	$info=$this->History_interestrate_model->get_info($id);
	if(!$info){
		$this->session->set_flashdata('message','khong ton tai ');
		redirect(admin_url('category'));	
	}
	//thuc hien xoa
	$this->History_interestrate_model->delete($id);
	$this->session->set_flashdata('message','xoa du lieu thanh cong');
	redirect(admin_url('history_interestrate'));
}

    }
    

