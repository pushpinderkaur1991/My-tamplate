<footer id="footer">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4" id="div-3">
				<div class="contact-detail">
					<h4><?php echo"Want Some More Info";?></h4>
					<div class="white-text">
						<ul>
							<li><a href=""><?php echo"Home";?></a></li><hr>
							<li><a href=""><?php echo"How it Works";?></a></li><hr>
							<li><a href=""><?php echo"Pricing";?></a></li><hr>
							<li><a href=""><?php echo"Terms";?></a></li><hr>
							<li><a href=""><?php echo"Privacy Policy";?></a></li><hr>
							
						</ul>
					</div>
				</div>
			</div>
				<div class="col-md-4" id="div-3">
					<div>
						<h4 class="white-text"><?php echo"GET IN TOUCH";?></h4>
							<address>
								<strong class="text-primary"><?php echo"Sponsifyme Technology";?></strong><br>
								<?php echo"First floor, G-36, G-block CP<br>
								New Delhi, 110001";?><br>
								<abbr title="phone number" class="intialism">P:</abbr>
								+9582507878
							</address>
								<div>
									<h5 class="white-text"><?php echo"SOCIALIZE WITH US"?></h5>
								</div>
									<div class="social-icons">
										<ul>
											<li class="twitter"><a  target="_blank" href="https://twitter.com/easyleadz" class="fa fa-twitter"></a></li>
											<li class="facebook"><a  target="_blank" href="https://www.facebook.com/Easyleadz/"  class="fa fa-facebook"></a></li>
											<li><a  target="_blank" href="#" class="fa fa-google"></a></li>
											<li><a  target="_blank" href="https://www.linkedin.com/company-beta/13333680" class="fa fa-linkedin"></a></li>
										</ul>
									</div>
					</div>
				</div>
				
				<div class="col-md-4" id="div-3">
				    <div class="row">
						<h4 class="white-text"><?php echo"LATEST POST"?></h4>
					</div>	
							
								<div class="row" id="div-3">
									<div class="col-md-3 pull-left">
											<img src="boot/img/img7.jpg" height="100" width="100" class="img-responsive">								
										</div>
								
									
									<div class="col-sm-7 pull-right">
										<div class="post-content">
												<p> 
													<?php echo"Action points on how to use Artificial Intelligence for B2B lead generation";?></p>
												<a class="white-text" style="text-decoration:none" href="boot/img/img8.jpg"><?php echo"Read Full Article";?></a>
										</div>	
									</div>

								</div>
									
										<div class="row" id="div-3">
											<div class="col-md-3 pull-left">
													<img src="boot/img/img8.jpg" height="100" width="100" class="img-responsive">								
												</div>
										
											
											<div class="col-sm-7 pull-right">
												<div class="post-content">
														<p> 
															<?php echo"Step by Step Guide to growth hack twitter to drive trafic";?></p>
														<a class="white-text" style="text-decoration:none" href="boot/img/img8.jpg"><?php echo"Read Full Article";?></a>
												</div>	
											</div>

										</div>
				</div>
						
		</div>	
	</div>
	


	<div class="bg-primary" style="padding:18px 0px 18px 0px;">
		<div class="container">	
			<div class="row">
					<div class="class-md-8">
						<p class="white-text"><?php echo"@copyright 2017 by EasyLeadz. All Right Reserved";?></p>
					</div>
							<div class="class-md-4 pull-right" id="footer-last">
								<ul>
									<li><a href=""><?php echo"Term";?></a></li>
									<li><a href=""><?php echo"Sitemap";?></a></li>
									<li><a href=""><?php echo"Contact";?></a></li>
									
								</ul>
							</div>
			</div>				
		</div>
	</div>
	<a href="javascript:void(0)" ><button id="btn-fixed" class="btn-top"><i class="fa fa-arrow-up"></i></button><a>
	
</footer>



<script src="boot/js/jquery.min.js"></script>
<script src="boot/js/bootstrap.min.js"></script>
<script src="boot/js/jquery.bxslider.min.js"></script>
<script>
	$(document).ready(function(){
		$('.slider1').bxSlider({
			slideWidth: 400,
			minSlides: 2,
			maxSlides: 3,
			moveSlides: 3,
			slideMargin: 15,
			adaptiveHeight:true
		});
	});
	
	
</script>
<script>
	$(document).ready(function() {
 
		var offset = 100;
		//var duration = 300;
			$(window).scroll(function() {
			
			     if ($(this).scrollTop() > offset) 
				{
					$('.btn-top').fadeIn("slow");
					$('.btn-top').fadeIn(2000);
				}
			else 
			{
			$('.btn-top').fadeOut(2000);
			 
			}
			 
			});
			
			$('.btn-top').click(function(event) {
				event.preventDefault();
				$("html, body").animate({scrollTop: 0}, 2000);
 
					return false;
				})
 
			});
</script>
		
		
		
</body>
</html>