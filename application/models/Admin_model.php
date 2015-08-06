<?php 

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function __construct() {
        parent::__construct();

		$this->db = $this->load->database("default" , TRUE);	
    }

    public function add_album($param) {
    	$this->db->insert('album', $param);
    	return $this->db->insert_id();        
    }
}

?>
