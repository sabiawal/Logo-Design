<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Web extends CI_Controller {
    public function __construct(){
        parent::__construct();
        
        //echo '<pre>';
        //print_r($_SESSION);
        //echo '</pre>';
        $day=date("l");$date=date("j");$month=date("M");$year=date("y");
        $today = 'Midnight '.TIME_ZONE.', <span style="text-decoration:underline;">'.$day.'</span> '.$date.' '.$month.' &lsquo;'.$year;        
        $data['today']      = $today;
        $this->load->vars($data);
        $this->output->cache(1440); // 1440 min( one day) 
    }
	public function index(){
	   $data['page_title'] = 'Web Design';
	   $this->load->view('web/index',$data);
	}
    public function portfolio(){
	   $data['page_title'] = 'Web Portfolio';
	   $this->load->view('web/portfolio',$data);
	}

	  public function portfolio1(){
	   $data['page_title'] = 'Web Portfolio';
	   $this->load->view('web/portfolio1',$data);
	}
    public function guarantee(){
	   $data['page_title'] = 'Web Guarantee';
	   $this->load->view('web/guarantee',$data);
	}
    public function howitworks(){
	   $data['page_title'] = 'Web How It Works';
	   $this->load->view('web/howitworks',$data);
	}
    public function whyus(){
	   $data['page_title'] = 'Web Why Choose Us';
	   $this->load->view('web/whyus',$data);
	}
    public function hosting(){
	   $data['page_title'] = 'Web Hosting';
	   $this->load->view('web/hosting',$data);
	}
    public function seo(){
	   $data['page_title'] = 'Web SEO';
	   $this->load->view('web/seo',$data);
	}
    public function about(){
	   $data['page_title'] = 'Web About Us';
	   $this->load->view('web/about',$data);
	}
    
	
}