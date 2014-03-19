<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


class Insert_update extends CI_Model
{
   
    
    function gets()
    {
        $this->db->from('START_PAGE');
        $q=$this->db->get();
        return $q->result();
        
    }
    function insrt()
    {
        $data=array(
            
           'USERNAME' =>'tashfiul',
            'PASS'=>'tash'
            
        );
        $this->db->insert('START_PAGE',$data);
    }
    function insrt_data($data)
    {
        $this->db->insert('START_PAGE',$data);
    }
    function insrt_b()
    {
        $data=array(
          array(  
           'USERNAME' =>'tashfil',
            'PASS'=>'tash'
              ),
            array(
                'USERNAME'=>'biral',
                'PASS'=>'paji'
            )
            
        );
        $this->db->insert_batch('START_PAGE',$data);
    }
    function update()
    {
        $data=array(
          
            'USERNAME'=>'khanki'
        
            
        );
        $this->db->where('PASS','x');
        $this->db->update('START_PAGE',$data);
    }
    
    function delete()
    {
        $this->db->where('PASS','x');
        $this->db->delete('START_PAGE');
    }
    
    function method_chain()
    {
        $this->db->select('USERNAME,PASS')->where("USERNAME",'abc')->from('START_PAGE');
        $q=$this->db->get();
        foreach ($q->result() as $row)
        {
            $data[]=$row;
            
        }
        return $data;
        
    }
    
    
}
?>
