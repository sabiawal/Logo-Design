<?php 
class Clientmodel extends CI_Model {
    	
		function __construct(){
			parent::__construct();		
		}	
		
		//check valid username and password
		function checkuser(){
			$where = array('username'=>trim($this->input->post('username')),'password'=>trim($this->input->post('password')),'active_status'=>'1');
			$this->db->where($where);
			$this->db->from('client_info');
			return $this->db->count_all_results();
		}	
		
		function getLoginDetails() {
			$where = array('username'=>trim($this->input->post('username')),'password'=>trim($this->input->post('password')),'active_status'=>'1');
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
		
		function getSample($logo_id,$condition=NULL){
			$this->db->where('logo_web_id',$logo_id);
                        $this->db->where('sent_to','client');
			if($condition){
				$this->db->where($condition);			
			}
			$this->db->order_by('submit_date','desc');
			$qry = $this->db->get('tbl_designers_post_orders');
                        $row = $qry->result_array();
                        //echo $this->db->last_query();
			return $row;
		}
		function get_client_message($improvementId){
            $this->db->where('id',$improvementId);
            $this->db->order_by('submit_date','desc');
            $qry = $this->db->get('client_improvement');
            $row = $qry->result_array();
            return $row;
		}
		function get_client_message_logo($improvementId){
            $this->db->where(array('id'=>$improvementId, 'logo_or_stat !='=>'stat'));
            $this->db->order_by('submit_date','desc');
            $qry = $this->db->get('client_improvement');
            $row = $qry->result_array();
            return $row;
		}
		function get_client_message_stat($improvementId){
            $this->db->where(array('id'=>$improvementId, 'logo_or_stat'=>'stat'));
            $this->db->order_by('submit_date','desc');
            $qry = $this->db->get('client_improvement');
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
		
		function getClientDetails($logo_id){			
			$query="select * from logo_web where logo_web_id=".$logo_id; 
			$this->db->where('logo_web_id',$logo_id);
			$qry = $this->db->get('logo_web'); 
			return $qry->row();		
		} 
		 
		 function logo_slider($logo_web_id){
			$this->db->where('logo_web_id',$logo_web_id);			
			$this->db->order_by('submit_date','desc');
			$qry = $this->db->get('tbl_designers_post_orders');
			$row = $qry->result_array();
			
			$this->db->where('logo_web_id',$logo_web_id);			
			$qry1 = $this->db->get('tbl_logo_samples');
			$row_1 = $qry1->result_array();
			
			$row_data = array();
			foreach($row as $rw){
				if(!empty($rw['file_one'])){
				$row_data[] = $rw['file_one'];
				}
				if(!empty($rw['file_two'])){
				$row_data[] = $rw['file_two'];
				}
				if(!empty($rw['file_three'])){
				$row_data[] = $rw['file_three'];
				}
				if(!empty($rw['file_four'])){
				$row_data[] = $rw['file_four'];
				}
				if(!empty($rw['file_five'])){
				$row_data[] = $rw['file_five'];
				}
				if(!empty($rw['file_six'])){
				$row_data[] = $rw['file_six'];
				}
				if(!empty($rw['file_seven'])){
				$row_data[] = $rw['file_seven'];
				}
				if(!empty($rw['file_eight'])){
				$row_data[] = $rw['file_eight'];
				}
				if(!empty($rw['file_nine'])){
				$row_data[] = $rw['file_nine'];
				}
				if(!empty($rw['file_ten'])){
				$row_data[] = $rw['file_ten'];
				}
				if(!empty($rw['file_eleven'])){
				$row_data[] = $rw['file_eleven'];
				}
				if(!empty($rw['file_twelve'])){
				$row_data[] = $rw['file_twelve'];
				}
				if(!empty($rw['file_thirteen'])){
				$row_data[] = $rw['file_thirteen'];
				}
				if(!empty($rw['file_14'])){
				$row_data[] = $rw['file_14'];
				}
				if(!empty($rw['file_15'])){
				$row_data[] = $rw['file_15'];
				}
			}
			foreach($row_1 as $ro_w){
				if(!empty($ro_w['sample_name']))
				$row_data[] = $ro_w['sample_name'];
			}
			return $row_data;
		}
		function logo_slider_new($logo_web_id){
			
			 $this->db->where(array('logo_web_id'=>$logo_web_id,'sample_type'=>'logo','sent_to'=>'client'));
			 $this->db->order_by('id','desc');			
			$qry1 = $this->db->get('tbl_logo_samples');
			$row_1 = $qry1->result_array();
			
			$row_data = array();
			
			foreach($row_1 as $ro_w){
				if(!empty($ro_w['sample_name']))
				$row_data[] = $ro_w['sample_name'];
			}
			return $row_data;
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
			$this->db->order_by($orderBy,'RANDOM');
		
		if($group_by)
		  $this->db->group_by($group_by);
		$query = $this->db->get( $table ); 
		
		return $query->result(); 
	}
	function package_service_details(){
		$this->db->select('*');
		$this->db->from('tbl_packages as p');
		$this->db->join('tbl_services as s' , 's.package_id = p.package_id', 'LEFT');
		$this->db->where(array('s.upgrade_status'=>'show')); 
		$this->db->order_by('p.package_order','ASC');
		$this->db->order_by('s.service_order','ASC');
   		$query = $this->db->get()->result(); 
   		return $query;
   		
	}
	function checkpackagelist($package_id){
		$this->db->select('*');
		$this->db->from('tbl_packages as p');
		$this->db->where(array('p.package_id'=>$package_id,'package_status'=>'active')); 
   		$query = $this->db->get()->row();
   		return $query;

	}

	

     function sendmail_upgrade_client(){
$this->db->select('s.service_name,pack.package_price_uk,pack.cut_price_co_uk,pack.package_id');
          $this->db->from('tbl_services as s');

    $this->db->join("tbl_packages as pack",'pack.package_id = s.package_id','LEFT');
    $arrays = array('pack.package_name' => $_SESSION['upgraded_package_name'],'s.upgrade_status'=>'show');
  $this->db->where($arrays); 
  // $this->db->group_by('pack.package_id','ASC');
    $service = $this->db->get()->result();

foreach($service as $s){
	 $data['service']['package_price']=$s->package_price_uk;
	 $data['service']['package_cut']=$s->cut_price_co_uk;
	 $data['service']['service_name'][$s->service_name]=$s->service_name;
}
// echo"<pre>";print_r($data);print_r($service);die;
     	$this->load->library('email');
                    $this->email->set_newline("\r\n");
                    $config['protocol'] = 'sendmail';
                    $config['mailpath'] = '/usr/sbin/sendmail';
                    $config['charset'] = 'iso-8859-1';
                    $config['wordwrap'] = TRUE;
                    $config['mailtype'] = 'html';
                    $this->email->initialize($config);

                    // send email for client about payment
					$message= $this->load->view('client/upgrade_emailtemplate/client.php', $data,TRUE);
					$emailAddress=$_SESSION['c_email'];

                    $this->email->from('info@logodesignguarantee.co.uk');
                    $this->email->subject('Your Upgraded Package');
                    $this->email->message($message);
                    $this->email->to($emailAddress);
                    $this->email->send();
                    $this->email->clear();


		//$to='bks_prajapati@hotmail.com';

     }

     function sendmail_upgrade_admin(){

     	$this->load->library('email');
                    $this->email->set_newline("\r\n");
                    $config['protocol'] = 'sendmail';
                    $config['mailpath'] = '/usr/sbin/sendmail';
                    $config['charset'] = 'iso-8859-1';
                    $config['wordwrap'] = TRUE;
                    $config['mailtype'] = 'html';
                    $this->email->initialize($config);

                    // send email for client about payment
					 $message= $this->load->view('client/upgrade_emailtemplate/admin.php', '',TRUE);
					$emailAddress='info@logodesignguarantee.co.uk, bikash.designoffshore@gmail.com';
                    $this->email->from('info@logodesignguarantee.co.uk');
                    $this->email->subject('Package Upgrade by Client');
                    $this->email->message($message);
                    $this->email->to($emailAddress);
                    $this->email->send();
                    $this->email->clear();


     }
}
?>