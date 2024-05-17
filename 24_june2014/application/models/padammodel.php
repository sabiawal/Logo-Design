<?php 
class Padammodel extends CI_Model {
   
        
    function __construct(){
        // Call the Model constructor
        parent::__construct();
    }
    
    function getLogoDetails($logo_id){			
			//$query="select * from logo_web where logo_web_id=".$logo_id; 
			$this->db->where('logo_web_id',$logo_id);
			$qry = $this->db->get('logo_web');          
			return $qry->row();		
		}
	function getImpIds() {
		$sql = "select * from customer_thred where improvementId < 57583 and improvementId > 57490";
		$qry = $this->db->query($sql);
		$row = $qry->result();
		return $row;
	}
	
	function insert($table,$insertArray) {
			$this->db->insert($table,$insertArray);	
			return $this->db->insert_id();
		}
}
?>