<?php
	require 'dbconfig/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Register Page.css">
    <link rel="icon" href="Images/ZODIAC®Logo3.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	  
	<!-- Fontawesome -->
	<script src="https://kit.fontawesome.com/23b708834a.js" crossorigin="anonymous"></script>
    <title>ZODIAC® Register</title>

	<script type="text/javascript" src="JS/jquery-1.11.3.min.js"></script>
	<script type="text/javascript">
		var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 300);
}


function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#ImdID').attr('src', e.target.result);
    };

    reader.readAsDataURL(input.files[0]);
  }
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
		$(document).ready(function(){

			/*! Fades in page on load */
			$('body').css('display', 'none');
			$('body').fadeIn(500);
		});
		 //$(document).ready(function () { $('div').hide().fadeIn(1500).delay(4000)});
		/*$(document).ready(function() {
			$('a').click(function() {
				// alert("Are you sure you want to visit this website?");
				var selected = $(this);
				$('a').removeClass('active');
				$(selected).addClass('active');
			});
			
			var $a = $('.a'),
				$b = $('.b'),
				$c = $('.c'),
				$d = $('.d'),
				$e = $('.e'),
				$home = $('.home'),
				$home = $('.aboutus');
			
			$a.click(function() {
				$home.fadeIn();
				$aboutus.fadeOut();
			});
			$b.click(function() {
				$aboutus.fadeIn();
				$home.fadeOut();
			});
		});*/


	</script>
</head>
<body onload="myFunction()" style="margin:0;">
<div id="loader"></div>
<div style="display:none;" id="myDiv" class="background animate-bottom">

	<div class="container" style="
    width: 1020px;
    padding-top: 15px;
    padding-bottom: 15px;
    margin-left: 50px;
	height: 1140px;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
     <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li> 
     </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="Images/Carousel1.jpg" alt="ZODIAC® Promo 1" style="border-radius: 10px;">
        <div class="carousel-caption"> 
           <!-- <h3>Los Angeles</h3>
          <p>LA is always so much fun!</p>  -->
        </div>
      </div>

       <div class="item">
        <img src="Images/Carousel2.jpg" alt="ZODIAC® Promo 2" style="border-radius: 10px;">
        <div class="carousel-caption">
           <!-- <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>  -->
         </div>
	  </div> 
	  
	   <!-- Left and right controls -->
	    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
	</a>
  </div>
</div> 

<div id="main-wrapper">
		<center>
			<img class="logo-img" src="Images/ZODIAC®Logo2.png"/>
			<h2><i>Register and become</i></h2>
			<img id="logo2" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo" width="170px" height="40px">
		</center>
		<form class="myform" action="Register Page.php" method="POST" enctype="multipart/form-data">
		<div class="profile-img">
		<center>
		<br>
		<br>
		<br>
		<div class="file btn btn-lg btn-primary">
		<!-- <center><img class="logo-img" src="Images/addpic.png"/></center> -->
		<input type="file" name="image" onchange="readURL(this);" required>
		<img id="ImdID" src=" " alt="Upload Your Picture" width="150px" />
		</div>
		</center>
		</div>
		<br>	
		<label><img id="logo2" src="Images/WeGo LIVE! Logo.png" alt="WeGo LIVE! Logo" width="165px" height="40px"> Username:</label>
		<input name="wegoliveusername" type="text" class="inputvalues" placeholder="Type your WeGo LIVE! Username" required/>
		<br>
		<br>
		<label>First Name:</label>
		<input name="fname" type="text" class="inputvalues" placeholder="Type your First Name" required/>
		<br>
		<br>
		<label>Last Name:</label>
		<input name="lname" type="text" class="inputvalues" placeholder="Type your Last Name" required/>
		<br>
		<br>
		<label for="birthday">Birthdate:</label>
		<input name="birthdate" type="date" value="" class="inputvalues" id="birthday" name="birthday" required/>
		<br>
		<br>
		<label>E-Mail:</label>
		<input name="email" type="text" class="inputvalues" placeholder="Type your E-Mail" required/>
		<br>
		<br>
		<label>Contact No.:</label>
		<input name="contactno" type="text" class="inputvalues" placeholder="Type your Contact No." required/>
		<br>
		<br>
		<label><img id="logo2" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo" width="170px" height="40px"> Username:</label>
		<input name="zodiacusername" type="text" class="inputvalues" placeholder="Type your ZODIAC® Username" required/>
		<br>
		<br>
		<label>Register Password:</label>
		<input name="password" type="password" class="inputvalues" placeholder="Type your Password" required/>
		<br>
		<br>
		<label>Re-type Password:</label>
		<input name="cpassword" type="password" class="inputvalues" placeholder="Re-type your Password" required/>
		<br>
		<br>
		<label><img id="logo2" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo" width="170px" height="40px"> Branch:</label>
		<select name="branch" class="inputvalues" required>
  			<optgroup class="inputvalues" label="ZODIAC® Branches">
			<option value="" disabled selected>Please select first:</option>
    		<option value="ZODIAC® Aries">ZODIAC® Aries</option>
			<option value="ZODIAC® Taurus">ZODIAC® Taurus</option>
			<option value="ZODIAC® Gemini">ZODIAC® Gemini</option>
			<option value="ZODIAC® Cancer">ZODIAC® Cancer</option>
			<option value="ZODIAC® Leo">ZODIAC® Leo</option>
			<option value="ZODIAC® Virgo">ZODIAC® Virgo</option>
			<option value="ZODIAC® Libra">ZODIAC® Libra</option>
			<option value="ZODIAC® Scorpio">ZODIAC® Scorpio</option>
			<option value="ZODIAC® Sagittarius">ZODIAC® Sagittarius</option>
			<option value="ZODIAC® Capricorn">ZODIAC® Capricorn</option>
			<option value="ZODIAC® Aquarius">ZODIAC® Aquarius</option>
    		<option value="ZODIAC® Pisces">ZODIAC® Pisces</option>
  			</optgroup>
		</select>
		<br>
		<br>
		<label>Referral Code (if any):</label>
		<input name="refcode" type="text" class="inputvalues" placeholder="Put your referral code here"/>
		<input name="submit_btn" type="submit" id="signup_btn" value="Sign Up" />
		<br>
		<a href="Login Page.php"><input type="button" id="back_btn" value="Back to Log-In" /></a>
	</form>
</div>
	</div>

	<?php

	if(isset($_POST['submit_btn']))
	{
		//echo '<script type="text/javascript>alert("Account successfully created!");</script>';
		$id = $_POST['id'];
		$wegoliveusername = mysqli_real_escape_string($con, $_POST['wegoliveusername']);
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$birthdate = date('Y-m-d', strtotime($_POST['birthdate']));
		$email = $_POST['email'];
		// Remove all illegal characters from email
		$email = filter_var($email, FILTER_SANITIZE_EMAIL);
		$contactno = $_POST['contactno'];
		$zodiacusername = mysqli_real_escape_string($con, $_POST['zodiacusername']);
		$password = mysqli_real_escape_string($con, $_POST['password']);
		$password = md5($password);
		$cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
		$cpassword = md5($cpassword);
		$branch = $_POST['branch'];
		$refcode = $_POST['refcode'];
		$dateandtime = date('Y-m-d H:i:s');

		// $wegoliveusernamechecker = 0;
		// $zodiacusernamechecker = 0;
		// $finalchecker = 0;

		// Initialize message variable
		// $msg = "";

		// Get image name
		// $image = $_FILES['image']['name'];

		// image file directory
		$target_dir = "Images/ProfilePictures/";
		$target_file = $target_dir . basename($_FILES['image']['name']);

		// image file type verification
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


		// Check if image file is a actual image or fake image
		$check = getimagesize($_FILES['image']['tmp_name']);
		if($check !== false) 
		{
		  echo "<script> alert('File is an image - " . $check['mime'] . ".'); </script>";
		  $uploadOk = 1;
		} 
		else 
		{
			echo "<script> alert('File is not an image!'); 
			window.location.href='Register Page.php';
			</script>";
		  $uploadOk = 0;
		}

		// Check if file already exists
		if (file_exists($target_file)) 
		{
		echo "<script> alert('Sorry, file already exists!'); 
			window.location.href='Register Page.php';
			</script>";
		$uploadOk = 0;
  		}

		// Check file size
		if ($_FILES['image']['size'] > 500000) 
		{
		echo "<script> alert('Sorry, your file is too large!'); 
			window.location.href='Register Page.php';
			</script>";
		$uploadOk = 0;
  		}

		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) 
		{
		echo "<script> alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed!'); </script>";
  		$uploadOk = 0;
		}

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		echo "<script> alert('Sorry, your file was not uploaded!'); 
			window.location.href='Register Page.php';
			</script>";
  		// if everything is ok, try to upload file
		} 	
		else 
		{
		if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) 
		{
		echo "<script> alert('The file ". htmlspecialchars( basename( $_FILES['image']['tmp_name'])). " has been uploaded.'); </script>";
		} 
		else 
		{
		echo "<script> alert('Sorry, there was an error uploading your file!'); 
			window.location.href='Register Page.php';
			</script>";
		}
  		}

		// Validate e-mail
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
		{
		echo "<script> alert('$email is a valid email address!'); </script>";
		}
		else 
		{
		echo "<script> alert('$email is not a valid email address!'); 
			window.location.href='Register Page.php';
			</script>";
		}

		if($password==$cpassword)
		{
			$query = "select * from zodiacusers WHERE zodiacusername = '$zodiacusername' AND wegoliveusername = '$wegoliveusername'";
			$query_run = mysqli_query($con,$query);

			if(mysqli_num_rows($query_run)>0)
			{
				// There is already a user with the same WeGo LIVE! username
				echo '<script type="text/javascript">alert("WeGo LIVE! Username already exist!");</script>';
			}
			else
			{
				$query = "Insert into zodiacusers values('$id', '$target_file', '$wegoliveusername', '$fname', '$lname', '$birthdate', '$email', '$contactno', '$zodiacusername', '$password', '$branch', '$refcode', '$dateandtime')";
				$query_run = mysqli_query($con,$query);

				if($query_run)
				{
					// header('location:Login Page.php');
					// echo '<script type="text/javascript">alert("Account successfully created!");</script>';

					
					// Validate image file if upload is success or not.
					// if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
					// 	echo "<script> alert('Image uploaded successfully!'); </script>";
					// }
					// else
					// {
					// 	echo "<script> alert('Failed to upload image!'); </script>";
					// }

					echo "<script>
							alert('Account successfully created!');
							window.location.href='Login Page.php';
						  </script>";
				}
				else
				{
					echo '<script type="text/javascript">alert("Error!");</script>';
				}
			}
		}
		else
		{
			echo '<script type="text/javascript">alert("Password and Confirm Password does not match!");</script>';
		}
	}
?>

</body>
</html>