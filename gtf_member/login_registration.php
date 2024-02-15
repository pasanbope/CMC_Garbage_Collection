<?php
if(isset($_POST["login_btn"])){
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $password=$_POST["password"];
    $cpassword=$_POST["cpassword"];

    $password_hash=password_hash($password,PASSWORD_DEFAULT);
    $errors=array();
}

    if(empty($fname)OR empty($lname) OR empty($email) OR empty($phone) OR ($password) OR ($cpassword)){
        array_push($errors,"All fields are required");
    }
    if(!filter_var($email)){
        array_push($errors,"Email is required");
    }
    if(strlen($password)){
        array_push($errors,"Password must be at least 8 characters long");
    }
    if($password!==$cpassword){
        array_push($errors,"Password does not match");
    }
    require_once"database.php";
    $sql="SELECT * FROM users WHERE email='$email' ";
    $result=mysqli_query($conn,$sql);
    $rowCount=mysqli_num_rows($result);
    if($rowCount>0){
        array_push($error,"Email already exists ");
    }
    if(count($errors)>0){
        foreach($errors as $error){
            echo"<div class='alert alert-danger'>$error</div>";
        }
    }
    else{
       
        $sql="INSERT INTO users(Id, First name, Last name, Email, Phonenumber, Password)VALUES(?,?,?)";
        $stmt=mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt,$sql);
    }
        if($preparestmt){
            mysqli_stmt_bind_param($stmt,"sss",$fname,$lname,$email,$phone,$passwordHash);
            mysqli_stmt_execute($stmt);
            echo"<div class='alert alert-success'>You are registered successfully.</div>";
            
        }
    else{
        //die("Something went wrong");
    }
    

?>