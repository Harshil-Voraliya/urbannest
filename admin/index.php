<?php
require 'includes/init.php';
include pathof('includes/header.php');
?>

  <body onload="startTime()">
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"> </div>
      <div class="dot"></div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <?php
        include pathOf('includes/navbarTop.php');
      ?>
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <?php
            include pathOf('includes/sidebar.php');
        ?>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Default</h3>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Default</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid dashboard-default">
            <div class="row">
              
              <div class="col-xl-3 col-lg-6 col-md-6 box-col-25">
                <div class="card total-revenue overflow-hidden">
                  <div class="card-header">
                    <div class="d-flex justify-content-between">
                      <div class="flex-grow-1">
                        <p class="square-after f-w-600 header-text-primary">Total Revenue<i class="fa fa-circle"></i></p>
                        <h4>96.564%</h4>
                      </div>
                      <div class="setting-list">
                        <ul class="list-unstyled setting-option">
                          <li>
                            <div class="setting-light"><i class="icon-layout-grid2"></i></div>
                          </li>
                          <li><i class="view-html fa fa-code font-white"></i></li>
                          <li><i class="icofont icofont-maximize full-card font-white"></i></li>
                          <li><i class="icofont icofont-minus minimize-card font-white"></i></li>
                          <li><i class="icofont icofont-refresh reload-card font-white"></i></li>
                          <li><i class="icofont icofont-error close-card font-white"> </i></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="revenue-chart" id="revenue-chart"></div>
                    <div class="code-box-copy">
                      <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#revenue"><i class="icofont icofont-copy-alt"></i></button>
                      <pre><code class="language-html" id="revenue">&lt;div class="card total-revenue overflow-hidden"&gt;
  &lt;div class="card-header"&gt;
    &lt;div class="d-flex justify-content-between"&gt;
      &lt;div class="flex-grow-1"&gt;
        &lt;p class="square-after f-w-600 header-text-primary"&gt; Total Revenue
          &lt;i class="fa fa-circle"&gt;&lt;/i&gt;
        &lt;/p&gt;
        &lt;h4&gt; 96.564%&lt;/h4&gt;
      &lt;/div&gt;
      &lt;div class="setting-list"&gt;
        &lt;ul class="list-unstyled setting-option"&gt;
          &lt;li&gt;&lt;div class="setting-light"&gt;&lt;i class="icon-layout-grid2"&gt;&lt;/i&gt;&lt;/div&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="view-html fa fa-code font-white"&gt;&lt;/i&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="icofont icofont-maximize full-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="icofont icofont-minus minimize-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="icofont icofont-refresh reload-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="icofont icofont-error close-card font-white"&gt; &lt;/i&gt;&lt;/li&gt;
        &lt;/ul&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="card-body p-0"&gt;
    &lt;div class="revenue-chart" id="revenue-chart"&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                    </div>
                  </div>
                </div>
                <div class="card total-investment">
                  <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                      <div class="flex-grow-1"> 
                        <p class="square-after f-w-600 header-text-primary">Total Investment<i class="fa fa-circle"> </i></p>
                        <h4>96.564%</h4>
                      </div>
                      <div class="setting-list">
                        <ul class="list-unstyled setting-option">
                          <li>
                            <div class="setting-light"><i class="icon-layout-grid2"></i></div>
                          </li>
                          <li><i class="view-html fa fa-code font-white"></i></li>
                          <li><i class="icofont icofont-maximize full-card font-white"></i></li>
                          <li><i class="icofont icofont-minus minimize-card font-white"></i></li>
                          <li><i class="icofont icofont-refresh reload-card font-white"></i></li>
                          <li><i class="icofont icofont-error close-card font-white"> </i></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="progress sm-progress-bar">
                      <div class="progress-colors" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                        <div class="bg-secondary progress-1"></div>
                        <div class="bg-primary progress-2"></div>
                      </div>
                    </div>
                    <div class="bottom-progress"><span class="badge round-badge-primary font-worksans">3.56% <i class="fa fa-caret-up"></i></span><span class="pull-right font-primary font-worksans f-w-700">75%</span></div>
                    <div class="code-box-copy">
                      <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#investment"><i class="icofont icofont-copy-alt"></i></button>
                      <pre><code class="language-html" id="investment">&lt;div class="card total-investment"&gt;
  &lt;div class="card-header pb-0"&gt;
    &lt;div class="d-flex justify-content-between"&gt;
      &lt;div class="flex-grow-1"&gt;
        &lt;p class="square-after f-w-600 header-text-primary"&gt; Total Investment
          &lt;i class="fa fa-circle"&gt;&lt;/i&gt;
        &lt;/p&gt;
        &lt;h4&gt; 96.564%&lt;/h4&gt;
      &lt;/div&gt;
      &lt;div class="setting-list"&gt;
        &lt;ul class="list-unstyled setting-option"&gt;
          &lt;li&gt;&lt;div class="setting-light"&gt;&lt;i class="icon-layout-grid2"&gt;&lt;/i&gt;&lt;/div&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="view-html fa fa-code font-white"&gt;&lt;/i&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="icofont icofont-maximize full-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="icofont icofont-minus minimize-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="icofont icofont-refresh reload-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="icofont icofont-error close-card font-white"&gt; &lt;/i&gt;&lt;/li&gt;
        &lt;/ul&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="card-body p-0"&gt;
    &lt;div class="progress sm-progress-bar"&gt;
      &lt;div class="progress-colors" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"&gt;
        &lt;div class="bg-secondary.progress-1"&gt;&lt;/div&gt;
        &lt;div class="bg-primary.progress-2"&gt;&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-3 col-xl-4 col-md-6 dash-30 box-col-35">
                <div class="card our-user">
                  <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                      <div class="flex-grow-1"> 
                        <p class="square-after f-w-600 header-text-primary">Our Total Users<i class="fa fa-circle"></i></p>
                        <h4>96.564%</h4>
                      </div>
                      <div class="setting-list">
                        <ul class="list-unstyled setting-option">
                          <li>
                            <div class="setting-light"><i class="status_toggle middle sidebar-toggle" data-feather="grid"></i></div>
                          </li>
                          <li><i class="view-html fa fa-code font-white"></i></li>
                          <li><i class="icofont icofont-maximize full-card font-white"></i></li>
                          <li><i class="icofont icofont-minus minimize-card font-white"></i></li>
                          <li><i class="icofont icofont-refresh reload-card font-white"></i></li>
                          <li><i class="icofont icofont-error close-card font-white"> </i></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="user-chart">
                      <div id="user-chart"></div>
                      <div class="icon-donut"><i data-feather="arrow-up-circle"></i></div>
                    </div>
                    <ul> 
                      <li>
                        <p class="f-w-600 font-primary f-12">Desktop</p><span class="f-w-600">96.564%</span>
                      </li>
                      <li> 
                        <p class="f-w-600 font-primary f-12">Mobile </p><span class="f-w-600">92.624%</span>
                      </li>
                      <li> 
                        <p class="f-w-600 font-primary f-12">Tablet </p><span class="f-w-600">46.564%</span>
                      </li>
                    </ul>
                    <div class="code-box-copy">
                      <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#users"><i class="icofont icofont-copy-alt"></i></button>
                      <pre><code class="language-html" id="users">&lt;div class="card our-user"&gt;
  &lt;div class="card-header pb-0"&gt;
    &lt;div class="d-flex justify-content-between"&gt;
      &lt;div class="flex-grow-1"&gt;
        &lt;p class="square-after f-w-600 header-text-primary"&gt; Our Total Users
          &lt;i class="fa fa-circle"&gt;&lt;/i&gt;
        &lt;/p&gt;
        &lt;h4&gt; 96.564% &lt;/h4&gt;
      &lt;/div&gt;
      &lt;div class="setting-list"&gt;
        &lt;ul class="list-unstyled setting-option"&gt;
          &lt;li&gt;&lt;div class="setting-light"&gt;&lt;i class="icon-layout-grid2"&gt;&lt;/i&gt;&lt;/div&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="view-html fa fa-code font-white"&gt;&lt;/i&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="icofont icofont-maximize full-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="icofont icofont-minus minimize-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="icofont icofont-refresh reload-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="icofont icofont-error close-card font-white"&gt; &lt;/i&gt;&lt;/li&gt;
        &lt;/ul&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="card-body"&gt;
    &lt;div class="user-chart"&gt;
      &lt;div id="user-chart"&gt;&lt;/div&gt;
      &lt;div class="icon-donut"&gt;
        &lt;i class="feather feather-arrow-up-circle"&gt;&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;ul&gt;
      &lt;li&gt;
        &lt;p class="f-w-600 font-primary f-12"&gt; Desktop &lt;/p&gt;
        &lt;span class="f-w-600"&gt; 96.564% &lt;/span&gt;
      &lt;/li&gt;
      &lt;li&gt;
        &lt;p class="f-w-600 font-primary f-12"&gt; Mobile &lt;/p&gt;
        &lt;span class="f-w-600"&gt; 92.624% &lt;/span&gt;
      &lt;/li&gt;
      &lt;li&gt;
        &lt;p class="f-w-600 font-primary f-12"&gt; Tablet &lt;/p&gt;
        &lt;span class="f-w-600"&gt; 46.564% &lt;/span&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-6 box-col-30 xl-30">
                <div class="card our-earning">
                  <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                      <div class="flex-grow-1"> 
                        <p class="square-after f-w-600 header-text-primary">Our Total Earning<i class="fa fa-circle"> </i></p>
                        <h4>96.564%</h4>
                        <div class="setting-list">
                          <ul class="list-unstyled setting-option">
                            <li>
                              <div class="setting-light"><i class="icon-layout-grid2"></i></div>
                            </li>
                            <li><i class="view-html fa fa-code font-white"></i></li>
                            <li><i class="icofont icofont-maximize full-card font-white"></i></li>
                            <li><i class="icofont icofont-minus minimize-card font-white"></i></li>
                            <li><i class="icofont icofont-refresh reload-card font-white"></i></li>
                            <li><i class="icofont icofont-error close-card font-white"> </i></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="earning-chart">
                      <div id="earning-chart"></div>
                    </div>
                    <div class="code-box-copy">
                      <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#earning"><i class="icofont icofont-copy-alt"></i></button>
                      <pre><code class="language-html" id="earning">&lt;div class="card our-earning"&gt;
  &lt;div class="card-header pb-0"&gt;
    &lt;div class="d-flex justify-content-between"&gt;
      &lt;div class="flex-grow-1"&gt;
        &lt;p class="square-after f-w-600 header-text-primary"&gt; Our Total Earning
          &lt;i class="fa fa-circle"&gt;&lt;/i&gt;
        &lt;/p&gt;
        &lt;h4&gt; 96.564% &lt;/h4&gt;
      &lt;/div&gt;
      &lt;div class="setting-list"&gt;
        &lt;ul class="list-unstyled setting-option"&gt;
          &lt;li&gt;&lt;div class="setting-light"&gt;&lt;i class="icon-layout-grid2"&gt;&lt;/i&gt;&lt;/div&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="view-html fa fa-code font-white"&gt;&lt;/i&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="icofont icofont-maximize full-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="icofont icofont-minus minimize-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="icofont icofont-refresh reload-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="icofont icofont-error close-card font-white"&gt; &lt;/i&gt;&lt;/li&gt;
        &lt;/ul&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="card-body p-0"&gt;
    &lt;div class="earning-chart"&gt;
      &lt;div id="earning-chart"&gt;&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="card-footer"&gt;
    &lt;ul class="d-sm-flex d-block"&gt;
      &lt;li&gt;
        &lt;p class="f-w-600 font-primary f-12"&gt; Daily Earning
        &lt;span class="f-w-600"&gt; 96.564% &lt;/span&gt;
      &lt;/li&gt;
      &lt;li&gt;
        &lt;p class="f-w-600 font-primary f-12"&gt; Monthly Earning
        &lt;span class="f-w-600"&gt; 96.564% &lt;/span&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                    </div>
                  </div>
                  <div class="card-footer">
                    <ul class="d-sm-flex d-block">
                      <li>
                        <p class="f-w-600 font-primary f-12">Daily Earning</p><span class="f-w-600">96.564%</span>
                      </li>
                      <li> 
                        <p class="f-w-600 font-primary f-12">Monthly Earning </p><span class="f-w-600">96.564%</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-md-6 box-col-40 xl-40">
                <div class="card appointment-detail">
                
                           
                       
                    </div>
                    <div class="code-box-copy">
                      <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#appoinment"><i class="icofont icofont-copy-alt"></i></button>
                      <pre><code class="language-html" id="appoinment">&lt;div class="card appointment-detail"&gt;
  &lt;div class="card-header pb-0"&gt;
    &lt;div class="d-flex justify-content-between"&gt;
      &lt;div class="flex-grow-1"&gt;
        &lt;p class="square-after f-w-600 header-text-primary"&gt; total appointment
          &lt;i class="fa fa-circle"&gt;&lt;/i&gt;
        &lt;/p&gt;
        &lt;h4&gt; 12 meet &lt;/h4&gt;
      &lt;/div&gt;
      &lt;div class="setting-list"&gt;
        &lt;ul class="list-unstyled setting-option"&gt;
          &lt;li&gt;&lt;div class="setting-light"&gt;&lt;i class="icon-layout-grid2"&gt;&lt;/i&gt;&lt;/div&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="view-html fa fa-code font-white"&gt;&lt;/i&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="icofont icofont-maximize full-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="icofont icofont-minus minimize-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="icofont icofont-refresh reload-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="icofont icofont-error close-card font-white"&gt; &lt;/i&gt;&lt;/li&gt;
        &lt;/ul&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="card-body"&gt;
    &lt;div class="table-responsive.theme-scrollbar"&gt;
      &lt;table class="table"&gt;
        &lt;tbody&gt;
          &lt;tr&gt;
            &lt;td&gt;
              &lt;div class="d-flex"&gt;
                &lt;img class="img-fluid align-top circle" src="<?= urlOf('assets/images/dashboard/default/01.png') ?>" alt=""&gt;&lt;/img&gt;
                &lt;div class="flex-grow-1"&gt;
                  &lt;a href="user-profile.html"&gt;
                    &lt;span&gt;Ossim keter&lt;/span&gt;
                  &lt;/a&gt;
                  &lt;p class="mb-0"&gt; 1 Hour &lt;/p&gt;
                &lt;/div&gt;
                &lt;div class="active-status active-online"&gt;&lt;/div&gt;
              &lt;/div&gt;
            &lt;/td&gt;
            &lt;td&gt; 16 august &lt;/td&gt;
            &lt;td class="text-end"&gt;
              &lt;button class="btn btn-primary" type="button" onclick="document.location='user-cards.html'"&gt; Pending &lt;/button&gt;
            &lt;/td&gt; 
          &lt;/tr&gt;
          &lt;tr&gt;
            &lt;td&gt;
              &lt;div class="d-flex"&gt;
                &lt;img class="img-fluid align-top circle" src="<?= urlOf('assets/images/dashboard/default/02.png') ?>" alt=""&gt;&lt;/img&gt;
                &lt;div class="flex-grow-1"&gt;
                  &lt;a href="user-profile.html"&gt;
                    &lt;span&gt;Venter loren&lt;/span&gt;
                  &lt;/a&gt;
                  &lt;p class="mb-0"&gt; Now &lt;/p&gt;
                &lt;/div&gt;
                &lt;div class="active-status active-busy"&gt;&lt;/div&gt;
              &lt;/div&gt;
            &lt;/td&gt;
            &lt;td&gt; 21 September &lt;/td&gt;
            &lt;td class="text-end"&gt;
              &lt;button class="btn btn-secondary" type="button" onclick="document.location='user-cards.html'"&gt; Done 
                &lt;i class="fa fa-check-circle"&gt;
              &lt;/button&gt;
            &lt;/td&gt; 
          &lt;/tr&gt;
          &lt;tr&gt;
            &lt;td&gt;
              &lt;div class="d-flex"&gt;
                &lt;img class="img-fluid align-top circle" src="<?= urlOf('assets/images/dashboard/default/03.png') ?>" alt=""&gt;&lt;/img&gt;
                &lt;div class="flex-grow-1"&gt;
                  &lt;a href="user-profile.html"&gt;
                    &lt;span&gt;Fran loain&lt;/span&gt;
                  &lt;/a&gt;
                  &lt;p class="mb-0"&gt; 2 Day After &lt;/p&gt;
                &lt;/div&gt;
                &lt;div class="active-status active-online"&gt;&lt;/div&gt;
              &lt;/div&gt;
            &lt;/td&gt;
            &lt;td&gt; 06 March &lt;/td&gt;
            &lt;td class="text-end"&gt;
              &lt;button class="btn btn-success" type="button" onclick="document.location='user-cards.html'"&gt; Pending &lt;/button&gt;
            &lt;/td&gt; 
          &lt;/tr&gt;
          &lt;tr&gt;
            &lt;td&gt;
              &lt;div class="d-flex"&gt;
                &lt;img class="img-fluid align-top circle" src="<?= urlOf('assets/images/dashboard/default/04.png') ?>" alt=""&gt;&lt;/img&gt;
                &lt;div class="flex-grow-1"&gt;
                  &lt;a href="user-profile.html"&gt;
                    &lt;span&gt;Loften Horen&lt;/span&gt;
                  &lt;/a&gt;
                  &lt;p class="mb-0"&gt; Day End &lt;/p&gt;
                &lt;/div&gt;
                &lt;div class="active-status active-online"&gt;&lt;/div&gt;
              &lt;/div&gt;
            &lt;/td&gt;
            &lt;td&gt; 12 February &lt;/td&gt;
            &lt;td class="text-end"&gt;
              &lt;button class="btn btn-info" type="button" onclick="document.location='user-cards.html'"&gt; Pending &lt;/button&gt;
            &lt;/td&gt; 
          &lt;/tr&gt;
          &lt;tr&gt;
            &lt;td&gt;
              &lt;div class="d-flex"&gt;
                &lt;img class="img-fluid align-top circle" src="<?= urlOf('assets/images/dashboard/default/05.png') ?>" alt=""&gt;&lt;/img&gt;
                &lt;div class="flex-grow-1"&gt;
                  &lt;a href="user-profile.html"&gt;
                    &lt;span&gt;Loie fenter&lt;/span&gt;
                  &lt;/a&gt;
                  &lt;p class="mb-0"&gt; 2 Day After &lt;/p&gt;
                &lt;/div&gt;
                &lt;div class="active-status active-offline"&gt;&lt;/div&gt;
              &lt;/div&gt;
            &lt;/td&gt;
            &lt;td&gt; 06 March &lt;/td&gt;
            &lt;td class="text-end"&gt;
              &lt;button class="btn btn-danger" type="button" onclick="document.location='user-cards.html'"&gt; Pending &lt;/button&gt;
            &lt;/td&gt; 
          &lt;/tr&gt;
        &lt;/tbody&gt;
      &lt;/table&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="col-xl-12 box-col-12">
                <div class="card total-growth">
                  <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                      <div class="flex-grow-1"> 
                        <p class="square-after f-w-600 header-text-primary">Our Total Growth<i class="fa fa-circle"> </i></p>
                        <h4>96.564%</h4>
                      </div>
                      <div class="setting-list">
                        <ul class="list-unstyled setting-option">
                          <li>
                            <div class="setting-light"><i class="icon-layout-grid2"></i></div>
                          </li>
                          <li><i class="view-html fa fa-code font-white"></i></li>
                          <li><i class="icofont icofont-maximize full-card font-white"></i></li>
                          <li><i class="icofont icofont-minus minimize-card font-white"></i></li>
                          <li><i class="icofont icofont-refresh reload-card font-white"></i></li>
                          <li><i class="icofont icofont-error close-card font-white"> </i></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card-body pb-0">
                    <div class="growth-chart"> 
                      <div id="growth-chart"></div>
                    </div>
                    <div class="code-box-copy">
                      <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#growth"><i class="icofont icofont-copy-alt"></i></button>
                      <pre><code class="language-html" id="growth">&lt;div class="card total-growth"&gt;
  &lt;div class="card-header pb-0"&gt;
    &lt;div class="d-flex justify-content-between"&gt;
      &lt;div class="flex-grow-1"&gt;
        &lt;p class="square-after f-w-600 header-text-primary"&gt; Our Total Growth
          &lt;i class="fa fa-circle"&gt;&lt;/i&gt;
        &lt;/p&gt;
        &lt;h4&gt; 96.564%&lt;/h4&gt;
      &lt;/div&gt;
      &lt;div class="setting-list"&gt;
        &lt;ul class="list-unstyled setting-option"&gt;
          &lt;li&gt;&lt;div class="setting-light"&gt;&lt;i class="icon-layout-grid2"&gt;&lt;/i&gt;&lt;/div&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="view-html fa fa-code font-white"&gt;&lt;/i&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="icofont icofont-maximize full-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="icofont icofont-minus minimize-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="icofont icofont-refresh reload-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="icofont icofont-error close-card font-white"&gt; &lt;/i&gt;&lt;/li&gt;
        &lt;/ul&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="card-body p-0"&gt;
    &lt;div class="growth-chart"&gt;
      &lt;div id="growth-chart"&gt;&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
              
                  
              
                    <div class="code-box-copy">
                      <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#to-do"><i class="icofont icofont-copy-alt"></i></button>
                      <pre><code class="language-html" id="to-do">&lt;div class="card our-todolist"&gt;
  &lt;div class="card-header pb-0"&gt;
    &lt;div class="d-flex justify-content-between"&gt;
      &lt;div class="flex-grow-1"&gt;
        &lt;p class="square-after f-w-600 header-text-primary"&gt; Our To-Do List
          &lt;i class="fa fa-circle"&gt;&lt;/i&gt;
        &lt;/p&gt;
        &lt;h4&gt; Todo List &lt;/h4&gt;
      &lt;/div&gt;
      &lt;div class="setting-list"&gt;
        &lt;ul class="list-unstyled setting-option"&gt;
          &lt;li&gt;&lt;div class="setting-light"&gt;&lt;i class="icon-layout-grid2"&gt;&lt;/i&gt;&lt;/div&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="view-html fa fa-code font-white"&gt;&lt;/i&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="icofont icofont-maximize full-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="icofont icofont-minus minimize-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="icofont icofont-refresh reload-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="icofont icofont-error close-card font-white"&gt; &lt;/i&gt;&lt;/li&gt;
        &lt;/ul&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="card-body p-0"&gt;
    &lt;div class="activity-timeline"&gt;
      &lt;div class="d-flex"&gt;
        &lt;div class="activity-line"&gt;&lt;/div&gt;
        &lt;div class="activity-dot-primary"&gt;&lt;/div&gt;
        &lt;div class="flex-grow-1"&gt;
          &lt;p class="todo-font mt-0"&gt;
            &lt;span class="font-primary"&gt; 20-04-2022 &lt;/span&gt;
            Today
          &lt;/p &gt;
          &lt;div class="d-flex mt-0"&gt;
            &lt;img class="img-fluid img-30" src="<?= urlOf('assets/images/dashboard/default/todo.png') ?>" alt=""/&gt;
            &lt;div class="flex-grow-1"&gt;
              &lt;span class="f-w-600"&gt; New Order $2340
                New Order $2340
                &lt;i class="fa fa-circle circle-dot-primary pull-right"&gt;
              &lt;/span&gt;
              &lt;p class="mb-0"&gt; Update New Product Pdf And Delivery Product &lt;/p&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class="d-flex"&gt;
        &lt;div class="activity-dot-secondary"&gt;&lt;/div&gt;
        &lt;div class="flex-grow-1"&gt;
          &lt;p class="todo-font mt-0"&gt;
            &lt;span class="font-primary"&gt; 20-04-2022 &lt;/span&gt;
            Today
            &lt;span class="badge badge-primary ms-2"&gt; New &lt;/span&gt;
          &lt;/p &gt;
          &lt;span class="f-w-600"&gt; James just like your product
            &lt;i class="fa fa-circle circle-dot-secondary pull-right"&gt;&lt;/i&gt;
          &lt;/span&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class="d-flex"&gt;
        &lt;div class="activity-dot-primary"&gt;&lt;/div&gt;
        &lt;div class="flex-grow-1"&gt;
          &lt;p class="mt-0 todo-font"&gt;
            &lt;span class="font-primary"&gt; 20-04-2022 &lt;/span&gt;
            Today
          &lt;/p &gt;
          &lt;span class="f-w-600"&gt; Jihan Doe just like your product
          &lt;/span&gt;
          &lt;p class="mb-0"&gt; Design and style should work making you look good and feel good without lot of effort. &lt;/p&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class="d-flex"&gt;  
        &lt;div class="activity-dot-primary"&gt;&lt;/div&gt;
        &lt;div class="flex-grow-1"&gt;
          &lt;p class="todo-font mt-0"&gt;
            &lt;span class="font-primary"&gt; 20-04-2022 &lt;/span&gt;
            Today
          &lt;/p &gt;
          &lt;span class="f-w-600"&gt; Take Our Client Metting
            &lt;i class="fa fa-circle circle-dot-primary pull-right"&gt;&lt;/i&gt;
          &lt;/span&gt;
          &lt;p class="mb-0"&gt; Hosting an effective client meeting. &lt;/p&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt; </code></pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
      </div>
    </div>
  </body>

</html>
  <?php
  include pathof('includes/scripts.php');
  ?>