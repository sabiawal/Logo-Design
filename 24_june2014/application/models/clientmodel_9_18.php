<?php 
class Clientmodel extends CI_Model {
    	
		function __construct(){
			parent::__construct();		
		}	
		
		//check valid username and password
		function checkuser(){
			$where = array('username'=>trim($this->input->post('username')),'password'=>trim($this->input->post('password')));
			$this->db->where($where);
			$this->db->from('client_info');
			return $this->db->count_all_results();
		}	
		
		function getLoginDetails() {
			$where = array('username'=>trim($this->input->post('username')),'password'=>trim($this->input->post('password')));
			$this->db->where($where);
			$query = $this->db->get('client_info');
			return $query->row();
		}
				
		function getLogoDetails($logo_id){			
			$query="select * from logo_web where logo_web_id=".$logo_id; 
			$this->db->where('logo_web_id',$logo_id);
			$qry = $this->db->get('logo_web');          
			return $qry->row();		
		}
		
		function getSample($logo_id,$condition=NULL) {
			$this->db->where('logo_web_id',$logo_id);
			if($condition)
				$this->db->where($condition);			
			$this->db->order_by('submit_date','desc');
			$qry = $this->db->get('tbl_designers_post_orders');
                        $row = $qry->result_array();
			return $row;
		}
		
		function insert($table,$insertArray) {
			$this->db->insert($table,$insertArray);	
			return $this->db->insert_id();
		}
		
		function update($table,$insertArray,$condition) {
			$this->db->update($table,$insertArray,$condition);	
			//return $this->db->insert_id();
		}
		
		function getFinalFiles($condition=NULL) {
			$this->db->where('logo_web_id',$_SESSION['logoWebId']);
			if($condition)
				$this->db->where($condition);
			$this->db->where('sent','sent');
			$qry = $this->db->get('tbl_designers_final');
			return $qry->result_array();
		}
                
                //logo vote system part
                function insertMessage($table,$insertArray) {
                    $message1 = $insertArray['message1'];
                    $message2 = $insertArray['message2'];
                    $logoWebId = $insertArray['LogoWebId'];
                    $this->db->where('logo_web_id',$logoWebId);
                    $query = $this->db->get($table);
                    $row = $query->result_array();
                    $data = array('client_message'=>$message1,'business_aim'=>$message2,'logo_web_id'=>$logoWebId);
                    if(empty($row)){
                    $this->db->insert('message_template', $data); 
                    }
                    else{ 
                    $this->db->where('logo_web_id', $logoWebId);
                    $this->db->update('message_template', $data);  
                    }
		}
                
                function getLogoSample($logo_id) {
			$this->db->where('logo_web_id',$logo_id);
			
			$this->db->order_by('submit_date','desc');
			$qry = $this->db->get('tbl_designers_post_orders');
                        $row = $qry->result_array();
			return $row;
		}
        
        // get package description by package id
        function getpackages($package_id)
        {
            $q = $this->db->query("SELECT * FROM `new_sub_packages` where `package_id`=$package_id");           
            if($q->num_rows() > 0)
            { 
                foreach($q->result() as $row)
                {
                    $data[] = $row;
                }
                return $data;         
            }
        }
		
		function getById( $table, $fieldId, $id, $select='*') 
		{ 
			$this->db->select($select);
			$this->db->where( $fieldId ." = '". $id ."'" ); 
			$query = $this->db->get( $table ); 
			return $query->row(); 
		}
		function countTotal($table, $where=NULL)
		{
			if($where)
				$this->db->where($where);
			$this->db->from($table);
			return $this->db->count_all_results();
		}
		
	function getAll( $table, $orderBy=NULL, $where=NULL, $select=NULL, $group_by=NULL)
	{ 
		if($select)
		 {
		   $this->db->select($select);
		 }
		
		if($where)
			$this->db->where($where);
		if ($orderBy)
			$this->db->order_by($orderBy);
		
		if($group_by)
		  $this->db->group_by($group_by);
		$query = $this->db->get( $table ); 
		
		return $query->result(); 
	}
}
?>