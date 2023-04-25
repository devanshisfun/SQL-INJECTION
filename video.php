<?php
include('config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title> Home :: Om Choudhary</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Cruise Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- fonts -->
<link href="//fonts.googleapis.com/css?family=Cinzel:400,700,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<!-- /fonts -->
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/gallery.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/jQuery.lightninBox.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/aos.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- /css -->
<!-- js -->
<script src="js/modernizr.min.js"></script>
<!-- /js -->
</head>
<body>
<!-- topbar -->
<div class="topbar-w3ls">
	<div class="container">
		<a href="index.php" class="logo">
			<h1>
				<i class="fa fa-ship" aria-hidden="true"></i>
				Om Choudhary
				<i class="fa fa-ship" aria-hidden="true"></i>	
			</h1>
		</a>		
		
	</div>	
</div>
<!-- /topbar -->
<!-- navigation -->
<div class="navbar-wrapper" >
    <div class="container">
		<nav class="navbar navbar-inverse navbar-static-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav cl-effect-7">
						<li class="active"><a href="index.php" class="page-scroll">Back To Home</a></li>
					</ul>
				</div>
			</div>
        </nav>
	</div>
</div>
<!-- /navigation -->

<div id="block" data-vide-bg="video/cruise" data-vide-options="position: 0% 50%" style="height:200px;"> </div>	

<section class="team-w3" id="team">
	<div class="container">
    
		<h3 class="text-center">Click On Image</h3>
		<?php 
            $c_code = $_GET['id'];
			$cat=mysqli_query($con,"select * from `product` WHERE c_code='$c_code' ORDER BY name ASC");
			while($row=mysqli_fetch_array($cat))
			{$image = $row['image'];
		?>
		<div class="col-lg-3 col-md-3 col-sm-6 team-w3l1" data-aos="flip-right" style="margin-top:20px;">
			<a href="https://www.youtube.com/embed/<?php echo $row['video']?>" target="blank"><img src="<?php echo "./img/".$row['image']?>" style="height:200px;" alt="" class="img-responsive"></a>
			<h4><?php echo $row['name'];?></h4>
			<!-- <ul class="social-icons1">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
			</ul> -->
		</div>
		<?php } ?>

		<div class="clearfix"></div>	
	</div>
</section>

<!-- footer -->
<section class="footer-w3-agileits">
	<div class="container">
		<div class="col-lg-8 col-md-8">
			<ul class="w3-agile">
				<li><a href="index.php" class="page-scroll">Home</a></li>
			</ul>
		</div>
		<div class="col-lg-4 col-md-4">
			<ul class="social-icons2">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
			</ul>	
		</div>
		<div class="clearfix"></div>
		<p class="text-center">&copy; 2017 OM CHOUDHARY. All Rights Reserved | Design by <a href="https://bhartiyacoders.com/"> Harshit Jangid </a></p>
	</div>
</section>
<!-- /footer -->
<!-- back to top -->
<a href="#0" class="cd-top">Top</a>
<!-- /back to top -->
<!-- js files -->
<!-- js files -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/grayscale.js"></script>
<script src='js/aos.js'></script>
<script src="js/index.js"></script>
<!-- js for back to top -->
<script src="js/top.js"></script>
<!-- /js for back to top -->
<!-- js for about lightbox -->
<script src="js/jQuery.lightninBox.js"></script>
<script type="text/javascript">
	$(".lightninBox").lightninBox();
</script>
<!-- /js for about lightbox -->
<!-- js for gallery -->
<script src="js/jquery.picEyes.js"></script>
<script>
$(function(){
	//picturesEyes($('li'));
	$('ul.demo li').picEyes();
});
</script>
<!-- /js for gallery -->
<!-- js for banner -->
<script src="js/jquery.vide.js"></script>
<!-- /js for banner -->
<!-- /js files -->
</body>
</html>