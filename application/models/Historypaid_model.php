<?php
class Historypaid_model extends My_model
{
	
	 var $table='historypaid';
	 public $history_interestrate = 'historypaid';   
    private $attribute = 'attribute';   

	function __construct() {
        parent::__construct();
    }

    function list_view() {
        $this->db->select("historypaid.*,customer.fullname,attribute.manufacture");
        $this->db->from('historypaid');
        $this->db->join('customer','customer.id=historypaid.customer_id');
        $this->db->join('attribute','attribute.id=historypaid.category_id');
        $query = $this->db->get();
        $row = $query->result();
        return $row;

    }
    function info($id){
        $this->db->select("customer.*");
        $this->db->from('historypaid');
        $this->db->join('customer','customer.id=historypaid.customer_id');
        $this->db->join('attribute','attribute.id=historypaid.category_id');
        $this->db->where('historypaid.id',$id);
        $query = $this->db->get();
        $row = $query->row();
        return $row;
    }
    function add_paid_historys($data) {
        $this->db->insert('paid_historys',$data);
        return $this->db->insert_id();
    }
    function list_paid_historys(){
        $this->db->select("customer.*");
        $this->db->from('historypaid');
        $this->db->join('customer','customer.id=historypaid.customer_id');
        $query = $this->db->get();
        $row = $query->result();
        return $row;
    }
    function join() {
    	/*$this->db->select($this->category . '.id,name,note,createdat,updatedat,attribute_id,createdby');
    	$this->db->from($this->category);
    	$this->db->select($this->attribute . '.manufacture');
    	$this->db->from($this->attribute);
    	*/
    	$this->db->select('history_interestrate.*,interest_rate.name,interest_rate.admin_id, interest_rate.createdat
    		')->from('history_interestrate ')->join(' interest_rate', 'interest_rate.id = history_interestrate.interestrate_id');
		//$this->db->get();

       // $this->db->join($this->attribute, $this->attribute . '.id = ' . $this->category . '.attribute_id','inner');
    	 $query = $this->db->get();
        return $query->result();


    }

    function join_admin()
    {
        $this->db->select('category.*,admin.name')->from('category ')->join(' admin ', 'admin.id = category.admin_id');
         $query = $this->db->get();
        return $query->result();
    }

   

}


