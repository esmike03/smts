<!DOCTYPE html>
<html lang="en">

<head>
    <title>Flat Able - Premium Admin Template by Phoenixcoded</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Add custom CSS for background animation -->
    <style>
        .auth-wrapper {
            background-position: center;
            /* animation: slide 8s 2s infinite; */
            animation: slide 10s infinite ease-in-out; /* Slower animation */
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
        }

        .box-generator {
            box-shadow: 3px 1px 90px 41px rgba(212,173,72,0.75);-webkit-box-shadow: 3px 1px 90px 41px rgba(212,173,72,0.75);-moz-box-shadow: 3px 1px 90px 41px rgba(212,173,72,0.75);
            background-color: transparent;
        }

        @keyframes slide {
            0% {
                background-image: url('{{ asset('assets/images/pic-1.jpg') }}');
            }
            25% {
                background-image: url('{{ asset('assets/images/pic-3.jpg') }}');
            }
            50% {
                background-image: url('{{ asset('assets/images/pic-4.jpg') }}');
            }
            75% {
                background-image: url('{{ asset('assets/images/pic-5.jpg') }}');
            }
            100% {
                background-image: url('{{ asset('assets/images/pic-6.jpg') }}');
            }
        }
    </style>
</head>
<body>
    <!-- [ auth-signup ] start -->
    <div class="auth-wrapper d-flex align-items-center justify-content-center min-vh-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="box-generator card borderless" >
                        <div class="card-body">
                            <h4 class="text-center f-w-400" style="color:orange">Sign In</h4>
                            <hr>

                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <x-text-input id="email" class="form-control" type="email" name="email"
                                        :value="old('email')" required autocomplete="username" placeholder="Email Address" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <div class="form-group">
                                    <x-text-input id="password" class="form-control" type="password" name="password"
                                        required autocomplete="new-password" placeholder="Password" />
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <button type="submit" class="btn btn-primary btn-block mb-4">
                                    {{ __('Log in') }}
                                </button>
                            </form>

                            <hr>
                            <p class="text-center mb-2" style="color:orange">Forgot password? <a href="{{ route('password.request') }}"
                                    class="f-w-400" style="color:orange">Reset</a></p>
                            <p class="text-center mb-2" style="color:orange">Don't have an account? <a href="{{ route('form') }}"
                                    class="f-w-400" style="color:orange">Signup</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ auth-signup ] end -->

    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>

</body>

</html>
