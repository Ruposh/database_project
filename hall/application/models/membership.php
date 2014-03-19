<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Membership extends CI_Model
{
    function validity()
    {
        /*$this->db->where('USERNAME',$this->input->post('username'));
        $this->db->where('PASS',$this->input->post('password'));
        $this->db->from('START_PAGE');
        $q=$this->db->get();
        if($q->num_rows()==1) return true;//echo 'success';
        else return false;//echo 'fail';
        */
 // students account validity ****************************************************************************************
       $this->db->where('STUDENTID',$this->input->post('username'));
       $this->db->where('PASSWORD',$this->input->post('password'));
       $query=$this->db->get('STUDENT');
       if($query->num_rows==1)
       {
           return TRUE;
       }
       
       
    }
        
    
    function create_member()
    {
        $new_data=array(
          
            'STUDENTID'=>(int)($this->input->post('studentid')),
            'PASSWORD'=>$this->input->post('password'),
             'MESSNO'=>(int)($this->input->post('messno')),
              'ROOM_NO'=>(int)($this->input->post('roomno')),
            'EMAIL'=>$this->input->post('email')
            
        );
        
        $q=$this->db->insert('STUDENT',$new_data);
        return $q;
    }
    
}
?>
