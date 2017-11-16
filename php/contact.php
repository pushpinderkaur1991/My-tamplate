<?php include('header.php');?>

<div class="jumbotron"  id="jumbo">
	<div class="row">
			<div class="col-md-8">
						<h2 style="padding-left:100px;"><?php echo"CONTACT US";?></h2>
						<p style="padding-left:100px;"><?php echo"Get in Touch With Us. We'd be happy to help."?></p>
			</div>
					<div class="col-md-4">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><?php echo"HOME";?></li>
							<li class="breadcrumb-item"><?php echo"CONTACT US";?></li>
						</ol>
					</div>
	</div>		
</div>

<div class="container-fluid" style="margin-bottom:50px;">
	<div id="map" style="width:100%;height:400px;background:gray;"></div>
</div>



<div class="container-fluid" style="margin-bottom:50px;">
	<div class="container">
		<div class="row">
		
			<div class="col-md-6">
						<form>
							<h3 class="text-muted"><?php echo"Contact Us";?></h3>
							
									<div class="row">
										<div class="col-md-6 form-group">	
											<label class="p-sales"><?php echo"Your Name";?></label>	<span class="asterix text-danger">*</span><br>
											<input type="text" id="name" name="name" placeholder="Your name.." style="width:200px; margin: 0 auto;"><br>
										</div>
										<div class="col-md-6 form-group">
											<label class="p-sales"><?php  echo"Your Email Address";?></label>	<span class="asterix text-danger">*</span><br>
											<input type="text" id="email" name="email" placeholder="Your email.." style="width:200px;margin: 0 auto;"><br>
										</div>	
									</div>
									
										<div class="row">
											<div class="col-md-12 col-sm-6 col-sm-3">
												<label class="p-sales"><?php echo"Subject";?></label>	<span class="asterix text-danger">*</span><br>
												
												<textarea class="col-md-12" id="subject" name="subject" placeholder="Write something .." style="height:100px; width:490px;margin: 0 auto;"></textarea>
											</div>
										</div>
										
										<div class="row">
											<div class="col-md-12 col-sm-6 col-sm-3">
												<label class="p-sales"><?php echo"Message";?></label>	<span class="asterix text-danger">*</span><br>
												<textarea class="col-md-12" id="subject" name="subject" placeholder="Write something.." style="height:100px; width:490px;margin: 0 auto;"></textarea>
											</div>	
										</div>	
											<a href="" class="btn btn-primary">SIGN IN</a>
						</form>
					</div>
						<div class="col-md-6" style="padding-top:50px;">
							<h4 class="text-muted"> <?php echo"Get in Touch";?></h4>
							<p class="p-sales"><?php echo"Please reach out to us for any technical support, any sales query, any feedback or partnership opportunity. Or just send us a hello."?></p>
							<hr>
								<h4 class="text-muted"><?php echo"The Office";?></h4>
								<p class="p-sales"><?php echo"Address: G-36, G Block, Connaught Place, New Delhi, India-110001<br>
									Phone: +91-9582507887";?><br>
									Email:&nbsp;<a href="" ><?php echo"support@easyleadz.com";?></a>
								</p>
								<hr>
									<h4 class="text-muted"><?php echo"Business Hours";?></h4>
									<p class="p-sales"><?php echo"Monday - Friday 9am to 7pm";?><br>
										<?php echo"Saturday - 9am to 5pm<br>
										Sunday - Closed";?></p>
						</div>
			</div>
		</div>	
	</div>
</div>


	

<script>
function myMap() {
var mapOptions = {
    center: new google.maps.LatLng(28.484833,  77.094667),
    zoom: 10,
    mapTypeId: google.maps.MapTypeId.TERRAIN
}

var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}


</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNcvWxchPJaUt0B7enG9AbDayu7szIZiw&callback=myMap"></script>
</script>
	<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=59aac0267a4dc70012c143a8&product=sticky-share-buttons' async='async'></script>	
		
<?php include('footer.php'); ?>



























