<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  function __construct()
  {
        parent::__construct();
        $this->load->helper('url');
  }

  public function index()
  {
    $data['assets']="http://localhost/iseooid/assets/admin/";
    $data['head']=$this->load->view('admin/template/head',$data,true);
    $data['header']=$this->load->view('admin/template/header',$data,true);
    $data['sidebar']=$this->load->view('admin/template/sidebar',$data,true);
    $data['contents']=$this->load->view('admin/contents/main',$data,true);
    $data['footer']=$this->load->view('admin/template/footer',$data,true);
    $this->load->view('admin/index',$data);
  }
  public function revenue()
  {
    $data['assets']="http://localhost/iseooid/assets/admin/";
    $data['head']=$this->load->view('admin/template/head',$data,true);
    $data['header']=$this->load->view('admin/template/header',$data,true);
    $data['sidebar']=$this->load->view('admin/template/sidebar',$data,true);
    $data['contents']=$this->load->view('admin/contents/revenue',$data,true);
    $data['footer']=$this->load->view('admin/template/footer',$data,true);
    $this->load->view('admin/index',$data);
  }
  public function eventInfo()
  {
    $data['assets']="http://localhost/iseooid/assets/admin/";
    $data['head']=$this->load->view('admin/template/head',$data,true);
    $data['header']=$this->load->view('admin/template/header',$data,true);
    $data['sidebar']=$this->load->view('admin/template/sidebar',$data,true);
    $data['contents']=$this->load->view('admin/contents/eventInfo',$data,true);
    $data['footer']=$this->load->view('admin/template/footer',$data,true);
    $this->load->view('admin/index',$data);
  }
  public function downloadedApps()
  {
    $data['assets']="http://localhost/iseooid/assets/admin/";
    $data['head']=$this->load->view('admin/template/head',$data,true);
    $data['header']=$this->load->view('admin/template/header',$data,true);
    $data['sidebar']=$this->load->view('admin/template/sidebar',$data,true);
    $data['contents']=$this->load->view('admin/contents/downloadedApps',$data,true);
    $data['footer']=$this->load->view('admin/template/footer',$data,true);
    $this->load->view('admin/index',$data);
  }
  public function demographics()
  {
    $data['assets']="http://localhost/iseooid/assets/admin/";
    $data['head']=$this->load->view('admin/template/head',$data,true);
    $data['header']=$this->load->view('admin/template/header',$data,true);
    $data['sidebar']=$this->load->view('admin/template/sidebar',$data,true);
    $data['contents']=$this->load->view('admin/contents/demographics',$data,true);
    $data['footer']=$this->load->view('admin/template/footer',$data,true);
    $this->load->view('admin/index',$data);
  }
  public function eventManager()
  {
    $data['assets']="http://localhost/iseooid/assets/admin/";
    $data['head']=$this->load->view('admin/template/head',$data,true);
    $data['header']=$this->load->view('admin/template/header',$data,true);
    $data['sidebar']=$this->load->view('admin/template/sidebar',$data,true);
    $data['contents']=$this->load->view('admin/contents/eventManager',$data,true);
    $data['footer']=$this->load->view('admin/template/footer',$data,true);
    $this->load->view('admin/index',$data);
  }
  public function report()
  {
    $data['assets']="http://localhost/iseooid/assets/admin/";
    $data['head']=$this->load->view('admin/template/head',$data,true);
    $data['header']=$this->load->view('admin/template/header',$data,true);
    $data['sidebar']=$this->load->view('admin/template/sidebar',$data,true);
    $data['contents']=$this->load->view('admin/contents/report',$data,true);
    $data['footer']=$this->load->view('admin/template/footer',$data,true);
    $this->load->view('admin/index',$data);
  }
}
