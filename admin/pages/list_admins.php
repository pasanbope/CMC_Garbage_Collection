<div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Members</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
               <div class="card">
              <div class="card-header">

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Patient ID</th>
					  <th>Title</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Telephone</th>
                      <th>Address</th>
					  <th>Age</th>
					  <th>NIC</th>
					  <th>Gender</th>
					  <th>Registred</th>
					  <th>Controlls</th>
                    </tr>
                  </thead>
                  <tbody>
				  <?php
				  include('../database/connection.php');
				  $select_sql="Select * From tb_admins";
				  $select=mysqli_query($conn,$select_sql);
				  while($row=mysqli_fetch_array($select)){
				  ?>
                    <tr>
                      <td><?php echo $row['id']; ?></td>
					  <td><?php echo $row['f_name']; ?></td>
                      <td><?php echo $row['f_name']; ?></td>
                      <td><?php echo $row['l_name']; ?></td>
                      <td><?php echo $row['Email']; ?></td>
                      <td><?php echo $row['phone_number']; ?></td>
					  <td><?php echo $row['phone_number']; ?></td>
					  <td><?php echo $row['phone_number']; ?></td>
					 
					  <td><a href="index.php?page=edit-patient&id=<?php echo $row['id']; ?>"><button class="btn-edit btn btn-sm btn-primary" id="<?php echo $row['p_id']; ?>"><i class="fas fa-edit"></i> Edit</button></a>
					  <button data-toggle="modal" data-target="#modal-sm" class="btn-del btn btn-sm btn-primary" id="<?php echo $row['id']; ?>"><i class="fas fa-trash"></i> Delete</button>
					  </td>
                    </tr>
				  <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
			
			
			 <div class="modal fade" id="modal-sm">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Delete Patient</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Please Confirm to delete this Patient</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
              <button type="button" class="btn btn-primary">Confirm</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>  
			  
            </div>
		</div>
	</div>
</div>
<script>
$(document).ready(function() {
	$(".btn-del").click(function(event){
		var p_id=this.id;
		$.post(
			"controllers/delete_patient_controller.php",
			{
			p_id:p_id,
						
			},
			function (data){
			$('#message_loader').html(data);
			});
		
	});
});
</script>