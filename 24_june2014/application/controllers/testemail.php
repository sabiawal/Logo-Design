<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Testemail extends CI_Controller 
{	
    public function __construct()
    {
        parent::__construct();        

    }
	public function index()
    {
        
        if(isset($_POST['submit']))
        {
            $this->load->library('email');
    		$this->email->set_newline("\r\n");
    		$config['protocol'] = 'sendmail';
    		$config['mailpath'] = '/usr/sbin/sendmail';
    		$config['charset'] = 'iso-8859-1';
    		$config['wordwrap'] = TRUE;
            $config['mailtype'] = 'html'; 
    		$this->email->initialize($config);
            
            $message = $this->load->view('emails/testemail', '', true);                     
            $this->email->from(RESELLER_MAIL,'Reseller Service');
    		$this->email->subject('Congratulations: Your reseller account details');
    		$this->email->message($message);
    		$this->email->to(@$_POST['email_id']);
    		$this->email->send();
            unset($_POST);
            //redirect('testemail/index');
        }
        $this->load->view('testemail');
        
	}
    
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */