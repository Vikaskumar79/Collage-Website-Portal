<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ALL VERSION CSS -->
    <!-- <link rel="stylesheet" href="css/versions.css"> -->
    <!-- Responsive CSS -->
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <!-- Custom CSS -->
    <!-- <link rel="stylesheet" href="css/custom.css"> -->

       <!-- Modernizer for Portfolio -->
       <!-- <script src="modernizer.js"></script> -->
      

    <title>Navbar</title>
  </head>
  <body>
  <header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.php">
					<img class="icclogo" src="images/logo.png" alt="" />
				</a>
                 
                <!-- <h1 class="iccname">ICC</h1> -->
                    
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item "><a class="nav-link" href="index.php">HOME</a></li>
						
                        <li class="nav-item"><a class="nav-link" href="/iccfinal/about.php">ABOUT US</a></li>

                        <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">facilities</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="/iccfinal/canteen.php">Canteen</a>
								<a class="dropdown-item" href="/iccfinal/hostel.php">Hostel </a>
                                <a class="dropdown-item" href="/iccfinal/transoprt.php">Transport </a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">NEWS & EVENT </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="/iccfinal/notice_front.php">Circular/Notice</a>
								<a class="dropdown-item" href="/iccfinal/event_front.php">Event</a>
								<!-- <a class="dropdown-item" href="#">College Magazine </a> -->
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Academics</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="/iccfinal/academic.php">Academics Overview </a>
								<a class="dropdown-item" href="/iccfinal/academic-Cal.php">Academic Calendar </a>
								<a class="dropdown-item" href="/iccfinal/department.php">Department & Faculites </a>
								<a class="dropdown-item" href="/iccfinal/staff.php">Meet Our Faculty </a>
								<a class="dropdown-item" href="/iccfinal/library.php">Library </a>
                                <a class="dropdown-item" href="/iccfinal/courses.php">Courses </a>
							</div>
						</li>
                        <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Admission</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
                                <a class="dropdown-item" href="/iccfinal/addmission.php">Admission Overview</a>
								<a class="dropdown-item" href="/iccfinal/courses.php">Courses Offered</a>
                                <a class="dropdown-item" href="/iccfinal/procedure.php">Procedure</a>
                                <a class="dropdown-item" href="/iccfinal/contact_info.php">Contact-Info</a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="/iccfinal/contact.php">Contact Us</a></li>
						<li class="nav-item"><a class="nav-link" href="/iccfinal/feedback.php">Feedback</a></li>
					</ul>
					<!-- <ul class="nav navbar-nav navbar-right">
                        <li><a class="hover-btn-new log orange" href="/updateicc/iccfinal/admin/index.php"><span>LOGIN</span></a></li>
                    </ul> -->
				</div>
			</div>
		</nav>
	</header>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>