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
			if($condition)
				$this->db->where($condition);			
			$this->db->order_by('submit_date','desc');
			$qry = $this->db->get('tbl_designers_post_orders');
                        $row = $qry->result_array();
			return $row;
		}
		function get_client_message($improvementId){
            $this->db->where('id',$improvementId);
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
		
		function update_table()
    	{ 
        if($_SESSION['fname'] == '0' || $_SESSION['logo_web_id'] == '0')
        {
            die();
        }
        else
        {
			//echo '<pre>'; print_r($_SESSION); die;
            $q="select * from logo_web where logo_web_id=".@$_SESSION['logoWebId']; 
            $query = $this->db->query($q); 
			
            if(($query->num_rows())>0)
            {
                $row = $query->row();
				
                    $submit_date = date("Y-m-d H:i:s",mktime (gmdate("H")+5,gmdate("i")+45,gmdate("s"),gmdate("m"),gmdate("d"),gmdate("Y")));

					$data = array('fname'=>$row->fname,
								  'lname'=>$row->lname,
								  'company_name'=>$row->company_name,
								  'phone_no'=>$row->phone_no,
								  'email_id'=>$row->email_id,
								  'cmp_logo_name'=>$row->cmp_logo_name,
								  'business_detail'=>$row->business_detail,
								  'package'=>'Custom Package',
								  'price'=>$_SESSION['subtotal'],
								  'site_id'=>$row->site_id,
								  'des_status'=>$row->des_status,
								  'payment'=>'1',
								  'submit_date'=>$submit_date);
					
                    //inserting logo_web            
                    $this->db->insert('logo_web', $data);
					$row_data['logo_id'] = $this->db->insert_id();
					//echo '<pre>'; print_r($data); die;
                    
					$data_1 = array('logo_24hr'=>$_SESSION['extra_package'],
								  'email'=>$row->email_id,
								  'payment' => '1',
								  'logo_web_id'=>$row_data['logo_id'],
								  'submit_date'=>$submit_date);
					$this->db->insert('order_extra', $data_1);
					
					//send message here
					$this->load->library('email');
					$this->email->set_newline("\r\n");
					$config['protocol'] = 'sendmail';
					$config['mailpath'] = '/usr/sbin/sendmail';
					$config['charset'] = 'iso-8859-1';
					$config['wordwrap'] = TRUE;
					$config['mailtype'] = 'html'; 
					$this->email->initialize($config);
					$row_data['rows'] = $query->row();
					$message = $this->load->view('emails/conformation', $row_data, true);
										
					$this->email->from(@$row->email_id,@$row->fname." ".$row->lname);
					$this->email->subject('Telephonepay.biz Client Payment Status 1');
					$this->email->message($message);
					//$this->email->to('programmersuman@hotmail.com');
					$this->email->to('demigod.immortal@gmail.com');
					$this->email->send();
					$this->email->clear();
					
					$this->session_unset_cart();
					//echo '<pre>'; print_r($_SESSION); die;
					//echo '<pre>'; print_r($row->email_id); die;
					//echo $lastId; die;
					/*$config = Array(
						'protocol' => 'smtp',
						'smtp_host' => 'smtp.vianet.com.np',
						'smtp_port' => 25,
						'smtp_user' => 'demigod.immortal@gmail.com', // change it to yours
						'smtp_pass' => '*********', // change it to yours
						'mailtype' => 'html',
						'charset' => 'iso-8859-1',
						'wordwrap' => TRUE
					   );
					   
					$row_data['rows'] = $query->row();
					$message = $this->load->view('emails/conformation', $row_data, true);	

					$this->load->library('email', $config);
					$this->email->set_newline("\r\n");
					$this->email->from('demigod.immortal@gmail.com'); // change it to yours
					$this->email->to('programmersuman@hotmail.com');// change it to yours
					$this->email->subject('Localhost mail testing');
					$this->email->message($message);
					$this->email->send();
					$this->email->clear();
					echo 'suman'; die;*/
					//$this->load->view('client/thankyou_1');
            }
            else
            {
                die("Sorry, Record Not Found!!");
            }
        }        
    }
	
	function session_unset_cart(){
		//echo COUNTRY; die;
		$q="select * from logo_web order by logo_web_id DESC LIMIT 1"; 
		$query = $this->db->query($q); 
		$row = $query->row();
		//echo '<pre>'; print_r($row->fname); die;
		//till here	
		$mailbody="<br><br>Dear ".$row->fname.",";
		$mailbody=$mailbody."<br><br>Thank you for your payment.";
		$mailbody=$mailbody."<br><br>We have successfully received your print works order.  You will receive your print order within 7-10 business days.";		
		$mailbody=$mailbody."<br><br>Thank You";
		$mailbody=$mailbody."<br><br>Best Wishes";
		$mailbody=$mailbody."<br><br>Admin Staff";
		/// send mail here
		// send message here
		
		/*$config = Array(
						'protocol' => 'smtp',
						'smtp_host' => 'smtp.vianet.com.np',
						'smtp_port' => 25,
						'smtp_user' => 'demigod.immortal@gmail.com', // change it to yours
						'smtp_pass' => '*********', // change it to yours
						'mailtype' => 'html',
						'charset' => 'iso-8859-1',
						'wordwrap' => TRUE
					   );
		$this->load->library('email', $config);*/
		$this->load->library('email');
		$this->email->set_newline("\r\n");
		$config['protocol'] = 'sendmail';
		$config['mailpath'] = '/usr/sbin/sendmail';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;
		$config['mailtype'] = 'html'; 
		$this->email->initialize($config);
		$this->email->from('<'.ORDER_MAIL.'>','Logo Admin');
		$this->email->subject('Your print order is received.');
		$message = $mailbody;    	
		$this->email->message($message);
		$this->email->to($row->email_id);
		$this->email->send();
		$this->email->clear();
		//if(isset($_GET['authentication_code']) && $_GET['authentication_code'] != "")
		//{ 
			if(COUNTRY == 'USA')
			{
				$jetpay_msg = 'The Client '.$row->fname.' has paid this payment form <strong>Jetpay</strong>.<br /><br />
				<strong>Other Details:</strong> <br /><br />
				Order NO. -> '.@$row->logo_web_id.'<br />
				Package ->Custom Package<br />
				Company ->'.$row->company_name.'<br />
				Email ->'.$row->email_id.'<br />
				';
				
				/*$config = Array(
						'protocol' => 'smtp',
						'smtp_host' => 'smtp.vianet.com.np',
						'smtp_port' => 25,
						'smtp_user' => 'demigod.immortal@gmail.com', // change it to yours
						'smtp_pass' => '*********', // change it to yours
						'mailtype' => 'html',
						'charset' => 'iso-8859-1',
						'wordwrap' => TRUE
					   );
				$this->load->library('email', $config);*/
				
				$this->email->from($row->email,$row->fname);
				$this->email->subject('LDG.COM JETPAY PAYMENT');
				$this->email->message($jetpay_msg);
				//$this->email->to('jagdesh010@gmail.com');
				$this->email->to('demigod.immortal@gmail.com');
				$this->email->send();
				$this->email->clear(); 
				/*$this->email->from($row->email,$row->fname);
				$this->email->subject('LDG.COM JETPAY PAYMENT');
				$this->email->message($jetpay_msg);
				$this->email->to('demigod.immortal@gmail.com');
				//$this->email->to('dinanewa@hotmail.com');
				$this->email->send();
				$this->email->clear(); 
				$this->email->from($row->email,$row->fname);
				$this->email->subject('LDG.COM JETPAY PAYMENT');
				$this->email->message($jetpay_msg);
				$this->email->to('demigod.immortal@gmail.com');
				//$this->email->to('anitabade@outlook.com');
				$this->email->send(); 
				$this->email->clear();*/                        
			}
		
		//for unsetting all the cart session
		$row=23;

		for($i=12;$i<$row-2;$i++)
		{		
			$opt='opt'.$i;
			$opta='opta'.$i;
			$extraopt='extraopt'.$i;	
			if(isset($_SESSION[$opt]) || isset($_SESSION[$opta]) || isset($_SESSION[$extraopt]) || isset($_SESSION[$extraopt])){
				unset($_SESSION[$opt]);
				unset($_SESSION[$opta]);
				unset($_SESSION[$extraopt]);
				unset($_SESSION[$extraopt]);
			}
		}
		for($i=1;$i<9;$i++){
			$select='select'.$i;
			if(isset($_SESSION[$select])){
				unset($_SESSION[$select]);
			}
		} 
		unset($_SESSION['rowcoun']);
		unset($_SESSION['priceValue']);
		unset($_SESSION['subtotal']);
		unset($_SESSION['amount']);
		unset($_SESSION['visiteda']);
		unset($_SESSION['cardnum']);
		unset($_SESSION['CVV2']);
		unset($_SESSION['rnum']);
		unset($_SESSION['address1']);
		unset($_SESSION['city']);
		unset($_SESSION['state']);
		unset($_SESSION['zip']);
		unset($_SESSION['name']);
		unset($_SESSION['exp_month']);
		unset($_SESSION['exp_year']);
		$this->load->view('client/thankyou_1');
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
	}}
?>