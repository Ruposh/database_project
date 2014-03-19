<h1>Create Account</h1>
<?php echo form_open('adminhome/create');

?>
<fieldset>
    <legend> login info</legend>
        
<?php
$a=array(
    'name'=>'studentid',
    'value'=>'',
    'style' => 'margin:10px',
    
);
echo "STUDENTID :".form_input($a);
echo "</br>";
$a=array(
    'name'=>'password',
    'value'=>'',
    'style' => 'margin:10px',
    
);
echo "PASWSWORD:".form_password($a);

//echo form_submit('submit','create account');

//echo form_close();
//echo validation_errors('<p class="error">');



?>

</fieldset>

<fieldset>
    <legend> student info</legend>
        
<?php
$a=array(
    'name'=>'messno',
    'value'=>'',
    'style' => 'margin:10px',
    
);
echo "MESS_NO :".form_input($a);
echo "</br>";
$a=array(
    'name'=>'roomno',
    'value'=>'',
    'style' => 'margin:10px',
    
);
echo "ROOM_NO :".form_input($a);
echo "</br>";
$a=array(
    'name'=>'email',
    'value'=>'',
    'style' => 'margin:10px',
    
);
echo "EMAIL :".form_input($a);

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