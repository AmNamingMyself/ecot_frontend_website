	<?php
	include("includes/top-nav.php");
	include("includes/menu-nav.php");
	?>

	<!--************************************
				Header End
		*************************************-->

	<!--************************************
				Inner Banner Start
		*************************************-->
	<div class="tg-innerbanner">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<ol class="tg-breadcrumb">
						<li><a href="index.php">home</a></li>
						<li class="tg-active">contact</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<!--************************************
				Inner Banner End
		*************************************-->
	<!--************************************
				Main Start
		*************************************-->
	<main id="tg-main" class="tg-main tg-haslayout">
		<div class="container">
			<div class="row">
				<div id="tg-twocolumns" class="tg-twocolumns">
					<div class="col-xs-12 col-sm-6 col-md-8 col-lg-8 pull-right">
						<div id="tg-content" class="tg-content">
							<div class="tg-addmission">

								<div class="tg-pagetitle">
									<h2>Eswatini College Of Technology</h2>
								</div>

								<form action="includes/contactMail.php" method="POST">
									<div class="mb-3">
										<label for="name" class="form-label" style="margin-top: 15px;">Full Name</label>
										<input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
									</div>
									<div class="mb-3">
										<label for="email" class="form-label" style="margin-top: 15px;">Email Address</label>
										<input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
									</div>
									<div class="mb-3">
										<label for="subject" class="form-label pt-3" style="margin-top: 15px;">Subject</label>
										<input type="text" class="form-control" id="subject" name="subject" placeholder="Enter subject">
									</div>
									<div class="mb-3">
										<label for="message" class="form-label" style="margin-top: 15px;">Message</label>
										<textarea class="form-control" id="message" name="message" rows="4" placeholder="Write your message here" required></textarea>
									</div>
									<br>
									<button type="submit" class="btn btn-primary w-100">Send Message</button>
								</form>

								<div class="ml-5 pt-5">
									<p>We receive many emails. If responding to your email takes too long, consider giving us a call.</p>
								</div>

							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 pull-left">
						<aside id="tg-sidebar" class="tg-sidebar">

							<div class="tg-widget tg-widgetcampuses">
								<div class="tg-widgettitle">
									<h3>Find Us</h3>
								</div>
								<div class="tg-widgetcontent">
									<div class="tg-campuses">
										<div class="tg-campus">
											<div class="tg-mapbox">
												<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1839.9306933827422!2d31.121350293776615!3d-26.310816503482254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ee8cfa88d09544b%3A0x1122bdb1e3c248ef!2sEswatini%20College%20Of%20Technology!5e1!3m2!1sen!2s!4v1738920779631!5m2!1sen!2s" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
											</div>
											<ul>
												<li>
													<i class="icon-location"></i>
													<address>P O BOX 69, Mbabane H100. Somhlolo Road</address>
												</li>
												<li>
													<i class="icon-phone-handset"></i>
													<span>(00268)2404 2681/2/3</span>
												</li>
												<li>
													<i class="icon-printer"></i>
													<span>(00268)2404 2681/2/3</span>
												</li>
												<li>
													<a href="mailto:principal@scot.ac.sz">
														<i class="icon-envelope"></i>
														<span>office@ecot.ac.sz</span>
													</a>
												</li>
												<li>
													<a href="mailto:principal@scot.ac.sz">
														<i class="icon-envelope"></i>
														<span>registrar@ecot.ac.sz</span>
													</a>
												</li>
												<li>
													<a href="mailto:principal@scot.ac.sz">
														<i class="icon-envelope"></i>
														<span>principal@ecot.ac.sz</span>
													</a>
												</li>
												<li>
													<a href="mailto:principal@scot.ac.sz">
														<i class="icon-construction"></i>
														<span>support@ecot.ac.sz</span>
													</a>
												</li>
											</ul>
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
	<!--************************************
				Main End
		*************************************-->
	<?php
	include("includes/footer.php");
	?>