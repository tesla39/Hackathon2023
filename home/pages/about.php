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
  <link rel="stylesheet" type="text/css" href="../css/styles.css">
  <link rel="stylesheet" type="text/css" href="../css/custom.css">
  <style>
    body {
      font-family: Arial, sans-serif; 
      font-size: 18px;
    }

    h1, h2, h3, h4 {
      font-family: 'Arial Black', sans-serif; 
    }
  </style>
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
<!-- 
<section id="about"> -->
<!-- 
<div class=""></div>
<section id="features">
  <div class="container"> -->
  <h2 align="center">About Us</h2>
    <p>Innovate 360 is a leading data science platform designed to democratize access to data and analysis tools. Our mission is to empower individuals and organizations to make data-driven decisions, and to foster a collaborative and innovative data community.</p>
    <div class="about-details">
      <h4>Our Story</h4>
      <p>We started in 2018 with the vision of creating a user-friendly platform where anyone, regardless of their technical expertise, could find, analyze, and draw insights from data. Since then, we've grown into a vibrant community of data enthusiasts, analysts, and researchers from around the world.</p>
      <h4>Our Values</h4>
      <ul>
        <li><strong>Innovation:</strong> We believe in the power of new ideas and are committed to fostering an environment where they can flourish.</li>
        <li><strong>Collaboration:</strong> We know that the best insights come from working together, and our platform is designed to facilitate collaboration.</li>
        <li><strong>Empowerment:</strong> We strive to provide the tools and resources necessary for our users to take control of their data and derive meaningful insights.</li>
      </ul>
      <h4>Join Us</h4>
      <p>Whether you're a data novice or a seasoned analyst, Innovate 360 is the place to find data, perform analyses, share insights, and collaborate on innovative projects. Join us as we continue to push the boundaries of what's possible with data.</p>
    </div>
    <h3>Key Features</h3>
    <div class="feature">
      <div class="feature-icon">
        <img src="../image/search-icon.png" alt="Search Icon">
      </div>
      <h4>Effortless Data Search</h4>
      <p>Quickly find the datasets you need with our powerful search engine and advanced filters.</p>
    </div>
    <div class="feature">
      <div class="feature-icon">
        <img src="../image/analysis-icon.png" alt="Analysis Icon">
      </div>
      <h4>Robust Analysis Tools</h4>
      <p>Perform in-depth analysis on the data using our comprehensive set of analysis tools and visualizations.</p>
    </div>
    <div class="feature">
      <div class="feature-icon">
        <img src="../image/community.png" alt="Community Icon">
      </div>
      <h4>Engage with the Community</h4>
      <p>Connect with a vibrant community of data enthusiasts, share insights, and collaborate on innovative projects.</p>
    </div>
  </div>
</section>
</div>

<footer>
  <div class="container">
    <p>&copy; 2023 Innovate 360. All rights reserved.</p>
  </div>
</footer>

</body>
</html>