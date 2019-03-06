<?php
  //Steps for this page...
  //1. Validate input (are you happy that this is a real piece of data for a new user?
  //2. Check if email already exists in emails table
  //3. Check passwords
  //4. Encrypt password (MD5 is good)
  //5. Generate random code for email vaidation
  //6. Add new user to database
  //7. Send email to email address
  //8. Go to email validation page
  
  
  function unique_id(){
    $better_token = md5(uniqid(rand(), true));
    $unique_code = substr($better_token, 8, 8);
    $uniqueid = $unique_code;
    return $uniqueid;
  }
  //print_r($_POST);
  
  
  $FirstName = $_POST['firstName'];
  $LastName = $_POST['lastName'];
  $Title = $_POST['Title'];
  $Email = $_POST['email'];
  $Password = md5($_POST['password']);
  $Validation =  unique_id();
  
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
  $sql = "SELECT COUNT(*) as usercount FROM EMAILS WHERE EMAIL = '$Email';";
  $result = $conn->query($sql);
  $count = $result->fetch_assoc();
  if ($count['usercount'] == 0) //no existing email 
  {
	//add new user
	$insertusersql = "INSERT INTO USERS (FirstName, LastName, Password) VALUES ('$FirstName', '$LastName', '$Password');";
	if ($conn->query($insertusersql)  === TRUE) {
	  $UserNo = $conn->insert_id;
  	  $insertemailsql = "INSERT INTO EMAILS (UserNumber, Email, Title, Verified, Code ) VALUES('$UserNo','$Email', '$Title', FALSE, '$Validation');";
	  $conn->query($insertemailsql);
	  $conn->close();
	}
	//email user welcome message and link and verification code.
	$to = "$Email";
	$subject = "Welcome!";
	$txt = "Hello and welcome\r\n Your verification code is: $Validation\r\n please go to http://localhost/IA/verify.php?UserNo=$UserNo&email=$Email";
	$headers = "From: william.barron@student.carmel.edu.hk" . "\r\n";

    mail($to,$subject,$txt,$headers);
 
  } else {
    //return error message that user/email exists
    header("Location: index.php?m=emailExists");
  }
  
  if (isset($UserNo)) {
    header("Location: verifyemail.php?UserNo=$UserNo&Email=$Email");
  } else {
    header("Location: index.php");
  }
?>