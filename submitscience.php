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
$quesErr = "harsh";
$ansErr = "harsh";
$usernameErr ="harsh";
 $commentErr = "harsh";



$ques = $ans = $username = $comment = "";
     $username=test_input($_POST["username"]);
     if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
       $usernameErr = "Only letters and white space allowed";
	 }	   
     

     
      

$username=$_POST["username"];
$ques=$_POST["question"];
$ans=$_POST["answer"];
//$comment=$_POST["comments"];

echo nl2br("YOUR RESPONSE FOR SCIENCE CATEGORY IS SUBMITTED!\nYOUR ARE NOW FREE TO USE IT AGAIN!\nSO WHAT ARE YOU WAITING FOR GO ON!!
\n YOU CAN MOVE BACK TO ENJOY YOUR DISCUSSIONS ON AGORAS !!!!!");
if(!($username!="" && $ques!="" && $ans!="" && $comment!="" && $usernameErr =="" && $commentErr == "" && $ansErr == "" && $quesErr==""))
{
$sql = "INSERT INTO  question (Q_Id,Ques,Q_Date,usernameu,Cname) VALUES('','$ques','','$username','scienceandtech')";
$res = mysql_query($sql);
$sqll = "INSERT INTO answer (A_Id,Answer,A_Date,usernameu,Cname) VALUES ('','$ans','','$username','scienceandtech')";
$res = mysql_query($sqll);

//
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

