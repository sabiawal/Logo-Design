<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client_panel extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    public function __construct()
    {
        parent::__construct();
        // Your own constructor code				
		session_start();
		$this->load->model('clientmodel');
		$this->load->model('logodesignmodel');
		//print_r($this->session->all_userdata());
		
    }
	
	public function index(){
		if($this->uri->segment(2) != 'signin')
		{		
		if($_SESSION['c_id']){
			$this->load->view('client/logosamples');
		}else{
			$this->load->view('client/login');
		}
		}
	}
    //function to check valid user
		function checkuser(){
						
			//$username = $this->input->post('username');
			//$password = $this->input->post('password');
				
			$rowCount = $this->clientmodel->checkuser();			
			if($rowCount > 0){
				$row = $this->clientmodel->getLoginDetails();				
				$logoDetails= $this->clientmodel->getLogoDetails($row->logoWebId);																				
				$userdata = array('c_id'=>$row->id,'username'=>$row->companyName ,'logoWebId'=>$row->logoWebId,'c_email'=>@$logoDetails->email_id,'display_name' => @$logoDetails->fname.' '.@$logoDetails->lname);
				$this->session->set_userdata($userdata);
				$_SESSION['c_id'] = $row->id;
				$_SESSION['username'] = $row->companyName;
				$_SESSION['logoWebId'] = $row->logoWebId;
				$_SESSION['c_email'] = @$logoDetails->email_id;
				$_SESSION['display_name'] = @$logoDetails->fname.' '.@$logoDetails->lname;
				if($_SESSION['redirect_url'])
				{
					//die('part1');				
					redirect($_SESSION['redirect_url']);	
					echo "<script>window.location='".base_url().$_SESSION['redirect_url']."'</script>";		
					
				}
				else
				{
					//die('part2');	
					echo "<script>window.location='".base_url()."client_panel/logosamples'</script>";					
					redirect('client_panel/logosamples');
					
																	
				}
			}else{			
					//die('part3');
					
					$_SESSION['error_message'] = 'Invalid Username and/or Password'; 
					redirect('client_panel');
					echo "<script>window.location='".base_url()."client_panel'</script>";											
			}														
		}
		
		// when admin logs out . 
		function logout(){	
			$this->db->delete('logo_samples_to_client', array('logo_web_id' => $_SESSION['logoWebId']));	
			session_destroy();	
			$this->session->sess_destroy();						
			redirect('client_panel');
		}				
		
    public function logosample(){
			if(!$_SESSION['c_id']){
				$url = $this->uri->uri_string(); 
				$_SESSION['redirect_url'] = $url;
				redirect('client_panel');			
			}
			$condition = "(file_one != '' or file_two != '' or file_three != '' or file_four != '' or file_14 != '' or file_15 != '')";
			$data['samples'] = $this->clientmodel->getSample($_SESSION['logoWebId'],$condition);
			$data['id'] = $_SESSION['logoWebId'];
			$this->load->view('client/logo_sample',$data);
	}
	public function businesscard(){
        if(!$_SESSION['c_id']){
            $url = $this->uri->uri_string(); 
			$_SESSION['redirect_url'] = $url;
            redirect('client_panel');			
        }
		$condition = "(file_five != '' or file_six != '' or file_seven != '')";
		$data['samples'] = $this->clientmodel->getSample($_SESSION['logoWebId'],$condition);
		$data['id'] = $_SESSION['logoWebId'];
        $this->load->view('client/business_card_sample',$data);
    }	
	public function letterhead(){
        if(!$_SESSION['c_id']){
            $url = $this->uri->uri_string(); 
			$_SESSION['redirect_url'] = $url;
            redirect('client_panel');			
        }
		$condition = "(file_eight != '' or file_nine != '' or file_ten != '')";
		$data['samples'] = $this->clientmodel->getSample($_SESSION['logoWebId'],$condition);
		$data['id'] = $_SESSION['logoWebId'];
        $this->load->view('client/letterhead_sample',$data);
    }	
	public function complement(){
        if(!$_SESSION['c_id']){
            $url = $this->uri->uri_string(); 
			$_SESSION['redirect_url'] = $url;
            redirect('client_panel');			
        }
		$condition = "(file_eleven != '' or file_twelve != '' or file_thirteen != '')";
		$data['samples'] = $this->clientmodel->getSample($_SESSION['logoWebId'],$condition);
		$data['id'] = $_SESSION['logoWebId'];
        $this->load->view('client/complement_sample',$data);
    }
    public function revision(){
       if(!$_SESSION['c_id'] or !$_SESSION['logoWebId']){
            $url = $this->uri->uri_string(); 
			$_SESSION['redirect_url'] = $url;
            redirect('client_panel');			
        }
		if(isset($_SESSION['logoWebId']) && ($_SESSION['logoWebId'] <= 0 or $_SESSION['logoWebId'] == ''))
		{
				session_destroy();	
				$this->session->sess_destroy();										
				$_SESSION['error_message'] = 'Sorry! There is something wrong on your login details. Please contact with logo admin.';
				redirect('client_panel');
				echo "<script>window.location='".base_url()."client_panel'</script>";
				die();		
		}
		if($_SESSION['c_id'] > 0 && $_SESSION['logoWebId'] > 0) {
		//Added by Jigen 29-Nov Sending revision message to corresponding sites email address
		$email = $_SESSION['c_email']; //senders e-mail adress
		
		if (COUNTRY=='USA')
			$recipient = "revisions@logodesignguarantee.com"; //recipient
		else
			$recipient = "revisions@logodesignguarantee.co.uk"; //recipient
									
		$message = $this->input->post('msgcustomer'); //mail body
		$subject = "Revision request from ".$_SESSION['username']. ", Order No.: ".$_SESSION['logoWebId'];
		//$headers ='MIME-Version: 1.0' . "\r\n";
		//$headers.='Content-type: text/html; charset=iso-8859-1' . "\r\n";
		//$headers.="From:".$email."\r\n"; //optional headerfields
		//mail($recipient, $subject, $mail_body, $headers);

		// For test
		
		/*$recipient = 'padamkp1@hotmail.com';
		
		$sessionmsg = '';	
		foreach($_SESSION as $key=>$val) {
			$sessionmsg .= $key.'='.$val.'::';	
		}
		$mail_body = $this->input->post('msgcustomer').'::::'.$sessionmsg; //mail body	
		mail($recipient, $subject, $mail_body, $header);*/
        $mime_boundary="==Multipart_Boundary_x".md5(mt_rand())."x";
        // now we'll build the message headers
        $headers = "From: $email\r\n" .
        "MIME-Version: 1.0\r\n" .
          "Content-Type: multipart/mixed;\r\n" .
          " boundary=\"{$mime_boundary}\"";
        
        // next, we'll build the invisible portion of the message body
        // note that we insert two dashes in front of the MIME boundary 
        // when we use it
        $message.= "This is a multi-part message in MIME format.\n\n" .
        "--{$mime_boundary}\n" .
        "Content-Type: text/plain; charset=\"iso-8859-1\"\n" .
        "Content-Transfer-Encoding: 7bit\n\n" .
        $message . "\n\n";

        $attachments = array_filter(explode(",",$this->input->post('fileList')));
        
        if(count($attachments)>0 and !empty($attachments))
    	{
    		for($i=0;$i<count($attachments);$i++)
			{   			    
				if($attachments[$i]!='')
					{   
                        // if the upload succeded, the file will exist
                        if (file_exists("./admin_panel/upload/".$attachments[$i]))
                        {
                            // open the file for a binary read
                            $file = fopen("./admin_panel/upload/".$attachments[$i],'r');
                            $type = mime_content_type("./admin_panel/upload/".$attachments[$i]);
                            // read the file content into a variable
                            $data = fread($file,filesize("./admin_panel/upload/".$attachments[$i]));
                            // close the file
                            fclose($file);
                            // now we encode it and split it into acceptable length lines
                            $data = chunk_split(base64_encode($data));
                         
                            // now we'll insert asboundary to indicate we're starting the attachment
                            // we have to specify the content type, file name, and disposition as
                            // an attachment, then add the file content.
                            // NOTE: we don't set another boundary to indicate that the end of the 
                            // file has been reached here. we only want one boundary between each file
                            // we'll add the final one after the loop finishes.
                            $message .= "--{$mime_boundary}\n" .
                            "Content-Type: {$type};\n" .
                            " name=\"{$attachments[$i]}\"\n" .
                            "Content-Disposition: attachment;\n" .
                            " filename=\"{$attachments[$i]}\"\n" .
                            "Content-Transfer-Encoding: base64\n\n" .
                            $data . "\n\n";
                        }
                    }
			}
            // here's our closing mime boundary that indicates the last of the message
            $message.="--{$mime_boundary}--\n";
    	}
        // now we just send the message
        /**
        * if (@mail($recipient, $subject, $message, $headers))
        *       echo "Message Sent";
        *    else
        *       echo "Failed to send";
        */
        mail($recipient, $subject, $message, $headers);
        
        
        $setImageName=$this->input->post('fileList');		 
		$d=date("Y-m-d H:i:s",mktime (gmdate("H")+5,gmdate("i")+45,gmdate("s"),gmdate("m"),gmdate("d"),gmdate("Y")));
		$data = $this->clientmodel->getLogoDetails($_SESSION['logoWebId']);
        $improvement_send_id = $data->email_id;
		$insertArray = array('fname' => $data->fname,
		'lname' => $data->lname,
		'company_name' => $data->company_name,
		'phone_no' => $data->phone_no,
		'email_id' => $data->email_id,
		'se_email_id' => $data->se_email_id,
		'cmp_logo_name' => $data->cmp_logo_name,
		'tagline' => $data->tagline,
		'business_detail' => $data->business_detail,
		'm5_colors' => $data->m5_colors,
		'colors' => $data->colors,
		'm5_no_colors' => $data->m5_no_colors,
		'no_colors' => $data->no_colors,
		'idea_of_clint' => $this->input->post('msgcustomer'),
		'contact_details' => $data->contact_details,
		'web' => $data->web,
		'brouchure' => $data->brouchure,
		'options' => $data->options,
		'web_gold' => $data->web_gold,
		'web_elite' => $data->web_elite,
		'package' => $data->package,
		'dollar' => $data->dollar,
		'price' => $data->price,
		'files' => $setImageName,
		'site_id' => $data->site_id,
		'submit_date' => $d,
		'ip' => $data->ip,
		'des_status' => $data->des_status,
		'status' => '4',
		'payment' => $data->payment,
		'assign' => $data->assign,
		'which' => 'latest',
		'sent_to' => $data->sent_to,
		'revisionRequestToDesigner' => $data->revisionRequestToDesigner,
		'logo_web_id' => $_SESSION['logoWebId'],
		'sentDate' => '',
		'canOrCannot' => 'canNotMakeRevisionRequest');	
		$form_both=$this->input->post('submit_revision');
		$impId = $this->clientmodel->insert('client_improvement',$insertArray);	
		
		$imp_id = $this->clientmodel->get_client_message($impId);
		//echo '<pre>'; print_r($imp_id[0]['id']); die;
		$insertArray_1 = array('designer_post_order_id' => $impId->id,
		'designer_id' => $imp_id[0]['assign'],
		'message' => $this->input->post('msgcustomer'),
		'del_status' => $data->des_status,
		'submit_date' => $d,
		'whichOne' => 'latest',
		'improvementId' => $imp_id[0]['id'],
		'sent_to' => $data->sent_to,
		'logo_web_id' => $_SESSION['logoWebId'],
		'sentDate' => $d);	
		
		//echo '<pre>'; print_r($imp_id[0]['assign']); die;
		
		//$impId1 = $this->clientmodel->insert('tbl_designers_post_orders',$insertArray_1);
		
		$countEffectedRows=$this->db->affected_rows();
		$insertArray1 = array('logo_web_id'=>$_SESSION['logoWebId'],
							'improvementId' => $impId,
							'message' => $this->input->post('msgcustomer'),
							'submit_date' => $d,
							'del_status' => '0');
		$this->clientmodel->insert('customer_thred',$insertArray1);	
		//echo $this->db->last_query();
		$this->clientmodel->update('logo_web',array('status'=>'4'),array('logo_web_id'=>$_SESSION['logoWebId']));	
		if(isset($_POST['submit_revision']))
        {
			date_default_timezone_set('GMT'); 
 			$current=date('Y-m-d H:i:s');
			//$data=array('costumer_improv_id'=>$impId,'rate'=>$this->input->post('rated-value'),'designeer_id'=>$data->assign,'current_time_gmt'=>$current);
			
			// Insert bonus amount if customer gives rating > than 8
			if($this->input->post('rated-value') == '9')
			$bonus = '50';
			elseif($this->input->post('rated-value') == '10')
			$bonus = '100';
			else
			$bonus = '0';
			$data=array('costumer_improv_id'=>$_SESSION['logoWebId'],'rate'=>$this->input->post('rated-value'),'designeer_id'=>$data->assign,'current_time_gmt'=>$current,'bonus_amount'=>$bonus);
			$this->clientmodel->insert('customer_rate',$data);
			/*$data=array('costumer_improv_id'=>$_SESSION['logoWebId'],'rate'=>$this->input->post('rated-value'),'designeer_id'=>$data->assign,'current_time_gmt'=>$current);
			$this->clientmodel->insert('customer_rate',$data);*/
            
            $this->load->library('email');
    		$this->email->set_newline("\r\n");
    		$config['protocol'] = 'sendmail';
    		$config['mailpath'] = '/usr/sbin/sendmail';
    		$config['charset'] = 'iso-8859-1';
    		$config['wordwrap'] = TRUE;
            $config['mailtype'] = 'html'; 
    		$this->email->initialize($config);
            
            $message = $this->load->view('emails/revision_email', '', true);                     
            $this->email->from('<'.INFO_MAIL.'>','Logo Admin');
            $this->email->subject('Thank You For Your Revision');
            $this->email->message($message);
            $this->email->to($improvement_send_id);
            //$this->email->to('jagdesh010@hotmail.com');
            $this->email->send();
            $this->email->clear();	
		}
		
		if($impId > 0){
			$_SESSION['success_message'] = 'Improvement have been assigned. We will be in touch within 48-72 hours. Thank you.'; 
		}
		else{
			// send message here
            $this->load->library('email');
    		$this->email->set_newline("\r\n");
    		$config['protocol'] = 'sendmail';
    		$config['mailpath'] = '/usr/sbin/sendmail';
    		$config['charset'] = 'iso-8859-1';
    		$config['wordwrap'] = TRUE;
            $config['mailtype'] = 'html'; 
    		$this->email->initialize($config);
    		$this->email->from('padamkp1@hotmail.com','Logo Admin');
    		$this->email->subject('Revision sent by client but will not display in admin panel');
    		$message = '<table border="0"><tr><td><strong>Logo Web Id:</strong></td><td>'.$_SESSION['logoWebId'].'</td></tr><tr><td><strong>Message:</strong></td><td>'.$this->input->post('msgcustomer').'</td></tr><tr><td><strong>Date:</strong></td><td>'.$d.'</td></tr><tr><td><strong>Attachment:</strong></td><td>'.$setImageName.'</td></tr></table>';    	
    		$this->email->message($message);
    		$this->email->to('padamkp@gmail.com');
    		$this->email->send();
            $this->email->clear();            
            
			$_SESSION['success_message'] = 'Sorry, Improvement has not been submitted successfully .Please try again.';  
		}
		
		redirect('client_panel/logosamples');
	
    }
		else
		{
			$sessionmsg = '';	
			foreach($_SESSION as $key=>$val) {
				$sessionmsg .= $key.'='.$val.'::';	
			}
			$browser = $this->browser();
			$recipient = "padamkp1@hotmail.com";
			$mail_body = "Browser:".$browser['name']." Version:".$browser['version']." Session:".$sessionmsg." Msg=".$this->input->post('msgcustomer'); //mail body
			$subject = "Revision request from ".$_SESSION['username']. ", Order No.: ".$_SESSION['logoWebId'];
			$header ='MIME-Version: 1.0' . "\r\n";
			$header.='Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$header.="From:".$email."\r\n"; //optional headerfields
			mail($recipient, $subject, $mail_body, $header);
			echo "<script>alert('Session has been expired. Please login to post revision.');</script>";
			session_destroy();	
			$this->session->sess_destroy();	
			redirect('client_panel');
			echo "<script>window.location='".base_url()."client_panel'</script>";
			die();	
		}
	
	}
    public function clientfinal(){
        if(!$_SESSION['c_id']){
            $url = $this->uri->uri_string(); 
			$_SESSION['redirect_url'] = $url;
            redirect('client_panel');			
        }

		$data['final'] = $this->clientmodel->getFinalFiles();
		//echo $this->db->last_query();
        $this->load->view('client/clientfinal',$data);
    }
	
	//My All test starts here
	public function send_to_friends(){ 
		if(isset($_GET['request_ids'])){
		$condition = "(file_one != '' or file_two != '' or file_three != '' or file_four != '' or file_five != '' or file_six != '' or file_seven != '' or file_eight != '' or file_nine != '' or file_ten != '' or file_eleven != '' or file_twelve != '' or file_thirteen != '' or file_14 != '' or file_15 != '')";
		$data['samples'] = $this->clientmodel->getLogoSample($_SESSION['logoWebId'],array('sent_to' => 'client'));
		$data['id'] = $_SESSION['logoWebId'];
        $this->load->view('client/send_to_friends',$data);
		}
		else{	
		if(!$_SESSION['c_id']){
            $url = $this->uri->uri_string(); 
			$_SESSION['redirect_url'] = $url;
            redirect('client_panel');			
        }
		$condition = "(file_one != '' or file_two != '' or file_three != '' or file_four != '' or file_five != '' or file_six != '' or file_seven != '' or file_eight != '' or file_nine != '' or file_ten != '' or file_eleven != '' or file_twelve != '' or file_thirteen != '' or file_14 != '' or file_15 != '')";
		$data['samples'] = $this->clientmodel->getLogoSample($_SESSION['logoWebId'],array('sent_to' => 'client'));
		$data['id'] = $_SESSION['logoWebId'];
        $this->load->view('client/send_to_friends',$data);
		}
    }
	
	public function logo_vote_feedback(){
            
		if(!$_SESSION['c_id']){
            $url = $this->uri->uri_string(); 
			$_SESSION['redirect_url'] = $url;
            redirect('client_panel');			
        }
		$select1=$this->db->query("select * from tbl_designers_post_orders where logo_web_id='".$_SESSION['logoWebId']."' order by submit_date desc")->result();
		$all_files = array();

		foreach($select1 as $sels){
		if(!empty($sels->file_one)){
		$file_one = $sels->file_one;
		}
		if(!empty($sels->file_two)){
		$file_two = $sels->file_two;
		}
		if(!empty($sels->file_three)){
		$file_three = $sels->file_three; 
		}
		if(!empty($sels->file_four)){
		$file_four = $sels->file_four;
		}
		if(!empty($sels->file_five)){
		$file_five = $sels->file_five;
		}
		if(!empty($sels->file_six)){ 
		$file_six = $sels->file_six;
		}
		if(!empty($sels->file_seven)){
		$file_seven = $sels->file_seven;
		}
		if(!empty($sels->file_eight)){ 
		$file_eight = $sels->file_eight;
		}
		if(!empty($sels->file_nine)){
		$file_nine = $sels->file_nine;
		}
		if(!empty($sels->file_ten)){
		$file_ten = $sels->file_ten;
		}
		if(!empty($sels->file_eleven)){ 
		$file_eleven = $sels->file_eleven;
		}
		if(!empty($sels->file_twelve)){
		$file_twelve = $sels->file_twelve; 
		}
		if(!empty($sels->file_thirteen)){
		$file_thirteen = $sels->file_thirteen;
		}
		if(!empty($sels->file_14)){
		$file_14 = $sels->file_14; 
		}
		if(!empty($sels->file_15)){
		$file_15 = $sels->file_15;
		}
		$all_files = array_merge($all_files, array_filter(array($file_one, $file_two, $file_three, $file_four, $file_five, $file_six, $file_seven, $file_eight, $file_nine, $file_ten, $file_eleven, $file_twelve, $file_thirteen, $file_14, $file_15)));
		$result = array_unique($all_files);  
                } 
                
		for($i=0;$i<count($all_files);$i++){
		$logos = array('logo_name'=>$all_files[$i],'logo_web_id'=>$_SESSION['logoWebId'],'submit_date'=>date('Y-m-d H:i:s'));
		$this->db->insert('logo_samples_to_client',$logos);	
		}
		
		
		 if(!$_SESSION['c_id']){
            $url = $this->uri->uri_string(); 
			$_SESSION['redirect_url'] = $url;
            redirect('client_panel');			
        }                
        $this->load->view('client/logo_vote_feedback');
    }
	
    
    public function logo_send_mail()
	{
		$logo_names = $_POST['checked_all'];
		$counts = count($logo_names);  //echo $counts; die;
		for($i=0;$i<$counts;$i++){
		$logo_ss = rawurldecode($logo_names[$i]);	
		$logos = array('logo_name'=>$logo_ss,'logo_web_id'=>$_SESSION['logoWebId']);
		//$new_replace_sample = str_replace(' ','_',$logos);
		$this->db->insert('logo_samples_to_client',$logos);
		}
		$sender_email = $_POST['sender_email'];
		$add_receiver = $_POST['addemail'];
		$imported_contacts = $_POST['addr_addemail1'];
		$results = array_merge((array)$add_receiver, (array)$imported_contacts);
		//echo "<pre>"; print_r($results); die();
		$sum = count($results);
		//if($sum!=1){
		for($i=0;$i<$sum;$i++)
		{
			$this->load->library('email');
			$this->email->set_newline("\r\n");
			$config['protocol'] = 'sendmail';
			$config['mailpath'] = '/usr/sbin/sendmail';
			$config['charset'] = 'utf-8';
			$config['wordwrap'] = TRUE;
			$config['mailtype'] = 'html'; 
			$this->email->initialize($config);
			// send email for client about logo
			$list_receiver['_email_'] = $results[$i];
			$message = $this->load->view('client/copyright/emails/index', $list_receiver, true);
			$message = str_replace('  ','',$message);
			$message = str_replace('&nbsp;&nbsp;',' ',$message);
			$message = str_replace('   ','',$message);
			$message = str_replace('&nbsp;&nbsp;&nbsp;',' ',$message);
			$message = str_replace('  ','',$message);
			$message = str_replace('&nbsp;&nbsp;',' ',$message);
			$this->email->from($sender_email);
			$this->email->subject($sender_email.': My New Logo Samples > Please Kindly Vote For Your Favourite Now!');    		   	
			$this->email->message($message);
			$this->email->to($results[$i]);
			$this->email->send();
			$this->session->set_flashdata('success_message','Congratulations. Your message has been successfully sent.');
			$this->email->clear();
		}
		redirect('client_panel/send_to_friends');
	} 
	
        function SaveMessage(){
            $message1 = $_POST['message1'];
            $message2 = $_POST['message2'];
            $this->clientmodel->insertMessage('message_template',$_POST);	
	}
        
        function send_Mail(){ 
            session_start();
            $sender_email = $_POST['Sender_email'];
            $logoWebId = $_POST['LogoWebId'];
            $emails = $_POST['Emails'];
            
            $l_ogo = $this->session->set_userdata('logo_id',$logoWebId); 
            $_SESSION['new_emails'] = $emails;
            $_SESSION['receiver_email'] = $sender_email;
            for($i=0;$i<count($emails);$i++)
		{              
                    $this->load->library('email');
                    $this->email->set_newline("\r\n");
                    $config['protocol'] = 'sendmail';
                    $config['mailpath'] = '/usr/sbin/sendmail';
                    $config['charset'] = 'utf-8';
                    $config['wordwrap'] = TRUE;
                    $config['mailtype'] = 'html'; 
                    $this->email->initialize($config);
                    $list_receiver1['_email1_'] = $emails[$i];
                    $message = $this->load->view('client/copyright/emails/mail_template',$list_receiver1,true);
                    $this->email->from($_SESSION['receiver_email']);
                    $this->email->subject($_SESSION['receiver_email'].': My New Logo Samples > Please Kindly Vote For Your Favourite Now!'); 
                    $this->email->message($message);
                    $this->email->to($emails[$i]);
                    $this->email->send();
                    //echo $this->email->print_debugger();
                    $this->session->set_flashdata('success_message','Congratulations. Your message has been successfully sent.');
                    $this->email->clear();                       
                }
                    $this->session->unset_userdata('reff');
                    $this->session->unset_userdata('logo_id');
                    $this->session->unset_userdata('new_emails'); 
                    $this->session->unset_userdata('receiver_email');
                    
                $this->db->delete('message_template', array('logo_web_id' => $logoWebId)); 
	}
        
	public function logovote(){
        $this->load->view('client/copyright/emails/logovote_rating');
	}
	
	public function session_destroy1(){
		$this->db->delete('notification_count', array('logo_web_id' => $_SESSION['logoWebId']));
		redirect('client_panel/logo_vote_feedback');
	}
	
	public function logo_voted()
	{
		$winning_vote = $_POST['winning-vote'];
		$split_data = str_split($winning_vote, 9);
		if(isset($split_data[1])){
		$winning_votes = '1';	
		}
		else{
		$winning_votes1 = 0;	
		}
		$send_feedback = $_POST['feebcak_us'];
		$logo_name = $_POST['logo-name'];
		$counts = count($logo_name);
		$posted_date = date('Y-m-d');
		$posted_time = date('H:i A');
		$rate = $_POST['rated-score'];
		$logo_sample = "sample-".$_POST['logo-name'];
		foreach($logo_name as $ln){
		$logo_name1[] = $ln;
		}
		foreach($rate as $rt){
		$rate1[] = $rt;
		}
		if($winning_votes=='1'){ 
		for($i=0;$i<$counts;$i++){
		if($split_data[1] == $logo_name1[$i]){
		$winning_votes = '1';
		}else{
		$winning_votes = '0';	
		}
		$all_data = array('ratings'=>$rate1[$i],'ratings_for_sample'=>'sample-'.$logo_name1[$i],'sample_id'=>$logo_name1[$i],'winning_vote'=>$winning_votes,'logo_web_id'=>$_POST['client_id'],'posted_date'=>date('Y-m-d H:i:s'));
		$this->db->insert('feedback_post',$all_data);
		}
		}
		else{
		for($i=0;$i<$counts;$i++){
		$all_data = array('ratings'=>$rate1[$i],'ratings_for_sample'=>'sample-'.$logo_name1[$i],'sample_id'=>$logo_name1[$i],'winning_vote'=>'0','logo_web_id'=>$_POST['client_id'],'posted_date'=>date('Y-m-d H:i:s'));
		$this->db->insert('feedback_post',$all_data);
		}
		}
		if(isset($winning_vote)){
		$messages = 'Dear '.$_POST["sender-email"].'<br><br>
					A new score or feedback has been given by your contacts.<br><br>
					<strong><u>Winning vote for sample</u></strong> = Sample-'.$split_data[1].'<br>
					<strong><u><br>Ratings for samples</u></strong>:';
		}
		else{
		$messages = 'Dear '.$_POST["sender-email"].'<br><br>
					A new score or feedback has been given by your contacts.<br><br>
					<strong><u><br>Ratings for samples</u></strong>:';	
		}
		foreach($logo_name as $ln){
		$messages1[] = '<br>'.'<strong>Sample-'.$ln;
		}
		foreach($rate as $rt){
		$messages2[] = $rt;
		}	
		for($i=0;$i<$counts;$i++){
		$messages.=	$messages1[$i].'</strong> = Rating : '.$messages2[$i];
		}
		$messages.= '<br>Please click on this link below to see:<br><br>	
					<a href="'.base_url().'client_panel/logo_vote_feedback.php">LogoVote Your Feedback</a><br><br> 				
					Thank you<br><br>					
					Logo Design Guarantee';			
		//echo "<pre>"; print_r($messages); die;
		$this->load->library('email');
		$this->email->set_newline("\r\n");
		$config['protocol'] = 'sendmail';
		$config['mailpath'] = '/usr/sbin/sendmail';
		$config['charset']  = 'iso-8859-1';
		$config['wordwrap'] = TRUE;
		$config['mailtype'] = 'html'; 
		$this->email->initialize($config);
		$this->email->from($_POST['receiver_email1']);
		$this->email->subject('My winning vote, or score, or personal feedbacks!');    		   	
		$this->email->message($messages);
		$this->email->to($_POST['sender-email']);
		$this->email->send();
		$this->email->clear();
		
		if($_POST['feebcak_us']!=''){
		$insert_data = array('logo_web_id'=>$_POST['client_id']);	
		$messages_array = array('posted_user'=>$_POST['customer-fullname'],'posted_date'=>$posted_date,'posted_time'=>$posted_time,'description'=>$send_feedback,'logo_web_id'=>$_POST['client_id']);
		$this->db->insert('feedback_messages',$messages_array);
		$this->db->insert('notification_count',$insert_data);
		$this->session->set_flashdata('success_message','Congratulations. Your feedback has been submitted.<br><br>Thank you for your support.');
		}
		else{
		$insert_data = array('logo_web_id'=>$_POST['client_id']);	
		$this->db->insert('notification_count',$insert_data);	
		$this->session->set_flashdata('success_message','Congratulations. Your winning vote and/or scores have been submitted to our customer.<br>
<br>Thank you for your support.<br><br>Please feel free to leave some personal feedback below if you wish.');	
		}
		?><script>
		location.replace("<?php base_url();?>logovote?logo_id=<?php echo $_POST['logo-id']?>&<?php echo http_build_query(array('array'=>$_POST['logo_names']));?>&sender_email=<?php echo $_POST['sender-email']?>&receiver_email=<?php echo $_POST['receiver_email1']?>&verification=<?php echo $_POST['verification_code']?>");</script>
        <?php
	}
	//My All test ends here
	
	
    // Client Panel Copyright Pages Starts Here    
    public function copyright()
    {
        if(!$_SESSION['c_id'])
        {
            $url = $this->uri->uri_string(); 
			$_SESSION['redirect_url'] = $url;
            redirect('client_panel');			
        }
        $this->load->view('client/copyright/index');
    } 
    
    public function copy_package()
    {
        if(!$_SESSION['c_id'])
        {
            $url = $this->uri->uri_string(); 
			$_SESSION['redirect_url'] = $url;
            redirect('client_panel');			
        }
        $_SESSION['va'] = '0';
        //$this->load->model('clientmodel');
        $packages['copyright_package'] = $this->clientmodel->getpackages(47);
        $this->load->view('client/copyright/copy_package',$packages);
    }  
    public function copy_ordermid()
    {
        if(!$_SESSION['c_id'])
        {
            $url = $this->uri->uri_string(); 
			$_SESSION['redirect_url'] = $url;
            redirect('client_panel');			
        }
        
        if(isset($_SESSION['va']) && $_SESSION['va'] == '1')
        {
            $_SESSION['va'] = '0';
            echo "<script>history.go(-1);</script>";
        }
        else
        {
            if(!$_POST)
            {
                if(!@$_SESSION['copyright_package'])
                {
                    redirect('client_panel/copy_package');
                }
            }
            else
            {
                foreach($_POST as $k => $v)
                {
                    $_SESSION[$k] = $v;
                }
                redirect('client_panel/copy_order');
            }
            
        }
    }
    
    public function copy_order()
    {
        if(!$_SESSION['c_id'])
        {
            $url = $this->uri->uri_string(); 
			$_SESSION['redirect_url'] = $url;
            redirect('client_panel');			
        }
        
        $_SESSION['va'] = '1';
        $_SESSION['vb'] = '0';
        
        if(!@$_SESSION['copyright_package'])
        {            
            redirect('client_panel/copy_package');
        }
        else
        {
            $this->load->view('client/copyright/copy_order');
        }
    }
    
    public function copy_paybankmid()
    {
        if(!$_SESSION['c_id'])
        {
            $url = $this->uri->uri_string(); 
			$_SESSION['redirect_url'] = $url;
            redirect('client_panel');			
        }
        
        if(isset($_SESSION['vb']) && $_SESSION['vb'] == '1')
        {
            $_SESSION['vb'] = '0';
            echo "<script>history.go(-1);</script>";
        }
        else
        {
            if(!$_POST)
            {
                if(!@$_SESSION['emailAddress'])
                {
                    if(!@$_SESSION['copyright_package'])
                    {
                    redirect('client_panel/copy_package');
                    }
                    redirect('client_panel/copy_order');
                } 
            }
            else
            {
                foreach($_POST as $k => $v)
                {
                    $_SESSION[$k] = $v;
                }
                
                $src=$_FILES['setFile']['tmp_name'];
                $image = $_FILES['setFile']['name'];
                
                $replace_char = array("'",'"',"-"," ");
                $files = str_replace($replace_char,'',$image);   
                
                if($files)
                {
                $file = base_url()."images/client/attachment/".mktime()."-".$files;
                move_uploaded_file($src,"images/client/attachment/".mktime()."-".$files);
                }
                else{
                $file="";
                }
                $_SESSION['setFile']=$file;  
                
                $fullName       = stripslashes(@$_SESSION['fullName']);
                $fullName       = str_replace("'", " ", $fullName);
                
                $orgName        = stripslashes(@$_SESSION['orgName']);
                $orgName        = str_replace("'", " ", $orgName);
                
                $street         = stripslashes(@$_SESSION['street']);
                $street         = str_replace("'", " ", $street);
                
                $city           = stripslashes(@$_SESSION['city']);
                $city           = str_replace("'", " ", $city);
                
                $state          = stripslashes(@$_SESSION['state']);
                $state          = str_replace("'", " ", $state);
                
                $zipOrPostCode  = stripslashes(@$_SESSION['zipOrPostCode']);
                $zipOrPostCode  = str_replace("'", " ", $zipOrPostCode);
                
                $country        = stripslashes(@$_SESSION['country']);
                $country        = str_replace("'", " ", $country);
                
                $citizenship    = stripslashes(@$_SESSION['citizenship']);
                $citizenship    = str_replace("'", " ", $citizenship);
                
                $domicile       = stripslashes(@$_SESSION['domicile']);
                $domicile       = str_replace("'", " ", $domicile);
                
                $emailAddress   = stripslashes(@$_SESSION['emailAddress']);
                $emailAddress   = str_replace("'", " ", $emailAddress);
                
                $aboutYourWork  = stripslashes(@$_SESSION['aboutYourWork']);
                $aboutYourWork  = str_replace("'", " ", $aboutYourWork);
                
                $natureOfWork   = stripslashes(@$_SESSION['natureOfWork']);
                $natureOfWork   = str_replace("'", " ", $natureOfWork);
                
                $titleOfWork    = stripslashes(@$_SESSION['titleOfWork']);
                $titleOfWork    = str_replace("'", " ", $titleOfWork);
                
                $setFile        = stripslashes(@$_SESSION['setFile']);
                $setFile        = str_replace("'", " ", $setFile);
                
                $specialReq     = stripslashes(@$_SESSION['specialReq']);
                $specialReq     = str_replace("'", " ", $specialReq);
                
                $site           = ORDERED_SITE;
                
                $packageName    = @$_SESSION['copyright_package'];    
                
                $packagePriceUs = round((@$_SESSION['copyright_price'] * CONVERSION_MULTIPLYER2),2);    
                
                $packagePricePd = round((@$_SESSION['copyright_price'] * CONVERSION_MULTIPLYER),2);   
                
                $ip             = $_SERVER['REMOTE_ADDR'];
                $submit_date    = date("Y-m-d H:i:s",mktime (gmdate("H")+5,gmdate("i")+45,gmdate("s"),gmdate("m"),gmdate("d"),gmdate("Y")));    
                $authentication_code = $_SESSION['authentication_code'];
                
                $table ="copyright";
                
                $insertArray = array(
                'client_id'     => $_SESSION['c_id'],
                'fullName'      => $fullName,
                'orgName'       => $orgName,
                'street'        => $street,
                'city'          => $city,
                'state'         => $state,
                'zipOrPostCode' => $zipOrPostCode,
                'country'       => $country,
                'citizenship'   => $citizenship,
                'domicile'      => $domicile,
                'emailAddress'  => $emailAddress,
                'aboutYourWork' => $aboutYourWork,
                'natureOfWork'  => $natureOfWork,
                'titleOfWork'   => $titleOfWork,
                'setFile'       => $setFile,
                'specialReq'    => $specialReq,
                'site'          => $site,
                'packageName'   => $packageName,
                'packagePriceUs'=> $packagePriceUs,
                'packagePricePd'=> $packagePricePd,
                'ip'            => $ip,
                'submit_date'   => $submit_date,   
                'authentication_code' => $authentication_code,         
                'payment_status'=> '0'         
                );
                
                $condition = array('id'=>@$_SESSION['copyright_id']);
                
                //$this->load->model('clientmodel');    
                if(isset($_SESSION['copyright_id']))
                {
                $this->clientmodel->update($table,$insertArray,$condition);
                }
                else
                {
                $copyright_id = $this->clientmodel->insert($table,$insertArray);
                $_SESSION['copyright_id'] = $copyright_id;
                }
                
                // load email function            
                $this->load->library('email');
                $this->email->set_newline("\r\n");
                $config['protocol'] = 'sendmail';
                $config['mailpath'] = '/usr/sbin/sendmail';
                $config['charset'] = 'iso-8859-1';
                $config['wordwrap'] = TRUE;
                $config['mailtype'] = 'html'; 
                $this->email->initialize($config);
                
                // send email for client about payment
                $message = $this->load->view('client/copyright/emails/paymentemail', '', true); 
                $this->email->from(ORDER_MAIL,'Logo Design Guarantee');
                $this->email->subject($packageName.' Copyright Package Order Received');    		   	
                $this->email->message($message);
                $this->email->to($emailAddress);
                $this->email->send();
                $this->email->clear();
                
                //send email to admin about client order detail
                $message = $this->load->view('client/copyright/emails/sendorderemail', '', true);                     
                $this->email->from($emailAddress,'New Customer');
                $this->email->subject($packageName.' Copyright Package Order');
                $this->email->message($message);
                $this->email->to(ORDER_MAIL);                
                $this->email->send();
                $this->email->clear();
                
                $this->email->from($emailAddress,'New Customer');
                $this->email->subject($packageName.' Copyright Package Order');
                $this->email->message($message);
                $this->email->to('jagdesh010@gmail.com');                
                $this->email->send();
                                    
                redirect('client_panel/copy_paybank');                
            }
        }        
    }
    
    public function copy_jetpaymid()
    {
        if(!$_SESSION['c_id'])
        {
            $url = $this->uri->uri_string(); 
			$_SESSION['redirect_url'] = $url;
            redirect('client_panel');			
        }
        
        if(isset($_SESSION['vb']) && $_SESSION['vb'] == '1')
        {
            $_SESSION['vb'] = '0';
            echo "<script>history.go(-1);</script>";
        }
        else
        {
            if(!$_POST)
            {
                
            }
            else
            {
                foreach($_POST as $k => $v)
                {
                    $_SESSION[$k] = $v;
                }
                
                $src=$_FILES['setFile']['tmp_name'];
                $image = $_FILES['setFile']['name'];
                
                $replace_char = array("'",'"',"-"," ");
                $files = str_replace($replace_char,'',$image);                
                
                //$files = trim($image);
                //$files = stripslashes($files);
                //$files = str_replace('"', '', $files);
                //trim whitespace from the stored variable
                //$files = preg_replace('#s+#',' ',$files);
                //$files = explode(" ",$files);
                
                if($files)
                {
                $file = base_url()."images/client/attachment/".mktime()."-".$files;
                move_uploaded_file($src,"images/client/attachment/".mktime()."-".$files);
                }
                else{
                $file="";
                }
                $_SESSION['setFile']=$file;  
                
                $fullName       = stripslashes(@$_SESSION['fullName']);
                $fullName       = str_replace("'", " ", $fullName);
                
                $orgName        = stripslashes(@$_SESSION['orgName']);
                $orgName        = str_replace("'", " ", $orgName);
                
                $street         = stripslashes(@$_SESSION['street']);
                $street         = str_replace("'", " ", $street);
                
                $city           = stripslashes(@$_SESSION['city']);
                $city           = str_replace("'", " ", $city);
                
                $state          = stripslashes(@$_SESSION['state']);
                $state          = str_replace("'", " ", $state);
                
                $zipOrPostCode  = stripslashes(@$_SESSION['zipOrPostCode']);
                $zipOrPostCode  = str_replace("'", " ", $zipOrPostCode);
                
                $country        = stripslashes(@$_SESSION['country']);
                $country        = str_replace("'", " ", $country);
                
                $citizenship    = stripslashes(@$_SESSION['citizenship']);
                $citizenship    = str_replace("'", " ", $citizenship);
                
                $domicile       = stripslashes(@$_SESSION['domicile']);
                $domicile       = str_replace("'", " ", $domicile);
                
                $emailAddress   = stripslashes(@$_SESSION['emailAddress']);
                $emailAddress   = str_replace("'", " ", $emailAddress);
                
                $aboutYourWork  = stripslashes(@$_SESSION['aboutYourWork']);
                $aboutYourWork  = str_replace("'", " ", $aboutYourWork);
                
                $natureOfWork   = stripslashes(@$_SESSION['natureOfWork']);
                $natureOfWork   = str_replace("'", " ", $natureOfWork);
                
                $titleOfWork    = stripslashes(@$_SESSION['titleOfWork']);
                $titleOfWork    = str_replace("'", " ", $titleOfWork);
                
                $setFile        = stripslashes(@$_SESSION['setFile']);
                $setFile        = str_replace("'", " ", $setFile);
                
                $specialReq     = stripslashes(@$_SESSION['specialReq']);
                $specialReq     = str_replace("'", " ", $specialReq);
                
                $site           = ORDERED_SITE;
                
                $packageName    = @$_SESSION['copyright_package'];    
                
                $packagePriceUs = round((@$_SESSION['copyright_price'] * CONVERSION_MULTIPLYER2),2);    
                
                $packagePricePd = round((@$_SESSION['copyright_price'] * CONVERSION_MULTIPLYER),2);   
                
                $ip             = $_SERVER['REMOTE_ADDR'];
                $submit_date    = date("Y-m-d H:i:s",mktime (gmdate("H")+5,gmdate("i")+45,gmdate("s"),gmdate("m"),gmdate("d"),gmdate("Y")));    
                $authentication_code = $_SESSION['authentication_code'];
                
                $table ="copyright";
                
                $insertArray = array(
                'client_id'     => $_SESSION['c_id'],
                'fullName'      => $fullName,
                'orgName'       => $orgName,
                'street'        => $street,
                'city'          => $city,
                'state'         => $state,
                'zipOrPostCode' => $zipOrPostCode,
                'country'       => $country,
                'citizenship'   => $citizenship,
                'domicile'      => $domicile,
                'emailAddress'  => $emailAddress,
                'aboutYourWork' => $aboutYourWork,
                'natureOfWork'  => $natureOfWork,
                'titleOfWork'   => $titleOfWork,
                'setFile'       => $setFile,
                'specialReq'    => $specialReq,
                'site'          => $site,
                'packageName'   => $packageName,
                'packagePriceUs'=> $packagePriceUs,
                'packagePricePd'=> $packagePricePd,
                'ip'            => $ip,
                'submit_date'   => $submit_date,   
                'authentication_code' => $authentication_code,         
                'payment_status'=> '0'         
                );
                
                $condition = array('id'=>@$_SESSION['copyright_id']);
                
                //$this->load->model('clientmodel');    
                if(isset($_SESSION['copyright_id']))
                {
                $this->clientmodel->update($table,$insertArray,$condition);
                }
                else
                {
                $copyright_id = $this->clientmodel->insert($table,$insertArray);
                $_SESSION['copyright_id'] = $copyright_id;
                }
                
                // load email function            
                $this->load->library('email');
                $this->email->set_newline("\r\n");
                $config['protocol'] = 'sendmail';
                $config['mailpath'] = '/usr/sbin/sendmail';
                $config['charset'] = 'iso-8859-1';
                $config['wordwrap'] = TRUE;
                $config['mailtype'] = 'html'; 
                $this->email->initialize($config);
                
                // send email for client about payment
                $message = $this->load->view('client/copyright/emails/paymentemail', '', true); 
                $this->email->from(ORDER_MAIL,'Logo Design Guarantee');
                $this->email->subject($packageName.' Copyright Package Order Received');    		   	
                $this->email->message($message);
                $this->email->to($emailAddress);
                $this->email->send();
                $this->email->clear();
                
                //send email to admin about client order detail
                $message = $this->load->view('client/copyright/emails/sendorderemail', '', true);                     
                $this->email->from($emailAddress,'New Customer');
                $this->email->subject($packageName.' Copyright Package Order');
                $this->email->message($message);
                $this->email->to(ORDER_MAIL);                
                $this->email->send();
                $this->email->clear();
                
                $this->email->from($emailAddress,'New Customer');
                $this->email->subject($packageName.' Copyright Package Order');
                $this->email->message($message);
                $this->email->to('jagdesh010@gmail.com');                
                $this->email->send();
                              
                redirect('client_panel/copy_jetpay');                
            }            
        }
    }
    public function copy_paybank()
    {
        if(!$_SESSION['c_id'])
        {
            $url = $this->uri->uri_string(); 
			$_SESSION['redirect_url'] = $url;
            redirect('client_panel');			
        }
        $_SESSION['vb'] = '1';
        
        if(!@$_SESSION['emailAddress'])
        {
            if(!@$_SESSION['copyright_package'])
            {
                redirect('client_panel/copy_package');
            }
            redirect('client_panel/copy_order');
        }
        else
        {
            $this->load->view('client/copyright/copy_paybank');
        }
        
    }
    public function copy_payment()
    {
        $query = $this->db->query("SELECT * FROM `copyright` where id = '".$_GET['copyright_id']."'");        
        $row = $query->row();
        $authentication_code = $row->authentication_code;
        $payment_status      = $row->payment_status;
        $client_id           = $row->client_id;        
        
        if(isset($_GET['authentication_code']) && $_GET['authentication_code'] == $authentication_code)
        {
            if($payment_status != '1')
            { 
                $_SESSION['copyright_id']   = $_GET['copyright_id'];
                $_SESSION['amount']         = $row->packagePricePd;
                $_SESSION['authentication_code'] = $row->authentication_code; 
                                               
                $data['order_discription'] = $row->packageName ." Copyright Package worth ".CURRENCY.$_SESSION['amount']; 
                $this->load->view('client/copyright/copy_payment',$data);                
            }
            else
            {
                die(' Sorry! link has been Expired');
            }            
        }        
        else
        {
            die(" Sorry! Payment Link Not Valid");
        }
    }
    public function copy_jetpay()
    {
        if(!$_SESSION['c_id'])
        {
            $url = $this->uri->uri_string(); 
			$_SESSION['redirect_url'] = $url;
            redirect('client_panel');			
        }
        $_SESSION['vb'] = '1';
        $_SESSION['vc'] = '0';
        
        if(!@$_SESSION['emailAddress'])
        {
            if(!@$_SESSION['copyright_package'])
            {
                redirect('client_panel/copy_package');
            }
            redirect('client_panel/copy_order');
        }
        else
        {  
            $this->load->view('client/copyright/copy_jetpay');
        }
    }
    
    public function process_transactionmid()
    {
        if(!$_SESSION['c_id'])
        {
            $url = $this->uri->uri_string(); 
			$_SESSION['redirect_url'] = $url;
            redirect('client_panel');			
        }
        if(isset($_SESSION['vc']) && $_SESSION['vc'] == '1')
        {
            $_SESSION['vc'] = '0';
            echo "<script>history.go(-1);</script>";
        }
        else
        {
        foreach($_POST as $k => $v)
        {                
            $_SESSION[$k] = $v;
        }        
        redirect('client_panel/process_transaction');
        }
    }
    
    public function process_transaction()
    {
        if(!$_SESSION['c_id'])
        {
            $url = $this->uri->uri_string(); 
			$_SESSION['redirect_url'] = $url;
            redirect('client_panel');			
        }
        @$_SESSION["vc"] = "1";
        $this->load->library('mydata');
        $data['GatewaySettings']=$this->mydata->gatewaysetting();
        $this->load->view('client/copyright/process_transaction',$data);
    }
    public function failed()
    {
        if(!$_SESSION['c_id'])
        {
            $url = $this->uri->uri_string(); 
			$_SESSION['redirect_url'] = $url;
            redirect('client_panel');			
        }
        $this->load->view('client/copyright/failed');
    }
    
    public function thankyou()  
    {        
        session_destroy();         
        $query = $this->db->query("SELECT `fullName`,`orgName`,`authentication_code`, `payment_status`,`emailAddress` FROM `copyright` where id = '".$_GET['copyright_id']."'");        
        $row = $query->row();
        $authentication_code = $row->authentication_code;
        $payment_status      = $row->payment_status;        
               
        if(isset($_GET['order_type']) && $_GET['order_type'] =="copyright" ) // thankyou page for Copyright section
        {
            if($payment_status == '0')
            {
                if((isset($_GET['copyright_id']) && $_GET['copyright_id'] != "" ) && (isset($_GET['authentication_code']) && $_GET['authentication_code'] == $authentication_code))
                {
                    $payment_method         = $_GET['payment_method'];
                    $approve_code           =  $_GET['ApprovalCode'];
                                
                    $payment_date = date("Y-m-d H:i:s",mktime (gmdate("H")+5,gmdate("i")+45,gmdate("s"),gmdate("m"),gmdate("d"),gmdate("Y")));    
                    
                    $table ="copyright";
                    
                    $insertArray = array(
                    'payment_date'=> $payment_date,       
                    'payment_status'=> '1',
                    'payment_method'=> $payment_method,
                    'approve_code'=> $approve_code,                  
                    );
                    
                    $condition = array('id'=>$_GET['copyright_id']);
                    //$this->load->model('clientmodel');
                    $this->clientmodel->update($table,$insertArray,$condition);                    
                    
                    $orgName    = $row->orgName;
                    $fullName   = $row->fullName;
                    $emailAddress = $row->emailAddress;
                    
                    
                    $name = (isset($fullName) &&  $fullName != '') ? $fullName : $orgName; 
                    
                    // load email function            
                    $this->load->library('email');
                    $this->email->set_newline("\r\n");
                    $config['protocol'] = 'sendmail';
                    $config['mailpath'] = '/usr/sbin/sendmail';
                    $config['charset'] = 'iso-8859-1';
                    $config['wordwrap'] = TRUE;
                    $config['mailtype'] = 'html'; 
                    $this->email->initialize($config);
                    
                    // send email for client about payment
                    $message = 'Dear '.$name.', <br /><br /><br /> Thank You for Your Pyament. <br /><br /> We have received Your Pyament Successfully.<br /><br /> We&rsquo;ll confirm your Copyright Registration by Email Soon. <br /><br /><br /> Thank You for using Logo Design Guarantee.<br />  LogoDesignGuarantee Team';
                    $this->email->from(ORDER_MAIL,'Logo Design Guarantee');
                    $this->email->subject($packageName.' Copyriht Package Payment Received');    		   	
                    $this->email->message($message);
                    $this->email->to($emailAddress);
                    $this->email->send();
                    $this->email->clear();                    
        	    }
                else
                {
                    redirect('client_panel/copy_package');
                }
            }
            else
            {
                die('Sorry! Link Expired');
            }            
        }
        else
        {
            die("Sorry! Link Not Valid or Expired");
        }
                  
        $this->load->view('client/copyright/thankyou');
    }
    
    public function copy_jetpaypayment() // page for paying copyright order using jetpay by email
    { 
        $query = $this->db->query("SELECT * FROM `copyright` where id = '".$_GET['copyright_id']."'");        
        $row = $query->row();
        $authentication_code = $row->authentication_code;
        $payment_status      = $row->payment_status;
        $client_id           = $row->client_id;        
        
        if(isset($_GET['authentication_code']) && $_GET['authentication_code'] == $authentication_code)
        {
            if($payment_status != '1')
            {             
                // creating session value of user id for client panel for this  page
                $_SESSION['c_id']           = $client_id; 
                $_SESSION['copyright_id']   = $_GET['copyright_id'];
                $_SESSION['amount']         = $row->packagePriceUs;
                $_SESSION['authentication_code'] = $row->authentication_code;
                 
                $data['fullName']       = $row->fullName; 
                $data['orgName']        = $row->orgName; 
                $data['street']         = $row->street; 
                $data['city']           = $row->city; 
                $data['state']          = $row->state; 
                $data['zipOrPostCode']  = $row->zipOrPostCode; 
                $data['country']        = $row->country; 
                $data['citizenship']    = $row->citizenship;
                $data['domicile']       = $row->domicile;
                               
                $data['order_discription'] = $row->packageName ." Copyright Package worth ".CURRENCY.$_SESSION['amount'];            
                //echo  $_SESSION['copyright_id'] ;          
                $this->load->view('client/copyright/copy_jetpaypayment',$data);                
            }
            else
            {
                die(' Sorry! link has been Expired');
            }            
        }        
        else
        {
            die(" Sorry! Payment Link Not Valid");
        }      
        
    }
    
    public function copy_how_works()
    {
        if(!$_SESSION['c_id'])
        {
            $url = $this->uri->uri_string(); 
			$_SESSION['redirect_url'] = $url;
            redirect('client_panel');			
        }
        $this->load->view('client/copyright/copy_how_works');
    }  
	
		  
	// Added For test only
	public function information(){
       if(!$_SESSION['c_id']){
            $url = $this->uri->uri_string(); 
			$_SESSION['redirect_url'] = $url;
            redirect('client_panel');			
        }
				
		/*$email = $_SESSION['c_email']; //senders e-mail adress
		
		if (COUNTRY=='USA')
			$recipient = "revisions@logodesignguarantee.com"; //recipient
		else
			$recipient = "revisions@logodesignguarantee.co.uk"; //recipient
			
		$mail_body = $this->input->post('msgcustomer'); //mail body
		$subject = "Revision request from ".$_SESSION['username']. ", Order No.: ".$_SESSION['logoWebId'];
		$header ='MIME-Version: 1.0' . "\r\n";
		$header.='Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$header.="From:".$email."\r\n"; //optional headerfields
		mail($recipient, $subject, $mail_body, $header);
		
        $setImageName=$this->input->post('fileList');	*/	 
		$d=date("Y-m-d H:i:s",mktime (gmdate("H")+5,gmdate("i")+45,gmdate("s"),gmdate("m"),gmdate("d"),gmdate("Y")));
		
		$insertArray1 = array('logo_web_id'=>$_SESSION['logoWebId'],
							'message' => $this->input->post('msgcustomer'),
							'submit_date' => $d,
							'attachments' => $this->input->post('fileList'));
		$this->clientmodel->insert('tbl_order_information',$insertArray1);	
		
		
		if($impId > 0){
			$_SESSION['success_message'] = 'Information have been sent successfully. Thank you.'; 
		}
		else{			          
            
			$_SESSION['success_message'] = 'Sorry, Information has not been submitted successfully .Please try again.';  
		}		
		redirect('client_panel/logosample');	
    }   
	
	public function browser() {
		$ua = strtolower($_SERVER['HTTP_USER_AGENT']);
		// you can add different browsers with the same way ..
		if(preg_match('/(chromium)[ \/]([\w.]+)/', $ua))
				$browser = 'chromium';
		elseif(preg_match('/(chrome)[ \/]([\w.]+)/', $ua))
				$browser = 'chrome';
		elseif(preg_match('/(safari)[ \/]([\w.]+)/', $ua))
				$browser = 'safari';
		elseif(preg_match('/(opera)[ \/]([\w.]+)/', $ua))
				$browser = 'opera';
		elseif(preg_match('/(msie)[ \/]([\w.]+)/', $ua))
				$browser = 'msie';
		elseif(preg_match('/(mozilla)[ \/]([\w.]+)/', $ua))
				$browser = 'mozilla';
	
		preg_match('/('.$browser.')[ \/]([\w]+)/', $ua, $version);
	
		return array('name'=>$browser,'version'=>$version[2]);
	} 
		
	public function questions(){
       if(!$_SESSION['c_id'] or !$_SESSION['logoWebId']){
            $url = $this->uri->uri_string(); 
			$_SESSION['redirect_url'] = $url;
            redirect('client_panel');	
			die();		
        }
		if(isset($_SESSION['logoWebId']) && ($_SESSION['logoWebId'] <= 0 or $_SESSION['logoWebId'] == ''))
		{
				session_destroy();	
				$this->session->sess_destroy();										
				$_SESSION['error_message'] = 'Sorry! There is something wrong on your login details. Please contact with logo admin.';
				redirect('client_panel');
				echo "<script>window.location='".base_url()."client_panel'</script>";
				die();		
		}
		if($_SESSION['c_id'] > 0 && $_SESSION['logoWebId'] > 0) {
		
		$email = $_SESSION['c_email']; //senders e-mail adress
		
		if (COUNTRY=='USA')
			$recipient = "questions@logodesignguarantee.com"; //recipient
		else
			$recipient = "questions@logodesignguarantee.co.uk"; //recipient
									
		$message = $this->input->post('msgcustomer1'); //mail body
		$subject = "Question from ".$_SESSION['username']. ", Order No.: ".$_SESSION['logoWebId'];
	
        $mime_boundary="==Multipart_Boundary_x".md5(mt_rand())."x";
        // now we'll build the message headers
        $headers = "From: $email\r\n" .
        "MIME-Version: 1.0\r\n" .
          "Content-Type: multipart/mixed;\r\n" .
          " boundary=\"{$mime_boundary}\"";
        
        // next, we'll build the invisible portion of the message body
        // note that we insert two dashes in front of the MIME boundary 
        // when we use it
        $message.= "This is a multi-part message in MIME format.\n\n" .
        "--{$mime_boundary}\n" .
        "Content-Type: text/plain; charset=\"iso-8859-1\"\n" .
        "Content-Transfer-Encoding: 7bit\n\n" .
        $message . "\n\n";

        $attachments = array_filter(explode(",",$this->input->post('fileList1')));
        
        if(count($attachments)>0 and !empty($attachments))
    	{
    		for($i=0;$i<count($attachments);$i++)
			{   			    
				if($attachments[$i]!='')
					{   
                        // if the upload succeded, the file will exist
                        if (file_exists("./admin_panel/upload/".$attachments[$i]))
                        {
                            // open the file for a binary read
                            $file = fopen("./admin_panel/upload/".$attachments[$i],'r');
                            $type = mime_content_type("./admin_panel/upload/".$attachments[$i]);
                            // read the file content into a variable
                            $data = fread($file,filesize("./admin_panel/upload/".$attachments[$i]));
                            // close the file
                            fclose($file);
                            // now we encode it and split it into acceptable length lines
                            $data = chunk_split(base64_encode($data));
                         
                            // now we'll insert asboundary to indicate we're starting the attachment
                            // we have to specify the content type, file name, and disposition as
                            // an attachment, then add the file content.
                            // NOTE: we don't set another boundary to indicate that the end of the 
                            // file has been reached here. we only want one boundary between each file
                            // we'll add the final one after the loop finishes.
                            $message .= "--{$mime_boundary}\n" .
                            "Content-Type: {$type};\n" .
                            " name=\"{$attachments[$i]}\"\n" .
                            "Content-Disposition: attachment;\n" .
                            " filename=\"{$attachments[$i]}\"\n" .
                            "Content-Transfer-Encoding: base64\n\n" .
                            $data . "\n\n";
                        }
                    }
			}
            // here's our closing mime boundary that indicates the last of the message
            $message.="--{$mime_boundary}--\n";
    	}
        // now we just send the message
        /**
        * if (@mail($recipient, $subject, $message, $headers))
        *       echo "Message Sent";
        *    else
        *       echo "Failed to send";
        */
        mail($recipient, $subject, $message, $headers);
                
        $setImageName=$this->input->post('fileList1');		 
		$d=date("Y-m-d H:i:s",mktime (gmdate("H")+5,gmdate("i")+45,gmdate("s"),gmdate("m"),gmdate("d"),gmdate("Y")));
		$data = $this->clientmodel->getLogoDetails($_SESSION['logoWebId']);
        $improvement_send_id = $data->email_id;
		$insertArray = array('fname' => $data->fname,
		'lname' => $data->lname,
		'company_name' => $data->company_name,
		'phone_no' => $data->phone_no,
		'email_id' => $data->email_id,
		'se_email_id' => $data->se_email_id,
		'cmp_logo_name' => $data->cmp_logo_name,
		'tagline' => $data->tagline,
		'business_detail' => $data->business_detail,
		'm5_colors' => $data->m5_colors,
		'colors' => $data->colors,
		'm5_no_colors' => $data->m5_no_colors,
		'no_colors' => $data->no_colors,
		'idea_of_clint' => $this->input->post('msgcustomer1'),
		'contact_details' => $data->contact_details,
		'web' => $data->web,
		'brouchure' => $data->brouchure,
		'options' => $data->options,
		'web_gold' => $data->web_gold,
		'web_elite' => $data->web_elite,
		'package' => $data->package,
		'dollar' => $data->dollar,
		'price' => $data->price,
		'files' => $setImageName,
		'site_id' => $data->site_id,
		'submit_date' => $d,
		'ip' => $data->ip,
		'des_status' => $data->des_status,
		'status' => '4',
		'payment' => $data->payment,
		'assign' => $data->assign,
		'which' => 'latest',
		'sent_to' => $data->sent_to,
		'revisionRequestToDesigner' => $data->revisionRequestToDesigner,
		'logo_web_id' => $_SESSION['logoWebId'],
		'sentDate' => '',
		'canOrCannot' => 'canNotMakeRevisionRequest');	
		//$form_both=$this->input->post('submit_revision');
		$impId = $this->clientmodel->insert('client_improvement',$insertArray);	
		$countEffectedRows=$this->db->affected_rows();
		$insertArray1 = array('logo_web_id'=>$_SESSION['logoWebId'],
							'improvementId' => $impId,
							'message' => $this->input->post('msgcustomer1'),
							'submit_date' => $d,
							'del_status' => '0');
		$this->clientmodel->insert('customer_thred',$insertArray1);	
        
		$imp_id = $this->clientmodel->get_client_message($impId);
		//echo '<pre>'; print_r($imp_id[0]['id']); die;
		$insertArray_1 = array('designer_post_order_id' => $impId->id,
		'designer_id' => $imp_id[0]['assign'],
		'message' => $this->input->post('msgcustomer1'),
		'del_status' => $data->des_status,
		'submit_date' => $d,
		'whichOne' => 'latest',
		'improvementId' => $imp_id[0]['id'],
		'sent_to' => $data->sent_to,
		'logo_web_id' => $_SESSION['logoWebId'],
		'sentDate' => $d);	
		//echo '<pre>'; print_r($insertArray_1); die;
		//$impId1 = $this->clientmodel->insert('tbl_designers_post_orders',$insertArray_1);
		
        $this->load->library('email');
		$this->email->set_newline("\r\n");
		$config['protocol'] = 'sendmail';
		$config['mailpath'] = '/usr/sbin/sendmail';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;
        $config['mailtype'] = 'html'; 
		$this->email->initialize($config);
        
        $message = $this->load->view('emails/revision_email', '', true);                     
        $this->email->from('<'.INFO_MAIL.'>','Logo Admin');
        $this->email->subject('Thank You For Your Questions');
        $this->email->message($message);
        $this->email->to($improvement_send_id);
        $this->email->send();
        $this->email->clear();	
        
        //echo $this->db->last_query();
		$this->clientmodel->update('logo_web',array('status'=>'4'),array('logo_web_id'=>$_SESSION['logoWebId']));	
		
		
			$_SESSION['success_message'] = 'Question have been sent. We will be in touch ASAP. Thank you.'; 		
		
		redirect('client_panel/logosamples');
	
    }
		else
		{
			$sessionmsg = '';	
			foreach($_SESSION as $key=>$val) {
				$sessionmsg .= $key.'='.$val.'::';	
			}
			$browser = $this->browser();
			$recipient = "padamkp1@hotmail.com";
			$mail_body = "Browser:".$browser['name']." Version:".$browser['version']." Session:".$sessionmsg." Msg=".$this->input->post('msgcustomer'); //mail body
			$subject = "Revision request from ".$_SESSION['username']. ", Order No.: ".$_SESSION['logoWebId'];
			$header ='MIME-Version: 1.0' . "\r\n";
			$header.='Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$header.="From:".$email."\r\n"; //optional headerfields
			mail($recipient, $subject, $mail_body, $header);
			echo "<script>alert('Session has been expired. Please login to post revision.');</script>";
			session_destroy();	
			$this->session->sess_destroy();	
			redirect('client_panel');
			echo "<script>window.location='".base_url()."client_panel'</script>";
			die();	
		}
	
	}  
	public function home(){
			//print_r($_SESSION);
			
			if(!isset($_SESSION['c_id'])){				
				$url = $this->uri->uri_string(); 
				$_SESSION['redirect_url'] = $url;			
				redirect('client_panel/');			
			}
			else {
				$this->load->view('client/home');
			}
		}

	function signin($clientinfoid){	
	//die('here');
		@session_start();		
		$row = $this->clientmodel->getById( 'client_info', 'id', $clientinfoid);
		//echo $this->db->last_query();
		$logoDetails = $this->clientmodel->getById( 'logo_web', 'logo_web_id', $row->logoWebId);
		
		$data['username'] = $row->username;
		$data['password'] = $row->password;
		$this->load->view('client/gotoclientpanel',$data);
		
		//die();
																						
		/*$userdata = array('c_id'=>$row->id,'username'=>$row->companyName ,'logoWebId'=>$row->logoWebId,'c_email'=>@$logoDetails->email_id,'display_name' => @$logoDetails->fname.' '.@$logoDetails->lname);
		$this->session->set_userdata($userdata);
		$_SESSION['c_id'] = $row->id;
		$_SESSION['username'] = $row->companyName;
		$_SESSION['logoWebId'] = $row->logoWebId;
		$_SESSION['c_email'] = @$logoDetails->email_id;
		$_SESSION['display_name'] = @$logoDetails->fname.' '.@$logoDetails->lname;*/
		//print_r($_SESSION);
		//print_r($this->session->all_userdata());
		/*echo 'sss';
		die();*/
		/*echo "<script>window.location='".base_url()."client_panel/home'</script>";					*/
		//redirect('client_panel/realsignin/'.$clientinfoid);
		

	}
	
	public function logosamples(){
			if(!$_SESSION['c_id']){
				$url = $this->uri->uri_string(); 
				$_SESSION['redirect_url'] = $url;
				redirect('client_panel');			
			}
			$condition = "(file_one != '' or file_two != '' or file_three != '' or file_four != '' or file_14 != '' or file_15 != '')";
			//$data['samples'] = $this->clientmodel->getSample($_SESSION['logoWebId'],$condition);
			$data['samples'] = $this->clientmodel->getSample($_SESSION['logoWebId'],array('sent_to' => 'client'));
			$data['slider'] = $this->clientmodel->logo_slider($_SESSION['logoWebId']);
			//echo $this->db->last_query();
                        //echo '<pre>'; print_r($data['samples']);
			$data['id'] = $_SESSION['logoWebId'];
			$this->load->view('client/logo_sample_new',$data);
	}
	
	public function stationary(){
        if(!$_SESSION['c_id']){
            $url = $this->uri->uri_string(); 
			$_SESSION['redirect_url'] = $url;
            redirect('client_panel');			
        }
		//$condition = "(file_five != '' or file_six != '' or file_seven != '' or file_eight != '' or file_nine != '' or file_ten != '' or file_eleven != '' or file_twelve != '' or file_thirteen != '')";
		$data['samples'] = $this->clientmodel->getSample($_SESSION['logoWebId'],array('sent_to' => 'client'));
		$data['id'] = $_SESSION['logoWebId'];
        $this->load->view('client/stationary_samples',$data);
    }	
	
	 public function finalfiles(){
        if(!$_SESSION['c_id']){
            $url = $this->uri->uri_string(); 
			$_SESSION['redirect_url'] = $url;
            redirect('client_panel');			
        }

		$data['final'] = $this->clientmodel->getFinalFiles();
		//echo $this->db->last_query();
        $this->load->view('client/clientFinalFiles',$data);
    }
	
	
	public function paybankmid()
    { 
		if(!$_POST)
		{
			redirect('client_panel/printing'); 
		}
		else
		{
			foreach($_POST as $k => $v)
			{
			$_SESSION[$k] = $v;
			}
			
			//sending email to order@ldg sites
			//echo '<pre>'; print_r($message); die;  
			
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
									
//				$this->email->from('demigod.immortal@gmail.com'); // change it to yours
//				$this->email->to('programmersuman@hotmail.com');// change it to yours
				$this->email->subject('NEW PRINTING ORDER ARRIVED');
				$this->email->from('<'.@$_SESSION['c_email'].'>');
                //$this->email->subject('NEW LOGO/WEB ORDER ARRIVED');
                $this->email->message($message);
				$this->email->to('dinanewa@hotmail.com,anitabade@outlook.com');
				//$this->email->to('programmersuman@hotmail.com');
                //$this->email->to(ORDER_MAIL);
                $this->email->send();
                $this->email->clear();
		}
		}                                  
        redirect('client_panel/paybank');
    }
    public function paybank()
    { 
        if(!@$_SESSION['subtotal'])
        {
			 redirect('client_panel/printing');
        }
        $this->load->view('client/paybank');
	} 
    public function thankyouPage()
    {//echo '<pre>'; print_r($_GET); die;
        if(!$_SESSION['c_id']){
            $url = $this->uri->uri_string(); 
			$_SESSION['redirect_url'] = $url;
            redirect('client_panel');			
        } 
		//echo '<pre>'; print_r($_SESSION); die;
		$q="select * from logo_web where logo_web_id=".@$_SESSION['logoWebId']; 
            $query = $this->db->query($q); 
			
		if(($query->num_rows())>0)
		{ //echo '1121'; die;
				$row = $query->row();
			
				$submit_date = date("Y-m-d H:i:s",mktime (gmdate("H")+5,gmdate("i")+45,gmdate("s"),gmdate("m"),gmdate("d"),gmdate("Y")));

				$qS1="select * from logo_web order by logo_web_id DESC LIMIT 1"; 
				$query11 = $this->db->query($qS1); 
				$row11 = $query11->row();
				$data_1 = array('logo_24hr'=>$_SESSION['extra_package'],
							  'email'=>$row->email_id,
							  'payment' => '1',
							  'logo_web_id'=>$row11->logo_web_id,
							  'submit_date'=>$submit_date);
				$this->db->insert('order_extra', $data_1);
		}
		
		
		$qS="select * from logo_web order by logo_web_id DESC LIMIT 1"; 
		$query1 = $this->db->query($qS); 
		$row1 = $query1->row();
		//echo '<pre>'; print_r($row->fname); die;
		//till here	
		$mailbody="<br><br>Dear ".$row1->fname.",";
		$mailbody=$mailbody."<br><br>Thank you for your payment.";
		$mailbody=$mailbody."<br><br>We have successfully received your print works order.  You will receive your print order within 7-10 business days.";		
		$mailbody=$mailbody."<br><br>Thank You";
		$mailbody=$mailbody."<br><br>Best Wishes";
		$mailbody=$mailbody."<br><br>Admin Staff";
		/// send mail here

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
		$this->email->to($row1->email_id);
		$this->email->send();
		$this->email->clear();
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
						
        redirect('client_panel/printing');
	}
	
	
	// Jet Pay Payment for Printing tab in client panel Starting
	
	public function printing(){
		//echo '<pre>'; print_r($_SESSION); die;
        if(!$_SESSION['c_id']){
            $url = $this->uri->uri_string(); 
			$_SESSION['redirect_url'] = $url;
            redirect('client_panel');			
        }

        $this->load->view('client/printing',$data);
    }
	
	public function printing_1(){
		if(!$_SESSION['c_id']){
				$url = $this->uri->uri_string(); 
				$_SESSION['redirect_url'] = $url;
				redirect('client_panel');			
		}
		
        if(!$_POST)
            {
                 redirect('client_panel/printing');
            }
            else
            {		
				/*if(isset($_SESSION['priceValue']))
				{
					
					redirect('client_panel/cart');
				}
				else{*/
				//echo '<pre>'; print_r($_POST); die;
                foreach($_POST as $k => $v)
                {
                    $_SESSION[$k] = $v;
                }
				//echo '<pre>'; print_r($_SESSION); die;
            }
			redirect('client_panel/cart');
    }
	
	public function add_session(){
		$this->load->view('client/add_session');
	}
	
	public function delete_session(){
		$this->load->view('client/delete_session');
	}
	
	public function cart()
    {
		if(!$_SESSION['c_id']){
				$url = $this->uri->uri_string(); 
				$_SESSION['redirect_url'] = $url;
				redirect('client_panel');			
		}
		
        $this->load->view('client/cart');
	}
	
	 public function jetpaymid()
    { 
		if(!$_SESSION['c_id']){
				$url = $this->uri->uri_string(); 
				$_SESSION['redirect_url'] = $url;
				redirect('client_panel');			
		}
        redirect('client_panel/jetpay'); 
    } 
	
	public function jetpay()
    {
		if(!$_SESSION['c_id']){
				$url = $this->uri->uri_string(); 
				$_SESSION['redirect_url'] = $url;
				redirect('client_panel');			
		}
		//echo '<pre>'; print_r($_SESSION); die;
		$data['row'] = $this->clientmodel->getClientDetails($_SESSION['logoWebId']);
		$this->load->library('mydata');
		$data['value']=$this->mydata->getcountry();
		$data['GatewaySettings']=$this->mydata->gatewaysetting();
		$this->load->view('client/jetpay',$data);        
	}
	
	public function process_transactionNochex()
    {   //echo '<pre>'; print_r($_POST); die;           
        foreach($_POST as $k => $v)
        {                
            $_SESSION[$k] = $v;
        }        
        redirect('client_panel/process_transactionNochex1'); 
    }
	
	public function process_transactionNochex1()
    {		//echo '<pre>'; print_r($_POST); die; 
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
									
				//$this->email->from('demigod.immortal@gmail.com'); // change it to yours
				$this->email->from('<'.ORDER_MAIL.'>','Logo Admin');
				//$this->email->to('programmersuman@hotmail.com');// change it to yours
				$this->email->to('dinanewa@hotmail.com,anitabade@outlook.com');
				$this->email->subject('Printing Order Received');
				$this->email->message($message);
				$this->email->send();
				$this->email->clear();
				
				$this->session_clear_nochex();
		}
		else
		{
			die("Sorry, Record Not Found!!");
		}							
		
    }
	
	function session_clear_nochex(){
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
				
				$this->load->library('email');
				$this->email->set_newline("\r\n");
				$config['protocol'] = 'sendmail';
				$config['mailpath'] = '/usr/sbin/sendmail';
				$config['charset'] = 'iso-8859-1';
				$config['wordwrap'] = TRUE;
				$config['mailtype'] = 'html'; 
				$this->email->initialize($config);
				$this->email->from($row->email,$row->fname);
				$this->email->subject('LDG.COM JETPAY PAYMENT');
				$this->email->message($jetpay_msg);
				//$this->email->to('jagdesh010@gmail.com');
				$this->email->to('dinanewa@hotmail.com,anitabade@outlook.com');
				//$this->email->to('demigod.immortal@gmail.com');
				$this->email->send();
				$this->email->clear();
				
			}
		
		$this->load->library('Jetpay');       
        $data['state'] = $this->jetpay->get_state();
		//echo '<pre>';print_r($data['state']); die;
		//echo '<pre>'; print_r($_SESSION); die;
		if(isset($_SESSION['submit_upgrade']))
            {            //echo 'test11111'; die;
                $transactionID  = $this->jetpay->get_transactionID();
                $trans_type     = $this->jetpay->trans_type;
                $tid            = $this->jetpay->tid;
                $cardnum        = $_SESSION['cardnum'];
                //$cvv            = $_POST['cvv'];
                $expmo          = (strlen($_SESSION['exp_month'])< 2)?'0'.$_SESSION['exp_month']:$_SESSION['exp_month'];
                $expyr          = $_SESSION['exp_year'];
                $name           = $_SESSION['display_name'];
                $amount         = $_SESSION['subtotal']*100;
                $verSub         = '';
                
                $xmlString = "<JetPay>";
        		$xmlString .= "<TransactionType>" . $trans_type . "</TransactionType>";
        		$xmlString .= "<MerchantID>" . $tid . "</MerchantID>";
        		$xmlString .= "<TransactionID>" . $transactionID . "</TransactionID>";
        		$xmlString .= "<CardNum>" . $cardnum . "</CardNum>";
        		$xmlString .= "<CardExpMonth>" . $expmo . "</CardExpMonth>";
        		$xmlString .= "<CardExpYear>" . $expyr . "</CardExpYear>";
        		$xmlString .= "<TotalAmount>" . $amount . "</TotalAmount>";
        		$xmlString .= "<Version><Subscriber>" . $verSub . "</Subscriber></Version>";
                $xmlString .= "</JetPay>";
                	
        		//print "$xmlString.<br>";        
        		//Send XML to JetPay 
        		$xmlResponse = $this->jetpay->sendXMLString($xmlString);
				//echo gettype($amount);
                //echo '<pre>'; print_r($xmlResponse); die;
                if($xmlResponse->ActionCode == '000'){
					
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
				
                    redirect('client_panel/printing');
				}
                else{
                    //$data['ActionCode'] = $xmlResponse->ActionCode;
                    $data['ResponseText'] = $xmlResponse->ResponseText;
				}
                //endif;
                //var_dump($xmlResponse->JetPayResponse);            
            }
	}
	
	public function process_transactionmid_1()
    {   //echo '<pre>'; print_r($_POST); die;           
        foreach($_POST as $k => $v)
        {                
            $_SESSION[$k] = $v;
        }        
        redirect('client_panel/process_transaction_1'); 
    }
	
	public function process_transaction_1()
    {		//echo '<pre>'; print_r($_POST); die; 
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
				
				$this->email->from('<'.ORDER_MAIL.'>','Logo Admin');					
				//$this->email->from('demigod.immortal@gmail.com'); // change it to yours
				//$this->email->to('programmersuman@hotmail.com');// change it to yours
				$this->email->to('dinanewa@hotmail.com,anitabade@outlook.com');
				$this->email->subject('Printing Order Received');
				$this->email->message($message);
				$this->email->send();
				$this->email->clear();
				
				$this->session_unset_cart();
		}
		else
		{
			die("Sorry, Record Not Found!!");
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

			if(COUNTRY == 'USA')
			{
				$jetpay_msg = 'The Client '.$row->fname.' has paid this payment form <strong>Jetpay</strong>.<br /><br />

				<strong>Other Details:</strong> <br /><br />
				Order NO. -> '.@$row->logo_web_id.'<br />
				Package ->Custom Package<br />
				Company ->'.$row->company_name.'<br />
				Email ->'.$row->email_id.'<br />
				';
				
				$this->load->library('email');
				$this->email->set_newline("\r\n");
				$config['protocol'] = 'sendmail';
				$config['mailpath'] = '/usr/sbin/sendmail';
				$config['charset'] = 'iso-8859-1';
				$config['wordwrap'] = TRUE;
				$config['mailtype'] = 'html'; 
				$this->email->initialize($config);
				$this->email->from($row->email,$row->fname);
				$this->email->subject('LDG.COM JETPAY PAYMENT');
				$this->email->message($jetpay_msg);
				//$this->email->to('jagdesh010@gmail.com');
				$this->email->to('dinanewa@hotmail.com,anitabade@outlook.com');
				//$this->email->to('demigod.immortal@gmail.com');
				$this->email->send();
				$this->email->clear();
			}
		
		$this->load->library('Jetpay');       
        $data['state'] = $this->jetpay->get_state();
		//echo '<pre>';print_r($data['state']); die;
		//echo '<pre>'; print_r($_SESSION); die;
		if(isset($_SESSION['submit_upgrade']))
            {            //echo 'test11111'; die;
                $transactionID  = $this->jetpay->get_transactionID();
                $trans_type     = $this->jetpay->trans_type;
                $tid            = $this->jetpay->tid;
                $cardnum        = $_SESSION['cardnum'];
                //$cvv            = $_POST['cvv'];
                $expmo          = (strlen($_SESSION['exp_month'])< 2)?'0'.$_SESSION['exp_month']:$_SESSION['exp_month'];
                $expyr          = $_SESSION['exp_year'];
                $name           = $_SESSION['display_name'];
                $amount         = $_SESSION['subtotal']*100;
                $verSub         = '';
                
                $xmlString = "<JetPay>";
        		$xmlString .= "<TransactionType>" . $trans_type . "</TransactionType>";
        		$xmlString .= "<MerchantID>" . $tid . "</MerchantID>";
        		$xmlString .= "<TransactionID>" . $transactionID . "</TransactionID>";
        		$xmlString .= "<CardNum>" . $cardnum . "</CardNum>";
        		$xmlString .= "<CardExpMonth>" . $expmo . "</CardExpMonth>";
        		$xmlString .= "<CardExpYear>" . $expyr . "</CardExpYear>";
        		$xmlString .= "<TotalAmount>" . $amount . "</TotalAmount>";
        		$xmlString .= "<Version><Subscriber>" . $verSub . "</Subscriber></Version>";
                $xmlString .= "</JetPay>";
                	
        		//print "$xmlString.<br>";        
        		//Send XML to JetPay 
        		$xmlResponse = $this->jetpay->sendXMLString($xmlString);
				//echo gettype($amount);
                //echo '<pre>'; print_r($xmlResponse); die;
                if($xmlResponse->ActionCode == '000'){
					
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
				
                    redirect('client_panel/printing');
				}
                else{
                    $data['ResponseText'] = $xmlResponse->ResponseText;
				}
            }
	}
	
	// Jet Pay Payment for Printing tab in client panel Ending
	
	function finalStationary($final_id){
		$data['final'] = $this->clientmodel->getFinalFiles(array('final_id'=>$final_id));
		//echo $this->db->last_query();
        $this->load->view('client/stationaryFiles',$data);
	}
	
	// Upgrade the available packages from here
	
	public function upgrade_new_package(){
        if(!$_SESSION['c_id']){
            $url = $this->uri->uri_string(); 
			$_SESSION['redirect_url'] = $url;
            redirect('client_panel');			
        }

		$data['upgrade_details'] = $this->clientmodel->getLogoDetails($_SESSION['logoWebId']);
        $this->load->view('client/upgrade_new_package',$data);
    }
	
	public function upgrade_details(){
        if(!$_SESSION['c_id']){
            $url = $this->uri->uri_string(); 
			$_SESSION['redirect_url'] = $url;
            redirect('client_panel');			
        }
		
		foreach($_POST as $k => $v)
        {                
            $_SESSION[$k] = $v;
        }

		$data['client_details'] = $this->clientmodel->getLogoDetails($_SESSION['logoWebId']);
        $this->load->view('client/upgrade-details',$data);
    }
	
	public function process_upgrade_trans()
    {          
        foreach($_POST as $k => $v)
        {                
            $_SESSION[$k] = $v;
        }        
        redirect('client_panel/process_transaction_upgrade'); 
    }
	
	public function process_transaction_upgrade()
    {   		
		
		if(!$_SESSION['c_id'])
        {
            $url = $this->uri->uri_string(); 
			$_SESSION['redirect_url'] = $url;
            redirect('client_panel');			
        }
		
		$client_details = $this->clientmodel->getLogoDetails($_SESSION['logoWebId']);			   
			   
		$message = "Dear <strong>".$_SESSION['display_name']."</strong>,<br /><br />Thank you for upgrading your package in the Client Panel website.<br />Here's your upgraded package.<br><br><br>";
		
		//Silver to Silver with business card
		if($_SESSION['current_active_package'] == 'Silver Logo Package' && $_SESSION['upgraded_packages_name'] == 'Silver Logo With Business Card Designs')
		$message.= $this->load->view('client/email_templates/email_template_silver_with_business', '', true);
		
		elseif($_SESSION['current_active_package'] == 'Silver Logo Package' && $_SESSION['upgraded_packages_name'] == 'Elite Logo Package')
		$message.= $this->load->view('client/email_templates/email_template_elite', '', true);	
		
		//Silver with Complete Stationary
		elseif($_SESSION['current_active_package'] == 'Silver Logo Package' && $_SESSION['upgraded_packages_name'] == 'Silver Logo With Complete Stationary')
		$message.= $this->load->view('client/email_templates/email_template_silver_with_complete', '', true);
		elseif($_SESSION['current_active_package'] == 'Silver Logo With Business Card Designs' && $_SESSION['upgraded_packages_name'] == 'Silver Logo With Complete Stationary')
		$message.= $this->load->view('client/email_templates/email_template_silver_with_complete', '', true);	
		
		//Elite with Complete Stationary		
		elseif($_SESSION['current_active_package'] == 'Silver Logo Package' && $_SESSION['upgraded_packages_name'] == 'Elite Logo With Complete Stationary')
		$message.= $this->load->view('client/email_templates/email_template_elite_with_complete', '', true);
		elseif($_SESSION['current_active_package'] == 'Silver Logo With Business Card Designs' && $_SESSION['upgraded_packages_name'] == 'Elite Logo With Complete Stationary')
		$message.= $this->load->view('client/email_templates/email_template_elite_with_complete', '', true);
		elseif($_SESSION['current_active_package'] == 'Silver Logo With Complete Stationary' && $_SESSION['upgraded_packages_name'] == 'Elite Logo With Complete Stationary')
		$message.= $this->load->view('client/email_templates/email_template_elite_with_complete', '', true);
		elseif($_SESSION['current_active_package'] == 'Elite Logo Package' && $_SESSION['upgraded_packages_name'] == 'Elite Logo With Complete Stationary')
		$message.= $this->load->view('client/email_templates/email_template_elite_with_complete', '', true);
		elseif($_SESSION['current_active_package'] == 'Elite Logo With Business Card Designs' && $_SESSION['upgraded_packages_name'] == 'Elite Logo With Complete Stationary')
		$message.= $this->load->view('client/email_templates/email_template_elite_with_complete', '', true);
				
		//Elite with business card	
		elseif($_SESSION['current_active_package'] == 'Silver Logo Package' && $_SESSION['upgraded_packages_name'] == 'Elite Logo With Business Card Designs')
		$message.= $this->load->view('client/email_templates/email_template_elite_with_business', '', true);
		elseif($_SESSION['current_active_package'] == 'Silver Logo With Business Card Designs' && $_SESSION['upgraded_packages_name'] == 'Elite Logo With Business Card Designs')
		$message.= $this->load->view('client/email_templates/email_template_elite_with_business', '', true);
		elseif($_SESSION['current_active_package'] == 'Elite Logo Package' && $_SESSION['upgraded_packages_name'] == 'Elite Logo With Business Card Designs')
		$message.= $this->load->view('client/email_templates/email_template_elite_with_business', '', true);
		
		$message.= "<br>If you have any questions or concerns, feel free to CONTACT US at 0800-756-9910.<br><br>
					Sincerely,<br>
					Logo Design Guarantee Team";		
		
		$this->load->library('email');
		$this->email->set_newline("\r\n");
		$config['protocol'] = 'sendmail';
		$config['mailpath'] = '/usr/sbin/sendmail';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;
		$config['mailtype'] = 'html'; 
		$this->email->initialize($config);

		//$this->email->from('suman_bestheart@hotmail.com'); // change it to yours
		$this->email->from('<'.INFO_MAIL.'>','Logo Admin');
		$this->email->to($_SESSION['email_id']);// change it to yours
		$this->email->subject('Your package has been upgraded');
		$this->email->message($message);
		$this->email->send();	
		
		$updateArray = array('package'=>$_SESSION['upgraded_packages_name'],'price'=>$_SESSION['upgraded_packages_amount']);
		$this->clientmodel->update('logo_web',$updateArray,array('logo_web_id' => $_SESSION['logoWebId']));
		$this->load->view('client/paybank_upgrade');
    }

    public function thankyouPageUpgrade()
    {//echo '<pre>'; print_r($_GET); die;
        if(!$_SESSION['c_id']){
            $url = $this->uri->uri_string(); 
			$_SESSION['redirect_url'] = $url;
            redirect('client_panel');			
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
		unset($_SESSION['exp_month']);
		unset($_SESSION['exp_year']);
						
        redirect('client_panel/upgrade_new_package');
	}
	
	//Upgrade the available packages ends here
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */