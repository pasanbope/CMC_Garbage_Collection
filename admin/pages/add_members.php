<div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add New Members</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
				  <div class="row">
                  <div class="col-4">
                    <label for="exampleInputEmail1">Select Title</label>
                    <select class="form-control" id="title" name="title">
						<option value="Mr.">Mr.</option>
						<option value="Mrs.">Mrs.</option>
						<option value="Miss">Miss</option>
						<option value="Rev.">Rev.</option>
						<option value="Other">Other</option>
					</select>
                  </div>
				   <div class="col-4">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name">
                  </div>
				   <div class="col-4">
                    <label for="exampleInputEmail1">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name">
                  </div>
				  </div>
				  <br/>
				  <div class="row">
				   <div class="col-6">
                    <label for="exampleInputEmail1">Telephone Number</label>
                    <input type="text" class="form-control" id="tno" name="tno" placeholder="Telephone Number">
                  </div>
				   <div class="col-6">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control" id="add" name="add" placeholder="Address">
                  </div>
				  </div>
				   <br/>
				  <div class="row">
				   <div class="col-4">
                    <label for="exampleInputEmail1">Age</label>
                    <input type="number" class="form-control" id="age" name="age" placeholder="Age">
                  </div>
				   <div class="col-4">
                    <label for="exampleInputEmail1">NIC</label>
                    <input type="text" class="form-control" id="nic" name="nic" placeholder="NIC">
                  </div>
				   <div class="col-4">
                    <label for="exampleInputEmail1">Postitions</label>
                    <select class="form-control" id="gender" name="gender">
						<option value="1">Captan</option>
						<option value="2">Collecting Staff</option>
						
					</select>
                  </div>
				  
				  <div class="col-12"><br/><br/>
				  <div id="message_loader"></div>
				  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="button" class="btn btn-primary" id="p_reg_btn" name="p_reg_btn">Register</button>
				  <button type="Reset" class="btn btn-primary">Reset</button>
                </div>
              </form>
            </div>
		</div>
	</div>
</div>
<script>
$(document).ready(function() {
	$("#p_reg_btn").click(function(event){
		$.post(
			"controllers/add_members_controller.php",
			{
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