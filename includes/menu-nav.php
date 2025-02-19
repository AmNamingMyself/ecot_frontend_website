<!--************************************
			Wrapper Start
	*************************************-->
<div id="tg-wrapper" class="tg-wrapper" style="">
	<!--************************************
				Header Start
		*************************************-->
	<header id="tg-header" class="tg-header tg-haslayout">
		<div class="tg-topbar">
			<div class="tg-leftbox">
				<span id="tg-datebox" class="tg-datebox"></span>
				<?php
				// if url is in ecot_admin
				if (strpos($_SERVER['REQUEST_URI'], 'ecot_admin') == false) {
					echo '<span class="tg-rtltextbox"> <a href="admissions.php">Admissions</a>';
				}

				?>


				<!-- <span class="tg-rtltextbox"> <a href="#">Students</a> <a href="#">Faculty</a><a href="#">Alumni</a> <a href="#">A-Z</a></span> -->
			</div>
			<div class="tg-rightbox">
				<?php
				// if url is in ecot_admin
				if (strpos($_SERVER['REQUEST_URI'], 'ecot_admin') == false) { ?>

					<!-- <span class="tg-tollfree"><a href="">Register</a> <a href="">Login</a></span> -->
					<div class="tg-themedropdown tg-languagesdropdown">
						<a href="javascript:void(0);" id="tg-languages" class="tg-btndropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

							<span>QUICKLINKS</span>
						</a>
						<div class="tg-themedropdownbox" aria-labelledby="tg-languages">
							<ul class="tg-languageslist">
								<li><a href="">Calendar</a></li>
								<li><a href="academics.php">Academics</a></li>
								<li><a href="admissions.php">Admissions</a></li>
								<li><a href="contact.php">Contact Us</a></li>
							</ul>
						</div>
					</div>
				<?php } else { ?>
					<span class="tg-tollfree">
						<a>
							<?php
							if (isset($_SESSION['user_name']) && $_SESSION['user_name'] !== '') { ?>
								<a href="logout.php">Logout</a>
								<a style="font-style:italic;"><?php echo $_SESSION['user_name']; ?></a>
							<?php } else {
								echo '<span class="tg-rtltextbox"> <a href="javascript:void(0);">Admin Panel</a>';
							}
							?>
						</a>
					</span>
					<!-- </div> -->
				<?php } ?>
			</div>
		</div>
		<?php
		// if url is in ecot_admin
		if (strpos($_SERVER['REQUEST_URI'], 'ecot_admin') == false) { ?>


			<div class="clearfix"></div>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="tg-logoandnoticeboard">
							<strong class="tg-logo"><a href="">
									<?php
									// if url is NOT in ecot_admin
									if (strpos($_SERVER['REQUEST_URI'], 'ecot_admin') == false) {
										echo '<img src="images/logsd.png" alt="Eswatini College Of Technology">';
									} else {
										echo '<img src="../images/logsd.png" alt="Eswatini College Of Technology">';
									}
									?>
								</a></strong>
							<div class="tg-noticeboard hidden-xs">
								<div class="tg-textbox">
									<span>Admission Opened!</span>
									<span>Last Date For Admission 30/03/2025</span>
								</div>
								<figure><img src="images/img-01.jpg" alt="image description"></figure>
							</div>
						</div>
						<div class="tg-navigationarea">
							<nav id="tg-nav" class="tg-nav">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
									<ul>
										<li class="current-menu-item">
											<a href="index.php"><i class="fa fa-home"></i></a>

										</li>
										<li class="menu-item-has-mega-menu">
											<a href="about.php">About</a>
											<div class="mega-menu">
												<ul class="mega-menu-row">
													<li class="mega-menu-col">
														<!-- <a href="javascript:void(0);">About ECOT</a> -->
														<ul>
															<!-- <li><a href="about.php">About</a></li> -->
															<li><a href="history.php">History</a></li>
															<li><a href="governance.php">Governance</a></li>
														</ul>
													</li>
													<!-- <li class="mega-menu-col">
													<a href="javascript:void(0);">Media &amp; News</a>
													<ul>
														<li><a href="">Media Queries</a></li>
														<li><a href="">Events Calendar</a></li>
														<li><a href="">FAQ&acute;s</a></li>
													</ul>
												</li> -->
												</ul>

											</div>
										</li>
										<li class="menu-item-has-children"><span class="tg-dropdowarrow"><i class="fa  fa-angle-right"></i></span>
											<a href="academics.php">Academics</a>
											<ul class="sub-menu">
												<li><a href="education.php">Education</a></li>
												<li><a href="business.php">Business</a></li>
												<li><a href="engineeringScience.php">Engineering and Science</a></li>
												<li><a href="buildingCivil.php">Building and Civil Engineering</a></li>
												<li><a href="ict.php">Information Communication Technology</a></li>
											</ul>
										</li>

										<!--   and Information Cofmmunication Technology -->


										<li class="menu-item-has-children">
											<a href="admissions.php">Admission</a>
											<ul class="sub-menu">
												<li><a href="apply.php">Apply</a></li>
												<li><a href="programs.php">Programs</a></li>
												<li><a href="tuition.php">Tuitions</a></li>
												<li><a href="faqs.php">FAQ&acute;s</a></li>
												<!-- <li class="menu-item-has-children">
												<a href="apply.php">Apply </a>
												<ul class="sub-menu">
													TODO: link apply now to system
													<li><a href="">Apply Now</a></li>
													TODO: what to put here
													<li><a href="">Proficiency</a></li>
													<li><a href="">Considerations</a></li>
													<li><a href="">Requirements</a></li>
													<li><a href="">FAQ&acute;s</a></li>
												</ul>
											</li> -->
												<!-- <li class="menu-item-has-children">
												<a href="programs.php">Programs</a> -->
												<!-- <ul class="sub-menu">
													<li><a href="">Graduate</a></li>
													<li><a href="">Undergraduate</a></li>
												</ul> -->
												<!-- </li> -->
												<!-- <li class="menu-item-has-children">
												<a href="tuition.php">Tuitions</a>
												<ul class="sub-menu">
													<li><a href="">Self Sponsored</a></li>
													<li><a href="">Government Sponsored</a></li>

												</ul>
											</li> -->
												<!-- FIXME: Find out more about career guidance -->
												<!-- <li class="menu-item-has-children">
												<a href="javascript:void(0);">Career Guidance</a>
												<ul class="sub-menu">
													<li><a href="">Career Centre</a></li>
													<li><a href="">Career Fairs</a></li>
													<li><a href="">Get Help</a></li>
												</ul>
											</li> -->
											</ul>
										</li>
										<li class="menu-item-has-children">
											<a href="javascript:void(0);">Student Life</a>
											<ul class="sub-menu">
												<li class="menu-item-has-children">
													<a href="javascript:void(0);">Academic Advising </a>
													<!-- <ul class="sub-menu">
													<li><a href="">Academic Excellence</a></li>
													<li><a href="">Student Responsibilities</a></li>
													<li><a href="">Considerations &amp; FAQ&acute;s</a></li>
												</ul> -->
												</li>
												<li class="menu-item-has-children">
													<a href="javascript:void(0);">Academic Calendar</a>
													<ul class="sub-menu">
														<li><a href="">Events</a></li>
														<li><a href="">Full Calendar</a></li>
														<li><a href="">News &amp; Media</a></li>
													</ul>
												</li>
												<!-- <li class="menu-item-has-children">
												<a href="javascript:void(0);">Career Centre</a>
												<ul class="sub-menu">
													<li><a href="">Job Search</a></li>
													<li><a href="">Interview Help</a></li>
													<li><a href="">Career Counciling</a></li>
													<li><a href="">Alumni Help</a></li>

												</ul>
											</li>  -->
												<!-- <li class="menu-item-has-children">
													 <a href="javascript:void(0);">Campus Services</a>
												</li> -->
												<li class="menu-item-has-children">
													<a href="SRC.php">Student Representative</a>

												</li>
												<!-- <li><a href="">Student Associations</a></li> -->
												<!-- <li><a href="SRC.php">Student Representative</a></li> -->
												<!-- <li><a href="">Student Clubs</a></li>
													<li><a href="">Student Societies</a></li> -->

											</ul>
										</li>
										<li class="menu-item-has-children">
											<a href="#">Research</a>
											<ul class="sub-menu">
												<li><a href="research.php" target="_blank">Library</a></li>
												<li class="menu-item-has-children">
													<a href="research.php" target="_blank">Research</a>
													<!-- <ul class="sub-menu">
													<li><a href="">Interlectual Property</a></li>
													<li><a href="">Student&acute;s Resources</a></li>
													<li><a href="">Assistive Technology</a></li>
												</ul> -->
												</li>
											</ul>
										</li>
										<!-- FIXME: Handle the giving, alumni, and vacancies pages -->

										<!--
									<li class="menu-item-has-children">
										<a href="javascript:void(0);">Alumni</a>
										<ul class="sub-menu">
											<li><a href="">Join</a></li>
											<li><a href="">Alumni Programs</a></li>
											<li><a href="">Mentoring &amp; Giving</a></li>
										</ul>
									</li>
									<li class="menu-item-has-children">
										<a href="javascript:void(0);">Giving</a>
										<ul class="sub-menu">
											<li><a href="">Donate Now</a></li>
											<li><a href="">Ways to give</a></li>
											<li><a href="">Your impact</a></li>
										</ul>
									</li>
									<li class=""><a href="javascript:void(0);">Vacancies</a></li>
									-->
										<li class=""><a href="contact.php">Contacts</a></li>
									</ul>
								</div>
							</nav>
							<div class="tg-searchbox">
								<a id="tg-btnsearch" class="tg-btnsearch" href="javascript:void(0);"><i class="icon-magnifier"></i></a>
								<form class="tg-formtheme tg-formsearch">
									<fieldset><input type="search" name="search" class="form-control" placeholder="Start Your Search Here"></fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php
		}

		?>
	</header>
	<!--************************************
				Header End
		*************************************-->