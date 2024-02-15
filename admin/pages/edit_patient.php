<?php
if(isset($_GET['id'])){
	$p_id=$_GET['id'];
	include('database/connection.php');
	$select_sql="select * from  tbl_patient Where p_id=$p_id";
	$res=mysqli_query($conn,$select_sql);
	$row=mysqli_fetch_array($res);
	$title=$row['p_title'];
	$gender=$row['p_gender'];
}
?>
<div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Patient</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
				  <div class="row">
                  <div class="col-4">
                    <label for="exampleInputEmail1">Select Title</label>
                    <select class="form-control" id="title" name="title">
						<option <?php if($title=='Mr.'){echo "selected";}?> value="Mr.">Mr.</option>
						<option <?php if($title=='Mrs.'){echo "selected";}?> value="Mrs.">Mrs.</option>
						<option <?php if($title=='Miss.'){echo "selected";}?> value="Miss">Miss</option>
						<option <?php if($title=='Rev.'){echo "selected";}?> value="Rev.">Rev.</option>
						<option <?php if($title=='Other'){echo "selected";}?> value="Other">Other</option>
					</select>
                  </div>
				   <div class="col-4">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="text" class="form-control" id="fname" value="<?php echo $row['p_fname']; ?>" name="fname" placeholder="First Name">
                  </div>
				   <div class="col-4">
                    <label for="exampleInputEmail1">Last Name</label>
                    <input type="text" class="form-control" id="lname" value="<?php echo $row['p_laname']; ?>" name="lname" placeholder="Last Name">
                  </div>
				  </div>
				  <br/>
				  <div class="row">
				   <div class="col-6">
                    <label for="exampleInputEmail1">Telephone Number</label>
                    <input type="text" class="form-control"  value="<?php echo $row['p_tel']; ?>" id="tno" name="tno" placeholder="Telephone Number">
                  </div>
				   <div class="col-6">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control" value="<?php echo $row['p_address']; ?>" id="add" name="add" placeholder="Address">
                  </div>
				  </div>
				   <br/>
				  <div class="row">
				   <div class="col-4">
                    <label for="exampleInputEmail1">Age</label>
                    <input type="number" class="form-control" value="<?php echo $row['p_age']; ?>" id="age" name="age" placeholder="Age">
                  </div>
				   <div class="col-4">
                    <label for="exampleInputEmail1">NIC</label>
                    <input type="text" class="form-control" value="<?php echo $row['p_nic']; ?>" id="nic" name="nic" placeholder="NIC">
					<input type="hidden"  value="<?php echo $row['p_id']; ?>" id="id" name="id" >
                  </div>
				   <div class="col-4">
                    <label for="exampleInputEmail1">Gender</label>
                    <select class="form-control" id="gender" name="gender">
						<option <?php if($gender=='1'){echo "selected";}?> value="1">Male</option>
						<option <?php if($gender=='2'){echo "selected";}?> value="2">Female</option>
						
					</select>
                  </div>
				  
				  <div class="col-12"><br/><br/>
				  <div id="message_loader"></div>
				  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="button" class="btn btn-primary" id="p_update_btn" name="p_reg_btn">Update</button>
				  <button type="Reset" class="btn btn-primary">Reset</button>
                </div>
              </form>
            </div>
		</div>
	</div>
</div>
<script>
$(document).ready(function() {
	$("#p_update_btn").click(function(event){
		$.post(
			"controllers/update_patient_controller.php",
			{
			p_id:$('#id').val(),
			p_title:$('#title').val(),
			p_fname:$('#fname').val(),	
			p_lname:$('#lname').val(),	
			p_tel:$('#tno').val(),	
			p_add:$('#add').val(),	
			p_age:$('#age').val(),	
			p_nic:$('#nic').val(),	
			p_gender:$('#gender').val()				
			},
			function (data){
			$('#message_loader').html(data);
			$('#fname').val("");
			$('#lname').val("");
			
			});
		
	});
});
</script>