<?php

$Email = $_POST['email'];
$Pass = md5($_POST['password']);

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
    
    $sql =  "SELECT u.FirstName, u.LastName, u.usernumber, e.Email, e.Organization, e.Title";
    $sql .= " FROM Users u, Emails e ";
    $sql .= " Where e.UserNumber = u.UserNumber";
    $sql .= "  and e.Email = '$Email'";
    $sql .= "  and u.Password = '$Pass'";
    $sql .= "  and e.verified;";
    
    if ($results = $conn->query($sql)) 
    {
    $users = $results->fetch_assoc(); 
               
  session_start();
  $_SESSION['LoggedIn'] = True;
  $_SESSION['FirstName'] = $users['FirstName'];
  $_SESSION['LastName'] = $users['LastName'];
  $_SESSION['Email'] = $users['Email'];
  $_SESSION['Organization'] = $users['Organization'];
  $_SESSION['Title'] = $users['Title'];

header("Location: HomePage.php");

}else{

echo"'$sql'";

//header("Location: https://www.google.com");

} 
 
?>