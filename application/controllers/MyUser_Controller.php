<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class MyUser_Controller extends CI_Controller
{
    public function __construct() 
     { 
         parent::__construct();
         //$this->load->database();
         $this->load->model('MyUser_Model');
               



    } 
    public function index()
    {
        //$this->load->database();
        $id = $this->uri->segment(3);
        
        //$this->load->model('MyUser_Model');
        $data['usertable'] = $this->MyUser_Model->ShowUser_Model();

        $data['userdata']=$this->MyUser_Model->ShowUserId_Model($id);
        
         $this->load->view('UpdateForm',$data);
        //$this->load->view('user_tp');
       
      
        
    }
    
    
    
    
    
    
    public function show_data()
    {
        $this->load->database();
		$this->load->model('MyUser_Model');
		$data['userdata']=$this->MyUser_Model->ShowUser_Model();
		$this->load->view('user_homepage',$data);
       
      
        
    }
    
    
    
    public function update_user_id1() {
    
    $id= $this->input->post('id');
    $data = array(
    'username' => $this->input->post('username'),
    'first_name' => $this->input->post('first_name'),
    'last_name' => $this->input->post('last_name'),
    'location' => $this->input->post('location'),
    'phone' => $this->input->post('phone'),
    'email' => $this->input->post('email')
            
    );
    $this->MyUser_Model->update_user_id1($id,$data);
    
    $this->show_data();
    }
    
    
    
    public function insert_controller()
    {
        $this->load->helper(array('form', 'url'));
    	$this->load->library('form_validation');
    	$this->form_validation->set_error_delimiters('<div class="error">', '</div>', 'required');
    	$this->form_validation->set_rules('username', 'username', 'min_length[5]|max_length[10]');
    	$this->form_validation->set_rules('first_name', 'first_name');
    	$this->form_validation->set_rules('last_name', 'last_name');
        $this->form_validation->set_rules('location', 'location');
    	$this->form_validation->set_rules('email', 'email','valid_email|is_unique[usertable.email]|max_length[50]');
    	$this->form_validation->set_rules('phone', 'phone','numeric|max_length[10]');

    	if($this->form_validation->run()==FALSE)
    	{
    		$this->load->view('userform');

    	}
        else{
    	$data = array(
       'username' => $this->input->post('username'),
       'first_name' => $this->input->post('first_name'),
       'last_name' => $this->input->post('last_name'),
       'location' => $this->input->post('location'),
       'email' => $this->input->post('email'),
       'phone' => $this->input->post('phone')
       );


		//$this->load->model('insert_model');
        $this->MyUser_Model->insert_model($data);
        $data['userdata']="done";
        $this->load->view('userform', $data);

        //$this->load->database();
    	
		
		//$this->load->library('form_validation');
        }


    }


    
    
    
    public function delete_user($id)
{
	 //$this->load->model('delete_model');
	
	if($this->MyUser_Model->delete_model($id))
	{
		$this->session->set_flashdata('response','Deletion Succefull');
	}
	else
	{
		$this->session->set_flashdata('response','Oppsss!! Failed to delete record');

	}
	$this->load->model('MyUser_Model');
	$data['userdata']=$this->MyUser_Model->ShowUser_Model();
    $this->load->view('user_homepage',$data);
	//return redirect(base_url()."select_view");
}
    
    
    
}

?>