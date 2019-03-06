<?php 
  //print_r($_POST);

  $ClassName = $_POST['ClassName'];
  $GradeLevel = $_POST['GradeLevel'];
  $UserNo = $_POST['UserNo'];
  
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
	//add new class
	$insertclasssql = "INSERT INTO CLASSES (ClassName, ClassGrade, UserNumber) VALUES ('math', 'grade 10', '4');";
	if ($conn->query($insertclasssql)  === TRUE) {
	  $ClassNo = $conn->insert_id;
	  $conn->close();
	  } else { 
  
  header ("Location: https://www.google.com");
  }
?>