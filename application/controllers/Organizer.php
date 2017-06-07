<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Organizer extends CI_Controller {

  function __construct()
  {
        parent::__construct();
        $this->load->helper('url');
  }

  public function index()
	{
    $data['assets']="http://localhost/iseooid/assets/organizer/";
    $data['head']=$this->load->view('organizer/template/head',$data,true);
    $data['navigation']=$this->load->view('organizer/template/navigation',$data,true);
    $data['content']=$this->load->view('organizer/contents/main',$data,true);
    $data['footer']=$this->load->view('organizer/template/footer',$data,true);
		$this->load->view('organizer/index',$data);
	}
  public function notula()
	{
    $data['assets']="http://localhost/iseooid/assets/organizer/";
    $data['head']=$this->load->view('organizer/template/head',$data,true);
    $data['navigation']=$this->load->view('organizer/template/navigation',$data,true);
    $data['content']=$this->load->view('organizer/contents/notula',$data,true);
    $data['footer']=$this->load->view('organizer/template/footer',$data,true);
		$this->load->view('organizer/index',$data);
	}
  public function create_event()
	{
    $data['assets']="http://localhost/iseooid/assets/organizer/";
    $data['head']=$this->load->view('organizer/template/head',$data,true);
    $data['navigation']=$this->load->view('organizer/template/navigation',$data,true);
    $data['content']=$this->load->view('organizer/contents/create_event',$data,true);
    $data['footer']=$this->load->view('organizer/template/footer',$data,true);
		$this->load->view('organizer/index',$data);
	}
}
