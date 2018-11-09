<?php
class Customer_model extends My_model
{
   var $table='customer';
    public $customer =   'customer';
    private $interest_rate = 'interest_rate'; 
    private $category=  'category'; 


    function __construct() {
        parent::__construct();
    }

    function join($arrParams="") {
        
        $this->db->select('customer.*,interest_rate.name as interest_name ,category.name as category_name');
        $this->db->from('customer ');
        $this->db->join('interest_rate', 'interest_rate.id = customer.interested_id','left');
        $this->db->join('category','category.id=customer.category_id','left');
        if(!empty($arrParams['id']))
        {
            $this->db->where('id',$arrParams['id']);
        }
        if(!empty($arrParams['fullname']))
        {
            $this->db->where('customer.fullname',$arrParams['fullname']);
        }
         if(!empty($arrParams['limit']))
        {
            $this->db->limit($arrParams['limit'],$arrParams['offset']);
        }
        
        $query = $this->db->get();
        return $query->result();


    }

    #Thêm mới khách hàng
    function add($data)
    {
        if($this->db->insert('customer', $data))
            return $this->db->insert_id();
        else
            return 0;
    }

    #Lấy danh sách khách hàng
    function get_list_customer()
    {
        $this->db->select();
        $this->db->from('customer');
        return $this->db->get()->result_array();
    }
}

?>