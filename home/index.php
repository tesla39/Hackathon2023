<?php include('pages/connection.php'); 
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
<html>
<head>
  <title>Innovate 360</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="css/custom.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<header>
  <div class="header-container">
    <h1 class="logo">Innovate</h1>
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="pages/search/dropdown.php">Explore Data</a></li>
        <li><a href="pages/analyze.php">Analysis Tools</a></li>
        <li><a href="pages/innovation_hub.php">Innovation Hub</a></li>
        <li><a href="pages/about.php">About</a></li>
      </ul>
    </nav>

    <div class="user-profile">
    <a href="pages/account.php">
     <img src="pages/avatars/<?php echo $avatar ?>" alt="User Profile Image" class="user-image" data-toggle="tooltip" title="<?php echo $name ?>"></a>
</div>
    </div>
  </div>
</header>

<!--background-video -->
<div class="video-background">
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="image/background.mp4" type="video/mp4">
    </video>
</div>

<section id="hero">
  <div class="hero-content">
    <h2>Explore and Analyze Open Data</h2>
    <a href="pages/register.php" class="cta-button">Get Started</a>
  </div>
  </section>

<section id="data-facts">
  <div class="container">
    <h2>Today's feed</h2>
    <p>Unlock insights, make informed decisions, and drive success with data-driven strategies.</p>
 

<!--cards-->
<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="https://davidkanigan.files.wordpress.com/2015/04/writing-girl-pakistan.png?w=656&h=414" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">"Data Insights Illuminate the Link between Education and Poverty"</h5>
        <p class="card-text">In a groundbreaking study that combines education and poverty data, researchers have uncovered a strong correlation between educational attainment and poverty levels.</p>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card">
      <img src="https://th.bing.com/th/id/R.f00449a9fd2cd4b982dadc7cbc54bad3?rik=TkkrCJ1G4Gx55Q&pid=ImgRaw&r=0" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">"Healthcare Inequalities: Examining Disparities in Access and Outcomes"</h5>
        <p class="card-text">In-depth analysis of healthcare data exposes deep-rooted disparities in access to healthcare services and health outcomes among different populations.</p>
      </div>
    </div>
  </div>
  
  <div class="col">
    <div class="card">
      <img src="https://th.bing.com/th/id/OIP.v3z46XijvynQ9PZzREc_7AHaE8?pid=ImgDet&rs=1" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">"Educational Disparities: Examining Access and Quality" </h5>
        <p class="card-text">Recent data analysis has revealed stark educational disparities, shedding light on the unequal access and quality of education across different regions and socioeconomic groups. </p>
      </div>
    </div>
  </div>

  
  <div class="col">
    <div class="card">
      <img src="https://th.bing.com/th/id/R.8983b0016c257bc88b363586ef1cbd97?rik=368I52%2bEISnIyQ&pid=ImgRaw&r=0" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">"Financial Inclusion Gaps: Understanding the Unbanked Population"</h5>
        <p class="card-text">Through data analysis, researchers have identified significant gaps in financial inclusion, particularly among low-income individuals and marginalized communities.</p>
  </div>
</div>
<br><br>
<a href="pages/innovation_hub.php" class="cta-button" style="display: block; margin: 0 auto; text-align: center;">Learn More</a>

</div>
</section>

<section id="testimonials">
  <div class="container">
    <h3>What Our Users Say</h3>
    <div class="testimonial">

      <img src="image/user1.webp" alt="User 1">
      <p>"I love Innovate 360! It's a fantastic platform for exploring and analyzing open data. Highly recommended!"</p>
      <h4>John Doe</h4>
    </div>
    <div class="testimonial">
      <img src="image/user2.jpg" alt="User 2">
      <p>"Innovate 360 has revolutionized how I work with open data. It's user-friendly and has powerful analysis tools."</p>
      <h4>Jane Smith</h4>
    </div>
  </div>
</section>

<footer>
  <div class="container">
    <p>&copy; 2023 Innovate 360. All rights reserved.</p>
  </div>
</footer>

<!--bootstrap-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script><script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script></script>
</body>
</html>