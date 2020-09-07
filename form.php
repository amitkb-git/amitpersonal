<?php
 $prev_val = "";

 if(isset($_REQUEST['mode']) && $_REQUEST['mode']=="appen_val" ){
	 $myval = $_REQUEST['myval'];
	 $preval = $_REQUEST['preval'];
	 $prev_val = $preval . $myval;
 }   
 
?>
<form method="post" action="form.php">
<input type="hidden" name="mode" value="appen_val">
<input type="text" name="myval" value="">
<input type="hidden" name="preval" value="<?php echo $prev_val;?>">
<input type="submit" value="Submit" name="Save">
</form>
<div><?php echo $prev_val;?></div>

