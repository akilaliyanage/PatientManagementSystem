d<?php
    
    //session start
   session_start();

    require 'config_database_index.php';

    //session variables
    $name = $_SESSION['name'];
    $userImage = $_SESSION['userimage'];
    $loggedtime = $_SESSION['loggedtime'];
    $sessionSetTime = $_SESSION['sessionsettime'];
    $userid = $_SESSION['userid'];

   if(!isset($_SESSION['name'])){
       header("Location:index.php");
   }
   if(time() - $sessionSetTime > 600){
        session_destroy();
        header("Location:logout.php");
   }

   //sql query

   $sql1 = "SELECT * FROM patient WHERE username = '$name'";

   //result

   $result = mysqli_query($conn,$sql1);

   //fetch array

   $row1 = mysqli_fetch_assoc($result);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.3">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Patient Management System | Homepage</title>
    <link rel="stylesheet" type="text/css" href="src/style/appo.css">
    <link rel="stylesheet" type="text/css" href="src/style/home.css">
    <script src="src/js/home.js"></script>
    <script src="src/js/appoi.js"></script>
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

    <div class="head-back">
        <div><img src="src/images/4.png"></div>
        <div>
            <h1>MEDITECH Patient Management System</h1>
            <h2>24/7 Support Services | A Complete Solution for Clinic Managment</h2>
        </div>
    </div>
    
    <div class="opd">
        <form action="appoitment.php" onsubmit="return checkPassword()" method="POST">
            <div>
                    <h2>patient dateils</h2>
                FIRST NAME:<br/>
                <input type="text" name="first-name" 
                placeholder="first name" required id="fm" value=<?php echo($row1['fName']);?>> <br/><br/>
                LAST NAME:<br/>
                <input type="text" name="last-name"
                placeholder="last name" id="lm" required value=<?php echo($row1['lName']);?>> <br/> <br/>
                GENDER: <br/>
                <input type="radio" name="gender">male
                <input type="radio" name="gender">female<br/><br/>

            </div>

            <div>
                EMAIL:<br/>
                <input type="email"  name="email"
                placeholder="abc@gmail.com"
                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z0-9]{2,3}"	required id="em" required value=<?php echo($row1['email']);?>><br/><br/>
                DATE:<br>
                <input type="date" name="date">
                <br>
                <br>
                TIME:<br>
                <input type="time" name="time">
                <br>
                <br>
                TP NUMBER:<br/> 
                <input type="phone" name="phone number" 
                pattern="[0-9]{10}" placeholder="0XXXXXXXXX"  id="pnum" value=<?php echo($row1['phone']);?>><br>
                <br>
                USERNAME: <br/>
                <input type="text" name="address" rows="3" cols="25"
                required id="username" placeholder="PATXXXXXXXXXX" value=<?php echo $_SESSION['name']?>><br><br>

            </div>
        
            <div>
                <h3>
                    doctor detais
                </h3>
                SELECT DOCTOR:<br/>
                <select id="sel1" name="doc[]">
                    <?php 
                        //sql query
                        $sql2 = "SELECT fName, lName, docId FROM doctor";

                        //result
                        $result2 = mysqli_query($conn,$sql2);

                        while($row2 = mysqli_fetch_assoc($result2)){ 

                    ?>
                    <option value="<?php echo $row2['docId']?>"><?php echo $row2['fName']." ".$row2['lName']?></option>

                        <?php } ?>
        
                </select><br>
                <br>
                APPONTMENT TYPE:
                <select name="type">
                        <option>Consultation</option>
                        <option>Report</option>
                </select>
                <br>
                <BR>
                <input type="checkbox" id="cb" onclick="myFunction()">Confirm the Appointment<br/><br/>
                <input type="submit" value="submit" id="submit" disabled class="btn" value="Confirm" name="submit">
                <input type="reset" value="reset" class="btn">
            </div>
        </form>
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

<?php
    if($_POST['submit']){

        $appTime = $_POST['time'].":00";
        $date = $_POST['date'];
        $type = $_POST['type'];
        $docName = $_POST['doc'];
        $docid = implode($docName);

        echo $appTime;


        //sql
       $insertStatement = "INSERT INTO appointment(apptime,appdate,type,pid,docid) VALUES('$appTime','$date','$type',$userid,$docid)";

       //executeQuery
       $result3 = mysqli_query($conn,$insertStatement);

       if($result3){
           echo("<script>alert('inserted successfully');</script>");
       }
       else{
           echo(mysqli_error($conn));
       }


    }
?>