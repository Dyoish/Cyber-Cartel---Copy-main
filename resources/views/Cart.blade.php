<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        margin: 0;
        background-color: #ffffff;
        overflow-x: hidden;
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

    .img-container {
        width: 100%;
        /* Adjust the width as needed */
        box-sizing: border-box;
        text-align: center;
    }

    .img-container img {
        max-width: 100%;
        /* Make images responsive */
        height: auto;
        /* Allow the height to adjust proportionally */
        border: 1px solid #ddd;
    }

    .card:hover {
        box-shadow: 0 0 30px rgba(0, 0, 0, 0.5);
        /* Adjust the color and intensity as needed */
    }

    table {
        border-collapse: collapse;
        width: 80%;
        margin: 0 auto;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .tatable {
        min-height: 551px;
    }

    td {
        padding: 15px;
    }

    .product {
        display: flex;
        align-items: center;
        padding-top: 25px;
        padding-bottom: 25px;
    }

    .img {
        max-width: 50px;
        /* Set the maximum width as needed */
        margin-right: 10px;
        /* Adjust margin as needed */
    }

    h6 {
        margin: 0;
        /* Remove default margin to avoid extra space */
    }

    .unit,
    .quantity,
    .total,
    .action,
    .products,
    .units,
    .quantitys,
    .totals,
    .actions {
        text-align: center;
    }

    .item_1_details {
        width: 45vw;
    }

    .products {
        text-align: left;
        width: 45%;
    }

    @media only screen and (max-width: 600px) {

        .product,
        .unit,
        .quantity,
        .total,
        .action,
        .products,
        .units,
        .quantitys,
        .totals,
        .actions {
            font-size: 0.8rem;
        }
    }

    .checkout_Content {
        border-top: 1px solid
    }

    .checkout {
        position: sticky;
        bottom: 0;
        left: 0;
        width: 80%;
        background-color: #fff;
        padding: 10px;
    }

    .checkout_Content {
        text-align: left;
    }

    .total_Price {
        text-align: left;
    }

    .total_Items {
        text-align: right;
        width: 10%;
    }

    .checkout_Content button {
        float: right;
    }

    .selectAll {
        width: 10%;
    }

    .deleteAll {
        width: 60%;
    }

    .navbar-brand img {
        transition: transform 0.3s ease-in-out;
        /* Apply the transition to the transform property */
    }

    .navbar-brand img:hover {
        transform: scale(1.1);
        /* Increase the scale on hover */
    }

    .black-btn {
        padding: 5px;
        background-color: #4d9584;
        color: white;
        border-radius: 5px;
        border: none;
        /* You can use 'small' or specify a specific size like '12px', '0.8em', etc. */
    }
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <!-- ... (Your existing HTML) -->
    <nav class="navbar navbar-expand-lg"
        style="background-image: linear-gradient(to right, #937952, #4d9584); fixed-top">
        <!-- Added border-radius here -->

        <div class=" container-fluid">
            <a class="navbar-brand" href="/"><img src="images/final_logo-removebg-preview.png"
                    style="width:200px; margin-left: 2vw;"></a>
            <br>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item" style="margin-right: 4vw;">
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                style="color: white; font-weight: bold;">
                                {{auth()->user()->name}}
                            </a>

                            <div class="dropdown-menu" aria-labelledby="categoriesDropdown">
                                <!-- Dropdown content goes here -->
                                <a class="dropdown-item text-center" href="/profile">My account</a>
                                <a class="dropdown-item text-center" href="/my_purchase">My Purchase</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header Section -->
    <header style="margin-top: 0px">
        <div class="container" id="contents">
            <header class="d-flex justify-content-between" style="margin-top: 40px; font-weight: bold;">
                <h2>Cyber Cartel | Shopping Cart</h2>
                <br>
                @if(session()->has('error'))
                <div class="alert alert-danger">{{session('error')}}</div>
                @endif
                <br>
            </header>
        </div>
    </header>
    <br>

    <hr style="margin: 0 auto; width: 80vw;">
    <br>


    <!-- Table Section -->
    <div class="tatable">
        <table>
            <tr">
                <td></td>
                <td class="products">Product</td>
                <td class="units">Unit Price</td>
                <td class="quantitys">Quantity</td>
                <td class="totals">Category</td>
                <td class="actions">Action</td>
                </tr>
                <tr>
                    @foreach ($cart as $item)

                    <td></td>
                    <td class="product">
                        <img src=" {{$item->photo}}" class="img">
                        <h6>{{$item->name}}</h6>
                    </td>
                    <td class="unit">₱ {{$item->price}}</td>
                    <td class="quantity">{{$item->quantity}}</td>
                    <td class="total">{{$item->category}}</td>
                    <td class="action">
                        <a href="{{url('addcart/' . $item->id . '/delete')}}" onclick="return confirm('Are you sure?')">
                            Remove</a>
                    </td>
                </tr>
                @endforeach
        </table>

        <br>

        <table class="checkout">
            <tr class="checout_Content">
                <td class="selectAll"></td>
                <td class="deleteAll"></td>
                <td class="total_Items">Total Items: {{$quantity}}</td>
                <td class="total_Price">₱{{$total * $quantity}}</td>
                <td class="checkss">
                    <a href="/checkOut">
                        <button class="black-btn">CHECKOUT</button>
                    </a>
                </td>
            </tr>
        </table>
        <br>
    </div>

    <!-- Footer Section-->
    <footer class="bg-black text-light text-center py-2"
        style="background-image: linear-gradient(to right, #937952, #4d9584);">
        <div class="container">
            <div class="row">
                <div class="col-md text-left pl-md-2">
                    <p style="margin-top: 15px; margin-left: -550px;"><a href="/terms" class="text-light"
                            style="text-decoration: none;">Terms and Conditions</a></p>
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
        // Get the "Select All" checkbox
        var selectAllCheckbox = document.querySelector('.selectAllCheckbox input');

        // Get all other checkboxes
        var otherCheckboxes = document.querySelectorAll('table tr input[type="checkbox"]');

        // Add an event listener to the "Select All" checkbox
        selectAllCheckbox.addEventListener('change', function() {
            // Loop through all other checkboxes and set their checked property
            otherCheckboxes.forEach(function(checkbox) {
                checkbox.checked = selectAllCheckbox.checked;
            });
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