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
          <a href="../api/logout/logout.php">
            <i data-feather="log-out"></i>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script class="result-template" type="text/x-handlebars-template">
    <div class="ProfileCard u-cf">
      <div class="ProfileCard-avatar">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0">
          <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path>
          <polygon points="12 15 17 21 7 21 12 15"></polygon>
        </svg>
      </div>
      <div class="ProfileCard-details">
        <div class="ProfileCard-realName">{{name}}</div>
      </div>
    </div>
  </script>

  <script class="empty-template" type="text/x-handlebars-template">
    <div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div>
  </script>
</div>
 