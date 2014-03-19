<?php


class Site_model extends CI_Model
{
    function datafortable()
    {
         $q=$this->db->get("START_PAGE");
         return $q;
    }
    function getAll()
    {
        $q=$this->db->get("START_PAGE");
        //$q=$this->db->query("SELECT *FROM START_PAGE WHERE PASS='wahid'");
        foreach ($q->result() as $row)
        {
            $data[]=$row;
            
        }
        return $data;
        
    }
     function dataquery()
    {
        $sql="select *from START_PAGE where username in(?,?)";
        $q=$this->db->query($sql,array('goru','sys'));
       if($q->num_rows()>0)
       {
            foreach ($q->result() as $row)
            {
                $data[]=$row;


            }
       }
        return $data;
        
        
    }
     
    
    
    //not work
     function querybypart()
     
    {
        
        $this->db->select('USERNAME');
        $this->db->from('START_PAGE');
       // $this->db->where('username','sys');
        
        $q=$this->db->get();
       if($q->num_rows()>0)
       {
            foreach ($q->result() as $row)
            {
                $data[]=$row;


            }
       }
        return $data;
        
        
    }//*/
    
    
}
?>