<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="/home"><img src="images/logo.png" style="width:200px;"></a>
        <!-- Add your navigation links if needed -->
    </nav>

    <!-- Login Content -->
    <section style="margin-top: 20px; margin-bottom: 20px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-8 col-sm-10">
                    <form id="signupForm" style="border: 1px solid #ccc; border-radius: 10px; padding: 20px;">
                        @csrf
                        <div class="form-group" style="margin-bottom: 15px;">
                            <h4>Add New Credit Card</h4>
                        </div>
                        <table style="border: 1px solid #ccc; border-radius: 10px; width:100%;">
                            <tr>
                                <td style=" padding: 2%;">
                                    <p style="font-size: 15px; margin-bottom:-2.5px">Your credit card details are
                                        protected.</p>
                                </td>
                            </tr>
                            <tr>
                                <td style=" padding-left: 2%;">
                                    <p style="font-size: 12px">Cyber Cartel will not have access to your card info.</p>
                                </td>
                            </tr>
                        </table>
                        <h5 style="margin-top:2.5%; margin-bottom:2.5%">Card Details</h5>
                        <div class="form-group" style="margin-bottom: 5%;">
                            <input type="number" class="form-control" id="card_number" name="card_number"
                                placeholder="Card Number">
                        </div>
                        <div class="form-group" style="margin-bottom: 5%;">
                            <input type="text" class="form-control" id="expiryDate" name="expiryDate"
                                placeholder="Expiry Date (MM/YY)" pattern="\d{2}/\d{2}"
                                oninput="formatExpiryDate(this)">
                        </div>
                        <div class="form-group" style="margin-bottom: 5%;">
                            <input type="text" class="form-control" id="confirmPassword" name="confirmPassword"
                                placeholder="Name on Card">
                        </div>
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-light" style="width: 48%; border: 1px solid #000000;">
                                <a href="/bank_and_card"
                                    style="text-decoration: none; color: #000000; width: 100%; display: block;">Cancel</a>
                            </button>

                            <button type="submit" class="btn btn-secondary primary black-button" style="width: 48%;">
                                <a href="/bank_and_card"
                                    style="text-decoration: none; color: #ccc; width: 100%; display: block;">Submit</a>
                            </button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>

    <!-- Footer Section -->
    <footer class="bg-dark text-light text-center py-2 fixed-bottom">
        <p>&copy; 2023 Login Page. All rights reserved.</p>
    </footer>

    <script>
    function formatExpiryDate(input) {
        // Remove non-numeric characters
        let value = input.value.replace(/\D/g, '');

        // Check if the value is longer than 4 characters
        if (value.length > 4) {
            value = value.substr(0, 4);
        }

        // Insert a "/" after the first 2 characters
        if (value.length >= 2) {
            value = value.substr(0, 2) + '/' + value.substr(2);
        }

        // Update the input value
        input.value = value;
    }
    </script>

    <!-- Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>