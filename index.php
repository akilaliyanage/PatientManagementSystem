<?php

    require 'config_database_index.php';    //including the database configuration file

    session_start();    //starting the session

    date_default_timezone_set('Asia/Colombo'); 

    if(isset($_POST['submit'])){    //check wether the submit button is clicked
        $form_username = $_POST['username'];       //setting the global variables
        $form_password = $_POST['password'];

        if(empty($form_username) || empty($form_password)){
            echo 'enter usename and passeword';
        }
        else{
            $result = mysqli_query($conn,"SELECT username, patientPassword, pId FROM patient WHERE username ='$form_username' and patientPassword = '$form_password'");
            $result2 = mysqli_query($conn,"SELECT userImage FROM patient WHERE username = '$form_username' AND patientPassword = '$form_password'");
            $userImage = mysqli_fetch_assoc($result2);
            $count = mysqli_num_rows($result);
            $row = mysqli_fetch_assoc($result); 
            $loggedTime = date("h:i:s A");
            $sessionSetTime = time();
                
                 if($count == 1){
                    echo "<script> alert('You have successfully logged  into the system...') </script>";
                    header("Location:home.php");
                    $_SESSION['name'] = $form_username;
                    $_SESSION['userimage'] = $userImage;
                    $_SESSION['loggedtime'] = $loggedTime;
                    $_SESSION['sessionsettime'] = $sessionSetTime;
                    $_SESSION['userid'] = $row['pId'];
                    exit();
                }
                else if($count == 0 ){

                    echo "<script> alert('An error encounterd while validating the user. Please try again later!') </script>";
                }
        }
        }

    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
    <title>Patient Management System | Login</title>
    <link rel="stylesheet" type="text/css" href="src/style/index.css">
    <script type="text/javascript" src="src/js/index.js"></script>
    <link rel="shortcut icon" type="image/png "href="src/images/4.png">
</head>
<body>
    <div class="fling-minislide"> 
        <img src="src/images/1.png" alt="Slide 4" class="back"/>
        <img src="src/images/2.png" alt="Slide 4" class="back"/>
        <img src="src/images/3.png" alt="Slide 4" class="back"/>
        <img src="src/images/28.png" alt="Slide 4" class="back"/>
        
        <header>
            <div class="not-reg">
                <h1>NOT AN REGISTERED PATIENT? <a href="sign-in.html">CLICK HERE</a></h1>
                <h1 class="admin"><a href="adminlogin.php">admin login</a> </h1>
            </div>
        </header>
        <img src="src/images/4.png" class="head-img" alt=""> 
        <div class="topic-div">
            <h1>MEDITECH Patient Management System</h1>
        </div>
        <div class="login-div">
            <h1>REGISTERED USER LOGIN PORTAL</h1>
        </div>
        <div class="login-back">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"  method="POST">
                <h1>USER-NAME</h1>
                <input type="text" placeholder="PATXXXXXXXXXX" required class=user-id id="user-id" pattern="PAT[0-9]{.13}" name="username">
                <h1>PASSWORD</h1>
                <input type="password" placeholder="ENTER YOUR PASSWORD" class="user-id" id="pass" pattern="[A-Z][a-b][0-9]{10.9}" name="password"><br>
                <input type="submit" class="submit" id="submit" name="submit">
            </form>
        </div>
    </div>  

    <div class="user-feedback-img">
            <h1>WHAT PATIENTS SAY ABOUT US?</h1>
    </div>

    <div class="user-feedback">
        <div class="user">
            <img src="src/images/15.png" alt="">
            <p>Thank you for the remedy. I feel it has been working on a deeper subtle level. An inner seeing. I have had the feeling of a melting inside and great sense of peace and rightness. I experienced this before with your perception and treatment so thank you very much.</p>
        </div>
        <div class="user">
            <img src="src/images/16.png" alt="">
            <p>This was my second visit here I loved it first visit but love it more on my second visit. I loved thier facility and online system.
                </p>
        </div>
        <div class="user">
            <img src="src/images/17.png" alt="">
            <p>Thank you for the remedy. I feel it has been working on a deeper subtle level. An inner seeing. I have had the feeling of a melting inside and great sense of peace and rightness. I experienced this before with your perception and treatment so thank you very much.</p>
        </div>
        <div class="user">
                <img src="src/images/18.png" alt="">
                <p>Thank you for the remedy. I feel it has been working on a deeper subtle level. An inner seeing. I have had the feeling of a melting inside and great sense of peace and rightness. I experienced this before with your perception and treatment so thank you very much.</p>
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
                    <button class="email" id="emmail1">useresponse@meditech.com</button>
                    <button class="email" id="emmail2">contactus@meditech.com</button>
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


