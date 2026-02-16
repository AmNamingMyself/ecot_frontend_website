<!--************************************
        Footer Start
*************************************-->
<footer id="tg-footer" class="tg-footer tg-haslayout">
	<!-- Newsletter Signup -->
	<div class="tg-signupbox">
		<div class="tg-signuptextbox">
			<h3>Subscribe to our Newsletter</h3>
			<div class="tg-description">
				<p>Stay up to date with news, events, and opportunities.</p>
			</div>
		</div>
		<form class="tg-formtheme tg-formsignupfree">
			<fieldset>
				<div class="form-group">
					<input type="email" name="emailid" class="form-control" placeholder="Enter your email" required>
				</div>
				<div class="form-group">
					<button type="submit" class="tg-btn">Subscribe</button>
				</div>
			</fieldset>
		</form>
	</div>

	<!--************************************
        Footer Middle Bar
*************************************-->
	<div class="tg-footermiddlebar">
		<div class="container">
			<div class="row d-flex align-items-start"> 
				
				
				<!-- Quick Links -->
				<div class="col-xs-12 col-sm-6 col-md-3 p-sm-3">
					<div class="tg-widget tg-widgetcoursecategories .small-padding">
						<div class="tg-widgettitle" >
							<h3>Quick Links</h3>
						</div>
						<div class="tg-widgetcontent">
							<ul class="list-unstyled ml-2">
								<li><a href="academics.php">Faculties</a></li>
								<li><a href="academics.php">Academics</a></li>
								<li><a href="#">Student Life</a></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Admissions -->
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="tg-widget tg-widgetcoursecategories">
						<div class="tg-widgettitle">
							<h3>Admissions</h3>
						</div>
						<div class="tg-widgetcontent">
							<ul class="list-unstyled">
								<li><a href="#">Undergraduate Admissions</a></li>
								<li><a href="#">Graduate Admissions</a></li>
								<li><a href="academics.php">Admission Information</a></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Contact & Social Right -->
				<div class="col-xs-12 col-sm-6 col-md-3 d-flex flex-column align-items-md-end text-md-right mt-4 mt-md-0">
					<div class="tg-widget tg-widgetcompanyinfo">
						<div class="tg-widgetcontent">
							<ul class="tg-infolist list-unstyled mb-3">
								<li><i class="icon-location"></i> P O BOX 69, Mbabane H100, Somhlolo Road</li>
								<li><i class="icon-phone-handset"></i> (00268) 2404 2681/2/3</li>
								<li><i class="icon-printer"></i> (00268) 2404 2681/2/3</li>
								<li><a href="mailto:office@ecot.ac.sz"><i class="icon-envelope"></i> office@ecot.ac.sz</a></li>
							</ul>
							<ul class="tg-socialicons list-inline mb-0">
								<li class="list-inline-item"><a class="social-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
								<li class="list-inline-item"><a class="social-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="list-inline-item"><a class="social-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
								<li class="list-inline-item"><a class="social-googleplus" href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Footer Bottom Bar -->
	<div class="tg-footerbar">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<span class="tg-copyright d-block">
						&copy; <span id="currentYear"></span> ECOT. All Rights Reserved.
					</span>
				</div>
			</div>
		</div>
	</div>
</footer>
<!--************************************
        Footer End
*************************************-->

<!-- Auto year script -->
<script>
	document.getElementById("currentYear").textContent = new Date().getFullYear();
</script>

<style>
	@media (min-width: 768px) and (max-width: 991px) {
		.small-padding {
			padding: 15px;
		}
	}

</style>