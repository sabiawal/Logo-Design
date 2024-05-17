<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Error extends CI_Controller {
    function nopage(){
        $data['page_title'] = '404 Error. Page Not Found';
        $this->load->view('errors/404',$data);
    }    
}