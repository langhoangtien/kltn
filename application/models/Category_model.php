<?php


class Category_model extends My_model
{
    var $table='category';
	public $category = 'category';   
    private $attribute = 'attribute';   

	function __construct() {
        parent::__construct();
    }

    function join($arrParams="") {
    	
    	$this->db->select('category.*,attribute.manufacture,admin.name as admin_name');
        $this->db->from('category ');
        $this->db->join(' attribute', 'attribute.id = category.attribute_id','left');
        $this->db->join('admin','category.admin_id=admin.id','left');
        if(!empty($arrParams['id']))
        {
            $this->db->where('id',$arrParams['id']);
        }
        if(!empty($arrParams['name']))
        {
            $this->db->where('category.name',$arrParams['name']);
        }
         if(!empty($arrParams['limit']))
        {
            $this->db->limit($arrParams['limit'],$arrParams['offset']);
        }
        
    	$query = $this->db->get();
        return $query->result();


    }

    function join_admin()
    {
        $this->db->select('category.*,admin.name')->from('category ')->join(' admin ', 'admin.id = category.admin_id');
         $query = $this->db->get();
        return $query->result();
    }

}?>