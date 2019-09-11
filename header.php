<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<title>คอมพิวเตอร์เบื้องต้น</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>

<script>
 function num_key(evt){
  var iKeyCode;
  if(window.event){ // IE
    iKeyCode = evt.keyCode  
  }
  else if(evt.which){ // Netscape/Firefox/Opera
    iKeyCode = evt.which
  }

  if ((iKeyCode >= 48 && iKeyCode <= 57) || iKeyCode == 8 || iKeyCode == 46){  // 8 Backapace , 46 Delete
  return true;
  }
  else{
  return false;
  }
}

function checkID(id) { 
    if (id.length == 13){
      for(i=0, sum=0; i < 12; i++){
      sum += parseFloat(id.charAt(i))*(13-i); 
      }
      if ((11-sum%11)%10!=parseFloat(id.charAt(12))){
      alert('รหัสบัตรประชาชนไม่ถูกต้อง');
      document.getElementById("sp_result");
      }
      else {
      document.getElementById("sp_result");
      }
    }
}

</script>

<body>

<!-- Navbar 
<div class="w3-top">
  <div class="w3-bar w3-brown w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-black" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>

    <a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"><font size="5">หน้าแรก</a></font>
    <a href="https://kronwarin.github.io/my-work-program/">Project</a>
    <div class="w3-dropdown-hover " >
    <button  href="menu.php"  class="w3-button w3-hide-small w3-padding-large w3-hover-white"><font size="5">เมนู</font></button>

          <div class="w3-dropdown-content w3-bar-block w3-card-4">
	    <a href="computer.php" class="w3-bar-item w3-button">ความหมายของคอมพิวเตอร์</a>
            <a href="ethics.php" class="w3-bar-item w3-button">จริยธรรมเกี่ยวกับการใช้เทคโนโลยีสารสนเทศ</a>
            <a href="network.php" class="w3-bar-item w3-button">ระบบเครือข่ายคอมพิวเตอร์</a>
            <a href="crime_act.php" class="w3-bar-item w3-button">พ.ร.บ.คอมพิวเตอร์ฯ 2560</a>
            <a href="social_media.php" class="w3-bar-item w3-button">SOCIAL MEDIA</a>
          </div></div>
    <a href="register.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"><font size="5">ลงทะเบียน</a></font>
    <a href="select.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"><font size="5">ข้อมูล</a></font>
    <a href="login.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white w3-right"><font size="5">ล็อกอิน</a></font>
  </div>-->


        <?php  if (@$_SESSION["Status"] =="2") {?>
      <div class="w3-top">
  <div class="w3-bar w3-brown w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-black" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>

    <a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"><font size="5">หน้าแรก</a></font>
    <div class="w3-dropdown-hover " >
    <button  href="menu.php"  class="w3-button w3-hide-small w3-padding-large w3-hover-white"><font size="5">เมนู</font></button>

          <div class="w3-dropdown-content w3-bar-block w3-card-4">
	    <a href="computer.php" class="w3-bar-item w3-button">ความหมายของคอมพิวเตอร์</a>
            <a href="ethics.php" class="w3-bar-item w3-button">จริยธรรมเกี่ยวกับการใช้เทคโนโลยีสารสนเทศ</a>
            <a href="network.php" class="w3-bar-item w3-button">ระบบเครือข่ายคอมพิวเตอร์</a>
            <a href="crime_act.php" class="w3-bar-item w3-button">พ.ร.บ.คอมพิวเตอร์ฯ 2560</a>
            <a href="social_media.php" class="w3-bar-item w3-button">SOCIAL MEDIA</a>
          </div></div>
	<div class="w3-dropdown-hover " >
    <button  href="menu.php"  class="w3-button w3-hide-small w3-padding-large w3-hover-white"><font size="5">พีระมิด36</font></button>

          <div class="w3-dropdown-content w3-bar-block w3-card-4">
	    <a href="pyramid1.10.php" class="w3-bar-item w3-button">pyramid1-10</a>
            <a href="pyramid11.20.php" class="w3-bar-item w3-button">pyramid11-20</a>
            <a href="pyramid21.30.php" class="w3-bar-item w3-button">pyramid21-30</a>
            <a href="pyramid31.36.php" class="w3-bar-item w3-button">pyramid31-36</a>
          </div></div>
    
    <a href="select.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"><font size="5">ข้อมูล</a></font>
    <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white w3-right"><font size="5">ล็อคเอาท์</a></font>

  </div>

      <?php } else if (@$_SESSION["Status"] =="1") { ?>
        <div class="w3-top">
  <div class="w3-bar w3-brown w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-black" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>

    <a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"><font size="5">หน้าแรก</a></font>
    <div class="w3-dropdown-hover " >
    <button  href="menu.php"  class="w3-button w3-hide-small w3-padding-large w3-hover-white"><font size="5">เมนู</font></button>

          <div class="w3-dropdown-content w3-bar-block w3-card-4">
	    <a href="computer.php" class="w3-bar-item w3-button">ความหมายของคอมพิวเตอร์</a>
            <a href="ethics.php" class="w3-bar-item w3-button">จริยธรรมเกี่ยวกับการใช้เทคโนโลยีสารสนเทศ</a>
            <a href="network.php" class="w3-bar-item w3-button">ระบบเครือข่ายคอมพิวเตอร์</a>
            <a href="crime_act.php" class="w3-bar-item w3-button">พ.ร.บ.คอมพิวเตอร์ฯ 2560</a>
            <a href="social_media.php" class="w3-bar-item w3-button">SOCIAL MEDIA</a>
          </div></div>
	<div class="w3-dropdown-hover " >
    <button  href="menu.php"  class="w3-button w3-hide-small w3-padding-large w3-hover-white"><font size="5">พีระมิด36</font></button>

          <div class="w3-dropdown-content w3-bar-block w3-card-4">
	    <a href="pyramid1.10.php" class="w3-bar-item w3-button">pyramid1-10</a>
            <a href="pyramid11.20.php" class="w3-bar-item w3-button">pyramid11-20</a>
            <a href="pyramid21.30.php" class="w3-bar-item w3-button">pyramid21-30</a>
            <a href="pyramid31.36.php" class="w3-bar-item w3-button">pyramid31-36</a>
          </div></div>

     <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white w3-right"><font size="5">ล็อคเอาท์</a></font>
  </div>


      <?php } else  if(@$_SESSION["Status"] =="") { ?>
        <div class="w3-top">
  <div class="w3-bar w3-brown w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-black" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>

    <a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"><font size="5">หน้าแรก</a></font>
    <div class="w3-dropdown-hover " >
    <button  href="menu.php"  class="w3-button w3-hide-small w3-padding-large w3-hover-white"><font size="5">เมนู</font></button>

          <div class="w3-dropdown-content w3-bar-block w3-card-4">
	    <a href="computer.php" class="w3-bar-item w3-button">ความหมายของคอมพิวเตอร์</a>
            <a href="ethics.php" class="w3-bar-item w3-button">จริยธรรมเกี่ยวกับการใช้เทคโนโลยีสารสนเทศ</a>
            <a href="network.php" class="w3-bar-item w3-button">ระบบเครือข่ายคอมพิวเตอร์</a>
            <a href="crime_act.php" class="w3-bar-item w3-button">พ.ร.บ.คอมพิวเตอร์ฯ 2560</a>
            <a href="social_media.php" class="w3-bar-item w3-button">SOCIAL MEDIA</a>
          </div></div> 
	<div class="w3-dropdown-hover " >
    <button  href="menu.php"  class="w3-button w3-hide-small w3-padding-large w3-hover-white"><font size="5">พีระมิด36</font></button>

          <div class="w3-dropdown-content w3-bar-block w3-card-4">
	    <a href="pyramid1.10.php" class="w3-bar-item w3-button">pyramid1-10</a>
            <a href="pyramid11.20.php" class="w3-bar-item w3-button">pyramid11-20</a>
            <a href="pyramid21.30.php" class="w3-bar-item w3-button">pyramid21-30</a>
            <a href="pyramid31.36.php" class="w3-bar-item w3-button">pyramid31-36</a>
          </div></div>

       <a href="login.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white w3-right"><font size="5">ล็อคอิน</a></font>
     <a href="register.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white w3-right"><font size="5">ลงทะเบียน</a></font>
  
  </div>
        
        
        
      <?php }?>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="menu.php" class="w3-bar-item w3-button w3-padding-large">MENU</a>
    <a href="register.php" class="w3-bar-item w3-button w3-padding-large">REGISTER</a>
    <a href="login.php" class="w3-bar-item w3-button w3-padding-large w3-right">LOGIN</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-teal w3-center" style="padding:50px 16px">
  <h1 class="w3-margin w3-jumbo">COMPUTER</h1>
  <p class="w3-xlarge"><<<ความรู้เบื้องต้นเกี่ยวกับคอมพิวเตอร์และเทคโนโลยีสารสนเทศ‎>>></p>
</header>



