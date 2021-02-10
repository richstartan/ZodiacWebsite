<?php
  include 'Session.php';

  $usrnm = $user_check;

  $logStatement = "SELECT * FROM zodiacusers where zodiacusername LIKE '".$usrnm."' ;";

  if ($result = mysqli_query($con, $logStatement))
  {
  // Fetch one and one row
  while ($row= $result->fetch_assoc())
    {
    $id = $row['id'];
    $image = $row['image'];
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
    <link rel="stylesheet" type="text/css" href="CSS/Portfolio Page.css">
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

    <!-- datatable -->
    <script language="JavaScript" src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script language="JavaScript" src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">
    <title>ZODIAC® Portfolio</title>

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
    <a class="nav-link" href="#"><button type="button" class="btn btn-outline-success my-2 my-sm-0" data-toggle="modal" data-target="#WithdrawModal">Withdraw</button></a>
    <button type="button" class="btn btn-outline-danger my-2 my-sm-0"  onclick="logout()">Log Out</button>
    </form>
    </nav>

    <div class="container">
        <br>
      <h2><img id="logo" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo">Donations - <u>DAILY</u></h2>
      <ul class="responsive-table">
        <li class="table-header">
          <div class="col col-1">Job Id</div>
          <div class="col col-2">Customer Name</div>
          <div class="col col-3">Amount</div>
          <div class="col col-4">Payment Status</div>
        </li>
        <li class="table-row">
          <div class="col col-1" data-label="Job Id"><?php echo $id ?></div>
          <div class="col col-2" data-label="Customer Name"><?php echo $fname ?> <?php echo $lname ?></div>
          <div class="col col-3" data-label="Amount">Php350</div>
          <div class="col col-4" data-label="Payment Status">Pending</div>
        </li>
        <li class="table-row">
          <div class="col col-1" data-label="Job Id"><?php echo $id ?></div>
          <div class="col col-2" data-label="Customer Name"><?php echo $fname ?> <?php echo $lname ?></div>
          <div class="col col-3" data-label="Amount">Php450</div>
          <div class="col col-4" data-label="Payment Status">Pending</div>
          
        </li>
        <li class="table-row">
          <div class="col col-1" data-label="Job Id"><?php echo $id ?></div>
          <div class="col col-2" data-label="Customer Name"><?php echo $fname ?> <?php echo $lname ?></div>
          <div class="col col-3" data-label="Amount">Php550</div>
          <div class="col col-4" data-label="Payment Status">Paid</div>
        </li>
        <li class="table-row">
          <div class="col col-1" data-label="Job Id"><?php echo $id ?></div>
          <div class="col col-2" data-label="Customer Name"><?php echo $fname ?> <?php echo $lname ?></div>
          <div class="col col-3" data-label="Amount">Php650</div>
          <div class="col col-4" data-label="Payment Status">Paid</div>
        </li>
      </ul>
    </div>

      <!-- Modal -->
  <div class="modal fade" id="WithdrawModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><img id="logo2" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo"> Withdraw Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="" class="form-inline" method="POST">
      <label for="">Our Withdraw Money Partners:</label>
      <br>
      <a href="https://www.paymaya.com/" add target="_blank"><img id="logo22" src="Images/PayMaya_Logo.png"></a>
      <a href="https://www.gcash.com/" add target="_blank"><img id="logo22" src="Images/GCash_Logo.png"></a>
      <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
                <div class="form-group">
              <label for="PaymentAmount">Total Money Earned:</label>
              <div class="amount-placeholder">
                  <span>Php</span>
                  <span><?php echo $id ?></span>
              </div>
             </div>
                  <br>
                <div class="form-group">
                        <label for="option" class="col-sm-3 control-label">Option:</label>
                        <div class="col-sm-9">
                            <select class="inputvalues" id="status" name="status">
                                <option>PayMaya</option>
                                <option>GCash</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="accountnumber" class="col-sm-3 control-label">Account Number:</label>
                        <div class="col-sm-9">
                            <input type="text" class="inputvalues" id="accountnumber" name="accountnumber" placeholder="Ex: 09171234567">
                        </div>
                    </div> 
                    <br> 
                    <div class="form-group">
                        <label for="description" class="col-sm-3 control-label">Description:</label>
                        <div class="col-sm-9">
                            <input type="text" class="inputvalues" id="description" name="description" placeholder="Your withdraw status">
                        </div>
                    </div> 
                    <br>
                    <div class="form-group">
                        <label for="amount" class="col-sm-3 control-label">Amount (Php):</label>
                        <div class="col-sm-9">
                            <input type="number" class="inputvalues" id="amount" name="amount" placeholder="In Philippine Peso">
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Date:</label>
                        <div class="col-sm-9">
                            <input type="date" class="inputvalues" id="date" name="date">
                        </div>
                    </div> -->
                    <br>
                    <div class="form-group">
                    <button name="withdraw-btn" type="button" class="btn btn-info" type="submit">Withdraw Money</button> 
                    </div>
                </div>
            </div>
      </form>
      </div>
      <div class="modal-footer">
        <img id="ssllogo" src="Images/securelogo.png" alt="SSL Partners">
        <img id="ssllogo2" src="Images/ssl-icon.jpg" alt="SSL Logo">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

    <div class="container">
        <br>
      <h2><img id="logo" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo">Donations - <u>WEEKLY</u></h2>
      <ul class="responsive-table">
        <li class="table-header">
          <div class="col col-1">Job Id</div>
          <div class="col col-2">Customer Name</div>
          <div class="col col-3">Amount</div>
          <div class="col col-4">Payment Status</div>
        </li>
        <li class="table-row">
          <div class="col col-1" data-label="Job Id"><?php echo $id ?></div>
          <div class="col col-2" data-label="Customer Name"><?php echo $fname ?> <?php echo $lname ?></div>
          <div class="col col-3" data-label="Amount">Php350</div>
          <div class="col col-4" data-label="Payment Status">Pending</div>
        </li>
        <li class="table-row">
          <div class="col col-1" data-label="Job Id"><?php echo $id ?></div>
          <div class="col col-2" data-label="Customer Name"><?php echo $fname ?> <?php echo $lname ?></div>
          <div class="col col-3" data-label="Amount">Php450</div>
          <div class="col col-4" data-label="Payment Status">Pending</div>
          
        </li>
        <li class="table-row">
          <div class="col col-1" data-label="Job Id"><?php echo $id ?></div>
          <div class="col col-2" data-label="Customer Name"><?php echo $fname ?> <?php echo $lname ?></div>
          <div class="col col-3" data-label="Amount">Php550</div>
          <div class="col col-4" data-label="Payment Status">Paid</div>
        </li>
        <li class="table-row">
          <div class="col col-1" data-label="Job Id"><?php echo $id ?></div>
          <div class="col col-2" data-label="Customer Name"><?php echo $fname ?> <?php echo $lname ?></div>
          <div class="col col-3" data-label="Amount">Php650</div>
          <div class="col col-4" data-label="Payment Status">Paid</div>
        </li>
      </ul>
    </div>

    <div class="container">
        <br>
      <h2><img id="logo" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo">Donations - <u>MONTHLY</u></h2>
      <ul class="responsive-table">
        <li class="table-header">
          <div class="col col-1">Job Id</div>
          <div class="col col-2">Customer Name</div>
          <div class="col col-3">Amount</div>
          <div class="col col-4">Payment Status</div>
        </li>
        <li class="table-row">
          <div class="col col-1" data-label="Job Id"><?php echo $id ?></div>
          <div class="col col-2" data-label="Customer Name"><?php echo $fname ?> <?php echo $lname ?></div>
          <div class="col col-3" data-label="Amount">Php350</div>
          <div class="col col-4" data-label="Payment Status">Pending</div>
        </li>
        <li class="table-row">
          <div class="col col-1" data-label="Job Id"><?php echo $id ?></div>
          <div class="col col-2" data-label="Customer Name"><?php echo $fname ?> <?php echo $lname ?></div>
          <div class="col col-3" data-label="Amount">Php450</div>
          <div class="col col-4" data-label="Payment Status">Pending</div>
          
        </li>
        <li class="table-row">
          <div class="col col-1" data-label="Job Id"><?php echo $id ?></div>
          <div class="col col-2" data-label="Customer Name"><?php echo $fname ?> <?php echo $lname ?></div>
          <div class="col col-3" data-label="Amount">Php550</div>
          <div class="col col-4" data-label="Payment Status">Paid</div>
        </li>
        <li class="table-row">
          <div class="col col-1" data-label="Job Id"><?php echo $id ?></div>
          <div class="col col-2" data-label="Customer Name"><?php echo $fname ?> <?php echo $lname ?></div>
          <div class="col col-3" data-label="Amount">Php650</div>
          <div class="col col-4" data-label="Payment Status">Paid</div>
        </li>
      </ul>
      <br>
      <br>
    </div>

      <!-- Footer content -->
      <div class="footer">
        <p><img id="logo2" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo"> 2020 - All Rights Reserved <img id="logo3" src="Images/ZODIAC®Logo5.png" alt="ZODIAC® Logo"></p>
        </div>

</body>
</html>