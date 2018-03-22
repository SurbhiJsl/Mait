<?php
include "link.php";
$sel=mysqli_query($link,"select * from home where id='1'");
while($arr=mysqli_fetch_array($sel))
{
$t1=$arr['title'];
$s1=$arr['subtitle'];
$i1=$arr['image1'];
$i2=$arr['image2'];
$i3=$arr['image3'];
$i4=$arr['image4'];

}

$sel=mysqli_query($link,"select * from home where id='2'");
while($arr=mysqli_fetch_array($sel))
{
$t2=$arr['title'];
$tx1=$arr['text'];
}

$sel=mysqli_query($link,"select * from home where id='3'");
while($arr=mysqli_fetch_array($sel))
{
$t3=$arr['title'];
$s2=$arr['subtitle'];
$tx2=$arr['text'];
}

$sel=mysqli_query($link,"select * from home where id='4'");
while($arr=mysqli_fetch_array($sel))
{
$t3=$arr['title'];
$s3=$arr['subtitle'];
$tx3=$arr['text'];
}

$sel=mysqli_query($link,"select * from home where id='5'");
while($arr=mysqli_fetch_array($sel))
{
$t3=$arr['title'];
$tx4=$arr['text'];
$im1=$arr['image1'];
$im2=$arr['image2'];
$im3=$arr['image3'];
$im4=$arr['image4'];
}

$sel=mysqli_query($link,"select * from home where id='6'");
while($arr=mysqli_fetch_array($sel))
{
$t4=$arr['title'];
$s4=$arr['subtitle'];
$tx5=$arr['text'];
$img=$arr['image1'];
}

$sel=mysqli_query($link,"select * from home where id='7'");
while($arr=mysqli_fetch_array($sel))
{

$s5=$arr['subtitle'];
$tx6=$arr['text'];

}

$sel=mysqli_query($link,"select * from home where id='8'");
while($arr=mysqli_fetch_array($sel))
{

$s6=$arr['subtitle'];
$tx7=$arr['text'];

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
					<li  class="current_page_item"><a href="index.php"><?php echo $title2;?></a>
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
					<li><a href="index.php"><?php echo $title3;?></a>
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
	
	<div class="slideshow">
		<div class="tp-banner-container">
			<div class="tp-banner" >
				<ul>
					<li data-transition="random" data-slotamount="7" data-masterspeed="1500">
						<!-- MAIN IMAGE -->
						<img src="images1/<?php echo $i1;?>" alt="" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
						
						<div class="slideshow-bg"
						data-y="310"
						data-x="center"
						data-start="0"
                        ></div>
						<!-- LAYERS -->
						
						<!-- LAYER NR. 1 -->
						<div class="slide-h2 tp-caption randomrotate skewtoleft tp-resizeme start white"
							data-y="160"
							data-x="center"
							data-hoffset="0"
							data-start="300"
							data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
							data-speed="500"
							data-easing="Power3.easeInOut"
							data-endspeed="300"
							style="z-index: 2"> <h2><?php echo $t1;?></h2>
						</div>
						
						<!-- LAYER NR. 2 -->
						<div class="slide-h3 tp-caption customin white"
							data-y="230"
							data-x="center"
							data-hoffset="0"
							data-start="600"
							data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
							data-speed="500"
							data-easing="Power3.easeInOut"
							data-endspeed="300"
							style="z-index: 2"><h2><?php echo $s1;?></h2>
						</div>
		
						<!-- LAYER NR. 3 -->
						<div class="slide-p tp-caption black randomrotate skewtoleft tp-resizeme start" 
							data-x="center" 
							data-hoffset="0" 
							data-y="310" 
							data-speed="500" 
							data-start="1300" 
							data-easing="Power3.easeInOut" 
							data-splitin="none" 
							data-splitout="none" 
							data-elementdelay="0.1" 
							data-endelementdelay="0.1" 
							data-endspeed="500" style="z-index: 6;white-space: pre-line;max-width: 1170px;text-align: center;"><p class="white"></p>
						</div>
						
						<!-- LAYER NR. 4 -->
						<div class="slide-a tp-caption customin"
							data-x="center"
							data-y="390"
							data-hoffset="100"
							data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
							data-speed="500"
							data-start="1800"
							data-easing="Power3.easeInOut"
							data-endspeed="500"
							style="z-index: 4">
						</div>
						
						<!-- LAYER NR. 5 -->
						<div class="slide-a slide-a-2 tp-caption customin"
							data-x="center"
							data-y="390"
							data-hoffset="-100"
							data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
							data-speed="500"
							data-start="2100"
							data-easing="Power3.easeInOut"
							data-endspeed="500"
							style="z-index: 4">
						</div>
					</li>
					<li data-transition="random" data-slotamount="7" data-masterspeed="1000">
						<!-- MAIN IMAGE -->
						<img src="images1/<?php echo $i1;?>" alt="" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
						
						<div class="slideshow-bg"
						data-y="310"
						data-x="center"
						data-start="0"></div>
						<!-- LAYERS -->
						
						<!-- LAYER NR. 1 -->
						<div class="tp-caption lfl start"
							data-x="600"
							data-y="100"
							data-speed="400"
							data-start="1300"
							data-easing="easeOut"
							data-endspeed="500"><img src="images1/<?php echo $i2;?>" alt="macbookpro">
						</div>
						
						<!-- Layer NR. 2 -->
						<div class="tp-caption color large_bg sfr start"
							data-x="0"
							data-y="110"
							data-start="1800"
							data-speed="700"
							data-easing="easeOutBounce"
							style="z-index: 4">Best  Education
						</div>
						
						<!-- Layer NR. 3 -->
						<div class="tp-caption color large_bg sft start"
							data-x="0"
							data-y="160"
							data-start="2300"
							data-speed="700"
							data-easing="easeOutBounce"
							style="z-index: 4">Best Faculty
						</div>
						
						<!-- Layer NR. 4 -->
						<div class="tp-caption color large_bg sfl start"
							data-x="0"
							data-y="210"
							data-start="2800"
							data-speed="700"
							data-easing="easeOutBounce"
							style="z-index: 4">Best Infrastructure
						</div>
						
						<!-- Layer NR. 5 -->
						<div class="tp-caption color large_bg sft start"
							data-x="0"
							data-y="260"
							data-start="3300"
							data-speed="700"
							data-easing="easeOutBounce"
							style="z-index: 4">Best Learning Environment 
						</div>
						
						<!-- Layer NR. 6 -->
						<div class="tp-caption color large_bg sfr start"
							data-x="0"
							data-y="310"
							data-start="3800"
							data-speed="700"
							data-easing="easeOutBounce"
							style="z-index: 4">Best in Sports
						</div>
						
						<!-- Layer NR. 7 -->
						<div class="tp-caption color large_bg sft start"
							data-x="0"
							data-y="360"
							data-start="4300"
							data-speed="700"
							data-easing="easeOutBounce"
							style="z-index: 4">Providing best placements
						</div>
					</li>
					
					<li data-transition="random" data-slotamount="7" data-masterspeed="1000">
						<!-- MAIN IMAGE -->
						<img src="images1/<?php echo $i1;?>" alt="" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
						
						<div class="slideshow-bg"
						data-y="310"
						data-x="center"
						data-start="0"></div>
						<!-- LAYERS -->
						
						<!-- LAYER NR. 1 -->
						<div class="tp-caption lfl start"
							data-x="300"
							data-y="150"
							data-speed="400"
							data-start="1300"
							data-easing="easeOut"
							data-endspeed="500"><img src="images1/<?php echo $i3;?>" alt="macbookpro">
						</div>
						
						<!-- Layer NR. 2 -->
						<div class="slide-h2 tp-caption randomrotate skewtoleft tp-resizeme start white"
							data-y="60"
							data-x="center"
							data-hoffset="0"
							data-start="2200"
							data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
							data-speed="500"
							data-easing="Power3.easeInOut"
							data-endspeed="300"
							style="z-index: 2"><h2>Hello, We Are MAIT</h2>
						</div>
						
						<!-- Layer NR. 3 -->
						<div class="tp-caption color large_bg sfr start"
							data-x="0"
							data-y="110"
							data-start="2900"
							data-speed="700"
							data-easing="easeOutBounce"
							style="z-index: 4">Best Education
						</div>
						
						<!-- Layer NR. 4 -->
						<div class="tp-caption color large_bg sft start"
							data-x="0"
							data-y="160"
							data-start="3400"
							data-speed="700"
							data-easing="easeOutBounce"
							style="z-index: 4">Best Faculty
						</div>
						
						<!-- Layer NR. 5 -->
						<div class="tp-caption color large_bg sfl start"
							data-x="0"
							data-y="210"
							data-start="3900"
							data-speed="700"
							data-easing="easeOutBounce"
							style="z-index: 4">Best Infrastructure
						</div>
						
						<!-- Layer NR. 6 -->
						<div class="tp-caption color large_bg sft start"
							data-x="900"
							data-y="110"
							data-start="4400"
							data-speed="700"
							data-easing="easeOutBounce"
							style="z-index: 4">We provide best placements
						</div>
						
						<!-- Layer NR. 7 -->
						<div class="tp-caption color large_bg sfr start"
							data-x="930"
							data-y="160"
							data-start="4900"
							data-speed="700"
							data-easing="easeOutBounce"
							style="z-index: 4">Best Learning Environment
						</div>
						
						<!-- Layer NR. 8 -->
						<div class="tp-caption color large_bg sft start"
							data-x="985"
							data-y="210"
							data-start="5400"
							data-speed="700"
							data-easing="easeOutBounce"
							style="z-index: 4">Best in Sports
						</div>
					</li>
					<!-- SLIDE  -->
					<li data-transition="random" data-slotamount="7" data-masterspeed="1000">
						<!-- MAIN IMAGE -->
						<img src="images1/<?php echo $i4;?>" alt="" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
						
						<div class="slideshow-bg"
						data-y="310"
						data-x="center"
						data-start="0"></div>
						<!-- LAYERS -->
						
						<!-- LAYER NR. 1 -->
						<div class="slide-h2 tp-caption randomrotate skewtoleft tp-resizeme start white"
							data-y="130"
							data-x="center"
							data-hoffset="0"
							data-start="300"
							data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
							data-speed="500"
							data-easing="Power3.easeInOut"
							data-endspeed="300"
							style="z-index: 2"><h2>Why Mait ?</h2>
						</div>
						
						<!-- LAYER NR. 2 -->
						<div class="slide-h3 tp-caption customin white"
							data-y="200"
							data-x="center"
							data-hoffset="0"
							data-start="600"
							data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
							data-speed="500"
							data-easing="Power3.easeInOut"
							data-endspeed="300"
							style="z-index: 2"><h2>Best Education</h2>
						</div>
		
						<!-- LAYER NR. 3 -->
						<div class="slide-p tp-caption black randomrotate skewtoleft tp-resizeme start" 
							data-x="center" 
							data-hoffset="0" 
							data-y="280" 
							data-speed="500" 
							data-start="1300" 
							data-easing="Power3.easeInOut" 
							data-splitin="none" 
							data-splitout="none" 
							data-elementdelay="0.1" 
							data-endelementdelay="0.1" 
							data-endspeed="500" style="z-index: 6;white-space: pre-line;max-width: 1170px;text-align: center;"><p class="white">We provide best learning environment for students.We have best faculty and awesome infrastructure.Students can also learn practically.</p>
						</div>
						
						<!-- LAYER NR. 4 -->
						<div class="slide-a slide-a-2 tp-caption customin"
							data-x="center"
							data-y="360"
							data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
							data-speed="500"
							data-start="1800"
							data-easing="Power3.easeInOut"
							data-endspeed="500"
							style="z-index: 4">
						</div>
					</li>
				</ul>
			</div>
		</div><!-- End tp-banner-container -->
	</div><!-- End slideshow -->
	
	<div class="sections">
		<div class="container">
			<div class="sections-title">
				<div class="sections-title-h3"><h3><?php echo $t2;?></h3></div>
				<p><?php echo $tx1;?> </p>
			</div><!-- End sections-title -->
			<div class="row">
				<div class="bxslider-slide box-icon-slide">
					<ul>
						<li>
							<div class="col-md-3">
								<div class="box-icon">
									
									<div class="box-icon-content">
										<h5>NEWS</h5>
										<p>MAITiens coming LIVE on ABP News in an Interview with Shoaib Akhtar & Gautam Gambhir "Vishav Bijetaa" 17th March,2016.</a> <br>
                                          <a href="news.php"> <u>Read More</u></a></p>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="box-icon">
									
									<div class="box-icon-content">
										<h5>EVENTS</h5>
										<p>SRIJAN 2016 TECH FEST & SPORTS MEET 28-29th March.<br>
                                    <a href="news.php"><u>Read More</u></a></p>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="box-icon">
									
									<div class="box-icon-content">
										<h5>NOTICE</h5>
										<p>Registration opens for B.Tech/ MBA / Polytechnic / BCA* / BBA* for session 2016-17.</a><br>
                                    <a href="news.php"><u>Read More</u></a></p>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="box-icon">
									
									<div class="box-icon-content">
										<h5>RESULTS</h5>
										<p>MAIT congratulate all 10th and 12th, UP/CBSE Board students for their result.</a> <br>
                                          <a href="news.php"><u>Read More</u></a></p>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="col-md-3">
								<div class="box-icon">
									
									<div class="box-icon-content">
										<h5>NEWS</h5>
										<p>MAITiens coming LIVE on ABP News in an Interview with Shoaib Akhtar & Gautam Gambhir "Vishav Bijetaa" 17th March,2016.</a> <br>
                                          <a href="news.php"><u>Read More</u></a></p>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="box-icon">
									
									<div class="box-icon-content">
										<h5>EVENTS</h5>
										<p>SRIJAN 2016 TECH FEST & SPORTS MEET 28-29th March.</a><br>
                                    <a href="news.php"><u>Read More</u></a></p>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="box-icon">
									
									<div class="box-icon-content">
										<h5>NOTICE</h5>
										<p>Registration opens for B.Tech/ MBA / Polytechnic / BCA* / BBA* for session 2016-17.</a><br>
                                    <a href="news.php"><u>Read More</u></a></p>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="box-icon">
									
									<div class="box-icon-content">
										<h5>RESULTS</h5>
										<p>MAIT congratulate all 10th and 12th, UP/CBSE Board students for their result.</a> <br>
                                          <a href="news.php"><u>Read More</u></a></p>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div><!-- End box-icon-slide -->
			</div><!-- End row -->
		</div><!-- End container -->
	</div><!-- End sections -->
	
	<div class="sections section-2">
		<div class="container">
			<div class="sections-title">
				<div class="sections-title-h3"><h3>OUR COURSES</h3></div>
				
			</div><!-- End sections-title -->
			<div class="row">
				<div class="portfolio-slide bxslider-slide">
					<ul>
						<li>
							<div class="col-md-3 portfolio-item">
								<div class="portfolio-one">
									<div class="portfolio-head">
										<div class="portfolio-img"><img alt="" src="images1/btech.jpg"></div>
										<div class="portfolio-hover">
											
											<a class="portfolio-zoom prettyPhoto" href="images1/btech.jpg"><i class="fa fa-search"></i></a>
										</div>
									</div><!-- End portfolio-head -->
									<div class="portfolio-content">
										<i class="fa fa-leaf"></i>
										<div class="portfolio-meta">
											<div class="portfolio-name"><h6><a href="btech.php">B.tech</a></h6></div>
											
										</div><!-- End portfolio-meta -->
									</div><!-- End portfolio-content -->
								</div><!-- End portfolio-item -->
							</div>
							<div class="col-md-3 portfolio-item">
								<div class="portfolio-one">
									<div class="portfolio-head">
										<div class="portfolio-img"><img alt="" src="images1/diploma.jpg"></div>
										<div class="portfolio-hover">
											
											<a class="portfolio-zoom prettyPhoto" href="images1/diploma.jpg"><i class="fa fa-search"></i></a>
										</div>
									</div><!-- End portfolio-head -->
									<div class="portfolio-content">
										<i class="fa fa-leaf"></i>
										<div class="portfolio-meta">
											<div class="portfolio-name"><h6><a href="diploma.php">Diploma</a></h6></div>
											
										</div><!-- End portfolio-meta -->
									</div><!-- End portfolio-content -->
								</div><!-- End portfolio-item -->
							</div>
							<div class="col-md-3 portfolio-item">
								<div class="portfolio-one">
									<div class="portfolio-head">
										<div class="portfolio-img"><img alt="" src="images1/mba.jpg"></div>
										<div class="portfolio-hover">
											
											<a class="portfolio-zoom prettyPhoto" href="images1/mba.jpg"><i class="fa fa-search"></i></a>
										</div>
									</div><!-- End portfolio-head -->
									<div class="portfolio-content">
										<i class="fa fa-leaf"></i>
										<div class="portfolio-meta">
											<div class="portfolio-name"><h6><a href="mba.php">MBA</a></h6></div>
											
										</div><!-- End portfolio-meta -->
									</div><!-- End portfolio-content -->
								</div><!-- End portfolio-item -->
							</div>
							<div class="col-md-3 portfolio-item">
								<div class="portfolio-one">
									<div class="portfolio-head">
										<div class="portfolio-img"><img alt="" src="images1/others.jpg"></div>
										<div class="portfolio-hover">
											
											<a class="portfolio-zoom prettyPhoto" href="images1/others.jpg"><i class="fa fa-search"></i></a>
										</div>
									</div><!-- End portfolio-head -->
									<div class="portfolio-content">
										<i class="fa fa-leaf"></i>
										<div class="portfolio-meta">
											<div class="portfolio-name"><h6><a href="others.php">OTHERS</a></h6></div>
											
										</div><!-- End portfolio-meta -->
									</div><!-- End portfolio-content -->
								</div><!-- End portfolio-item -->
							</div>
						</li>
						</ul>
				</div><!-- End portfolio-slide -->
			</div><!-- End row -->
			
		</div><!-- End container -->
	</div><!-- End sections -->
	
	<div class="sections sections-padding-b-50">
		<div class="container">
			<div class="sections-title">
				<div class="sections-title-h3"><h3><?php echo $t3;?></h3></div>
				
			</div><!-- End sections-title -->
			<div class="row">
				<div class="col-md-6">
					<div class="accordion">
						<div class="section-content">
						    <h4 class="accordion-title active"><a href="#"><?php echo $s2;?><i class="fa fa-plus"></i></a></h4>
						    <div class="accordion-inner active">
						       <?php echo $tx2;?>  
						    </div>
					    </div>
					    <div class="section-content">
						    <h4 class="accordion-title"><a href="#"><?php echo $s3;?><i class="fa fa-minus"></i></a></h4>
						    <div class="accordion-inner">
						       <?php echo $tx3;?>
						    </div>
					    </div>
					    
					</div><!-- End accordion -->
				</div>
				<div class="col-md-6">
					<div class="progressbar-warp">
					    <div class="progressbar">
						    <span class="progressbar-title">Technology<span>80%</span></span>
						    <div class="progressbar-all">
						        <div class="progressbar-percent" style="background-color: #e03e25;" data-percent="80"></div>
					        </div>
					    </div>
					    <div class="progressbar">
						    <span class="progressbar-title">Best Tutor<span>90%</span></span>
						    <div class="progressbar-all">
						        <div class="progressbar-percent" style="background-color: #e03e25;" data-percent="90"></div>
					        </div>
					    </div>
					    <div class="progressbar">
						    <span class="progressbar-title">Practical Training<span>85%</span></span>
						    <div class="progressbar-all">
					        	<div class="progressbar-percent" style="background-color: #e03e25;" data-percent="85"></div>
					        </div>
					    </div>
					    <div class="progressbar">
						    <span class="progressbar-title">Support<span>100%</span></span>
						    <div class="progressbar-all">
						        <div class="progressbar-percent" style="background-color: #e03e25;" data-percent="100"></div>
					        </div>
					    </div>
                        <div class="progressbar">
						    <span class="progressbar-title">Success Rate<span>90%</span></span>
						    <div class="progressbar-all">
						        <div class="progressbar-percent" style="background-color: #e03e25;" data-percent="90"></div>
					        </div>
					    </div>
					    
					    </div>
					</div><!-- End progressbar-warp -->
				</div>
			</div><!-- End row -->
		</div><!-- End container -->
	</div><!-- End sections -->
	
	<div class="sections section-3">
		<div class="container">
			<div class="sections-title">
				<div class="sections-title-h3"><h3><?php echo $t3;?></h3></div>
				
			</div><!-- End sections-title -->
			<div class="row">
				<div class="col-md-3">
					<div class="box-icon">
						<div class="gap"></div>
                        <div class="gap"></div>
                        <div class="gap"></div>
						<div class="box-icon-content">
							<p><?php echo $tx4;?>
						</div>
					</div>
					<div class="gap"></div>
					<div class="box-icon">
						<div class="gap"></div>
                        <div class="gap"></div>
                        <div class="gap"></div>
                       <div class="box-icon-content">
							<p><?php echo $im1;?>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="gap"></div>
					<div class="gap"></div>
					<div class="t_center"><img alt="" src="images1/<?php echo $im4;?>"></div>
					<div class="gap"></div>
				</div>
				<div class="col-md-3">
					<div class="box-icon">
						<div class="gap"></div>
                        <div class="gap"></div>
                        <div class="gap"></div>
						<div class="box-icon-content">
							<p><?php echo $im2;?>
					</div>
					<div class="gap"></div>
					<div class="box-icon">
						<div class="gap"></div>
                        <div class="gap"></div>
                        <div class="gap"></div>
                        <div class="gap"></div>
						<div class="box-icon-content">
							<p><?php echo $im3;?>
						</div>
					</div>
				</div>
			</div><!-- End row -->
		</div><!-- End container -->
	</div><!-- End sections -->
	
	<div class="sections sections-padding-b-50">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="head-title"><h6><?php echo $t4;?></h6></div>
					<div class="row">
						<div class="bxslider-slide bxslider-slide-title blog-silde">
							<ul>
								<li>
									<div class="col-md-6 blog-item">
										<div class="blog-one">
											<div class="blog-img">
												
												
											</div><!-- End blog-img -->
											<div class="blog-content">
												<h6><?php echo $s4;?></h6>
												<p><?php echo $tx5;?>
											</div><!-- End blog-content -->
											<div class="blog-meta">
												<div class="blog-author"></div>
												
											</div><!-- End blog-meta -->
											<div class="clearfix"></div>
										</div><!-- End blog-item -->
									</div>
									<div class="col-md-6 blog-item">
										<div class="blog-one">
											<div class="blog-img">
												
												
											</div><!-- End blog-img -->
											<div class="blog-content">
												<h6><?php echo $s4;?></h6>
												<p><?php echo $img;?>
											</div><!-- End blog-content -->
											<div class="blog-meta">
												<div class="blog-author"></div>
												
											</div><!-- End blog-meta -->
											<div class="clearfix"></div>
										</div><!-- End blog-item -->
									</div>
                                    
                                    
								</li>
								<li>
									<div class="col-md-6 blog-item">
										<div class="blog-one">
											<div class="blog-img">
												
												
											</div><!-- End blog-img -->
											<div class="blog-content">
												<h6><?php echo $s5;?></h6>
												<p><?php echo $tx6;?> 
											</div><!-- End blog-content -->
											<div class="blog-meta">
												<div class="blog-author"></div>
												
											</div><!-- End blog-meta -->
											<div class="clearfix"></div>
										</div><!-- End blog-item -->
									</div>
									<div class="col-md-6 blog-item">
										<div class="blog-one">
											<div class="blog-img">
												
												
											</div><!-- End blog-img -->
											<div class="blog-content">
												<h6><?php echo $s6;?></h6>
												<p><?php echo $tx7;?>
											</div><!-- End blog-content -->
											<div class="blog-meta">
												<div class="blog-author"></div>
												
											</div><!-- End blog-meta -->
											<div class="clearfix"></div>
										</div><!-- End blog-item -->
									</div>
								</li>
							</ul>
						</div><!-- End blog-silde -->
					</div><!-- End row -->
				</div>
				<!-- End testimonials-slide -->
					</div><!-- End row -->
				</div>
			</div><!-- End row -->
		</div><!-- End container -->
	</div><!-- End sections -->
	
	<?php
	include "footer.php";
	
	?>
	
	
</div><!-- End wrap -->

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