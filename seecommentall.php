<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>database connections</title>
    </head>
    <body>
      <?php
      $username = "root";
      $password = "";
      $servername = "localhost";
	  $dbname = "project1";

      $conn = mysql_connect($servername,$username,$password);
	  mysql_select_db($dbname);
	  if(!$conn){           
	  die("Unable to connect". mysql_connect_error());
	  }
        echo "Connections are made successfully::";
      
       

      //execute the SQL query and return records
      $result = mysql_query("SELECT * FROM comment ");
      ?>
      <table border="2" style= "background-color: #84ed86; color: #761a9b; margin: 0 auto;" >
      <thead>
        <tr>
          <th>comment_id</th>
          <th>comment</th>
          <th>date</th>
          <th>username</th>
          
          <td>category</td>
        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysql_fetch_assoc( $result ) ){
            
            echo "<tr>";
              echo"<td>".$row['C_ID']."</td>";
              echo"<td>".$row['COMM']."</td>";
              echo"<td>".$row['C_DATE']."</td>";
              echo"<td>".$row['usernameu']."</td>;
              echo"<td>".$row['Cname']."</td>";
              echo"</tr>\n";
          }
        ?>
      </tbody>
    </table>
     
    </body>
    </html>