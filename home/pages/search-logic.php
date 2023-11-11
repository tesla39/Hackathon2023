<?php
if (isset($_GET['query'])) {
  // Get the search query from the form
  $query = $_GET['query'];

  //$nasaResults = searchNASA($query);
  //$isroResults = searchISRO($query);
  $jaxaResults = searchNOAA($query);//searchJAXA($query);
  
  // Add more search functions for other agencies or data sources

  // Display the search results
  echo "<h2>Search Results:</h2>";
  echo "<h3>NASA:</h3>";
  // Display NASA search results
  foreach ($nasaResults as $result) {
    echo "<p>".$result."</p>";
  }

  echo "<h3>ISRO:</h3>";
  // Display ISRO search results
  foreach ($isroResults as $result) {
    echo "<p>".$result."</p>";
  }

  echo "<h3>:NOAA</h3>";
  // Display JAXA search results
  foreach ($jaxaResults as $result) {
    echo "<p>".$result."</p>";
  }
  // Add more sections to display search results from other agencies or data sources
}



function searchNOAA($query) {
  $apiKey = "gPTHtUATUVNLuYNyNRIlUSAGFHEPaGVy"; // Replace with your NOAA API key

  // Set up the API request URL
  $apiUrl = "https://api.noaa.gov/datasets/v1/daily-summaries?api_key=" . $apiKey . "&limit=10&q=" . urlencode($query);

  // Make a GET request to the NOAA API
  $response = file_get_contents($apiUrl);

  // Check if the request was successful
  if ($response === false) {
    // Handle the error if the request failed
    return "Failed to retrieve data from the NOAA API.";
  }

  // Parse the JSON response
  $data = json_decode($response, true);

  // Check if the response was successfully parsed
  if ($data === null) {
    // Handle the error if the response could not be parsed
    return "Failed to parse the response from the NOAA API.";
  }

  // Extract the relevant information from the response
  $searchResults = [];
  foreach ($data['results'] as $result) {
    $date = $result['date'];
    $temperature = $result['temperature'];
    $precipitation = $result['precipitation'];

    // Create a search result string
    $resultString = "Date: " . $date . "<br>";
    $resultString .= "Temperature: " . $temperature . "°F<br>";
    $resultString .= "Precipitation: " . $precipitation . " inches<br>";

    // Add the search result to the array
    $searchResults[] = $resultString;
  }

  // Return the array of search results
  return $searchResults;
}


function searchJAXA($query) {
  // Perform search logic specific to JAXA data source
  // Retrieve relevant data based on the query
  // Return an array of search results
  // Example:
  // $result1 = "JAXA result 1 for query: ".$query;
  // $result2 = "JAXA result 2 for query: ".$query;
  // return array($result1, $result2);
}
?>