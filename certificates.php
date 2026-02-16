<?php
include("includes/top-nav.php");
// include("includes/menu-nav.php");
include("includes/menuhead.php");
?>

<div class="tg-innerbanner">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<ol class="tg-breadcrumb">
					<li><a href="index.php">home</a></li>
					<li><a href="academics.php">academics</a></li>
					<li class="tg-active">certificates</li>
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
								<h2>Affiliate Certificates</h2>
							</div>
							<div class="tg-container " style="padding-bottom: 15px;">
								<p>These are certificates offered in partnership with the college's stakeholders.</p>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, explicabo molestiae sapiente voluptatem sed labore adipisci, corporis numquam, itaque nemo quod molestias officia architecto rerum aliquam iste placeat eum fugiat!</p>
							</div>
							<div class="tg-events" style="margin: 25px 0 25px;">
								<h3>Available certificates</h3>
								<div class="row" style="display: flex; flex-flow:wrap;">

									<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
										<article class="tg-themepost tg-eventpost">
											<figure class="tg-featuredimg">
												<a href="javascript:void(0);">
													<img src="images/events/img-02.jpg" alt="image description">
												</a>
											</figure>
											<div class="tg-themepostcontent">

												<div class="tg-themeposttitle">
													<h3><a href="javascript:void(0);">Certificate in Mandarin Speaking</a></h3>
												</div>
												<div class="tg-description">
													<p>In partnership with ... <a href="javascript:void(0);" target="_blank">Read More</a></p>
												</div>
											</div>
										</article>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
										<article class="tg-themepost tg-eventpost">
											<figure class="tg-featuredimg">
												<a href="javascript:void(0);">
													<img src="images/events/img-02.jpg" alt="image description">
												</a>
											</figure>
											<div class="tg-themepostcontent">

												<div class="tg-themeposttitle">
													<h3><a href="javascript:void(0);">Certificate in Mandarin Writing</a></h3>
												</div>
												<!-- <div class="tg-description">
													<a href="javascript:void(0);">Click here to know more... </a>
												</div> -->
												<div class="tg-description">
													<p>In partnership with ... <a href="javascript:void(0);" target="_blank">Read More</a></p>
												</div>
											</div>
										</article>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 pull-right contain-aside">
					<aside id="tg-sidebar" class="tg-sidebar lock-aside">
						<div class="tg-widget tg-widgetadmissionform">
							<div class="tg-widgetcontent">
								<h3>Admission 2025-26</h3>
								<div class="tg-description">
									<p>You can take the certificate whilst completing your diploma. To qualify for some certificating you must be an current ECOT student.</p>
								</div>
								<!-- <a class="tg-btn tg-btnicon" href="/application">
									<i class="fa fa-edit"></i>
									<span>Apply Now</span>
								</a> -->
							</div>
						</div>

					</aside>
				</div>
			</div>
		</div>
	</div>
</main>

<style>
	.contain-aside {
		position: relative;
		overflow: visible !important;
	}

	.contain-aside,
	#tg-twocolumns,
	.tg-main,
	.container,
	.row {
		overflow: visible !important;
	}

	.lock-aside {
		position: sticky;
		top: 80px;
		z-index: 999;
	}

	.lock-aside {
		background: #f9f9f9;
		padding: 20px;
		border-radius: 8px;
		box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
	}


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

	.toggle-btn {
		color: #fff;
		border: none;
		margin: 5px 0;
		cursor: pointer;
		border-radius: 4px;
		font-size: 14px;
	}

	/*
	.toggle-btn:hover {
		background-color: #003060;
	} */

	.inline {
		display: flex;
		flex-flow: nowrap;
		align-items: center;
		justify-content: space-between;
		background-color: rgb(45, 84, 122);
		border-bottom: solid #fff 1px;
		padding: 0 15px;
	}

	.inline h4 {
		color: #fff;
		padding-top: 5px;

	}

	.program-details {
		padding: 0 15px;

	}
</style>

<script>
	document.querySelectorAll('.toggle-btn').forEach(icon => {
		icon.addEventListener('click', () => {
			const details = icon.closest('.program').querySelector('.program-details');
			const isVisible = details.style.display === 'block';

			details.style.display = isVisible ? 'none' : 'block';
			icon.classList.toggle('fa-chevron-up', !isVisible);
			icon.classList.toggle('fa-chevron-down', isVisible);
		});
	});
</script>


<?php
include("includes/footer.php");
?>