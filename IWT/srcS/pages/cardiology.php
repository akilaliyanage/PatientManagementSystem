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

?>


<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../style/css/grid-system.css">
	<link rel="stylesheet" type="text/css" href="../style/css/department_style.css">
	<script src="../js\department-script.js"></script>
	<title>Cardiology</title>
</head>
<body>
 <header>
        
        <div class="social-back">

            <div class="button-links">
                
                    <div class="dropdown">
                            <button class="dropbtn">DEPARTMENTS</button>
                            <div class="dropdown-content">
                              <a href="cardiology.html">CARDIOLOGY</a>
                              <a href="orthopedics.html">ORTHEOPEDICS</a>
                              <a href="generalsurgery.html">GENERAL SURGERY</a>
                              <a href="gastro.html">GASTROENTEROLOGY</a>
                              <a href="dermatology.html">DERMATOLOGY</a>
                            </div>
                    </div> 
                    <div class="dropdown">
                            <button class="dropbtn">SERVICES</button>
                            <div class="dropdown-content">
                              <a href="#">SERVICE 1</a>
                              <a href="#">SERVICE 2</a>
                              <a href="#">SERVICE 3</a>
                            </div>
                    </div> 
                    <div class="dropdown">
                            <button class="dropbtn">PROFILE</button>
                            <div class="dropdown-content">
                              <a href="#">VIEW PROFILE</a>
                              <a href="#">EDIT PROFILE</a>
                              <a href="#">SHARE PROFILE</a>
                            </div>
                    </div> 
                    <div class="dropdown">
                            <button class="dropbtn">BILLING & PAYMENTS</button>
                            <div class="dropdown-content">
                              <a href="#">PAYEMENT HISTORY</a>
                              <a href="#">MAKE A PAYMENT</a>
                            </div>
                    </div> 

                    <div class="dropdown">
                        <button class="dropbtn">CONTACT US</button>
                        <div class="dropdown-content">
                          <a href="#">Email: contact@meditech.org</a>
                          <a href="#">Call: +94123456789</a>
                          <a href="#">Whats app</a>
                        </div>
					</div>
					
					<div class="user-info">
                        <h3>Logged in : <?php echo($loggedtime); ?> </h3>
                    </div>
            </div> 
        </div>
           
    </header>

	<div class="container-color">
		
		<img src="../images/heart2.jpg" class = "mainlogo" id="redheart" height="150px" width="200px">
		
		<img src="../images/blue-medical.jpg" class="imageback" height="1090px" width="100%"> 
		<div class="row">
			<div class="col-12 heading1" style="margin-top:40px;">
				
				<h1 style="font-size:45px;">Cardiology Department</h1>
			</div>
		</div>
		
		<div class="row">
			<p align="justify">
			<h3 style="font-family:calibri;">
			Cardiology is the medical speciality dealing with the diagnosis and treatment of diseases and disorders of the heart.
			</h3>
			</p>
		</div>
		
		<div class="row">
			<button class="collapsible">Read More About Cardiology Department</button>
				<div class="content">
					<h3 style="margin-top:20px">Facilities provided </h3>
					<p align="justify">
						The cardiology department facilitates:<br>
						<ul>
							<li>Cardiac diagnostics and treatment.</li>
							<li>Our experienced cardiologists are experts at treating even rare and complex heart conditions to ensure positive clinical outcomes.</li>
							<li>We’ve equipped our cardiology unit with the latest facilities for ECG, 2D Echocardiography as well as Exercise ECG to extend professional and effective help to screen and manage your cardiac conditions.</li>
							<li>Further we also perform Cardiac CT scans.</li>
					
						</ul>
					</p>
				</div>
		</div>
		
		<div class="row">
			<div class="col-1">
			</div>
			<div class="col-10">
				<div class="slider">
					<div class = "container-div">
						<div class="slide card image-div" id="slide-1">
								<h5 class = "topic"> <b> <style="text-decoration:none">Dr. John</b></h3>
								<a href="#popup1"><img src="../images/d5.png" height = "120" width="120" class="logo"></a>
								<p class = "paracard">Department of Cardiology treat the patients who are having disorders of the heart and the blood vessels.</p>
								<div class="middle-div">
									<div class="text-div">12 year experience<br>Rating<br>3.5<br><a href="../../../appoitment.html">Make Appointment</a></div>
								</div>
						</div>
					</div>
					 
					<div class = "container-div">
						<div class="slide card image-div" id="slide-2">
								<h5 class = "topic"> <b>Dr. Smith</b></h3>
								<a href = "src/pages/cardiology.html"><img src="../images/d1.jpg" height = "120" width="120" class="logo"></a>
								<p class = "paracard">Department of Cardiology treat the patients who are having disorders of the heart and the blood vessels.</p>
								<div class="middle-div">
									<div class="text-div">10 year experience<br>Rating<br>4.0<br><a href="../../../appoitment.html">Make Appointment</a></div>
								</div>
						</div>
					</div>
					
					<div class = "container-div">
						<div class="slide card image-div" id="slide-3">
							<h5 class = "topic"> <b>Dr. Bill</b></h3>
							<a href = "src/pages/cardiology.html"><img src="../images/d7.png" height = "120" width="120" class="logo"></a>
							<p class = "paracard">Department of Cardiology treat the patients who are having disorders of the heart and the blood vessels.</p>
							<div class="middle-div">
									<div class="text-div">5 year experience<br>Rating<br>3.0<br><a href="../../../appoitment.html">Make Appointment</a></div>
							</div>
						</div>
					</div>
						  
					<div class = "container-div">
						<div class="slide card image-div" id="slide-4">
							<h5 class = "topic"> <b> Prof. Henry</b></h3>
							<a href = "src/pages/cardiology.html"><img src="../images/d8.jpg" height = "120" width="120" class="logo"></a>
							<p class = "paracard">Department of Cardiology treat the patients who are having disorders of the heart and the blood vessels.</p>
							<div class="middle-div">
									<div class="text-div">Prof. Henry<br>Rating<br>4.1<br><a href="../../../appoitment.html">Make Appointment</a></div>
							</div>
					  </div>
					</div>  
					  
					<div class = "container-div">
						<div class="slide card image-div" id="slide-5">
							<h5 class = "topic"> <b>Dr. Strange</b></h3>
							<a href = "src/pages/cardiology.html"><img src="../images/d0.jpg" height = "120" width="120" class="logo"></a>
							<p class = "paracard">Department of Cardiology treat the patients who are having disorders of the heart and the blood vessels.</p>
							<div class="middle-div">
									<div class="text-div">Dr. Strange<br>Rating<br>4.0<br><br><a href="../../../appoitment.html">Make Appointment</a></div>
							</div>
						</div>
					</div>  
					  
					  
					  
					  
					  
					  <div class="slide card" id="slide-5">
							<h5 class = "topic"> <b><a href="src/dermatology.html" style="text-decoration:none">Prof. Kate</a></b></h3>
							<a href = "src/pages/cardiology.html"><img src="../images/d4.jpg" height = "120" width="120" class="logo"></a>
							<p class = "paracard">Department of Cardiology treat the patients who are having disorders of the heart and the blood vessels.</p>
					  </div>
					  
					  <div class="slide card" id="slide-5">
							<h5 class = "topic"> <b><a href="src/dermatology.html" style="text-decoration:none">Dr. Hannah</a></b></h3>
							<a href = "src/pages/cardiology.html"><img src="../images/d2.png" height = "120" width="120" class="logo"></a>
							<p class = "paracard">Department of Cardiology treat the patients who are having disorders of the heart and the blood vessels.</p>
					  </div>
					  
					  <div class="slide card" id="slide-5">
							<h5 class = "topic"> <b><a href="src/dermatology.html" style="text-decoration:none">Dr. Kessy</a></b></h3>
							<a href = "src/pages/cardiology.html"><img src="../images/d3.jpg" height = "120" width="120" class="logo"></a>
							<p class = "paracard">Department of Cardiology treat the patients who are having disorders of the heart and the blood vessels.</p>
					  </div>
				</div>
			</div>
			<div class="col-1">
			</div>
		</div>
		
	</div>
	<div class="row">
		<div class="col-1"></div>
		<div class="col-10" style="text-align:center">
			<div class="button" style="font-family:calibri;">
				<input type="button" class="topic2" style="width:250px; margin:20px;" id="btn" value="2D Echocardiography" onclick="content('2d')">
				<input type="button" class="topic2" style="width:250px;margin:20px" id="btn" value="Electro-cardiography" onclick="content('ecg')">
				<input type="button" class="topic2" style="width:250px;margin:20px" id="btn" value="CT scan" onclick="content('ct')">
			</div>
		</div>
		<div class="col-1"></div>		
	</div>
	<div id="cont">
	<div>
		<p id="description" style="font-family:calibri; font-size:20px;"></p>
	</div>
	<div>
		<img id="appear">
	</div>
	</div>
	 
	<script src="../script/js/department-script.js"></script>
	
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
                <a href="https://twitter.com/login/"><img src="../../srcA/images/8.png" class="icons"></a>
                <a href="https://lk.linkedin.com/"><img src="../../srcA/images/9.png" class="icons"></a>
                <a href="https://www.instagram.com/"><img src="../../srcA/images/10.png" class="icons"></a>
                <a href="https://mail.google.com/mail/u/0/#inbox/"><img src="../../srcA/images/11.png" class="icons"></a>
                <a href="https://www.google.com/drive/"><img src="../../srcA/images/12.png" class="icons"></a>
                <a href="src/images/13.png"><img src="../../srcA/images/13.png" class="icons"></a>
            </div>
        </div>
            
    </footer>
	 
</body>
</html>