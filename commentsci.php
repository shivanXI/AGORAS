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
$user10=$_POST["user10"];
$comment=$_POST["comments"];
$sql = "INSERT INTO  comment (C_Id,COMM,C_Date,usernameu,Cname) VALUES('','$comment','','$user10','scienceandtech')";
$res = mysql_query($sql);
echo nl2br("YOUR COMMENT FOR SCIENCE CATEGORY IS SUBMITTED!\nYOUR ARE NOW FREE TO USE IT AGAIN!\nSO WHAT ARE YOU WAITING FOR GO ON!!
\n YOU CAN MOVE BACK TO ENJOY YOUR DISCUSSIONS ON AGORAS !!!!!");
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
mysql_close($conn);
?>