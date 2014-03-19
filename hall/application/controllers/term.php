<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class term extends CI_Controller
{
    function __construct() {
        parent::__construct();
    }
    function createterm()
    {
        $data['main']='create_term';
        $this->load->view('includes/admin',$data);
    }
    function validate()
    {
        if($this->form_validation->run('createterm')==false)
        {
            $this->createterm();
        }
        else
        {
            $this->load->model('membership');
            $q=$this->membership->create_term();
            if($q)
            {
                $data['new']='new term created';
                $data['main']='create_term';
                $this->load->view('includes/admin',$data);
                
                
            }
            else
            {
                $data['error']='database error';
                $this->createterm();
            }
        }
    }
}
?>
