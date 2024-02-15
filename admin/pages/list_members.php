
  <style>
    body {
      font-family: 'poppins';
      background-image: url('background.jpg');
      background-repeat: no-repeat;
      background-size: cover;
    
      margin: 0;
      padding: 20px;
    }
    
    .container {
      max-width: 800px;
      margin: 0 auto;
      align-items: center;
      text-align: center;
      background-color: #e8f5e9; /* Light green background color */
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      padding: 20px;
      margin-top: 110px;
   
    }
    
    h1 {
      text-align: center;
      color: #333;
      margin-bottom: 20px;
      text-decoration: underline;
    }
    
    label {
      font-weight: bold;
      display: block;
      margin-bottom: 5px;
      color: #555;
    }
    
    input[type="text"],
    textarea {
      width: 90%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 5px;
      resize: vertical;
      font-size: 14px;
    }
    
    input[type="file"] {
      margin-top: 5px;
    }
    
    button[type="submit"] {
      background-color: #4CAF50;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      
      cursor: pointer;
      font-size: 16px;
    }
    
    button[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>

    <h1>Write Your Article</h1>
    <form method="post" id="articleForm">
   
      <input type="text" name="articleTitle" placeholder="Enter Title Here" id="articleTitle" required>
  <br>
  <br>
      <textarea id="articleContent" name="articleContent" rows="10" placeholder="Enter Content Here" required></textarea>
    
      <br><br>
      
    
      <button name="add" type="submit">Submit</button>
    </form>
  </div>

  <?php

// database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "green";
error_reporting(E_ALL & ~E_WARNING);



// create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$articleTitle = $_POST['articleTitle'];
$articleContent = $_POST['articleContent'];

if(isset($_POST['add']))
{
$sql = "INSERT INTO tbl_articles (title, content) VALUES ('$articleTitle', '$articleContent')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('New record created successfully')</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}
// Step 4: Close the database connection
$conn->close();



?>


