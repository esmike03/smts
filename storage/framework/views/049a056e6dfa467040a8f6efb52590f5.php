<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMST - St. Martha Skills Training And Assessment Center Inc.</title>

    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="flex flex-col font-[Nunito] bg-gradient-to-b from-[#127448] to-[#25a94f] min-h-screen mb-2">
    <header
        class="fixed border-b-4 border-amber-300 top-0 left-0 right-0 mb-2 px-4 shadow bg-green-700 z-50 backdrop-filter backdrop-blur-xl bg-opacity-30">

        <div class="relative mx-auto flex max-w-screen-lg flex-col py-4 sm:flex-row sm:items-center sm:justify-between">
            <a class="flex items-center text-2xl font-black" href="/">
                <img src="<?php echo e(asset('assets/images/stmartha.png')); ?>" class="h-11 w-11 mr-2" alt="BISU Logo" />
                <div class="flex flex-col items-start">
                    <span class="text-lg text-neutral-200 font-normal" @click="success = false">St. Martha Skills
                        Training and Assessment Center, Inc.</span>
                </div>

            </a>
            <input class="peer hidden" type="checkbox" id="navbar-open" />
            <label class="absolute right-0 mt-1 cursor-pointer text-white text-xl sm:hidden" for="navbar-open">
                <span class="sr-only">Toggle Navigation</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="0.88em" height="1em"
                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 448 512">
                    <path fill="currentColor"
                        d="M0 96c0-17.7 14.3-32 32-32h384c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32h384c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zm448 160c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32h384c17.7 0 32-14.3 32 32z" />
                </svg>
            </label>
            <nav aria-label="Header Navigation" class="peer-checked:block hidden pl-2 py-6 sm:block sm:py-0">
                <ul class="flex flex-col gap-y-4 sm:flex-row sm:gap-x-8">
                    <li>
                        <a href="#hero" class="text-gray-100 hover:text-amber-400">
                            Home</a>
                    </li>
                    <li>
                        <a href="#courses" class="text-gray-100 hover:text-amber-400">
                            Courses</a>
                    </li>
                    <li>
                        <a href="#about" class="text-gray-100 hover:text-amber-400">
                            About</a>
                    </li>
                    <li>
                        <a href="#faq" class="text-gray-100 hover:text-amber-400">
                            FAQs</a>
                    </li>
                    <li>
                        <a href="#team" class="text-gray-100 hover:text-amber-400">
                            Team</a>
                    </li>
                    <li class="flex justify-center">
                        <a href="<?php echo e(route('login')); ?>" class="flex items-center text-gray-100 hover:text-amber-400">
                            <i class="fas fa-chalkboard-teacher mr-2"></i>
                            Log In
                        </a>
                    </li>

                </ul>
            </nav>
        </div>
    </header>

    <main class="mt-[80px]">
        <section id="hero" class="border-amber-300 border-b-2 h-full animate__animated animate__fadeIn">
            <div class="relative">
                <!-- BG Image -->
                <img src="assets/images/herosasd.png" alt=""
                    class=" blur-sm opacity-80 absolute -z-10 inline-block h-full w-full object-cover" />
                <!-- Container -->

                <div
                    class="animate__animated animate__fadeInLeft mt-2 absolute top-0 left-0 p-2 px-8 bg-gradient-to-r from-white to-transparent">
                    <div class="mx-auto flex items-center">
                        <img src="assets/images/tesda.png" alt="" class="inline-block h-12" />
                        <p class="inline-block text-blue-800 text-2xl font-extrabold ml-2">TESDA</p>
                    </div>
                </div>

                <div class="mx-auto w-full max-w-7xl px-5 py-16 md:px-10 md:py-24 lg:py-32">
                    <!-- Heading Content -->
                    <div class="mx-auto max-w-3xl text-center">
                        <h1
                            class="animate__animated animate__fadeInDown mb-2 mt-4 drop-shadow-xl pb-4 text-4xl font-bold text-white sm:text-lg md:text-5xl">
                            St. Martha Skills
                            Training and Assessment Center Inc.</h1>
                        <p
                            class="animate__animated animate__fadeIn mx-auto mb-2 max-w-[528px] drop-shadow-xl text-lg text-[#f0f0f0] lg:mb-8">
                            The only
                            training center in Bohol that has a satellite campus offering a total of 10 different
                            training qualifications. </p>
                        <a href="#courses"
                            class="animate__animated animate__fadeInUp inline-block rounded-lg bg-[#148e1c] px-6 py-2 text-center font-bold text-amber-500 transition hover:border-black hover:bg-white">ENROLL
                            NOW <i class="fas fa-arrow-right text-amber-500"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <section id="courses" class="recent-posts section py-10 px-6 mt-10">

            <img src="assets/images/coursebg.png" alt=""
                class=" opacity-30 absolute -z-10 inline-block h-full w-full object-contain" />
            <!-- Section Title -->
            <div class="container mx-auto mt-14 mb-8 justify-start border-amber-300 border-b-2" data-aos="fade-up">
                <h2 class="text-4xl font-bold text-white">COURSES</h2>
                <p class="text-lg text-gray-200">Recent Courses Posts<br></p>
            </div><!-- End Section Title -->

            <div class="container mx-auto">

                <div class="grid grid-cols-1 gap-8 md:grid-cols-2 xl:grid-cols-3">

                    <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="p-2 flex justify-center" data-aos="fade-up" data-aos-delay="100">
                            <!-- Center the card -->
                            <article class="bg-white rounded-lg shadow-lg flex flex-col h-full overflow-hidden w-80">
                                <!-- Set a fixed width -->
                                <div class="post-img p-2 flex-grow">
                                    <?php if($course->upload): ?>
                                        <img src="<?php echo e(asset($course->upload)); ?>" alt="<?php echo e($course->title); ?>"
                                            class="w-full h-32 object-contain bg-center bg-cover">
                                        <!-- Reduced height -->
                                    <?php else: ?>
                                        <img src="<?php echo e(asset('assets/images/tesda.png')); ?>" alt="user image"
                                            class="w-full h-32 object-cover bg-center"> <!-- Reduced height -->
                                    <?php endif; ?>
                                </div>
                                <div class="p-3 flex-grow"> <!-- Reduced padding -->
                                    <h5 class="text-lg font-semibold"><?php echo e($course->title); ?></h5>
                                    <!-- Reduced font size -->
                                    <p class="text-red-500">Slots Left: <strong><?php echo e($course->remaining); ?></strong></p>
                                    <p class="text-gray-700 text-justify text-sm"> <!-- Reduced font size -->
                                        <?php echo e($course->description); ?>

                                    </p>
                                    <div class="flex justify-between items-center mt-2"> <!-- Reduced margin -->
                                        <div class="flex gap-1">
                                            <p class="text-gray-600 text-sm">Classes Start:</p>
                                            <!-- Reduced font size -->
                                            <p class="text-gray-600 text-sm">
                                                <time datetime="2022-01-01"><?php echo e($course->start_date); ?></time>
                                            </p>
                                        </div>

                                        <a href="<?php echo e(route('form')); ?>"
                                            class="flex gap-1 items-center p-2 rounded-md
                                             bg-amber-500 text-white hover:underline text-sm">
                                            <!-- Reduced font size -->
                                            <span>Enroll Here </span>
                                            <i class="fas fa-arrow-right text-white-500"></i>
                                        </a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
                <!-- End recent posts list -->
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="py-12 px-6">
            <!-- Section Title -->
            <div class="container mt-14 mx-auto mb-4 justify-start border-amber-300 border-b-2" data-aos="fade-up">
                <h2 class="text-4xl font-bold text-white">ABOUT</h2>
                <p class="text-lg text-gray-200">Who we are<br></p>
            </div><!-- End Section Title -->

            <div class="container mx-auto grid grid-cols-1 lg:grid-cols-2 gap-8">

                <div class="p-6" data-aos="fade-up" data-aos-delay="100">
                    <p class="text-lg text-white text-justify">
                        St. Martha Skills Training and Assessment Center, Inc. as a guiding force that produces Filipino
                        workforce with global competence and positive work value.
                    </p>
                    <ul class="list-disc pl-5 mt-4">
                        <li class="flex items-center text-lg">
                            <i class="fas fa-check mr-2 text-amber-300"></i>
                            <span class="text-white">Flexible Blended Learning.</span>
                        </li>
                        <li class="flex items-center text-lg">
                            <i class="fas fa-check mr-2 text-amber-300"></i>
                            <span class="text-white">After Work Class Training.</span>
                        </li>
                        <li class="flex items-center text-lg">
                            <i class="fas fa-check mr-2 text-amber-300"></i>
                            <span class="text-white">Distance Learning Training.</span>
                        </li>
                    </ul>

                </div>

                <div class="p-6" data-aos="fade-up" data-aos-delay="200">
                    <p class="text-white text-lg text-justify">Within our Training Center, a collective of seasoned
                        professionals comprises Registered Nurses,
                        Lawyers, Licensed Physical Therapists, Registered Pharmacists, and Licensed Professional
                        Teachers.</p>
                    <a href="#features"
                        class="mt-4 inline-block text-lg text-amber-500 gap-2 hover:underline"><span>Read More</span><i
                            class="fa fa-arrow-right ml-1"></i></a>
                </div>

            </div>

        </section><!-- /About Section -->

        <!-- Features Section -->
        <section id="features" class=" px-6 overflow-hidden">
            <div class="container mx-auto">
                <!-- Tabs Navigation -->
                <div class="flex justify-start mb-6">
                    <button class="tab-button flex flex-col items-center p-4 active" data-target="0">

                        <h4 class="text-xl text-white border-amber-500 border-2 p-2 rounded-md">About us</h4>
                    </button>
                    <button class="tab-button flex flex-col items-center p-4" data-target="1">

                        <h4 class="text-xl text-white border-amber-500 border-2 p-2 rounded-md">Our Mission</h4>
                    </button>
                </div>

                <!-- Sliding Sections -->
                <div class="tab-content relative w-full overflow-x-hidden">
                    <div class="slidable-sections flex transition-transform duration-500" style="width: 200%;">
                        <!-- About Us Section -->
                        <div class="w-full px-4" style="width: 50%;">
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                                <div class="mt-3 lg:mt-0">
                                    <h3 class="text-2xl font-semibold text-white">St. Martha's Workforce</h3>
                                    <p class="text-white text-justify">Within our Training Center, a collective of
                                        seasoned
                                        professionals comprises
                                        Registered Nurses,
                                        Lawyers, Licensed Physical Therapist, Registered Pharmacist, and Licensed
                                        Professional Teachers.</p>
                                    <ul class="list-disc pl-5 mt-4 text-white">
                                        <li class="flex items-center">
                                            <i class="bi bi-check2-all mr-2"></i> Start by completing the theoretical
                                            aspect.
                                        </li>
                                        <li class="flex items-center">
                                            <i class="bi bi-check2-all mr-2"></i> Step-by-Step Mastery into the world
                                            of Caregiving.
                                        </li>
                                        <li class="flex items-center">
                                            <i class="bi bi-check2-all mr-2"></i> Ensure compliance with all the
                                            caregiving skills demonstrations.
                                        </li>
                                    </ul>
                                    <p class="italic mt-4 text-white"> Once you've finished the theory lessons and
                                        return demontrations.Complete your OJT
                                        duties. Also, secure certifications by
                                        passing the TESDA National Competency Assessments. Congratulations on your
                                        Accomplishment!</p>
                                </div>
                                <div class="text-center">
                                    <img src="<?php echo e(asset('assets2/img/working-5.jpg')); ?>" alt=""
                                        class="w-auto h-auto">
                                </div>
                            </div>
                        </div>

                        <!-- Our Mission Section -->
                        <div class="w-full px-4" style="width: 50%;">
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                                <div class="mt-3 lg:mt-0 text-white">
                                    <h3 class="text-2xl font-semibold">The center strives to provide par excellent
                                        education</h3>
                                    <p class="text-justify"> The center is committed to delivering world-class
                                        education and training,
                                        ensuring
                                        that
                                        our caregivers and healthcare services graduates are equipped with the skills,
                                        knowledge,
                                        and professionalism needed to thrive in the global healthcare landscape. By
                                        offering
                                        cutting-edge training programs, we aim to not only meet but exceed industry
                                        standards,
                                        cultivating a workforce that is both technically proficient and compassionate in
                                        providing
                                        patient care.</p>
                                    <p class="mt-4 text-justify italic">
                                        Our institution takes pride in fostering an environment of excellence, where
                                        students and
                                        trainees receive personalized guidance from experienced professionals,
                                        benefiting
                                        from
                                        both theoretical education and hands-on practical experience.
                                    </p>
                                    <ul class="list-disc pl-5 mt-4">
                                        <li class="flex items-center">
                                            <i class="bi bi-check2-all mr-2"></i> Excellent trainers.
                                        </li>
                                        <li class="flex items-center">
                                            <i class="bi bi-check2-all mr-2"></i> Clean and organized training
                                            facility.
                                        </li>
                                        <li class="flex items-center">
                                            <i class="bi bi-check2-all mr-2"></i> Fully aircondioned and Comfortable
                                            learning areas.
                                        </li>
                                    </ul>
                                </div>
                                <div class="text-center">
                                    <img src="<?php echo e(asset('assets2/img/working-7.jpg')); ?>" alt=""
                                        class="w-auto h-auto">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Faq Section -->
        <section id="faq" class="faq section py-4 px-6">
            <!-- Section Title -->
            <div class="container mt-14 mx-auto mb-4 justify-start border-amber-300 border-b-2" data-aos="fade-up">
                <h2 class="text-4xl font-bold mb-2 text-white">Frequently Asked Questions</h2>
            </div><!-- End Section Title -->

            <div class="mt-6 container mx-auto" data-aos="fade-up" x-data="{ open: null }">
                <div class="flex flex-col">

                    <div class="accordion" id="accordion-faq">

                        <div class="accordion-itemrounded-lg mb-2">
                            <h2 class="mb-0">
                                <button
                                    class="flex justify-between w-full p-4 text-left bg-white rounded-lg focus:outline-none hover:bg-gray-200"
                                    @click="open === 1 ? open = null : open = 1">
                                    <span class="text-lg font-semibold">How to Enroll?</span>
                                    <svg class="w-5 h-5 transition-transform duration-300"
                                        :class="{ 'rotate-90': open === 1 }" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                </button>
                            </h2>

                            <div x-show="open === 1" class="accordion-body p-4 text-white text-xl">
                                Step 1. Click "Enroll Me" button in the posted available courses section.<br>
                                Step 2. If slots are available, you are automatically enrolled as a scholar; if not, you
                                will be a regular student.<br>
                                Step 3. Fill out the LPS (Learner's Profile Sheet) and submit necessary documents
                                needed.<br>
                                Step 4. Wait for the email confirmation if your application is approved.
                            </div>
                        </div>
                        <!-- .accordion-item -->

                        <div class="accordion-item  rounded-lg mb-2">
                            <h2 class="mb-0">
                                <button
                                    class="flex justify-between w-full p-4 text-left bg-white rounded-lg focus:outline-none hover:bg-gray-200"
                                    @click="open === 2 ? open = null : open = 2">
                                    <span class="text-lg font-semibold">What are the requirements to be
                                        uploaded?</span>
                                    <svg class="w-5 h-5 transition-transform duration-300"
                                        :class="{ 'rotate-90': open === 2 }" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                </button>
                            </h2>
                            <div x-show="open === 2" class="accordion-body p-4 text-xl text-white">
                                1. Birth Certificate<br>
                                2. TOR/Highschool diploma<br>
                                3. 2x2 Picture Scan
                            </div>
                        </div>
                        <!-- .accordion-item -->

                        <div class="accordion-item rounded-lg mb-2">
                            <h2 class="mb-0">
                                <button
                                    class="flex justify-between w-full p-4 text-left bg-white rounded-lg focus:outline-none hover:bg-gray-200"
                                    @click="open === 3 ? open = null : open = 3">
                                    <span class="text-lg font-semibold">How to check our enrollment status through the
                                        website?</span>
                                    <svg class="w-5 h-5 transition-transform duration-300"
                                        :class="{ 'rotate-90': open === 3 }" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                </button>
                            </h2>
                            <div x-show="open === 3" class="accordion-body p-4 text-white text-xl">
                                Check your application or student status using your login credentials and view your
                                status in the student tab.
                            </div>
                        </div>
                        <!-- .accordion-item -->

                    </div>
                </div>
            </div>
        </section>

        <section id="team" class="py-10 px-6" x-data="teamPagination()">
            <!-- Section Title -->
            <div class="container mx-auto mt-14 mb-8 justify-start border-amber-300 border-b-2" data-aos="fade-up">
                <h2 class="text-4xl font-bold text-white">TEAM</h2>
                <p class="text-lg text-gray-200">Our hard working team<br></p>
            </div>

            <!-- Team Members -->
            <div class="container mx-auto overflow-y-auto" style="max-height: calc(100vh - 200px);">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 px-4">
                    <template x-for="(member, index) in paginatedTeam" :key="index">
                        <div
                            class="bg-green-900 backdrop-filter backdrop-blur-xl bg-opacity-30 rounded-lg shadow-md p-5 flex flex-col items-center">
                            <img :src="member.image" class="w-32 h-32 object-cover rounded-md mb-4"
                                :alt="member.name">
                            <h4 class="text-xl font-semibold text-amber-500 text-center" x-text="member.name"></h4>
                            <span class="text-sm text-gray-200 text-center" x-text="member.role"></span>
                        </div>
                    </template>
                </div>
                <!-- Pagination Controls -->
                <div class="flex justify-between mt-4 space-x-2">
                    <button @click="prevPage" :disabled="currentPage === 1"
                        class="px-4 py-2 bg-amber-500 text-white rounded">
                        Previous
                    </button>
                    <button @click="nextPage" :disabled="currentPage === totalPages"
                        class="px-4 py-2 bg-amber-500 text-white rounded">
                        Next
                    </button>
                </div>
            </div>

        </section>



    </main>



    <footer class="bg-green-500">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="https://flowbite.com/" class="flex items-center">
                        <img src="<?php echo e(asset('assets/images/stmartha.png')); ?>" class="h-8 me-3"
                            alt="st. Martha Logo" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">St. Martha Skills
                            Training and Assessment Center Inc.</span>
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold  uppercase text-white">Resources</h2>
                        <ul class="text-gray-300 font-medium">
                            <li class="mb-4">
                                <a href="https://flowbite.com/" class="hover:underline">Flowbite</a>
                            </li>
                            <li>
                                <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold  uppercase text-white">Follow us</h2>
                        <ul class="text-gray-300 font-medium">
                            <li class="mb-4">
                                <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                            </li>
                            <li>
                                <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold  uppercase text-white">Legal</h2>
                        <ul class="text-gray-300 font-medium">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-200 sm:text-center ">© 2024 <a href="https://flowbite.com/"
                        class="hover:underline">SMST™</a>. All Rights Reserved.
                </span>
                <div class="flex mt-4 sm:justify-center sm:mt-0">
                    <a href="#" class="text-gray-200 hover:text-amber-500 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 8 19">
                            <path fill-rule="evenodd"
                                d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="#" class="text-gray-200 hover:text-amber-500 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 21 16">
                            <path
                                d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                        </svg>
                        <span class="sr-only">Discord community</span>
                    </a>
                    <a href="#" class="text-gray-200 hover:text-amber-500 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 17">
                            <path fill-rule="evenodd"
                                d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Twitter page</span>
                    </a>
                    <a href="#" class="text-gray-200 hover:text-amber-500 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">GitHub account</span>
                    </a>
                    <a href="#" class="text-gray-200 hover:text-amber-500 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Dribbble account</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>

</body>
<script>
    function teamPagination() {
        return {
            members: [{
                    name: 'Nina Chatto-Lasala, Rph',
                    role: 'School President/TESDA Board of Trustee',
                    image: '<?php echo e(asset('assets2/img/team/team-9.jpg')); ?>'
                },
                {
                    name: 'Jun Karaan, RN, LPT',
                    role: 'Assessment Center Manager',
                    image: '<?php echo e(asset('assets2/img/team/team-8.jpg')); ?>'
                },
                {
                    name: 'Epifania Honculada Migueles',
                    role: 'Bookkeeper/Bookkeeping NCII Trainer',
                    image: '<?php echo e(asset('assets2/img/team/team-5.jpg')); ?>'
                },
                {
                    name: 'Ann Shiela Granada',
                    role: 'Guidance Office-Incharge/Caregiving NCII/Healthcare Services NCII Trainer',
                    image: '<?php echo e(asset('assets2/img/team/team-12.jpg')); ?>'
                },
                {
                    name: 'JheiRamil Sumalinog',
                    role: 'Office Assistant/Caregiving NCII Trainer/Barangay Health Services NCII',
                    image: '<?php echo e(asset('assets2/img/team/team-7.jpg')); ?>'
                },
                {
                    name: 'Gertrude Alivio S. Galleros',
                    role: 'Office Assistant/Caregiving NCII Trainer',
                    image: '<?php echo e(asset('assets2/img/team/team-6.jpg')); ?>'
                },
                {
                    name: 'Marivic Cemine, LPT',
                    role: 'SMSTACI Representative/FBS NCII/Housekeeping NCII Trainer/Assessor',
                    image: '<?php echo e(asset('assets2/img/team/team-10.jpg')); ?>'
                },
                {
                    name: 'Melissa Cemine-Handumon',
                    role: 'Bookkeeping NCII Trainer/Assessor',
                    image: '<?php echo e(asset('assets2/img/team/team-13.jpg')); ?>'
                },
                {
                    name: 'Roy Rama',
                    role: 'IT Support Officer/Computer System Servicing NCII Trainer/Assessor',
                    image: '<?php echo e(asset('assets2/img/team/team-14.jpg')); ?>'
                },
                {
                    name: 'Corazon Calis-Rama',
                    role: 'IT Support Staff/Registrar Incharge',
                    image: '<?php echo e(asset('assets2/img/team/team-15.jpg')); ?>'
                },
                {
                    name: 'Mark Aldwin Cemine Handumon',
                    role: 'IT Support Staff',
                    image: '<?php echo e(asset('assets2/img/team/team-11.jpg')); ?>'
                },
            ],

            currentPage: 1,
            perPage: 4,

            get totalPages() {
                return Math.ceil(this.members.length / this.perPage);
            },

            get paginatedTeam() {
                const start = (this.currentPage - 1) * this.perPage;
                return this.members.slice(start, start + this.perPage);
            },

            nextPage() {
                if (this.currentPage < this.totalPages) {
                    this.currentPage++;
                }
            },

            prevPage() {
                if (this.currentPage > 1) {
                    this.currentPage--;
                }
            }
        };
    }
</script>

</html>
<?php /**PATH D:\xampp\htdocs\smts\resources\views/pages/landing/index.blade.php ENDPATH**/ ?>