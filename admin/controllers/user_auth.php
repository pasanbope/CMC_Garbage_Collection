

<?php
if(isset($_POST["login"])){
	include('../database/connection.php');
    $username=$_POST["user"];
    $password=$_POST["pword"];
   
    $sql="SELECT * FROM tbl_admin WHERE username='$username' and  pwd= '$password'" ;

    $result=mysqli_query($conn,$sql);
    $user=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count =mysqli_num_rows($result);
    if($count  == 1)
    {
       echo "<script>window.location.href = 'http://localhost/green/admin/index.php'</script>";
        exit();
    }
    else{
     echo '<script>
        
     <alert>Error!</alert>
      
      
      
      </script>';
    }
   
}
?>