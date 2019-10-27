<?php
//database file
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
$sql1 = "SELECT  m.labReport,m.issued_date,m.recordId FROM patient p, medical_records m WHERE m.pId = p.pId AND p.username = '$name'";
$sql2 = "SELECT fName,lName,username,DOB,NIC,email,phone from patient WHERE username = '$name'";

//sql results
$result1 = mysqli_query($conn,$sql1);
$result2 = mysqli_query($conn,$sql2);
   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/style/patient_details.css">
    <script src="src/js/patient_details.js"></script>
    <script src="src/js/home.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="shortcut icon" type="image/png "href="src/images/4.png">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Patient Details</title>
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
            <?php while($row = mysqli_fetch_array($result2,MYSQLI_ASSOC))
                printf("<h2>FIRST NAME : %s</h2> <h2>LAST NAME : %s</h2> <h2>PATIENT NUMBER : %s</h2> <h2>DATE OF BIRTH : %s</h2> <h2>NIC : %s</h2> <h2>E-MAIL : %s</h2>  <h2>PHONE : %s</h2>",$row['fName'],$row['lName'],$row['username'],$row['DOB'],$row['NIC'],$row['email'],$row['phone']);
           
            ?>
            <input type="button" id="edit" value="edit" onclick="edit()" class="edit" name="edit">
        </div>
        <div class="info" id="info">
            <h1>MEDICAL INFORMATION</h1>
            <h4>Click on the relevant detail</h4>

            <?php while($row = mysqli_fetch_assoc($result1)){?>

                <input type='radio' name='report' onclick="content(<?php echo($row['recordId']);?>)"><?php echo($row['labReport']." DATE : ".$row['issued_date']."<br>");?>
            <?php }?>

        </div>
        <div class="details">
            <p class="record-details">RECORD DETAILS</p>
            <?php
                $id1 = $_COOKIE['id'];
                $sql4 = "SELECT m.recordId,m.labReport,m.diseaseType,m.bloodGroup,m.issued_date from medical_records m, patient p WHERE p.pId = m.pId AND p.username = '$name' AND m.recordId = $id1";

                $result4 = mysqli_query($conn,$sql4);
            ?>

                <?php while($arr = mysqli_fetch_assoc($result4)){ ?>
                    <h3 class="details-1">~RECORD ID : <?php echo($arr['recordId']);?></h3>
                    <h3 class="details-2">~LAB REPORT NAME : <?php echo($arr['labReport']);?></h3>
                    <h3 class="details-1">~DISEASE TYPE : <?php echo($arr['diseaseType']);?></h3>
                    <h3 class="details-2">~BLOOD GROUP : <?php echo($arr['bloodGroup']);?></h3>
                    <h3 class="details-1">~ISSUED DATE : <?php echo($arr['issued_date']);?></h3>
                <?php } ?>

            <script>

                <?php
                    $id = $_COOKIE['id'];
                    $sql3 = "SELECT m.blood_presure, m.blood_sugar_level, m.heart_rate, m.weight from medical_records m, patient p WHERE p.pId = m.pId and p.username = '$name' AND m.recordId = $id";

                    $result3 = mysqli_query($conn,$sql3);
                ?>
                 google.charts.load("current", {packages:["corechart"]});
                google.charts.setOnLoadCallback(drawChart);
                function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                             ['Task', 'Hours per Day'],
          <?php while($row2 = mysqli_fetch_assoc($result3)){ 

                    echo("['Blood Presure',".$row2['blood_presure']."]," ."['Blood Sugar Level',".$row2['blood_sugar_level']."],"."['Heart Rate',".$row2['heart_rate']."],"."['Weight',".$row2['weight']."],"); } 
            ?>
        ]);

        var options = {
          title: 'REPORT DETAILS :',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
            </script>
    
    <div id="donutchart" style="width: auto; height: 500px;"></div>

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
			

        </div>
        
                
        </footer>
</body>
</html>