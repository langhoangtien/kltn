<?php 
class Category extends My_controller{
	function __construct(){
		parent:: __construct();
		$this->load->Model('Category_model');
	}
	function index()

{
	// echo $this->uri->segment(5,1); die();
	$this->load->library('pagination');
	$this->load->model('Admin_model');
	$arrParams = $this->input->get();
	$count = array();
	$count['id'] = $this->input->get('id') ? $this->input->get('id') : "";
	$count['name'] = $this->input->get('name') ? $this->input->get('name') : "";
	$this->load->library('pagination');
	$config['base_url'] = admin_url('category/index');
	$config['total_rows'] = $total= count($this->Category_model->join($count));
	$config['use_page_numbers'] = TRUE;
	$config['per_page'] = 3;
	$arrParams['limit'] = $config['per_page'];
	$arrParams['offset'] = intval(($this->uri->segment(4,1)-1)*$config['per_page']);
	$this->pagination->initialize($config);
	$this->data['page']= $this->pagination->create_links();
	$list = $this->Category_model->join($arrParams);		 
	$message=$this->session->flashdata('message');
	$this->data['message']=$message;
	$this->data['temp']='admin/category/index';
	$this->data['list']= $list;	
	//$this->data['num']= $num;
	$this->data['total'] = $total;
	$this->load->view('admin/main',$this->data);       
}

public function add()
{
	$this->load->library('form_validation');
	$this->load->helper('form');
	$this->load->model('Attribute_model');
	$ds= $this->Attribute_model->get_list();
	$this->load->model('Admin_model');
	$list = $this->Admin_model->get_list();

	$data = array();
	
	if($this->input->post())
	{
		$this->form_validation->set_rules('name','tên sản phẩm','required');
		$this->form_validation->set_rules('note','ghi chú','required');
		if($this->form_validation->run())

		{
			
			$name=$this->input->post('name');
			$note=$this->input->post('note');
			$thuoctinh=$this->input->post('thuoctinh');
			$tenadmin=$this->input->post('tenadmin');
			$data=array(
				'name' => $name,
				'note' =>$note,
				'attribute_id' =>$thuoctinh,
				'admin_id' =>$tenadmin
			
			);
			$this->load->Model('Category_model');
			if($this->Category_model->create($data))
				{
					$this->session->set_flashdata('message','thêm mới thành công');
					redirect (admin_url('category'));
				}
				else{
					$this->session->set_flashdata('message','thêm mới không thành công');
				}
		}
	}
	
	$this->data['temp']='admin/category/add';
	$this->data['list'] = $list;

	$this->data['ds'] = $ds;
	
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
	$this->load->model('Attribute_model');
	$ds= $this->Attribute_model->get_list();
	$this->load->model('Admin_model');
	$list = $this->Admin_model->get_list();
	$info=$this->Category_model->get_info($id);
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
		$this->form_validation->set_rules('name','Tên','required');
		$this->form_validation->set_rules('note','ghi chú','required');
		
		if($this->form_validation->run())
		{
				$name=$this->input->post('name');
				
				$note=$this->input->post('note');
				$thuoctinh=$this->input->post('thuoctinh');
				$tenadmin=$this->input->post('tenadmin');
				$data=array(
					'name' => $name,
					'note' =>$note,
					'attribute_id' =>$thuoctinh,
					'admin_id' =>$tenadmin
				);	
				if($this->Category_model->update($id,$data))
				{
					$this->session->set_flashdata('message','cập nhật dữ liệu  thành công');
				}
				else{
					$this->session->set_flashdata('message','cập nhật dữ liệu  không thành công');
				}
				redirect (admin_url('category'));
		}
	}
	
	$this->data['temp']='admin/category/edit';
	//tham so truyen vao $this->data
	$this->load->view('admin/main',$this->data);
}
function delete()
{
	$id=$this->uri->segment('4');
	$id=intval($id);
	$info=$this->Category_model->get_info($id);
	if(!$info){
		$this->session->set_flashdata('message','khong ton tai ');
		redirect(admin_url('category'));	
	}
	//thuc hien xoa
	$this->Category_model->delete($id);
	$this->session->set_flashdata('message','xoa du lieu thanh cong');
	redirect(admin_url('admin'));
}
function search()
    {
        if($this->uri->rsegment('3') == 1)
        {
            //lay du lieu tu autocomplete
            $key =  $this->input->get('term');
        }else{
            $key =  $this->input->get('key-search');
        }
        pre($key);
        
        $this->data['key'] = trim($key);
        $input = array();
        $input['like'] = array('name', $key);
        $this->load->model('Category_model');
        $list = $this->Category_model->get_list($input);
        $this->data['list']  = $list;
        
        if($this->uri->rsegment('3') == 1)
        {
            //xu ly autocomplete
            $result = array();
            foreach ($list as $row)
            {
                $item = array();
                $item['id'] = $row->id;
                $item['label'] = $row->name;
                $item['value'] = $row->name;
                $result[] = $item;
            }
            //du lieu tra ve duoi dang json
            die(json_encode($result));
        }else{

            //load view
            $this->data['temp'] = 'site/Category/search';
           	$this->load->view('admin/main',$this->data);
        }
	}
	

    
}