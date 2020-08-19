<!DOCTYPE html>
<html>
<head>
   <title> VIEW </title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
</head>

<body>
   
   <div class="container">
     <div class="table-responsive">
	 <table class="table table-bordered table-striped  table-hover">
       <thead>
	      <th>Photo</th>
		  <th>Name</th>
		  <th>Download</th>
	   </thead>
	   
	   <tbody>
	     <?php
		    session_start();
            $db = mysqli_connect ("localhost","root","","db") or die(mysqli_error($db));

            if(isset($_POST["submit"])) 
	          echo 'hi';
	           $Name=$_POST['Name'];
	           $email=$_POST['email'];
	           $Profession=$_POST['Profession'];
			   $Contact_number=$_POST['Contact_number'];
			   $Profile_photo=$_FILES['file']['name'];
			   ;
               
			   $filename=$_FILES['file']['name'];
			   $fileerror=$_FILES['file']['error'];
			   $filetemp=$_FILES['file']['tmp_name'];
			   
			   $fileext=explode('.',$filename);
			     $filecheck=strtolower(end( $fileext));
				 
				 $fileextstored=array('png','jpg','jpeg');
				 
				 if(in_array($filecheck,$fileextstored)) 
					 $destinationfile="upload/".$filename;
					 $temp=$filename;
					 move_uploaded_file($filetemp,$destinationfile);
				 
					 
	
	$result= mysqli_query($db, "INSERT INTO info(Name,email,Profession,Contact_number,Profile_photo) VALUES('$Name','$email','$Profession','$Contact_number',' $destinationfile')")
 or die(mysqli_error($db));
 //Pagination
 
 
  
 
  
  
  
  
   $qdisplay=mysqli_query($db, "SELECT Profile_photo,Name FROM info ")or die(mysqli_error($db));
  // $row=mysqli_num_rows( $qdisplay);
  // $num_of_result=mysqli_num_rows($result);

   while ( $res =mysqli_fetch_array($qdisplay)) {
	    ?>   
       <tr>
	      <td><img src="<?php echo $res['Profile_photo']; ?>" height="100px" width="100px"</td>
		   <td><?php echo $res['Name']; ?></td>
   <td><a href="download.php"<?php $res['Name']?>> Download</a></td>
	   </tr>
	    <?php
   }
   
   ?> 
	   </tbody>
	  
	   
	 </table>
	 </div>
  </div>
  

</body>
</html> 
  
	 
	  