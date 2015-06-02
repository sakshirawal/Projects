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
 <div style="margin-left:20%;margin-top:5%;">
 <center>

<h2>CHANGE PASSWORD</h2><br><br>
<b>
 <?php
 if(isset($_POST['change_password']))
 {
   if(!empty($_POST['username']) && !empty($_POST['old_password']) && !empty($_POST['new_password']) && !empty($_POST['repeat_new_password']))
   {
     if($_POST['new_password']==$_POST['repeat_new_password'])
     {
       $username=$_POST['username'];
       $password=$_POST['old_password'];
       $newpassword=$_POST['new_password'];
       $query="UPDATE `LOGIN` SET `password`='$newpassword' WHERE `username`='$username' AND `password`='$password'";
       $query_run=mysql_query($query) or die(mysql_error());
       if (mysql_affected_rows()==0)
        {
          print "Either The Username or Password is Incorrect <br> Or You didnot change the Password";
        }
        else if(mysql_affected_rows()==1)
        {
          echo "Your Password Has Been Updated";
        }
      }
     else{
       echo "New Password and Repeat New Password donot match";
      }
   }
   else{
     echo "Please fill in all the fields";
   }
 }
 ?>
</b><br><br>


	<form method="post" name="change_password" action="change_password.php">
  <table>
    <tr><td>Username:</td><td><input type="text" name="username" /></td></tr>
    <tr><td>Old Password:</td><td><input type="password" name="old_password" /></td></tr>
    <tr><td>New Password:</td><td><input type="password" name="new_password" /></td></tr>
    <tr><td>Repeat New Password:</td><td><input type="password" name="repeat_new_password" /></td></tr>
    <tr><td></td><td><input type="submit" name="change_password" value="Change Password" /></td></tr>
  </table>
  </form>
  </center> 
</div>
 </div>
 </div>
  <?php
require('footer.php');
?>