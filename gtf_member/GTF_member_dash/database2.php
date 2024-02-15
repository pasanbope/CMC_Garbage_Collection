<?php
// database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "green";

// create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // prepare and bind statement
  $stmt = $conn->prepare("INSERT INTO tb_reprotgarbage (image_data, details, lat, lang) VALUES (?, ?, ?, ?)");
  $stmt->bind_param("ssdd", $image, $details, $latitude, $longitude);

  // get form data
  $image = $_FILES['image']['name'];
  $details = $_POST['details'];
  $latitude = $_POST['latitude'];
  $longitude = $_POST['longitude'];

  // move uploaded file to a folder on server
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["image"]["name"]);
  move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

  // execute statement
  if ($stmt->execute()) {
    echo "New record created successfully";
    
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  // close statement and connection
  $stmt->close();
  $conn->close();
}
?>
