    
<div align='center'>

    <?php

    /*
     * To change this template, choose Tools | Templates
     * and open the template in the editor.
     */
    $logas=array(
      'Student'=>'Student',
        'Admin'=>'Admin',
        'Manager'=>'Manager'
    
        
        
    );
    echo "</br></br></br>";
    echo form_fieldset('login');
   
    
    echo form_open('login/validate');
    echo 'Login As:'."  ".form_dropdown('logged_as',$logas,'Student');
    echo "</br>";
    echo 'USERNAME: '.form_input('username','');
    echo "</br>";
    echo 'PASSWORD: '.form_password('password', '');
    echo "</br>";
    echo form_submit('submit','Submit');
    //echo anchor('login/signup','Create Account');
    echo form_close();
    echo form_fieldset_close();
    ?>

</div>