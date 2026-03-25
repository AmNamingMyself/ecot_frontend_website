<?php
include("includes/top-nav.php");
include("includes/menuhead.php");
?>

<div class="tg-innerbanner">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<ol class="tg-breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li class="tg-active">Contact</li>
				</ol>
			</div>
		</div>
	</div>
</div>

<main id="tg-main" class="tg-main tg-haslayout">
	<div class="container">
		<div class="row">
			<div id="tg-twocolumns" class="tg-twocolumns">

				<!-- ================= LEFT CONTENT ================= -->
				<div class="col-xs-12 col-sm-6 col-md-8 col-lg-8 pull-right">
					<div id="tg-content" class="tg-content">
						<div class="tg-addmission">

							<div class="tg-pagetitle">
								<h2>Contact Eswatini College of Technology</h2>
								<p>We would love to hear from you. Please fill in the form below and we will get back to you.</p>
							</div>

							<form action="includes/contactMail.php" method="POST">

								<div class="mb-3">
									<label for="name">Full Name</label>
									<input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required>
								</div>

								<div class="mb-3">
									<label for="email">Email Address</label>
									<input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
								</div>

								<div class="mb-3">
									<label for="subject">Subject</label>
									<input type="text" class="form-control" id="subject" name="subject" placeholder="Enter subject">
								</div>

								<div class="mb-3">
									<label for="message">Message</label>
									<textarea class="form-control" id="message" name="message" rows="5" placeholder="Write your message here" required></textarea>
								</div>

								<br>
								<button type="submit" class="btn btn-primary w-100">Send Message</button>
							</form>

							<div class="pt-4">
								<p><strong>Note:</strong> We receive a high volume of emails. If you do not receive a response in time, kindly contact us via phone.</p>
							</div>

						</div>
					</div>
				</div>

				<!-- ================= SIDEBAR ================= -->
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 pull-left">
					<aside id="tg-sidebar" class="tg-sidebar">

						<div class="tg-widget tg-widgetcampuses">
							<div class="tg-widgettitle">
								<h3>Find Us</h3>
							</div>

							<div class="tg-widgetcontent">
								<div class="tg-campus">

									<div class="tg-mapbox">
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1839.9306933827422!2d31.121350293776615!3d-26.310816503482254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ee8cfa88d09544b%3A0x1122bdb1e3c248ef!2sEswatini%20College%20Of%20Technology!5e1!3m2!1sen!2s!4v1738920779631!5m2!1sen!2s"
										width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
									</div>
												
									<ul class="pt-3">
										<li>
											<!-- <i class="icon-location"></i> -->
											<address>P.O. Box 69, Mbabane H100, Somhlolo Road</address>
										</li>

										<li>
											<!-- <i class="icon-phone-handset"></i> -->
											<span>(+268) 2404 2681/2/3</span>
										</li>

										<li>
											<!-- <i class="icon-envelope"></i> -->
											<a href="mailto:ecotqueries@gmail.com">ecotqueries@gmail.com</a>
										</li>
									</ul>

									<!-- ✅ NEW: OFFICE HOURS -->
									<div class="pt-3">
										<h4>Office Hours</h4>
										<p>
											<strong>Monday – Friday:</strong> 08h00 – 16h30<br>
											<small>(Central African Time)</small>
										</p>
									</div>

								</div>
							</div>
						</div>

					</aside>
				</div>

			</div>
		</div>
	</div>
</main>

<?php
include("includes/footer.php");
?>