<html>
<head>
** QUESTIONS ASKED BY YOU IN A CATEGORY ON A PARTICULAR DAY ENTERED BY YOU ** 
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
$usercate=$_POST["cat"];
$userdate=$_POST["date"];
 
$result = mysql_query("SELECT * FROM question WHERE usernameu = '$userenter' AND Cname = '$usercate' AND Q_Date = '$userdate'"); 
echo "<table border='1'  style= 'background-color: #84ed86; color: #761a9b; margin: 0 auto;'>
<tr>
<th>QUESTIONS</th>
<th>DATE</th>
<th>USERNAME</th>
<th>CATEGORIES</th>
 </tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  //echo "<td>" . $row['C_ID'] . "</td>";
  echo "<td>" . $row['Ques'] . "</td>";
  echo "<td>" . $row['Q_Date'] . "</td>";
  echo "<td>" . $row['usernameu'] . "</td>";
  echo "<td>" . $row['Cname'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
 
mysql_close($con);
?>
</body>
</html>