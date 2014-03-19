

<h1>New Payment </h1>

<?php echo form_open('payment/validate');

?>
<fieldset>
    <legend>Payment info</legend>
        

 <strong><?php echo "EACH FIELD MUST BE FILLED";?></strong>
<?php
echo "</br>";
echo 'FOR MOMNTH: '.form_dropdown('mlist',$mlist);
$a=array(
    'deposit'=>'deposit',
    'expenditure'=>'expenditure'
    
    
);
echo "</br>";
echo "PAYMENT TYPE".form_dropdown('type',$a);
echo "</br>";
$a=array(
    'name'=>'studentid',
    'value'=>'',
    'style' => 'margin:10px',
    
);
echo "*STUDENTID :".form_input($a);
echo "</br>";
$a=array(
    'name'=>'scroll',
    'value'=>'',
    'style' => 'margin:10px',
    
);
echo "*SCROLL :".form_input($a);
echo "</br>";
$a=array(
    'name'=>'amount',
    'value'=>'',
    'style' => 'margin:10px',
    
);
echo "*AMOUNT :".form_input($a);
echo "</br>";
$a=array(
    'name'=>'paydate',
    'value'=>'',
    'style' => 'margin:10px',
    
);
echo "*PAYDATE :".form_input($a);
echo "</br>";



?>

</fieldset>
<?php
    echo form_submit('submit','create');
    echo form_close();
    echo validation_errors('<p class="error">');
?>

