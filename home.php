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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.3">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Patient Management System | Homepage</title>
    <link rel="stylesheet" type="text/css" href="src/style/home.css">
    <script src="src/js/home.js"></script>
    <script src="https://kit.fontawesome.com/65c24a6e74.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/png "href="src/images/4.png">
</head>
<body>
        <header>
        
        <div class="social-back">

            <div class="button-links">
                
                    <div class="dropdown">
                            <button class="dropbtn">DEPARTMENTS</button>
                            <div class="dropdown-content">
                              <a href="department-index.php">GO TO DEPARTMENT PAGE</a>
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
                          <a onclick="email3()">Email: contact@meditech.org</a>
                          <a href="#">Call: +94123456789</a>
                          <a href="#">Whats app</a>
                          <a href="contactus.html">Contact us Page</a>
                        </div>
                    </div>
                    <div class="dropdown">
                            <button class="dropbtn" onclick="ph()">PHARMACY</button>
                    </div>

                    <div class="user-info">
                        <h3>Logged in : <?php echo($loggedtime); ?> </h3>
                    </div>
            </div> 
        </div>
       
    </header>
    <div class="search">
        <input type="search" class="srctxt" placeholder="Type to Search">
        <a href=""><img src="src/images/search.png" alt="" class="srcimg"></a>

    </div>

    <div class="side-social">
            <a href="https://twitter.com/login/"><img src="src/images/8.png" class="side-icons"></a>
            <a href="https://lk.linkedin.com/"><img src="src/images/9.png" class="side-icons"></a>
            <a href="https://www.instagram.com/"><img src="src/images/10.png" class="side-icons"></a>
            <a href="https://mail.google.com/mail/u/0/#inbox/"><img src="src/images/11.png" class="side-icons"></a>
            <a href="https://www.google.com/drive/"><img src="src/images/12.png" class="side-icons"></a>
            <a href="src/images/13.png"><img src="src/images/13.png" class="side-icons"></a>
    </div>

    <div class="reg-user">
            <img src="<?php echo implode($userImage);?>" alt="">
            <div class="user-settings">
                <a href="logout.php">LOG-OUT</a>
                <a href="logout.php">SIGN-IN</a>
                <a href="sign-in.php"`>REGISTER</a>
            </div>
        </div>

    <div class="back-container-1">
    
        <div class="head">
            <div><img src="src/images/4.png"></div>
            <div>
                <h1>MEDITECH Patient Management System</h1>
                <h2>24/7 Support Services | A Complete Solution for Clinic Managment</h2>
            </div>
        </div>
        <div class="app-div">
                <button class="fill" onclick="makeapp()">MAKE APPOINTMENT</button>
        </div>
    </div>

    <div class="back-container-2">
        <div>
            <h1>WHAT WE DO?</h1>
        </div>
        <div class="dis">
            <div class="dis-img">
                <img src="src/images/families.png" style="width: 400px">
            </div>

            <div class="description">
            <h3>MEDITECH Patient Management System is a web application that our team has created for small and medium scale clinical enterprises. In this a clinic can post their data and host a website in an organised way.This application provides a customizing interface solution for appointment making according to clinic specific requirement and also handle patient visiting history and invoices</h3>
            </div>
        </div>
    </div>
    

    <div class="back-container-3">
        <h1>WHY CHOOSE US ? </h1>
        <div class="service">
            <div class="Ambulance">
                <img src="src/images/24.png" alt="" class="ser-img">
                <h2>Emergency Departments</h2>
                <p>The emergency departments of<br> our clinic operate 24 hours a day,<br> although staffing levels may be<br> varied in an attempt to<br> reflect patient volume.</p>
        </div>
            <div  class="service">
                <div>
                        <img src="src/images/26.png" alt="" class="ser-img">
                        <h2>24 hour Service</h2>
                        <p>24-7 (usually spoken "twenty-four seven") is facility that is available any time and, usually, every day in our clinic health care center. we look after you every time.</p>
                </div>
            </div>
            <div class="service">
                    <div>
                            <img src="src/images/25.png" alt="" class="ser-img">
                            <h2>Primary health care and<br> Advanced Technology</h2>
                            <p>Medical technology, encompasses a wide range<br> of healthcare products and is used to diagnose, monitor or treat diseases or medical conditions<br> affecting humans.Healthcare centres, including clinics, doctor's offices, urgent care centers and<br> ambulatory surgery centers, serve as first point of contact with a health professional.</p>
                    </div>
            </div>
        </div>
    </div>
    </div>

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
                <a href="logout.php">Log Out</a><br>
                <a href="logout.php">Register</a><br>
                <a href="">Terms conditions</a><br>
                <a href="">FAQ</a><br>
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
