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
        overflow-x: hidden;
    }

    main {
        flex: 1;
    }

    footer {
        margin-top: auto;
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
        text-align: center;
        /* Center-align content in table cells */
    }

    .delivery_Address {
        font-size: 1.55rem;
        white-space: nowrap;
        /* Prevent text wrapping */
        overflow: hidden;
        /* Hide any overflowing text */
        text-overflow: ellipsis;
        /* Display ellipsis (...) for overflow */
    }

    .user_Address_Data {
        width: 10%;
        /* Adjusted width for better alignment */
    }

    .change_Address {
        width: 90%;
        /* Adjusted width for better alignment */
        text-align: left;
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

    .left-align {
        text-align: left;
    }

    .right-align {
        text-align: right;
    }

    .table-container {
        margin-left: auto;
        margin-right: 0;
    }

    .cash-on-delivery {
        white-space: nowrap;
        /* Prevent text wrapping */
        overflow: hidden;
        /* Hide any overflowing text */
        text-overflow: ellipsis;
        /* Display ellipsis (...) for overflow */
        max-width: 20%;
        /* Adjusted max-width for better alignment */
    }

    .right-align {
        text-align: right;
        width: 80%;
        /* Adjusted width for better alignment */
    }

    .alignment {
        padding-right: 7.5%;
    }

    .button {
        width: 0%;
        /* Set the width to 100% for full width */
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
        /* Adjust font size if needed */
    }
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <!-- ... (Your existing HTML) -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-black fixed-top"
        style="background-image: linear-gradient(to right, #937952, #4d9584); fixed-top">
        <!-- Added border-radius here -->

        <div class="container-fluid">
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
                                <a class="dropdown-item text-center" href="/my_account">My account</a>
                                <a class="dropdown-item text-center" href="/my_purchase">My Purchase</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header style="margin-top: 65px">
        <div class="container" id="contents">
            <header class="d-flex justify-content-between" style="margin-top: 40px;">
                <h2>Cyber Cartel | Checkout</h2>
            </header>
        </div>
    </header>
    <br>
    <hr style="margin: 0 auto; width: 80vw;">
    <br>

    <!-- Table Section -->
    <div class="tatable">
        <table>
            <tr>
                <td class="delivery_Address">Delivery Address</td>
            </tr>
            <tr class="user_Address_container">
                @foreach ($addresses as $item)
                <td class="user_Address_Data">{{$item->region}}, {{$item->city}}, {{$item->address}},
                    {{$item->postal_code}}</td>
                @endforeach
            </tr>
        </table>
        <br>
        <table>
            <tr style="border-bottom: 1px solid;">
                <td class="product_Container">Product Ordered</td>
                <td class="unitPrice_Container">Unit Price</td>
                <td class="amount_Container">Category</td>
                <td class="actions">Quantity</td>
                <td class="totals">Full Price</td>
            </tr>
            @foreach ($cart as $cartitem)
            <tr>
                <td class="product">
                    <img src="{{$cartitem->photo}}" class="img">
                    <h6>{{$cartitem->name}}</h6>
                </td>
                <td class="unit">₱{{$cartitem->price}}</td>
                <td class="quantity">{{$cartitem->category}}</td>
                <td>{{$cartitem->quantity}}</td>
                <td class="total">₱{{$cartitem->price * $cartitem->quantity}}</td>
            </tr>
            @endforeach
        </table>


        <br>

        <table>
            <td></td>
            <td></td>
            <td></td>
            <td class="right-align">Total Items: {{$totalitems}}</td>
            <td class="right-align">Total Payment: </td>
            <td class="right-align">₱{{$total * $totalitems}}</td>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <form action="{{url('topurchase', $bought->id)}}" method="POST">
                    @csrf
                    <td class="right-align button">
                        <button class="black-btn">Place Order</button>
                    </td>
                </form>
            </tr>
        </table>
        <br>
    </div>


    <!-- Footer Section -->
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


    <!-- Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>