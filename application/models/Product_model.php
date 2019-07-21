<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Product_model extends CI_Model {
  public function view(){
    return $this->db->get('produk')->result();
  }
  
 
  public function upload(){
    $config['upload_path'] = 'application/views/images/products/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['max_size']  = "7048";
    $config['max_width']            = "4096";
    $config['max_height']           = "3072";
   
  
    $this->load->library('upload', $config); 
    if($this->upload->do_upload('input_gambar')){  
      $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
      return $return;
    }else{   
      $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
      return $return;
    }
  }
  
 
  public function save($upload){
    $data = array(
      'DESKRIPSI'=>$this->input->post('deskripsi'),
      'IMAGE' => $upload['file']['file_name'],
       'NAMA'=>$this->input->post('nama'),
      'HARGA' => $this->input->post('harga'),
   
    );
    
    $this->db->insert('produk', $data);
  }
}