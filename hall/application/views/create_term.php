

<h1>Create New Term</h1>
<?php echo form_open('term/validate');

?>
<fieldset>
    <legend>Term info</legend>
        
<?php
$a=array(
    'name'=>'termname',
    'value'=>'',
    'style' => 'margin:10px',
    
);
echo "Term Name :".form_input($a);
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



//echo form_close();
//echo validation_errors('<p class="error">');



?>

</fieldset>
<?php
    echo form_submit('submit','create');
    echo form_close();
    echo validation_errors('<p class="error">');
?>

