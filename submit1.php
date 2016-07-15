
<?php
$servername = "localhost";
$username ="root";
$password = "";
$dbname = "project1";


$conn = mysql_connect($servername, $username, $password);
mysql_select_db($dbname);

if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}
$nameErr = "harsh";
$mailErr = "harsh";
$genderErr ="harsh";
 $phoneErr = "harsh";
$lnameErr = "harsh";
$dobErr = "harsh";
$passErr = "harsh";


$fname = $mail = $gender = $pass = $lname = $phone = $age = $mail1 = $uname = "";
     $fname=test_input($_POST["fname"]);
     if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
       $nameErr = "Only letters and white space allowed";
	   //echo "<script type='text/javascript'>\n";
       //echo "alert("Only letters and whitespaces allowed")\n";
       //echo "</script>";
	   
	   //echo "<script type='text/javascript'>alert("hiiii")</script>";
	 }	   
     
  
	   $lname=test_input($_POST["lname"]);
     if (!preg_match("/^[a-zA-Z_0-9]*$/",$lname)) {
       $unameErr = "Only letters,digits and underscore are allowed"; 
	   //echo "<script type='text/javascript'>\n";
       //echo "alert("Only letters,digits and underscore are allowed");\n";
       //echo "</script>";
     }
	  
	  $mail=test_input($_POST["email"]);
	   if(!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
       $mailErr = "Invalid email format"; 
	   //echo "<script type='text/javascript'>\n";
       //echo "alert("Invalid email format");\n";
       //echo "</script>";
     }

     
       $pass=test_input($_POST["pass"]);//isko sahi karna hai.
	  // if(!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
       //$mailErr = "Invalid password format"; 
     //}
	 
	  $mail1=test_input($_POST["addanother"]);
	   if(!filter_var($mail1, FILTER_VALIDATE_EMAIL)) {
       $mailErr = "Invalid email format"; 
	   //echo "<script type='text/javascript'>\n";
       //echo "alert("Invalid email format");\n";
       //echo "</script>";
     }
        $age=test_input($_POST["age"]);
	    $phone=test_input($_POST["phone"]);
	   if(!preg_match("/^[0-9]{10}$/",$phone))
		{
			$phoneErr="only digits please";
			//echo "<script type='text/javascript'>\n";
            //echo "alert("Only digits please");\n";
            //echo "</script>";
		}

$fname=$_POST["fname"];
$lname=$_POST["lname"];
$pass=$_POST["pass"];
$mail=$_POST["email"];
$mail1=$_POST["addanother"];
$phone=$_POST["phone"];
$uname=$_POST["use1"];
$age=$_POST["age"];
echo nl2br("YOUR RESPONSE FOR REGISTRATION IS SUBMITTED!\nYOUR ARE NOW OUR REGISTERED USER!\nTHANK YOU FOR REGISTRATION!!
\n YOU CAN MOVE BACK TO ENJOY YOUR DISCUSSIONS ON AGORAS !!!!!");
if(!($fname!="" && $lname!="" && $pass!="" && $mail!="" && $mail1!="" && $phone!="" && $age!="" && $uname!="" && $nameErr =="" && $mailErr == "" && $phoneErr == "" && $lnameErr=="" && $dobErr=="" && $passErr==""))
{
$sql = "INSERT INTO  user (User_Id,Username,Age,Password) VALUES('','$uname','$age','$pass')";
$res = mysql_query($sql);
$sqll = "INSERT INTO names (User_Id,Fname,Lname) VALUES ('','$fname','$lname')";
$res = mysql_query($sqll);
$sqlm = "INSERT INTO emails  (User_Id,EmailId,AEmailId) VALUES ('','$mail','$mail1')";
$res = mysql_query($sqlm);
//$res = mysql_query($conn, $sql);
//$res .= mysql_query($conn, $sqll);
//$res .= mysql_query($conn, $sqlm);
}

/*if (mysqli_multi_query($conn, $sql)) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}*/

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
mysql_close($conn);

?>


