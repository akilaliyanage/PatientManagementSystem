<?php
require 'config_database_index.php';

  $sql = "SELECT d.fName,d.lName,d.userimage,d.username,d.specialization,a.appdate,a.apptime FROM doctor d, appointment a WHERE a.docid = d.docId;";
  $result = mysqli_query($conn,$sql);
  
?>


<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="src/style/recept.css">
<link rel="shortcut icon" type="image/png "href="src/images/4.png">
<title>Admin Panel</title>
</head>


<body>

<header>
        
        <div class="social-back">

            <div class="button-links">
                
                    <div class="dropdown">
                            <button class="dropbtn">Go-To</button>
                            <div class="dropdown-content">
                              <a href="admin.php">Admin Page</a>
                            </div>
                    </div> 
                    <div class="dropdown">
                            <button class="dropbtn">Settings</button>
                            <div class="dropdown-content">
                              <a href="logout.php">LOG OUT</a>
                            </div>
                    </div> 
            </div> 
        </div>
           
    </header>

  <div class="v1">
    <ul class="v2">
     
	  <div class="c1">
      <li><a href="recetpt.php">Appointments<span class="v3"></span></a></li>
</div>

    </ul>
  </div>

  <h1 class="maindead">DOCTORS WHO HAS APPOINTMENTS</h1>
  
    <?php while($row = mysqli_fetch_assoc($result)){
    ?>

<div class="uu">
      <div class="ip">
        
          <div class="ni"> 
            <img  class="gh" src="<?php echo($row['userimage']);?>">
          </div>
          <div class="mi"><b><?php echo($row['fName']." ".$row['lName']);?></b><br/><?php echo($row['username']);?> </div>
          <div class="line"></div>
          <div class="jj"><?php echo($row['specialization']);?><br/>M.B.B.S</div>
          <div class="ii"><?php echo($row['appdate']." ".$row['apptime']);?></div>

          <div class="btn">
            <button name="dlt" href="recetpt.php">Delete</button>
            <button name="confirm">Confirm</button>
          </div>
        
      </div>
  </div>


    <?php }?>

 
  

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