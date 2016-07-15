<html>
<head>
** ADMIN DELETED THE CUSTOMERS ACCOUNT DUE TO SOME INRESISTABLE REASONS ** 
<style>
table
{
border-style:solid;
border-width:2px;
border-color:blue;
}
</style>
</head>
<body bgcolor="#EEFDEF">
<?php
     $username = "root";
      $password = "";
      $servername = "localhost";
	  $dbname = "project1";
$con = mysql_connect($servername,$username,$password);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db($dbname);
$userenter=$_POST["login"];
//$usercate=$_POST["cat"];
//$userdate=$_POST["date"];
//$userans=$_POST["ans"];
 
//$result = mysql_query("UPDATE answer SET Answer='$userans' WHERE usernameu = '$userenter' AND Cname = '$usercate' AND A_Date = '$userdate'");
$show = " CREATE TRIGGER admin BEFORE DELETE ON user 
         FOR EACH ROW BEGIN 
		  DELETE FROM comment WHERE usernameu = NEW.usernameu ;
		  AND
		  DELETE FROM question WHERE usernameu=NEW.usernameu ;
		  AND
		  DELETE FROM answer WHERE usernameu=NEW.usernameu;
         END;" ;
$showdown = mysql_query($show);	
$qry=mysql_query("DELETE FROM user WHERE Username ='$userenter'");	 
$slect = mysql_query("SELECT * FROM user"); 
echo "<table border='1'  style= 'background-color: #84ed86; color: #761a9b; margin: 0 auto;'>
<tr>
<th>USERNAME</th>
<th>AGE</th>
<th>PASSWORD</th>

 </tr>";
while($row = mysql_fetch_array($slect))
  {
  echo "<tr>";
  //echo "<td>" . $row['C_ID'] . "</td>";
  echo "<td>" . $row['Username'] . "</td>";
  echo "<td>" . $row['Age'] . "</td>";
  echo "<td>" . $row['Password'] . "</td>";
  //echo "<td>" . $row['Cname'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
 
mysql_close($con);
?>
</body>
</html>