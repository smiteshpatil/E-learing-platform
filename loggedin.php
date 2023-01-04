<?php
  require "header.php" ;
?>


<nav aria-label="breadcrumb" >
  <ol class="breadcrumb" style="background:linear-gradient(to right,rgba(100,150,150, 1),rgba(150, 150, 150, 1))">
    <li class="breadcrumb-item active" aria-current="page"
    style="color:white;">Home</li>
  </ol>
</nav>

<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="img-fluid" src="images/theme.jpg">
		</div>

	</div>

<div class="slogan" style="font-family: Merriweather, Montserrat, Sacramento;
  text-align: center;
  color: white;
  position: absolute;
  top:20%;
  right: 10%;
" >
	<h3>We help you Shape your</h3>
	<h1>Career and Future</h1>
</div>
	
	<div id="study_material_section">
		<div id="study-material-inner" class="container">

			<div class="row justify-content-center">
				<div class="col-md-4">
					<div class="card" style="width: 20rem;">
						<div class="inner">
							<img class="card-img-top" src="images/programming.jpg" alt="Card image cap">
						</div>
						<div class="card-body">
							<h5 class="card-title">Java</h5>
							<p class="card-text">Java is a widely used object-oriented programming language and software platform that runs on billions of devices</p>
							<a href="loggedin/computer_science_java.php" class="btn btn-success">Java Courses...</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card" style="width: 20rem;">
						<div class="inner">
							<img class="card-img-top" src="images/web-dev.jpg" alt="Card image cap">
						</div>
						<div class="card-body">
							<h5 class="card-title">C++ </h5>
							<p class="card-text">C++ is an object-oriented programming language which gives a clear structure to programs and allows code to be reused, lowering development costs</p>
							<a href="loggedin/computer_science_c++.php" class="btn btn-success">C++ Courses...</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card" style="width: 20rem;">
						<div class="inner">
							<img class="card-img-top" src="images/data-science.jpg" alt="Card image cap">
						</div>
						<div class="card-body">
							<h5 class="card-title">Python</h5>
							<p class="card-text">Python is a high-level, general-purpose programming language. Its design philosophy emphasizes code readability with the use of significant indentation.</p>
							<a href="loggedin/computer_science_python.php" class="btn btn-success">Python Courses...</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card" style="width: 20rem;">
						<div class="inner">
							<img class="card-img-top" src="images/Machine-Learning.jpg" alt="Card image cap">
						</div>
						<div class="card-body">
							<h5 class="card-title">English</h5>
							<p class="card-text">Communication is simply the act of transferring information from one place, person or group to another. Every communication involves (at least) one sender, a message and a recipient.</p>
							<a href="#" class="btn btn-success">Learn English...</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card" style="width: 20rem;">
						<div class="inner">
							<img class="card-img-top" src="images/cyber security.jpg" alt="Card image cap">

						</div>
						<div class="card-body">
							<h5 class="card-title">Cyber Security</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk
								of
								the card's content.</p>
							<a href="#" class="btn btn-success">Learn More...</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card" style="width: 20rem;">
						<div class="inner">
							<img class="card-img-top" src="images/iot.jpg" alt="Card image cap">
						</div>
						<div class="card-body">
							<h5 class="card-title">Internet Of Things</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk
								of
								the card's content.</p>
							<a href="#" class="btn btn-success">Learn More...</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

		

	<center>
		<a href="loggedin/all_courses.php" class="mybtn2">Browse All Online Courses</a>
	</center>



  <?php
  require "footer.php";
   ?>
