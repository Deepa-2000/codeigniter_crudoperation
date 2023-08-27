<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
    function index()
    {
        $this->load->model('User_model');
        $users=$this->User_model->all();
        $data=array();
        $data['users']=$users;
        $this->load->view('list',$data);
    }
    function create()
    {
        $this->load->model('User_model');
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');

        if ($this->form_validation->run()== false) {
            
            $this->load->view('create');
        }else{
            $formArray=array();
            $formArray['name']=$this->input->post('name');
            $formArray['email']=$this->input->post('email');
            $formArray['created_at']=date('Y-m-d');
            $this->User_model->create($formArray);
            $this->session->set_flashdata('success','Record Added Successfully!');
            redirect(base_url().'index.php/user/index');

        }
    }
    function edit($userId)
    {   
        $this->load->model('User_model');
        $user=$this->User_model->getUser($userId);
        print_r($user);
        
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        
        if ($this->form_validation->run()== false) {
            
            $this->load->view('edit',$user);

        }
        else{
            $formArray=array();
            $formArray['name']=$this->input->post('name');
            $formArray['email']=$this->input->post('email');
            $this->User_model->updateUser($userId,$formArray);
            $this->session->set_flashdata('success','Record Updated Successfully!');
            return redirect(base_url().'index.php/user/index');
        }
    }

    function delete($userId)
    {   
        $this->load->model('User_model'); //load model
		$data=$this->input->getUser($userId); //receive id of the record
		$this->User_model->delete_data($data['user_id']);
        return $this->response->redirect(base_url('index.php/user/list.php'));
    }

}

?>