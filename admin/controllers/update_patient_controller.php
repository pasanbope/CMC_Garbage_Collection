<?php
$p_id=$_POST['p_id'];
$p_title=$_POST['p_title'];
$p_fname=$_POST['p_fname'];	
$p_lname=$_POST['p_lname'];
$p_tel=$_POST['p_tel'];
$p_add=$_POST['p_add'];
$p_age=$_POST['p_age'];
$p_nic=$_POST['p_nic'];
$p_gender=$_POST['p_gender'];
$current_date=date('Y-m-d');
include('../database/connection.php');

$sql_update="Update tbl_patient SET p_title='$p_title',p_fname='$p_fname',p_laname='$p_lname',p_tel='$p_tel',p_address='$p_add',p_age=$p_age,p_nic='$p_nic',p_gender=$p_gender WHERE p_id=$p_id";
if(mysqli_query($conn,$sql_update)){
	echo '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Alert!</h5>
                  Patient Updated!
                </div>';
}
else{
	echo '<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                  Not Updated!
                </div>';
}

?>