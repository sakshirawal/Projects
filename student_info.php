<?php
require('header.php');
if(!isset($_SESSION['id']))
{
	die('<b>Please Login To continue</b>');
}
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
  .selec{
    background-color: #F5F5F5;
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
			<div class="selec"><li><a href="hostel.php" target="_self" class="mudit">Hostel</a></li></div>
			<li><a href="mess.php" target="_self" class="list-group-item">Mess</a></li>
			<li><a href="canteen.php" target="_self" class="list-group-item">Canteen</a></li>
			<li><a href="bus.php" target="_self" class="list-group-item">Bus</a></li>
			<li><a href="medical.php" target="_self" class="list-group-item">Medical</a></li>
			<li><a href="Contact_number.php" target="_self" class="list-group-item">Contacts</a></li><br></b></u>
		</ul>
		<br><br><br>
 	</div>
	</div>
 			<div>
			
				<?php
					if(@$_SESSION['admin']==1)
					{
						$query="SELECT `year`,`roll_no`,`name`,`email_id`,`room_no`,`parent_no` FROM `student_info` ORDER BY `year`,`roll_no`";
					}
					else{
						$query="SELECT `year`,`roll_no`,`name`,`email_id`,`room_no` FROM `student_info` ORDER BY `year`,`roll_no`";
					}
			
					echo mysql_error();
					$query_run=mysql_query($query);
					echo mysql_error();
				?>
				<table cellspacing="20">
				<tr><td>Sr.no</td><td>Year</td><td>Roll No.</td><td>Name</td><td>Email id</td><td>Room No.</td><?php if(@$_SESSION['admin']==1){echo "<td>Parents contact no.</td>";}?></td></tr>
				<?php
					$count=1;
					while($row=mysql_fetch_assoc($query_run))
					{
						echo "<tr><td>".$count."</td>";
						$count++;
						foreach($row as $key => $value)
						{

							echo "<td>".$value."</td>";	
						}
						echo "</tr>";
					}
				?>
				</table>
			</div>
		</div>
 	</div>
  <?php
require('footer.php');
?> 
