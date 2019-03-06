<?php

 $Email = $_POST['Email'];
 $UserNo = $_POST['UserNo'];
 $code = $_POST['inputCode'];

$servername = "localhost";
  $username = "21cld";
  $password = "21cld";
  $dbName = "21cld";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbName);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    
  $retrievecodesql = "SELECT Code FROM Emails WHERE Email = '$Email' AND UserNumber = $UserNo";
  $verified = "UPDATE EMAILS SET Verified = TRUE, Code = \"\" Where Email = '$Email'";
      
      
  if ($results = $conn->query($retrievecodesql)) {
    $count = $results->fetch_assoc();
    $TrueCode = $count['Code'];
  } else {
    echo ($retrievecodesql);
}
  
  if ($TrueCode == $code) {
    $conn->query($verified);
    $conn->close();
    header("Location: index.php");
  }else{
  
  echo "That wasn't the code dude";}
  
?>  