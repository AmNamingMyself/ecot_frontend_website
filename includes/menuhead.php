

<!--************************************
			Wrapper Start
	*************************************-->
	<div id="tg-wrapper" class="tg-wrapper">
		<!--************************************
				Header Start
		*************************************-->
		<header id="tg-header" class="tg-header tg-haslayout">
			<div class="tg-topbar">
				<div class="tg-leftbox">
					<span id="tg-datebox" class="tg-datebox"></span>
					<span class="tg-rtltextbox"> <a href= "https://www.ecot.ac.sz/online-applications" target="_blank" rel="noopener noreferrer">Apply </a> <a href="https://drive.google.com/file/d/1T6l-lLnoqUzTnM75GX1MC-dYoaauC0BU/view?usp=drive_link" target="_blank" rel="noopener noreferrer">Prospectus </a> <a href="contact.php">Contacts</a></span>
				</div>
				<!-- <div class="tg-rightbox"> -->
					<!-- <span class="tg-tollfree"><a href="javascript:void(0);">Logout</a></span> -->
					<!-- <div class="tg-themedropdown tg-languagesdropdown">
						<a href="javascript:void(0);" id="tg-languages" class="tg-btndropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							
							<span>QUICKLINKS</span>
						</a>
						<div class="tg-themedropdownbox" aria-labelledby="tg-languages">
							<ul class="tg-languageslist">
								<li><span>Calendar</span></li>
								<li><span>Directory</span></li>
								<li><span>Academics</span></li>
								<li><span>Admissions</span></li>
							</ul>
						</div> -->
					<!-- </div> -->
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="tg-logoandnoticeboard">
							<strong class="tg-logo">
    							<a href="#"> <img src="images/ecot logo.png" alt="logo"> </a></strong>

								<!-- Mobile Side Menu -->
								<div id="mobileSidebar" class="mobile-sidebar">

									<!-- Logo inside sidebar -->
									<div class="sidebar-logo">
										<a href="index.php" class="sidebar-home-icon">
											<i class="fa fa-home"></i> 
										</a>
									</div>
							<style>
									/* Main logo - desktop default small size */
								.tg-logo {
									display: block;
									text-align: left; /* always left-aligned */
									padding-left: 10px; /* small padding */
									position: relative;
								}

								.tg-logo img {
									width: 130px; /* desktop logo size */
									height: auto;
									display: block;
									transition: width 0.3s ease;
								}

								/* Hide blue topbar on smaller screens */
								@media (max-width: 800px) {
									.tg-topbar {
										display: flex;
									}

									/* Add blue line under logo for mobile */
									.tg-logo {
										border-bottom: 10px solid #003f7a; /* adjust thickness and color */
										padding-bottom: 10px; /* spacing below the line */
									}
								}

								/* Responsive logo resizing for mobile */
								@media (max-width: 600px) {
									.tg-logo img {
										width: 100px; /* shrink logo for smaller mobile screens */
									}
								}

								@media (max-width: 400px) {
									.tg-logo img {
										width: 80px; /* very small screens */
									}
								}
								/* Sidebar Home icon */
									.sidebar-logo {
										text-align: left;
										padding: 25px 10px;
										border-bottom: 4px solid rgba(255,255,255,0.1);
									}

									.sidebar-home-icon {
										font-size: 24px;
										color: #ffffff;
										text-decoration: none;
										font-weight: bold;
										display: flex;
										align-items: center;
										justify-content: center;
										gap: 8px; /* space between icon and text */
									}

									.sidebar-home-icon:hover {
										color: #00bfff;
									}


							</style>
									<button id="closeSidebar" class="close-btn">✕</button>

									<ul class="sidebar-menu">
										<li><a href="index.php">Home</a></li>
										<li><a href="about.php">About</a></li>
										<li><a href="history.php">History</a></li>
										<!-- <li><a href="academics.php">Academics</a></li> -->
										<li><a href="programs.php">Programs</a></li>
										<li><a href="academics.php">Faculties</a></li>
										<li><a href="research.php">SRC</a></li>
										<li><a href="contact.php">Contacts</a></li>
										<li><a href="https://www.ecot.ac.sz/online-applications" target="_blank">Apply Now</a></li>
									</ul>

								</div>
								<button id="mobileMenuBtn" class="mobile-menu-btn">☰</button>
								<style>
								/* Mobile Menu Button */
								.mobile-menu-btn {
										display: none;
										font-size: 30px;
										background: none;
										border: none;
										cursor: pointer;
										position: absolute;
										right: 20px;
										top: 20px;
										z-index: 1001;
									}

									/* Modern Sidebar */
									.mobile-sidebar {
										position: fixed;
										top: 0;
										left: -280px;
										width: px;
										height: 100%;
										background: #1541a9; /* dark modern color */
										padding-top: 70px;
										transition: left 0.35s ease;
										z-index: 1000;
										box-shadow: 4px 0 12px rgba(0,0,0,0.4);
									}

									/* Remove bullets */
									.mobile-sidebar ul {
										list-style: none;
										padding: 0;
										margin: 0;
									}

									/* Menu items */
									.mobile-sidebar ul li {
										padding: 14px 24px;
									}

									/* Bold text */
									.mobile-sidebar ul li a {
										color: #ffffff;
										text-decoration: none;
										font-size: 17px;
										font-weight: bold;
										display: block;
										transition: background 0.2s ease;
									}

									/* Hover effect */
									.mobile-sidebar ul li a:hover {
										background: rgba(27, 20, 209, 0.1);
										border-radius: 6px;
									}

									/* Close button */
									.close-btn {
										position: absolute;
										top: 18px;
										right: 18px;
										font-size: 24px;
										background: none;
										color: white;
										border: none;
										cursor: pointer;
									}

									/* Show mobile menu at 800px */
									@media (max-width: 800px) {
										.mobile-menu-btn {
											display: block;
										}

										#tg-navigation {
											display: none;
										}
									}
									/* Remove bullets completely */
										.sidebar-menu,
										.sidebar-menu li {
											list-style: none;
											margin: 0;
											padding: 0;
										}

										/* Sidebar logo */
										.sidebar-logo {
											text-align: center;
											padding: 15px 10px;
											border-bottom: 1px solid rgba(255,255,255,0.1);
										}

										.sidebar-logo img {
											width: 80px;
											height: auto;
										}

										/* Menu container spacing */
										.sidebar-menu {
											padding-top: 15px;
										}

										/* Sidebar links */
										.sidebar-menu li {
											padding: 12px 20px;
										}

										.sidebar-menu li a {
											display: block;
											font-weight: bold;
											text-decoration: none;
											color: white;
											font-size: 16px;
											transition: background 0.2s ease;
										}

										.sidebar-menu li a:hover {
											background: rgba(255,255,255,0.1);
											border-radius: 6px;
										}

								</style>
								<script>
																		
									const menuBtn = document.getElementById("mobileMenuBtn");
									const sidebar = document.getElementById("mobileSidebar");
									const closeBtn = document.getElementById("closeSidebar");

									menuBtn.addEventListener("click", () => {
										sidebar.style.left = "0";
									});

									closeBtn.addEventListener("click", () => {
										sidebar.style.left = "-280px";
									});

								</script>

							<div class="tg-noticeboard hidden-xs">
								<div class="tg-textbox">
									<span>Admission Opened!</span>
									<span>Last Date For Admission is 01/03/2026</span>
								</div>
								<figure><img src="images/img-01.jpg" alt="image description"></figure>
							</div>
						</div>
						<div class="tg-navigationarea">
							<nav id="tg-nav" class="tg-nav">
								<div class="navbar-header">
									<!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button> -->
								</div>
								<div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
									<ul>
										<li class="current-menu-item">
											<a href="index.php"><i class="fa fa-home"></i></a>
											
										</li>
										<li class="menu-item-has-mega-menu">
											<a href="javascript:void(0);">About</a>
											<div class="mega-menu">
												<ul class="mega-menu-row">
													<li class="mega-menu-col">
														
														<ul>
															<li><a href="about.php">About</a></li>
															<li><a href="history.php">History</a></li>
															<!-- <li><a href="governance.php">Governance</a></li> -->
														</ul>
													</li>
												</ul>
											</div>
										</li>

										<li class="menu-item-has-mega-menu">
											<a href="javascript:void(0);">Academics</a>
											<div class="mega-menu">
												<ul class="mega-menu-row">
													<li class="mega-menu-col">
														
														<ul>
															<li><a href="academics.php">Faculties</a></li>	
															<li><a href="programs.php">Programs</a></li>
															<li><a href="https://drive.google.com/file/d/1T6l-lLnoqUzTnM75GX1MC-dYoaauC0BU/view?usp=drive_link" target="_blank" rel="noopener noreferrer">Prospectus</a></li>
														</ul>
													</li>
												</ul>
											</div>
		
										
										<!-- <li class="menu-item-has-children">
											<a href="admissions.php">Admission</a>
											<ul class="sub-menu">
												<li class="menu-item-has-children">
													<a href="https://www.ecot.ac.sz/online-applications" target="_blank" rel="noopener noreferrer">Apply </a>
												</li>
												
												<li class="menu-item-has-children">
													<a href="tuition.php">Tuition</a>
													
												</li>
												<li class="menu-item-has-children">
													<a href="javascript:void(0);">Careeer Guidance</a>
													<ul class="sub-menu">
														<li><a href="">Career Centre</a></li>
														<li><a href="">Career Fairs</a></li>
														<li><a href="">Get Help</a></li>
													</ul>
												</li>
											</ul>
										</li> -->
										<li class="menu-item-has-children">
											<a href="#">Student Life</a>
											<ul class="sub-menu">
												<li class="menu-item-has-children">
													<a href="research.php">SRC </a>
													<!-- <ul class="sub-menu">
														<li><a href="">Academic Excellence</a></li>
														<li><a href="">Student Responsibilities</a></li>
														<li><a href="">Considerations &amp; FAQ&acute;s</a></li>
													</ul> -->
												</li>
												
											</ul>
										</li>
										<!-- <li class="menu-item-has-children">
											<a href="research.php">Research</a>
											<ul class="sub-menu">
												<li><a href="">Library</a></li>
												<li class="menu-item-has-children">
													<a href="research.php">Research</a>
													<ul class="sub-menu">
														<li><a href="">Interlectual Property</a></li>
														<li><a href="">Student&acute;s Resources</a></li>
														<li><a href="">Assistive Technology</a></li>
													</ul> 
												</li>
											</ul>
										</li> -->
										<li class=""><a href="contact.php" target="_blank ">Contacts</a></li>
										<li class=""><a href="https://www.ecot.ac.sz/online-applications" target="_blank" rel="noopener noreferrer">Apply Now</a></li>
										
									</ul>
								</div>
							</nav>
							<!-- <div class="tg-searchbox">
								<a id="tg-btnsearch" class="tg-btnsearch" href="javascript:void(0);"><i class="icon-magnifier"></i></a>
								<form class="tg-formtheme tg-formsearch">
									<fieldset><input type="search" name="search" class="form-control" placeholder="Start Your Search Here"></fieldset>
								</form>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</header>
		<!--************************************
				Header End
		*************************************-->