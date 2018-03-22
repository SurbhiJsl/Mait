<?php
include "link.php";
extract($_REQUEST);
if(isset($sub))
{
	if(mysqli_query($link,"insert into regis SET id='',sname='$sname',fname='$fname',mname='$mname',cmob='$cmob',gmob='$gmob',email='$email',course='$course'"))
	{
	
		header("location:index.html");
	}
	else
	{
		echo "not registered";
	}
	
	
}

$sel=mysqli_query($link,"select * from menu where id='1'");
while($arr=mysqli_fetch_array($sel))
{
$images1=$arr['image1'];
}

$sel=mysqli_query($link,"select * from menu where id='2'");
while($arr=mysqli_fetch_array($sel))
{
$title1=$arr['title'];
}

$sel=mysqli_query($link,"select * from menu where id='3'");
while($arr=mysqli_fetch_array($sel))
{
$title2=$arr['title'];
$ab1=$arr['subtitle'];
$ab2=$arr['text'];
$ab3=$arr['image1'];
$ab4=$arr['image2'];
$ab5=$arr['image3'];
$ab6=$arr['image4'];
$ab7=$arr['image5'];
}

$sel=mysqli_query($link,"select * from menu where id='4'");
while($arr=mysqli_fetch_array($sel))
{
$title3=$arr['title'];
$ad1=$arr['subtitle'];
$ad2=$arr['text'];
$ad3=$arr['image1'];
$ad4=$arr['image2'];
$ad5=$arr['image3'];
$ad6=$arr['image4'];
}

$sel=mysqli_query($link,"select * from menu where id='5'");
while($arr=mysqli_fetch_array($sel))
{
$title4=$arr['title'];
}

$sel=mysqli_query($link,"select * from menu where id='6'");
while($arr=mysqli_fetch_array($sel))
{
$title5=$arr['title'];
$ac1=$arr['subtitle'];
$ac2=$arr['text'];
$ac3=$arr['image1'];
$ac4=$arr['image2'];
$ac5=$arr['image3'];
$ac6=$arr['image4'];
$ac7=$arr['image5'];
}

$sel=mysqli_query($link,"select * from menu where id='7'");
while($arr=mysqli_fetch_array($sel))
{
$title6=$arr['title'];
}

$sel=mysqli_query($link,"select * from menu where id='8'");
while($arr=mysqli_fetch_array($sel))
{
$title7=$arr['title'];
}


?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<!-- Mirrored from 7oroof.com/tfdemos/ori/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Mar 2016 04:59:11 GMT -->
<head>

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title>Maharaja Agarsain Institute of Technology</title>
	<meta name="description" content="Maharaja Agarsain Institute of Technology">
	<meta name="author" content="2code.info">
	
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Main Style -->
	<link rel="stylesheet" href="style.css">
	
	<!-- Skins -->
	<link rel="stylesheet" href="css/skins/skins.css">
	
	<!-- Responsive Style -->
	<link rel="stylesheet" href="css/responsive.css">
	
	<!-- Favicons -->
	<link rel="shortcut icon" href="images/favicon.png">
  
</head>
<body>

<div class="loader"><div class="loader_html"></div></div>

<div id="wrap" class="grid_1200">
	
	<header id="header-top">
		<div class="container clearfix">
			<div class="row">
				<div class="col-md-6">
					<div class="phone-email"><i class="fa fa-phone"></i>09568007681</div>
					<div class="phone-email phone-email-2"><i class="fa fa-envelope"></i>mait.mailgroup@gmail.com </div>
				</div>
				<div class="col-md-6">
					<div class="social-ul">
						<ul>
							<li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li class="social-pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
							<li class="social-vimeo"><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
							<li class="social-linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li class="social-dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
							<li class="social-youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
							<li class="social-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div><!-- End container -->
	</header><!-- End header -->
	<header id="header">
		<div class="container clearfix">
			<div class="logo"><a href="index.php"><img alt="" src="images1/<?php echo $images1;?>"></a></div>
			<div class="header-search">
				
			</div>
			<nav class="navigation">
				<ul>
					<li><a href="index.php"><?php echo $title1;?></a>
						
					</li>
					<li><a href="index.php"><?php echo $title2;?></a>
						<ul>
							
									<li><a href="about.php"><?php echo $ab1;?></a></li>
									<li><a href="course.php"><?php echo $ab2;?></a></li>
									<li><a href="vm.php"><?php echo $ab3;?></a></li>
									<li><a href="advisor.php"><?php echo $ab4;?></a></li>
									<li><a href="director.php"><?php echo $ab5;?></a></li>
									<li><a href="manage.php"><?php echo $ab6;?></a></li>
									<li><a href="infra.php"><?php echo $ab7;?></a></li>
								
							
							
						</ul>
					</li>
					<li  class="current_page_item"><a href="index.php"><?php echo $title3;?></a>
						<ul>
							<li><a href="btech.php"><?php echo $ad1;?></a></li>
							<li><a href="mba.php"><?php echo $ad2;?></a></li>
							<li><a href="diploma.php"><?php echo $ad3;?></a></li>
                            <li><a href="others.php"><?php echo $ad4;?></a></li>
                            <li><a href="others.php"><?php echo $ad5;?></a></li>
                            <li><a href="adm.php"><?php echo $ad6;?></a></li>
						</ul>
					</li>
					<li><a href="gallery.php"><?php echo $title4;?></a>
						
					</li>
					<li><a href="index.php"><?php echo $title5;?></a>
						<ul>


							
									<li><a href="as.php"><?php echo $ac1;?></a></li>
									<li><a href="cse1.php"><?php echo $ac2;?></a></li>
									<li><a href="it.php"><?php echo $ac3;?></a></li>
									<li><a href="me.php"><?php echo $ac4;?></a></li>
									<li><a href="ce.php"><?php echo $ac5;?></a></li>
									<li><a href="ece.php"><?php echo $ac6;?></a></li>
								    <li><a href="mba1.php"><?php echo $ac7;?></a></li>
																	
						</ul>
					</li>
					<li><a href="tpo.php"><?php echo $title6;?></a></li>
					<li><a href="cont.php"><?php echo $title7;?></a></li>
				</ul>
			</nav><!-- End navigation -->
		</div><!-- End container -->
	</header><!-- End header -->
	
	<div class="clearfix"></div>
	
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h4>Admission</h4>
					
				</div>
				<div class="col-md-6">
					<div class="crumbs">You are here: <a href="index.php">Home</a><span class="crumbs-span">&raquo;</span><span>admission</span></div>
				</div>
			</div><!-- End row -->
		</div><!-- End container -->
	</div><!-- End breadcrumbs -->
	
	<div class="sections sections-padding-t-0">
		
		<div class="gap"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 main-content">
					<div class="row">
						<div class="col-md-9">
							<div class="section-title section-title-2 section-title-3"><h6>Registration Form For Admission Session 2016-17 :</h6></div>
							<div class="comment-form">
								<form method="post"  action="">
									<div class="row">
										<div class="col-md-6">
											<div class="form-input">
												<i class="fa fa-user"></i>
												<input name="sname" id="sname" type="text" placeholder="Student Name" required>
											</div>
										</div>
                                        <div class="col-md-6">
											<div class="form-input">
												<i class="fa fa-user"></i>
												<input name="fname" id="fname" type="text" placeholder="Father Name" required>
											</div>
										</div>
                                        <div class="col-md-6">
											<div class="form-input">
												<i class="fa fa-user"></i>
												<input name="mname" id="mname" type="text" placeholder="Mother Name" required>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-input">
												<i class="fa fa-user"></i>
												<input name="cmob" id="cmob" type="text" placeholder="Candidate Mobile" required>
											</div>
										</div>
                                        <div class="col-md-6">
											<div class="form-input">
												<i class="fa fa-user"></i>
												<input name="gmob" id="gmob" type="text" placeholder="Guardian Mobile" required>
											</div>
										</div>
                                        <div class="col-md-6">
											<div class="form-input">
												<i class="fa fa-envelope"></i>
												<input name="email" id="email" type="email" placeholder="Email" required>
											</div>
										</div>
										<div class="col-md-12">
										Application For:  <select name="course" id="select" required>
										    <option>---Course---</option>
										    <option value="b.tech">b.tech</option>
										    <option value="diploma">diploma</option>
										    <option value="mba">mba</option>
										    <option value="bba">bba</option>
										    <option value="bca">bca</option>
									      </select>
											
										</div>
                                         
												<input type="checkbox" name="check" required> I hereby declare, that the information filled by me in registration form is true to the best of my knowledge and if any information
											<p>
                                        
										<div class="col-md-12">
											<input name="sub" type="submit" class="button-3" value="Send">
										</div>
									</div><!-- End row -->
								</form>
							</div><!-- End comment-form -->
						</div>
						
					</div><!-- End row -->
				</div><!-- End main-content -->
			</div><!-- End row -->
			
		</div><!-- End container -->
	</div><!-- End sections -->
	
	

<div class="go-up"><i class="fa fa-chevron-up"></i></div>

<!-- js -->
<script src="js/jquery.min.js"></script>
<script src="js/html5.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/count-to.js"></script>
<script src="js/twitter/jquery.tweet.js"></script>
<script src="js/jquery.inview.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script src="js/jquery.themepunch.plugins.min.js"></script>
<script src="js/jquery.themepunch.revolution.min.js"></script>
<script src="js/custom.js"></script>
<!-- End js -->

</body>

</html>
<?php 
include"footer.php";
?>