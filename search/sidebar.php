<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/sidebar.css">
</head>
<body> 

<div>
  <table>
    <tr>
      <th>Toggle Menu</th>
    </tr>
    <tr>
      <td>
        <a href="#chartjs" class="menu-toggle">Chart.js <span class="toggle-icon">+</span></a>
        <ul class="sub-menu">
          <li><a href="#area-chart">Area Chart</a></li>
          <li><a href="#bar-chart">Bar Chart</a></li>
          <li><a href="#bubble-chart">Bubble Chart</a></li>
          <li><a href="#doughnut-pie-charts">Doughnut and Pie Charts</a></li>
          <li><a href="#line-chart">Line Chart</a></li>
          <li><a href="#mixed-chart-types">Mixed Chart Types</a></li>
          <li><a href="#polar-area-chart">Polar Area Chart</a></li>
          <li><a href="#radar-chart">Radar Chart</a></li>
          <li><a href="#scatter-chart">Scatter Chart</a></li>
        </ul>
      </td>
    </tr>
    <tr>
      <td>
        <a href="#chartjs2" class="menu-toggle">Chart.js2 <span class="toggle-icon">+</span></a>
        <ul class="sub-menu">
          <li><a href="#another-chart">Another Chart</a></li>
          <li><a href="#yet-another-chart">Yet Another Chart</a></li>
        </ul>
      </td>
    </tr>
  </table>
</div>


<script>
  var menuToggles = document.querySelectorAll('.menu-toggle');
  var subMenus = document.querySelectorAll('.sub-menu');

  menuToggles.forEach(function(menuToggle, index) {
    menuToggle.addEventListener('click', function() {
      if (subMenus[index].style.display !== 'block') {
        // If the sub-menu is currently hidden, show it
        subMenus[index].style.display = 'block';
        menuToggle.querySelector('.toggle-icon').textContent = '-';
      } else {
        // If the sub-menu is currently visible, hide it
        subMenus[index].style.display = 'none';
        menuToggle.querySelector('.toggle-icon').textContent = '+';
      }
    });
  });
</script>

</body>
</html>
