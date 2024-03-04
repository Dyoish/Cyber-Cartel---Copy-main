<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cyber Cartel</title>
    <link rel="stylesheet" href="dashboard.css">
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://db.onlinewebfonts.com/c/215107c04d97667966f3b627c9e79860?family=Spoof+Trial+Thin"
        rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

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
        font-family: "Spoof Trial Thin", sans-serif;
        /* Specify a fallback font in case "Spoof Trial Thin" is not available */
        display: flex;
        flex-direction: column;
        margin: 0;
        flex-direction: column;
        overflow-x: hidden;

    }

    h4 {
        font-weight: bold;
    }

    h1 {
        font-weight: bold;
    }

    a {
        text-decoration: none;
        font-size: 18px;
    }

    main {
        flex: 1;
    }

    footer {
        margin-top: auto;
    }

    .slider-frame {
        overflow: hidden;
        max-width: 100%;
        margin-top: 20px;
    }

    .slide-images {
        display: flex;
        flex-direction: row;
        transition: transform 0.5s ease-in-out;
        border: hidden;
    }

    .img-container {
        width: 100%;
        /* Adjust the width as needed */
        box-sizing: border-box;
        flex: 0 0 auto;
        text-align: center;
    }

    .img {
        border-bottom-left-radius: 30px;

    }

    #pics {
        max-width: 100%;
        /* Set max-width to 100% to ensure it doesn't exceed its container */
        height: auto;
        /* Allow the height to adjust proportionally */
        display: block;
        /* Remove any default inline styles that may affect sizing */
        margin: 0 auto;
    }

    .img-container img {
        width: 75vw;
        /* Make images responsive */
        height: 500px;
        /* Set a fixed height for all images */
        object-fit: cover;
        /* Ensure images cover the container without stretching */
        border: 1px solid #ddd;
        display: inline-block;
    }

    .card .card-body {
        border-radius: 0px 0px 30px 30px;
    }

    .card {
        transition: transform 0.1s ease-in-out;
        border-radius: 30px;
    }

    .card:hover {
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        transform: scale(1.05);

        /* Adjust the scale factor as needed */
    }

    .images {
        width: 10px;
        height: 10px;
    }

    .navbar-brand img {
        transition: transform 0.3s ease-in-out;
        /* Apply the transition to the transform property */
    }

    .navbar-brand img:hover {
        transform: scale(1.1);
        /* Increase the scale on hover */
    }

    .rounded-bottom {
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
    }

    .navbar {
        transition: transform 0.3s ease-out;
    }

    .navbar-hidden {
        transform: translateY(-100%);
    }
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    @include('Layouts.navbar')
    <br>


    <!-- Header Section -->
    <header style="margin-top: 70px">
        <div class="container" id="contents">
            <h1>Top Products</h1>
        </div>
    </header>

    <!-- Dashboard Content -->
    <div class="slider-frame">
        <div class="slide-images">
            <div class="img-container">
                <a href="product_demo/5">
                    <img src="images/slide 1.png" alt="Slide 1">
                </a>
            </div>
            <div class="img-container">
                <a href="product_demo/5">
                    <img src="{{ URL('images/slide 2.png') }}" alt="Slide 2">
                </a>
            </div>
            <div class="img-container">
                <a href="product_demo/5">
                    <img src="{{ URL('images/slide 3.png') }}" alt="Slide 3">
                </a>
            </div>
            <div class="img-container">
                <a href="product_demo/5">
                    <img src="{{ URL('images/slide 4.png') }}" alt="Slide 4">
                </a>
            </div>
            <div class="img-container">
                <a href="product_demo/5">
                    <img src="{{ URL('images/slide 5.png') }}" alt="Slide 5">
                </a>
            </div>
        </div>
    </div>

    <br>

    <!--case-->
    <div class="container mt-4">
        <div class="row">
            <div class="container" id="contents">
                <header class="d-flex justify-content-between" style="margin-top: 50px;">
                    <h4>
                        <p>Chassis</p>
                    </h4>
                    <a href="/chassis_category">
                        <p class="btn btn-outline-dark">See all</p>
                    </a>
                </header>
            </div>

            @foreach($Case as $item)
            <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                <a href="{{url('product_demo/' . $item->id . '')}}" style="text-decoration: none; color: inherit;">
                    <div class="card" style="border-radius: 30px 30px 30px 30px;">
                        <img src="{{ asset($item->photo) }}" class="card-img-top border-2 img-fluid" alt="Card Image"
                            style="border-top-left-radius: 30px; border-top-right-radius: 30px; ">
                        <div class="card-body text-center"
                            style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0); border-bottom-left-radius: 30px; border-bottom-right-radius: 30px;">
                            <!-- Removed border-radius from the img element -->
                            <h5 class="card-subtitle mb-0 mt-0">
                                <p>{{$item->name}}</p>
                            </h5>
                            <h6 class="card-subtitle mb-0 mt-0">₱{{$item->price}}</h6>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>


    <!-- CPU -->
    <div class="container mt-4">
        <div class="row">
            <div class="container" id="contents">
                <header class="d-flex justify-content-between" style="margin-top: 50px;">
                    <h4>
                        <p>Processor</p>
                    </h4>
                    <br>
                    <a href="/processor_category">
                        <p class="btn btn-outline-dark">See all</p>
                    </a>
                </header>
            </div>

            @foreach($CPU as $cpuitem)
            <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                <a href="{{url('product_demo/' . $cpuitem->id . '')}}" style="text-decoration: none; color: inherit;">
                    <div class="card" style="border-top-left-radius: 30px; border-top-right-radius: 30px;">
                        <img src="{{ asset($cpuitem->photo) }}" class="card-img-top border-2 img-fluid" alt="Card Image"
                            style="border-top-left-radius: 30px; border-top-right-radius: 30px;">
                        <div class="card-body text-center"
                            style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);;">
                            <!-- Removed border-radius from the img element -->
                            <h5 class="card-subtitle mb-0 mt-0">
                                <p>{{$cpuitem->name}}</p>
                            </h5>
                            <h6 class="card-subtitle mb-0 mt-0">₱{{$cpuitem->price}}</h6>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>


    <!-- Motherboard -->
    <div class="container mt-4">
        <div class="row">
            <div class="container" id="contents">
                <header class="d-flex justify-content-between" style="margin-top: 50px;">
                    <h4>
                        <p>Motherboard</p>
                    </h4>
                    <br>
                    <a href="motherboard_category">
                        <p class="btn btn-outline-dark">See all</p>
                    </a>
                </header>
            </div>

            @foreach($Motherboard as $mbitem)
            <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                <a href="{{url('product_demo/' . $mbitem->id . '')}}" style="text-decoration: none; color: inherit;">
                    <div class="card" style="border-top-left-radius: 30px; border-top-right-radius: 30px;">
                        <img src="{{ asset($mbitem->photo) }}" class="card-img-top border-2 img-fluid" alt="Card Image"
                            style="border-top-left-radius: 30px; border-top-right-radius: 30px;">
                        <div class="card-body text-center"
                            style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                            <!-- Removed border-radius from the img element -->
                            <h5 class="card-subtitle mb-0 mt-0">
                                <p>{{$mbitem->name}}</p>
                            </h5>
                            <h6 class="card-subtitle mb-0 mt-0">₱{{$mbitem->price}}</h6>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>


    <!-- GPU -->
    <div class="container mt-4">
        <div class="row">
            <div class="container" id="contents">
                <header class="d-flex justify-content-between" style="margin-top: 50px;">
                    <h4>
                        <p>Graphics Card</p>
                    </h4>
                    <br>
                    <a href="gpu_category">
                        <p class="btn btn-outline-dark">See all</p>
                    </a>
                </header>
            </div>

            @foreach($GPU as $gpuitem)
            <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                <a href="{{url('product_demo/' . $gpuitem->id . '')}}" style="text-decoration: none; color: inherit;">
                    <div class="card" style="border-top-left-radius: 30px; border-top-right-radius: 30px;">
                        <img src="{{ asset($gpuitem->photo) }}" class="card-img-top border-2 img-fluid" alt="Card Image"
                            style="border-top-left-radius: 30px; border-top-right-radius: 30px;">
                        <div class="card-body text-center"
                            style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                            <h5 class="card-subtitle mb-0 mt-0">
                                <p>{{$gpuitem->name}}</p>
                            </h5>
                            <h6 class="card-subtitle mb-0 mt-0">₱{{$gpuitem->price}}</h6>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>


    <!-- RAM -->
    <div class="container mt-4">
        <div class="row">
            <div class="container" id="contents">
                <header class="d-flex justify-content-between" style="margin-top: 50px;">
                    <h4>
                        <p>Ram</p>
                    </h4>
                    <br>
                    <a href="ram_category">
                        <p class="btn btn-outline-dark">See all</p>
                    </a>
                </header>
            </div>

            @foreach($RAM as $ramitem)
            <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                <a href="{{url('product_demo/' . $ramitem->id . '')}}" style="text-decoration: none; color: inherit;">
                    <div class="card" style="border-top-left-radius: 30px; border-top-right-radius: 30px;">
                        <img src="{{ asset($ramitem->photo) }}" class="card-img-top border-2 img-fluid" alt="Card Image"
                            style="border-top-left-radius: 30px; border-top-right-radius: 30px;">
                        <div class="card-body text-center"
                            style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                            <!-- Removed border-radius from the img element -->
                            <h5 class="card-subtitle mb-0 mt-0">
                                <p>{{$ramitem->name}}</p>
                            </h5>
                            <h6 class="card-subtitle mb-0 mt-0">₱{{$ramitem->price}}</h6>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>



    <!-- Power Supply (PSU) -->
    <div class="container mt-4">
        <div class="row">
            <div class="container" id="contents">
                <header class="d-flex justify-content-between" style="margin-top: 50px;">
                    <h4>
                        <p>Power Supply</p>
                    </h4>
                    <br>
                    <a href="psu_category">
                        <p class="btn btn-outline-dark">See all</p>
                    </a>
                </header>
            </div>

            @foreach($PSU as $psuitem)
            <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                <a href="{{url('product_demo/' . $psuitem->id . '')}}" style="text-decoration: none; color: inherit;">
                    <div class="card" style="border-top-left-radius: 30px; border-top-right-radius: 30px;">
                        <img src="{{ asset($psuitem->photo) }}" class="card-img-top border-2 img-fluid" alt="Card Image"
                            style="border-top-left-radius: 30px; border-top-right-radius: 30px;">
                        <div class="card-body text-center"
                            style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                            <h5 class="card-subtitle mb-0 mt-0">
                                <p>{{$psuitem->name}}</p>
                            </h5>
                            <h6 class="card-subtitle mb-0 mt-0">₱{{$psuitem->price}}</h6>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>



    <!-- Storage -->
    <div class="container mt-4">
        <div class="row">
            <div class="container" id="contents">
                <header class="d-flex justify-content-between" style="margin-top: 50px;">
                    <h4>
                        <p>Storage</p>
                    </h4>
                    <br>
                    <a href="storage_category">
                        <p class="btn btn-outline-dark">See all</p>
                    </a>
                </header>
            </div>

            @foreach($Storage as $storageitem)
            <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                <a href="{{url('product_demo/' . $storageitem->id . '')}}"
                    style="text-decoration: none; color: inherit;">
                    <div class="card" style="border-top-left-radius: 30px; border-top-right-radius: 30px;">
                        <img src="{{ asset($storageitem->photo) }}" class="card-img-top border-2 img-fluid"
                            alt="Card Image" style="border-top-left-radius: 30px; border-top-right-radius: 30px;">
                        <div class="card-body text-center"
                            style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                            <h5 class="card-subtitle mb-0 mt-0">
                                <p>{{$storageitem->name}}</p>
                            </h5>
                            <h6 class="card-subtitle mb-0 mt-0">₱{{$storageitem->price}}</h6>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>


    <!-- Footer Section -->
    <footer class="bg-black text-light text-center py-2"
        style="background-image: linear-gradient(to right, #937952, #4d9584);">
        <div class="container">
            <div class="row">
                <div class="col-md text-left pl-md-2">
                    <p style="margin-top: 15px; margin-left: -550px;"><a href="/terms" class="text-light"
                            style="text-decoration: none; color: white;">Terms and Conditions</a></p>
                </div>
                <div class="col-md text-center">
                    <p style="margin-top: 15px;">&copy; Cyber Cartel 2024</p>
                </div>
                <div class="col-md text-right pr-md-2">
                    <p style="margin-top: 15px; margin-right: -500px;"><a
                            href="https://www.facebook.com/cybercartelpage" class="text-light"
                            style="text-decoration: none;">Follow us on Facebook</a></p>
                </div>
            </div>
        </div>
    </footer>


    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const slideContainer = document.querySelector(".slide-images");
        const slideImages = document.querySelector(".slide-images");
        let currentIndex = 0;
        let startX;
        let isSwiping = false;

        function showSlide(index) {
            const translateValue = -index * 100 + "%";
            slideImages.style.transform = "translateX(" + translateValue + ")";
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % 5;
            showSlide(currentIndex);
        }

        function prevSlide() {
            currentIndex = (currentIndex - 1 + 5) % 5; // Ensure positive index
            showSlide(currentIndex);
        }

        function handleStart(event) {
            if (event.type === "touchstart") {
                startX = event.touches[0].clientX;
            } else {
                startX = event.clientX;
            }
            isSwiping = true;
            event.preventDefault(); // Prevent default behavior to avoid page scrolling
        }

        function handleMove(event) {
            if (!isSwiping) return;

            const currentX = event.type === "touchmove" ? event.touches[0].clientX : event.clientX;
            const diffX = currentX - startX;

            if (Math.abs(diffX) > 50) { // Adjust the sensitivity as needed
                if (diffX > 0) {
                    prevSlide();
                } else {
                    nextSlide();
                }
                startX = null;
                isSwiping = false;
            }
            event.preventDefault(); // Prevent default behavior to avoid page scrolling
        }

        function handleEnd() {
            startX = null;
            isSwiping = false;
        }


        slideContainer.addEventListener("touchstart", handleStart);
        slideContainer.addEventListener("touchmove", handleMove);
        slideContainer.addEventListener("touchend", handleEnd);

        slideContainer.addEventListener("mousedown", handleStart);
        slideContainer.addEventListener("mousemove", handleMove);
        slideContainer.addEventListener("mouseup", handleEnd);

        // Automatic slideshow
        setInterval(nextSlide, 5000);

        // Optional: Pause slideshow on hover
        slideContainer.addEventListener("mouseenter", function() {
            clearInterval(intervalId);
        });

        slideContainer.addEventListener("mouseleave", function() {
            intervalId = setInterval(nextSlide, 5000);
        });
    });

    // Wait for the DOM to be ready
    $(document).ready(function() {
        var previousScroll = 0;

        // Listen for the scroll event
        $(window).scroll(function() {
            var currentScroll = $(this).scrollTop();

            // Determine the scrolling direction
            var scrollingDown = currentScroll > previousScroll;

            // Check if the user has scrolled past the top
            if (currentScroll > 0) {
                // If scrolling down, hide the navbar; if scrolling up, show the navbar when close to the top
                if (scrollingDown) {
                    $('.navbar').addClass('navbar-hidden');
                } else if (currentScroll < 50) {
                    $('.navbar').removeClass('navbar-hidden');
                }
            }

            previousScroll = currentScroll;
        });
    });
    </script>

    <!-- Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>