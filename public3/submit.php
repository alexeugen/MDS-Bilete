<?php
$servername = "homestead";
$username = "homestead";
$password = "secret";
$dbname = "bilete_db";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



$answer = test_input($_POST["answer"]);
$day = test_input($_POST["day"]);
$sql = "SELECT answer FROM answers WHERE day=".'\''.$day.'\'';
// echo $sql;
$result = $conn->query($sql);

if (!$result) {
  trigger_error('Invalid query: ' . $conn->error);
}

if (isset($result) && $result->num_rows > 0) {
  $result = mysqli_fetch_assoc($result);

  $result = $result['answer'];


  
  $myJSON = json_encode(strcmp($answer,$result));
  echo $myJSON;

  $myJSON = json_encode('nu ai raspuns bine');
  echo $myJSON;
} else {

}

}
?>


