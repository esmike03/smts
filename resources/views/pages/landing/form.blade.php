<!DOCTYPE html>
<html lang="en">

<head>
    <title>SMST - St. Martha Skills Training And Assessment Center Inc</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- Vite CSS -->
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Styles for the background images */
        #background {
            position: relative;
            /* Make the container relative */
            overflow: hidden;
            /* Hide overflow for smooth transitions */
            height: 100vh;
            /* Full height */
        }

        #background-image {
            background-size: cover;
            background-position: center;
            transition: opacity 1s ease-in-out;
            /* Transition for opacity */
            position: absolute;
            /* Ensure it fills the parent */
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            opacity: 0;
            /* Start with opacity 0 */
        }

        #background-image.show {
            opacity: 1;
            /* Show image when the class 'show' is added */
        }
    </style>
</head>

<body class="bg-green-700 font-[Nunito]">
    <!-- [ auth-signup ] start -->
    <section id="background">
        <div id="background-image" class="show"></div>
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0 relative z-10">
            <a href="#" class="flex text-center items-center mb-6 text-2xl font-semibold text-white">
                St. Martha Skills Training And Assessment Center Inc
            </a>
            <div
                class="w-full max-w-md backdrop-filter backdrop-blur-xl bg-opacity-50 bg-green-600  rounded-lg shadow dark:border md:mt-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight md:text-2xl text-amber-500">
                        Sign up to Enroll
                    </h1>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class=" grid lg:grid-cols-2 gap-4 sm:grid-cols-1">
                            <div>
                                <label for="first_name" class="block mb-2 text-sm font-medium text-white">Your
                                    name</label>
                                <x-text-input id="first_name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    type="text" name="first_name" :value="old('first_name')" required autofocus
                                    placeholder="Name" />
                                <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                            </div>

                            <div>
                                <label for="phone" class="block mb-2 text-sm font-medium text-white">Phone
                                    number</label>
                                <x-text-input id="phone"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    type="number" name="phone" :value="old('phone')" required
                                    placeholder="Phone number" />
                                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                            </div>

                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-white">Your
                                    email</label>
                                <x-text-input id="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    type="email" name="email" :value="old('email')" required
                                    placeholder="abc@gmail.com" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div></div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-white">Password</label>
                                <x-text-input id="password"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    type="password" name="password" required placeholder="••••••••" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <div>
                                <label for="password_confirmation"
                                    class="block mb-2 text-sm font-medium text-white">Confirm
                                    Password</label>
                                <x-text-input id="password_confirmation"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    type="password" name="password_confirmation" required placeholder="••••••••" />
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>


                        </div>
                        <button type="submit"
                            class="w-full mt-4 text-white bg-amber-600 hover:bg-amber-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                            {{ __('Register') }}
                        </button>
                        <p class="text-sm mt-4 font-light text-gray-200">
                            Already have an account? <a href="{{ route('login') }}"
                                class="font-medium text-amber-400 hover:underline">Sign In</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>

    </section>
    <!-- [ auth-signup ] end -->

    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
</body>
<script>
    const images = [
        '{{ asset('assets/images/pic-1.jpg') }}',
        '{{ asset('assets/images/pic-3.jpg') }}',
        '{{ asset('assets/images/pic-4.jpg') }}',
        '{{ asset('assets/images/pic-5.jpg') }}',
        '{{ asset('assets/images/pic-6.jpg') }}'
    ];
    let currentIndex = 0;

    function changeBackground() {
        const backgroundImage = document.getElementById('background-image');

        // Fade out current image
        backgroundImage.classList.remove('show');

        setTimeout(() => {
            // Change the background image
            backgroundImage.style.backgroundImage = `url(${images[currentIndex]})`;

            // Fade in new image
            backgroundImage.classList.add('show');
        }, 1000); // Time to wait before changing the image (should match the opacity transition time)

        currentIndex = (currentIndex + 1) % images.length;
    }

    setInterval(changeBackground, 5000);
    changeBackground(); // Initial call to set the first background
</script>


</html>
