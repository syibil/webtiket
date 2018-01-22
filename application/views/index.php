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
<body id="page1">
<div class="body1">
	<div class="main">
<!-- header -->
		<header>
			<div class="wrapper">
				<h1>
					<a href="index.html" id="logo">Air Lines</a><span id="slogan">International Travel</span>
				</h1>
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
							<li id="menu_active"><a href="index.html">Home</a></li>
							<li><a href="<?php echo site_url('welcome/index1');?>">Booking</a></li>
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
		<a href="#" class="button_top">Order Tickets Online</a>
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
					</div>
					<div class="wrapper">
						Leaving From:
						<div class="bg"><input type="text" class="input input1" value="Enter City or Airport Code" onblur="if(this.value=='') this.value='Enter City or Airport Code'" onFocus="if(this.value =='Enter City or Airport Code' ) this.value=''"></div>
					</div>
					<div class="wrapper">
						Going To:
						<div class="bg"><input type="text" class="input input1" value="Enter City or Airport Code" onblur="if(this.value=='') this.value='Enter City or Airport Code'" onFocus="if(this.value =='Enter City or Airport Code' ) this.value=''"></div>
					</div>
					<div class="wrapper">
						Departure Date and Time:
						<div class="wrapper">
							<div class="bg left"><input type="text" class="input input2" value="mm/dd/yyyy " onblur="if(this.value=='') this.value='mm/dd/yyyy '" onFocus="if(this.value =='mm/dd/yyyy ' ) this.value=''"></div>
							<div class="bg right"><input type="text" class="input input2" value="12:00am" onblur="if(this.value=='') this.value='12:00am'" onFocus="if(this.value =='12:00am' ) this.value=''"></div>
						</div>
					</div>
					<div class="wrapper">
						Return Date and Time:
						<div class="wrapper">
							<div class="bg left"><input type="text" class="input input2" value="mm/dd/yyyy " onblur="if(this.value=='') this.value='mm/dd/yyyy '" onFocus="if(this.value =='mm/dd/yyyy ' ) this.value=''"></div>
							<div class="bg right"><input type="text" class="input input2" value="12:00am" onblur="if(this.value=='') this.value='12:00am'" onFocus="if(this.value =='12:00am' ) this.value=''"></div>
						</div>
					</div>
					<div class="wrapper">
						<p>Passenger(s):</p>
						<div class="bg left"><input type="text" class="input input2" value="# passengers" onblur="if(this.value=='') this.value='# passengers'" onFocus="if(this.value =='# passengers' ) this.value=''"></div>
						<a href="#" class="button2" onClick="document.getElementById('form_1').submit()">go!</a>
					</div>
				</form>
				<h2>Recent News</h2>
				<p class="under"><a href="http://www.tribunnews.com/travel/2018/01/18/mulai-22-januari-penerbangan-internasional-airasia-pindah-ke-terminal-iii-soetta" class="link1">Mulai 22 Januari Penerbangan Internasional AirAsia Pindah ke Terminal III Soetta</a><br>18 Januari 2018</p>
				<p class="under"><a href="http://lifestyle.liputan6.com/read/3221559/ini-20-daftar-maskapai-paling-tepat-waktu-ada-dari-indonesia" class="link1">Ini 20 Daftar Maskapai Paling Tepat Waktu, Ada dari Indonesia? </a><br>11 Januari 2018</p>
				<p><a href="http://regional.liputan6.com/read/3195973/hore-xpress-air-buka-rute-penerbangan-jambi-bandung" class="link1">Xpress Air Buka Rute Penerbangan Jambi-Bandung</a><br>15 Desember 2017</p>
			</div>
		</article>
		<article class="col2 pad_left1">
			<h2>Welcome to our Guests!</h2>
			<p class="color1">Selamat Datang! dapatkan potongan 50% untuk pembelian pertama di sybltiket.com temukan kemudahan dan kenyamanan membeli tiket disini. </p>
			<div class="marker">
				<div class="wrapper">
					<p class="pad_bot2"><strong>Domestic and International Hotel Partners</strong></p>
					<p class="pad_bot2">Kami bermitra dengan jaringan hotel di seluruh dunia untuk memastikan masa inap yang nyaman dimanapun Anda bepergian!</p>
				</div>
			</div>
			<div class="wrapper pad_bot2"><a href="#" class="button1">Read More</a></div>
			<div class="marker">
				<div class="wrapper">
					<p class="pad_bot2"><strong>Various Payment Options</strong></p>
					<p class="pad_bot2">Bepergian dengan keluarga atau kelompok? Berbagai pilihan pembayaran kami seperti Payment Angsuran, Transfer ATM dan Kartu Kredit akan mengurus transaksi apapun, besar atau kecil. Tinggalkan kekhawatiranmu! </p>
				</div>
			</div>
			<div class="wrapper">
				<article class="cols">
					<h2>Why book with sybltiket.com?</h2>
					<p><strong>Honest Price</strong></p>
					<p><strong>Pembayaran Mudah</strong> dengan berbagai metode pembayaran dari ATM Transfer, Kartu Kredit, hingga Internet Banking.</p>
					<p><strong>Special Diskon</strong> khusus untuk member baru, pelanggan penerbangan, pelanggan buletin dan anggota sybltiket.com </p>
				</article>
				<div class="box1">
					<div class="pad_1">
						<div class="wrapper">
							<p class="pad_bot2">Life is too short. Enjoy your life by looking at the beauty of the world that is awarded by God. </p>
							<p><span class="right">Dr. Syibil Stark</span>&nbsp;<br></p>
						</div>
					</div>
				</div>
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