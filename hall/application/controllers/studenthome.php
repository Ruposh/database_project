<?php


class studenthome extends CI_Controller{
    function index()
    {
        $data['main']='stuednt_home_page';
        $this->load->view('student_home_page',$data);
    }
    function profile()
    {
        $data['main']='profile_page';
        $this->load->view('student_home_page',$data);
    }
     function dining()
    {
        $this->load->view('dining_page');
    }
     function notice()
    {
        $this->load->view('notice_page');
    }
     function application()
    {
        $this->load->view('application_page');
    }
     function complain()
    {
        $this->load->view('complain_page');
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

