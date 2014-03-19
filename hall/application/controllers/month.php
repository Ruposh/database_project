<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class month extends CI_Controller
{
    function __construct() {
        parent::__construct();
    }
    function createmonth()
    {
        $result=$this->membership->current_term();
       $data['start']=$result['START_DATE'];
       $data['end']=$result['END_DATE'];
        
        $data['main']='create_month';
        $this->load->view('includes/admin',$data);
    }
    function validate()
    {
        if($this->form_validation->run('createmonth')==false)
        {
            $this->createmonth();
        }
        else
        {
           
            $q=$this->membership->create_month();
            if($q)
            {
                $result=$this->membership->current_term();
                $data['start']=$result['START_DATE'];
                $data['end']=$result['END_DATE'];
                $data['new']='new month created';
                $data['main']='create_month';
                $this->load->view('includes/admin',$data);
                
                
            }
            else
            {
                $data['error']='database error';
                $this->createmonth();
            }
        }
    }
}
?>


