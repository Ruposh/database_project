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
    function create_term()
    {
        $new_data=array(
          
            'NAME'=>$this->input->post('termname'),
            'START_DATE'=>$this->input->post('start_date'),
             'END_DATE'=>$this->input->post('end_date')
             
            
        );
        
        $q=$this->db->insert('TERM',$new_data);
        return $q;
    }
    function current_term()
    {
        
        $r=$this->db->query('SELECT TERMID,START_DATE,END_DATE FROM TERM WHERE TERMID=(SELECT MAX(TERMID) FROM TERM)');
         $result=$r->row_array();
         return $result;
        
    }
    function create_month()
    {
        $x=$this->current_term();
        $new_data=array(
          
            'CHARGE'=>(int)$this->input->post('charge'),
            'START_DATE'=>$this->input->post('start_date'),
             'END_DATE'=>$this->input->post('end_date'),
            'DEADLINE'=>$this->input->post('deadline'),
            'TERMID'=>(int)$x['TERMID']
             
            
        );
        
        $q=$this->db->insert('MESSMONTH',$new_data);
        return $q;
    }
    
    
    function  getmonthforpayment()
    {
        $q=$this->db->query("SELECT START_DATE,END_DATE FROM MESSMONTH");
        $r=$q->result();
        $i=1;
        foreach($r as $row)
        {
            $a[$row->START_DATE."/".$row->END_DATE]= $row->START_DATE."/".$row->END_DATE;
            $i++;
            if($i==20)break;
        }
        return $a;
    }
    
    function newpayment()
    {
        $m=$this->input->post('mlist');
        $pos=strpos($m,"/");
        $start=substr($m,0,$pos);
        
        $end=substr($m,$pos+1);
        $this->db->select('MONTHID')->from('MESSMONTH')->where('START_DATE',$start)->where('END_DATE',$end);
        $q=$this->db->get();
        $r=$q->row_array();
        $x=(int)$r['MONTHID'];
        $new_data=array(
          
            'SCROLL'=>(int)$this->input->post('scroll'),
            'PAY_DATE'=>$this->input->post('paydate'),
             'AMOUNT'=>(int)$this->input->post('amount'),
            'STUDENTID'=>(int)$this->input->post('studentid'),
            'TYPE'=>$this->input->post('type'),
            'MONTHID'=>$x
             
            
        );
        
        $q=$this->db->insert('PAYMENT',$new_data);
        return $q;
        
    }
    
}
?>
