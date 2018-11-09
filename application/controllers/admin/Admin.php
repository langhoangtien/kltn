<?php 
class Admin extends My_controller{
	function __construct(){
		parent:: __construct();
		$this->load->Model('Admin_model');
	}
	//ten thu muc view giong ten controller, ten file giong ten action
	//load danh sach
	function index()
	{
		$input =array();
		$list=$this->Admin_model->get_list($input);	
		$this->load->library('pagination');
	$this->load->model('Admin_model');
	$arrParams = $this->input->get();
	$count = array();
	$count['id'] = $this->input->get('id') ? $this->input->get('id') : "";
	$count['name'] = $this->input->get('name') ? $this->input->get('name') : "";
	$this->load->library('pagination');
	$config['base_url'] = admin_url('admin/index');
	$config['total_rows'] = $total= count($list);
	$config['use_page_numbers'] = TRUE;
	$config['per_page'] = 3;
	$arrParams['limit'] = $config['per_page'];
	$arrParams['offset'] = intval(($this->uri->segment(4,1)-1)*$config['per_page']);
	$this->pagination->initialize($config);
	$this->data['page']= $this->pagination->create_links();
	
		 
	$message=$this->session->flashdata('message');
	$this->data['message']=$message;
	$this->data['temp']='admin/admin/index';
	$this->data['list']= $list;	
	//$this->data['num']= $num;
	$this->data['total'] = $total;
	$this->load->view('admin/main',$this->data);  
	}
	//kiểm tra username tồn tại chưa
	function check_email()
	{
		$email=$this->input->post('email');
		// gọi hàm check exit kiểm tra tồn tại hay k?
		$where = array('email' => $email);
		if($this->Admin_model->check_exists($where)){
			//trả về thông báo lỗi
			$this->form_validation->set_message( __FUNCTION__,'email  này đã tồn tại');
			return false;
		}
		return true;
	}
public function add()
{
	$this->load->library('form_validation');
	$this->load->helper('form');
	if($this->input->post())
	{
		$this->form_validation->set_rules('name','Tên','required');
		$this->form_validation->set_rules('email','email đăng nhập','required|callback_check_email');
		$this->form_validation->set_rules('password','mật khẩu','required|min_length[6]');
		//matches nhập lại giống ô trên
		$this->form_validation->set_rules('repassword','nhập lại mật khẩu','matches[password]');
		$this->form_validation->set_rules('address','địa chỉ','required');
		$this->form_validation->set_rules('phone','số điện thoại','required');
		$this->form_validation->set_rules('idcard','CMT','required');
		// nhập dl chính xác
		if($this->form_validation->run())
			{
				// thêm vào csdl
				$name=$this->input->post('name');
				$password=$this->input->post('password');
				$email=$this->input->post('email');
				$address=$this->input->post('address');
				$phone=$this->input->post('phone');
				$idcard=$this->input->post('idcard');
				$data=array(
					'name' => $name,
					'password' => md5($password),
					'email' => $email,
					'address' => $address,
					'phone' => $phone,
					'idcard' => $idcard
				);
			
				if($this->Admin_model->create($data))
				{
					$this->session->set_flashdata('message','thêm mới thành công');
					redirect (admin_url('admin'));
				}
				else{
					$this->session->set_flashdata('message','thêm mới không thành công');
				}
				
			}

	}

	//thêm mới addmin
	$this->data['temp']='admin/admin/add';

	$this->load->view('admin/main',$this->data);
}
function edit()
{
	//lấy id phân đoạn , tham số truyền vào vị trí phân đoạn trên url
	$id=$this->uri->segment('4');
	
	//lấy thông tin quản trị viên 
	//ép kiểu biến id trả về số nguyên
	$id=intval($id);
	$this->load->library('form_validation');
	$this->load->helper('form');
	$info=$this->Admin_model->get_info($id);
	//pre($info);
	if(!$info){
		$this->session->set_flashdata('message','không tồn tại quản trị viên này');
		redirect(admin_url('admin'));
	} 
	//gan info vaof data
	$this->data['info']=$info;
	if($this->input->post())
	{
		//set_rule
		$this->form_validation->set_rules('name','Tên','required|min_length[8]');
		
		if($password){
			$this->form_validation->set_rules('password','mật khẩu','required|min_length[6]');
			$this->form_validation->set_rules('repassword','nhập lại mật khẩu','matches[password]');
		}
		$this->form_validation->set_rules('email','email đăng nhập','required|callback_check_email');
		$this->form_validation->set_rules('address','địa chỉ','required');
		$this->form_validation->set_rules('phone','số điện thoại','required');
		$this->form_validation->set_rules('idcard','CMT','required');
		
		if($this->form_validation->run())
		{
				$name=$this->input->post('name');
				//nếu mà thay đổi mật khẩu thì mới cập nhật dữ liệu
				if($password){
					$data['password']= md5($password);
				}
				$email=$this->input->post('email');
				$address=$this->input->post('address');
				$phone=$this->input->post('phone');
				$idcard=$this->input->post('idcard');
				$data=array(
					'name' => $name,
					'email' => $email,
					'address' => $address,
					'phone' => $phone,
					'idcard' => $idcard
				);	
				if($this->Admin_model->update($id,$data))
				{
					$this->session->set_flashdata('message','cập nhật dữ liệu  thành công');
				}
				else{
					$this->session->set_flashdata('message','cập nhật dữ liệu  không thành công');
				}
				redirect (admin_url('admin'));
		}
	}
	
	$this->data['temp']='admin/admin/edit';
	//tham so truyen vao $this->data
	$this->load->view('admin/main',$this->data);
}
function delete()
{
	$id=$this->uri->segment('4');
	$id=intval($id);
	// lấy thông tin của quản trị viên
	$info=$this->Admin_model->get_info($id);
	if(!$info){
		$this->session->set_flashdata('message','khong ton tai quan tri vien');
		redirect(admin_url('admin'));	
	}
	//thuc hien xoa
	$this->Admin_model->delete($id);
	$this->session->set_flashdata('message','xoa du lieu thanh cong');
	redirect(admin_url('admin'));
}
function logout()
{
	if($this->session->set_userdata('login'));{
		//xóa login
		$this->session->unset_userdata('login');
	}
	redirect(admin_url('login'));
}


}