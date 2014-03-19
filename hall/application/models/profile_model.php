<?php

class profile_model extends CI_Model{
    function getAll()
    {
        $this->load->login();
        $q=$this->db->query("SELECT STUDENTID FROM STUDENT");
        if($q->num_rows()>0)
        {
            foreach($q->result()as $row){
                $data[]=$row;
            }
            return $data;
           }
           
       }
   }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

