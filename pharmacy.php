<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <link rel="stylesheet" href="src/style/ph.css">
       <link rel="stylesheet" type="text/css" href="src/style/home.css">
       <link rel="stylesheet" type="text/css" href="src/style/head-topic.css">
    <script src="src/js/home.js"></script>
       <script src="src/js/pharmacy.js"></script>
       <title>Document</title>
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
                               
                        </header>
                            <div class="top-back">
                            <div class="head-back">
                                   <div><img src="src/images/4.png"></div>
                                          <div>
                                                 <h1>MEDITECH Patient Management System</h1>
                                                 <h2>24/7 Support Services | A Complete Solution for Clinic Managment</h2>
                                          </div>
                                   </div>
                            </div>
       <div class="main">
              <div class = "topic1">
              <h1>Pharmacy Facility</h1>
              <img src="src/images/pharmacy.png" alt="pharmacy-logo" class="logo">
              </div>
              <div class="topic3">
                  <h2>Introduction</h2>
              <ul type = "disk">
              <li>
              Pharmacy are premises licensed for retail sale or supply of drugs to the hospital.
              </li>
              <li>
              The hospital Pharmacy purchasesand dispenses all the medications used to treat the patients in the hospital.
              </li>
              <li>
              Pharmacy Services help the patients to get the relevant medicines given by the doctor.
              </li>
              <li>
              The Pharmacist works directly with the medical staff in establishing a formulary,the listing of drugs chosen to be included in the pharmacy.
              </li>
              </ul>
              </div>
              </div>
              <div class = "big">
               <div class = "cage cage1">
               <h2>-Invoices-</h2>
               <p size = "10">50</p>
               </div>
               
               <div class = "cage cage2">
               <h2>-Requests-</h2>
               <p size = "10">100</p>
               </div>
               
               <div class = "cage cage3">
               <h2>-Thermometers-</h2>
               <p size = "10">200</p>
               </div>
               
               <div class = "cage cage4">
               <h2>-Tissues-</h2>
               <p size = "10">300</p>
               </div>
               
               <div class = "cage cage5">
               <h2>-Hand sanitizer-</h2>
               <p size = "10">100</p>
               </div>
              </div>
              <div>
                      <form action="" method ="POST">
                              Items selected: 
                              <select name="" id="items">
                                     <option value = "Tissues" class="value" id="1">Tissues</option>
                                     <option value = "Thermometers" class="value" id="2">Thermometers</option> 
                                     <option value = "Hand sanitizer" class="value" id="3">Hand sanitizer</option>
                                     <option value = "Injections" class="value" id="4">Injections</option>
                                     <option value = "Amoxil Syrup" class="value" id="5">Amoxil Syrup</option>
                              </select>
                         
                              Quantity:
                              <select name="" id="qty">
                                     <option value ="1">1</option> 
                                     <option value ="1">2</option> 
                                     <option value ="1">3</option>
                                     <option value ="1">4</option>
                                     <option value ="1">5</option>
                              </select> 
                              <input type="button" id="submit" onclick="total()" value="CALCULATE TOTAL">
                         
                              <h1>TOTAL PRICE : </h1>
                              <h3 id="price"></h3>
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