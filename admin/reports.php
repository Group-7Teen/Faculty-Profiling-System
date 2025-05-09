<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin | PLP Faculty Profiling System</title>
  <link rel="stylesheet" href="../css/admin_style.css" />
  <style>
<style>
  /* Dropdown Styles */
  nav ul li.dropdown {
    position: relative;
  }
  
  nav ul li.dropdown .dropdown-menu {
    display: none; /* Changed from none to block in HTML */
    position: relative; /* Changed from absolute to relative */
    left: 0;
    background-color: #015f22;
    min-width: 200px;
    z-index: 1000;
    border: 1px solid #024117;
    box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
    padding: 0;
    margin: 0;
  }
  
  nav ul li.dropdown .dropdown-menu li {
    padding: 0;
    list-style: none;
  }
  
  nav ul li.dropdown .dropdown-menu a {
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    font-size: 14px;
    font-family: 'Trebuchet MS';
  }
  
  nav ul li.dropdown .dropdown-menu a:hover {
    background-color: #04b032;
  }
  
  /* Remove the pointer cursor from the Reports link */
  nav ul li.dropdown > a {
    cursor: pointer;
  }
</style>
</head>
<body>

  <div class="header">
    <div class="logo-section">
      <img src="../images/logo.png" alt="Logo" />
      <div class="title">PAMANTASAN NG LUNGSOD NG PASIG</div>
      <button class="hamburger" onclick="toggleMenu()">
        <div id="bar1" class="bar"></div>
        <div id="bar2" class="bar"></div>
        <div id="bar3" class="bar"></div>
      </button>
    </div>
  </div>

  <div class="navigation" id="menu">
    <div class="navigation-header">
        <h1>ADMINISTRATOR</h1>
      <h2>| PLP FACULTY PROFILING SYSTEM |</h2>
    </div>

<nav>
  <ul>
    <li><a href="home.php"><img src="../images/home.png" alt="Home Icon" class="menu-icon">HOME</a></li>
    <li><a href="department.php"><img src="../images/department.png" alt="Department Icon" class="menu-icon">COLLEGE MANAGEMENT</a></li>
    <li><a href="user.php"><img src="../images/user.png" alt="User Icon" class="menu-icon">USER MANAGEMENT</a></li>
    <li class="dropdown">
      <a href="javascript:void(0)" id="reportsDropdown" class="active"><img src="../images/reports.png" alt="Reports Icon" class="menu-icon">REPORTS</a>
      <ul class="dropdown-menu" style="display: block;"> <!-- Changed to display: block -->
        <li><a href="files_report.php">Files</a></li>
        <li><a href="logs_report.php">Logs</a></li>
      </ul>
    </li>
    <li><a href="setting.php"><img src="../images/setting.png" alt="Settings Icon" class="menu-icon">SETTINGS</a></li>
  </ul>
</nav>

    <div class="logout-section">
      <a href="#" onclick="confirmLogout()"><img src="../images/logout.png" alt="Logout Icon" class="menu-icon">LOGOUT</a>
    </div>
  </div>

  <div id="main" class="main-content">
    <!-- Content will be loaded from the specific report pages -->
    <?php
    // You can keep this empty or add a default welcome message
    // The actual content will come from files_report.php or logs_report.php
    ?>
  </div>

  <script>
  // Toggle dropdown on click
  document.getElementById('reportsDropdown').addEventListener('click', function(e) {
    e.preventDefault();
    const dropdown = this.parentElement;
    const menu = dropdown.querySelector('.dropdown-menu');
    
    // Toggle only the clicked dropdown
    if (menu.style.display === 'block') {
      menu.style.display = 'none';
    } else {
      // Close all other dropdowns first
      document.querySelectorAll('.dropdown-menu').forEach(item => {
        if (item !== menu) {
          item.style.display = 'none';
        }
      });
      menu.style.display = 'block';
    }
  });
  
  // Close dropdown when clicking outside
  document.addEventListener('click', function(e) {
    if (!e.target.closest('.dropdown')) {
      document.querySelectorAll('.dropdown-menu').forEach(item => {
        item.style.display = 'none';
      });
    }
  });

  // Your existing toggleMenu and confirmLogout functions
  function toggleMenu() {
    const menu = document.getElementById('menu');
    menu.classList.toggle('active');
  }
  
  function confirmLogout() {
    if (confirm('Are you sure you want to logout?')) {
      window.location.href = '../landing/index.php';
    }
  }
</script>
<script src="scripts.js"></script>
</body>
</html>