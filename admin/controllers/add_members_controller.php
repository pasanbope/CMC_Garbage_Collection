<?php
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

if($p_fname==""){
	echo'<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                  First Name is Required!
                </div>';
}
else if($p_lname==""){
	echo'<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                  Last Name is Required!
                </div>';
}
else{
$insert_sql="INSERT INTO tb_admins(p_title,p_fname,p_lname,p_tel,p_add,p_age,p_nic,p_gender,p_date) 
Values('$p_title','$p_fname','$p_lname','$p_tel','$p_add',$p_age,'$p_nic',$p_gender,'$current_date')";

if(mysqli_query($conn,$insert_sql)){
	echo '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Alert!</h5>
                  New Member Added Success.
                </div>';
}
else{
	
	echo'<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                  Member Not Added.
                </div>';
}
}
?>