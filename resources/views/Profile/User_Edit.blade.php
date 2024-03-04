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
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        font-family: "Spoof Trial Thin";
        margin: 0;
        padding: 0;
        overflow-x: hidden;
    }

    .main {
        flex: 1;
    }

    footer {
        margin-top: auto;
    }

    table {
        border-collapse: collapse;
        width: 65%;
        border: 1px solid black;

    }

    td {
        padding: 15px;
        text-align: center;
    }

    .table_1 td {
        padding: 15px;
        text-align: center;
        cursor: pointer;
        width: 16.66%;
    }

    .img {
        max-width: 10%;
        margin-right: 10px;
    }

    .clicked {
        border-bottom: 2px solid rgb(0, 0, 0);
        color: rgb(68, 0, 255);
    }

    .profile_images {
        border-radius: 50%;
        width: 7vw;
        height: auto;
        margin-left: 35%;
    }

    .container {
        display: flex;
        width: 100%;
        height: auto;
    }

    .user_profile {
        width: 30%;
        overflow-y: hidden;
        box-sizing: border-box;
        border: 1px solid rgb(255, 255, 255);
    }

    .contents {
        width: 100%;
        flex: 1;
        overflow-y: auto;
        padding-left: 20px;
        overflow-x: hidden;
    }

    .contents table {
        width: 100%;
        border-collapse: collapse;
        border-radius: 10px;
        margin-bottom: 20px;
        border: none;
        box-shadow: 0 0 8px rgba(0, 0, 0, 0.2);
    }

    .table_1 {
        margin-bottom: 10px;
        position: sticky;
        z-index: 2;
        background-color: #ffffff;
    }

    .profile_img {
        border-radius: 50%;
        width: 7.5vw;
        height: auto;
    }

    .user_details {
        text-align: left;
        margin-left: 30%;
        font-size: 14px;
    }

    .user_header {
        text-align: left;
        text-decoration: none;
    }

    .myPurchase_header {
        margin-top: -30px;
        text-align: left;
        text-decoration: none;
    }

    .payment {
        text-decoration: none;
        color: rgb(0, 0, 0);
    }

    .address {
        text-decoration: none;
        color: rgb(0, 0, 0);
    }

    .change_pass {
        text-decoration: none;
        color: rgb(0, 0, 0);
    }

    .main_content {
        display: flex;
        flex-direction: column;
        width: 100%;
    }

    .navbar-brand img {
        transition: transform 0.3s ease-in-out;
        /* Apply the transition to the transform property */
    }

    .navbar-brand img:hover {
        transform: scale(1.1);
        /* Increase the scale on hover */
    }
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    @include('Layouts.navbar')

    <!-- Header Section -->
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <table class="user_profile">
            <tr>
                <td>
                    <a href="/my_account">
                        <img src="images/Pre-Built/sysu 1.jpg" class="profile_img"
                            style="float: left; margin-left: -120px; margin-top: -60px;">
                    </a>
                    <h2 style="margin-bottom: 20px; margin-top: -41px;">{{auth()->user()->name}}</h2>
                    <a href="my_account/edit" style="text-decoration: none; color: rgb(0, 0, 0);">
                        <p>Edit Profile</p>
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    <hr style="margin: 0 auto; width: 100%; margin-bottom: -400px; margin-left: -90px; ">
                </td>
            </tr>
            <tr>
                <div class="section">
                    <td style="text-align: center;">
                        <div class="user_header">
                            <a href="/my_account"
                                style="text-decoration: none; font-size: 30px; margin-bottom: -90px;">My
                                Account</a>
                        </div>
                        <br>
                        <div class="user_details" style="margin-left: 40px;">
                            <a href="/my_account" style="text-decoration: none; " class="myPurchase_header">
                                <p>Profile</p>
                            </a>
                            <a href="/address" style="text-decoration: none; " class="address">
                                <p>Address</p>
                            </a>
                            <a href="/change_passwordV" style="text-decoration: none; color:rgb(0, 0, 0));"
                                class="change_pass">
                                <p>Change Password</p>
                            </a>
                        </div>
                    </td>
                </div>
            </tr>
            <tr>
                <td style="text-align: center;">
                    <div class="myPurchase_header">
                        <a href="/my_purchase" style="font-size: 30px; text-decoration: none; color: rgb(0, 0, 0);">My
                            Purchase</a>
                    </div>
                </td>
            </tr>
        </table>

        <!-- Table Section -->
        <div class="contents">
            <br>
            <table class="table_2">
                <tr>
                    <td style="text-align: right; display: flex; flex-direction: column; align-items: flex-end;">
                        <h4 style="margin: 0; margin-right: auto; padding: 10px">
                            My Profile
                        </h4>
                        <p style="margin: 0; margin-right: auto; padding-left:10px">Manage and protect your account</p>
                        <hr style="margin: 0 auto; width: 100%;">
                    </td>
                </tr>
                <form action="{{route("user.update-profile")}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="profile_picture">
                        <tr>
                            <td style="display: flex; align-items: center; justify-content: flex-start;">
                                <img src="images/Pre-Built/sysu 1.jpg" class="profile_images">
                                <button style="margin-left: 5%;">Select Image</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <hr style="margin: 0 auto; width: 100%;">
                            </td>
                        </tr>
                    </div>
                    <tr class="user">
                        <td style="display: flex; align-items: center; justify-content: flex-start;">
                            <p style="margin-left: 10px;">Username:</p>
                            <input type="text" style="margin-bottom: 1.5%; margin-left:2%" name="name" id="name"
                                value="{{$user->name}}" />
                        </td>
                    </tr>
                    <tr class="email">
                        <td style="display: flex; align-items: center; justify-content: flex-start;">
                            <p style="margin-left: 10px;">Email:</p>
                            <input type="email" style="margin-bottom: 1.5%; margin-left:2%" name="email" id="email"
                                value="{{$user->email}}" />
                        </td>
                    </tr>
                    <tr class="phoneN">
                        <td style="display: flex; align-items: center; justify-content: flex-start;">
                            <p style="margin-left: 10px;">Phone Number:</p>
                            <p style="margin-left: 2%;">123445678901</p>
                        </td>
                    </tr>
                    <tr style="display: flex; align-items: center; justify-content: flex-end;">
                        <td>
                            <button type="submit"
                                style="border-radius: 5px;background-color: #4d9584; color: #fff; border:none; padding: 5px;">Save</button>
                        </td>
                    </tr>
                </form>
            </table>
        </div>
    </div>
    <br>

    <!-- Footer Section -->
    <footer class="bg-black text-light text-center py-2"
        style="background-image: linear-gradient(to right, #937952, #4d9584);">
        <div class="container">
            <div class="row">
                <div class="col-md text-left pl-md-2">
                    <p style="margin-top: 15px; margin-left: -170px;"><a href="/terms" class="text-light"
                            style="text-decoration: none;">Terms and Conditions</a></p>
                </div>
                <div class="col-md text-center">
                    <p style="margin-top: 15px; margin-right: -1250px;">&copy; 2023 Login Page. All rights reserved.</p>
                </div>
                <div class="col-md text-right pr-md-2">
                    <p style="margin-top: 15px; margin-right: -2663px;"><a
                            href="https://www.facebook.com/cybercartelpage" class="text-light"
                            style="text-decoration: none;">Follow us on Facebook</a></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS and Popper.js scripts -->

    <!-- Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>