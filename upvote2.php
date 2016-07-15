<!--<html>
//<head>
//<style>
//table
//{
//border-style:solid;
//border-width:2px;
//border-color:blue;
//}
//</style>
//</head>
//<body bgcolor="#EEFDEF">-->
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
$userenter=1;
//$userdate=$_POST["date"];
//$userans=$_POST["ans"];
 
$result = mysql_query(" INSERT INTO upvotes(upvote,Cname) VALUES ('$userenter','movie')");
//$slect = mysql_query("SELECT * FROM answer "); 
//echo "<table border='1'  style= 'background-color: #84ed86; color: #761a9b; margin: 0 auto;'>
//<tr>
//<th>ANSWERS</th>
//<th>DATE</th>
//<th>USERNAME</th>
//<th>CATEGORIES</th>
 //</tr>";
//while($row = mysql_fetch_array($slect))
 // {
  //echo "<tr>";
  //echo "<td>" . $row['C_ID'] . "</td>";
  //echo "<td>" . $row['Answer'] . "</td>";
  //echo "<td>" . $row['A_Date'] . "</td>";
  //echo "<td>" . $row['usernameu'] . "</td>";
  //echo "<td>" . $row['Cname'] . "</td>";
  //echo "</tr>";
  //}
//echo "</table>";
echo nl2br("YOUR UPVOTE FOR MOVIE CATEGORY IS SUBMITTED!\nYOUR ARE NOW FREE TO USE IT AGAIN!\nSO WHAT ARE YOU WAITING FOR GO ON!!
\n YOU CAN MOVE BACK TO ENJOY YOUR DISCUSSIONS ON AGORAS !!!!!");
 
mysql_close($con);
?>
<!--</body>
</html>-->