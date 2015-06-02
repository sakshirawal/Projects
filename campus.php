<?php
require('header.php');
?>
<link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/1/js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />

<div class="body_header_2">
  <div class="button_area">
    <div class="button"><a href="index.php">Home</a></div>
    <div class="button"><a href="Academics.php">Academics</a></div>
    <div class="button"><a href="Research.php">Research</a>
  <div class="button"><a href="Notice_board.php">Notice Board</a></div>    
  <div class="button_selected" ><a href="campus.php">Campus</a></div>
    <div class="button"><a href="contact.php">Contact Us</a></div>    
  </div>
</div>
<div class="container" style="min-height:395px;width:95%;margin-top:-15px;">
 <a href="campus.php" style="text-decoration:none;"><h2 style="color:#684c00; padding-left:20px; width:162px; background-color:#B1C1C0;margin-bottom:-16px;">Campus</h2></a>
  <div class="row" style="display:flex;">
    <div class="col-9" style="width:20%;">
     <div class="list-group">
<ul type="none">
<li style="background-color:F5F5F5;"><a href="hostel.php" target="_self" class="list-group-item" >Hostel</a></li>
<li><a href="mess.php" target="_self" class="list-group-item">Mess</a></li>
<li><a href="canteen.php" target="_self" class="list-group-item">Canteen</a></li>
<li><a href="bus.php" target="_self" class="list-group-item">Bus</a></li>
<li><a href="medical.php" target="_self" class="list-group-item">Medical</a></li>
<li><a href="Contact_number.php" target="_self" class="list-group-item">Contacts</a></li><br></b></u>

</ul>
 </div>
    </div>
    <div class="col-3"style="width:50%"><!--Place for middle--> 









    </div>
    <div class="col-3">
        <b><a href="notices-hostel.php"><font color="blue">NOTICES HERE:</font></a></b><br>
        <marquee direction="up" scrollamount="2" onmouseover="this.stop();"  onmouseout="this.start();">
		hostel timing change for today <br><br>
		water supply disruption @ boys hostel <br><br>
		Fine Notice- All BH3 students<br><br>
		Concerns regarding issue of overcroweded buses
		<br><br></marquee>

    </div>
  </div>
 

</div>
  <?php
require('footer.php');
?>