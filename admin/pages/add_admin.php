<div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Add New Admins</h3>
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
                    <label for="exampleInputEmail1">Designation</label>
                    <input type="text" class="form-control" id="desig" name="desig" placeholder="Designation">
                  </div>
				   <div class="col-4">
                    <label for="exampleInputEmail1">NIC</label>
                    <input type="text" class="form-control" id="nic" name="nic" placeholder="NIC">
                  </div>
				   <div class="col-4">
                    <label for="exampleInputEmail1">Gender</label>
                    <select class="form-control" id="gender" name="gender">
						<option value="1">Male</option>
						<option value="2">Female</option>
						
					</select>
                  </div>
				  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="button" class="btn btn-info" id="d_reg_btn" name="p_reg_btn">Register</button>
				  <button type="Reset" class="btn btn-info">Reset</button>
                </div>
              </form>
            </div>
		</div>
	</div>
</div>