 <?php
require('header.php');
?>


<?php
if(!isset($_SESSION['id']))
{
  die('<b>Please Login To continue</b>');
}
if(isset($_POST['submit']))
{
  $empty=0;
  foreach($_POST as $key => $value)
  {
    if(!isset($value) || empty($value) || $_SERVER["REQUEST_METHOD"] != "POST")
    {
      echo "<center><b>********************************************************Please fill all the fields**************************************************</b></center>";
      $empty=1;
      break;
    }
  }
  if($empty!=1)
  {



    $name=test_input($_POST['name']);
    $roll_no=test_input($_SESSION['username']);
    $date= test_input($_POST['date']);
    $time_from=test_input($_POST['date_from'])." ".test_input($_POST['time_from']);
    $time_to=test_input($_POST['date_to'])." ".test_input($_POST['time_to']);
    $room_no=test_input($_POST['room_no']);
    $mobile_student=test_input($_POST['mobile_student']);
    $mobile_gaurdian=test_input($_POST['mobile_gaurdian']);

    $reason=test_input($_POST['reason']);
    $query="SELECT `email_id` FROM `student_info` WHERE `roll_no`='$roll_no'";
    $query_run=mysql_query($query);
    $row=mysql_fetch_assoc($query_run);
    $email=$row['email_id'];


    $query="INSERT INTO `mydb`.`leave_application` (`application`, `name`, `roll_no`, `date`, `time_from`, `time_to`, `room_no`, `mobile_student`, `mobile_gaurdian`, `reason`, `email_id`) VALUES (NULL, '$name', '$roll_no', '$date', '$time_from', '$time_to', '$room_no', '$mobile_student', '$mobile_gaurdian', '$reason', '$email')";

    $query_run=mysql_query($query);

    $application_no=mysql_insert_id();
    echo "<b><center>Your application no is: ".$application_no."</center></b><br>";












    require 'PHPMailer/PHPMailerAutoload.php';
 
    $mail = new PHPMailer;
 
    $mail->isSMTP();                                    
    $mail->Host = 'smtp.gmail.com'; 
    $mail->SMTPAuth = true;                                 
    $mail->Username = 'intranet.lnmiit@gmail.com';                            
    $mail->Password = 'information.lnmiit';                        
    $mail->SMTPSecure = 'tls';                            
 
    $mail->From = 'noreply@gmail.com';  
    $mail->FromName = 'INTRANET LNMIIT';
    $mail->addAddress('arushgyl@gmail.com', 'Arush'); 
    $mail->addAddress($email, $name); 
 
    $mail->addReplyTo('intranet.lnmiit@gmail.com', 'intranet lnmiit');
    $mail->WordWrap = 50;                                
    $mail->isHTML(true);                                  
 
    $mail->Subject = 'Leave Application of '.$name;
    $mail->Body    = '<b>Leave application form of '.$name.'</b><div><font color="blue"><br>
    <font color="red">Application no.:</font>&nbsp;&nbsp;'.$application_no.'<br><br>
      <font color="red">Name of Student</font>:&nbsp;&nbsp;'.$name.'<br><br><font color="red">Date:</font>&nbsp;&nbsp;'.$date.'<br><br>
      <font color="red">Roll No.:</font>&nbsp;&nbsp;'.$roll_no.'<br><br><font color="red">Hostel and Hostel Room No:</font> &nbsp;&nbsp;'.$room_no.'<br><br><font color="red">Email: </font>&nbsp;&nbsp;<font color="pink">'.$email.'</font><br><br>
      <font color="red">Mobile No. of Student:</font> &nbsp;&nbsp;
      '.$mobile_student.'<br><br><font color="red">Mobile No. of Guardian:</font> &nbsp;&nbsp; '.$mobile_gaurdian.'<br><br>
        <font color="red">Leave required from: </font>&nbsp;&nbsp;'.$time_from.'<br><br>
      <font color="red">To (Will be back in campus):</font>&nbsp;&nbsp;'.$time_to.'<br><br>
      <font color="red">Reason(s):</font><br><br>&nbsp;&nbsp;
      '.$reason. '
	  
      </font>
      </div>';
 
    if(!$mail->send()) {
      echo '<b><center>Leave Application Couldnot be submitted.ERROR..</center></b>';
      exit;
    }
 
    echo '<b><center>Leave Application is Submitted.</center></b>';

  }
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
  </style></head>

<div class="body_header_2" >
  <div class="button_area">
    <div class="button"><a href="index.php">Home</a></div>
    <div class="button"><a href="Academics.php">Academics</a></div>
    <div class="button"><a href="Research.php">Research</a></div>
  	<div class="button"><a href="Notice_board.php">Notice Board</a></div>    
  	<div class="button" style="background-color:#639374;"><a href="campus.php" >Campus</a></div>
    <div class="button"><a href="contact.php">Contact Us</a></div> 
  </div>

<div class="container" style="min-height:600px;width:95%;margin-top:-15px;">
 <a href="campus.php" style="text-decoration:none;"><h2 style="color:#684c00; padding-left:20px; width:162px; background-color:#B1C1C0;margin-bottom:-16px;">Campus</h2></a>
  <div class="row" style="display:flex;">
    <div class="col-9" style="width:20%;">
     <div class="list-group">
		<ul type="none">
			<li><a href="hostel.php" target="_self" class="list-group-item">Hostel</a></li>
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
 <center>
    <h2>THE LNM INSTITUTE OF INFORMATION TECHNOLOGY</h2>
    <em>(DEEMED UNIVERSITY)</em><br>
    Gram : Rupa-Ki-Nangal,Post-Sumel,Via Jamdoli,Jaipur-302031,Rajasthan,India<br> 
    -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br><br><br>
    </center>
    <div>
    <form name="leave_application" method="post" action="leave_application1.php">
    Name of Student: <input type="text" name="name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date:<input type="text" name="date"><br><br>
    Hostel and Hostel Room No:<input type="text" name="room_no">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
    Mobile No. of Student:
<input type="text" name="mobile_student">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mobile No. of Guardian: <input type="text" name="mobile_gaurdian"><br><br>
    Leave required from (Leaving campus) Date:<input type="text" name="date_from">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Time:(24hr clock)<input type="text" name="time_from"><br><br>
    To (Will be back in campus) Date:<input type="text" name="date_to">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Time(24hr clock):<input type="text" name="time_to"><br><br>
    Reason(s):<br><textarea name="reason" rows="7" cols="120">
      
    </textarea>
    <input type="submit" name="submit" value="submit">
    </form>
        
  </div>
 </div>
</div>
</div>
<?php
require('footer.php');
?>