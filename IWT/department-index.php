<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../src/style/department_style.css">
    <link rel="stylesheet" type="text/css" href="../src/style/home.css">
    <link rel="shortcut icon" type="image/png "href="../src/images/4.png">
	<script src="../src/js/home.js"></script>
	
</head>
	<body>
            <header>
        
                    <div class="social-back">
            
                        <div class="button-links">
                            
                                <div class="dropdown">
                                        <button class="dropbtn">DEPARTMENTS</button>
                                        <div class="dropdown-content">
                                          <a href="srcS/pages/cardiology.html">CARDIOLOGY</a>
                                          <a href="srcS/pages/orthopedics.html">ORTHEOPEDICS</a>
                                          <a href="srcS/pages/generalsurgery.html">GENERAL SURGERY</a>
                                          <a href="srcS/pages/gastro.html">GASTROENTEROLOGY</a>
                                          <a href="srcS/pages/dermatology.html">DERMATOLOGY</a>
                                        </div>
                                </div> 
                                <div class="dropdown">
                                        <button class="dropbtn">PROFILE</button>
                                        <div class="dropdown-content">
                                          <a href="patient_details.html">VIEW PROFILE</a>
                                        </div>
                                </div> 
                                <div class="dropdown">
                                        <button class="dropbtn">BILLING & PAYMENTS</button>
                                        <div class="dropdown-content">
                                          <a href="billing.html">PAYEMENT HISTORY</a>
                                          <a href="billing.html">MAKE A PAYMENT</a>
                                        </div>
                                </div> 
            
                                <div class="dropdown">
                                    <button class="dropbtn">CONTACT US</button>
                                    <div class="dropdown-content">
                                      <a onclick="email3()">Email: contact@meditech.org</a>
                                      <a href="#">Call: +94123456789</a>
                                      <a href="#">Whats app</a>
                                      <a href="Admin/index.html">Contact us Page</a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <button class="dropbtn" onclick="home()">HOME</button>
                                </div>
                                <div class="dropdown">
                                        <button class="dropbtn" onclick="ph()">PHARMACY</button>
                                    </div>
                        </div> 
                    </div>
                       
                </header>

    <div class="all-back">
        <div class="head">
            <div><img src="../src/images/4.png"></div>
            <div>
                <h1>MEDITECH Patient Management System</h1>
                <h2>24/7 Support Services | A Complete Solution for Clinic Managment</h2>
            </div>
        </div>
        
            <div class="container-color">
                <div class="row">
                    <div class="col-1">
                    </div>
                    
                    <div class="col-10" style="margin-top:100px; margin-left:100px;">
                        <div class="slider">
                              <div class="slide card" id="slide-1">
                                    <h5 class = "topic"> <b><a href="srcS/pages/cardiology.html" style="text-decoration:none">CARDIOLOGY</a></b></h3>
                                    <a href = "srcS/pages/cardiology.html"><img src="src/images/blu.png" height = "120" width="120" class="logo"></a>
                                    <p class = "paracard">Department of Cardiology treat the patients who are having disorders of the heart and the blood vessels.</p>
                              </div>
                              
                              <div class="slide card" id="slide-2">
                                    <h5 class = "topic"> <b><a href="srcS/pages/orthopedics.html" style="text-decoration:none">orthopedics</a></b></h3>
                                    <a href="srcS/pages/orthopedics.html"><img src="src/images/ortho.jpg" height = "120" width="120" class="logo"></a>
                                    <p class = "paracard">Orthopedics is the field of medicine that focuses on surgery on, or manipulation of, the musculoskeletal system.</p>
                              </div>
                              
                              <div class="slide card" id="slide-3">
                                    <h5 class = "topic"> <b><a href="srcS/pages/generalsurgery.html" style="text-decoration:none"> General surgery</a></b></h3>
                                    <a href="srcS/pages/generalsurgery.html"><img src="../src/images/surgery.png" height = "120" width="120" class="logo"></a>
                                    <p class = "paracard">General surgery is a surgical specialty that focuses on abdominal contents </p>
                              </div>
                              
                              <div class="slide card" id="slide-4">
                                    <h5 class = "topic"> <b><a href="srcS/pages/gastro.html" style="text-decoration:none"> Gastroenterology</a></b></h3>
                                    <a href="srcS/pages/gastro.html"><img src="../src/images/gast.png" height = "120" width="120" class="logo"></a>
                                    <p class = "paracard">Gastroenterology department focus on the digestive system and its disorders</p>
                              </div>
                              
                              <div class="slide card" id="slide-5">
                                    <h5 class = "topic"> <b><a href="srcS/pages/dermatology.html" style="text-decoration:none">dermatology</a></b></h3>
                                    <a href="srcS/pages/dermatology.html"><img src="../src/images/derma.png" height = "120" width="120" class="logo"></a>
                                    <p class = "paracard">Dermatology is the branch of medicine dealing with the skin, nails, hair and its diseases.</p>
                              </div>
                        </div>
                    </div>	
                    
                    <div class="col-1">
                    </div>
                </div>
            </div>
    </div>
		<script type="text/javascript" src="src/js/department-script.js"></script>
		
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
                <a href="https://twitter.com/login/"><img src="../src/images/8.png" class="icons"></a>
                <a href="https://lk.linkedin.com/"><img src="../src/images/9.png" class="icons"></a>
                <a href="https://www.instagram.com/"><img src="../src/images/10.png" class="icons"></a>
                <a href="https://mail.google.com/mail/u/0/#inbox/"><img src="../src/images/11.png" class="icons"></a>
                <a href="https://www.google.com/drive/"><img src="../src/images/12.png" class="icons"></a>
                <a href="src/images/13.png"><img src="../src/images/13.png" class="icons"></a>
            </div>
        </div>
            
    </footer>
	</body>
</html>