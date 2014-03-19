 <?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
 $this->load->view('includes/header');
 ?>
 <nav class="navbar navbar-default" role="navigation">
     <div>
         <ul class="nav navbar-nav">
              <li><?php echo anchor('adminhome','home');?></li>
              
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                   Student Account
                   <b class="caret"></b>
                  </a>
                  <ul class="dropdown-menu">
                      <li><?php echo anchor('adminhome/createStudentAccount','Create Student Account');?></li>

                  </ul>
              </li>
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                   Term
                   <b class="caret"></b>
                  </a>
                  <ul class="dropdown-menu">
                      <li><?php echo anchor('term/createterm','create');?></li>
                      <li><?php echo anchor('term/terminfo','term info');?></li>
                  </ul>
              </li>
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                   Month
                   <b class="caret"></b>
                  </a>
                  <ul class="dropdown-menu">
                      <li><?php echo anchor('month/createmonth','create');?></li>
                      <li><?php echo anchor('month/monthinfo','term info');?></li>
                  </ul>
              </li>
              
              
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                   Manager Account
                   <b class="caret"></b>
                  </a>
                  <ul class="dropdown-menu">
                      <li><?php echo anchor('manager/createmanager','Create Manager');?></li>
                      <li><?php echo anchor('manager/managerinfo','Manager info');?></li>
                  </ul>
              </li>
              
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                   Payment
                   <b class="caret"></b>
                  </a>
                  <ul class="dropdown-menu">
                      <li><?php echo anchor('payment/newpayment','New Payment');?></li>
                      <li><?php echo anchor('payment/paymentinfo','Payment info');?></li>
                  </ul>
              </li>
         
              
              
             
             
         </ul>
         
         
     </div>
     
</nav>

<?php

     /*echo anchor('adminhome/createStudentAccount','Create Student Account');
     echo "&nbsp";
     echo "&nbsp";
     echo "&nbsp";
     echo anchor('adminhome','home');
     echo "&nbsp";


     echo anchor('adminhome/term');
      *
      * */
      
?>
   <?php
     if(isset($new)) echo "</br>"."<h2>".$new."</h2>";
      $this->load->view($main);
       $this->load->view('includes/footer');
    ?>
