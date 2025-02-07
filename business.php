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
						<li><a href="academics.php">Academic</a></li>
						<li class="tg-active">Business</li>
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
				<div id="tg-twocolumns" class="tg-twocolumns" style="margin-top: 10px;">
					<div class="col-xs-12 col-sm-8 col-md-9 col-lg-9 pull-left">
						<div id="tg-content" class="tg-content">
							<div class="tg-addmission">
								<div class="tg-pagetitle">
									<!-- <h2>Eswatini College Of Technology</h2> -->
									<h2>Faculty of Business</h2>
								</div>
								<div class="tg-container" style="padding-bottom: 15px;">
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate accusantium adipisci distinctio. Aspernatur fugit fugiat sequi expedita cumque pariatur! Voluptatum nam in a sed officia, recusandae ad hic voluptas nesciunt. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore suscipit fugiat, vel quasi iste ullam ipsum, maxime expedita quaerat velit tenetur aliquam a soluta fuga. Aliquam est praesentium rem adipisci!</p>
								</div>

								<!-- <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9" style="margin-top: 15px;"> -->
								<h3 class="mt-5">Porgrams Offered</h3>
								<div class="row container1">
									<!-- Card 1 -->
									<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
										<div class="card d-flex flex-column align-items-center p-2">
											<img src="images/faculty/hr.jpeg" class="profile-img rounded-circle" alt="Person 1">
											<div class="card-body">
												<h5 class="card-title">Diploma in Human Resources Management</h5>
												<a href="application/">Apply now</a>
												<!-- TODO: link to application portal -->
											</div>
										</div>
									</div>
									<!-- Card 2 -->
									<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
										<div class="card d-flex flex-row align-items-center p-2">
											<img src="images/faculty/office.jpeg" class="profile-img rounded-circle" alt="Person 2">
											<div class="card-body">
												<h5 class="card-title">Diploma in Office Management and Technology</h5>
												<a href="application/">Apply now</a>
												<!-- TODO: link to application portal -->
											</div>
										</div>
									</div>
									<!-- Card 3 -->
									<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
										<div class="card d-flex flex-row align-items-center p-2">
											<img src="images/faculty/office.jpeg" class="profile-img rounded-circle" alt="Person 3">
											<div class="card-body">
												<p class="card-title" style="font-style:bold;">Diploma in Office Management and Technology</p>
												<a href="application/">Apply now</a>
												<!-- TODO: link to application portal -->
											</div>
										</div>
									</div>
								</div>
								<!-- </div> -->

								<style>
									.h3-programs {
										padding-top: 30px;
										padding-bottom: 10px !important;
									}

									.container1 {
										display: flex;
										gap: 0.75rem;

										margin-bottom: 50px;
									}

									/* .profile-img {
										width: 100%;
										height: 250px;
										object-fit: cover;
									} */

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


								<div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
									<!-- hey chat.. please include cards to display the management of the college -->
								</div>
							</div>
						</div>
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