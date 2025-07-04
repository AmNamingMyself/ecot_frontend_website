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
						<li><a href="admissions.php">Admissions</a></li>
						<li class="tg-active">FAQ&acute;s</li>
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

					<div class="col-xs-12 col-sm-8 col-md-9 col-lg-9 pull-left">
						<h3 class="mb-4">Frequently Asked Questions</h3>

						<div class="accordion" id="faqAccordion">
							<!-- FAQ 1 -->
							<div class="card mb-2 border-0">
								<div class="card-header bg-secondary text-white fw-bold fs-5 d-flex justify-content-between align-items-center">
									<span>What is this website about?</span>
									<button class="btn btn-sm btn-close text-white" data-bs-toggle="collapse" data-bs-target="#faq1"></button>
								</div>
								<div id="faq1" class="collapse show" data-bs-parent="#faqAccordion">
									<div class="card-body border border-secondary-subtle">
										This website provides useful information and services.
									</div>
								</div>
							</div>

							<!-- FAQ 2 -->
							<div class="card mb-2 border-0">
								<div class="card-header bg-secondary text-white fw-bold fs-5 d-flex justify-content-between align-items-center">
									<span>How can I contact support?</span>
									<button class="btn btn-sm btn-close text-white" data-bs-toggle="collapse" data-bs-target="#faq2"></button>
								</div>
								<div id="faq2" class="collapse" data-bs-parent="#faqAccordion">
									<div class="card-body border border-secondary-subtle">
										You can contact support via email or phone.
									</div>
								</div>
							</div>

							<!-- FAQ 3 -->
							<div class="card mb-2 border-0">
								<div class="card-header bg-secondary text-white fw-bold fs-5 d-flex justify-content-between align-items-center">
									<span class="d-block bg-secondary text-white p-2 fw-bold fs-4">Is my data secure?</span>
									<button class="btn btn-sm btn-close text-white" data-bs-toggle="collapse" data-bs-target="#faq3"></button>
								</div>
								<div id="faq3" class="collapse" data-bs-parent="#faqAccordion">
									<div class="card-body border border-secondary-subtle">
										Yes, we follow industry standards to keep your data safe.
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Bootstrap JS (Needed for Collapse) -->
					<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



					<!-- <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9 pull-left">
						<div id="tg-content" class="tg-content">
							<div class="tg-addmission">

								<style>
									#tg-addmissionslider {
										width: 100%;
										height: auto;
										max-height: 300px;
										overflow: hidden;
									}

									#tg-addmissionslider img {
										/* width: 100%; */
									}
								</style>
								<div class="tg-pagetitle">
									<h2>2025-26 Application Instructions</h2>
								</div>
								<div class="tg-container">

									<p>If you are contemplating on educational options or a career or vocation, you are invited to consider what the Swaziland College of Technology offers. This you can do either by reading this prospectus or enquiring about the college programmes from the office of the Registrar. I have no doubt that either of the two alternatives will provide you with a clear spectrum of what the Swaziland College of Technology can do for you.</p>
									<p>The college currently offers Diploma programmes under the following faculties: Business Administration, Building &amp; Civil Engineering, Education, Engineering &amp; Science, and Information and Communication Technology. B Tech programmes have been introduced in the Faculty of Bus and Admin and also Faculty of Information and Communication Technology.</p>
								</div>
								<div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
									<div id="tg-content" class="tg-content">
										<div class="tg-aboutus tg-visionmission">

											<div class="tg-container">
												<h3>VALUES AND ATTITUDE</h3>
												<ul class="tg-ullist tg-liststyledot">
													<li><strong>Excellence:</strong> We are committed to creativity and innovation; strive to produce the highest quality outcomes in all endeavours.</li>
													<li><strong>Professionalism:</strong> Evidenced based training and service provision in accordance with the legislative framework and guided by ethical principles and related professional disciples.</li>
													<li><strong>Integrity and Transparency:</strong> Through academic freedom, responsibility and ethical behaviour. </li>
													<li><strong>Teamwork:</strong> Recognizes the inherent dignity of each member of the University community and treats everyone with respect. Our actions are guided by fairness and honesty. </li>
													<li><strong>Learning:</strong> We engage in collaborative education that is career-oriented balancing theory and practice, emphasizing active learning, developing critical learning and fostering responsibility and the desire for long pursuit of knowledge. </li>

												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> -->

					<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 pull-right">
						<aside id="tg-sidebar" class="tg-sidebar">
							<div class="tg-widget tg-widgetadmissionform">
								<div class="tg-widgetcontent">
									<h3>Admission 2025-26</h3>
									<div class="tg-description">
										<p>To all prospective students, &quot;The early bird catches the fatest worm&quot; secure your place now</p>
									</div>
									<a class="tg-btn tg-btnicon" href="javascript:void(0);">
										<i class="fa fa-file-pdf-o"></i>
										<span>Apply Now</span>
									</a>
								</div>
							</div>
							<div class="tg-widget tg-widgetadmissionform">
								<div class="tg-widgetcontent">
									<h3>Admission Resources</h3>
									<div class="tg-description">
										<p>Download our prospectus and get all the information you need to know about our courses
									</div>
									<a class="tg-btn tg-btnicon" href="javascript:void(0);">
										<i class="fa fa-file-pdf-o"></i>
										<span>Download Tuition</span>
									</a>
									<br><br>
									<a class="tg-btn tg-btnicon" href="javascript:void(0);">
										<i class="fa fa-file-pdf-o"></i>
										<span>Download Prospects</span>
									</a>
								</div>
							</div>
							<div class="tg-widget tg-widgetcampuses">
								<div class="tg-widgettitle">
									<h3>Find Us</h3>
								</div>
								<div class="tg-widgetcontent">
									<div class="tg-campuses">
										<div class="tg-campus">
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

					<!-- <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 pull-left">
						<aside id="tg-sidebar" class="tg-sidebar">
							<div class="tg-widget tg-widgetadmissionform">
								<div class="tg-widgetcontent">
									<h3>Admission 2018-19</h3>
									<div class="tg-description">
										<p>To all prospective students, &quot; The early bird catches the fatest worm&quot; secure your place now</p>
									</div>
									<a class="tg-btn tg-btnicon" href="javascript:void(0);">
										<i class="fa fa-file-pdf-o"></i>
										<span>Apply Now</span>
									</a>
								</div>
							</div>
							<div class="tg-widget tg-widgetcampuses">
								<div class="tg-widgettitle">
									<h3>Find Us</h3>
								</div>
								<div class="tg-widgetcontent">
									<div class="tg-campuses">
										<div class="tg-campus">
											
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
					</div> -->
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