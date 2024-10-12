<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>SMST - St. Martha Skills Training And Assement Center Inc</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets2/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets2/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets2/vendor/aos/aos.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets2/vendor/animate.css/animate.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets2/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets2/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />

    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ asset('assets2/css/main.css') }}" rel="stylesheet" />

</head>

<body class="index-page">


    <header class="fixed top-0 w-full z-50 bg-green-500">
        <div class="container mx-auto px-4 flex items-center justify-between relative">

            <!-- Logo Section -->
            <div>
                <img src="{{ asset('assets/images/stmartha.png') }}" alt="user image"
                    class="w-[10px] h-[10px] object-cover">
            </div>

            <!-- Navigation Menu -->
            <nav id="navmenu" class="flex space-x-6">
                <ul class="flex space-x-6">
                    <li><a href="#hero" class="text-white hover:text-gray-200 font-bold">Home</a></li>
                    <li><a href="#about" class="text-white hover:text-gray-200 font-bold">About</a></li>
                    <li><a href="#courses" class="text-white hover:text-gray-200 font-bold">Courses</a></li>
                    <li><a href="#faq" class="text-white hover:text-gray-200 font-bold">FAQ</a></li>
                    <li><a href="#team" class="text-white hover:text-gray-200 font-bold">Team</a></li>
                    <li>
                        <a href="{{ route('login') }}"
                            class="flex items-center text-white hover:text-gray-200 font-bold">
                            <i class="bi bi-person-circle text-2xl mr-1"></i> L O G I N
                        </a>
                    </li>
                </ul>
                <i class="mobile-nav-toggle block xl:hidden bi bi-list text-white text-2xl"></i>
            </nav>

        </div>
    </header>


    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">

            <div id="hero-carousel" data-bs-interval="5000" class="container carousel carousel-fade"
                data-bs-ride="carousel">

                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="carousel-container">
                        <h2 class="animate__animated animate__fadeInDown">WELCOME to<br> ST. Martha Skills Training &
                            Assessment Center Inc.</br></h2>
                        <p class="animate__animated animate__fadeInUp">Compassionate caregivers all over the world.</p>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                            More</a>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="carousel-container">
                        <h2 class="animate__animated animate__fadeInDown">About St. Martha</h2>
                        <p class="animate__animated animate__fadeInUp">St.Marth was established in 1998 and it was the
                            only training center in Bohol during that time to offer caregiving courses that produces
                            compassionate caregivers all over the world.</p>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                            More</a>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item">
                    <div class="carousel-container">
                        <h2 class="animate__animated animate__fadeInDown">Biggest tesda training institution in Bohol
                        </h2>
                        <p class="animate__animated animate__fadeInUp">It is the only training center in Bohol that has
                            a satellite campus that offeres in total of 10 different training qualification.</p>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                            More</a>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

            </div>

            <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28 " preserveAspectRatio="none">
                <defs>
                    <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
                    </path>
                </defs>
                <g class="wave1">
                    <use xlink:href="#wave-path" x="50" y="3"></use>
                </g>
                <g class="wave2">
                    <use xlink:href="#wave-path" x="50" y="0"></use>
                </g>
                <g class="wave3">
                    <use xlink:href="#wave-path" x="50" y="9"></use>
                </g>
            </svg>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>About</h2>
                <p>Who we are</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                        <p style="font-size:14px;">
                            St. Martha Skills Training and Assesment Center,Inc. as a guiding force that produces
                            Filipino workforce with global competence and positive work value
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-circle"></i> <span>Flexible Blended Learning.</span></li>
                            <li><i class="bi bi-check2-circle"></i> <span>After Work Class Training.</span></li>
                            <li><i class="bi bi-check2-circle"></i> <span>Distance Learning Training.</span></li>
                        </ul>
                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <p> Within our Training Center, a collective of seasoned professionals comprises Registered
                            Nurses,
                            Lawyers, Licensed Physical Therapist, Registered Pharmacist, and Licensed Professional
                            Teachers.</p>
                        <a href="#" class="read-more"><span>Read More</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>

                </div>

            </div>

        </section><!-- /About Section -->

        <!-- Features Section -->
        <section id="features" class="features section">

            <div class="container">

                <ul class="nav nav-tabs row  d-flex" data-aos="fade-up" data-aos-delay="100">

                    <li class="nav-item col-4">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                            <i class="bi bi-brightness-high"></i>
                            <h4 class="d-none d-lg-block">About Us</h4>
                        </a>
                    </li>
                    <li class="nav-item col-4">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-4">
                            <i class="bi bi-command"></i>
                            <h4 class="d-none d-lg-block">Our Mission</h4>
                        </a>
                    </li>
                </ul><!-- End Tab Nav -->

                <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

                    <div class="tab-pane fade active show" id="features-tab-3">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h3>St. Martha's Workforce</h3>
                                <p>
                                    Within our Training Center, a collective of seasoned professionals comprises
                                    Registered Nurses,
                                    Lawyers, Licensed Physical Therapist, Registered Pharmacist, and Licensed
                                    Professional Teachers.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> <span>Start by completing the theoretical
                                            aspect.</span></li>
                                    <li><i class="bi bi-check2-all"></i> <span>Step-by-Step Mastery into the world of
                                            Caregiving.</span></li>
                                    <li><i class="bi bi-check2-all"></i> <span>Ensure compliance with all the
                                            caregiving skills demonstrations</span></li>
                                </ul>
                                <p class="fst-italic">
                                    Once you've finished the theory lessons and return demontrations.Complete your OJT
                                    duties. Also, secure certifications by
                                    passing the TESDA National Competency Assessments. Congratulations on your
                                    Accomplishment!
                                </p>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{ asset('assets2/img/working-5.jpg') }}" alt=""
                                    class="img-fluid">

                            </div>
                        </div>
                    </div><!-- End Tab Content Item -->

                    <div class="tab-pane fade" id="features-tab-4">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h3>The center strives to provide par excellent education
                                </h3>
                                <p>
                                    The center is committed to delivering world-class education and training, ensuring
                                    that
                                    our caregivers and healthcare services graduates are equipped with the skills,
                                    knowledge,
                                    and professionalism needed to thrive in the global healthcare landscape. By offering
                                    cutting-edge training programs, we aim to not only meet but exceed industry
                                    standards,
                                    cultivating a workforce that is both technically proficient and compassionate in
                                    providing
                                    patient care.
                                </p>
                                <p class="fst-italic">
                                    Our institution takes pride in fostering an environment of excellence, where
                                    students and
                                    trainees receive personalized guidance from experienced professionals, benefiting
                                    from
                                    both theoretical education and hands-on practical experience.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> <span>Excellent trainers</span></li>
                                    <li><i class="bi bi-check2-all"></i> <span>Clean and organized training
                                            facility.</span></li>
                                    <li><i class="bi bi-check2-all"></i> <span>Fully aircondioned and Comfortable
                                            learning areas.</span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{ asset('assets2/img/working-7.jpg') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End Tab Content Item -->

                </div>

            </div>

        </section><!-- /Features Section -->


        <!-- Recent Posts Section -->
        <section id="courses" class="recent-posts section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Recent Courses</h2>
                <p>Recent Courses Posts<br></p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    @foreach ($courses as $course)
                        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <article>
                                <div class="post-img" style="padding: 10px;">
                                    @if ($course->upload)
                                        <img src="{{ asset($course->upload) }}" alt="{{ $course->title }}"
                                            class="img-fluid"
                                            style="width: 100%;height: 100%; object-fit: contain; background-size: contain; background-position: center; background-repeat: no-repeat;">
                                    @else
                                        <img src="{{ asset('assets/images/tesda.png') }}" alt="user image"
                                            class="img-fluid"
                                            style="width: 100%;height: 100%; object-fit: contain;background-size: cover; background-position: center; background-repeat: no-repeat;">
                                    @endif
                                </div>
                                <h5>{{ $course->title }}</h5><br>
                                <p style="color:red;">Slots Left : <strong>{{ $course->remaining }}</strong></p>
                                <p style="text-align: justify;">
                                    {{ $course->description }}
                                </p>
                                <div>
                                    <div class="post-meta"
                                        style="display: flex; justify-content: space-between; align-items: center;">
                                        <p class="post-author" style="margin: 0;">Classes Start :</p>
                                        <p class="post-date" style="margin: 0;">
                                            <time
                                                datetime="2022-01-01">&nbsp;&nbsp;&nbsp;{{ $course->start_date }}</time>
                                        </p>
                                        <a href="{{ route('form') }}"
                                            style="margin-left: auto; display: flex; align-items: center;">
                                            <span>Enroll Here</span><i class="bi bi-arrow-right"
                                                style="margin-left: 5px;"></i>
                                        </a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    @endforeach


                </div><!-- End recent posts list -->
            </div>
        </section><!-- /Recent Posts Section -->


        <!-- Faq Section -->
        <section id="faq" class="faq section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Frequently Asked Questions</h2>
                <p>Frequently Asked Questions</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-12">
                        <div class="custom-accordion" id="accordion-faq">
                            <div class="accordion-item">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-faq-1">
                                        How to Enroll?
                                    </button>
                                </h2>

                                <div id="collapse-faq-1" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordion-faq">
                                    <div class="accordion-body">
                                        Step 1. Click "Enroll Me" button in the posted available courses section.
                                        Step 2. If slots are available you are automatically being enrolled as scholar
                                        but if it's not you will be a regular student.
                                        Step 3. Fill out the LPS(Learner's Profile Sheet) and submit necessary documents
                                        needed.
                                        Step 4. Wait for the email confirmation if your application was approved.
                                    </div>
                                </div>
                            </div>
                            <!-- .accordion-item -->

                            <div class="accordion-item">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-faq-2">
                                        What are the requirements to be uploaded?
                                    </button>
                                </h2>
                                <div id=" collapse-faq-2" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordion-faq">
                                    <div class="accordion-body">
                                        1. Birth Certificate
                                        2. TOR/Highschool diploma
                                        3. 2x2 Picture Scan

                                    </div>
                                </div>
                            </div>
                            <!-- .accordion-item -->

                            <div class="accordion-item">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-faq-3">
                                        How to check our enrollment status thru website?
                                    </button>
                                </h2>

                                <div id="collapse-faq-3" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordion-faq">
                                    <div class="accordion-body">
                                        Check your application or student status using you login credentials and view
                                        your status in the student tab.
                                    </div>
                                </div>
                            </div>
                            <!-- .accordion-item -->

                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Faq Section -->

        <!-- Team Section -->
        <section id="team" class="team section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Team</h2>
                <p>Our Hardworking Team</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="team-member">
                            <div class="member-img">

                                <img src="{{ asset('assets2/img/team/team-9.jpg') }}" class="img-fluid"
                                    alt="">

                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Nina Chatto-Lasala, Rph</h4>
                                <span>School President/TESDA Board of Trustee</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{ asset('assets2/img/team/team-8.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Jun Karaan,RN,LPT </h4>
                                <span>Assessment Center Manager</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="300">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{ asset('assets2/img/team/team-5.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Epifania Honculada Migueles </h4>
                                <span>Bookeeper/ Bookeeping NCII Trainer</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="400">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{ asset('assets2/img/team/team-12.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Ann Shiela Granada</h4>
                                <span>Guidance Office- Incharge/ Caregiving NCII/Healthcare Services NCII Trainer</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="400">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{ asset('assets2/img/team/team-7.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>JheiRamil Sumalinog</h4>
                                <span>Office Assistant/Caregiving NCII Trainer/Barangay Health Services NCII</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="400">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{ asset('assets2/img/team/team-6.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Gertrude Alivio S. Galleros</h4>
                                <span>Office Assistant/Caregiving NCII Trainer</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="400">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{ asset('assets2/img/team/team-10.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Marivic Cemine, LPT</h4>
                                <span>SMSTACI Representative/ FBS NCII/Housekeeping NCII Trainer/Assesor</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="400">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{ asset('assets2/img/team/team-13.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Melissa Cemine-Handumon</h4>
                                <span>Bookkeeping NCII Trainer/Assessor</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="400">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{ asset('assets2/img/team/team-14.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Roy Rama</h4>
                                <span>IT Support Officer/Computer System Servicing NCII Trainer/Assessor</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="400">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{ asset('assets2/img/team/team-15.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Corazon Calis-Rama</h4>
                                <span>IT Support Staff/Registrar Incharge</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="400">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{ asset('assets2/img/team/team-11.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Mark Aldwin Cemine Handumon</h4>
                                <span>IT Support Staff</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->
                </div>

            </div>

        </section><!-- /Team Section -->


    </main>

    <footer id="footer" class="footer dark-background">
        <div class="container">
            <h3 class="sitename">St. Martha Skills Training and Assessment Center Inc.</h3>
            <p>Compassionate caregivers all over the world.</p>
            <div class="social-links d-flex justify-content-center">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-skype"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
            <div class="container">
                <div class="copyright">
                    <span>Copyright</span> <strong class="px-1 sitename">Selecao</strong> <span>All Rights
                        Reserved</span>
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you've purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets2/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets2/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets2/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets2/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets2/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets2/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets2/js/main.js') }}"></script>
</body>

</html>
