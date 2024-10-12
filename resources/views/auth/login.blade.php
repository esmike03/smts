<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Styles for the background images */
        #background {
            position: relative; /* Make the container relative */
            overflow: hidden; /* Hide overflow for smooth transitions */
            height: 100vh; /* Full height */
        }

        #background-image {
            background-size: cover;
            background-position: center;
            transition: opacity 1s ease-in-out; /* Transition for opacity */
            position: absolute; /* Ensure it fills the parent */
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            opacity: 0; /* Start with opacity 0 */
        }

        #background-image.show {
            opacity: 1; /* Show image when the class 'show' is added */
        }
    </style>
</head>

<body class="font-[Nunito] bg-green-700">
    <!-- [ auth-signup ] start -->
    <section id="background">
        <div id="background-image" class="show "></div> <!-- Initial background image div -->
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0 relative z-10">
            <a href="#" class="flex text-center items-center mb-6 text-2xl font-semibold text-white">
                St. Martha Skills Training And Assessment Center Inc.
            </a>
            <div class="w-full backdrop-filter backdrop-blur-xl bg-opacity-50 bg-green-600 rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h4 class="text-center text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white" style="color:orange">
                        Log In
                    </h4>
                    <form method="POST" action="{{ route('login') }}" class="space-y-4 md:space-y-6">
                        @csrf
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-white">Your email</label>
                            <x-text-input id="email" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Email Address" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-white">Password</label>
                            <x-text-input id="password" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="password" name="password" required autocomplete="new-password" placeholder="••••••••" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="remember" class="text-gray-300">Remember me</label>
                                </div>
                            </div>
                            <a href="{{ route('password.request') }}" class="text-sm font-medium text-gray-300 hover:underline dark:text-primary-500">Forgot password?</a>
                        </div>

                        <button type="submit" class="w-full text-white bg-amber-500 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                            {{ __('Log in') }}
                        </button>

                        <p class="text-sm font-light text-gray-200">
                            Don't have an account? <a href="{{ route('form') }}" class="font-medium text-amber-400 hover:underline dark:text-primary-500">Sign Up</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

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

</body>
</html>
