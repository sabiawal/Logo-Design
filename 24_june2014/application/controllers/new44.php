<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class New44 extends CI_Controller {
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
    }
	public function index(){
	   
        //$this->load->view('index');
	}
    
    public function newpackages()
    {
        $this->load->model('logodesignmodel');
        $row = $this->logodesignmodel->get_rows('new_packages');       
        if(isset($_GET['pid']))
        {
            $num = intval($_GET['pid']);            
            if($num <= 0 || $num > $row)
            {               
                $package_id = 0;
            }
            else
            {
                if($num == 45 || $num == 46)
                {
                    $package_id = 0;
                }
                else
                {
                    $package_id = $num;
                }
                
            }            
        }
        else
        {
            $package_id = 0;
        }  
        //echo $package_id;      
        
        if ($package_id != 0)
		{
			$packages['new_package'] = $this->logodesignmodel->getpackages($package_id);        
			$this->load->view('new44/newpackages',$packages);
		}
		else
			$this->load->view('new44/index.html');
	}
    
    public function category(){
        $this->load->view('new44/category');
	}
    
    public function delcache(){
        $this->load->view('new44/delcache');
	}
    
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */