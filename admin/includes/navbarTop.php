<style>
  /* Default Light Mode */
  .light-mode .logout-icon {
    color: black;
  }

  /* Dark Mode */
  .dark-mode .logout-icon {
    color: white;
  }

  /* Optional styling for better UX */
  body {
    transition: background-color 0.3s ease;
  }

  .light-mode {
    background-color: white;
  }

  .dark-mode {
    background-color: #333;
  }
</style>

<div class="page-header">
  <div class="header-wrapper row m-0">
    <!-- Left Sidebar Toggle and Logo -->
    <div class="header-logo-wrapper col-auto p-0">
      <div class="toggle-sidebar">
        <i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i>
      </div>
      <div class="logo-header-main">
        <a href="index.html">
          <img class="img-fluid for-light img-100" src="<?= urlOf('') ?>" alt="">
          <img class="img-fluid for-dark" src="<?= urlOf('assets/images/logo/logo.png') ?>" alt="">
        </a>
      </div>
    </div>

    <!-- Row for Paragraph (Left) and Icons (Right) -->
    <div class="col d-flex justify-content-between align-items-center">
      <!-- Paragraph (Left Aligned) -->
      <h5 class="mb-0">"Build wealth through property."</h5>

      <!-- Icons (Right Aligned) -->
      <div class="d-flex align-items-center">
        <!-- Light/Dark Mode Toggle -->
        <div class="mode me-3">
          <i class="fa fa-moon-o"></i>
        </div>

        <!-- Logout Button -->
        <div class="profile-nav onhover-dropdown">
          <a href="../admin/api/logout/logout.php">
            <i data-feather="log-out" style="color: black;" ></i>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- JavaScript for theme toggle -->
  <script>
    const modeToggle = document.querySelector('.mode');
    const body = document.body;

    modeToggle.addEventListener('click', function() {
      // Toggle dark and light mode classes
      body.classList.toggle('dark-mode');
      body.classList.toggle('light-mode');
    });

    // Set the initial mode to light mode
    window.onload = function() {
      body.classList.add('light-mode'); // Default light mode
    }
  </script>
</div>