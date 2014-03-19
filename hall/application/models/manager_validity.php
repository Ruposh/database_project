<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class manager_validity extends CI_Model
{
    function validity()
    {
        
        // manager's account validity ****************************************************************************************
       $this->db->where('STUDENTID',$this->input->post('username'));
       $this->db->where('PASSWORD',$this->input->post('password'));
       $query=$this->db->get('MANAGER');
       if($query->num_rows==1)
       {
           return TRUE;
       }
       
       
    }
}