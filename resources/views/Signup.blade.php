<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyber Cartel | Sign up</title>
    <link rel="stylesheet" href="login.css">
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://db.onlinewebfonts.com/c/215107c04d97667966f3b627c9e79860?family=Spoof+Trial+Thin"
        rel="stylesheet">
    <style>
    @import url(https://db.onlinewebfonts.com/c/215107c04d97667966f3b627c9e79860?family=Spoof+Trial+Thin);

    @font-face {
        font-family: "Spoof Trial Thin";
        src: url("https://db.onlinewebfonts.com/t/215107c04d97667966f3b627c9e79860.eot");
        src: url("https://db.onlinewebfonts.com/t/215107c04d97667966f3b627c9e79860.eot?#iefix")format("embedded-opentype"),
            url("https://db.onlinewebfonts.com/t/215107c04d97667966f3b627c9e79860.woff2")format("woff2"),
            url("https://db.onlinewebfonts.com/t/215107c04d97667966f3b627c9e79860.woff")format("woff"),
            url("https://db.onlinewebfonts.com/t/215107c04d97667966f3b627c9e79860.ttf")format("truetype"),
            url("https://db.onlinewebfonts.com/t/215107c04d97667966f3b627c9e79860.svg#Spoof Trial Thin")format("svg");
    }

    body {
        font-family: "Spoof Trial Thin";
        padding-top: 60px;
        overflow: hidden;
        /* Add padding to body for the fixed navbar */
    }

    .black-button {
        background-color: black;
        color: white;
    }

    .black-link {
        text-decoration: none;
        color: black;
    }

    .custom-container {
        margin-right: -350px;
        /* Adjust as needed */
    }

    #signupForm {
        border-radius: 50px;
        padding: 30px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        /* Adjust as needed */
    }

    .btn-primary.black-button {
        background-color: #4d9584;
        color: white;

    }

    .btn-primary.black-button:hover {
        background-color: #937952;
        color: white;
    }

    .btn-black {
        background-color: white;
        color: black;
    }

    .btn-black-active {
        background-color: #4d9584;
        color: white;
    }

    .btn-custom {
        background-color: white;
        color: #fff;
        /* Add any additional styles you want for the button */
    }

    .btn-csutom-active {
        background-color: #4d9584;
        color: white;
    }

    .position-fixed {
        transition: transform 0.3s ease-in-out;
        /* Adjust the transition properties as needed */
    }

    .position-fixed:hover {
        transform: scale(1.2);
        /* Adjust the scale factor as needed */
    }

    footer {
        background-color: black;
        color: #fff;
        text-align: center;
        padding: 10px;
    }

    /* Media queries for responsiveness */
    @media (max-width: 768px) {
        .custom-container {
            margin-right: 0;
        }

        #signupForm {
            padding: 20px;
        }
    }
    </style>
</head>

<body>
    <!-- Navigation Bar 
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top"
        style="background-color: black; position: fixed; width: 100%; border-radius: 0 0 15px 15px;">
        <a class="navbar-brand" href="/"><img src="images/cyber_-removebg-preview.png" style="width:200px;"></a>
         Add your navigation links if needed 
    </nav> -->

    <!-- Content Section -->
    <section style="margin-top: -25px; margin-bottom: 20px;">
        <div class="container custom-container text-center">
            <!-- Login Form Row -->
            <div class="row">
                <div class="col-lg-7 col-md-9 col-sm-12">
                    <!-- Login Content -->
                    <div class @if(session()->has('error'))
                        <div class="alert alert-danger">{{session('error')}}</div>
                        @endif

                        @if(session()->has('success'))
                        <div class="alert alert-success">{{session('success')}}</div>
                        @endif
                    </div>

                    <form id="signupForm" action="{{route('Signup.post')}}" method="POST"
                        style="border-radius: 50px; padding: 44px;">
                        @csrf
                        <header class="py-5 text-center">
                            <h1>Sign Up</h1>
                        </header>
                        <div class="form-group password-container" style="margin-bottom: 30px;">
                            <label for="name">Username</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Enter your username">
                            @error('name') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group password-container" style="margin-bottom: 30px;">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Enter your Email">
                            @error('email') <span class="text-danger">{{$message}}</span> @enderror
                        </div>


                        <!-- Password Section -->
                        <div class="form-group password-container" style="margin-bottom: 30px;">
                            <label for="password">Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Enter your password">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-black btn-sm" id="showPasswordBtn"
                                        onclick="togglePassword()">Show</button>
                                    @error('password') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Confirm Password Section -->
                        <div class="form-group password-container" style="margin-bottom: 40px;">
                            <label for="confirmPassword">Confirm Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword"
                                    placeholder="Confirm Password">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-black btn-sm" id="showConfirmPasswordBtn"
                                        onclick="toggleConfirmPassword()">Show</button>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block black-button">Sign-Up</button>
                    </form>
                </div>
                <!-- Image on the left side (as a clickable button) -->
                <div class="col-lg-6 col-md-3 col-sm-9 position-fixed text-left" style="left: 0; top: -40px;">
                    <a href="/">
                        <img src="images/logo white4.png" alt="Left Image" style="width: 100%;">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-black text-light text-center py-2 fixed-bottom"
        style="background-image: linear-gradient(to right, #937952, #4d9584);">
        <div class="row">
            <div class="col-md text-left ml-md-4" style="margin-top: 15px;">
                <p><a href="/terms" class="text-light" style="text-decoration: none;">Terms and Conditions</a></p>
            </div>
            <div class="col-md text-center" style="margin-top: 15px;">
                <p>&copy; Cyber Cartel 2024</p>
            </div>
            <div class="col-md text-right mr-md-4" style="margin-top: 15px;">
                <p><a href="https://www.facebook.com/yourpage" class="text-light" style="text-decoration: none;">Follow
                        us on Facebook</a></p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
    function togglePassword() {
        var passwordInput = document.getElementById("password");
        var showPasswordBtn = document.getElementById("showPasswordBtn");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            showPasswordBtn.classList.add("btn-black-active");
        } else {
            passwordInput.type = "password";
            showPasswordBtn.classList.remove("btn-black-active");
        }
    }

    // Add this function to handle Confirm Password
    function toggleConfirmPassword() {
        var confirmPasswordInput = document.getElementById("confirmPassword");
        var showConfirmPasswordBtn = document.getElementById("showConfirmPasswordBtn");

        if (confirmPasswordInput.type === "password") {
            confirmPasswordInput.type = "text";
            showConfirmPasswordBtn.classList.add("btn-black-active");
        } else {
            confirmPasswordInput.type = "password";
            showConfirmPasswordBtn.classList.remove("btn-black-active");
        }
    }
    </script>
</body>

</html>