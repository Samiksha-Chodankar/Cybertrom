<?php

		    session_start();
            $db = mysqli_connect ("localhost","root","","db") or die(mysqli_error($db));
			if(isset($_POST['Username'])){
			$uname=$_POST['admin'];
			$password=$_POST['Admin@123'];
			
			$sql="select*from login where Username='".$uname."' And U_Password='".$password."' limit 1";
			
			$result=mysql_query(sql);
			
			if(mysql_num_rows($result)==1){
			  echo"login successful";
			  exit();
			  }
			else{
			  echo "Try again";
			  exit();
			
			}
			
			
			
			}
?>





<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;  charset="utf 8"/>
<title>LOG IN</title>
<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
  <div class="signin">
  <form action="Feedback.php" method="POST">
    <h2 style="color:white">LOG IN</h2>
	<input type="text" name="Username" placeholder="username" required/><br><br>
	<input type="Password" id="psw" name="password" placeholder="password" required/><br><br>
	<input type="submit" value="Log In"><br><br><br>
	
	
	</form
  </div>
  <div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>

  </body>
  </html>
