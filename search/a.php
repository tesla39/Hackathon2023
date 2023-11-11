<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="topnav">
  <a class="active" href="../../index.php" target="_top">Return Home</a>
  <div class="search-container">
    <form action="sidebar2.php" method="get">
      <input type="text" name="search" placeholder="Enter your search query">
      <button type="submit">Search</button>
    </form>
  </div>
</div>

</body>
<script>

  // Get the value of the 'search' parameter from the URL
const urlParams = new URLSearchParams(window.location.search);
const searchQuery = urlParams.get('search');

// Use the retrieved search query
console.log(searchQuery); // Output: the user's search query
</script>
</html>