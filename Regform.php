<!doctype html>
<html>
<head>
<meta charset="utf-8"> 
<title>Untitled Document</title>
</head>

	<style>
		.wrap{
			width:400px;
			margin: 0 auto;
			background: linear-gradient(#fff,#ddf);
			padding: 40px 30px 20px 30px
			}
		
		
		label{display: block;
		      font-size: 16px;
		      
		margin-bottom: 5px;}
		
		input[type="text"]{
			width: 300px;
		    padding: 7px;
			margin-bottom: 10px;
		                  }
		input[type="number"]{
			width: 300px;
		    padding: 7px;
			margin-bottom: 10px
		}
		select
		{width: 200px;
		padding: 8px;
		margin-bottom: 10px}
		
		input[type="password"]
		{width: 300px;
		 padding: 7px;
		margin-bottom: 10px;}
		input[type="submit"]{
			margin-left: 150px;
			margin-top: 15px;
			padding: 8px 30px;
			border: 0px solid;
			background: #045C9B;
			color: #fff;
		
	</style>
<body>
	
	<div class="wrap">
		<h1 align=center>Book My Trip</h1>
		<?php
	include('valid.php');
	//include('pwdencryiption.php')
	?>
			<form method="get" action="">
				<label>FirstName:</label>&nbsp;&nbsp;
				<input type="text" placeholder="Enter your FirstName" name="firstname"><br><br>
				
				<label>LastName:</label>&nbsp;&nbsp;
				<input type="text" placeholder="Enter your LastName" name="lastname"><br><br>
				
 				<label>Email:</label>&nbsp;&nbsp;
				<input type="text" placeholder="Enter your email" name="email"><br><br>
				
				<label>Password:</label>&nbsp;&nbsp;
				<input type="password" placeholder="enter your password" name="password"><br><br>
				
				<label>Confirm password:</label>&nbsp;&nbsp;
				<input type="password" placeholder="enter your password" name="password2"><br><br>
				
				<label>Phone Number</label>&nbsp;&nbsp;
				<input type="number" placeholder="Enter your Number" name="number"><br><br>
				
				<label>Gender:</label>&nbsp;&nbsp;
				<input type="radio" name="gender">Male
				<input type="radio" name="gender">Female<br><br>
				
				<label>City</label>&nbsp;&nbsp;
				<select name="place">
					<option>Kerala</option>
					<option>chennai</option>
					<option>Banguluru</option>
					<option>Delhi</option>
				</select><br><br>
				
				<input type="checkbox" name="agree">I hereby agree to the terms and conditions<br><br>
				
				<input type="submit" value="Register" name="submit">
			</form>
	</div>
</body>
</html>