
<!DOCTYPE html>
<html>
<title>Reception-Patient Registration</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/form.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="css/icon.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="js/address.js" type="text/javascript" charset="utf-8"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="js/dropdown.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">

    $(document).ready(function(){
        var i=5;
        $(".add-row1").click(function(){
           var markup1 = "<tr><td class='w3-row'>"+(i+1)+"</td><td class='w3-row'><input class='w3-input  w3-col l12 w3-border' name='treat"+i+"' type='text' placeholder='Treatment'></td><td class='w3-row'><input class='w3-input  w3-col l12 w3-border' name='treatcharge"+i+"' type='text' placeholder='Charges'></td></tr>  </table>";
            $("#treat").append(markup1);
            i++;
        });
    });
   
    $(document).ready(function(){
        var j=5;
        $(".add-row2").click(function(){
           var markup2 = "<tr><td class='w3-row'>"+(j+1)+"</td><td class='w3-row'><input class='w3-input  w3-col l12 w3-border' name='lab"+j+"' type='text' placeholder='Lab Test'></td><td class='w3-row'><input class='w3-input  w3-col l12 w3-border' name='labcharge"+j+"' type='text' placeholder='Charges'></td></tr>  </table>";
            $("#lab").append(markup2);
            j++;
        });
    });    
</script>

			<body>

<div class="w3-container"></div>
<div class="w3-row w3-teal" style="position: fixed; width : 100%; z-index:99;">
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
          <a href="receptionist.php" ><i class="w3-medium material-icons">home</i> Home</a>
          <a href="" class="active"><i class="w3-medium material-icons">border_color</i> Billing</a>
          <a href="viewAppointment.php"><i class="w3-medium material-icons">search</i> View Appointment</a>
          <a onclick="myAccFunc1()" href="#"><i class="w3-medium material-icons">insert_invitation</i> Make Appointment <i class="fa fa-caret-down"></i></a>
          <div id="demoAcc1" class="w3-hide w3-teal w3-card-4">
            <a href="appNew.php"  >&nbsp;&nbsp;&nbsp;New Patient</a>
            <a href="appOld.php" >&nbsp;&nbsp;&nbsp;Old Patient</a>
          </div>
          <a onclick="myAccFunc2()" href="#"><i class="w3-medium material-icons">search</i> View Patient <i class="fa fa-caret-down"></i></a>
          <div id="demoAcc2" class="w3-hide w3-teal w3-card-4">
            <a href="byPatientId.php" >&nbsp;&nbsp;&nbsp;By Patient Id</a>
            <a href="byPatientAdmissionDate.php" >&nbsp;&nbsp;&nbsp;By patient Admission Date</a>
            <a href="byPatientName.php">&nbsp;&nbsp;&nbsp;By Name</a>
          </div>
          <a onclick="myAccFunc3()" href="#"><i class="w3-medium material-icons">search</i> View Bill <i class="fa fa-caret-down"></i></a>
          <div id="demoAcc3" class="w3-hide w3-teal w3-card-4">
            <a href="byBillNo.php" >&nbsp;&nbsp;&nbsp;By Bill Number</a>
            <a href="byDate.php" >&nbsp;&nbsp;&nbsp;By Date</a>
            <a href="byName.php">&nbsp;&nbsp;&nbsp;By Name</a>
          </div>
          <a onclick="myAccFunc4()" href="#"><i class="fa fa-hotel"></i> Ward <i class="fa fa-caret-down"></i></a>
          <div id="demoAcc4" class="w3-hide w3-teal w3-card-4">
            <a href="generalWard.php" >&nbsp;&nbsp;&nbsp;General Ward</a>
            <a href="privateRoom.php" >&nbsp;&nbsp;&nbsp;Private Rooms</a>
          </div>        
    </nav>


<!-------------------------------------Side-Nav Ends------------------------------->
<!-------------------------------------Billing starts----------w3-text-brown--------------------->
    <div class="w3-card-4 w3-light-grey w3-padding"  style="margin-left:15% ;margin-top: 73px;" >
        <h3 align="middle" class="w3-bottombar w3-border-teal" style="color: teal;">Billing</h3>
         <form class="w3-container" action="" method="post">
            <div class="w3-row-padding">
                <div class="w3-col l5">
                    <p> </p>
                </div>
              <div class="w3-col l2 center ">
                <input class="w3-input w3-border" name="billNo" type="text" placeholder="Enter Patient-Id">
              </div>
              <div class="w3-col l2">
                    <a href="billing.php"><button class="w3-btn">Prepare Bill</button></a>
                </div>
            </div>
        </form>
    </div>
</body>