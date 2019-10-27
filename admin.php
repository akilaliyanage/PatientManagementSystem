<?php
  require 'config_database_index.php';
  session_start();

  $name = $_SESSION['name'];

  $sql2 = "SELECT COUNT(*) as 'count' FROM patient";
  $result2 = mysqli_query($conn,$sql2);
  $pCount = mysqli_fetch_assoc($result2);

  $sql3 = "SELECT COUNT(*) as 'appcount' FROM appointment";
  $result3 = mysqli_query($conn,$sql3);
  $appCount = mysqli_fetch_assoc($result3);

  $sql9 = "SELECT COUNT(*) as 'admincount' FROM admin";
  $result9 = mysqli_query($conn,$sql9);
  $admincount = mysqli_fetch_assoc($result9);


?>


<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="src/style/adminpage.css">
<script src="src/js/admin.js"></script>
<link rel="shortcut icon" type="image/png "href="src/images/4.png">
<link rel="stylesheet" type="text/css" href="src/style/home.css">
<script src="https://kit.fontawesome.com/65c24a6e74.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="src/style/sign-in.css">
    <script src="src/js/signin.js"></script>
    <link rel="shortcut icon" type="image/png "href="src/images/4.png">
<script src="src/js/home.js"></script>
<link rel="stylesheet" type="text/css" href="src/style/home.css">
<title>Admin Panel</title>
</head>


<body>

        <header>
        
        <div class="social-back">

            <div class="button-links">
                
                    <div class="dropdown">
                            <button class="dropbtn">Go-To</button>
                            <div class="dropdown-content">
                              <a href="home.php">Home Page 1</a>
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

<div class="maindiv">

    <div class="v1">
        <ul class="v2">
          <li><a onclick="admin('calander')">Dash board</a></li>
        <div class="c1">
          <li><a>Patient<span class="v3"></span></a></li>
          <ul class="drop">
            <li onclick="admin('patient')"><a>Show Patients</a></li>
            <li><a onclick="admin('update')">Update Details</a></li>
         <li><a onclick="admin('add')">Add Patient</a></li>
            <li><a onclick="admin('dlt')">Delete Patient</a></li>
          </ul></div>
        <div class="c2">
          <li><a href="#">Admin<span class="v3"></span></a></li>
          <ul class="drop">
            <li><a onclick="admin('adminadd')">Add Admin</a></li>
            <li><a href="#">Delete Admin</a></li>
            <li><a href="#">Update Admin</a></li>
            <li><a href="#">Show Admin</a></li>
          </ul></div>

        <li><a href="recetpt.php">Recept</a></li>
        <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
      <div class="middiv">
        <?php
          $admin = $_COOKIE['name'];
          if($admin == 'calander'){ ?>


<h1 class="pattablehead"><i class="fas fa-tachometer-alt"></i> Dashboard</h1>
<h2 class="pattablehead">Appointment Calander</h2>

<iframe src="https://calendar.google.com/calendar/b/1/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=Asia%2FColombo&amp;src=aXQxOTEyMDgxMkBteS5zbGlpdC5saw&amp;src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;src=bXkuc2xpaXQubGtfYnNkb2gzN28yNGEybTdyM20xNWJqaWRkZGdAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;src=ZW4ubGsjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%23039BE5&amp;color=%2333B679&amp;color=%23E4C441&amp;color=%230B8043&amp;title=Dashboard&amp;mode=MONTH" style="border-width:0" width="95%" height="600" frameborder="0" scrolling="no" class="calander"></iframe>   
  <?php }
    else if($admin == 'patient'){
      
      $sql = "SELECT * FROM patient";
      $result = mysqli_query($conn,$sql);
  ?>

  <h1 class="pattablehead"><i class="fas fa-address-card"></i> Registerd Patient Details</h1>

<table class="pattable">
      <tr>
        <th>Patient Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>DOB</th>
        <th>NIC</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Username</th>
        <th>Password</th>
        <th>Gender</th>
      </tr>
      <?php while($row1 = mysqli_fetch_assoc($result)){ ?>
  <tr>
      <td class="dob"><?php echo($row1['pId']); ?></td> 
      <td><?php echo($row1['fName']); ?></td> 
      <td><?php echo($row1['lName']); ?></td> 
      <td class="dob"><?php echo($row1['DOB']); ?></td> 
      <td><?php echo($row1['NIC']); ?></td> 
      <td><?php echo($row1['phone']); ?></td> 
      <td><?php echo($row1['email']); ?></td> 
      <td><?php echo($row1['username']); ?></td>
      <td> <input type="password" name="password" id="password" value="<?php echo($row1['patientPassword']); ?>"> </td> 
      <td><?php echo($row1['gender']); ?></td> 
  </tr>
      <?php } ?>

</table>
    <?php }
      else if($admin == 'update'){

         
      $sql = "SELECT * FROM patient";
      $result = mysqli_query($conn,$sql);
    ?>

<h1 class="pattablehead"><i class="fas fa-user-edit"></i> Update Patient Details</h1>

<table class="pattable patedit">
      <tr>
        <th>Patient Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Password</th>
      </tr>
      <?php while($row1 = mysqli_fetch_assoc($result)){ ?>
        <form action="admin.php?id=<?php echo $row1['pId']?>" method="POST">
  <tr>
      <td class="dob"><?php echo($row1['pId']); ?></td> 
      <td> <input type="text" ondblclick="enable" class="edi" name="fName" id="" value="<?php echo($row1['fName']); ?>"> </td> 
      <td><input type="text" class="edi" name="lName" id="" value="<?php echo($row1['lName']); ?>"></td> 
      <td><input type="text" class="edi" name="phone" id="" value="<?php echo($row1['phone']); ?>"></td> 
      <td><input type="text" class="edi" name="email" id="" value="<?php echo($row1['email']); ?>"></td> 
      <td> <input type="password" class="edi" name="password" id="password" value="<?php echo($row1['patientPassword']); ?>"></td> 
      <td><input type="submit" value="save" name="submitedit" class="edit"></td>
  </tr>
        </form>


      <?php } ?>

      <?php }
        else if($admin == 'add'){

          $sql = "SELECT * FROM patient";
          $result = mysqli_query($conn,$sql);          

        ?>
        <h1 class="pattablehead"><i class="fas fa-folder-plus"></i> Add New Patient</h1>

        <div class="add">
                <div class="sign">
                    <form action="admin.php" method="POST">
                        <div>
                        <h5>First Name : </h5>
                        <input type="text" class="fnameadd" name="fnameadd" placeholder="Your First Name">
                        <h5>Last Name : </h5>
                        <input type="text" class="lnameadd" name="lnameadd" placeholder="Your Last Name">
                        <h5>Date Of Birth : </h5>
                        <input type="date" class="dateadd" id="date" name="dateadd">
                        <h5>NIC No : </h5>
                        <input type="text" class="nicadd" name="nicadd" placeholder="XXXXXXXXXV">
                       
                        </div>

                        <div>
                            <h5>Address</h5>
                            <textarea class="addressadd" name="addressadd" required rows="10" cols="24"></textarea>
                            <h5>Gender</h5>
                            <input type="radio" name="genderadd" class="gender" value="M" checked><h4>Male</h4>
                            <input type="radio" name="genderadd" class="gender" value = "F"><h4>Female</h4>
                        </div>

                        <div>
                            <h5>Contact No</h5>
                            <input type="text" placeholder="+94XXXXXXXX" class="phn" name="phoneadd">
                            <h5>E-Mail</h5>
                            <input type="text" name="emailadd" placeholder="XXXXXXX@XXXX.XXX" class="email" pattern="[A-Za-z0-9]+@[a-zA-Z]{5}.+[a-zA-Z]">
                            <h5>Username</h5>
                            <input type="text" name="usernameadd" placeholder="PATXXXXXXXXXX" class="username">
                        </div>

                        <div>
                            <h5>Password</h5>
                            <input type="password" class="pass" id="new-pass">
                            <h5>Confirm Password</h5>
                            <input type="password" class="pass" id="confirm-new-pass" name="passwordadd">
                            <input type="checkbox" id="cb" onclick="myFunction()">accept tha privency police<br/><br/>
                            <div class="sub">
                            <input type="submit" value="submit" id="submit" disabled class="btn" name="submitadd">
                        </div>
                    </form>
                </div>
        </div>

    

      <?php }
      
      else if($admin == 'dlt'){
        $sql = "SELECT * FROM patient";
        $result = mysqli_query($conn,$sql);    
        
        ?>

<table class="pattable patedit">
      <tr>
        <th>Patient Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Password</th>
      </tr>
      <?php while($row1 = mysqli_fetch_assoc($result)){ ?>
        <form action="admin.php?id=<?php echo $row1['pId']?>" method="POST">
  <tr>
      <td class="dob"><?php echo($row1['pId']); ?></td> 
      <td> <input type="text" ondblclick="enable" class="edi" name="fName" id="" value="<?php echo($row1['fName']); ?>"> </td> 
      <td><input type="text" class="edi" name="lName" id="" value="<?php echo($row1['lName']); ?>"></td> 
      <td><input type="text" class="edi" name="phone" id="" value="<?php echo($row1['phone']); ?>"></td> 
      <td><input type="text" class="edi" name="email" id="" value="<?php echo($row1['email']); ?>"></td> 
      <td> <input type="password" class="edi" name="password" id="password" value="<?php echo($row1['patientPassword']); ?>"></td> 
      <td><input type="submit" value="Delete" name="submitdel" class="edit"></td>
  </tr>
        </form>


      <?php } ?>


      <?php }
        else if($admin == 'adminadd'){
          
      ?>

<h1 class="pattablehead"><i class="fas fa-users-cog"></i> Add Admin</h1>

          <form action="admin.php" method="POST" class="adminadd">
          <input type="text" class="admin" placeholder="First Name" name="adminfname" id="">
          <input type="text" class="admin" placeholder="Last Name" name="adminlname" id="">
          <input type="text" class="admin" placeholder="User Name" name="adminusername" id="">
          <input type="text" class="admin" placeholder="Password" name="adminpassword" id="">
          <br>
          <input type="submit" value="ADD" name="adminadd" class="addadmin">
          </form>


  <?php }?>
      
  <div class="baha">
  	<div class="box2">
	<div class="a1">
	<h2>-Patients-</h2>
	<p size="10"><?php echo $pCount['count']?></p></div>

	<div class="a1">
    <h2>-Appointments-</h2>
    <p><?php echo $appCount['appcount']?></p></div>

    <div class="a1">
    <h2>-Admins-</h2>
    <p><?php echo $admincount['admincount']?></p></div>


	</div>
	</div>



     
 
</body>




</html>

<?php
  if(isset($_POST['submitedit'])){
      $id = $_GET['id'];
      $fname = $_POST['fName'];
      $lname = $_POST['lName'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $password = $_POST['password'];

      $sql3 = "UPDATE patient SET fName = '$fname' ,lName = '$lname',phone = '$phone',email = '$email',patientPassword = '$password' WHERE pId = $id";

      $result4 = mysqli_query($conn,$sql3);

      if($result4){
        echo("<script> alert('updated successfully') </script>");
      }
      else{
        echo("<script> alert('Error') </script>".mysqli_error($conn));
      }
  }
?>

<?php
  if(isset($_POST['submitadd'])){
    $addfname = $_POST['fnameadd'];
    $addlname = $_POST['lnameadd'];
    $adddate = $_POST['dateadd'];
    $addnic = $_POST['nicadd'];
    $addaddress = $_POST['addressadd'];
    $addgender = $_POST['genderadd'];
    $addphone = $_POST['phoneadd'];
    $addemail = $_POST['emailadd'];
    $addpassword = $_POST['passwordadd'];
    $addusername = $_POST['usernameadd'];

    $sql6 = "SELECT MAX(pId) as 'max' FROM patient";

    $result7 = mysqli_query($conn,$sql6);

    $row2 = mysqli_fetch_assoc($result7);

    $pId = $row2['max'] + 1;

    $sql4 = "INSERT INTO patient(pId,fName,lName,DOB,NIC,phone,email,username,patientPassword,gender) VALUES($pId,'$addfname','$addlname','$adddate','$addnic','$addphone','$addemail','$addusername','$addpassword','$addgender')";

    $result5 = mysqli_query($conn,$sql4);

    if($result5){
      echo("<script> alert('inserted successfully') </script>");
    }
    else{
      echo("<script> alert('Error') </script>".mysqli_error($conn));
    }


  }
?>

<?php
  if(isset($_POST['submitdel'])){
    $iddel = $_GET['id'];
    $sql5 = "DELETE FROM patient WHERE pId = $iddel";

    $result6 = mysqli_query($conn,$sql5);

    if($result6){
      echo("<script> alert('Deleted successfully') </script>");
      header("Location:admin.php");
    }
    else{
      echo("<script> alert('Error') </script>".mysqli_error($conn));
    }
  }


  if(isset($_POST['adminadd'])){
    $adminfname = $_POST['adminfname']; 
    $adminlname = $_POST['adminlname'];
    $adminusername = $_POST['adminusername'];
    $adminpassword = $_POST['adminpassword']; 

    $sql8 = "INSERT INTO admin(fname,lname,username,password) VALUES('$adminfname','$adminlname','$adminusername','$adminpassword')";
    $result8 = mysqli_query($conn,$sql8);

    if($result8){
      echo("<script> alert('inserted successfully') </script>");
    }
    else{
      echo("<script> alert('Error') </script>".mysqli_error($conn));
    }
  
  }

?>

