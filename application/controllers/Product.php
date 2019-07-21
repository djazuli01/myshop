<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Product extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('Product_model');
  }
  
  public function index(){
    $data['produk'] = $this->Product_model->view();
    $this->load->view('view', $data);
  }
  
  public function tambah(){
    $data = array();
    
    if($this->input->post('submit')){ 
      $upload = $this->Product_model->upload();
      
      if($upload['result'] == "success"){ 
        $this->Product_model->save($upload);
        
        redirect(''); 
      }else{ 
        $data['message'] = $upload['error'];
      }
    }
    
    $this->load->view('jual_barang', $data);
  }

 public function about(){
    $data['produk'] = $this->Product_model->view();
    $this->load->view('about', $data);
  }

  public function contact(){
    $data['produk'] = $this->Product_model->view();
    $this->load->view('contact', $data);
  }

}