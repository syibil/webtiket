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
<body id="page4">
<div class="body1">
	<div class="main">
<!-- header -->
		<header>
			<div class="wrapper">
				<h1><a href="index.html" id="logo">Air Lines</a><span id="slogan">International Travel</span></h1>
				<div class="right">
					<nav>
						<ul id="top_nav">
							<li><a href="index.html"><img src="images/img1.gif" alt=""></a></li>
							<li><a href="index-4.html"><img src="images/img2.gif" alt=""></a></li>
							<li class="bg_none"><a href="#"><img src="images/img3.gif" alt=""></a></li>
						</ul>
					</nav>
					<nav>
						<ul id="menu">
							<li><a href="<?php echo site_url('welcome/index');?>">Home</a></li>
							<li><a href="<?php echo site_url('welcome/index1');?>">Booking</a></li>
							<li><a href="<?php echo site_url('welcome/index2');?>">Safety</a></li>
							<li id="menu_active"><a href="index-3.html">Charters</a></li>
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
			COMFORT<span>Guaranteed</span><p>Find and book cheap and easy tickets here!<br>Find the best deals you need!</br><br></p>
		</div>
	</div>
</div>
<!-- / header -->
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
						<div class="radio">
							<input type="radio" name="name1">Empty-Leg<br>
							<input type="radio" name="name1">Multi-Leg
						</div>
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
				<h2>Among the Benefits</h2>
				<ul class="list1 pad_bot1">
					<li><a href="#">Lipsum quia dolor consectetur</a></li>
					<li><a href="#">Vdipisci velit, sed quia numquam</a></li>
					<li><a href="#">Dius modi tempora incidunt</a></li>
					<li><a href="#">Uliquam quaerat voluptatem enim</a></li>
					<li><a href="#">Quis nostrum exercitationem</a></li>
					<li><a href="#">Ullam corporis suscipit laboriosam</a></li>
					<li><a href="#">Nisi ut aliquid</a></li>
				</ul>
				<div class="wrapper pad_bot2"><a href="#" class="button2">Read More</a></div>
			</div>
		</article>
		<article class="col2 pad_left1">
			<h2>A Premier Air Charter Services Broker</h2>
			<div class="wrapper">
				<figure class="left marg_right1"><img src="images/page4_img1.jpg" alt=""></figure>
				<p><strong>Et harum quidem</strong> facilis est et expedita distinctio nam libero tempore, cum soluta nobis:</p>
				<ul class="list1 left pad_bot1">
					<li><a href="#">Est eligendi optio cumque nihil impedit quo</a></li>
					<li><a href="#">Minus id quod maxime placeat facere possimus</a></li>
					<li><a href="#">Omnis voluptas assumenda est</a></li>
				</ul>
			</div>
			<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
			<div class="wrapper"><a href="#" class="button1">Read More</a></div>
			<h2>Aircraft for Charter</h2>
			<div class="wrapper">
				<figure class="left marg_right1"><img src="images/page4_img2.jpg" alt=""></figure>
				<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus omnis assumenda.</p>
				<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fugat harum quidem rerum.</p>
			</div>
		</article>
	</section>
<!-- / content -->
</div>
<div class="body2">
	<div class="main">
<!-- footer -->
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