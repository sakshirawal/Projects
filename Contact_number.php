 
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
  	<div class="button" style="background-color:#639374;"><a href="campus.php" >Campus</a></div>
    <div class="button"><a href="contact.php">Contact Us</a></div> 
  </div>

<div class="container" style="min-height:395px;width:95%;margin-top:-15px;">
 <a href="#" style="text-decoration:none;"><h2 style="color:#684c00; padding-left:20px; width:162px; background-color:#B1C1C0;margin-bottom:-16px;">Campus</h2></a>
  <div class="row" style="display:flex;">
    <div class="col-9" style="width:20%;">
     <div class="list-group">
		<ul type="none">
			<li><a href="hostel.php" target="_self" class="list-group-item">Hostel</a></li>
			<li><a href="mess.php" target="_self" class="list-group-item">Mess</a></li>
			<li><a href="canteen.php" target="_self" class="list-group-item">Canteen</a></li>
			<li><a href="bus.php" target="_self" class="list-group-item">Bus</a></li>
			<li><a href="medical.php" target="_self" class="list-group-item">Medical</a></li>
			<li><a href="Contact_number.php" target="_self" class="mudit">Contacts</a></li><br></b></u>
		</ul>
		<br><br><br>
 	</div>
 </div>
 <div class="links" style="margin-left:20%;">
 <b>
  <ul type="none">
	<li><a href="hmc.php" target="_self" > HMC TEAM </a></li><br>
	<li><a href="http://www.lnmiit.ac.in/Students/Gymkhana.html" target="_self" >LNMIIT SENATE</a></li><br>
 	

 </ul>
</div>
 </div>
 </div>
  <?php
require('footer.php');
?>
	
