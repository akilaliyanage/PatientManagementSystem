<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="src/style/sign-in.css">
    <script src="src/js/signin.js"></script>
    <link rel="shortcut icon" type="image/png "href="src/images/4.png">
    <title>Patient management System | Sign In</title>
</head>
<body>
    <div class="fling-minislide"> <!--slide-show-div-->
        <img src="src/images/1.png" alt="Slide 4" class="back"/>
        <img src="src/images/2.png" alt="Slide 4" class="back"/>
        <img src="src/images/3.png" alt="Slide 4" class="back"/>
        <img src="src/images/28.png" alt="Slide 4" class="back"/>  

        <div class="head-topic">
            <h1><img src="src/images/4.png" class="head-img">MEDITECH Patient Management System</h1>
        </div>
        
        <div class="new-user">
            <h1>New User Registration Portal</h1>
        </div>
       

            <div class="sign-back">
                <div class="sign">
                    <form action="#" method="get">
                        <div>
                        <h5>First Name : </h5>
                        <input type="text" class="fname" placeholder="Your First Name">
                        <h5>Last Name : </h5>
                        <input type="text" class="lname" placeholder="Your Last Name">
                        <h5>Date Of Birth : </h5>
                        <input type="date" class="date" id="date">
                        <h5>NIC No : </h5>
                        <input type="text" class="nic" placeholder="XXXXXXXXXV">
                       
                        </div>

                        <div>
                            <h5>Address</h5>
                            <textarea class="address" required rows="10" cols="24"></textarea>
                            <h5>Gender</h5>
                            <input type="radio" name="gender" class="gender" checked><h4>Male</h4>
                            <input type="radio" name="gender" class="gender"><h4>Female</h4>
                        </div>

                        <div>
                            <h5>Contact No</h5>
                            <input type="text" placeholder="+94XXXXXXXX" class="phn">
                            <h5>Emergency Contact No</h5>
                            <input type="text" placeholder="+94XXXXXXXX" class="phn">
                            <h5>E-Mail</h5>
                            <input type="text" placeholder="XXXXXXX@XXXX.XXX" class="email" pattern="[A-Za-z0-9]+@[a-zA-Z]{5}.+[a-zA-Z]">
                        </div>

                        <div>
                            <h5>Password</h5>
                            <input type="password" class="pass" id="new-pass">
                            <h5>Confirm Password</h5>
                            <input type="password" class="pass" id="confirm-new-pass">
                            <input type="checkbox" id="cb" onclick="myFunction()">accept tha privency police<br/><br/>
                            <div class="sub">
                            <input type="submit" value="submit" id="submit" disabled class="btn">
                        </div>
                    </form>
                </div>
        </div>
</body>
</html>