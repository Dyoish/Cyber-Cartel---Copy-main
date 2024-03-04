<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
    <link href="https://db.onlinewebfonts.com/c/215107c04d97667966f3b627c9e79860?family=Spoof+Trial+Thin"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assests/css/bootstrap.css') }}">
    <link rel="stylesheet" href="assets/css/analytics.css" />
    <script src="{{ asset('assests/js/jquery.js') }}"></script>
    <title>Analytics</title>
    <style>
    @import url(https://db.onlinewebfonts.com/c/215107c04d97667966f3b627c9e79860?family=Spoof+Trial+Thin);

    @font-face {
        font-family: "Spoof Trial Thin";
        src: url("https://db.onlinewebfonts.com/t/215107c04d97667966f3b627c9e79860.eot");
        src: url("https://db.onlinewebfonts.com/t/215107c04d97667966f3b627c9e79860.eot?#iefix") format("embedded-opentype"),
            url("https://db.onlinewebfonts.com/t/215107c04d97667966f3b627c9e79860.woff2") format("woff2"),
            url("https://db.onlinewebfonts.com/t/215107c04d97667966f3b627c9e79860.woff") format("woff"),
            url("https://db.onlinewebfonts.com/t/215107c04d97667966f3b627c9e79860.ttf") format("truetype"),
            url("https://db.onlinewebfonts.com/t/215107c04d97667966f3b627c9e79860.svg#Spoof Trial Thin") format("svg");
    }

    body {
        font-family: "Spoof Trial Thin";
        /* Other body styles... */
    }
    </style>
</head>

<body>
    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="/" class="brand">
            <img src="images/black 2.png" alt="Cyber Cartel Icon"
                style="width: 50px; height: 50px; margin-left: 30px; margin-top: 20px;">
            <span class="text" style="margin-top: 20px;">Cyber Cartel</span>
        </a>
        <ul class="side-menu top">
            <li>
                <a href="{{ url('/admindashboards') }}">
                    <i class="bx bxs-dashboard"></i>
                    <span class="text">Dashboards</span>
                </a>
            </li>
            <li class="active">
                <a href="{{ url('/adminanalytics') }}">
                    <i class="bx bxs-analyse"></i>
                    <span class="text">Analytics</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/admincustomers') }}">
                    <i class="bx bxs-group"></i>
                    <span class="text">Customers</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/adminmanagements') }}">
                    <i class="bx bxs-data"></i>
                    <span class="text">Product Management</span>
                </a>
            </li>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <li>
                <a class="dropdown-item text-center" href="login" style="color: red;">
                    <i class="bx bxs-log-out"></i> Log out
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->

    <!-- CONTENT -->
    <section id="content">

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Analytics</h1>
                    <ul class="breadcrumb"></ul>
                </div>
            </div>

            <ul class="box-info">
                <li>
                    <i class="bx bxs-calendar-check" style="background: var(--light-blue);
                    color: var(--blue);"></i>
                    <span class="text">
                        <h3>Products</h3>
                        <p>Total For Sale: {{$products}}</p>
                        @if($boughtcount != 0)
                        <p>Total Sales: ₱{{$boughtsold * $bought / $boughtcount}}</p>
                        @else
                        <p>Total Sales:₱0</p>
                        @endif
                    </span>
                </li>
                <li>
                    <i class="bx bxs-group" style="background: var(--light-yellow);
                    color: var(--yellow);"></i>
                    <span class="text">
                        <h3>Users</h3>
                        <p>Total Users: {{$user}}</p>
                    </span>
                </li>
                <li>
                    <i class="bx bxs-group" style="background: var(--light-orange);
                    color: var(--orange);"></i>
                    <span class="text">
                        <h3>Purchased Products</h3>
                        <p>Total Units Bought: {{$bought}}</p>
                        <p>Total Units Refunded: {{$refunded}}</p>
                        <p>Total Units Cancelled: {{$cancelled}}</p>
                    </span>
                </li>
            </ul>

            <ul class="box-info">
                <li>
                    <i class="bx bxs-chip" class='bx-fw'></i>
                    <span class="text">
                        <h3>Processor</h3>
                        @if($CPUCount != 0)
                        <p>Total Sales: ₱{{$CPUSold * $CPU / $CPUCount}}</p>
                        @else
                        <p>Total Sales:₱0</p>
                        @endif
                        <p>Total Units Sold: {{$CPU}}</p>
                    </span>
                </li>
                <li>
                    <i class="bx bxs-microchip"></i>
                    <span class="text">
                        <h3>Motherboard</h3>
                        @if($MotherboardCount != 0)
                        <p>Total Sales: ₱{{$MotherboardSold * $Motherboard / $MotherboardCount}}</p>
                        @else
                        <p>Total Sales: ₱0</p>
                        @endif
                        <p>Total Units Sold: {{$Motherboard}}</p>

                    </span>
                </li>
                <li>
                    <i class="bx bxs-ruler"></i>
                    <span class="text">
                        <h3>RAM</h3>
                        @if($RAMCount != 0)
                        <p>Total Sales: ₱{{$RAMSold * $RAM / $RAMCount}}</p>
                        @else
                        <p>Total Sales: ₱0</p>
                        @endif
                        <p>Total Units Sold: {{$RAM}}</p>
                    </span>
                </li>
            </ul>

            <ul class="box-info">
                <li>
                    <i class="bx bxs-buoy"></i>
                    <span class="text">
                        <h3>GPU</h3>
                        @if($GPUCount != 0)
                        <p>Total Sales: ₱{{$GPUSold * $GPU / $GPUCount}}</p>
                        @else
                        <p>Total Sales: ₱0</p>
                        @endif
                        <p>Total Units Sold: {{$GPU}}</p>
                    </span>
                </li>
                <li>
                    <i class="bx bxs-checkbox"></i>
                    <span class="text">
                        <h3>PSU</h3>
                        @if($PSUCount != 0)
                        <p>Total Sales: ₱{{$PSUSold * $PSU / $PSUCount}}</p>
                        @else
                        <p>Total Sales: ₱0</p>
                        @endif
                        <p>Total Units Sold: {{$PSU}}</p>
                    </span>
                </li>
                <li>
                    <i class="bx bxs-rectangle"></i>
                    <span class="text">
                        <h3>Storage</h3>
                        @if($StorageCount != 0)
                        <p>Total Sales: ₱{{$StorageSold * $RAM / $StorageCount}}</p>
                        @else
                        <p>Total Sales: ₱0</p>
                        @endif
                        <p>Total Units Sold: {{$Storage}}</p>
                    </span>
                </li>

            </ul>

            <ul class="box-info-end">
                <li style="visibility: hidden;"></li>

                <li>
                    <i class="bx bxs-disc"></i>
                    <span class="text">
                        <h3>Chassis</h3>
                        @if($CaseCount != 0)
                        <p>Total Sales: ₱{{$CaseSold * $Case / $CaseCount}}</p>
                        @else
                        <p>Total Sales: ₱0</p>
                        @endif
                        <p>Total Units Sold: {{$Case}}</p>
                    </span>
                </li>

                <li style="visibility: hidden;"></li>
            </ul>


    </section>

    <script src="script.js"></script>

    <!-- <script>
    // Sample data for the bar charts
    const dailyData = {
      labels: ["Day 1", "Day 2", "Day 3", "Day 4", "Day 5"],
      datasets: [{
        label: "Daily Sales",
        backgroundColor: "rgba(255, 99, 132, 0.2)",
        borderColor: "rgba(255, 99, 132, 1)",
        borderWidth: 1,
        data: [5, 10, 8, 12, 15],
      },],
    };

    const monthlyData = {
      labels: ["January", "February", "March", "April", "May"],
      datasets: [{
        label: "Monthly Sales",
        backgroundColor: "rgba(54, 162, 235, 0.2)",
        borderColor: "rgba(54, 162, 235, 1)",
        borderWidth: 1,
        data: [10, 20, 15, 25, 30],
      },],
    };

    // Get the bar chart canvas element
    const barChartCanvas = document.getElementById("barChart");

    // Create the bar chart with daily data by default
    const barChart = new Chart(barChartCanvas, {
      type: "bar",
      data: dailyData,
      options: {
        scales: {
          y: {
            beginAtZero: true,
          },
        },
      },
    });

    // Function to switch between daily and monthly data
    function switchChartData(isMonthly) {
      const newData = isMonthly ? monthlyData : dailyData;
      barChart.data = newData;
      barChart.update();
    }

    // Sample data for the pie chart
    const pieData = {
      labels: ["Blank", "Blank", "Blank", "Blank", "Blank"],
      datasets: [{
        data: [20, 15, 10, 30, 25],
        backgroundColor: [
          "#3c91e6",
          "#db504a",
          "#ffce26",
          "#fd7238",
          "#342e37",
        ],
      },],
    };

    // Get the pie chart canvas element
    const pieChartCanvas = document.getElementById("pieChart");

    // Create the pie chart
    const pieChart = new Chart(pieChartCanvas, {
      type: "pie",
      data: pieData,
    });
  </script> -->

</body>

</html>