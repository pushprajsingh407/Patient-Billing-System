
<!DOCTYPE html>
<html>
<title>Doctor-View Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/form.css">
<link rel="stylesheet" href="css/profile.css">
<link rel="stylesheet" href="css/icon.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="js/address.js" type="text/javascript" charset="utf-8"></script>
<script src="js/dropdown.js" type="text/javascript" charset="utf-8"></script>
<body>

<div class="w3-container"></div>
<div class="w3-row w3-teal" style="position: fixed; width : 100%;">
                <div class="w3-col l5">
                    <p> </p>
                </div>
                 <div class="w3-col l4" >
                    <h1>Mayawati Hospital</h1>
                 </div>
                 <div class="w3-col l3" style="">
                       <div class="w3-card-1 w3-small  w3-row">
                          <a href="profile.php"><img src="images/my_photo.jpg" alt="Avatar" class="w3-col l2 w3-left w3-circle w3-margin-right" style="width:50px; margin-top:5px;    "></a>
                          <p class="w3-col l9" style="margin-top: 2px;">Pushpraj Singh Yaduvanshi<br>
                          Login Time:02/03/2017 11:44 AM   
                          <br /><a href="http://localhost/PBS/PBS-PHP/index.php">Logout</a></p> 
                       </div>
                  </div>
                
             </div>      
                       <!-------------------------------------Side-Nav starts------------------------------->
   <nav class="w3-sidenav w3-teal w3-card-2" style="position: relative;margin-top: 73px;;width:15%;">
          <a href="doctor.php"><i class="w3-medium material-icons">home</i> Home</a>
          <a href="viewAppointment.php"><i class="w3-medium material-icons">search</i> View Appointment</a>
          <a onclick="myAccFunc1()" href="#"><i class="w3-medium material-icons">search</i> View Patient <i class="fa fa-caret-down"></i></a>
          <div id="demoAcc1" class="w3-hide w3-teal w3-card-4">
            <a href="byPatientId.php" >&nbsp;&nbsp;&nbsp;By Patient Id</a>
            <a href="byPatientAdmissionDate.php" >&nbsp;&nbsp;&nbsp;By Admission Date</a>
            <a href="byPatientName.php">&nbsp;&nbsp;&nbsp;By Name</a>
          </div>
    </nav>


        
    
<!-------------------------------------Side-Nav Ends-------------------------------> 

<!---------------------------------------------------------------------------->
<div class="w3-container w3-row w3-padding" style="margin-top: 73px;margin-left: 15%;">
    <div class="w3-card-0 w3-col l4 w3-center" style="max-height: 180px; max-width:180px;">
        <img  src="images/my_photo.jpg" class="w3-circle" style="max-width: 180px;"/>
    </div>
    <div class="w3-container w3-col l8">
        <h3 style="color:teal"">Personal Information</h3>
        <table class="w3-table w3-small">
                    <tr >
                      <td id="leftCol">
                      <p id="leftColP"><b>Name:</b></p>
                      </td>
                      <td>  <p>Rajesh Gupta</p>
                      </td>
                      
                    </tr>
                    <tr>
                      <td id="leftCol">
                      <p  id="leftColP"><b>Date Of Birth:</b></p></td>
                      <td>
                      <p >02-04-1996</p>
                      </td>
                    </tr>
                    <tr >
                      <td id="leftCol">
                      <p id="leftColP"><b>Gender:</b></p></td>
                      <td>
                      <p >Male</p>
                      </td>
                      
                    </tr>
        </table>
        <table class="w3-table">
            <tr><td><h3 style="color:teal; max-width: 300px;">Contact Information</h3></td><td class="w3-small" align="left"><a href="updateContact.php"><img src="images/edit.png" style="width: 20px;;"/><button class="w3-button w3-teal w3-round-xlarge">Edit</button></a></td></tr>
        </table>
        
        <table class="w3-table w3-small">
                    <tr >
                      <td id="leftCol">
                      <p id="leftColP"><b>Mobile Number:</b></p>
                      </td>
                      <td>  <p>7597517125</p>
                      </td>
                      
                    </tr>
                    <tr>
                      <td id="leftCol">
                      <p  id="leftColP"><b>Email-Id:</b></p></td>
                      <td>
                      <p >rajeshgupta99@gmail.com</p>
                      </td>
                    </tr>
                    
                    <tr>
                      <td id="leftCol">
                      <p  id="leftColP"><b>Present Address:</b></p></td>
                      <td>
                      <p >225 Shiv Vistar I, Jaipur</p>
                      </td>
                    </tr>
                    <tr>
                      <td id="leftCol">
                      <p  id="leftColP"><b>Permanent Address:</b></p></td>
                      <td>
                      <p >225 Shiv Vistar I, Jaipur</p>
                      </td>
                    </tr>
        </table>
        <h3 style="color:teal"">Employment Information</h3>
        <table class="w3-table w3-small">
                    <tr >
                      <td id="leftCol">
                      <p id="leftColP"><b>Designation:</b></p>
                      </td>
                      <td>  <p>Receptionist</p>
                      </td>
                      
                    </tr>
                    <tr>
                      <td id="leftCol">
                      <p  id="leftColP"><b>Department:</b></p></td>
                      <td>
                      <p >Clinical</p>
                      </td>
                    </tr>
                    <tr >
                      <td id="leftCol">
                      <p id="leftColP"><b>Date Of Joining:</b></p></td>
                      <td>
                      <p >20-02-1995</p>
                      </td>
                    </tr>
                    <tr>
                      <td id="leftCol">
                      <p  id="leftColP"><b>Pay Scale:</b></p></td>
                      <td>
                      <p >10000</p>
                      </td>
                    </tr>
        </table>
    </div>
</div>

<!---------------------------------------------------------------------------->
</body>
</html>