

<h1>Create New Month </h1>
<h4><?php echo "<STRONG>FOR TERM :".$start."&nbsp &nbsp &nbsp to &nbsp &nbsp".$end."</strong>"."</br"; ?></h4>
<?php echo form_open('month/validate');

?>
<fieldset>
    <legend>Month info</legend>
        
<?php


echo "</br>";
$a=array(
    'name'=>'start_date',
    'value'=>'',
    'style' => 'margin:10px',
    
);
echo "*START DATE :".form_input($a);
echo "date format will be DD-MM-YYYY";


echo "</br>";
$a=array(
    'name'=>'end_date',
    'value'=>'',
    'style' => 'margin:10px',
    
);
echo "*END DATE :".form_input($a);
echo "date format will be DD-MM-YYYY";
echo "</br>";
$a=array(
    'name'=>'charge',
    'value'=>'',
    'style' => 'margin:10px',
    
);
echo "*CHARGE :".form_input($a);
echo "</br>";
$a=array(
    'name'=>'deadline',
    'value'=>'',
    'style' => 'margin:10px',
    
);
echo "* DEADLINE :".form_input($a);





//echo form_close();
//echo validation_errors('<p class="error">');



?>

</fieldset>
<?php
    echo form_submit('submit','create');
    echo form_close();
    echo validation_errors('<p class="error">');
?>

