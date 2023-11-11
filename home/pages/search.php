<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Innovate 360</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" type="text/css" href="../css/custom.css">
</head>
<body>
<header>
        <div class="header-container">
          <h1 class="logo">Innovate </h1>
          <nav>
            <ul>
            <li><a href="../">Home</a></li>
        <li><a href="search.php">Explore Data</a></li>
        <li><a href="analyze.php">Analysis Tools</a></li>
        <li><a href="innovation_hub.php">Innovation Hub</a></li>
        <li><a href="about.php">About</a></li>
            </ul>
          </nav>
        </div>
      </header>

<section id="search-discover">
  <div class="feature">
    <h3>Search and Discover</h3>
    <p>Find relevant datasets from NASA and federal repositories using advanced search functionality.</p>
    <form method="GET" action="search-logic.php" id="search-form">
      <input type="text" name="query" id="search-input" placeholder="Enter keywords">
      <input type="submit" value="Search">
     </form>
    <select id="filter">
  <option value="">Select By country </option>
  <option value="country">Country</option>
  <option value="agency">Agency</option>
  <option value="source">Source</option>

</select>

<select id="filter">
  <option value="">Select By sources </option>
  <option value="country">Nasa</option>
  <option value="agency">Isro</option>
  <option value="source">esa</option>
    </form>
    <div id="search-results">
      
    </div>
  </div>
</section>

<footer>
    <p>&copy; 2023 Innovate 360. All rights reserved.</p>
  </footer>
</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
  <title>NOAA Data Search</title>
</head>
<body>
  <h1>NOAA Data Search</h1>

  <form action="" method="GET">
    <input type="text" name="query" placeholder="Enter search term">
    <button type="submit">Search</button>
  </form>

  <div id="searchResults">
    <?php
    if (isset($_GET['query'])) {
      $apiKey = "gPTHtUATUVNLuYNyNRIlUSAGFHEPaGVy"; 
      
      $query = urlencode($_GET['query']);
      $apiUrl = "https://api.noaa.gov/datasets/v1/daily-summaries?api_key={$apiKey}&limit=10&q={$query}";

      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $apiUrl);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $response = curl_exec($ch);
      curl_close($ch);

      $data = json_decode($response, true);

      if (isset($data['results'])) {
        $searchResults = $data['results'];

        foreach ($searchResults as $result) {
          $date = $result['date'];
          $temperature = $result['temperature'];
          $precipitation = $result['precipitation'];

          echo "Date: {$date}<br>";
          echo "Temperature: {$temperature}°F<br>";
          echo "Precipitation: {$precipitation} inches<br><br>";
        }
      } else {
        echo "No results found.";
      }
    }
    ?>
  </div>
</body>
</html>