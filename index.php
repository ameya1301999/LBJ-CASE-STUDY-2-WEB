<?php
	session_start();
	include('conn.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>LBJ CASE STUDY 2</title>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
	
<div class="bg-image" style="
	background-image: url('https://getwallpapers.com/wallpaper/full/7/c/6/765090-most-popular-technology-background-images-1920x1080-hd-for-mobile.jpg');
	height: 100vh;">

<div class="container">	
    <div class="row" style="margin-top: 50px;">
	<div class="col-md-4 col-md-offset-4">
    <div class="panel panel-default">
	<div class="panel-heading">
	<h3 class="panel-title">SIGN IN</h3>
</div>
	<div class="panel-body">	
		<form method="POST" action="login.php">
			<fieldset>
			<div class="form-group">
			<label>Username:</label> 
			<input type="text" value="<?php if (isset($_COOKIE["user"])){echo $_COOKIE["user"];}?>" name="username">
			</div>
			<label>Password:</label> 
			<input type="password" value="<?php if (isset($_COOKIE["pass"])){echo $_COOKIE["pass"];}?>" name="password"><br><br>
			<input type="checkbox" name="remember" <?php if (isset($_COOKIE["user"]) && isset($_COOKIE["pass"])){ echo "checked";}?>> Remember me <br><br>
			<input class="btn btn-primary" type="submit" value="Login" name="login">
 			<span>
				<?php
					if (isset($_SESSION['message'])){
					echo $_SESSION['message'];
					}
					unset($_SESSION['message']);
				?>
			</span>
			</fieldset>
		</form>
	</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>



	
</body>
</html>