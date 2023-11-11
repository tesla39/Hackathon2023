<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<div class="sidebar">
  <div class="menu">
    <h3 class="menu-toggle">1. Natural and Physical Sciences</h3>
    <ul class="sub-menu">
      <li>
        <h4>Environmental Science</h4>
        <ul>
          <li>Related to environment</li>
          <li>Related to nature</li>
          <li>Related to geographical conditions</li>
        </ul>
      </li>
      <li>
        <h4>Earth Science</h4>
        <ul>
          <li>Related to earth</li>
          <li>Related to water</li>
          <li>Related to weather</li>
          <li>Related to disasters</li>
          <li>Related to resources</li>
        </ul>
      </li>
      <li>
        <h4>Space Science</h4>
        <ul>
          <li>Related to cosmos</li>
          <li>Related to galaxies</li>
        </ul>
      </li>
    </ul>
  </div>
  <div class="menu">
    <h3 class="menu-toggle">2. Social Sciences and Humanities</h3>
    <ul class="sub-menu">
      <li>
        <h4>Geography and Regional Studies</h4>
        <ul>
          <li>Related to countries</li>
          <li>Related to continents</li>
        </ul>
      </li>
      <li>
        <h4>Peace and Conflict Studies</h4>
        <ul>
          <li>Related to peace and security</li>
        </ul>
      </li>
      <li>
        <h4>Law and Justice Studies</h4>
        <ul>
          <li>Related to laws and rights</li>
        </ul>
      </li>
      <li>
        <h4>History</h4>
        <ul>
          <li>Related to future and past history</li>
        </ul>
      </li>
      <li>
        <h4>Sociology</h4>
        <ul>
          <li>Related to poverty</li>
          <li>Related to corruption</li>
          <li>Related to crime</li>
        </ul>
      </li>
      <li>
        <h4>Psychology</h4>
        <ul>
          <li>Related to anxiety</li>
          <li>Related to depression</li>
          <li>Related to happiness</li>
        </ul>
      </li>
    </ul>
  </div>
</div>

<div class="menu">
    <h3 class="menu-toggle">3. Health and Wellness</h3>
    <ul class="sub-menu">
      <li>
        <h4>Related to health</h4></li>
    </ul>
  </div>

  <div class="menu">
    <h3 class="menu-toggle">4. Governance and Law</h3>
    <ul class="sub-menu">    
          <li>Related to governance</li>
          <li>Related to laws and rights</li>
                 </ul>
    </ul>
  </div>
  <div class="menu">
  <h3 class="menu-toggle">5. Economics</h3>
    <ul class="sub-menu">
        <ul>
          <li> Related to economy</li>
          <li> Related to production</li>
          <li> Related to finance and banks</li>
          <li> Related to employment </li>
          <li> Related to incomes </li>
        </ul>
</div>


</body>
<script>
    var menuToggles = document.querySelectorAll('.menu-toggle');
var subMenus = document.querySelectorAll('.sub-menu');

menuToggles.forEach(function(menuToggle, index) {
  menuToggle.addEventListener('click', function() {
    subMenus[index].style.display = subMenus[index].style.display === 'none' ? 'block' : 'none';
  });
});
</script>
</html>

