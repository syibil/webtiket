<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<meta charset="utf-8">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_italic_600.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_italic_400.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<!--[if lt IE 9]>
	<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
	<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
</head>
<body id="page2">
<div class="body1">
	<div class="main">
<!-- header -->
		<header>
			<div class="wrapper">
				<h1><a href="index.html" id="logo">Air Lines</a><span id="slogan">International Travel</span></h1>
				<div class="right">
					<nav>
						<ul id="top_nav">
							<li><a href="<?php echo base_url()?>application/view/index.html"><img src="images/img1.gif" alt=""></a></li>
							<li><a href="<?php echo base_url()?>application/view/index-4.html"><img src="images/img2.gif" alt=""></a></li>
							<li class="bg_none"><a href="#"><img src="images/img3.gif" alt=""></a></li>
						</ul>
					</nav>
					<nav>
						<ul id="menu">
							<li><a href="<?php echo site_url('welcome/index');?>">Home</a></li>
							<li id="menu_active"><a href="index-1.html">Booking</a></li>
							<li><a href="<?php echo site_url('welcome/index2');?>">Safety</a></li>
							<li><a href="<?php echo site_url('welcome/index3');?>">Charters</a></li>
							<li><a href="<?php echo site_url('welcome/index4');?>">Contacts</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
	</div>
</div>
<div class="main">
	<div id="banner">
		<div class="text1">
			COMFORT<span>Guaranteed</span><p>Find and book cheap and easy tickets here!<br>Find the best deals you need!</br><br><br>Save up to 20% on Flight Package by using promo code. Order now!</br></p>
		</div>
	</div>
</div>
<!-- header -->
<div class="main">
<!-- content -->
	<section id="content">
		<article class="col1">
			<div class="pad_1">
				<h2>Your Flight Planner</h2>
				<form id="form_1" action="" method="post">
					<div class="wrapper pad_bot1">
						<div class="radio marg_right1">
							<input type="radio" name="name1">Round Trip<br>
							<input type="radio" name="name1">One Way
						</div>
					<div class="wrapper">
						Leaving From:
						<div class="bg"><input type="text" class="input input1" value="Enter City or Airport Code" onBlur="if(this.value=='') this.value='Enter City or Airport Code'" onFocus="if(this.value =='Enter City or Airport Code' ) this.value=''"></div>
					</div>
					<div class="wrapper">
						Going To:
						<div class="bg"><input type="text" class="input input1" value="Enter City or Airport Code" onBlur="if(this.value=='') this.value='Enter City or Airport Code'" onFocus="if(this.value =='Enter City or Airport Code' ) this.value=''"></div>
					</div>
					<div class="wrapper">
						Departure Date and Time:
						<div class="wrapper">
							<div class="bg left"><input type="text" class="input input2" value="mm/dd/yyyy " onBlur="if(this.value=='') this.value='mm/dd/yyyy '" onFocus="if(this.value =='mm/dd/yyyy ' ) this.value=''"></div>
							<div class="bg right"><input type="text" class="input input2" value="12:00am" onBlur="if(this.value=='') this.value='12:00am'" onFocus="if(this.value =='12:00am' ) this.value=''"></div>
						</div>
					</div>
					<div class="wrapper">
						Return Date and Time:
						<div class="wrapper">
							<div class="bg left"><input type="text" class="input input2" value="mm/dd/yyyy " onBlur="if(this.value=='') this.value='mm/dd/yyyy '" onFocus="if(this.value =='mm/dd/yyyy ' ) this.value=''"></div>
							<div class="bg right"><input type="text" class="input input2" value="12:00am" onBlur="if(this.value=='') this.value='12:00am'" onFocus="if(this.value =='12:00am' ) this.value=''"></div>
						</div>
					</div>
					<div class="wrapper">
						<p>Passenger(s):</p>
						<div class="bg left"><input type="text" class="input input2" value="# passengers" onBlur="if(this.value=='') this.value='# passengers'" onFocus="if(this.value =='# passengers' ) this.value=''"></div>
						<a href="#" class="button2" onClick="document.getElementById('form_1').submit()">go!</a>
					</div>
				</form>
				<h2>Did You Know?</h2>
				<p><strong>Lorem ipsum dolor</strong> sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo. </p>
			</div>
		</article>
		<article class="col2 pad_left1">
			<h2>Ingin mendapat potongan harga?</h2>
			<div class="wrapper">
				<figure class="left marg_right1"><img src="images/page2_img1.jpg" alt=""></figure>
				<p><strong> - First order</strong> dapatkan potongan hingga 40% untuk pertama order.</p>
				<p><strong> - Gunakan kode promo</strong> dapatkan potongan hingga 20% untuk penggunaan kode promo.</p>
				<p><strong> - Potongan harga member</strong> dapatkan potongan hingga 10% untuk member.</p>
			</div>
		</article>
	</section>
<!-- / content -->
</div>
<div class="body2">
	<div class="main">
<!--footer -->
		<footer>
			<a href="http://www.templatemonster.com/" target="_blank" rel="nofollow">www.templatemonster.com</a><br>
			<a href="http://www.templates.com/product/3d-models/" target="_blank" rel="nofollow">www.templates.com</a>
		</footer>
<!-- / footer -->
	</div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>