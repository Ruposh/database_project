 <?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
 $this->load->view('includes/header');
 echo anchor('adminhome/createStudentAccount','Create Student Account');
 if(isset($new)) echo "</br>"."<h2>".$new."</h2>";
  $this->load->view($main);
   $this->load->view('includes/footer');
?>
