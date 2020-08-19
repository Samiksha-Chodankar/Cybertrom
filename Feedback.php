<!DOCTYPE HTML>
<html>  
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <link href="Feedback.css" rel="stylesheet" type="text/css">
 <link href='https://fonts.googleapis.com/css?family=B612' rel='stylesheet'>

 <head>
  <title> Personal Info</title>
 
 </head>

 <body>
  
  
  <center><div class="container">
   <form action="upload.php" method="POST" enctype="multipart/form-data">
    <font size="9">Personal Information</font><br><br>
	 Name: <input type="text" name="Name" placeholder="Name" required><br>
    E-mail: <input type="text" name="email" placeholder="abc@email.com" required><br>
    Profession: <input type="text" name="Profession" placeholder="Enter text here"><br>
	Contact Number: <input type="text" name="Contact_number" placeholder="Contact Number" maxlength="10" required><br>
	Profile Photo: <input type="file" name="file" id="file" class="form-control" required><br><br>
    <input type="submit" value="Submit">
   </form>
  </div></center>
  
  <br>
  
  
 </body>
</html>