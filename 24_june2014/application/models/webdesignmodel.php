<?php 
class Webdesignmodel extends CI_Model 
{
    function __construct()
    { 
        parent::__construct();
    }
    
    function insert()
    {
        if($_SESSION['fname'] == '0' || $_SESSION['company_name'] == '0')
        {
            die();
        }
        else
        {
            $tax_rate=$this->get_tax_rate(SITE_ID);
            $site = ORDERED_SITE;
            $ip = $_SERVER['REMOTE_ADDR'];
            $company_name = stripslashes(@$_SESSION['company_name']);
            $contact_info = stripslashes(@$_SESSION['contact_info']);
            $email = stripslashes(@$_SESSION['email_id']);
            $contact_phone = stripslashes(@$_SESSION['contact_phone']);
            $domain_name = stripslashes(@$_SESSION['domain_name']);
            $web_idea = stripslashes(@$_SESSION['web_idea']);
            $comment = stripslashes(@$_SESSION['comment']);
            $best_time = stripslashes(@$_SESSION['best_time']);
            $files = stripslashes(@$_SESSION['file']);
            $web_package = stripslashes(@$_SESSION['web_package']);
            $logo_package = stripslashes(@$_SESSION['logo_package']);	    		
            $web_price = stripslashes(@$_SESSION['web_price']);
            $logo_price = stripslashes(@$_SESSION['logo_price']);
            $pageno=stripslashes(@$_SESSION['pageno']);         
            
            //Nochex Properties
            $web_price_dollar = $web_price*CONVERSION_MULTIPLYER2;
            $logo_price_dollar = $logo_price*CONVERSION_MULTIPLYER2;
            $web_price_pound = $web_price * CONVERSION_MULTIPLYER;
            $logo_price_pound = $logo_price * CONVERSION_MULTIPLYER;
            $total = $web_price_pound + $logo_price_pound;        
            
            $mainTime=date("Y-m-d H:i:s",mktime (gmdate("H")+5,gmdate("i")+45,gmdate("s"),gmdate("m"),gmdate("d"),gmdate("Y")));
            
            //insearting logo_web table for logo order if selected this form web order
            if(isset($_SESSION['logo_package']))
            {
                $data2 = array('fname' => $contact_info,'lname' => '','company_name' => $company_name,'phone_no' => $contact_phone,'email_id' => $email,'se_email_id' => '','cmp_logo_name'=> '','tagline'=>'','business_detail' =>$web_idea.'<br />'.$comment,
                'm5_colors'=>'',
                'colors'=>'',
                'm5_no_colors'=>'',
                'no_colors'=>'',
                'idea_of_clint'=>'',
                'contact_details'=>'',            
                'web' => $web_price, 
                'brouchure'=>'',
                'options'=>'',
                'web_gold' => $web_package,
                'web_elite'=>'',
                'package' => $logo_package,
                'dollar'=>'0',
                'price' => $logo_price,
                'files'=>'',
                'site_id' => SITE_ID, 
                'authentication_code' => @$_SESSION['authentication_code'],
                'submit_date' => $mainTime,
                'ip' => $ip);
                if(isset($_SESSION['reseller_id']))
                {
                    $data2['reseller_id'] = $_SESSION['reseller_id'];                
                }
                
                if(isset($_SESSION['insert_id2']) && $_SESSION['insert_id2'] != '')
                {
    				
                    if($_SESSION['logo_package'] == '')
                    {  
                        //if unselect this service selecting upto next step then delete this row and  unset insert_id2                    
                        $this->db->delete('logo_web', array('logo_web_id' => $_SESSION['insert_id2']));
    					 
                        
                    }
                    else
                    {
                        $this->db->update('logo_web', $data2,array("logo_web_id" => $_SESSION['insert_id2']));
    					$isUpdate = 1;
                    }
                    
                    // Insearting/Updating values in logo_web_total table
    				// Commented by padam
                    /*if(isset($_SESSION['logo_web_total_id']) && $_SESSION['logo_web_total_id'] == '')
                    {  
                        $this->db->update('logo_web_total', $logo_web_total,array("id" => $_SESSION['logo_web_total_id']));
                    }
                    else
                    {
                        $this->db->insert('logo_web_total',$logo_web_total);
                    }     */           
                }
                else
                {
                    if($_SESSION['logo_package'] != '')
                    {
                        $this->db->insert('logo_web',$data2); 
                        $_SESSION['insert_id2'] = $this->db->insert_id(); 
    					$isUpdate = 0;
    					
                    }                
                }           
            }        
            
            //logo_web_id value        
            if(isset($_SESSION['insert_id2']) && $_SESSION['insert_id2'] !='')
            {
                $logo_id = $_SESSION['insert_id2'];
            }
            else
            {
                $logo_id = 0;
            }
            
            $data = array('company_name2' => $company_name, 'submit_date2' => $mainTime, 'contact_info' => $contact_info,'email' => $email,'contact_phone' => $contact_phone,'best_time' => $best_time,'domain_name' => $domain_name,'web_idea' => $web_idea,'comment' => $comment,'image' => $files,'priceInDollar' => $web_price_dollar,'priceInPound' => $web_price_pound,'logo_package' => $logo_package,'logo_price' => $logo_price,'ip' => $ip,'pageno' => $pageno,'site' => $site);
            $this->db->insert('pp', $data);
            
            
            $data1 = array('company_name' => $company_name, 'submit_date' => $mainTime,'order_date'=>$mainTime, 'contact_info' => $contact_info,'email' => $email,'contact_phone' => $contact_phone,'best_time' => $best_time,'domain_name' => $domain_name,'web_idea' => $web_idea,'comment' => $comment,'image' => $files,'priceInDollar' => $web_price_dollar,'priceInPound' => $web_price_pound,'logo_package' => $logo_package,'logo_price' => $logo_price,'ip' => $ip,'pageno' => $pageno,'site' => $site,'web_package' => $web_package,'logo_web_id' => $logo_id);
            if(isset($_SESSION['reseller_id']))
            {
                $data1['reseller_id'] = $_SESSION['reseller_id'];                
            }
            if(isset($_SESSION['insert_id']) && $_SESSION['insert_id'] != '')
            {
                $this->db->update('web_order', $data1,array("web_id" => $_SESSION['insert_id']));
    			$isWebUpdate = 1;
            }
            else
            {
                $this->db->insert('web_order',$data1); 
                $_SESSION['insert_id'] = $this->db->insert_id(); 
    			$isWebUpdate = 0;
            }
            
            $d = array('web_id'=>$_SESSION['insert_id']);
            $this->db->update('logo_web', $d,array("logo_web_id" => $_SESSION['insert_id2'])); 
            
            
            
            // calculating values for logo_web_total table
            if(COUNTRY == 'UK')
            {
                $web_price = $web_price_pound;
            } 
            else
            {
                $web_price = $web_price_dollar;
            }
            $discount_amount        = 0;
            $sub_total_before_tax   = $web_price-$discount_amount;
    		
            $tax_amount             = round($sub_total_before_tax*$tax_rate,2);
            $net_total              = $sub_total_before_tax + $tax_amount;
            
            $logo_web_total = array(
            'submit_date'=>$mainTime,
            'web_id'   => $_SESSION['insert_id'],
            'site_id'       => SITE_ID,
            'promotional_id'=> '0',
            'currency'      => CURRENCY,
    		'sub_total' => $web_price,
            'sub_total_before_discount' => $web_price,
            'discount_amount'  =>$discount_amount,
            'sub_total_before_tax' => $sub_total_before_tax,
    		'tax_amount'=>$tax_amount,
            'net_total'=>$net_total            
            );
    						 
            
            // Insearting/Updating values in logo_web_total table
            //if(isset($_SESSION['logo_web_total_id']) && $_SESSION['logo_web_total_id'] == '')
    		if($isWebUpdate==1)
            {  
                $this->db->update('logo_web_total', $logo_web_total,array("web_id" => $_SESSION['insert_id']));
    			
            }
            else
            {
                $this->db->insert('logo_web_total',$logo_web_total);
    			
            }  
    		
    		// Insearting/Updating values in logo_web_total table
    		if($_SESSION['logo_package'] == '')
    		{
    			 $this->db->delete('logo_web_total', array('logo_web_id' => $_SESSION['insert_id2']));
    			 unset($_SESSION['insert_id2']);
    		}
    		else
    		{
    			// calculating values for logo_web_total table 
                $discount_amount        = 0;
                $sub_total_before_tax   = $logo_price-$discount_amount;
                $tax_amount             = round($sub_total_before_tax*$tax_rate,2);
                $net_total              = $sub_total_before_tax + $tax_amount;
    			$logo_web_total1 = array(
    				'submit_date'=>$mainTime,
    				'logo_web_id'   => $_SESSION['insert_id2'],
    				'site_id'       => SITE_ID,
    				'promotional_id'=> '0',
    				'currency'      => CURRENCY,
    				'sub_total' => $logo_price,
    				'sub_total_before_discount' => $logo_price,
    				'discount_amount'  =>$discount_amount,
    				'sub_total_before_tax' => $sub_total_before_tax,
    				'tax_amount'=>$tax_amount,
    				'net_total'=>$net_total            
    				);
    			if($isUpdate == 1)		 
    			{              
    				$this->db->update('logo_web_total', $logo_web_total1,array("logo_web_id" => $_SESSION['insert_id2']));
    			}
    			else if ($isUpdate == 0)
    			{            
    				$this->db->insert('logo_web_total',$logo_web_total1);
    			}   
    		}
        }
    }
    
    function update()
    {
        if($_SESSION['fname'] == '0' || $_SESSION['company_name'] == '0')
        {
            die();
        }
        else
        {
            $submit_date = date("Y-m-d H:i:s",mktime (gmdate("H")+5,gmdate("i")+45,gmdate("s"),gmdate("m"),gmdate("d"),gmdate("Y")));
                    
            $query = $this->db->query("SELECT `email`,`company_name`,`contact_info` FROM `web_order` where web_id='".$_GET['web_id']."'");        
            $row = $query->row();            
            
            $email  = $row->email;
            $contact_info = $row->contact_info;
            $logo_id =  $row->logo_web_id;
            $company_name = $row->company_name;
        
            $data1 = array('payment_status' => 1,'order_date'=>$submit_date,'submit_date'=>$submit_date);
            $this->db->where('web_id', $_GET['web_id']);
            $this->db->update('web_order',$data1); 
            
            $mailbody="<br><br>Dear ".$contact_info.",<br><br>Thank you for your payment.<br><br>Thank You<br><br>Best Wishes<br><br>Admin Staff";
           
            // send message here
            $this->load->library('email');
            $this->email->set_newline("\r\n");
            $config['protocol'] = 'sendmail';
            $config['mailpath'] = '/usr/sbin/sendmail';
            $config['charset'] = 'iso-8859-1';
            $config['wordwrap'] = TRUE;
            $config['mailtype'] = 'html'; 
            $this->email->initialize($config);
            
            $this->email->from(ORDER_MAIL,'Web Admin');
            $this->email->subject('Thank you for your payment');
            $message = $mailbody;        
            $this->email->message($message);      
            $this->email->to($email);
            $this->email->send();
            $this->email->clear();
            
            if(isset($_GET['logo_id']) && $_GET['logo_id'] != '') // checking logo order on web order
            {
                //updating logo payment status if exists logo order
                $data2 = array('payment' => '1','submit_date'=>$submit_date);
                $this->db->where('logo_web_id', $_GET['logo_id']);
                $this->db->update('logo_web',$data2); 
                
                //username and password for logo client
                $username   = $email;
                $password   = $this->generate_unquie_no();
                
                $data3 = array('username' => $username, 'password' => $password, 'logoWebId' => @$_GET['logo_id'],'companyName' => $company_name);
                $this->db->insert('client_info', $data3);
                
                $mailbody="<br><br>Dear ".$contact_info.",";
                $mailbody=$mailbody."<br><br>Thank you for your payment.";
                $mailbody=$mailbody."<br><br>We are now sending you a link by which you can login to your very own personal design account.";
                $mailbody=$mailbody."<br><br>This will allow you to view all your designs in one place making the design process convenient and simple for you.";
                $mailbody=$mailbody."<br><br>Please click the link below to login to your very own personal design account.";
                $mailbody=$mailbody."<br><br>We strongly recommend you save the username and password for future use.";
                $mailbody=$mailbody."<br><br><strong>Username</strong>: ".$username;
                $mailbody=$mailbody."<br><br><strong>Password</strong>: ".$password;
                $mailbody=$mailbody."<br><br>Link: <a href='".base_url()."client_panel'>".base_url()."client_panel</a>";
                $mailbody=$mailbody."<br><br>Thank You";
                $mailbody=$mailbody."<br><br>Best Wishes";
                $mailbody=$mailbody."<br><br>Admin Staff"; 
                
                $this->email->from(ORDER_MAIL,'Logo Admin');
        		$this->email->subject('Login details of your Personal Account(Logo)');
        		$this->email->message($mailbody);
        		$this->email->to($email);
        		$this->email->send();
                $this->email->clear();            
                
            }
        }		
    }
    function generate_unquie_no()
    {    
        $pin_Length =12;    
        $pin_Range = 1;    
        $acceptednumbers= '123456789';    
        $max = strlen($acceptednumbers)-1;    
        $pin_num = null;    
        for($x=0; $x <$pin_Range; $x++)
        {    
        	for($i=0; $i < $pin_Length; $i++)
            {    
        		$pin_num .= $acceptednumbers{rand(0, $max)};    
       		}    
        	$retrn_value=$pin_num;    
        	$pin_num = null;    
        }    
        return $retrn_value;    
    }
	function get_tax_rate($site_id)
    {        
        $this->db->where('site_id', $site_id);
        $query = $this->db->get('tbl_sites');            
        $row = $query->num_rows();
        if($row > 0)
        {
            $rate = $query->row();
            $return_value = $rate->tax_rate;
        } 
        else
        {
            $return_value = 0;
                    
        }
        return $return_value;
    }
}
?>