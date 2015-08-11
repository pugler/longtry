<?php 

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Album_model extends CI_Model {

    public function __construct() {
        parent::__construct();

		$this->db = $this->load->database("default" , TRUE);	
    }

    public function get_album_list($param=array()) {
    	$this->db->select('*');
    	$this->db->from('album');
    	$this->db->where('status',1);
    	if(!empty($param['limit'])) {
    		$this->db->limit($param['limit']);
    	}

    	if(empty($param['order'])) {
    		$this->db->order_by('album_create_date');
    	}

    	$query = $this->db->get();

    	return $query->result_array();
    }

    public function get_album_detail($param) {
    	$this->db->select('*');
    	$this->db->from('album');
    	$this->db->where('album_id',$param['album_id']);
    	$this->db->where('status',1);

    	$query = $this->db->get();
    	return $query->row_array();
    }
}

?>
