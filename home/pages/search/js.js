
  var dropdown = document.querySelector('.custom-dropdown');
  var select = dropdown.querySelector('.custom-dropdown-select');
  var optionsContainer = dropdown.querySelector('.custom-dropdown-options');
  
  select.addEventListener('click', function() {
    dropdown.classList.toggle('open');
    optionsContainer.style.display = optionsContainer.style.display === 'block' ? 'none' : 'block';
  });
  
  var options = optionsContainer.querySelectorAll('.custom-dropdown-option');
  options.forEach(function(option) {
    option.addEventListener('click', function() {
      select.textContent = this.textContent;
      dropdown.classList.remove('open');
      optionsContainer.style.display = 'none';
    });
  });