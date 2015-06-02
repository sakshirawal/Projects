<?php
require('header.php');
?>
 <head> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/1/js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />


  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <style>
  .container
  {
  }  
  .links a:hover{
  		color: red;
  		text-decoration: underline;
  }
  .links a{
  	color:blue;
  }
  </style></head>

<div class="body_header_2">
  <div class="button_area">
    <div class="button"><a href="index.php">Home</a></div>
    <div class="button"><a href="Academics.php">Academics</a></div>
    <div class="button"><a href="Research.php">Research</a></div>
  	<div class="button"><a href="Notice_board.php">Notice Board</a></div>    
  	<div class="button"><a href="campus.php" >Campus</a></div>
    <div class="button"><a href="contact.php">Contact Us</a></div> 
  </div>

<div class="container" style="min-height:395px;width:95%;margin-top:-15px;">
 <a href="campus.php" style="text-decoration:none;"><h2 style="color:#684c00; padding-left:20px; width:162px; background-color:#B1C1C0;margin-bottom:-16px;">Campus</h2></a>
  <div class="row" style="display:flex;">
    <div class="col-9" style="width:20%;">
     <div class="list-group">
		<ul type="none">
			<li><a href="hostel.php" target="_self" class="list-group-item">Hostel</a></li>
			<li><a href="mess.php" target="_self" class="mudit">Mess</a></li>
			<li><a href="canteen.php" target="_self" class="list-group-item">Canteen</a></li>
			<li><a href="bus.php" target="_self" class="list-group-item">Bus</a></li>
			<li><a href="medical.php" target="_self" class="list-group-item">Medical</a></li>
			<li><a href="Contact_number.php" target="_self" class="list-group-item">Contacts</a></li><br></b></u>
		</ul>
		<br><br><br>
 	</div>
 </div>
 <div class="links" style="margin-left:20%;">
 <b>
  <center>
 <ul type="none">
 <li><a href="mess_menu.pdf" target="_blank">Mess Menu</a></li><br>
 	<li><a href="https://docs.google.com/forms/d/1VRnl2TMA6bh-paoWWkrOx3A1mVmuTmWLhO_C524-QwU/viewform?usp=send_form" target="_blank">Mess Complaint</a></li><br>
 </ul>
</center>
    MESS TIMINGS:-<br><br>
    Breakfast: 07:45 AM - 09:15 AM<br>
    Lunch: 12:30 PM - 02:00 PM<br>
    Snacks: 05:30 PM - 06:15 PM<br>
    Dinner: 08:00 PM - 09:30 PM<br>
</div>
 </div>
 </div>
  <?php
require('footer.php');
?>