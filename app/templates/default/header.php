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

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script type="text/javascript" src=<?php echo url::get_template_path();?>"assets/js/cusel-min-2.5.js"></script>

	<script>
		$( function() {
		    $( "#slider-range" ).slider({
			    range: true,
			    min: 0,
			    max: 300,
			    values: [ 6, 130 ],
			    slide: function( event, ui ) {
			       $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
			    }
		    });

		    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
		      " - $" + $( "#slider-range" ).slider( "values", 1 ) );

			/* select style */
				var params = {
					changedEl: "select",
					visRows: 5,
					scrollArrows: true
				}
				cuSel(params);
		  	} );
	</script>

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
					<img src="img/logo.png" height="60" width="60" alt="">
					<span>Store</span>
				</a>
			</div>
			<ul class="nav right clearfix">
				<li class="active"><a href="#"> HOME</a></li>
				<li><a href="#"> CD’s</a></li>
				<li><a href="#"> DVD’s</a></li>
				<li><a href="#"> NEWS</a></li>
				<li><a href="#"> PORTFOLIO</a></li>
				<li><a href="#"> CONTACT US</a></li>
			</ul>
		</div>
		<!-- шапка сайта -->

		<div id="home">
			<div class="home-bg">
				<div class="center">
					<a href="/" class="home-link right">&nbsp;</a>
					<h2 class="title-home">
						SHOP - SIDEBAR ON THE RIGHT
					</h2>
					<ul class="breadcrumbs clearfix">
						<li>
							<a href="#">Home</a>
							<span class="sp">&raquo;</span>
						</li>
						<li>
							<a href="#">Shop</a>
							<span class="sp">&raquo;</span>
						</li>
						<li><span>Sidebar on the right</span></li>
					</ul>
				</div>
			</div>
		</div>