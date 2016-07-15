<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>sports</title>
		<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
		<link href="http://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<script>
       function validate(){
      var x=document.forms["myform"]["question"].value;
	  var y=document.forms["myform1"]["username"].value;
      var z=document.forms["myform2"]["answer"].value;
	  var w=document.forms["myform3"]["comments"].value;
	  if((y==null || y=="" ) && ( x==null||z==null||w==null||x.length > 0 || z.length > 0 || w.length >0)){
	       alert("USERNAME IS MANDATORY ! PLEASE FILL IT !!");
		   return false;
		   }
		}
      </script>
	</head>
	<body>
	<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="project1";
	$conn = mysql_connect($servername,$username,$password,$dbname);
	if(!$conn){
	       die("Connection failed:".mysqli_connect_error());
		   }
		   $commentErr=$questionErr=$answerErr="";
		   if($_SERVER["REQUEST_METHOD"]=="POST")
		   {
		   $comment = $question = $answer = "";
           $question=$_POST["myform"];
           $answer=$_POST["myform2"];
           $comment=$_POST["myform3"]

         $sql = "INSERT INTO question (Ques) VALUES('$question')";
         $sql1="INSERT INTO answer (Answer) VALUES ('$answer')";
         $sql2="INSERT INTO comment (COMM) VALUES ('$comment')"
         
		 $res=mysql_query($conn, $sql);
		 $res1=mysql_query($conn, $sql1);
		 $res2=mysql_query($conn, $sql2);
}
function test_input($data){
     $data = trim($data);
	 $data = stripslashes($data);
	 $data = htmlspecialchars($data);
      return $data;
}
mysql_close($conn);
?>
		<div id="wrapper">
			<div id="header">
				<div id="logo">
					<h1><a href="#">Agoras</a></h1>
				</div>
				<div id="menu">
					<ul>
						
						<li><a href="#"><img src="images/upvote.jpg" width="100" height="96"/>UPVOTE</a></li>
						<li><a href="#"><img src="images/downvote.jpg" width="100" height="96"/>DOWNVOTE</a></li>
						<li class="last"><a href="#"></a></li>
					</ul>
					<br class="clearfix" />
				</div>
			</div>
			<div id="page">
				<div id="sidebar">
					<div class="box">
						<h3>Ask a Question !!!</h3>
						<p>
				        <form name="myform" action="" onsubmit="return validate()" method="post">
<textarea name="question" id="question" style="width:70%;height:50px;padding:2%;font:1.4em/1.6em cursive;background-color:white;">
</textarea>
<button id="Submit" onclick="display()" style="font-size: 14px;;background-color:cyan;color:white;">Submit</button>
</form>
						</p>
					</div>
					<div class="box">
						<h3>Enter Your username before giving answer!</h3>
						<p><form name="myform1" action="" onsubmit="return validate()" method="post">
<textarea name="username" id="username" style="width:70%;height:20px;padding:2%;font:1.4em/1.6em cursive;background-color:white;">
</textarea>
<button id="Submit" onclick="display()" style="font-size: 14px;;background-color:cyan;color:white;">Submit</button>
</form>
					</div>
					<div class="box">
						<h3>Give Your Answer !!</h3>
						<p><form name="myform2"action="" onsubmit="return validate()" method="post">
<textarea name="answer" id="answer" style="width:70%;height:70px;padding:2%;font:1.4em/1.6em cursive;background-color:white;">
</textarea>
<button id="Submit" onclick="display()" style="font-size: 14px;;background-color:cyan;color:white;">Submit</button>
</form>
					</div>
				</div>
				<div id="content">
					<div class="box">
						<h2>India vs South Africa Number Cruncher</h2>
						<img class="alignleft" src="images/kohli.jpg" width="200" height="180" alt="" />
						<p>
							Virat Kohli became the fourth player to register hundred against all the Test countries in ODIs, joining Sachin Tendulkar, Ricky Ponting, Herschelle Gibbs and Hashim Amla.
                           - Kohli has recorded 23 centuries in ODIs -- his first vs South Africa.
                           - Kohli has posted 16 tons as No. 3 batsman and seven as No.4. Only two batsmen have registered more centuries at No.3 in ODIs -- Ponting (29) and Kumar Sangakkara (18).
						   <a href="#">    Read more about</a>
						</p>
					</div>
	
					<br class="clearfix" />
				</div>
				<br class="clearfix" />
			</div>
			<div id="page-bottom">
				<div id="page-bottom-sidebar">
				<h3>Comments</h3>
				<form name="myform3" action="" onsubmit="return validate()" method="post">
<textarea name="comments" id="comments" style="width:200%;height:40px;padding:2%;font:1.4em/1.6em cursive;background-color:white;">
</textarea>
<button id="Submit" onclick="display()" style="font-size: 14px;;background-color:cyan;color:white;">Submit</button>
</form>
   <script>
	   function display()
	   {
	   document.getElementById("Submit").innerHTML = "submitted";
	   document.getElementById("comments").inner
	   }
	</script>		
                     	
					<!--<ul class="list">
						<li class="first"><a href="#"></a></li>
						<li><a href="#"></a></li>
						<li class="last"><a href="#"></a></li>
					</ul>-->
				</div> 
				<div id="page-bottom-content">
					<h3></h3>
					<p>
					</p>
				</div>
				<br class="clearfix" />
			</div>
		</div>
		<div id="footer">
			Copyright &copy; Untitled | Design by Agoras Technical Team</a>
		</div>
	</body>
</html>