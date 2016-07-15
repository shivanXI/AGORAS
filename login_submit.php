
<?php

/*** begin our session ***/
session_start();

/*** check if the users is already logged in ***/
if(isset( $_SESSION['user_id'] ))
{
    $message = 'Users is already logged in';
	echo "<script type='text/javascript'>\n";
    echo "alert("User is already logged in");\n";
    echo "</script>";
}
/*** check that both the username, password have been submitted ***/
if(!isset( $_POST["phpro_username"], $_POST["phpro_password"]))
{
    $message = 'Please enter a valid username and password';
	echo "<script type='text/javascript'>\n";
    echo "alert("Please enter a valid username and password");\n";
    echo "</script>";
}
/*** check the username is the correct length ***/
elseif (strlen( $_POST["phpro_username"]) > 20 || strlen($_POST["phpro_username"]) < 4)
{
    $message = 'Incorrect Length for Username';
	echo "<script type='text/javascript'>\n";
    echo "alert("Incorrect Length fr Username");\n";
    echo "</script>";
}
/*** check the password is the correct length ***/
elseif (strlen( $_POST["phpro_password"]) > 20 || strlen($_POST["phpro_password"]) < 4)
{
    $message = 'Incorrect Length for Password';
	echo "<script type='text/javascript'>\n";
    echo "alert("Incorrect Length fr password.");\n";
    echo "</script>";
}
/*** check the username has only alpha numeric characters ***/
elseif (ctype_alnum($_POST["phpro_username"]) != true)
{
    /*** if there is no match ***/
    $message = "Username must be alpha numeric";
	echo "<script type='text/javascript'>\n";
    echo "alert("Username must be alpha numeric.");\n";
    echo "</script>";
}
/*** check the password has only alpha numeric characters ***/
elseif (ctype_alnum($_POST["phpro_password"]) != true)
{
        /*** if there is no match ***/
        $message = "Password must be alpha numeric";
		echo "<script type='text/javascript'>\n";
        echo "alert("Password must be alpha numeric.");\n";
        echo "</script>";
}
else
{
     /*** connect to database ***/
    /*** mysql hostname ***/
    $mysql_servername = "localhost";

    /*** mysql username ***/
    $mysql_username = "root";
            
    /*** database name ***/
   $mysql_dbname = "project1";
    
        $conn=  mysql_connect($mysql_servername, $mysql_username);
        if(!$conn){
            die("Connection Failed". mysql_error());
        }
        else {
			echo "<script type='text/javascript'>\n";
            echo "alert("Connection Successful");\n";
            echo "</script>";
        }
        
		mysql_select_db($mysql_dbname);
        echo "<script type='text/javascript'>\n";
        echo "alert("Selection Successful");\n";
        echo "</script>";
        
        $username=$_POST["phpro_username"];
        $password=$_POST["phpro_password"];
        
        $sql1 = "SELECT * FROM user WHERE Username = '$username' AND Password = '$password' ";
        $result= mysql_query($sql1);
        
        if($row=mysql_fetch_assoc($result)){
					echo "<script type='text/javascript'>\n";
                    echo "alert("Already Logged In");\n";
                    echo "</script>";
            }
                else {
                    echo "<script type='text/javascript'>\n";
                    echo "alert("You ARE NOT a registered user please register before login");\n";
                    echo "</script>";
            }
    }

        
        /*** if we have no result then fail boat ***/
       /*** if($user_id == false)
        {
                $message = 'Login Failed';
        }
        /*** if we do have a result, all is well ***/
       // else
        
                /*** set the session user_id variable ***/
               //$_SESSION['user_id'] = $user_id;

                /*** tell the user we are logged in ***/
              //  $message = 'You are now logged in';
                
               // header("Location: reg.html");
        


    
    
    
?>