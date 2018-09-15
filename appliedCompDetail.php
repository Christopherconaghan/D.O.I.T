<?php include "header.php";?>

	<!-- Courses -->

	<div class="courses">
		<div class="container">
			<div class="row">
				<!-- Courses Details -->
				<div class="col-lg-12">
					<div class="section_title_container text-center">
						<h2 class="section_title">Course Details</h2>
						<div class="section_subtitle">
							
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<div class="card mb-3">
						<img class="card-img-top" src="images/onlineappliedcomputing.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Applied Computing</h5>
							<p>This level 8 programme is designed to give the graduate experience with a wide range of fundamental computing skills from computer programming where you will learn to give the computer instructions to tell it what you want it to do to computer architecture where you will learn how to install and maintain computers.</p>
                            
                            <p>In addition it will develop the students' knowledge in later years to give them a strong set of management skills required to work in and manage modern ICT organisations. All student will complete a major project which may be industry related.</p><br>
							<button type="button" class="btn btn-primary float-right">Apply Now</button>
							<!-- Button below coded in php to only be active if logged in needs tested... -->
							<!-- <input type="button"  class="btn btn-primary float-right" <?php if ($userID == '0'){ ?> disabled <?php   } ?> onclick="addNameAndIDtoDB(<?php echo $row["course_id"]?>)" /> -->

						</div>
					</div><br><br>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-6">
					<div class="card">
					<div class="card-header text-white bg-primary"><strong>Thomas Dowling - Head of Department</strong></div>
					<div class="card-body">
						<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/GqqiPv23Ez0?rel=0" allowfullscreen></iframe>
						</div>
					</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="card">
					<div class="card-header text-white bg-primary"><strong>What Do You Think Computer Programers Do?</strong></div>
					<div class="card-body">
						<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/2i8lhKum3aI?rel=0" allowfullscreen></iframe>
						</div>
					</div>
					</div>
				</div>
			</div><br><br>

			<div class="row">
				<div class="col-lg-4">
					<div class="card">
					<div class="card-header text-white bg-primary"><strong>Minimum Entry Requirements</strong></div>
					<div class="card-body">
						<h5 class="card-title">Leaving Certificate</h5>
						<p class="card-text">
						Minimum Six O6/H7<br>
						Maths O6/H7<br>
						English or Irish O6/H7<br>
						At least two H5</p>
						<h5 class="card-title">Number of Places</h5>
						<p class="card-text">
						Twenty Four (24)</p>
					</div>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="card">
					<div class="card-header text-white bg-primary"><strong>Career Oppertunities</strong></div>
					<div class="card-body">
						<h5 class="card-title">Career Pathway</h5>
						<p class="card-text">
						Software Development Houses<br>
						Banks and Insurance Companies</p>
						<h5 class="card-title">Graduate Careers</h5>
						<p class="card-text">
						Software Developer / Programmer<br>
						Data Analyst / Scientist<br>
						Mobile App Developer</p>
					</div>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="card">
					<div class="card-header text-white bg-primary"><strong>Further Information</strong></div>
					<div class="card-body">
						<h5 class="card-title">Head of Department</h5>
						<p class="card-text">
						Thomas Dowling<br>
						Head of Department</p>
						<h5 class="card-title">Contact</h5>
						<p class="card-text">
						Email: Thomas.Dowling@lyit.ie<br>
						Telephone: +353 (0)74 918 6304<br>
						Office Hours Mon - Fri 9am - 5pm</p>
					</div>
					</div>
				</div>

				<div class="col-lg-12"><br><br><br>
					<div class="card card-header text-white bg-primary"><strong>Modules Included in DevOps</strong></div>
				</div>

				<!-- Modules -->
				<div class="col-12">
					<div class="courses_container">
						<div class="row courses_row">
							<!-- Course -->
							<div class="col-lg-4 course_col">
								<div class="course">
									<div class="course_image"><img src="images/mod_1.jpg" alt=""></div>
									<div class="course_body">
										<h3 class="course_title"><a href="courseSelection.php">Process Management (Sem 1)</a></h3>
										<div class="course_teacher">R. Lennon</div>
									</div>
								</div>
							</div>

							<!-- Course -->
							<div class="col-lg-4 course_col">
								<div class="course">
									<div class="course_image"><img src="images/mod_2.jpg" alt=""></div>
									<div class="course_body">
										<h3 class="course_title"><a href="courseSelection.php">Server Administration (Sem 1)</a></h3>
										<div class="course_teacher">R. Lennon</div>
										
									</div>
								</div>
							</div>

							<!-- Course -->
							<div class="col-lg-4 course_col">
								<div class="course">
									<div class="course_image"><img src="images/mod_3.jpg" alt=""></div>
									<div class="course_body">
										<h3 class="course_title"><a href="courseSelection.php">Software Engineering (Sem 1)</a></h3>
										<div class="course_teacher">R. Lennon</div>
										
									</div>
								</div>
							</div>
						</div>

							<!-- Course -->
						<div class="row courses_row">
							<div class="col-lg-6 course_col">
								<div class="course">
									<div class="course_image"><img src="images/mod_4.jpg" alt=""></div>
									<div class="course_body">
										<h3 class="course_title"><a href="courseSelection.php">Scripting the Deployment Pipeline (Sem 2)</a></h3>
										<div class="course_teacher">R. Lennon</div>
										
									</div>
								</div>
							</div>

							<!-- Course -->
							<div class="col-lg-6 course_col">
								<div class="course">
									<div class="course_image"><img src="images/mod_5.jpg" alt=""></div>
									<div class="course_body">
										<h3 class="course_title"><a href="courseSelection.php">DevOps Project Management (Sem 2)</a></h3>
										<div class="course_teacher">R. Lennon</div>
										
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
				
			</div>
		</div>
	</div>

<?php include "footer.php";?>
<script src="js/courses.js"></script>