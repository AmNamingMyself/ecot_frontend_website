<?php
include("includes/top-nav.php");
include("includes/menu-nav.php");
?>

<!--************************************
				Inner Banner End
		*************************************-->
<!--************************************
				Main Start
		*************************************-->

<div class="tg-innerbanner">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<ol class="tg-breadcrumb">
					<li><a href="index.php">home</a></li>
					<li class="tg-active">academics</li>
				</ol>
			</div>
		</div>
	</div>
</div>

<main id="tg-main" class="tg-main tg-haslayout">

	<div class="container">
		<div class="row">
			<div id="tg-twocolumns" class="tg-twocolumns" style="margin-top: 10px;">
				<div class="col-xs-12 col-sm-8 col-md-9 col-lg-9 pull-left">
					<div class="tg-pagetitle">
						<h2>Academics</h2>
					</div>
					<div class="tg-container">
						<p>Discover a range of diploma and certificate programs designed to equip students with practical and academic skills. We also provide grade testing for select programs.</p>
					</div>


					<div class="tg-events" style="margin: 25px 0;">
						<div class="tg-borderheading">
							<h2>Faculties</h2>
						</div>
						<ul style="list-style: none; padding: 0; margin: 0;">
							<li><a href="ict.php">Information & Communication Technology (ICT)</a></li>
							<li><a href="engineeringScience.php">Engineering and Science</a></li>
							<li><a href="buildingCivil.php">Building and Civil Engineering</a></li>
							<li><a href="business.php">Business</a></li>
							<li><a href="education.php">Education</a></li>
						</ul>
					</div>

					<div class="tg-events" style="margin: 25px 0 25px;">
						<div class="tg-borderheading">
							<h2>What We Offer Academically</h2>
						</div>
						<div class="row" style="display: flex; flex-flow:wrap;">
							<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
								<article class="tg-themepost tg-eventpost">
									<figure class="tg-featuredimg">
										<a href="programs.php">
											<img src="images/events/img-02.jpg" alt="image description">
										</a>
									</figure>
									<div class="tg-themepostcontent">

										<div class="tg-themeposttitle">
											<h3><a href="programs.php">Undergraduate Programs</a></h3>
										</div>
										<div class="tg-description">
											<p>Students to equip their technology skills with new computers... <a href="javascript:void(0);">Read More</a></p>
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
											<h3><a href="javascript:void(0);">Certificate Programs (e.g. Madrin)</a></h3>
										</div>
										<div class="tg-description">
											<p>Students to equip their technology skills with new computers... <a href="javascript:void(0);">Read More</a></p>
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
											<h3><a href="javascript:void(0);">Part-Time</a></h3>
										</div>
										<div class="tg-description">
											<p>Students to equip their technology skills with new computers... <a href="javascript:void(0);">Read More</a></p>
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
											<h3><a href="javascript:void(0);">Grade Testing</a></h3>
										</div>
										<div class="tg-description">
											<p>Students to equip their technology skills with new computers... <a href="javascript:void(0);">Read More</a></p>
										</div>
									</div>
								</article>
							</div>
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>
</main>

<style>
	.containers {
		gap: 30px;
		max-width: 800px;
		margin: 0 auto;
		padding: 10px;
	}


	.containers1 {
		display: flex;
		gap: 30px;
		max-width: 1200px;
		margin: 0 auto;
		padding: 20px;
	}

	.quick-links {
		display: flex;
		gap: 20px;
		margin-bottom: 30px;
		flex-wrap: wrap;
	}

	.quick-link {
		display: flex;
		align-items: center;
		color: #0066cc;
		text-decoration: none;
		padding: 10px 15px;
		background: #f5f5f5;
		border-radius: 4px;
	}

	.quick-link::after {
		content: '›';
		margin-left: 10px;
	}

	.content-grid {
		display: grid;
		grid-template-columns: 350px 1fr;
		gap: 30px;
	}

	.search-section {
		background: #f5f5f5;
		padding: 20px;
		border-radius: 4px;
	}

	.search-input {
		width: 100%;
		padding: 10px;
		border: 1px solid #ddd;
		border-radius: 4px;
		margin-bottom: 20px;
	}

	.program-list {
		list-style: none;
	}

	.program-item {
		padding: 15px;
		background: white;
		margin-bottom: 2px;
		cursor: pointer;
		color: #0066cc;
		display: flex;
		justify-content: space-between;
		align-items: center;
	}

	.program-item::after {
		content: '›';
	}

	.program-item:hover {
		background: #f0f0f0;
	}

	.main-content h1 {
		color: #0066cc;
		margin-bottom: 20px;
	}

	.description {
		color: #666;
		margin-bottom: 30px;
	}

	.bachelor-title {
		color: rgb(0, 188, 38);
		font-size: 24px;
		margin: 30px 0 20px;
	}

	.program-details {
		margin-top: 20px;
	}

	.program-details h3 {
		color: #0066cc;
		margin-bottom: 10px;
	}

	.course-code {
		color: #666;
		margin: 15px 0;
	}

	@media (max-width: 768px) {
		.content-grid {
			grid-template-columns: 1fr;
		}

		.quick-links {
			flex-direction: column;
		}
	}

	.dropdown {
		display: none;
		background: white;
		border-left: 2px solid #0066cc;
		padding: 10px;
	}

	.dropdown-content {
		padding-left: 20px;
		color: #333;
	}

	.dropdown-content div {
		padding: 8px 0;
		cursor: pointer;
		color: #0066cc;
	}

	.dropdown-content div:hover {
		color: rgb(0, 188, 38);
	}
</style>

<?php
include("includes/footer.php");
?>