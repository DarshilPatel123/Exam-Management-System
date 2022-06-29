<?php include 'inc/header.php'; ?>
<?php
Session::checkLogin();
?>
<link rel="stylesheet" href="user.css">
<div class="main">
<h1>Online Exam System - User Login</h1>
	<div style="display: flex">
	<div class="segment" style="margin:auto 20px; width:40%">
		<img src="img/test.png"/>
	</div>
	<div class="segment" style="margin-left: 5%; width:40%">
	<form action="" method="post">
		<table class="tbl">    
			 <tr>
			   <td>Email</td>
			   <td><input name="email" type="text" id="email"></td>
			 </tr>
			 <tr>
			   <td>Password </td>
			   <td><input name="password" type="password" id="password"></td>
			 </tr>
			 
			  <tr>
			  <td></td>
			   <td><input type="submit" id="loginsubmit" value="Login">
			   </td>
			 </tr>
       </table>
	   </form>
	   <p>New User ? <a href="register.php">Signup</a> Free</p>
	   <span class="empty" style="display: none;">Field must not be empty !</span>
	   <span class="error" style="display: none;">Email or Password not matched !</span>
	   <span class="disable" style="display: none;">User Id disabled !</span>
	</div>
	</div>


	
</div>
<?php include 'inc/footer.php'; ?>