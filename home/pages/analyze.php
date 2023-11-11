<?php include('connection.php'); 
session_start();

if (empty($_SESSION)) {
  $avatar = "avatars/unknown.jpg";
  $name= "No user";
} else {
  $avatar = $_SESSION['avtar'];
  $name = $_SESSION['username'];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Innovate 360</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" type="text/css" href="../css/custom.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<header>
  <div class="header-container">
    <h1 class="logo">Innovate</h1>
    <nav>
      <ul>
        <li><a href="../">Home</a></li>
        <li><a href="search/bart.php">Explore Data</a></li>
        <li><a href="analyze.php">Analysis Tools</a></li>
        <li><a href="innovation_hub.php">Innovation Hub</a></li>
        <li><a href="about.php">About</a></li>
      </ul>
    </nav>

    <div class="user-profile">
      <a href="account.php">
        <img src="<?php echo $avatar ?>" alt="User Profile Image" class="user-image" data-toggle="tooltip" title="<?php echo $name ?>"></a>
    </div>
  </div>
</header>

<div class="feature">
      <h3>Analysis Tools</h3>
      <p>Perform advanced data analysis, statistical modeling, and machine learning on the available datasets.</p>
    </div>
    <section id="data-visualization">
  <div class="feature">
    <h3>Data Visualization</h3>
    <p>Visualize data with interactive charts, maps, and graphs to gain meaningful insights.</p>
    <div id="chart-container">
      <!-- The chart will be rendered here -->
    </div>
  </div>
</section>

  <script>
$(document).ready(function() {
  // API endpoint URL
  var apiUrl = "https://api.nasa.gov/neo/rest/v1/feed?start_date=2023-01-01&end_date=2023-01-07&api_key=DEMO_KEY";

  // Fetch data from the NASA API
  $.getJSON(apiUrl, function(data) {
    // Extract the number of asteroids for each date
    var asteroidCounts = [];
    for (var date in data.near_earth_objects) {
      asteroidCounts.push(data.near_earth_objects[date].length);
    }

    // Generate random colors for each bar
    var barColors = [];
    for (var i = 0; i < asteroidCounts.length; i++) {
      var color = getRandomColor();
      barColors.push(color);
    }

    // Chart data
    var chartData = {
      labels: Object.keys(data.near_earth_objects),
      datasets: [{
        label: "Asteroid Count",
        data: asteroidCounts,
        backgroundColor: barColors,
        borderColor: "rgba(54, 162, 235, 1)",
        borderWidth: 1
      }]
    };

    // Chart configuration
    var options = {
      responsive: true,
      scales: {
        y: {
          beginAtZero: true
        }
      }
    };

    // Create the chart
    var ctx = document.getElementById("nasaChart").getContext("2d");
    var nasaChart = new Chart(ctx, {
      type: "bar",
      data: chartData,
      options: options
    });
  });
});

// Helper function to generate random colors
function getRandomColor() {
  var letters = "0123456789ABCDEF";
  var color = "#";
  for (var i = 0; i < 6; i++) {
    color += letters[Math.floor(Math.random() * 16)];
  }
  return color;
}
   </script>
  <canvas id="myChart"></canvas>
  <canvas id="progressiveChart"></canvas>
  <canvas id="nasaChart"></canvas>

</footer>

<footer>
    <p>&copy; 2023 Innovate 360. All rights reserved.</p>
  </footer>
</body>
</html>