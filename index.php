<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="title" content="Aruna Hospital - Best hospital in kakinada">
	<meta name="description" content="Discover excellence in healthcare at Aruna Hospital. With a commitment to compassionate care, our expert team offers a range of specialized medical services, including neurology, orthopedics, gynecology, and more. Aruna Hospital is the best Emergency hospital in kakinada.">

	<meta name="keywords" content="Best general surgery in kakinada,
	Best cosmetic gynecology in kakinada,
	Best neurosurgery hospital in kakinada,
	Best ENT hospitals in kakinada,
	Best kidney stone treatment in kakinada,
	Best general medicine hospital in kakinada,
	Best orthopedic hospital in kakinada,
	Best physiotherapy hospitals in kakinada,
	Best plastic surgery hospital in kakinada,
	best neurologist in kakinada,
	">
	
	<link rel="canonical" href="https://arunahospital.org/" /> 
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-Q0T419JMFR"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'G-Q0T419JMFR');
	</script>

	<title>Aruna Hospital</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="./images/aruna_favicon.png" rel="icon">
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/aos.css">

	<link rel="stylesheet" href="css/ionicons.min.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">


	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/custom.css">`
	<script src="https://kit.fontawesome.com/742df65007.js" crossorigin="anonymous"></script>

	<?php
// Define hospital details dynamically
$hospital_name = "Aruna Hospital";
$hospital_url = "https://arunahospital.org/";
$hospital_address = [
    "streetAddress" => "Gandhi Nagar, Ontimamidi Jn., Chagantivari Street",
    "addressLocality" => "Kakinada",
    "addressRegion" => "Andhra Pradesh",
    "postalCode" => "533004",
    "addressCountry" => "India"
];
$hospital_phone = ["+91 79979 90181", "+91 94937 40513"];
$hospital_logo = "https://arunahospital.org/logo.png"; // Update with actual logo URL from website
$hospital_description = "Aruna Hospital in Kakinada provides advanced medical care with expert doctors and modern facilities.";
$hospital_specialties = ["Cardiology", "Neurology", "Orthopedics", "Pediatrics"]; // Add relevant specialties
$hospital_opening_hours = [
    "Monday-Friday" => "09:00-18:00",
    "Saturday" => "09:00-14:00",
    "Sunday" => "Closed"
];

// Convert opening hours to Schema.org format
$opening_hours_array = [];
foreach ($hospital_opening_hours as $day => $time) {
    $opening_hours_array[] = "$day $time";
}

// Generate JSON-LD Schema Markup
$schema_data = [
    "@context" => "https://schema.org",
    "@type" => "Hospital",
    "name" => $hospital_name,
    "url" => $hospital_url,
    "logo" => $hospital_logo,
    "description" => $hospital_description,
    "telephone" => $hospital_phone,
    "address" => [
        "@type" => "PostalAddress",
        "streetAddress" => $hospital_address["streetAddress"],
        "addressLocality" => $hospital_address["addressLocality"],
        "addressRegion" => $hospital_address["addressRegion"],
        "postalCode" => $hospital_address["postalCode"],
        "addressCountry" => $hospital_address["addressCountry"]
    ],
    "medicalSpecialty" => $hospital_specialties,
    "openingHours" => $opening_hours_array
];

?>
<script type="application/ld+json">
<?= json_encode($schema_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES); ?>
</script>
</head>

 
	<section class="top-section d-lg-block d-none ">
		<div class="container">
			<div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
				<div class="col-lg-12 d-none d-md-block">
					<div class="row d-flex">
						<div class="col-md-5 pr-3 d-flex topper align-items-center">
							<span class="text"> <i class="icon-phone"></i> +91 94937 40513</span>
							<span class="text"> <i class="icon-envelope"></i> arunahospital.999@gmail.com</span>
						</div>
						<div class="col-md-4 pr-3 d-flex topper align-items-center">
							<span class="text"> <i class="icon-map-marker"></i> Chaganti Vari Street, Kakinada</span>
						</div>
						<div class="col-md-3 d-flex topper align-items-center justify-content-end">
							<div>
								<a href="https://www.facebook.com/profile.php?id=61552474136305" target="_blank"><i
										class="fa-brands fa-facebook"
										style="height:30px; width:30px; color:white"></i></a>
								<a href="https://www.instagram.com/aruna_hospital_kakinada/" target="_blank"><i
										class="fa-brands fa-instagram"
										style="height:30px; width:30px; color:white"></i></a>
								<a href="https://www.youtube.com/channel/UCxqTQfOzRZLO7gNJQSgTGIw" target="_blank"><i
										class="fa-brands fa-youtube"
										style="height:30px; width:30px; color:white"></i></a>
								<a href="https://www.linkedin.com/in/aruna-cople-clinic/" target="_blank"><i
										class="fa-brands fa-linkedin"
										style="height:30px; width:30px; color:white"></i></a>
								<a href="https://in.pinterest.com/arunahospitalkakinada2023/" target="_blank"><i
										class="fa-brands fa-pinterest"
										style="height:30px; width:30px; color:white"></i></a>
								<a href="https://twitter.com/ArunaHospitals"><i class="fa-brands fa-twitter"
										style="height:30px; width:30px; color:white"></i></a>

								<!-- <i class="ml-4 icon-facebook"><a href="https://www.facebook.com/profile.php?id=61552474136305" target="_blank"><span class="icon-facebook"></span></a></i>
								<i class="ml-4 icon-instagram"><a href="https://www.instagram.com/aruna_hospital_kakinada/" target="_blank"><span class="icon-instagram"></span></a></i>
								<i class="ml-4 icon-youtube-play"><a href="https://www.youtube.com/channel/UCxqTQfOzRZLO7gNJQSgTGIw" target="_blank"><span class="icon-youtube-play"></span></a></i> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light pt-3 pb-3  bg-light w-100 sticky-header shadow"
		id="ftco-navbar">
		<div class="container d-flex align-items-center">
			<a class="navbar-brand" href="index.php">
				<img src="./images/logo.jpg" alt="Your Logo" width="150">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
				aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>
			<!-- <p class="button-custom order-lg-last mb-0 d-none d-md-block"><a href="appointment.html" class="btn btn-secondary py-2 px-3">Appointment</a></p> -->
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav mr-auto ml-auto">
					<li class="nav-item"><a href="index.php" class="nav-link active">Home</a></li>
					<li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
					<li class="nav-item dropdown">
						<a href="doctor.html" class="nav-link dropdown-toggle" id="doctorsDropdown" role="button"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Doctors</a>
						<div class="dropdown-menu" aria-labelledby="doctorsDropdown">
							<a class="dropdown-item" href="doctor.html">Inhouse</a>
							<a class="dropdown-item" href="consultants.html">Consultant</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a href="department.html" class="nav-link dropdown-toggle" id="doctorsDropdown" role="button"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Departments</a>
						<div class="dropdown-menu" aria-labelledby="doctorsDropdown">
							<div class="d-flex">
								<div class="">
									<a class="dropdown-item" href="general-surgery.html">General Surgery </a>
									<a class="dropdown-item" href="gynecology.html">Gynecological</a>
									<a class="dropdown-item" href="neuro-surgery.html">Neuro Surgery</a>
									<a class="dropdown-item" href="ent.html">ENT</a>
									<a class="dropdown-item" href="urology.html">Urology</a>
								</div>
								<div>
									<a class="dropdown-item" href="general-medicine.html">General Medicine</a>
									<a class="dropdown-item" href="orthopedics.html">Orthopedics</a>
									<a class="dropdown-item" href="physiotherapy.html">Physiotherapy</a>
									<a class="dropdown-item" href="plasticsurgey.html">Plastic Surgery</a>
									<a class="dropdown-item" href="neurology.html">Neurology</a>
								</div>
							</div>
						</div>
					</li>
					<!-- <li class="nav-item"><a href="department.html" class="nav-link">Departments</a></li> -->
					<li class="nav-item"><a href="gallery.html" class="nav-link">Gallery</a></li>
					<li class="nav-item"><a href="blog.php" class="nav-link">Blogs</a></li>

					<li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
					<li class="nav-item"><a href="appointment.html" class="nav-link">Appointment</a></li>
					<li class="custom-nav-item">
						<a href="https://coupleclinics.in/" class="custom-nav-link" target="_blank">
							<i class="icon-star"></i>
							Cosmetic Gynecology
							<i class="icon-star"></i>
						</a>
					</li>
				</ul>

			</div>
		</div>
	</nav>



	<section class="home-slider owl-carousel mb-5 border-0">

		 
		<!-- <div class="slider-item" >
				<img src="images/festival_sliders/mahashivratri.jpeg" class="img-fluid" alt="">
		</div> -->


		<div class="slider-item  ">
			<img src="images/sliders/1.png" class="img-fluid" alt="">

		</div>

		<div class="slider-item  ">
			<img src="images/sliders/2.png" class="img-fluid" alt="">

		</div>
		<div class="slider-item  ">
			<img src="images/sliders/3.png" class="img-fluid" alt="">

		</div>
		<div class="slider-item  ">
			<img src="images/sliders/4.png" class="img-fluid" alt="">

		</div>

	</section>

	<br>
	<br>
	<br>

	<section class="container  text-center new_resp1">
		<div class="row">
			<div class="col-md-4 align-self-center mb-5">
				<img src="images/24hours_emeregency_aruna_hospital.png" alt="24hours_emeregency" class="img-fluid">
			</div>
			<div class="col-md-4 align-self-center mb-5">
				<img src="images/NTRlogo.png" alt="24hours_emeregency" class="img-fluid">
			</div>
			<div class="col-md-4 align-self-center mb-5">
				<img src="images/best_gyencology_aruna_hospital.png" alt="best_gyencology" class="img-fluid">
			</div>
		</div>
		</div>

		</div>

		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftc-no-pb">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0"
					style="background-image: url(images/best-multispeciality-hospital-in-kakinada-aruna-hospital.png);">
				</div>
				<div class="col-md-7 wrap-about py-4 py-md-5 ftco-animate">
					<div class="heading-section mb-1">
						<div class="pl-md-5 ml-md-5">
							<span class="subheading">Welcome to Aruna Hospital</span>
							<h2 class="" style="font-size: 28px;"> Your Trusted Partner in Healthcare</h2>
						</div>
					</div>
					<div class="pl-md-5 ml-md-5 mb-5">
						<p>At Aruna Hospital, we are committed to providing exceptional healthcare services with a focus
							on compassion, expertise, and innovation. Our state-of-the-art facility is designed to cater
							to the diverse healthcare needs of our community.</p>
						<div class="row mt-5 pt-2">
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span
											class="flaticon-first-aid-kit"></span></div>
									<div class="text">
										<h3>HEALTH CARE</h3>
										<p>Caring Beyond Limits, Healing with Heart</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span
											class="flaticon-experiment-results"></span></div>
									<div class="text">
										<h3>EMERGENCY UNIT</h3>
										<p>Swift Care, Compassionate Response</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span
											class="flaticon-dropper"></span> </div>
									<div class="text">
										<h3>LAB TEST REPORTS</h3>
										<p>Precision in Diagnostics, Results with Trust</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span
											class="flaticon-heart-rate"></span></div>
									<div class="text">
										<h3>QUALIFIED DOCTORS</h3>
										<p>Expertise Beyond Measure, Your Health in Trusted </p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- <section class="ftco-intro" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<h2>We Provide Free Health Care Consultation</h2>
					<p class="mb-0">Your Health is Our Top Priority with Comprehensive, Affordable medical.</p>
					<p></p>
				</div>
				<div class="col-md-3 d-flex align-items-center">
					<p class="mb-0"><a href="#" class="btn btn-secondary px-4 py-3">Free Consutation</a></p>
				</div>
			</div>
		</div>
	</section> -->

	<section class="ftco-section new_resp">
		<div class="container">
			<div class="row justify-content-center mb-2">
				<div class="col-md-8 text-center heading-section ftco-animate">
					<!-- <span class="subheading">Departments</span> -->
					<h2>Our Departments</h2>
					<p>Discover a comprehensive range of healthcare services tailored to meet the unique needs of our
						patients</p>
				</div>
			</div>
			<div class="ftco-departments">
				<div class="row">
					<div class="col-md-3 nav-link-wrap">
						<div class="nav d-flex nav-pills sticky-sidebar" id="v-pills-tab" role="tablist"
							aria-orientation="vertical">
							<a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill"
								href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">General
								Surgery</a>
							<a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2"
								role="tab" aria-controls="v-pills-2" aria-selected="false">Gynecology</a>
							<a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3"
								role="tab" aria-controls="v-pills-3" aria-selected="false">Neurosurgery</a>
							<a class="nav-link ftco-animate" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4"
								role="tab" aria-controls="v-pills-4" aria-selected="false">General Medicine</a>
							<a class="nav-link ftco-animate" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5"
								role="tab" aria-controls="v-pills-5" aria-selected="false">Urology</a>
							<a class="nav-link ftco-animate" id="v-pills-6-tab" data-toggle="pill" href="#v-pills-6"
								role="tab" aria-controls="v-pills-6" aria-selected="false">Orthopedics</a>
							<a class="nav-link ftco-animate" id="v-pills-7-tab" data-toggle="pill" href="#v-pills-7"
								role="tab" aria-controls="v-pills-7" aria-selected="false">ENT</a>
							<a class="nav-link ftco-animate" id="v-pills-8-tab" data-toggle="pill" href="#v-pills-8"
								role="tab" aria-controls="v-pills-8" aria-selected="false">Plastic Surgery</a>
							<a class="nav-link ftco-animate" id="v-pills-9-tab" data-toggle="pill" href="#v-pills-9"
								role="tab" aria-controls="v-pills-9" aria-selected="false">Physiotherapy</a>
							<a class="nav-link ftco-animate" id="v-pills-10-tab" data-toggle="pill" href="#v-pills-10"
								role="tab" aria-controls="v-pills-10" aria-selected="false">Neurology</a>
						</div>

					</div>

					<div class="col-md-9 tab-wrap">

						<div class="tab-content ftco-animate" id="v-pills-tabContent">
							<div class="tab-pane fade show active " id="v-pills-1" role="tabpanel"
								aria-labelledby="day-1-tab">
								<div class="row departments">
									<div class="col-lg-12">
										<div id="s1" class="carousel slide mb-4" data-ride="carousel">
											<ol class="carousel-indicators">
												<li data-target="#s1" data-slide-to="0" class="active"></li>
												<li data-target="#s1" data-slide-to="1"></li>
												<li data-target="#s1" data-slide-to="2"></li>
											</ol>
											<div class="carousel-inner" role="listbox">
												<div class="carousel-item active">
													<img src="images/best-experienced-general-surgeons-in-kakinada-aruna-hospital.png" alt="experienced-general-surgeons" class="w-100"
														alt="First slide">
												</div>
												<div class="carousel-item">
													<img src="images/best-advanced-technology-general-surgery-in-kakinada-aruna-hospital.png" alt="advanced-technology-general-surgery" class="w-100"
														alt="Second slide">
												</div>
												<div class="carousel-item">
													<img src="images/best-patient-centered-care-general-surgery-in-kakinada-aruna-hospital.png" class="w-100" alt="patient-centered-care-general-surgery"
														alt="Third slide">
												</div>
											</div>
											<a class="carousel-control-prev" href="#s1" role="button" data-slide="prev">
												<span class="carousel-control-prev-icon" aria-hidden="true"></span>
												<span class="sr-only">Previous</span>
											</a>
											<a class="carousel-control-next" href="#s1" role="button" data-slide="next">
												<span class="carousel-control-next-icon" aria-hidden="true"></span>
												<span class="sr-only">Next</span>
											</a>
										</div>


										<h2 class="">Best General Surgery Hospital in Kakinada</h2>
										<p>At Aruna Hospital Kakinada, we offer the best-in-class general surgery
											services.
											Our skilled surgeons are committed to providing top-notch surgical care in a
											safe and compassionate environment, whether it's a minor procedure or a
											complex
											surgery.</p>

										<h3 class="mt-4">Why Choose Aruna Hospital for General Surgery:</h3>
										<div class="jumbotron pt-4 pb-4">
											<div class="row">
												<div class="col-md-4">
													<h4>Experienced Surgeons</h4>
													<p>Our team of general surgeons brings years of experience and
														expertise
														to the operating table, trained to perform various procedures
														with
														precision and care.</p>
												</div>
												<div class="col-md-4">
													<h4>Advanced Technology</h4>
													<p>Aruna Hospital is equipped with state-of-the-art surgical
														facilities
														and medical technology to ensure the best possible outcomes for
														our
														patients.</p>
												</div>
												<div class="col-md-4">
													<h4>Patient-Centered Care</h4>
													<p>We provide personalized care, guiding you through every step of
														your
														surgical journey and addressing your concerns and questions.</p>
												</div>
											</div>
										</div>

										<h3 class="mt-4">Comprehensive Surgical Services:</h3>

										<ul>
											<li>Appendectomy</li>
											<li>Hernia Repair</li>
											<li>Gallbladder Surgery</li>
											<li>Colon and Rectal Surgery</li>
											<li>Thyroid Surgery</li>
											<li>Breast Surgery</li>
										</ul>

										<h3 class="mt-4">Quality and Safety</h3>
										<p>Patient safety is our top priority. We adhere to the highest standards of
											quality
											and safety protocols to ensure that you receive the best surgical care
											possible.
										</p>

										<h3 class="mt-4">Community Commitment</h3>
										<p>As a trusted healthcare institution in Kakinada, we are committed to serving
											the
											needs of our community, being your go-to destination for general surgery
											services.</p>

										<h3 class="mt-4">Schedule a Consultation</h3>
										<p>If you or a loved one requires general surgery, we invite you to schedule a
											consultation with our expert surgical team at Aruna Hospital Kakinada. We're
											here to address your concerns, discuss your treatment options, and provide
											you
											with the exceptional surgical care you deserve.</p>

										<h2 class="mt-4">Dr. Chavakula Seshaggiri Rao</h2>
										<p class="">M.S. General Surgery</p>

										<a href="general-surgery.html" class="btn btn-secondary">More Details</a>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="v-pills-2" role="tabpanel"
								aria-labelledby="v-pills-day-2-tab">
								<div class="row departments">
									<div class="col-lg-12">
										<div id="s2" class="carousel slide mb-4" data-ride="carousel">
											<ol class="carousel-indicators">
												<li data-target="#s2" data-slide-to="0" class="active"></li>
												<li data-target="#s2" data-slide-to="1"></li>
												<li data-target="#s2" data-slide-to="2"></li>
											</ol>
											<div class="carousel-inner" role="listbox">
												<div class="carousel-item active">
													<img src="images/best-experienced-gyneacologists-in-kakinada-aruna-hospital.png" class="w-100" alt="best-experienced-gyneacologists">
												</div>
												<div class="carousel-item">
													<img src="images/best-women-centered-approach-in-kakinada-aruna-hospital.png" class="w-100"
														alt="women-centered-approach-in-kakinada-aruna-hospital">
												</div>
												<div class="carousel-item">
													<img src="images/best-gyneacology-care-in-kakinada-aruna-hospital.png" class="w-100" alt="best-gyneacology-care-in-kakinada">
												</div>
											</div>
											<a class="carousel-control-prev" href="#s2" role="button" data-slide="prev">
												<span class="carousel-control-prev-icon" aria-hidden="true"></span>
												<span class="sr-only">Previous</span>
											</a>
											<a class="carousel-control-next" href="#s2" role="button" data-slide="next">
												<span class="carousel-control-next-icon" aria-hidden="true"></span>
												<span class="sr-only">Next</span>
											</a>
										</div>

										<h2 class="">Comprehensive Gynecology Care at Aruna Hospital Kakinada</h2>
										<h3 class="mt-4">Why Choose Aruna Hospital for Gynecology Services:</h3>

										<div class="jumbotron pt-4 pb-4">
											<div class="row">
												<div class="col-md-6">
													<h3>Experienced Gynaecologists</h3>
													<p>Our gynaecologists are experts in women's healthcare, offering
														years
														of experience in diagnosing and treating a wide range of
														gynaecological conditions. From routine check-ups to complex
														procedures, you can trust us for expert care.</p>
												</div>
												<div class="col-md-6">
													<h3>Women-Centered Approach</h3>
													<p>We understand that women's health needs are diverse and unique.
														Our
														approach is tailored to address your specific concerns, ensuring
														that you receive the care and support you need at every stage of
														life.</p>
												</div>
											</div>
										</div>

										<h3 class="mt-4">Comprehensive Gynecological Services:</h2>

											<ul>
												<li>Annual Well-Woman Exams</li>
												<li>Obstetrics and Prenatal Care</li>
												<li>Gynecological Surgery</li>
												<li>Family Planning and Contraception</li>
												<li>Menopause Management</li>
												<li>Treatment of Gynecological Conditions</li>
											</ul>

											<h3 class="mt-4">Supportive Environment:</h3>
											<p>We provide a warm and supportive environment where you can discuss your
												health concerns openly. Your comfort and well-being are our top
												priorities.
											</p>

											<h3 class="mt-4">Advanced Diagnostic and Treatment Options:</h3>
											<p>Our state-of-the-art facility is equipped with advanced diagnostic tools
												and
												technology, ensuring accurate diagnoses and effective treatment options.
											</p>

											<h3 class="mt-4">Community Commitment:</h3>
											<p>As a healthcare institution deeply rooted in Kakinada, we are committed
												to
												serving the healthcare needs of women in our community. Your health is
												our
												mission.</p>

											<h3 class="mt-4">Schedule a Consultation:</h3>
											<p>Whether you're seeking routine gynecological care, prenatal services, or
												specialized treatment, the gynecology team at Aruna Hospital Kakinada is
												here for you. Schedule a consultation with our compassionate and expert
												gynecologists to address your health needs and embark on your journey to
												optimal women's health.</p>

											<h2 class="mt-4">Dr. Chavakula Himmabindu</h2>
											<p class="">M.S., OBG Gynecology</p>

											<a href="gynecology.html" class="btn btn-secondary">More Details</a>

									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="v-pills-3" role="tabpanel"
								aria-labelledby="v-pills-day-3-tab">
								<div class="row departments">
									<div class="col-lg-12">
										<div id="s3" class="carousel slide mb-4" data-ride="carousel">
											<ol class="carousel-indicators">
												<li data-target="#s3" data-slide-to="0" class="active"></li>
												<li data-target="#s3" data-slide-to="1"></li>
												<li data-target="#s3" data-slide-to="2"></li>
											</ol>
											<div class="carousel-inner" role="listbox">
												<div class="carousel-item active">
													<img src="images/best-treatment-for-neurosurgery-for-brain-tumours-in-kakinada-aruna-hospital.png" class="w-100"
														alt="treatment-for-neurosurgery-for-brain-tumours">
												</div>
												<div class="carousel-item">
													<img src="images/best-treatment-for-neurosurgery-for-spinal-disorders-in-kakinada-aruna-hospital.png" class="w-100"
														alt="treatment-for-neurosurgery-for-spinal-disorders">
												</div>
												<div class="carousel-item">
													<img src="images/best-treatment-for-neurosurgery-for-epilepsy-in-kakinada-aruna-hospital.png" class="w-100"
														alt="neurosurgery-for-epilepsy">
												</div>
											</div>
											<a class="carousel-control-prev" href="#s3" role="button" data-slide="prev">
												<span class="carousel-control-prev-icon" aria-hidden="true"></span>
												<span class="sr-only">Previous</span>
											</a>
											<a class="carousel-control-next" href="#s3" role="button" data-slide="next">
												<span class="carousel-control-next-icon" aria-hidden="true"></span>
												<span class="sr-only">Next</span>
											</a>
										</div>

										<h2>Neurosurgery Department at Aruna Hospital: Excellence in Neurological Care
										</h2>

										<p>At Aruna Hospital, we understand that neurological conditions can be
											challenging
											and life-altering. Our Neurosurgery Department is dedicated to providing
											world-class neurosurgical care, employing cutting-edge technology and the
											expertise of experienced neurosurgeons.</p>

										<h3 class="mt-4">Our Comprehensive Neurosurgical Services Include:</h3>

										<ul>
											<li><strong>Diagnostic Precision:</strong> We utilize advanced imaging and
												diagnostic tools to pinpoint neurological issues accurately, ensuring a
												precise assessment of your condition.</li>
											<li><strong>Surgical Expertise:</strong> Our skilled neurosurgeons are
												proficient in a wide range of surgical procedures, from minimally
												invasive
												techniques to complex brain and spine surgeries.</li>
											<li><strong>Patient-Centered Care:</strong> We understand the emotional and
												physical toll neurological conditions can take, and we provide
												compassionate
												support and education throughout your journey.</li>
										</ul>

										<h3 class="mt-4">Conditions We Address:</h3>

										<ul>
											<li><strong>Brain Tumours:</strong> Expertise in the diagnosis and treatment
												of
												brain tumors, including both benign and malignant growths.</li>
											<li><strong>Spinal Disorders:</strong> Treatment for spinal conditions such
												as
												herniated discs, spinal stenosis, and spinal deformities.</li>
											<li><strong>Stroke and Aneurysms:</strong> Comprehensive care for stroke,
												aneurysms, and other cerebrovascular conditions.</li>
											<li><strong>Epilepsy:</strong> Evaluation and surgical options for
												drug-resistant epilepsy.</li>
											<li><strong>Peripheral Nerve Disorders:</strong> Diagnosis and treatment for
												conditions affecting the peripheral nerves.</li>
											<li><strong>Traumatic Brain and Spinal Injuries:</strong> Advanced care for
												injuries to the brain and spine, including trauma cases.</li>
										</ul>

										<h3 class="mt-4">Why Choose Aruna Hospital's Neurosurgery Department?</h3>

										<ul>
											<li><strong>Expert Neurosurgeons:</strong> Our team includes highly trained
												neurosurgeons with extensive experience in treating a wide range of
												neurological conditions.</li>
											<li><strong>Cutting-Edge Technology:</strong> We invest in the latest
												surgical
												technologies and techniques to ensure the best possible outcomes for our
												patients.</li>
											<li><strong>Collaborative Approach:</strong> We work closely with other
												specialists and healthcare professionals to provide comprehensive care
												tailored to your needs.</li>
											<li><strong>Patient Support:</strong> Our team is dedicated to supporting
												you
												and your family throughout your neurosurgical journey, from diagnosis
												through recovery.</li>
										</ul>

										<p class="mt-4">If you or a loved one is facing a neurological condition that
											requires surgical intervention or consultation, trust the Neurosurgery
											Department at Aruna Hospital for compassionate, expert care.</p>

										<a href="neuro-surgery.html" class="btn btn-secondary">More Details</a>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="v-pills-4" role="tabpanel"
								aria-labelledby="v-pills-day-4-tab">
								<div class="row departments">
									<div class="col-lg-12">
										<div id="s4" class="carousel slide mb-4" data-ride="carousel">
											<ol class="carousel-indicators">
												<li data-target="#s4" data-slide-to="0" class="active"></li>
												<li data-target="#s4" data-slide-to="1"></li>
												<li data-target="#s4" data-slide-to="2"></li>
											</ol>
											<div class="carousel-inner" role="listbox">
												<div class="carousel-item active">
													<img src="images/best-experienced-internal-medicine-specialists-in-kakinada-aruna-hospital.png" class="w-100"
														alt="experienced-internal-medicine">
												</div>
												<div class="carousel-item">
													<img src="images/best-comprehensive-general-medicine-services-in-kakinada-aruna-hospital.png" class="w-100"
														alt="comprehensive-general-medicine">
												</div>
												<div class="carousel-item">
													<img src="images/best-advanced-diagnostic-services-in-kakinada-aruna-hospital.png" class="w-100"
														alt="advanced-diagnostic-services">
												</div>
											</div>
											<a class="carousel-control-prev" href="#s4" role="button" data-slide="prev">
												<span class="carousel-control-prev-icon" aria-hidden="true"></span>
												<span class="sr-only">Previous</span>
											</a>
											<a class="carousel-control-next" href="#s4" role="button" data-slide="next">
												<span class="carousel-control-next-icon" aria-hidden="true"></span>
												<span class="sr-only">Next</span>
											</a>
										</div>

										<h2>Comprehensive General Medicine at Aruna Hospital Kakinada</h2>

										<p>Aruna Hospital Kakinada is your premier destination for comprehensive general
											medicine services. Our dedicated team of internal medicine specialists is
											committed to providing expert medical care for a wide range of health
											conditions. We focus on delivering accurate diagnoses, effective treatments,
											and
											compassionate care to promote your overall health and well-being.</p>

										<h3 class="mt-4">Why Choose Aruna Hospital for General Medicine:</h3>

										<div class="jumbotron pt-4 pb-4">
											<div class="row">
												<div class="col-md-12">
													<h3>Experienced Internal Medicine Specialists</h3>
													<p>Our team of internal medicine specialists has extensive
														experience in
														diagnosing and treating various medical conditions. They are
														dedicated to delivering the highest standard of care to our
														patients.</p>
												</div>
												<div class="col-md-12">
													<h3>Comprehensive General Medicine Services</h3>
													<p>Aruna Hospital Kakinada offers a comprehensive suite of general
														medicine services, including but not limited to:</p>
													<ul>
														<li>Routine Health Check-ups</li>
														<li>Chronic Disease Management</li>
														<li>Preventive Care</li>
														<li>Diagnosis and Treatment of Common Illnesses</li>
														<li>Inpatient and Outpatient Care</li>
														<li>Specialized Health Screenings</li>
													</ul>
												</div>
											</div>
										</div>

										<h3 class="mt-4">Advanced Diagnostic Tools:</h3>
										<p>Our modern facility is equipped with state-of-the-art diagnostic equipment to
											ensure accurate assessments and timely treatment.</p>

										<h3 class="mt-4">Patient-Centered Care:</h3>
										<p>We value your well-being and comfort. Our patient-centered approach involves
											thorough consultations, personalized treatment plans, and open
											communication.
										</p>

										<h3 class="mt-4">Community Commitment:</h3>
										<p>As a healthcare institution deeply rooted in Kakinada, we are committed to
											providing accessible and exceptional general medicine care to our community
											members.</p>

										<h3 class="mt-4">Schedule a Consultation:</h3>
										<p>If you're in need of general medical care, whether it's for a routine
											check-up,
											managing a chronic condition, or addressing an acute illness, Aruna Hospital
											Kakinada is here for you. Schedule a consultation with our internal medicine
											specialists to discuss your health concerns and embark on your journey to
											optimal health.</p>

										<p>Trust Aruna Hospital Kakinada for all your general medicine needs, and
											experience
											the difference that expert and compassionate care can make.</p>

										<a href="general-medicine.html" class="btn btn-secondary">More Details</a>

									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="v-pills-5" role="tabpanel"
								aria-labelledby="v-pills-day-5-tab">
								<div class="row departments">
									<div class="col-lg-12">
										<div id="s5" class="carousel slide mb-4" data-ride="carousel">
											<ol class="carousel-indicators">
												<li data-target="#s5" data-slide-to="0" class="active"></li>
												<li data-target="#s5" data-slide-to="1"></li>
												<li data-target="#s5" data-slide-to="2"></li>
											</ol>
											<div class="carousel-inner" role="listbox">
												<div class="carousel-item active">
													<img src="images/best-diagnostic-expertisers-in-kakinada-aruna-hospital.png" class="w-100" alt="diagnostic-expertisers-in-kakinada">
												</div>
												<div class="carousel-item">
													<img src="images/best-treatment-for-urological-kidney-stones-in-kakinada-aruna-hospital.png" class="w-100" alt="treatment-for-urological-kidney-stones">
												</div>
												<div class="carousel-item">
													<img src="images/best-treatment-for-urological-cancers-in-kakinada-aruna-hospital.png" class="w-100" alt="treatment-for-urological-cancers">
												</div>
											</div>
											<a class="carousel-control-prev" href="#s5" role="button" data-slide="prev">
												<span class="carousel-control-prev-icon" aria-hidden="true"></span>
												<span class="sr-only">Previous</span>
											</a>
											<a class="carousel-control-next" href="#s5" role="button" data-slide="next">
												<span class="carousel-control-next-icon" aria-hidden="true"></span>
												<span class="sr-only">Next</span>
											</a>
										</div>

										<h2>Urology Department at Aruna Hospital: Your Destination for Comprehensive
											Urological Care</h2>

										<p>At Aruna Hospital, we understand that urological issues can significantly
											impact
											your quality of life. That's why our Urology Department is dedicated to
											providing the highest standard of care, advanced treatments, and
											compassionate
											support for all urological concerns.</p>

										<h3 class="mt-4">Our Comprehensive Urology Services Include:</h3>

										<ul>
											<li><strong>Diagnostic Expertise:</strong> Our skilled urologists use
												state-of-the-art diagnostic tools to pinpoint the root causes of
												urological
												conditions, ensuring accurate assessments.</li>
											<li><strong>Robust Treatment Options:</strong> From medical management to
												minimally invasive procedures and complex surgeries, we offer a full
												spectrum of treatment options tailored to your specific needs.</li>
											<li><strong>Advanced Technology:</strong> Aruna Hospital is equipped with
												the
												latest in urological technology, allowing for precise diagnosis and
												treatment.</li>
											<li><strong>Experienced Team:</strong> Our team of urologists and medical
												professionals brings years of expertise to provide the best possible
												care.
											</li>
										</ul>

										<h3 class="mt-4">Conditions We Address:</h3>

										<ul>
											<li><strong>Kidney Stones:</strong> We offer advanced procedures for stone
												removal and prevention.</li>
											<li><strong>Prostate Health:</strong> Comprehensive care for prostate
												issues,
												including cancer screening and treatment.</li>
											<li><strong>Bladder Concerns:</strong> Diagnosis and management of bladder
												conditions such as infections, overactive bladder, and incontinence.
											</li>
											<li><strong>Urinary Tract Disorders:</strong> Treatment for a range of
												urinary
												tract issues, including infections and obstructions.</li>
											<li><strong>Male Reproductive Health:</strong> Expertise in male
												infertility,
												erectile dysfunction, and other reproductive concerns.</li>
											<li><strong>Urological Cancers:</strong> Cutting-edge treatments and support
												for
												urological cancers, including bladder, kidney, and prostate cancer.</li>
										</ul>

										<h3 class="mt-4">Why Choose Aruna Hospital's Urology Department?</h3>

										<ul>
											<li><strong>Compassionate Care:</strong> We understand the sensitive nature
												of
												urological concerns and provide compassionate, patient-centered care.
											</li>
											<li><strong>Comprehensive Approach:</strong> Our urologists collaborate with
												other specialists when needed to ensure a holistic approach to your
												health.
											</li>
											<li><strong>Patient Education:</strong> We empower our patients with
												information
												and support to make informed decisions about their urological care.</li>
											<li><strong>Timely Appointments:</strong> We offer prompt scheduling to
												address
												your needs without unnecessary delays.</li>
										</ul>

										<a href="urology.html" class="btn btn-secondary">More Details</a>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="v-pills-6" role="tabpanel"
								aria-labelledby="v-pills-day-6-tab">
								<div class="row departments">
									<div class="col-lg-12">
										<div id="s6" class="carousel slide mb-4" data-ride="carousel">
											<ol class="carousel-indicators">
												<li data-target="#s6" data-slide-to="0" class="active"></li>
												<li data-target="#s6" data-slide-to="1"></li>
												<li data-target="#s6" data-slide-to="2"></li>
											</ol>
											<div class="carousel-inner" role="listbox">
												<div class="carousel-item active">
													<img src="images/best-treatment-for-orthopedics-in-kakinada-aruna-hospital.png" class="w-100"
														alt="treatment-for-orthopedics">
												</div>
												<div class="carousel-item">
													<img src="images/best-treatment-for-orthopedics-for-fracture-care-kakinada-aruna-hospital.png" class="w-100"
														alt="orthopedics-for-fracture-care-kakinada">
												</div>
												<div class="carousel-item">
													<img src="images/best-treatment-for-orthopedics-for-arthroscopy-in-kakinada-aruna-hospital.png" class="w-100" alt="orthopedics-for-arthroscopy">
												</div>
											</div>
											<a class="carousel-control-prev" href="#s6" role="button" data-slide="prev">
												<span class="carousel-control-prev-icon" aria-hidden="true"></span>
												<span class="sr-only">Previous</span>
											</a>
											<a class="carousel-control-next" href="#s6" role="button" data-slide="next">
												<span class="carousel-control-next-icon" aria-hidden="true"></span>
												<span class="sr-only">Next</span>
											</a>
										</div>

										<h2 class="">Comprehensive Orthopedic Care at Aruna Hospital Kakinada</h2>

										<h3 class="mt-4">Why Choose Aruna Hospital for Orthopedic Services:</h3>

										<div class="jumbotron pt-4 pb-4">
											<div class="row">
												<div class="col-md-6">
													<h3>Experienced Orthopedic Specialists</h3>
													<p>Our orthopedic team is comprised of highly skilled and
														experienced
														specialists who are experts in diagnosing and treating a wide
														range
														of orthopedic conditions. From joint pain to complex surgeries,
														our
														experts have you covered.</p>
												</div>
												<div class="col-md-6">
													<h3>Patient-Centered Approach</h3>
													<p>At Aruna Hospital Kakinada, we believe in patient-centered care.
														We
														take the time to listen to your concerns, answer your questions,
														and
														involve you in every step of your treatment plan.</p>
												</div>
											</div>
										</div>

										<h3 class="mt-4">Comprehensive Orthopedic Services:</h3>

										<ul>
											<li>Joint Replacement Surgery (Hip, Knee, Shoulder)</li>
											<li>Sports Medicine</li>
											<li>Fracture Care</li>
											<li>Spine Surgery</li>
											<li>Arthroscopy</li>
											<li>Pediatric Orthopedics</li>
											<li>Orthopedic Rehabilitation</li>
										</ul>

										<h3 class="mt-4">State-of-the-Art Facilities:</h3>
										<p>Our hospital is equipped with state-of-the-art technology and modern
											facilities
											to ensure that you receive the highest quality orthopedic care available.
										</p>

										<h3 class="mt-4">Personalized Treatment Plans:</h3>
										<p>We understand that every patient is unique. Our orthopedic specialists
											develop
											personalized treatment plans tailored to your specific needs and goals.</p>

										<h3 class="mt-4">Post-Surgery Rehabilitation:</h3>
										<p>Our comprehensive orthopedic care doesn't end with surgery. We offer
											post-surgery
											rehabilitation services to help you recover and regain your strength.</p>

										<h3 class="mt-4">Community Commitment:</h3>
										<p>As a healthcare institution deeply rooted in the Kakinada community, we are
											committed to providing accessible and exceptional orthopedic care to our
											neighbors.</p>

										<h3 class="mt-4">Schedule a Consultation:</h3>
										<p>If you're experiencing joint pain, musculoskeletal issues, or any orthopedic
											concern, the orthopedic specialists at Aruna Hospital Kakinada are here to
											help.
											Schedule a consultation with us to discuss your condition and explore your
											treatment options.</p>

										<h3 class="mt-4">Regain your mobility, improve your quality of life, and trust
											Aruna
											Hospital for all your orthopedic needs.</h3>

										<a href="orthopedics.html" class="btn btn-secondary">More Details</a>

									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="v-pills-7" role="tabpanel"
								aria-labelledby="v-pills-day-7-tab">
								<div class="row departments">
									<div class="col-lg-12">
										<div id="s7" class="carousel slide mb-4" data-ride="carousel">
											<ol class="carousel-indicators">
												<li data-target="#s7" data-slide-to="0" class="active"></li>
												<li data-target="#s7" data-slide-to="1"></li>
												<li data-target="#s7" data-slide-to="2"></li>
											</ol>
											<div class="carousel-inner" role="listbox">
												<div class="carousel-item active">
													<img src="images/best-treatment-for-ear-infections-in-kakinda-aruna-hospital.png" class="w-100" alt="ear-infections-in-kakinda">
												</div>
												<div class="carousel-item">
													<img src="images/best-treatment-for-sinus-disorders-in-kakinda-aruna-hospital.png" class="w-100" alt="sinus-disorders-in-kakinda">
												</div>
												<div class="carousel-item">
													<img src="images/best-treatment-for-throat-conditions-in-kakinda-aruna-hospital.png" class="w-100" alt="throat-conditions-in-kakinda">
												</div>
											</div>
											<a class="carousel-control-prev" href="#s7" role="button" data-slide="prev">
												<span class="carousel-control-prev-icon" aria-hidden="true"></span>
												<span class="sr-only">Previous</span>
											</a>
											<a class="carousel-control-next" href="#s7" role="button" data-slide="next">
												<span class="carousel-control-next-icon" aria-hidden="true"></span>
												<span class="sr-only">Next</span>
											</a>
										</div>

										<h2>Aruna Hospital Kakinada - Exceptional ENT Care</h2>

										<h3 class="mt-4">Why Choose Aruna Hospital for ENT Services:</h3>

										<div class="jumbotron pt-4 pb-4">
											<div class="row">
												<div class="col-md-6">
													<h3>Experienced ENT Specialists</h3>
													<p>Our team of ENT specialists brings years of experience and
														expertise
														to diagnosing and treating ENT conditions. From common ear
														infections to complex sinus surgeries, our specialists are
														leaders
														in their field.</p>
												</div>
												<div class="col-md-6">
													<h3>Comprehensive ENT Services</h3>
													<ul>
														<li>Ear Infections and Surgery</li>
														<li>Nasal and Sinus Disorders</li>
														<li>Throat Conditions and Surgery</li>
														<li>Hearing Evaluation and Management</li>
														<li>Vertigo and Balance Disorders</li>
														<li>Pediatric ENT Care</li>
													</ul>
												</div>
											</div>
										</div>

										<h3 class="mt-4">Advanced Diagnostic Tools</h3>
										<p>Our state-of-the-art facility is equipped with the latest diagnostic
											technology
											to ensure accurate assessments and timely treatment.</p>

										<h3 class="mt-4">Patient-Centered Care</h3>
										<p>We prioritize your comfort and well-being. Our patient-centered approach
											means we
											take the time to listen to your concerns and provide personalized treatment
											plans that address your unique needs.</p>

										<h3 class="mt-4">Community Commitment</h3>
										<p>As a healthcare institution deeply rooted in Kakinada, we are dedicated to
											serving the ENT healthcare needs of our community. Your health and
											satisfaction
											are our top priorities.</p>

										<h3 class="mt-4">Schedule a Consultation</h3>
										<p>If you or a loved one is experiencing ear, nose, or throat issues, we invite
											you
											to schedule a consultation with our expert ENT specialists at Aruna Hospital
											Kakinada. We are here to address your concerns, offer diagnostic
											evaluations,
											and provide the highest quality ENT care available.</p>

										<h3 class="mt-4">Trust Aruna Hospital Kakinada for all your ENT healthcare needs
											and
											experience the difference that compassionate and expert care can make.</h3>

										<a href="ent.html" class="btn btn-secondary">More Details</a>
									</div>
								</div>
							</div>

							<!-- Plastic Surgery -->
							<div class="tab-pane fade" id="v-pills-8" role="tabpanel"
								aria-labelledby="v-pills-day-8-tab">
								<div class="row departments">
									<div class="col-lg-12">
										<div id="s8" class="carousel slide mb-4" data-ride="carousel">
											<ol class="carousel-indicators">
												<li data-target="#s8" data-slide-to="0" class="active"></li>
												<li data-target="#s8" data-slide-to="1"></li>
												<li data-target="#s8" data-slide-to="2"></li>
											</ol>
											<div class="carousel-inner" role="listbox">
												<div class="carousel-item active">
													<img src="images/best-plastic-surgery-treatment-for-cosmetic-surgery-in-kakinda-aruna-hospital.png" class="w-100"
														alt="plastic-surgery-treatment">
												</div>
												<div class="carousel-item">
													<img src="images/best-plastic-surgery-treatment-reconstructive-surgery-in-kakinda-aruna-hospital.png" class="w-100"
														alt="plastic-surgery">
												</div>
												<div class="carousel-item">
													<img src="images/best-plastic-surgery-treatment-for-cosmetic-in-kakinda-aruna-hospital.png" class="w-100"
														alt="plastic-surgery-treatment">
												</div>
											</div>
											<a class="carousel-control-prev" href="#s8" role="button" data-slide="prev">
												<span class="carousel-control-prev-icon" aria-hidden="true"></span>
												<span class="sr-only">Previous</span>
											</a>
											<a class="carousel-control-next" href="#s8" role="button" data-slide="next">
												<span class="carousel-control-next-icon" aria-hidden="true"></span>
												<span class="sr-only">Next</span>
											</a>
										</div>

										<h2>Aruna Hospital Kakinada - Plastic Surgery</h2>

										<!-- <h3 class="mt-4">Why Choose Aruna Hospital for ENT Services:</h3> -->

										<div class="jumbotron pt-4 pb-4">
											<div class="row">
												<div class="col-md-12">
													<p>At Aruna Hospital, our Plastic Surgery Department is dedicated to
														providing exceptional care and transformative solutions to
														enhance your appearance and boost your confidence. Our team of
														skilled and board-certified plastic surgeons utilizes
														state-of-the-art techniques and personalized treatment plans to
														address various cosmetic and reconstructive needs..</p>
												</div>
												<div class="col-md-12">
													<h3>Our Services</h3>
													<h5>Cosmetic Procedures</h5>
													<p>We offer a comprehensive range of cosmetic surgeries tailored to
														meet your aesthetic goals:</p>
													<ul>
														<li>Facial Rejuvenation: Facelifts, rhinoplasty, eyelid surgery,
															and non-surgical treatments.</li>
														<li>Body Contouring: Liposuction, tummy tucks, body lifts, and
															arm/thigh lifts.
														</li>
														<li>Breast Surgery: Augmentation, reduction, lift, or
															reconstruction.</li>
														<li>Hearing Evaluation and Management</li>
														<li>Injectables and Fillers: Botox, dermal fillers, and other
															non-invasive treatments.</li>
													</ul>
												</div>
												<div class="col-md-12">
													<h5>Reconstructive Surgery</h5>
													<p>Our experts provide reconstructive procedures to restore form and
														function:</p>
													<ul>
														<li>Breast Reconstruction: After mastectomy or trauma.</li>
														<li>Post-Traumatic Reconstruction: Addressing injuries or
															deformities caused by accidents or burns.
														</li>
														<li>Scar Revision: Improving the appearance of scars through
															surgical techniques.</li>
													</ul>
												</div>
											</div>
										</div>

										<h3 class="mt-4">Expert Team</h3>
										<p>Our plastic surgeons are highly experienced and committed to delivering the
											highest standard of care. They possess specialized skills in both cosmetic
											and reconstructive procedures, ensuring that you receive tailored and safe
											treatments.</p>

										<h3 class="mt-4">Patient-Centered Approach</h3>
										<p>We prioritize your comfort and well-being. Our patient-centered approach
											means we
											take the time to listen to your concerns and provide personalized treatment
											plans that address your unique needs.</p>

										<h3 class="mt-4">Community Commitment</h3>
										<p>As a healthcare institution deeply rooted in Kakinada, we are dedicated to
											serving the ENT healthcare needs of our community. Your health and
											satisfaction
											are our top priorities.</p>

										<h3 class="mt-4">Schedule a Consultation</h3>
										<p>If you or a loved one is experiencing ear, nose, or throat issues, we invite
											you
											to schedule a consultation with our expert ENT specialists at Aruna Hospital
											Kakinada. We are here to address your concerns, offer diagnostic
											evaluations,
											and provide the highest quality ENT care available.</p>

										<h3 class="mt-4">Trust Aruna Hospital Kakinada for all your ENT healthcare needs
											and
											experience the difference that compassionate and expert care can make.</h3>

										<a href="plasticsurgey.html" class="btn btn-secondary">More Details</a>
									</div>
								</div>
							</div>


							<!-- Physiotherapy -->

							<div class="tab-pane fade" id="v-pills-9" role="tabpanel"
								aria-labelledby="v-pills-day-9-tab">
								<div class="row departments">
									<div class="col-lg-12">
										<div id="s9" class="carousel slide mb-4" data-ride="carousel">
											<ol class="carousel-indicators">
												<li data-target="#s9" data-slide-to="0" class="active"></li>
												<li data-target="#s9" data-slide-to="1"></li>
												<li data-target="#s9" data-slide-to="2"></li>
											</ol>
											<div class="carousel-inner" role="listbox">
												<div class="carousel-item active">
													<img src="images/best-physiotherapy-treatment-for-neurological-rehabilitation-in-kakinada-aruna-hospital.png" class="w-100"
														alt="physiotherapy">
												</div>
												<div class="carousel-item">
													<img src="images/best-physiotherapy-treatment-for-orthopedic-rehabilitation-in-kakinada-aruna-hospital.png" class="w-100"
														alt="physiotherapy-treatment">
												</div>
												<div class="carousel-item">
													<img src="images/best-physiotherapy-treatment-in-kakinada-aruna-hospital.png" class="w-100"
														alt="physiotherapy-treatment">
												</div>
											</div>
											<a class="carousel-control-prev" href="#s9" role="button" data-slide="prev">
												<span class="carousel-control-prev-icon" aria-hidden="true"></span>
												<span class="sr-only">Previous</span>
											</a>
											<a class="carousel-control-next" href="#s9" role="button" data-slide="next">
												<span class="carousel-control-next-icon" aria-hidden="true"></span>
												<span class="sr-only">Next</span>
											</a>
										</div>


										<h2> Physiotherapy Department
										</h2>

										<!-- <h3 class="mt-4">Why Choose Aruna Hospital for ENT Services:</h3> -->

										<div class="jumbotron pt-4 pb-4">
											<div class="row">
												<div class="col-md-12">
													<!-- <h3>Experienced ENT Specialists</h3> -->
													<p>At Aruna Hospital, our Physiotherapy Department is dedicated to
														providing comprehensive and compassionate care to aid in your
														recovery and enhance your well-being. Our team of experienced
														physiotherapists employs cutting-edge techniques and
														personalized treatment plans to address a wide range of
														conditions.</p>
												</div>
												<div class="col-md-12">
													<h3>Our Services</h3>
													<h5>Orthopedic Rehabilitation
													</h5>
													<p>Our specialized programs focus on restoring function and mobility
														for patients recovering from orthopedic injuries or surgeries.
														We offer tailored rehabilitation plans to assist in your
														recovery journey.</p>
													<!-- <ul>
														<li>Electroencephalogram (EEG): Monitoring brain activity to diagnose seizures and other disorders.</li>
														<li>Electromyography (EMG) and Nerve Conduction Studies: Assessing nerve and muscle function.
														</li>
														<li>Imaging Services: MRI, CT scans, and other imaging techniques for detailed neurologic evaluations.</li>
														 
													</ul> -->
												</div>
												<div class="col-md-12">
													<!-- <h3>Our Services</h3> -->
													<h5>Neurological Rehabilitation</h5>
													<p>Dedicated to patients with neurological disorders or conditions,
														our rehabilitation programs aim to improve motor functions,
														balance, and overall quality of life.</p>
													<!-- <ul>
														<li>Epilepsy Management: Diagnosis, treatment, and long-term management of epilepsy and seizures.
														</li>
														<li>Stroke Care: Immediate intervention and rehabilitation to minimize the effects of stroke.
														</li>
														<li>Movement Disorders: Management of conditions like Parkinson's disease and essential tremor.
														</li>
														<li>Neuromuscular Disorders: Diagnosis and treatment of disorders affecting muscles and nerves.</li>
														 
													</ul> -->
												</div>
											</div>
										</div>

										<h3 class="mt-4">Sports Injury Rehabilitation</h3>
										<p>Our experts understand the needs of athletes and individuals with
											sports-related injuries. We provide targeted therapies to expedite recovery
											and facilitate a safe return to activities.
										</p>

										<h3 class="mt-4">Pain Management</h3>
										<p>Tailored interventions and exercises designed to alleviate chronic pain,
											enhancing your daily comfort and quality of life.</p>

										<h3 class="mt-4">Expert Team</h3>
										<p>Our team of certified and experienced physiotherapists is committed to your
											well-being. Each member brings specialized skills and expertise to address
											various conditions, ensuring that you receive personalized care throughout
											your treatment.</p>

										<h3 class="mt-4">State-of-the-Art Facilities</h3>
										<p>Equipped with advanced technology and modern facilities, Aruna Hospital's
											Physiotherapy Department offers state-of-the-art equipment and therapeutic
											modalities to optimize your rehabilitation process.</p>

										<h3 class="mt-4">Patient-Centered Approach</h3>
										<p>At Aruna Hospital, you are at the center of our care. We believe in open
											communication and collaboration, involving you in your treatment plan to
											achieve the best possible outcomes.</p>

										<h3 class="mt-4">Schedule an Appointment</h3>
										<p>Take the first step toward your recovery by scheduling an appointment with
											our physiotherapy experts. Contact us today to begin your journey to
											improved mobility, function, and well-being.
										</p>

										<!-- <h3 class="mt-4">Trust Aruna Hospital Kakinada for all your ENT healthcare needs and
											experience the difference that compassionate and expert care can make.</h3> -->

										<a href="physiotherapy.html" class="btn btn-secondary">More Details</a>
									</div>
								</div>
							</div>
							<!-- Neurology -->

							<div class="tab-pane fade" id="v-pills-10" role="tabpanel"
								aria-labelledby="v-pills-day-10-tab">
								<div class="row departments">
									<div class="col-lg-12">
										<div id="s10" class="carousel slide mb-4" data-ride="carousel">
											<ol class="carousel-indicators">
												<li data-target="#s10" data-slide-to="0" class="active"></li>
												<li data-target="#s10" data-slide-to="1"></li>
												<li data-target="#s10" data-slide-to="2"></li>
											</ol>
											<div class="carousel-inner" role="listbox">
												<div class="carousel-item active">
													<img src="images/best-treatment-for-neurology-in-kakinada-aruna-hospital.png" class="w-100"
														alt="neurology-in-kakinada">
												</div>
												<div class="carousel-item">
													<img src="images/best-neurology-treatment-service-in-kakinada-aruna-hospital.png" class="w-100"
														alt="neurology-in-kakinada">
												</div>
												<div class="carousel-item">
													<img src="images/best-physiotherapy-doctor-treatment-in-kakinada-aruna-hospital.png" class="w-100"
														alt="neurology-in-kakinada">
												</div>
											</div>
											<a class="carousel-control-prev" href="#s10" role="button"
												data-slide="prev">
												<span class="carousel-control-prev-icon" aria-hidden="true"></span>
												<span class="sr-only">Previous</span>
											</a>
											<a class="carousel-control-next" href="#s10" role="button"
												data-slide="next">
												<span class="carousel-control-next-icon" aria-hidden="true"></span>
												<span class="sr-only">Next</span>
											</a>
										</div>

										<h2>Neurology </h2>

										<!-- <h3 class="mt-4">Why Choose Aruna Hospital for ENT Services:</h3> -->

										<div class="jumbotron pt-4 pb-4">
											<div class="row">
												<div class="col-md-12">
													<!-- <h3>Experienced ENT Specialists</h3> -->
													<p>At Aruna Hospital, our Neurology Department is dedicated to
														providing exceptional care and comprehensive solutions for a
														wide range of neurological conditions. Our team of experienced
														neurologists and specialists is committed to diagnosing,
														treating, and managing neurological disorders with precision and
														compassion.</p>
												</div>
												<div class="col-md-12">
													<h3>Our Services</h3>
													<h5>Diagnostic Expertise
													</h5>
													<p>Our department offers advanced diagnostic services for various
														neurological conditions:</p>
													<ul>
														<li>Electroencephalogram (EEG): Monitoring brain activity to
															diagnose seizures and other disorders.</li>
														<li>Electromyography (EMG) and Nerve Conduction Studies:
															Assessing nerve and muscle function.
														</li>
														<li>Imaging Services: MRI, CT scans, and other imaging
															techniques for detailed neurologic evaluations.</li>
														<!-- <li>Hearing Evaluation and Management</li>
														<li>Injectables and Fillers: Botox, dermal fillers, and other non-invasive treatments.</li> -->
													</ul>
												</div>
												<div class="col-md-12">
													<!-- <h3>Our Services</h3> -->
													<h5>Treatment and Management</h5>
													<p>We provide comprehensive care for a spectrum of neurological
														disorders:</p>
													<ul>
														<li>Epilepsy Management: Diagnosis, treatment, and long-term
															management of epilepsy and seizures.
														</li>
														<li>Stroke Care: Immediate intervention and rehabilitation to
															minimize the effects of stroke.
														</li>
														<li>Movement Disorders: Management of conditions like
															Parkinson's disease and essential tremor.
														</li>
														<li>Neuromuscular Disorders: Diagnosis and treatment of
															disorders affecting muscles and nerves.</li>
														<!-- <li>Hearing Evaluation and Management</li>
														<li>Injectables and Fillers: Botox, dermal fillers, and other non-invasive treatments.</li> -->
													</ul>
												</div>
											</div>
										</div>

										<h3 class="mt-4">Expert Team</h3>
										<p>Our team comprises skilled neurologists, neurosurgeons, and support staff who
											are dedicated to providing personalized care. With their specialized
											expertise, they collaborate to deliver the best possible outcomes for our
											patients.
										</p>

										<h3 class="mt-4">State-of-the-Art Facilities</h3>
										<p>Equipped with cutting-edge technology and modern facilities, Aruna Hospital's
											Neurology Department ensures accurate diagnoses and effective treatments
											while prioritizing patient comfort and safety.</p>

										<h3 class="mt-4">Patient-Centered Care</h3>
										<p>At Aruna Hospital, we believe in a patient-centric approach. We understand
											the impact neurological conditions can have on your life and aim to provide
											compassionate care, support, and education throughout your journey to
											recovery.</p>

										<h3 class="mt-4">Schedule a Consultation</h3>
										<p>If you or a loved one is experiencing neurological symptoms or requires
											expert consultation, schedule an appointment with our neurology specialists.
											Contact us today to take the first step toward understanding, managing, and
											overcoming neurological conditions..</p>

										<!-- <h3 class="mt-4">Trust Aruna Hospital Kakinada for all your ENT healthcare needs and
											experience the difference that compassionate and expert care can make.</h3> -->

										<a href="neurology.html" class="btn btn-secondary">More Details</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-8 text-center heading-section ftco-animate">
					<!-- <span class="subheading">Doctors</span> -->
					<!-- <h2 class="mb-4">Our Qualified Doctors</h2> -->
					<h2 class="mb-4">Our Doctors</h2>

					<p>
						At Aruna Hospital, our commitment to providing quality healthcare is reflected in our team of
						dedicated and skilled doctors. Each member of our medical staff brings a wealth of expertise,
						compassion, and a patient-centric approach to ensure the best possible care for our community.
					</p>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<!-- First Doctor -->
					<div class="col-md-6 mt-5 mt-md-0">
						<div class="row">
							<div class="col-md-5">
								<!-- Doctor Image -->
								<img src="images/best-m.s-general-surgery-consultant-endoscopy-laparoscopic-surgeon-in-kakinada-dr.chavakula-seshaggiri-rao-aruna-hospital.png" alt="general-surgery-consultant-endoscopy-laparoscopic-surgeon" class="img-fluid shadow rounded-circle">
							</div>
							<div class="col-md-7 text-center text-md-left align-self-center">
								<!-- Doctor Details -->
								<h3 class="mt-3 mt-md-0">Dr. Chavakula <br />Seshaggiri Rao</h3>
								<p class="mb-0">M.S. General Surgery</p>
								<p class="mb-0">Consultant Endoscopy</p>
								<p class="mb-0">Laparoscopic Surgeon</p>
							</div>
						</div>
					</div>

					<!-- Second Doctor -->
					<div class="col-md-6 mt-5 mt-md-0">
						<div class="row">
							<div class="col-md-5">
								<!-- Doctor Image -->
								<img src="images/best-m.s-obg-gynecology-doctor-in-kakinada-dr.chavakula-himmabindhu-aruna-hospital.png" alt="obg-gynecology_dr.chavakula_himmabindhu" class="img-fluid shadow rounded-circle">
							</div>
							<div class="col-md-7 text-center text-md-left align-self-center">
								<!-- Doctor Details -->
								<h3 class="mt-3 mt-md-0">Dr. Chavakula <br />Himmabindu</h3>
								<p class="mb-0">M.S., OBG</p>
								<p class="mb-0">Gynecology</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section>
		<div class="container ">
			<div class="section-title text-center">
				<h1 class="  meetourdoctors mt-5">Our Blogs</h1>
				<!-- <h2 class="apporach">Blogs & articles </h2> -->



				<!-- <p class="mb-5  text-center service_text">General and cosmetic dentistry can give you a smile you’re proud to show off. Modern cosmetic dentistry techniques make it easier than ever to achieve a bright, even smile. Visit Srinivasa Dental Clinic in Kakinada. -->

				</p>
			</div>
		</div>
		<div class="container">
			<div class="row">




				<?php
				include './db.connection/db_connection.php';
				// Fetch latest 3 blogs
				$sql = "SELECT * FROM blog ORDER BY time DESC LIMIT 3";
				$result = $conn->query($sql);
				?>

				<?php while ($row = $result->fetch_assoc()) : ?>
					<div class="col px-5 py-2">
						<div class="card h-100">
							<video class="custom-video" autoplay muted controls style="width: 100%; height: auto;">
								<source src="admin/public/uploads/videos/<?php echo $row['video']; ?>"
									type="video/mp4">
								Your browser does not support the video tag.
							</video>
							<div class="card-body">


								<h5 class="card-title"><?php echo $row['title']; ?></h5>

							</div>


							<div class="card-footer">
								<small class="text-muted">Posted On:
									<?php echo date("F j, Y, g:i a", strtotime($row['time'])); ?></small>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
			<div class="mt-5 d-none d-md-block">
				<a href="blog.php" style="text-decoration: none;">
					<p class="view_more_btn mb-5 d-flex flex-row justify-content-start">View More &nbsp; <svg class="svg_icon_arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="width: 25px; height: 25px; ">
							<path fill="#cf1a1f" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
						</svg>
					</p>
				</a>
			</div>

			<div class="d-flex flex-row justify-content-center mt-4">
				<a href="blog.php" style="text-decoration: none;">
					<p class="view_more_btn d-md-none">View More <svg class="svg_icon_arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="width: 25px; height: 25px; ">
							<path fill="#cf1a1f" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
						</svg></p>
				</a>
			</div>


		</div>
	</section>






	<section class="ftco-section testimony-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-8 text-center heading-section ftco-animate">
					<span class="subheading">Testimonials</span>
					<h2 class="mb-4">Our Patients Says About Us</h2>
				</div>
			</div>
			<div class="row ftco-animate justify-content-center">
				<div class="col-md-8">
					<div class="carousel-testimony owl-carousel">
						<div class="item">
							<div class="testimony-wrap d-flex">
								<!-- <div class="user-img mr-4" style="background-image: url(images/person_1.jpg)">
                  </div> -->
								<div class="text ml-2 bg-light">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
									<p>Best General surgeon in kakinada my mother was suffering with hernia past 3
										months surgery was done at aruna hospital with free of cost under arogya Sri she
										is very free and healthy now thank you Dr seshagiri Rao sir</p>
									<p class="name">Chinni Tulasi</p>
									<span class="position">Patient</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap d-flex">
								<!-- <div class="user-img mr-4" style="background-image: url(images/person_2.jpg)">
                  </div> -->
								<div class="text ml-2 bg-light">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
									<p>Iam suffering with severe abdomen pain since last one week , I came to Aruna
										hospital Dr shesha giri rao sir was diagnosed acute appendicitis, surgery was
										done under arogya Sri with free of cost, iam personally recommend this hospital
										for general surgery, treatment was nice and way of explaining of the diagnosis
										was good 😊</p>
									<p class="name">Pavani</p>
									<span class="position">Patient</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap d-flex">
								<!-- <div class="user-img mr-4" style="background-image: url(images/person_3.jpg)">
                  </div> -->
								<div class="text ml-2 bg-light">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
									<p>Good hospitalization and good treatment my mother was suffering with incisional
										Hernia past 4 month's we came to Aruna hospital Dr.seshagiri Rao sir was
										operated to my mother under arogya sri health scheme with free of cost ,now she
										is very healthy and pain relief 😌 , Thank you so much Dr seshagiri Rao sir</p>
									<p class="name">Ambica Vanaparthi</p>
									<span class="position">Patient</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap d-flex">
								<!-- <div class="user-img mr-4" style="background-image: url(images/person_4.jpg)">
                  </div> -->
								<div class="text ml-2 bg-light">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
									<p>Good general surgeon in town dr. Ch. Seshagiri rao sir, iam very thankful to you
										sir, my mother was admitted in aruna hospital, suffering from hernia, surgery
										was done with free of cost under arogya sri, everything will be good at aruna
										hospital 👍</p>
									<p class="name">Bujji Nagu</p>
									<span class="position">Patient</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap d-flex">
								<!-- <div class="user-img mr-4" style="background-image: url(images/person_1.jpg)">
                  </div> -->
								<div class="text ml-2 bg-light">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
									<p>I am suffering with appendicitis, I came to Aruna hospital surgery was done under
										aarogya sri health scheme good treatment ki</p>
									<p class="name">Rakesh</p>
									<span class="position">Patient</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter"
		style="background-color: rgb(189 13 18);" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row">
				<div class="col-md-6 py-5 pr-md-5">
					<div class="heading-section heading-section-white ftco-animate mb-5">
						<span class="subheading">Consultation</span>
						<h2 class="mb-4">GET IN TOUCH</h2>
						<p>Ready to prioritize your health? Book your consultation online or call us to schedule an
							appointment.</p>
					</div>
					<form action="#" class="appointment-form ftco-animate">
						<div class="d-md-flex">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="First Name">
							</div>
							<div class="form-group ml-md-4">
								<input type="text" class="form-control" placeholder="Last Name">
							</div>
						</div>
						<div class="d-md-flex">
							<div class="form-group">
								<div class="form-field">
									<div class="select-wrap">
										<div class="icon"><span class="ion-ios-arrow-down"></span></div>
										<select name="" id="" class="form-control custom-dropdown">
											<option style="color: blue;" value="">Select Your Services</option>
											<option style="color: blue;" value="">General Surgery</option>
											<option style="color: blue;" value="">Gynecological</option>
											<option style="color: blue;" value="">Neuro Surgery</option>
											<option style="color: blue;" value="">ENT</option>
											<option style="color: blue;" value="">Urology</option>
											<option style="color: blue;" value="">General Medicine</option>
											<option style="color: blue;" value="">Orthopedics</option>
											<option style="color: blue;" value="">Physiotherapy</option>
											<option style="color: blue;" value="">plastic Surgey</option>
											<option style="color: blue;" value="">Neurology</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group ml-md-4">
								<input type="text" class="form-control" placeholder="Phone">
							</div>
						</div>

						<!-- <div class="d-md-flex ">
							<div class="form-group ">
								<div class="form-field ">
									<div class="select-wrap">
										<div class="icon"><span class="ion-ios-arrow-down"></span></div>
										<select name="" id="" class="form-control custom-dropdown bg-danger">
											<option class="text-primary"   value="">Select Your Services</option>
											<option  class="text-primary"  value="">Neurology</option>
											<option  class="text-primary"  value="">Cardiology</option>
											<option   class="text-primary" value="">Dental</option>
											<option   class="text-primary" value="">Ophthalmology</option>
											<option   class="text-primary" value="">Other Services</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group ml-md-4">
								<input type="text" class="form-control" placeholder="Phone">
							</div>
						</div> -->

						<div class="d-md-flex">
							<div class="form-group">
								<div class="input-wrap">
									<div class="icon"><span class="ion-md-calendar"></span></div>
									<input type="text" class="form-control appointment_date" placeholder="Date">
								</div>
							</div>
							<div class="form-group ml-md-4">
								<div class="form-group">
									<textarea name="" id="" cols="30" rows="2" class="form-control"
										placeholder="Message"></textarea>
								</div>
							</div>
						</div>
						<div class="d-md-flex">
							<div class="form-group">
								<input type="submit" value="Appointment" class="btn btn-secondary py-3 px-4">
							</div>
						</div>
					</form>
				</div>
				<div class="col-lg-6 p-5 bg-counter aside-stretch">
					<h3 class="vr">About Aruna Hospital Facts</h3>
					<div class="row pt-4 mt-1">
						<div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18 p-5 bg-light">
								<div class="text">
									<strong class="number" data-number="10">10+</strong>
									<span>Years of Experienced</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18 p-5 bg-light">
								<div class="text">
									<strong class="number" data-number="75">75+</strong>
									<span>Number of Beds</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18 p-5 bg-light">
								<div class="text">
									<strong class="number" data-number="20">20+</strong>
									<span>Number of Doctors</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18 p-5 bg-light">
								<div class="text">
									<strong class="number" data-number="100">100+</strong>
									<span>Number of Staffs</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	

		
		<footer class="ftco-footer ftco-bg-dark ftco-section mt-5">
		<div class="container footer_aruna">
		  <div class="row">
			<div class="col-md">
			  <div class="ftco-footer-widget mb-5">
				<img src="./images/logo.png" alt="Your Logo" width="150">
				<p class="mt-4">Aruna Hospital is the best multi-speciality hospital in Kakinada, providing
				  treatment to all
				  types of health problems following modern approach.</p>
				<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
				  <li class="ftco-animate"><a href="https://www.facebook.com/profile.php?id=61552474136305" target="_blank"><span class="icon-facebook"></span></a></li>
				  <li class="ftco-animate"><a href="https://www.instagram.com/aruna_hospital_kakinada/" target="_blank"><span class="icon-instagram"></span></a></li>
				  <li class="ftco-animate"><a href="https://www.youtube.com/channel/UCxqTQfOzRZLO7gNJQSgTGIw" target="_blank"><span class="icon-youtube-play"></span></a></li>
				  <li class="ftco-animate"><a href="https://www.linkedin.com/in/aruna-hospitals/" target="_blank"><span class="icon-linkedin"></span></a></li>
				  <li class="ftco-animate"><a href="https://in.pinterest.com/arunahospitalkakinada2023/" target="_blank"><span class="icon-pinterest"></span></a></li>
				  <li class="ftco-animate"><a href="https://twitter.com/ArunaHospitals"><span class="icon-twitter"></span></a></li>
				</ul>
			  </div>
			</div>
			<div class="col-md">
			  <div class="ftco-footer-widget mb-5 ml-md-4">
				<h2 class="ftco-heading-2">Our Menu</h2>
				<ul class="list-unstyled">
				  <li><a href="index.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
				  <li><a href="about.html"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
				  <li><a href="doctor.html"><span class="ion-ios-arrow-round-forward mr-2"></span>Doctors</a></li>
				  <li><a href="department.html"><span class="ion-ios-arrow-round-forward mr-2"></span>Departments</a></li>
				  <li><a href="contact.html"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
				</ul>
			  </div>
			</div>
			<div class="col-md">
			  <div class="ftco-footer-widget mb-5">
				<h2 class="ftco-heading-2">Reach Us</h2>
				<div class="block-23 mb-3">
				  <ul>
					<li><span class="icon icon-map-marker"></span><span class="text">8-19-14/5, Gandhi Nagar, Ontimamidi Jn., Chagantivari Street,, KAKINADA-533004</span></li>
					<li>
					  <span class="icon icon-phone"></span>
					  <a href="tel:+91 79979 90181" class="mb-0">
						<span class="text">+91 79979 90181</span>
					  </a>
					  <a href="tel:+91 94937 40513" class="mb-0">
						<span class="text">+91 94937 40513</span>
					  </a>
					</li>
					<li>
					  <span class="icon icon-envelope"></span>
					  <a href="mailto:info@arunahospital.com" class="mb-0">
						<span class="text">info@arunahospital.com</span>
					  </a>
					  <a href="mailto:arunahospital1@gmail.com" class="mb-0">
						<span class="text">arunahospital.999@gmail.com</span>
					  </a>
					</li>
				  </ul>
				</div>
			  </div>
			</div>
		  </div>
		  <section class="bhavi_branding">
			<div class="container">
			  <div class="row pt-2 d-flex align-items-center"  padding: 10px 0; width: 100%;">
				<div class="col-md-6 col-12">
				  <div class="footer-widget__copyright-info">
					<p class="last_text mb-0">
					  <a href="terms.html" style="text-decoration: none; color: #ffffff;">Terms & Conditions</a>
					  <a href="privacy.html" style="text-decoration: none; color: #ffffff;">Privacy & Policy</a>
					</p>
				  </div>
				</div>
				<div class="col-md-6 col-12 d-flex justify-content-end align-items-center">
				  <a href="https://bhavicreations.com/" target="_blank" style="text-decoration: none; color: #ffffff; display: flex; align-items: center;">
					<p class="mini_text last_text mb-0">
					  Branding By @
					</p>
					<img src="images/bhavi-logo/bhavi.png" class="img-fluid brand_image" alt="" style="width: 50px; height: 50px;">
				  </a>
				</div>
			  </div>
			</div>
		  </section>
		</div>
	  </footer>
	<!-- WhatsApp link -->
	<a href="https://api.whatsapp.com/send?phone=919493740513" class="whatsapp-link" target="_blank">
		<i class="icon-whatsapp"></i>
	</a>


	<!-- Scroll Up Button  -->
	<button id="scrollBtn" onclick="scrollToTop()"><i class="fa-solid fa-arrow-up "></i></button>

	<script>
		// Function to scroll to the top of the page
		function scrollToTop() {
			window.scrollTo({
				top: 0,
				behavior: 'smooth' // Optional, smooth scrolling animation
			});
		}

		// Show scroll button when scrolling down
		window.onscroll = function() {
			scrollFunction()
		};

		function scrollFunction() {
			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				document.getElementById("scrollBtn").style.display = "block";
			} else {
				document.getElementById("scrollBtn").style.display = "none";
			}
		}
	</script>



	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" />
		</svg>
	</div>



	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/jquery.timepicker.min.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>

	<script>
		$(document).ready(function() {
			$('#imageModal').modal('show');
		});
	</script>

</body>

</html>