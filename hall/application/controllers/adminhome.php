<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Adminhome extends CI_Controller
{
    function index()
    {
        $data['main']='admin_home';
        $this->load->view('includes/admin',$data);
    }
    function createStudentAccount()
    {
        $data['main']='signup_form';
        $this->load->view('includes/admin',$data);
    }
    function create()
    {
       
        
        if($this->form_validation->run('signup')==false)
        {
            $this->createStudentAccount();
        }
        else
        {
            $this->load->model('membership');
            $q=$this->membership->create_member();
            if($q)
            {
                $data['new']='new student created';
                $data['main']='signup_form';
                $this->load->view('includes/admin',$data);
                
                
            }
            else
            {
                $this->createStudentAccount();
            }
        }
        
    }
}
