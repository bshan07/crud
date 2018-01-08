<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyUser_Model extends CI_Model
{

  public function __construct() 
  { 
         parent::__construct();
         $this->load->database(); 

    } 

   public function ShowUser_Model()
   {
   	$query = $this->db->get('usertable');
   	$query_result = $query->result();
        return $query_result;
   }

   public function ShowUserId_Model($data)
   {
       $this->db->select('*');
       $this->db->from('usertable');
       $this->db->where('id', $data);
       $query = $this->db->get();
       $result = $query->result();
       return $result;
   }
   
  public function update_user_id1($id,$data){
  $this->db->where('id', $id);
  $this->db->update('usertable', $data);
  }

  public function insert_model($data)
  {
   $this->db->insert('usertable',$data);
  }
  
  
  

  
  public function delete_model($id)
   {
   	return $this->db->delete('usertable',array('id'=>$id));
      //return $query;
   }

  
  
  
}
?>