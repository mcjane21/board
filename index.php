<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <title>PapMApp</title>
	<link rel="icon" href="include/assets/img/logo/title-logo.png" type="image/x-icon">
  <link rel="stylesheet" href="include/assets/css/vendor.bundle.css">
  <link rel="stylesheet" href="include/assets/css/app.bundle.css">
  <link rel="stylesheet" href="include/assets/css/theme-a.css">

</head>
<body id="auth_wrapper" >
<div id="login_wrapper">
  <div class="logo">
	<img src="include/assets/img/logo/bu-logofinal.png">
  </div>
  <div id="login_content">
	<h1 class="login-title">
	  Sign in to your account
	</h1>
	<div class="login-body">
	  <form action = "" method = "post" id = "frmLogin">
		<div class="form-group has-error">
		  <label class="control-label" for="inputError1"><?php if(isset($message)) { echo $message;} ?></label>
		</div>
		<div class="form-group">
		  <label class="control-label">Username</label>
		  <input type="text" id="uname" class="form-control input-mask" data-rule-required="true" name="member_name" minlength="2" aria-required="true" placeholder="eg:julia.mendiola"value="<?php if(isset($_COOKIE['member_login'])){echo $_COOKIE['member_login'];}?>">
		</div>
		<div class="form-group">
		  <label class="control-label">Password</label>
		  <input type="password" class="form-control input-mask" name="member_password" id="password" value="<?php if(isset($_COOKIE["member_password"])) { echo $_COOKIE["member_password"]; } ?>">
		</div>
		<div class="checkbox inline-block">
		  <label>
			<input type="checkbox" class="checkbox-inline" name = "remember" id = "remember" <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?>>
			Remember Me
		  </label>
		</div>
		<div class="card" id="sweet_alerts_card">
		  <button type="submit" name = "login" id="sweet-login" value = "Login" class="btn btn-info btn-block m-t-40">Sign In</button>
		  <!--<a href="index.php" class="btn btn-info btn-block m-t-40">Sign In</a>-->
		</div>
	  </form>
	</div>
  </div>
</div>

<script src="include/assets/js/vendor.bundle.js"></script>
<script src="include/assets/js/app.bundle.js"></script>
<script src="include/assets/js/app.js"></script>

</body>
</html>
<?php $mysqli->close();?>/