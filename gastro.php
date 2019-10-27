<?php
    
    //session start
   session_start();

    require 'config_database_index.php';

    //session variables
    $name = $_SESSION['name'];
    $userImage = $_SESSION['userimage'];
    $loggedtime = $_SESSION['loggedtime'];
    $sessionSetTime = $_SESSION['sessionsettime'];

   if(!isset($_SESSION['name'])){
       header("Location:index.php");
   }
   if(time() - $sessionSetTime > 600){
        session_destroy();
        header("Location:logout.php");
   }

   $deptname = $_COOKIE['name'];



?>




<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="src\style\grid-system.css">
	<link rel="stylesheet" type="text/css" href="src\style\department_style.css">
	<link rel="shortcut icon" type="image/png "href="src/images/4.png">
	<link rel="stylesheet" type="text/css" href="src/style/home.css">
	<script src="src\js\home.js"></script>
</head>
<body>

 <header>
        
        <div class="social-back">

        <div class="dropdown">
                                        <button class="dropbtn">DEPARTMENTS</button>
                                        <div class="dropdown-content">
                                          <a onclick="department(1)">CARDIOLOGY</a>
                                          <a onclick="department(2)">ORTHEOPEDICS</a>
                                          <a onclick="department(3)">GENERAL SURGERY</a>
                                          <a onclick="department(4)">GASTROENTEROLOGY</a>
                                          <a onclick="department(5)">DERMATOLOGY</a>
                                        </div>
                                </div> 
					<div class="dropdown">
                            <button class="dropbtn">PROFILE</button>
                            <div class="dropdown-content">
                              <a href="patient_details.php">VIEW PROFILE</a>
                            </div>
					</div>
					<div class="dropdown">
                            <button class="dropbtn">BILLING & PAYMENTS</button>
                            <div class="dropdown-content">
                              <a href="billing.php">PAYEMENT HISTORY</a>
                              <a href="billing.php">MAKE A PAYMENT</a>
                            </div>
                    </div> 
                    <div class="dropdown">
                        <button class="dropbtn">CONTACT US</button>
                        <div class="dropdown-content">
                          <a href="#">Email: contact@meditech.org</a>
                          <a href="#">Call: +94123456789</a>
                          <a href="#">Whats app</a>
                          <a href="contactus.html">Contact us Page</a>
                        </div>
					</div>

					<div class="dropdown">
                                <button class="dropbtn" onclick="home()">HOME</button>
                            </div>
                            <div class="dropdown">
                                    <button class="dropbtn" onclick="ph()">PHARMACY</button>
                                </div>
					
					<div class="user-info">
                        <h3>Logged in : <?php echo($loggedtime); ?> </h3>
					</div>
					
					<div class="reg-user">
            <img src="<?php echo implode($userImage);?>" alt="">
            <div class="user-settings">
                <a href="logout.php">LOG-OUT</a>
                <a href="logout.php">SIGN-IN</a>
                <a href="sign-in.php"`>REGISTER</a>
            </div>
        </div>
            </div> 
        </div>
           
    </header>
	<div class="container-color">
		

		
		<img src="src\images\health-care.jpg" class="imageback" height="1030px" width="100%"> 
		<div class="row">
			<div class="col-12 heading1" style="margin-top:40px;">
				
				<h1 style="font-size:45px;">Gastroenterology Department</h1>
			</div>
		</div>
		
		<div class="row">
			<p align="justify" >
			<h3 style="font-family:calibri;">
			Gastroenterology is the study of the normal function and diseases of the esophagus, stomach, small intestine, colon and rectum, pancreas, gallbladder, bile ducts and liver.
			</h3>
			</p>
		</div>
		
		<div class="row">
			<button class="collapsible">Read More About Gastroenterology Department</button>
				<div class="content">
					<h3 style="margin-top:20px">Facilities provided </h3>
					<p align="justify">
						The gastroenterology department facilitates:<br>
						<ul>
						<li>	Endoscopy</li>
						<li>	Radiology</li>
						<li>	Dietetics and Nutrition</li>
						<li>	24hr PH manometry and anorectal physiology</li>
						<li>	Screening and surveillance</li>
					
						</ul>
					</p>
				</div>
		</div>
		
		<div class="row">
			<div class="col-1">
			</div>
			<div class="col-10">
				<div class="slider">
                <?php
				$sql1 = "SELECT fName,lName,userimage,specialization,username FROM doctor WHERE deptId=$deptname";
				$result1 = mysqli_query($conn,$sql1);
				?>
				<?php while($row = mysqli_fetch_assoc($result1)){ ?>
				<div class = "container-div">
						<div class="slide card image-div" id="slide-1">
								<h5 class = "topic"> <b> <style="text-decoration:none"><?php echo($row['fName']." ".$row['lName']);?></b></h3>
								<a href="#popup1"><img src="<?php echo($row['userimage']);?>" height = "120" width="120" class="logo"></a>
								<p class = "paracard">FIRST NAME : <?php echo $row['fName']?> <br> LAST NAME : <?php echo $row['lName']?> <br> SPECIALIZATION : <?php echo $row['specialization']?> <br> USERNAME : <?php echo $row['username']?></p>
								<div class="middle-div">
									<div class="text-div"><a href="appoitment.html">Make Appointment</a></div>
								</div>
						</div>
					</div>

				<?php } ?>
				</div>
			</div>
			<div class="col-1">
			</div>
		</div>
		
	</div>
	 
	<script src="src\js\department-script.js"></script>
	
	    <footer>
        <div class="container">
            <div>
                <h1>Basic Info</h1>
            </div>
            <div>
                <pre>
        No1,
        MEDITECH Hospitals,
        Park Street,
        Colombo 6.
                </pre>
            </div>

            <div>
                <h2>
                    +94123456789
                </h2>
            </div>

            <div>
                <button class="email1" id="email1" onclick="email1()">userresponse@meditech.org</button>
                <button class="email1" id="email2" onclick="email2()">contactus@meditech.org</button>
            </div>
        </div>

        <div class="container">
            <div>
                <h1>Quick links</h1>
            </div>
            <div class="footer-nav">
                <a href="">Contact us</a><br>
                <a href="">Log Out</a><br>
                <a href="">Register</a><br>
                <a href="">Terms conditions</a><br>
                <a href="">FAQ</a><br>
                <a href="">Fogot Password</a><br>
            </div>
        </div>

        <div class="container">
            <div>
                <h1>
                    Newsletter
                </h1>
            </div>
            <div>
                <input type="text" class="news" placeholder="Enter our email addaress"><br>
                <input type="submit" class="submit-email" value="SUBMIT">
            </div>
            <div>
                <p>You will receive our weekly and monthly newsletter which contains health tips</p>
            </div>
        </div>

        <div class="container">
            <div>
            <a href="https://twitter.com/login/"><img src="src/images/8.png" class="icons"></a>
                <a href="https://lk.linkedin.com/"><img src="src/images/9.png" class="icons"></a>
                <a href="https://www.instagram.com/"><img src="src/images/10.png" class="icons"></a>
                <a href="https://mail.google.com/mail/u/0/#inbox/"><img src="src/images/11.png" class="icons"></a>
                <a href="https://www.google.com/drive/"><img src="src/images/12.png" class="icons"></a>
                <a href="src/images/13.png"><img src="src/images/13.png" class="icons"></a>
            </div>
        </div>
            
    </footer>
	 
</body>
</html>