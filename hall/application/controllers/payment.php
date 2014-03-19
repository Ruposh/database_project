<?php

class Payment extends CI_Controller
{
    function newpayment()
    {
        $a=$this->membership->getmonthforpayment();
        $data['mlist']=$a;
       $data['main']='payment_form';
       $this->load->view('includes/admin',$data);
       
    }
    function validate()
    {
        if($this->form_validation->run('newpayment')==false)
        {
            $this->newpayment();
        }
        else
        {
           
            $q=$this->membership->newpayment();
            if($q)
            {
                
                $data['new']='new PAYMENT Done!';
                $a=$this->membership->getmonthforpayment();
                $data['mlist']=$a;
                $data['main']='payment_form';
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
