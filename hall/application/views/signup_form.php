<h1>Create Account</h1>
<?php echo form_open('adminhome/create');

?>
<fieldset>
    <legend> login info</legend>
        
<?php

echo "STUDENTID :".form_input('studentid','');
echo "</br>";
echo "PASWSWORD:".form_password('password','');

//echo form_submit('submit','create account');

//echo form_close();
//echo validation_errors('<p class="error">');



?>

</fieldset>

<fieldset>
    <legend> student info</legend>
        
<?php

echo "MESS_NO :".form_input('messno','');
echo "</br>";
echo "ROOM_NO :".form_input('roomno','');
echo "</br>";
echo "EMAIL :".form_input('email','');

//echo form_submit('submit','create account');

//echo form_close();
//echo validation_errors('<p class="error">');



?>

</fieldset>
<?php
    echo form_submit('submit','create');
    echo form_close();
    echo validation_errors('<p class="error">');
?>