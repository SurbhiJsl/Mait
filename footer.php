<?php
include "link.php";
$sel=mysqli_query($link,"select * from footer where id='1'");
while($arr=mysqli_fetch_array($sel))
{
	$t1=$arr['title'];
	$tx1=$arr['text'];
}

$sel=mysqli_query($link,"select * from footer where id='2'");
while($arr=mysqli_fetch_array($sel))
{
	$t2=$arr['title'];
	$tx2=$arr['text'];
	$i1=$arr['image1'];
	$i2=$arr['image2'];
	$i3=$arr['image3'];
	$i4=$arr['image4'];
}

$sel=mysqli_query($link,"select * from footer where id='3'");
while($arr=mysqli_fetch_array($sel))
{
	$t3=$arr['title'];
	$tx3=$arr['text'];
	$im1=$arr['image1'];
	$im2=$arr['image2'];
	$im3=$arr['image3'];
	$im4=$arr['image4'];
}


?>
<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="footer-widget">
						<div class="widget-title"><h6><?php echo $t1;?></h6></div>
						<div class="widget-about">
							<p><?php echo $tx1;?></p>
							
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-widget">
						<div class="widget-title"><h6><?php echo $t2;?></h6></div>
						
						<ul class="footer_widget_nav">
                  <li><a href="#"><?php echo $tx2;?></a></li>
                  <li><a href="#"><?php echo $i1;?></a></li>
                  <li><a href="#"><?php echo $i2;?></a></li>
                  <li><a href="#"><?php echo $i3;?></a></li>
                  <li><a href="#"><?php echo $i4;?></a></li>
                         </ul>
                          
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-widget">
						<div class="widget-title"><h6><?php echo $t3;?></h6></div>
						
						<ul class="footer_widget_nav">
                  <li><a href="#"><?php echo $tx3;?></a></li>
                  <li><a href="#"><?php echo $im1;?></a></li>
                  <li><a href="#"><?php echo $im2;?></a></li>
                  <li><a href="#"><?php echo $im3;?></a></li>
                  <li><a href="#"><?php echo $im4;?></a></li>
                         </ul>
                          
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-widget">
						<div class="widget-title"><h6>Social links</h6></div>
						<div class="widget-twitter">
							<ul>
                  <li><a data-toggle="tooltip" data-placement="top" title="Facebook" class="soc_tooltip" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Twitter" class="soc_tooltip"  href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Google+" class="soc_tooltip"  href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Linkedin" class="soc_tooltip"  href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Youtube" class="soc_tooltip"  href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>
						</div>
					</div>
				</div>
			</div><!-- End row -->
		</div><!-- End container -->
	</footer><!-- End footer -->
	<footer id="footer-bottom">
		<div class="container">
			<div class="copyrights">Copyright 2014 MAIT |</div>
            </div>
            
			
	</footer><!-- End footer-bottom -->
    </div><!-- End wrap -->



	