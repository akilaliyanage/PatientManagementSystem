<?php
require 'config_database_index.php';

//session start
session_start();

//session variables
$name = $_SESSION['name'];
$userImage = $_SESSION['userimage'];
$loggedtime = $_SESSION['loggedtime'];

//sql variables
$reportid;

//sql queries
$sql1 = "SELECT fName,lName,username,DOB,username,email,phone from patient WHERE username = '$name'";
$sql2 = "SELECT p.paymentId FROM payment p, patient t WHERE p.pId = t.pId AND t.username = '$name'";

//sql results
$result1 = mysqli_query($conn,$sql1);
$result2 = mysqli_query($conn,$sql2);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/style/billing.css">
    <script src="src/js/billing.js"></script>
    <script src="src/js/home.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="shortcut icon" type="image/png "href="src/images/4.png">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Billing</title>
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
                                      <a href="patient_details.PHP">VIEW PROFILE</a>
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
                    </div> 
                </div>

                <div class="reg-user">
            <img src="<?php echo implode($userImage);?>" alt="">
            <div class="user-settings">
                <a href="logout.php">LOG-OUT</a>
                <a href="logout.php">SIGN-IN</a>
                <a href="sign-in.php"`>REGISTER</a>
            </div>
        </div>
                   
            </header>
            

 

    <div class="main-div">
        <div class="user">
            <img src="<?php echo implode($userImage);?>" alt="">
            <?php while($row1 = mysqli_fetch_assoc($result1)){ ?>
                    <h3 class="details-1">~FIRST NAME : <?php echo($row1['fName']);?></h3>
                    <h3 class="details-2">~LAST NAME : <?php echo($row1['lName']);?></h3>
                    <h3 class="details-1">~USER-NAME : <?php echo($row1['username']);?></h3>
                    <h3 class="details-2">~E-MAIL : <?php echo($row1['email']);?></h3>
                <?php } ?>
        </div>
        <div class="payments">
            <h1>PENDING PAYMENTS</h1>
            <h4>Click on the relevant payment</h4>
           
            <?php while($row = mysqli_fetch_assoc($result2)){?>

                <input type='radio' name='report' onclick="content1(<?php echo($row['paymentId']);?>)"><?php echo(" REPORT ID : ".$row['paymentId']."<br>");?>
            <?php }?>

        </div>
        <div class="details">
            <fieldset 
            >
                <legend>PAYMENT DETAILS</legend>

                <p class="record-details">RECORD DETAILS</p>

                <?php
                $id3 = $_COOKIE['id'];
                $sql4 = "SELECT  p.paymentId,p.paidAmount,p.dueAmount,p.payement_method FROM payment p, patient t WHERE p.pId = t.pId AND t.username = '$name' AND p.paymentId = $id3";

                $result4 = mysqli_query($conn,$sql4);
            ?>

                <?php while($pay = mysqli_fetch_assoc($result4)){ ?>
                    <h3 class="details-a">PAYMENT ID : <?php echo($pay['paymentId']);?></h3>
                    <h3 class="details-b">PAID AMOUNT : Rs.<?php echo($pay['paidAmount']);?>.00</h3>
                    <h3 class="details-a">DUE AMOUNT : Rs.<?php echo($pay['dueAmount']);?>.00</h3>
                    <h3 class="details-b">PAYMENT METHOD : <?php echo($pay['payement_method']);?></h3>
                <?php } ?>




            <script>

                <?php
                    $id2 = $_COOKIE['id'];
                    $sql3 = "SELECT p.paidAmount,p.dueAmount FROM payment p, patient t WHERE p.pId = t.pId AND t.username = '$name' AND p.paymentId = $id2";

                    $result3 = mysqli_query($conn,$sql3);
                ?>
                 google.charts.load('current', {'packages':['corechart']});
                 google.charts.setOnLoadCallback(drawChart);
                function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                             ['Paid amount', 'Due Amount'],
          <?php while($row2 = mysqli_fetch_assoc($result3)){ 

                    echo("['Paid Amount',".$row2['paidAmount']."]," ."['Due Amount',".$row2['dueAmount']."]"); } 
            ?>
        ]);

        var options = {
          title: 'REPORT DETAILS :',
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
            </script>
    
    <div id="donutchart" style="width: auto; height: 500px;"></div>


                <p id="field"></p>
            </fieldset>
        </div>
    </div>

    <div class="gateway">
        <div class="method">
            <a><img src="src/images/cash.png" alt="" onclick="card('cash')"></a>
            <a><img src="src/images/master.png" alt="" onclick="card('master')"></a>
            <a><img src="src/images/paypal.png" alt="" onclick="card('paypal')"></a>
            <a><img src="src/images/visa.png" alt="" onclick="card('visa')"></a>
        </div>
        <div class="card-info">
           <fieldset>
               <legend id="l-name"></legend>
               <p id="des"></p>
           </fieldset>
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