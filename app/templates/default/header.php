<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/> <!-- узнать размер екрана мобильного для адаптива -->
	<title><?php echo $data['title'].' - '.SITETITLE; //SITETITLE defined in index.php?></title>
	<link rel="stylesheet" href="<?php echo url::get_template_path();?>assets/css/scale.css">
	<link rel="stylesheet" href="<?php echo url::get_template_path();?>assets/css/style.css">
	<!-- Iconos -->
    <link rel="stylesheet" href="<?php echo url::get_template_path();?>assets/font-awesome/css/font-awesome.min.css">

	<script type="text/javascript" src="<?php echo url::get_template_path();?>assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script type="text/javascript" src="<?php echo url::get_template_path();?>assets/js/cusel-min-2.5.js"></script>
	<script type="text/javascript" src="<?php echo url::get_template_path();?>assets/js/modernizr.js"></script>
	<script type="text/javascript" src="<?php echo url::get_template_path();?>assets/js/slider.js"></script>
	<script type="text/javascript" src="<?php echo url::get_template_path();?>assets/js/active.js"></script>

	
		<script
			  src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
			  integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
			  crossorigin="anonymous"></script>
	

</head>
<body>
	<a id="f-home-link" href="#"></a> <!-- якорь стрелки прокрутки -->
	<div class="wrapper">
		<div class="panel-top">
			<div class="center clearfix">
				<div class="social left">
					<a href="#" class="s-fb">&nbsp;</a>
					<a href="#" class="s-dribble">&nbsp;</a>
					<a href="#" class="s-tw">&nbsp;</a>
					<a href="#" class="s-mail">&nbsp;</a>
					<a href="#" class="s-vimeo">&nbsp;</a>
				</div>
				<div class="basket right">
					<a href="#"><span>Cart (2)</span></a>
				</div>
				<div class="login right">

				<?php if(User::isGuest()):?>
					<a href="/user/login">Login</a>
					<span>/</span>
					<a href="/user/signup">Register</a>
				<?php else:?>
					<a href="/profile">Profile</a>
					<span>/</span>
					<a href="/user/logout">LogOut</a>
				<?php endif;?>

				</div>
			</div>
		</div>
		<div id="header" class="center clearfix">
			<div id="logo" class="left">
				<a href="#">
					<img src="<?php echo url::get_template_path();?>assets/img/logo.png" height="60" width="60" alt="">
					<span>Store</span>
				</a>
			</div>
			<ul class="nav right clearfix">
				<li><a href="http://shop-prodavalos.local/"> HOME</a></li>
				<li><a href="http://shop-prodavalos.local/cd"> CD’s</a></li>
				<li><a href="http://shop-prodavalos.local/dvd"> DVD’s</a></li>
				<li><a href="http://shop-prodavalos.local/news"> NEWS</a></li>
				<li><a href="http://shop-prodavalos.local/about"> About</a></li>
				<li><a href="http://shop-prodavalos.local/contact_us"> CONTACT US</a></li>
			</ul>
		</div>
		<!-- шапка сайта -->

		