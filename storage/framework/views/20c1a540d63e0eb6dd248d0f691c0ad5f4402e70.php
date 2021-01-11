
<!DOCTYPE html>
<html lang="en">
<head>
<title>Login V6</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="https://colorlib.com/etc/lf/Login_v6/images/icons/favicon.ico" />

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v6/vendor/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v6/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v6/fonts/iconic/css/material-design-iconic-font.min.css">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v6/vendor/animate/animate.css">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v6/vendor/css-hamburgers/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v6/vendor/animsition/css/animsition.min.css">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v6/vendor/select2/select2.min.css">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v6/vendor/daterangepicker/daterangepicker.css">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v6/css/util.css">
<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v6/css/main.css">

</head>
<body>
<div class="limiter">
<div class="container-login100">
<div class="wrap-login100 p-t-85 p-b-20">
<form class="login100-form validate-form">
<span class="login100-form-title p-b-70">
Welcome
</span>
<span class="login100-form-avatar">
<img src="https://colorlib.com/etc/lf/Login_v6/images/avatar-01.jpg" alt="AVATAR">
</span>
<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate="Enter username">
<input class="input100" type="text" name="username">
<span class="focus-input100" data-placeholder="Username"></span>
</div>
<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
<input class="input100" type="password" name="pass">
<span class="focus-input100" data-placeholder="Password"></span>
</div>
<div class="container-login100-form-btn">
<a class="login100-form-btn" href="<?php echo e(route('dashboard')); ?>">
Login
</a>
</div>
<ul class="login-more p-t-190">
<li class="m-b-8">
<span class="txt1">
Forgot
</span>
<a href="#" class="txt2">
Username / Password?
</a>
</li>
<li>
<span class="txt1">
Don’t have an account?
</span>
<a href="<?php echo e(route('signup')); ?>" class="txt2">
Sign up
</a>
</li>
</ul>
</form>
</div>
</div>
</div>
<div id="dropDownSelect1"></div>

<script src="https://colorlib.com/etc/lf/Login_v6/vendor/jquery/jquery-3.2.1.min.js"></script>

<script src="https://colorlib.com/etc/lf/Login_v6/vendor/animsition/js/animsition.min.js"></script>

<script src="https://colorlib.com/etc/lf/Login_v6/vendor/bootstrap/js/popper.js"></script>
<script src="https://colorlib.com/etc/lf/Login_v6/vendor/bootstrap/js/bootstrap.min.js"></script>

<script src="https://colorlib.com/etc/lf/Login_v6/vendor/select2/select2.min.js"></script>

<script src="https://colorlib.com/etc/lf/Login_v6/vendor/daterangepicker/moment.min.js"></script>
<script src="https://colorlib.com/etc/lf/Login_v6/vendor/daterangepicker/daterangepicker.js"></script>

<script src="https://colorlib.com/etc/lf/Login_v6/vendor/countdowntime/countdowntime.js"></script>

<script src="https://colorlib.com/etc/lf/Login_v6/js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\project\resources\views/frontend/layouts/signin.blade.php ENDPATH**/ ?>