<?php

$user='Ajay';
$pwd='ajay123';
$errmsg='';
$error='false';

if(isset($_POST['submit']))
{
	$loginuser=$_POST['username'];
	$loginpwd=$_POST['password'];
	if($loginuser==$user)
	{
		if($loginpwd==$pwd)
		{
			session_start();
			$_SESSION['myuser']=$loginuser;
			header('Location:homepage.php');
		}
		else{
			$errmsg="password is incorect";
			$error='true';
		}
	}
	
	else{
		$errmsg="username is wrong";
		$error=true;
	}
}

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<style>
		body{
			background:url(images/wp2662287.jpg);
			background-size:cover;
			
		}
		.container{
			width: 250px;
			height: 190px;
			background: #FFFFFF;
			padding: 20px;
			margin: 0 auto;
		}
		
		input[type="text"]{
			width: 150px;
		    padding: 7px;
			margin-bottom: 10px;
		}
		
		input[type="password"]{
			width: 150px;
		    padding: 7px;
			margin-bottom: 10px;
		}
	</style>
</head>

<body>
	<div id="wrap">
		<div class="container">
			<?php
			if(isset($_POST['submit']))
				if($error)
					echo "{$errmsg}";
			?>
			
			<form method="post">
				<h3>Log in</h3>
				<p>Username&nbsp;&nbsp;</p><br>
				<input type="text" name="username" maxlength="30"><br>
				<p>Password&nbsp;&nbsp;</p><br>
				<input type="password" name="password" maxlength="30"><br>
				<input type="submit" name="submit">
			</form>
		</div>
	</div>
</body>
</html>