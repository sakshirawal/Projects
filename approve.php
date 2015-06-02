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
      <li><a href="hostel.php" target="_self" class="mudit">Hostel</a></li>
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

<h2>approve leave applications</h2><br><br>
<?php
  if(isset($_SESSION['id']))
  {
    if($_SESSION['desig']=='warden')
    {
?>
    <form method="post" action="approve.php">
      application no:<input type="text" name='application_no'><br><br>
      <input type="submit" name="go" value="go">
    </form>
<?php
    }
    else{
      echo "<b>You are not authorized</b>";
    }
  }
  else{
    echo "<b>You are not authorized</b>";
  }
  if(isset($_POST['go']))
  {
    $application=$_POST['application_no'];
      $query="SELECT * FROM `leave_application` WHERE `application` = '$application'";

      $query_run=mysql_query($query);
      echo mysql_error();
      if(mysql_num_rows($query_run)==0)
      {
        echo "incorrect application id";
      }
      else{
        $row=mysql_fetch_assoc($query_run);
        foreach($row as $key=>$value)
        {
          echo "<br>$key : $value<br>";
        }

      if ($row['approved']==0)
      {
?>
<form method="post" action="approve1.php">
  approve?<input type="radio" name="approve" value="yes">YES&nbsp;&nbsp;&nbsp;<input type="radio" name="approve" value="no">NO
  remarks:<input type="text" name="remarks">
  <input type="hidden" value=<?php echo $application; ?> name="application">
  <input type="hidden" value=<?php echo $row['email_id']; ?> name="email_id">
  <input type="submit" name="submit1" value="submit">
</form>
<?php
    }
  }
}

?>
 
</div>
</div>
</div>
<?php
require('footer.php');
?>