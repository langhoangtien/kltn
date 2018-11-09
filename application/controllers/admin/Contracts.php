<?php 
class Contracts extends My_controller{
	function __construct(){
		parent:: __construct();
		$this->load->Model('Contract');
		$this->load->model('Customer_model');
		$this->load->model('Admin_model');
		$this->load->model('Category');
	}
	function index()

	{
		
	 
	}

public function add()
{
	$this->load->library('form_validation');
	$this->load->helper('form');
	$data = array();
	// var_dump($this->input->post());
	if($this->input->post())
	{ 
		
		$this->form_validation->set_rules('fullname','tên sản phẩm','required');
		$this->form_validation->set_rules('note','ghi chú','required');
		$this->form_validation->set_rules('phone','điện thoại','required|max_length[15]');
		$this->form_validation->set_rules('address','Địa chỉ','required|max_length[115]');
		$this->form_validation->set_rules('category_id','danh mục','required|max_length[15]');
		$this->form_validation->set_rules('name','Tên','required|max_length[115]');
		$this->form_validation->set_rules('register_date','Ngày đăng ký','required|max_length[115]');
		$this->form_validation->set_rules('bks','Tên','required|max_length[15]|is_unique[product.bks]');
		$this->form_validation->set_rules('so_khung','Tên','required|max_length[11]|integer');
		$this->form_validation->set_rules('so_may','Tên','required|max_length[11]|integer');
		$this->form_validation->set_rules('color','Tên','required|max_length[20]');
		$this->form_validation->set_rules('manufacture_year','Tên','required|max_length[4]|integer');
		$this->form_validation->set_rules('money','Tên','required|max_length[15]|numeric');
		$this->form_validation->set_rules('typepaid','Tên','required|max_length[2]|integer');
		$this->form_validation->set_rules('type','Tên','required|max_length[2]|integer');
		$this->form_validation->set_rules('note','Tên','required|max_length[200]');
		$this->form_validation->set_rules('paiddate','Tên','required|max_length[20]');

		if($this->form_validation->run())

		{
			# thêm mới khách hàng
			if($this->input->post('gender')=="new")
				{
				$fullname=$this->input->post('fullname');
				$idcard=$this->input->post('idcard');
				$phone=$this->input->post('phone');
				$address=$this->input->post('address');
				$data_cunstomer = array(
					'fullname'=>$fullname,
					'idcard'=>$idcard,
					'phone'=>$phone,
					'address'=>$address
				);
					 
				$data['customer_id'] =$this->Customer_model->add($data_cunstomer);
				}
				else
				{
				$data['customer_id'] = $this->input->post('fullname_id');
				}

				if(($data['customer_id']<1) || (!is_integer($data['customer_id'])))
				{
					$this->session->set_flashdata('message','Có lỗi khi thêm khách hàng');
					redirect (admin_url('Historypaid'));
				}
				else
				{
					#Thêm mới sản phẩm
					$data_product['name']=$this->input->post('name');
					$data_product['register_date']=date('Y-m-d',strtotime($this->input->post('register_date')));
					 $data_product['bks']=$this->input->post('bks');
					 $data_product['so_khung']=$this->input->post('so_khung');
					 $data_product['color']=$this->input->post('color');
					 $data_product['manufacture_year']=$this->input->post('manufacture_year');
					 $data_product['category_id']=$this->input->post('category_id');
					 	if($this->db->insert('product', $data_product))
					 	{
					 		$data['note'] = $this->input->post('note');
					 		$data['money'] = $this->input->post('money');
					 		$data['paiddate'] = date('Y-m-d',strtotime($this->input->post('paiddate')));
					 		$data['type'] = $this->input->post('type');

					 		if($this->Historypaid_model->create($data))
					 		{
					 			$this->session->set_flashdata('message','thêm mới thành công');
					 			redirect (admin_url('Historypaid'));
					 		}
					 		else{
					 			redirect (admin_url('Historypaid'));
					 			$this->session->set_flashdata('message','thêm mới không thành công');
					 		}
					 	}

					 	else
					 	{
					 		redirect (admin_url('Historypaid'));
					 		$this->session->set_flashdata('message','Có lỗi với sản phẩm');
					 	}	
				}
					 	
		}
					
			
		
	}
	
	$this->data['list'] = $this->Category->get_list();
	// echo "<pre>";
	// var_dump($data['list']);die();
	$this->data['temp']='admin/contract/add';	
	$this->load->view('admin/main',$this->data);
}

function add_paid(){
	$id=$this->uri->segment('4');
	$data_info = $this->Historypaid_model->info($id);
	$this->load->library('form_validation');
	$this->load->helper('form');
	$data = array();
	
	if($this->input->post())
	{
		$data_paid = $this->input->post();
		$data_paid['id_paid'] = $id;
		$this->Historypaid_model->add_paid_historys($data_paid);
		redirect (admin_url('Historypaid/list_view'));
			
	}
	$list = $this->Historypaid_model->list_view();
	$message=$this->session->flashdata('message');
	$this->data['message']=$message;
	$this->data['temp']='admin/historypaid/historys';
	$this->data['data_info']=$data_info;
	$this->load->view('admin/main',$this->data); 
}
function list_view(){
	$list = $this->Historypaid_model->list_paid_historys();
	var_dump($list);
	
	$message=$this->session->flashdata('message');
	$this->data['message']=$message;
	$this->data['temp']='admin/historypaid/historys_list';
	$this->data['list']= $list;	

	$this->load->view('admin/main',$this->data);   
}
}