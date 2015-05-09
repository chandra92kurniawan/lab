<!doctype html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	
	<title>MUNTER - Free Bootstrap 3 One Page Theme</title> 
	<meta name="description" content="BlackTie.co - Free Handsome Bootstrap Themes" />	    
	<meta name="keywords" content="themes, bootstrap, free, templates, bootstrap 3, freebie,">
	<meta property="og:title" content="">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>munter/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>munter/fancybox/jquery.fancybox-v=2.1.5.css" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url()?>munter/css/font-awesome.min.css" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>munter/css/style.css">	
	
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,600,300,200&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	
	<style type="text/css">
		.th{
		    background:#5cb85c;
		    color:white;
		    border-color: #4cae4c;
		}
	</style>
	<link rel="prefetch" href="<?php echo base_url()?>munter/images/zoom.png">
	

    <link href="<?php echo base_url()?>munter/table/dataTables.bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url()?>munter/table/dataTables.responsive.css" rel="stylesheet">
    <!--<script src="http:////cdn.datatables.net/responsive/1.0.1/js/dataTables.responsive.min.js"></script>-->
</head>

<body>
	<div class="navbar navbar-fixed-top" data-activeslide="1">
		<div class="container">
		
			<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			
			
			<div class="nav-collapse collapse navbar-responsive-collapse">
				<ul class="nav row">
					<li data-slide="1" class="col-12 col-sm-2"><a id="menu-link-1" href="#slide-1" title="Home"><span class="icon icon-home"></span> <span class="text">HOME</span></a></li>
					<li data-slide="2" class="col-12 col-sm-2"><a id="menu-link-2" href="#slide-2" title="Private SMS"><span class="icon icon-user"></span> <span class="text">Private SMS</span></a></li>
					<li data-slide="3" class="col-12 col-sm-2"><a id="menu-link-3" href="#slide-3" title="Next Section"><span class="icon icon-briefcase"></span> <span class="text">TES</span></a></li>
					<li data-slide="4" class="col-12 col-sm-2"><a id="menu-link-4" href="#slide-4" title="Broadcast SMS"><span class="icon icon-gears"></span> <span class="text">Broadcast SMS</span></a></li>
					<li data-slide="5" class="col-12 col-sm-2"><a id="menu-link-5" href="#slide-5" title="Broadcast Nilai"><span class="icon icon-heart"></span> <span class="text">Broadcast Nilai</span></a></li>
					<li data-slide="6" class="col-12 col-sm-2"><a id="menu-link-6" href="#slide-6" title="Report"><span class="icon icon-envelope"></span> <span class="text">Report</span></a></li>
				</ul>
				<div class="row">
					<div class="col-sm-2 active-menu"></div>
				</div>
			</div><!-- /.nav-collapse -->
		</div><!-- /.container -->
	</div><!-- /.navbar -->
	
	
	<!-- === Arrows === -->
	<div id="arrows">
		<div id="arrow-up" class="disabled"></div>
		<div id="arrow-down"></div>
		<div id="arrow-left" class="disabled visible-lg"></div>
		<div id="arrow-right" class="disabled visible-lg"></div>
	</div><!-- /.arrows -->
	
	
	<!-- === MAIN Background === -->
	<div class="slide story" id="slide-1" data-slide="1">
		<div class="container">
			<div id="home-row-1" class="row clearfix">
				<div class="col-12">
					<h1 class="font-semibold">MUNTER <span class="font-thin">DESIGN</span></h1>
					<h4 class="font-thin">We are an <span class="font-semibold">independent interactive agency</span> based in London.</h4>
					<br>
					<br>
				</div><!-- /col-12 -->
			</div><!-- /row -->
			<div id="home-row-2" class="row clearfix">
				<div class="col-12 col-sm-4"><div class="home-hover navigation-slide" data-slide="2"><img src="<?php echo base_url()?>munter/images/s02.png"></div><span>Private SMS</span></div>
				<div class="col-12 col-sm-4"><div class="home-hover navigation-slide" data-slide="4"><img src="<?php echo base_url()?>munter/images/s01.png"></div><span>Broadcast SMS</span></div>
				<div class="col-12 col-sm-4"><div class="home-hover navigation-slide" data-slide="5"><img src="<?php echo base_url()?>munter/images/s03.png"></div><span>SUITABLE</span></div>
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /slide1 -->
	
	<!-- === Slide 2 === -->
	<div class="slide story" style="min-height:800px" id="slide-2" data-slide="2">
		<div class="container">
			<div class="row title-row">
				<div class="col-12 font-thin"><span class="font-semibold">Private</span> SMS</div>
			</div>
			<div class="row line-row">
				<div class="hr">&nbsp;</div>
			</div>
			<div class="row title-row">
				<div class="col-12 font-thin"></div>
			</div><!-- /row -->
			<!--<div class="row line-row">
				<div class="hr">&nbsp;</div>
			</div><!-- /row 
			<div class="row subtitle-row">
				<div class="col-12 font-thin">This is what <span class="font-semibold">we do best</span></div>
			</div><!-- /row -->
			<div class="row">
				<div class="col-md-12">
					<form class="form-horizontal" method="POST" action="<?php echo base_url()?>front/kirim_sms">
						<div class="form-group">
						    <label for="inputEmail3" class="col-sm-2 control-label">Orang tua/Wali dari</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" name="nomor" id="inputEmail3" placeholder="Masukan NIS atau NAMA SISWA">
						    </div>
						</div>
						<div class="form-group">
						    <label for="inputEmail3" class="col-sm-2 control-label">Nama Orang tua/Wali</label>
						    <div class="col-sm-10">
						      <input type="email" class="form-control" id="inputEmail3" readonly="" placeholder="">
						    </div>
						</div>
						<div class="form-group">
						    <label for="inputEmail3" class="col-sm-2 control-label">No handphone</label>
						    <div class="col-sm-10">
						      <input type="email" class="form-control" id="inputEmail3" readonly="">
						    </div>
						</div>
						<div class="form-group">
						    <label for="text" name="pesan" class="col-sm-2 control-label">Isi Pesan</label>
						    <div class="col-sm-10">
						      <textarea class="form-control"></textarea>
						    </div>
						</div>
						<div class="form-group">
						    
						    <div class="col-sm-12">
						      <input style="width:100px" type="submit" class="subscribe-submit btn btn-lg btn-success" value="Kirim"> <button style="width:100px" type="reset" class="btn btn-lg btn-danger">Reset</button> 
						    </div>
						</div>
					</form>
				</div>
			</div>
			<!--<div class="row content-row">
				<div class="col-12 col-lg-3 col-sm-6">
					<p><i class="icon icon-eye-open"></i></p>
					<h2 class="font-thin">Visual <span class="font-semibold">Identity</span></h2>
					<h4 class="font-thin">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
				</div><!-- /col12 -->
			<!--<div class="col-12 col-lg-3 col-sm-6">
					<p><i class="icon icon-laptop"></i></p>
					<h2 class="font-thin">Web <span class="font-semibold">Design</span></h2>
					<h4 class="font-thin">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
				</div><!-- /col12 -->
			<!--<div class="col-12 col-lg-3 col-sm-6">
					<p><i class="icon icon-tablet"></i></p>
					<h2 class="font-thin">Mobile <span class="font-semibold">Apps</span></h2>
					<h4 class="font-thin">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
				</div><!-- /col12 -->
			<!--<div class="col-12 col-lg-3 col-sm-6">
					<p><i class="icon icon-pencil"></i></p>
					<h2 class="font-semibold">Development</h2>
					<h4 class="font-thin">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
				</div><!-- /col12 -->
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /slide2 -->
	
	<!-- === SLide 3 - Portfolio -->
	<div class="slide story" id="slide-3" data-slide="3">
		<div class="row">
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="<?php echo base_url()?>munter/images/portfolio/p01-large.jpg"><img class="thumb" src="<?php echo base_url()?>munter/images/portfolio/p01-small.jpg" alt=""></a></div>
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="<?php echo base_url()?>munter/images/portfolio/p02-large.jpg"><img class="thumb" src="<?php echo base_url()?>munter/images/portfolio/p02-small.jpg" alt=""></a></div>
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="<?php echo base_url()?>munter/images/portfolio/p09-large.jpg"><img class="thumb" src="<?php echo base_url()?>munter/images/portfolio/p09-small.jpg" alt=""></a></div>
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="<?php echo base_url()?>munter/images/portfolio/p010-large.jpg"><img class="thumb" src="<?php echo base_url()?>munter/images/portfolio/p10-small.jpg" alt=""></a></div>
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="<?php echo base_url()?>munter/images/portfolio/p05-large.jpg"><img class="thumb" src="<?php echo base_url()?>munter/images/portfolio/p05-small.jpg" alt=""></a></div>
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="<?php echo base_url()?>munter/images/portfolio/p06-large.jpg"><img class="thumb" src="<?php echo base_url()?>munter/images/portfolio/p06-small.jpg" alt=""></a></div>
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="<?php echo base_url()?>munter/images/portfolio/p07-large.jpg"><img class="thumb" src="<?php echo base_url()?>munter/images/portfolio/p07-small.jpg" alt=""></a></div>
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="<?php echo base_url()?>munter/images/portfolio/p08-large.jpg"><img class="thumb" src="<?php echo base_url()?>munter/images/portfolio/p08-small.jpg" alt=""></a></div>
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="<?php echo base_url()?>munter/images/portfolio/p03-large.jpg"><img class="thumb" src="<?php echo base_url()?>munter/images/portfolio/p03-small.jpg" alt=""></a></div>
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="<?php echo base_url()?>munter/images/portfolio/p04-large.jpg"><img class="thumb" src="<?php echo base_url()?>munter/images/portfolio/p04-small.jpg" alt=""></a></div>
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="<?php echo base_url()?>munter/images/portfolio/p11-large.jpg"><img class="thumb" src="<?php echo base_url()?>munter/images/portfolio/p11-small.jpg" alt=""></a></div>
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="<?php echo base_url()?>munter/images/portfolio/p12-large.jpg"><img class="thumb" src="<?php echo base_url()?>munter/images/portfolio/p12-small.jpg" alt=""></a></div>
		</div><!-- /row -->
	</div><!-- /slide3 -->
	
	<!-- === Slide 4 - Process === -->
	<div class="slide story" style="min-height:800px" id="slide-4" data-slide="4">
		<div class="container">
			<div class="row title-row">
				<div class="col-12 font-thin"><span class="font-semibold">Broadcast</span> SMS</div>
			</div><!-- /row -->
			<div class="row line-row">
				<div class="hr">&nbsp;</div>
			</div><!-- /row -->
			<div class="row title-row">
				<div class="col-12 font-thin"></div>
			</div>
			<form class="form-horizontal">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Orangtua dari kelas</label>
					<div class="col-sm-10">
					    <select class="form-control"><option>A</option><option>B</option></select>
					</div>					
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Isi Pesan</label>
					<div class="col-sm-10">
					    <textarea class="form-control"></textarea>
					</div>					
				</div>
				<div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label"></label>
				    <div class="col-sm-10">
				      <button style="width:100px" class="btn btn-lg btn-success" >Kirim</button> <button style="width:100px" class="btn btn-lg btn-danger">Reset</button> 
				    </div>
			    </div>
			</form>
			<!-- /row -->
		</div><!-- /container -->
	</div><!-- /slide4 -->
	
	<!-- === Slide 5 === -->
	<div class="slide story" style="min-height:800px" id="slide-5" data-slide="5">
		<div class="container">
			<div class="row title-row">
				<div class="col-12 font-thin"><span class="font-semibold">Broadcast Nilai</span></div>
			</div><!-- /row -->
			<div class="row line-row">
				<div class="hr">&nbsp;</div>
			</div><!-- /row -->
			<br>
			<form class="form-horizontal">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Kelas</label>
					<div class="col-sm-8">
					    <select class="form-control"><option>A</option><option>B</option></select>
					</div>	
					<div class="col-sm-1">
						<button class="btn btn-primary">Tampilkan</button>
					</div>				
				</div>
			</form>
			<div class="row line-row">
				<div class="hr">&nbsp;</div>
			</div><!-- /row -->
			<br>
			<form class="form-horizontal">
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Hal</label>
						<div class="col-sm-8">
						    <input type="text" class="form-control">
						</div>									
					</div>
				</div>
			<div class="row line-row">
				<div class="hr">&nbsp;</div>
			</div><br>
				<div class="col-6">
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-8 control-label">11113795 - Mochammad Chandra Kurniawan</label>
						<div class="col-sm-2">
						    <input type="text" class="form-control">
						</div>									
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-8 control-label">11113795 - Mochammad Chandra Kurniawan</label>
						<div class="col-sm-2">
						    <input type="text" class="form-control">
						</div>									
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-8 control-label">11113795 - Mochammad Chandra Kurniawan</label>
						<div class="col-sm-2">
						    <input type="text" class="form-control">
						</div>									
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-8 control-label">11113795 - Mochammad Chandra Kurniawan</label>
						<div class="col-sm-2">
						    <input type="text" class="form-control">
						</div>									
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-8 control-label">11113795 - Mochammad Chandra Kurniawan</label>
						<div class="col-sm-2">
						    <input type="text" class="form-control">
						</div>									
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-8 control-label">11113795 - Mochammad Chandra Kurniawan</label>
						<div class="col-sm-2">
						    <input type="text" class="form-control">
						</div>									
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-8 control-label">11113795 - Mochammad Chandra Kurniawan</label>
						<div class="col-sm-2">
						    <input type="text" class="form-control">
						</div>									
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-8 control-label">11113795 - Mochammad Chandra Kurniawan</label>
						<div class="col-sm-2">
						    <input type="text" class="form-control">
						</div>									
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-8 control-label">11113795 - Mochammad Chandra Kurniawan</label>
						<div class="col-sm-2">
						    <input type="text" class="form-control">
						</div>									
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-8 control-label">11113795 - Mochammad Chandra Kurniawan</label>
						<div class="col-sm-2">
						    <input type="text" class="form-control">
						</div>									
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-8 control-label">11113795 - Mochammad Chandra Kurniawan</label>
						<div class="col-sm-2">
						    <input type="text" class="form-control">
						</div>									
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-8 control-label">11113795 - Mochammad Chandra Kurniawan</label>
						<div class="col-sm-2">
						    <input type="text" class="form-control">
						</div>									
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-8 control-label">11113795 - Mochammad Chandra Kurniawan</label>
						<div class="col-sm-2">
						    <input type="text" class="form-control">
						</div>									
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-8 control-label">11113795 - Mochammad Chandra Kurniawan</label>
						<div class="col-sm-2">
						    <input type="text" class="form-control">
						</div>									
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-8 control-label">11113795 - Mochammad Chandra Kurniawan</label>
						<div class="col-sm-2">
						    <input type="text" class="form-control">
						</div>									
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-8 control-label">11113795 - Mochammad Chandra Kurniawan</label>
						<div class="col-sm-2">
						    <input type="text" class="form-control">
						</div>									
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-8 control-label">11113795 - Mochammad Chandra Kurniawan</label>
						<div class="col-sm-2">
						    <input type="text" class="form-control">
						</div>									
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-8 control-label">11113795 - Mochammad Chandra Kurniawan</label>
						<div class="col-sm-2">
						    <input type="text" class="form-control">
						</div>									
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-8 control-label">11113795 - Mochammad Chandra Kurniawan</label>
						<div class="col-sm-2">
						    <input type="text" class="form-control">
						</div>									
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-8 control-label">11113795 - Mochammad Chandra Kurniawan</label>
						<div class="col-sm-2">
						    <input type="text" class="form-control">
						</div>									
					</div>
				</div>
				
				<div class="col-md-12">
				
					<br>
					<div class="form-group">
					    
					    <div class="col-sm-12">
					      <button style="width:100px" class="btn btn-lg btn-success" >Kirim</button> <button style="width:100px" class="btn btn-lg btn-danger">Reset</button> 
					    </div>
				    </div>
				</div>
			</div>
			</form>
			<!-- /row -->
		</div><!-- /container -->
	</div><!-- /slide5 -->
	
	<!-- === Slide 6 / Contact === -->
	<div class="slide story" id="slide-6" data-slide="6">
		<div class="container">
			<div class="row title-row">
				<div class="col-12 font-light">Leave us a <span class="font-semibold">message</span></div>
			</div><!-- /row -->
			<div class="row line-row">
				<div class="hr">&nbsp;</div>
			</div><!-- /row -->
			<div class="row subtitle-row">
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
				<div class="col-12 col-sm-10 font-light">You can find us literally anywhere, just push a button and we’re there</div>
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
			</div><!-- /row -->
			<div id="contact-row-4" class="row">
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
				<div class="col-12 col-sm-2 with-hover-text">
					<p><a target="_blank" href="#"><i class="icon icon-phone"></i></a></p>
					<span class="hover-text font-light ">+44 4839-4343</span></a>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-2 with-hover-text">
					<p><a target="_blank" href="#"><i class="icon icon-envelope"></i></a></p>
					<span class="hover-text font-light ">munter@blacktie.co</span></a>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-2 with-hover-text">
					<p><a target="_blank" href="#"><i class="icon icon-home"></i></a></p>
					<span class="hover-text font-light ">London, England<br>zip code 98443</span></a>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-2 with-hover-text">
					<p><a target="_blank" href="#"><i class="icon icon-facebook"></i></a></p>
					<span class="hover-text font-light ">facebook/blacktie_co</span></a>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-2 with-hover-text">
					<p><a target="_blank" href="#"><i class="icon icon-twitter"></i></a></p>
					<span class="hover-text font-light ">@BlackTie_co</span></a>
				</div><!-- /col12 -->
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /Slide 6 -->
	
</body>

	<!-- SCRIPTS -->
	<script src="<?php echo base_url()?>munter/js/html5shiv.js"></script>
	<script src="<?php echo base_url()?>munter/js/jquery-1.10.2.min.js"></script>
	<script src="<?php echo base_url()?>munter/js/jquery-migrate-1.2.1.min.js"></script>
	<script src="<?php echo base_url()?>munter/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url()?>munter/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>munter/fancybox/jquery.fancybox.pack-v=2.1.5.js"></script>
	<script src="<?php echo base_url()?>munter/js/script.js"></script>
	
	<!-- fancybox init -->

    <script src="<?php echo base_url()?>munter/table/jquery.dataTables.min.js"></script>
    
    <script src="<?php echo base_url()?>munter/table/dataTables.bootstrap.js"></script>

    
	<script>
	$(document).ready(function(e) {
		var lis = $('.nav > li');
		menu_focus( lis[0], 1 );
		
		$(".fancybox").fancybox({
			padding: 10,
			helpers: {
				overlay: {
					locked: false
				}
			}
		});
	
	});
	</script>
	<script>
        $(function(){
		    $(".dt_table").dataTable({
		        "bPaginate": true,
		        "bLengthChange": false,
		        "bFilter": true,
		        "bSort": true,
		        "bInfo": true,
		        "bAutoWidth": false,
		        //"pagingType": "full_numbers",
		        "language": {
		            "emptyTable":     "Tidak ada data",
		            "info":           "_START_ - _END_ Dari _TOTAL_ Data",
		            "infoEmpty":      "Showing 0 to 0 of 0 entries",
		            "infoFiltered":   "(filtered from _MAX_ total entries)",
		            "infoPostFix":    "",
		            "thousands":      ",",
		            "lengthMenu":     "Show _MENU_ entries",
		            "loadingRecords": "Loading...",
		            "processing":     "Processing...",
		            "search":         "Pencarian: ",
		            "zeroRecords":    "No matching records found",
		            "paginate": {
		                "first":      "Awal",
		                "last":       "Terakhir",
		                "next":       "Selanjutnya",
		                "previous":   "Sebelumnya"
		            },
		            "aria": {
		                "sortAscending":  ": activate to sort column ascending",
		                "sortDescending": ": activate to sort column descending"
		            }
		        }
		    });
		});
    </script>
    <script>
        $(document).ready(function() {
            $('#example').dataTable({
                responsive: true
            });
        });
    </script>
</html>