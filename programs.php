<?php
include("includes/top-nav.php");
include("includes/menu-nav.php");
?>

<div class="tg-innerbanner">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<ol class="tg-breadcrumb">
					<li><a href="index.php">home</a></li>
					<li><a href="academics.php">academics</a></li>
					<li class="tg-active">programs</li>
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
					<div id="tg-content" class="tg-content">
						<div class="tg-addmission">

							<div class="tg-pagetitle">
								<h2>Applicable Programs</h2>
							</div>
							<div class="tg-container " style="padding-bottom: 15px;">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, explicabo molestiae sapiente voluptatem sed labore adipisci, corporis numquam, itaque nemo quod molestias officia architecto rerum aliquam iste placeat eum fugiat!</p>
							</div>
							<div class="" id="tuitions">
								Programs will be here

								<!-- TODO: add all applicable programs here -->

							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 pull-right">
					<aside id="tg-sidebar" class="tg-sidebar">
						<div class="tg-widget tg-widgetadmissionform">
							<div class="tg-widgetcontent">
								<h3>Admission 2025-26</h3>
								<div class="tg-description">
									<p>To all prospective students, &quot;The early bird catches the fatest worm&quot; secure your place now</p>
								</div>
								<a class="tg-btn tg-btnicon" href="/application">
									<i class="fa fa-edit"></i>
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
			</div>
		</div>
	</div>
</main>

<style>
	.h3-programs {
		padding-top: 30px;
		padding-bottom: 10px !important;
	}

	.container1 {
		display: flex;
		gap: 0.75rem;
		margin-bottom: 60px;
	}

	.profile-img {
		width: auto;
		/* Adjust size as needed */
		height: 100%;
		object-fit: cover;
		margin-right: 15px;
	}

	.card {
		padding: 25px 0;
		display: flex;
		flex-direction: column;
		height: 150px;
		margin-bottom: 15px;
	}
</style>

<?php
include("includes/footer.php");
?>