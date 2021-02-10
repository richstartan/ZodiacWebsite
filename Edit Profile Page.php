<?php
    include 'Session.php';

    $usrnm = $user_check;

    $fetchStatement = "SELECT * FROM zodiacusers where zodiacusername LIKE '".$usrnm."' ;";

    if ($result = mysqli_query($con, $fetchStatement))
    {
    // Fetch one and one row
    while ($row= $result->fetch_assoc())
      {
        $id = $row['id'];
        $target_dir = $row['image'];
	    $wegoliveusername = $row['wegoliveusername'];
	    $fname = $row['fname'];
        $lname = $row['lname'];
        $birthdate = $row['birthdate'];
	    $email = $row['email'];
	    $contactno = $row['contactno'];
	    $zodiacusername = $row['zodiacusername'];
	    $branch = $row['branch'];
	    $refcode = $row['refcode'];
        $dateandtime = date('Y-m-d');
      }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="CSS/Edit Profile Page.css">
	<link rel="icon" href="Images/ZODIAC®Logo3.png" type="image/gif" sizes="16x16">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    	<!-- Buttons -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/23b708834a.js" crossorigin="anonymous"></script>
    <title>ZODIAC® Edit Profile</title>

<script type="text/javascript" src="JS/jquery-1.11.3.min.js"></script>
<script type="text/javascript">
		var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 300);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
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

function logout(){
    alert ("Thank you for using ZODIAC®, please come again!");
    window.location.href = 'Log Out.php';
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

<nav class="navbar sticky-top navbar-dark" style="background-color: #072d5f;">
		<!-- Navbar content -->
	<a class="navbar-brand" href="Home.php">
    <img id="logo" src="Images/ZODIAC®Logo4.png" class="d-inline-block align-top" alt="ZODIAC® Logo">
  	</a>
      <h3 class="welcome-title">Welcome, <u><?php echo $login_session?>!</u></h3>
    <form action="" class="form-inline" method="POST">
    <a class = "nav-link" href="#"><img id="logo4" src="Images/WeGo LIVE! logo.png" alt="WeGo LIVE! Logo"></a>
    <a class="nav-link" href="Profile Page.php">Profile</a>
    <a class="nav-link" href="Portfolio Page.php">Portfolio</a>
    <a class="nav-link" href="#">Recruitments</a>
    <a class="nav-link" href="#">Transaction</a>
    <a class="nav-link" href="Subscription Page.php">Subscribe Now!</a>
    <button type="button" class="btn btn-outline-danger my-2 my-sm-0"  onclick="logout()">Log Out</button>
    </form>
    </nav>

    <div class="container emp-profile">
            <form method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                        <?php //echo '<img src="Images/'.$image.'" />'; ?>
                        <img id="ImdID" src="<?php echo $target_dir ?>" alt="Profile Picture">
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="image" onchange="readURL(this);">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                    <img id="logo2" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo"><img id="logo3" src="Images/ZODIAC®Logo5.png" alt="ZODIAC® Logo">
                        <div class="profile-head">
                                    <br>
                                    <h2 class="header-info">
                                    Edit your Profile
                                   </h2>
                                   <form class="form-horizontal" role="form" method="post" action="<?php $_PHP_SELF ?>" enctype="multipart/form-data">
                                    <p class="proile-rating">WeGo LIVE! Username: </p>
                                    <input name="wegoliveusername" type="text" class="inputvalues" value="<?php  echo $wegoliveusername ?>" required/>
                                    <p class="proile-rating">ZODIAC®! Username: </p>
                                    <input name="zodiacusername" type="text" class="inputvalues" value="<?php  echo $zodiacusername ?>" required/>
                                    <p class="proile-rating">FIRST NAME: </p>
                                    <input name="fname" type="text" class="inputvalues" value="<?php  echo $fname ?>" required/>
                                    <p class="proile-rating">LAST NAME: </p>
                                    <input name="lname" type="text" class="inputvalues" value="<?php  echo $lname ?>" required/>
                                    <p class="proile-rating">BIRTHDATE: </p>
                                    <input name="birthdate" type="date" type="date" value="<?php  echo $birthdate ?>" class="inputvalues" id="birthday" name="birthday" required/>
                                    <p class="proile-rating">E-MAIL: </p>
                                    <input name="email" type="text" class="inputvalues" value="<?php  echo $email ?>" required/>
                                    <p class="proile-rating">CONTACT NO.: </p>
                                    <input name="contactno" type="text" class="inputvalues" value="<?php  echo $contactno ?>" required/>
                                    <p class="proile-rating">RE-CHOOSE YOUR BRANCH: </p>
                                    <select name="branch" class="inputvalues" required>
  			                        <optgroup class="inputvalues" label="ZODIAC® Branches">
			                        <option value="" disabled selected><?php echo $branch ?></option>
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
                                    <input name="submit_btn" type="submit" id="update_btn" value="Update Your Profile" />
                                   </form>
                                    <br>
                                    <!-- <p class="proile-rating">RATING: <span><i class="fas fa-3x fa-star"></i><i class="fas fa-3x fa-star"></i><i class="fas fa-3x fa-star"></i><i class="fas fa-3x fa-star"></i><i class="fas fa-3x fa-star"></i></span></p>
                                    <p class="proile-rating">RANKING: <span>10/10 Top 5, NCR, Philippines</span></p> -->
                            <!-- <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                </li>
                            </ul> -->
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a href="Profile Page.php"><input type="button" class="profile-edit-btn" name="btnAddMore" value="Back to Profile"/></a>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-md-4">              
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label><u>WeGo LIVE! ID:</u></label>
                                            </div>
                                            <div class="col-md-6">
                                                <h6><?php echo $id?></h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label><u>WeGO LIVE! Username:</u></label>
                                            </div>
                                            <div class="col-md-6">
                                                <h6><?php echo $wegoliveusername?></h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label><u>ZODIAC® Username:</u></label>
                                            </div>
                                            <div class="col-md-6">
                                                <h6><?php echo $zodiacusername?></h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label><u>Birthdate:</u></label>
                                            </div>
                                            <div class="col-md-6">
                                                <h6><?php echo $birthdate?></h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label><u>E-mail:</u></label>
                                            </div>
                                            <div class="col-md-6">
                                                <h6><?php echo $email?></h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label><u>Contact Number:</u></label>
                                            </div>
                                            <div class="col-md-6">
                                                <h6><?php echo $contactno?></h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label><u>Referral Code:</u></label>
                                            </div>
                                            <div class="col-md-6">
                                                <h6><?php echo $refcode?></h6>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label><u>Date Joined:</u></label>
                                            </div>
                                            <div class="col-md-6">
                                                <h6><?php echo $dateandtime?></h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label><u>Hours Accumulated:</u></label>
                                            </div>
                                            <div class="col-md-6">
                                                <h6></h6>
                                            </div>
                                        </div> -->
                                        <!-- <div class="row">
                                            <div class="col-md-6">
                                                <label>Total Projects</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>230</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>English Level</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div> -->
                                        <!-- <div class="row">
                                            <div class="col-md-6">
                                                <label>Availability</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>6 months</p>
                                            </div>
                                        </div> -->
                                <!-- <div class="row">
                                    <div class="col-md-12">
                                        <label>Your Bio</label><br/>
                                        <p>Your detail description</p>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>

<?php 
$con = mysqli_connect("localhost", "zodiacloginregisterdb", "") or die("Connection failed: " . mysqli_connect_error());
mysqli_select_db($con,'zodiacloginregisterdb');

if(isset($_POST['submit_btn']))  
{          
        // $file = file_get_contents($_FILES['image']['tmp_name']);
        $newwegoliveusername = $_POST['wegoliveusername'];
        $newfname = $_POST['fname'];
        $newlname = $_POST['lname'];
        $newbirthdate = $_POST['birthdate'];
        $newemail = $_POST['email'];
        $newcontactno = $_POST['contactno'];
        $newzodiacusername = $_POST['zodiacusername'];
        $newbranch = $_POST['branch'];
        $errors= array();

        // Initialize message variable
		// $msg = "";

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
			</script>";
		  $uploadOk = 0;
		}

		// Check if file already exists
		if (file_exists($target_file)) 
		{
		echo "<script> alert('Sorry, file already exists!'); 
			</script>";
		$uploadOk = 0;
  		}

		// Check file size
		if ($_FILES['image']['size'] > 500000) 
		{
		echo "<script> alert('Sorry, your file is too large!'); 
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

		// Validate e-mail
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
		{
		echo "<script> alert('$email is a valid email address!'); </script>";
		}
		else 
		{
		echo "<script> alert('$email is not a valid email address!'); 
			</script>";
		}
        
       // Check connection
        if($con === false)
        {
        die("ERROR: Could not connect. " . mysqli_connect_error());
        }

       // Attempt update query execution
       if(empty($errors)==true)
       {
        $sql = "UPDATE zodiacusers SET wegoliveusername='$newwegoliveusername', fname='$newfname', lname='$newlname', birthdate='$newbirthdate', email='$newemail', contactno='$newcontactno', zodiacusername='$newzodiacusername', branch='$newbranch' WHERE id='$id'";
        if(mysqli_query($con, $sql))
        {
                if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
                   
                    $sql = "UPDATE zodiacusers SET image='$target_file' WHERE id='$id'";
                    echo "<script> alert('Image updated successfully!'); </script>";
                }
                else
                {
                    echo "<script> alert('Failed to update image!'); </script>";
                }
        $run_update = mysqli_query($con, $sql);
        
         echo "<script>
         alert('Update profile success, returning to your Profile Page!');
         window.location.href='Profile Page.php';
         </script>";

        }
        else
        {
           print_r($errors);
        }
       }
       else
       {
        echo "<script> alert('ERROR: Could not update your profile!'); </script>". mysqli_error($con);
       }
}
?>

     <!-- Footer content -->
     <div class="footer">
        <p><img id="logo2" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo"> 2020 - All Rights Reserved <img id="logo3" src="Images/ZODIAC®Logo5.png" alt="ZODIAC® Logo"></p>
        </div>

</body>
</html>