<?php
	session_start();
	@mysql_connect('localhost','arush','');
	mysql_select_db('mydb');
	if(isset($_POST['login']))
	{
		if ($_SERVER["REQUEST_METHOD"] == "POST")
		{
			$username=test_input($_POST['username']);
			$password=test_input($_POST['password']);
		}
		$query="SELECT `id`,`Admin`,`desig` FROM `LOGIN` WHERE `username`='$username' AND `password`='$password'";
		$query_run=mysql_query($query);
		echo mysql_error();
		$rows=mysql_num_rows($query_run);
		if($rows!=0)
		{
			$row=mysql_fetch_assoc($query_run);
			$_SESSION['id']=$row['id'];
			$_SESSION['username']=$username;
			$_SESSION['admin']=$row['Admin'];
			$_SESSION['desig']=$row['desig'];
		}

	}
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>LNMIIT Intranet Portal</title>
		<link href="style.css" rel="stylesheet" type="text/css" />
		<style type="text/css">
			<!--
				.style1 {
							font-size: 50px
						}
				.style4 { 
       						font-size: 46px;
       						font-family: Georgia, "Times New Roman", Times, serif;
						}
			-->
		</style>
		<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
	</head>
	<body>
		<div class="body_header_1">
			<div style="width:600px;margin-left:auto;">
				<?php
					if(isset($_POST['logout']))
					{
						unset($_SESSION['id']);
						unset($_SESSION['username']);
						unset($_SESSION['admin']);
						echo "<font color='#008000' size='2px'><b>YOU HAVE SUCCESSFULLY LOGGED OUT</b></font>";
					}
					if(isset($_SESSION['id']))
					{
				?>
					<div style="margin-left:45%">
						<div style="display:flex;">
							<h4 style="margin-top:17px;float:left;margin-bottom:0px;"><font color="#008000">WELCOME <?php echo $_SESSION['username'];?></font></h4>&nbsp;&nbsp;
							<form id="logout_form" action=<?php echo "\"".$_SERVER['SCRIPT_NAME']."\"";?> method="post">
								<input type="submit" name="logout" value="Log Out" style="margin-top:14px;" \><br>
							</form>
						</div>
				<?php
					if($_SESSION['admin']==1)
					{
						echo "<font color='green'>You are an admin<br></font>";
					}
				?>
					<a href="change_password.php">Change Password?</a>
					</div>

				<?php
					}
					else
					{
						if(isset($_POST['login']))
						{
							echo "<font color='#fd0000' size='2px'><b>WRONG USERNAME OR PASSWORD.</b></font>";
						}
				?>
					<form id="login_form1" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
						<table >
							<tr>
								<td>Username</td>
								<td>Password</td>
							</tr>
							<tr>
								<td><input type="text" name="username" tabindex="1" /></td>
								<td><input type="password" name="password" tabindex="2" /></td>
								<td><input value="Log In" tabindex="4" type="submit" name="login"/></td>
							</tr>
							<tr>
								<td><a href="change_password.php">Change Password?</a></td>
							</tr>
						</table>
					</form>
				<?php
					}
				?>
			</div>
  			<div class="header" style="width:95%;">
    			<div class="header" style="margin-top:-30px;">
      				<table width="1200" height="150" border="0" cellpadding="0" cellspacing="0">
        				<tr>
        					<td width="693"><div align="center" class="style1">
            					<div align="left" class="style4">
              						<p style="margin-left:100px;"><a href="index.php"><span style="color:#684c00;"><u>LNMIIT Intranet Portal</u></span></a></p>
            					</div>
          					</div ></td>
          					<td width="309" height="150"><div align="center"><a href="http://www.lnmiit.ac.in" target="_blank"><img src="images/logo.png" width="218" height="106" style="margin-left:25%"/></a></div></td>
          				</tr>
      				</table>
    			</div>
  			</div>
		</div>

