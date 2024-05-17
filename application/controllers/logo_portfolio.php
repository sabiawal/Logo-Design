<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Logo_portfolio extends CI_Controller {    
    public function __construct(){
        parent::__construct();
        
        $day=date("l");$date=date("j");$month=date("M");$year=date("y");
        $today = 'Midnight '.TIME_ZONE.', <span style="text-decoration:underline;">'.$day.'</span> '.$date.' '.$month.' &lsquo;'.$year;        
        $data['today']      = $today;
        $this->load->vars($data);
        //echo md5($this->uri->uri_string());
        $this->output->cache(1440); // 1440 min( one day)         
    }	
    // logo by industry
    public function logo_portfolio_accounting(){
        $this->load->view('logo/logo_portfolio_accounting');
    }
    public function logo_portfolio_attorney_legal(){
        $this->load->view('logo/logo_portfolio_attorney_legal');
    }
    public function logo_portfolio_automotive(){
        $this->load->view('logo/logo_portfolio_automotive');
    }
    public function logo_portfolio_bio_techno(){
        $this->load->view('logo/logo_portfolio_bio_techno');
    }
    public function logo_portfolio_church_religious(){
        $this->load->view('logo/logo_portfolio_church_religious');
    }
    public function logo_portfolio_construction(){
        $this->load->view('logo/logo_portfolio_construction');
    }
    public function logo_portfolio_consulting(){
        $this->load->view('logo/logo_portfolio_consulting');
    }
    public function logo_portfolio_dental(){
        $this->load->view('logo/logo_portfolio_dental');
    }
    public function logo_portfolio_education(){
        $this->load->view('logo/logo_portfolio_education');
    }
    public function logo_portfolio_entertainment(){
        $this->load->view('logo/logo_portfolio_entertainment');
    }
    public function logo_portfolio_event(){
        $this->load->view('logo/logo_portfolio_event');
    }
    public function logo_portfolio_financial_service(){
        $this->load->view('logo/logo_portfolio_financial_service');
    }    
    public function logo_portfolio_golf_courses(){
        $this->load->view('logo/logo_portfolio_golf_courses');
    }
    public function logo_portfolio_high_tech(){
        $this->load->view('logo/logo_portfolio_high_tech');
    }
    public function logo_portfolio_illustrative(){
        $this->load->view('logo/logo_portfolio_illustrative');
    }
    public function logo_portfolio_international(){
        $this->load->view('logo/logo_portfolio_international');
    }
    public function logo_portfolio_internet(){
        $this->load->view('logo/logo_portfolio_internet');
    }
    public function logo_portfolio_landscaping(){
        $this->load->view('logo/logo_portfolio_landscaping');
    }
    public function logo_portfolio_medical(){
        $this->load->view('logo/logo_portfolio_medical');
    }
    public function logo_portfolio_networking(){
        $this->load->view('logo/logo_portfolio_networking');
    }
    public function logo_portfolio_poolspa(){
        $this->load->view('logo/logo_portfolio_poolspa');
    }
    public function logo_portfolio_real_estate(){
        $this->load->view('logo/logo_portfolio_real_estate');
    }
    public function logo_portfolio_realtor(){
        $this->load->view('logo/logo_portfolio_realtor');
    }
    public function logo_portfolio_restaurant(){
        $this->load->view('logo/logo_portfolio_restaurant');
    }
    public function logo_portfolio_retail(){
        $this->load->view('logo/logo_portfolio_retail');
    }
    public function logo_portfolio_salon_dayspa(){
        $this->load->view('logo/logo_portfolio_salon_dayspa');
    }
    public function logo_portfolio_service_industry(){
        $this->load->view('logo/logo_portfolio_service_industry');
    }
    public function logo_portfolio_travel(){
        $this->load->view('logo/logo_portfolio_travel');
    }
    public function logo_portfolio_offthewall(){
        $this->load->view('logo/logo_portfolio_offthewall');
    }
    

}