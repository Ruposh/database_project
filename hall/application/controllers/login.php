<?php

class Login extends CI_Controller
{
    function index()
    {
        $log=$this->session->userdata('is_logged_in');
        if(isset($log) && $log==true){
            //redirect('sites/');
        }
        else
        {
            $data['main']='login_form';
            $this->load->view('includes/template',$data);
        }
    }
    function validate()
    {
       /* $log=$this->session->userdata('is_logged_in');
        if(isset($log) && $log==true){
            redirect('sites/member');
        }
        else
        {*/    
        
             /*$this->load->model('membership');
             $q=$this->membership->validity();
             if($q)
             {
                 $data=array(

                  'username' => $this->input->post('username'),
                 'is_logged_in'=>true

                 );
                 $this->session->set_userdata($data);
                 redirect('sites/member');

             }*/
              $data=array(
                 
               'loggedas'=> $this->input->post('logged_as'),
               'username'=> $this->input->post('username'),
               'password'=> $this->input->post('password')
                    
               );
             if($data['username']=='Admin' && $data['loggedas']=='Admin'&& $data['password']=='xxx')
             {
                 $this->session->set_userdata($data);
                 redirect('adminhome');
             }
             
             // for student login **********************************************************
             elseif ($data['loggedas']=='Student')
             {
                
                 $this->load->model('membership');
                 $query=$this->membership->validity();
                 
                 if($query){
                     $this->session->set_userdata($data);
                     redirect('studenthome');
                 }
                 else
             {
                 $this->index();
             }
            
             }
             
      // for manager login
             
             elseif ($data['loggedas']=='Manager')
             {
                
                 $this->load->model('manager_validity');
                 $query=$this->manager_validity->validity();
                 
                 if($query){
                     $this->session->set_userdata($data);
                     redirect('managerhome');
                 }
                 else
             {
                 $this->index();
             }
            
             }

            else
             {
                 $this->index();
             }
             
    }
    function signup()
    {
        $data['main']='signup_form';
        $this->load->view('includes/template',$data);
        
        
    }
    
    function create_member()
    {
        $this->form_validation->set_rules('username','USER','trim|required');
        $this->form_validation->set_rules('password','pass','trim|required|min_length[5]');
        
        if($this->form_validation->run()==false)
        {
            $this->signup();
        }
        else
        {
            $this->load->model('membership');
            $q=$this->membership->create_member();
            if($q)
            {
                $data['main']='new_member_created';
                $this->load->view('includes/template',$data);
            }
            else
            {
                $this->signup();
            }
        }
        
        
    }
    
    
}
?>
