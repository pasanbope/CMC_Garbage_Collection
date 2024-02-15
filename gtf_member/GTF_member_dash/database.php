<?php
$hostName = "localhost";
$dbuser = "root";
$dbPassword = "";
$dbName = "reporting";

// Create connection
$conn = mysqli_connect($hostName,$dbuser,$dbPassword,$dbName );

// Check connection
if (!$conn) {
  die("Somethig went wrong" );
}


$details = mysqli_real_escape_string($conn,$_POST['details']);
$location = mysqli_real_escape_string($conn,$_POST['location']);
$photo = mysqli_real_escape_string($conn,$_POST['photo']);


$sql = "INSERT INTO report(photo,details,loc)VALUES('$details','$location','$photo')";

if(isset($_POST['btnlogin']))
{
   
  if(mysqli_query($conn,$sql))
  {
    echo '<script>
    
    swal({
      title: "Good job!",
      text: "Successfully reported",
      icon: "success",
      button: "Ok",
    });
    
    
    
    </script>';
  }
  else  echo '<script>
    
  swal({
    title: "Error!",
    text: " Reported fail",
    icon: "warning",
    button: "Ok",
  });
  
  
  
  </script>';
  
}

?>