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
					<li class="tg-active">admissions</li>
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
				   color:rgb(0, 188, 38);
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
		   color:rgb(0, 188, 38);
	   }
	   
</style>
<main>
	
<!-- <div class="containers">
    <div class="quick-links">
        <a href="#" class="quick-link">How to Apply</a>
        <a href="#" class="quick-link">Apply Now</a>
        <a href="#" class="quick-link">Procedure for fees payment</a>
        <a href="#" class="quick-link">Student finance contacts</a>
    </div> -->
</div>
    <div class="containers1">
    
        <div class="content-grid">
            <div class="search-section">
                <input type="text" class="search-input" placeholder="Search for any programme...">
                
                <div class="program-list">
                    <div class="program-item">ALL PROGRAMME CLUSTERS</div>
                    <!-- <div class="dropdown">
                        <div class="dropdown-content">
                            <div>Engineering</div>
                            <div>Science</div>
                            <div>ICT</div>
                        </div>
                    </div> -->
        
                    <div class="program-item">Faculty of ICT</div>
                    <div class="dropdown">
                        <div class="dropdown-content">
                            <div>Diploma in Computer Science</div>
                        </div>
                    </div>
        
                    <div class="program-item">Faculty of Business Administration</div>
                    <div class="dropdown">
                        <div class="dropdown-content">
                            <div>Accounting</div>
                            <div>Finance</div>
                            <div>Marketing</div>
                        </div>
                    </div>
        
                    <div class="program-item">Faculty of Building and Civil Engineering</div>
                    <div class="dropdown">
                        <div class="dropdown-content">
                            <div>Architecture</div>
                            <div>Civil Engineering</div>
                            <div>Quantity Surveying</div>
                        </div>
                    </div>
        
                    <div class="program-item">Faculty of Education</div>
                    <div class="dropdown">
                        <div class="dropdown-content">
                            <div>Secondary Teacher's Diploma in commercials</div>
                            <div>Teacher's Diplonma in Information Technology</div>
                            <div>Computer Studies</div>
                        </div>
                    </div>
        
                    <div class="program-item">Faculty of Engineering and Science</div>
                    <div class="dropdown">
                        <div class="dropdown-content">
                            <div>Diploma in Mechanical Engineering</div>
                            <div>Diploma in Electrical Engineering</div>
                            <div>Diploma in Automotive Light</div>
							<div>Diploma in Automotive heavy</div>
							<div>Diploma in </div>
                        </div>
                    </div>
                </div>
            </div>

			
        </div>
        

            <div class="main-content">
                <h1>ALL PROGRAMME CLUSTERS</h1>
                
                <div class="description">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim natus ipsa ad rem iusto error voluptas explicabo culpa nulla, distinctio ut necessitatibus facilis qui in. Iure nemo sit ipsam laborum!</p>
                    <br>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam laboriosam quam, porro soluta obcaecati atque provident deserunt odit officia eaque facere incidunt accusamus voluptatem? Nemo reprehenderit consectetur in animi molestias.</p>
                    <br>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum consequuntur ipsam cum illo ex quo, dignissimos repellat culpa adipisci! Illum enim deserunt ipsum cumque ab, exercitationem sed numquam nesciunt facere?</p>
                </div>

                <h2 class="bachelor-title">Diploma programmes</h2>

                <div class="program-details">
                    <h3>Diploma in Computer Science</h3>
                    <p class="course-code">Course code - H31</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit doloribus ipsum amet velit eveniet ullam, laboriosam cum maxime ducimus quod minus asperiores iusto perspiciatis odit at placeat, voluptates ratione et.</p>
                    <br>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni quas, praesentium soluta ad consequuntur maxime quisquam neque incidunt iste beatae non. Cumque obcaecati repudiandae amet ipsa accusantium culpa tempora doloremque!</p>
                </div>
                <div class="program-details">
                    <h3>Diploma in Civil Engineering</h3>
                    <p class="course-code">Course code - H31</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt suscipit, in reprehenderit, tempore iste labore, explicabo mollitia perferendis cumque aut deleniti placeat beatae sapiente alias odit? Nisi accusantium corporis ad?</p>
                    <br>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam repellendus similique, nihil dolorum molestiae minus, excepturi ab mollitia obcaecati sed unde perferendis libero? Accusamus, quaerat! Possimus magni officia iure. Provident.</p>
                </div>
                <div class="program-details">
                    <h3>Diploma in Architecture</h3>
                    <p class="course-code">Course code - H31</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat repellat sit ducimus. Vel, eius tenetur esse aliquid assumenda nobis commodi earum? Dignissimos, ratione iste ex natus itaque sint quas odio!</p>
                    <br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad optio maiores voluptate possimus perferendis rem, aliquam, earum dicta, in minima amet unde neque libero iste consequuntur a minus provident quaerat.</p>
                </div>
            </div>
        </div>
    </div>
		
<div class="containers">
    <div class="quick-links">
        <a href="admissions.php" class="quick-link">How to Apply</a>
        <a href="#" class="quick-link">Apply Now</a>
        <a href="#" class="quick-link">Procedure for fees payment</a>
        <a href="#" class="quick-link">Student finance contacts</a>
    </div>
</div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const items = document.querySelectorAll(".program-item");
    
            items.forEach((item) => {
                item.addEventListener("click", function () {
                    // Close all other dropdowns
                    document.querySelectorAll(".dropdown").forEach((dropdown) => {
                        if (dropdown !== this.nextElementSibling) {
                            dropdown.style.display = "none";
                        }
                    });
    
                    // Toggle current dropdown
                    const dropdown = this.nextElementSibling;
                    if (dropdown && dropdown.classList.contains("dropdown")) {
                        dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
                    }
                });
            });
    
            // Close dropdowns when clicking outside
            document.addEventListener("click", function (event) {
                if (!event.target.closest(".program-item")) {
                    document.querySelectorAll(".dropdown").forEach((dropdown) => {
                        dropdown.style.display = "none";
                    });
                }
            });
        });
    </script>
    
    
<?php
include("includes/footer.php");
?>