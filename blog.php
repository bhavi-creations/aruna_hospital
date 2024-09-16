<?php
include './db.connection/db_connection.php';
// Fetch blog data
$sql = "SELECT * FROM blog";
$result = $conn->query($sql);
?>



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
    <link rel="stylesheet" href="css/custom.css">
    <script src="https://kit.fontawesome.com/742df65007.js" crossorigin="anonymous"></script>

</head>

<body>
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
                    <li class="nav-item"><a href="index.php" class="nav-link ">Home</a></li>
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
                    <li class="nav-item"><a href="blog.php" class="nav-link active">Blogs</a></li>

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


    <main>

    <section class="text-center my-5">
        <h2  > <strong> Blogs</strong></h2>
    </section>



        <section id="blogs">
            <div class="container">

                <div class="row" id="blogRow">
                    <?php
                    $counter = 0;
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            if ($counter === 0) {
                                echo '
                                    <div class="col-md-9  order-1 order-md-1" id="selectedblog">
                                    <div id="selectedBlogId" style="display: none">' . $counter . '</div>
                                    <h2 class="mb-3  tittle_text">' . $row['title'] . '</h2>
                                    <video class="custom-video" muted  autoplay    controls style="width: 100%; height: auto;">
                                    <source src="admin/public/uploads/videos/' . $row['video'] . '" type="video/mp4">
                                    Your browser does not support the video tag.
                                    </video>
                                    <p>Published On  ';
                    ?>




                                <?php echo date("Y-m-d H:i:s", strtotime($row['time']));
                                echo '</p>
                                    
                                    <div class="row d-flex my-3">';



                                echo '<div>';
                                ?>
                                <?php if (!empty($row['photos'])) : ?>
                                    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                                        <div class="swiper-wrapper row">
                                            <!-- Added 'row' class for Bootstrap grid -->

                                            <?php foreach (json_decode($row['photos']) as $photo) : ?>
                                                <div class="testimonial-item col-6 col-md-4 col-lg-3">
                                                    <!-- Added Bootstrap grid classes -->
                                                    <img src="admin/public/uploads/photos/<?php echo htmlspecialchars($photo); ?>" alt="Blog Photo" class="img-fluid my-2">
                                                </div>
                                            <?php endforeach; ?>

                                        </div>
                                    </div>
                                <?php else : ?>
                                    <p>No photos available.</p>
                                <?php endif; ?>
                                <?php echo '</div>';

                                echo '
                                        </div>';
                                echo $row['content'];
                                echo '
                                            <div style="display: none" id="lastchild">
                                                    <video onclick="swapDivs(`' . $counter . '`)"
                                                        class="custom-video" controls muted autoplay style="width: 100%; height: auto;">
                                                        <source src="admin/public/uploads/videos/' . $row['video'] . '" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                    <h6 class="mb-3" onclick="swapDivs(`' . $counter . '`)">' . $row['title'] . '</h6>
                                            </div>';
                                echo '</div>';





                                if ($result->num_rows > 1) {
                                    echo '<div class="col-md-3  order-2 order-md-2 scrollable-div">';
                                }
                            } else {
                                echo '<div id="sidebardiv' . $counter . '""><video
                                            class="custom-video" autoplay muted controls style="width: 100%; height: auto;" onclick="swapDivs(`' . $counter . '`)">
                                            <source src="admin/public/uploads/videos/' . $row['video'] . '" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                        <h6 class="mb-3" onclick="swapDivs(`' . $counter . '`)">' . $row['title'] . '</h6>';
                                echo '<div class="col-md-9  order-2 order-md-1" id="lastchild" style="display: none">
                                        <h2 class="mb-3" >' . $row['title'] . '</h2>
                                        <video class="custom-video" autoplay muted controls style="width: 100%; height: auto;" onclick="swapDivs(`' . $counter . '`)">
                                            <source src="admin/public/uploads/videos/' . $row['video'] . '" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                        <p>Published On ';
                                ?>
                                <?php echo date("Y-m-d H:i:s", strtotime($row['time']));

                                echo '</p>
                                         <div class="row d-flex my-3">
                                         <div class="row padding_mama">
                                         
                                         <button onclick="hideDiv()" class="   readmore_btn" id="read" style:"width:150px">Read More</button>
                                         
                                           </div>
                                         ';


                                echo '<div id="images" style="display:none;">'; ?>
                                <?php if (!empty($row['photos'])) : ?>
                                    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                                        <div class="swiper-wrapper row">
                                            <!-- Added 'row' class for Bootstrap grid -->

                                            <?php foreach (json_decode($row['photos']) as $photo) : ?>
                                                <div class="testimonial-item col-6 col-md-4 col-lg-3">
                                                    <!-- Added Bootstrap grid classes -->
                                                    <img src="admin/public/uploads/photos/<?php echo htmlspecialchars($photo); ?>" alt="Blog Photo" class="img-fluid my-2">
                                                </div>
                                            <?php endforeach; ?>

                                        </div>
                                    </div>
                                <?php else : ?>
                                    <p>No photos available.</p>
                                <?php endif;
                                echo $row['content'];
                                ?>
                    <?php echo '</div>';




                                echo '
                                        </div>';
                                echo '</div></div>';
                            }
                            $counter++;
                        }
                        if ($result->num_rows > 1) {
                            echo '</div>';
                        }
                    }
                    ?>
                </div>
            </div>
        </section>


        <script>
            state = 1;

            function hideDiv() {

                if (state == 0) {
                    var div = document.getElementById('images');
                    document.getElementById('read').innerHTML = "Read More";
                    div.style.display = 'none';
                    state = 1;
                } else {
                    var div = document.getElementById('images');
                    div.style.display = 'block';
                    document.getElementById('read').innerHTML = "Read less";
                    state = 0;
                }

            }


            function swapDivs(currentDivId) {
                var currentDiv = document.getElementById('sidebardiv' + currentDivId);
                currentDiv.setAttribute('id', 'sidebardiv' + document.getElementById('selectedBlogId').innerText);
                console.log(document.getElementById('selectedBlogId').innerText);
                let selectedBlog = document.getElementById('selectedblog');
                let currentDivLastChild = currentDiv.querySelector('#lastchild');
                let selectedDivLastChild = selectedBlog.querySelector('#lastchild');
                var currentDivNewDiv = document.createElement('div');
                currentDivNewDiv.innerHTML = selectedBlog.querySelector('#lastchild').innerHTML;
                let currentDivNewDivLastChild = document.createElement('div');
                currentDivNewDivLastChild.id = 'lastchild';
                currentDivNewDivLastChild.style.display = 'none';
                selectedBlog.removeChild(selectedDivLastChild);
                selectedBlog.removeChild(document.getElementById('selectedBlogId'));
                currentDivNewDivLastChild.innerHTML = selectedBlog.innerHTML;
                currentDivNewDiv.appendChild(currentDivNewDivLastChild);
                let selectedBlogNewDiv = document.createElement('div');
                selectedBlogNewDiv.innerHTML = currentDiv.querySelector('#lastchild').innerHTML;
                let selectedBlogIDNewDiv = document.createElement('div');
                selectedBlogIDNewDiv.id = 'selectedBlogId';
                selectedBlogIDNewDiv.innerText = currentDivId;
                let selectedBlogNewDivLastChild = document.createElement('div');
                selectedBlogNewDivLastChild.id = 'lastchild';
                selectedBlogNewDivLastChild.style.display = 'none';
                currentDiv.removeChild(currentDivLastChild);
                selectedBlogNewDivLastChild.innerHTML = currentDiv.innerHTML;
                selectedBlogNewDiv.appendChild(selectedBlogIDNewDiv);
                selectedBlogNewDiv.appendChild(selectedBlogNewDivLastChild);
                currentDiv.innerHTML = currentDivNewDiv.innerHTML;
                selectedBlog.innerHTML = selectedBlogNewDiv.innerHTML;

                // Manage volume
                let currentDivVideo = currentDiv.querySelector('video');
                let selectedBlogVideo = selectedBlog.querySelector('video');
                if (currentDivVideo) currentDivVideo.muted = true; // Mute the sidebar video
                if (selectedBlogVideo) selectedBlogVideo.muted = false; // Unmute the main video

                // Scroll to main video section
                selectedBlog.scrollIntoView({
                    behavior: 'smooth'
                });




            }
        </script>

    </main>



    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-5">
                        <img src="./images/logo.png" alt="Your Logo" width="150">
                        <p class="mt-4">Aruna Hospital is the best multi-speciality hospital in Kakinada, providing
                            treatment to all
                            types of health problems following modern approach.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                            <li class="ftco-animate"><a href="https://www.facebook.com/profile.php?id=61552474136305"
                                    target="_blank"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.instagram.com/aruna_hospital_kakinada/"
                                    target="_blank"><span class="icon-instagram"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.youtube.com/channel/UCxqTQfOzRZLO7gNJQSgTGIw"
                                    target="_blank"><span class="icon-youtube-play"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.linkedin.com/in/aruna-hospitals/"
                                    target="_blank"><span class="icon-linkedin"></span></a></li>
                            <li class="ftco-animate"><a href="https://in.pinterest.com/arunahospitalkakinada2023/"
                                    target="_blank"><span class="icon-pinterest"></span></a></li>
                            <li class="ftco-animate"><a href="https://twitter.com/ArunaHospitals"><span
                                        class="icon-twitter"></span></a></li>
                        </ul>
                    </div>

                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-5 ml-md-4">
                        <h2 class="ftco-heading-2">Our Menu</h2>
                        <ul class="list-unstyled">
                            <li><a href="index.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                            <li><a href="about.html"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a>
                            </li>
                            <li><a href="doctor.html"><span class="ion-ios-arrow-round-forward mr-2"></span>Doctors</a>
                            </li>
                            <li><a href="department.html"><span
                                        class="ion-ios-arrow-round-forward mr-2"></span>Departments</a></li>
                            <li><a href="contact.html"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-5">
                        <h2 class="ftco-heading-2">Reach Us</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">8-19-14/5, Gandhi
                                        Nagar, Ontimamidi Jn., Chagantivari Street,, KAKINADA-533004</span></li>
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
            <div class="footer-area-bottom theme-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-8 col-12">
                            <div class="footer-widget__copyright">
                                <span style="color:#0C0531"> ©2024 Aruna Hospital. <i>All Rights Reserved. Designed &
                                        Developed by <a href="https://bhavicreations.com/" target="_blank"
                                            class="font-weight-bold" style="text-decoration: none; ">Bhavi
                                            Creations</a></i></span>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                            <div class="footer-widget__copyright-info info-direction">
                                <ul class="d-flex align-items-center">
                                    <a href="terms.html" style="text-decoration: none; ">Terms and conditions &nbsp;
                                        &nbsp; &nbsp;</a>
                                    <a href="privacy.html" style="text-decoration: none; ">Privacy policy</a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel"
		aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-header popup-div">
					<button type="button" class="close popup-div-close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">

					<img src="images/best-multispeciality-hospital-in-kakinada-aruna-hospital.png" class="img-fluid"
						alt="best-multispeciality-hospital">
					<div class="text-center m-4">
						<a href="appointment.html" class="btn btn-secondary">Book Appointment</a>
					</div>
				</div>
			</div>
		</div>
	</div>   -->

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