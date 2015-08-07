<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 */
?>

    <!-- scrollToTop -->
    <!-- ================ -->
    <div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>
    
    <!-- page wrapper start -->
    <!-- ================ -->
    <div class="page-wrapper">
    
      <!-- header-container start -->
      <div class="header-container">
        <!-- header start -->
        <!-- classes:  -->
        <!-- "fixed": enables fixed navigation mode (sticky menu) e.g. class="header fixed clearfix" -->
        <!-- "dark": dark version of header e.g. class="header dark clearfix" -->
        <!-- "full-width": mandatory class for the full-width menu layout -->
        <!-- "centered": mandatory class for the centered logo layout -->
        <!-- ================ --> 
        <header class="header fixed clearfix transparent-header-on">

          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <!-- header-left start -->
                <!-- ================ -->
                <div class="header-left clearfix">

                  <!-- logo -->
                  <div id="logo" class="logo">
                    <a href="index.html"><img id="logo_img" src="/profiles/solkit/themes/tamaucwrap/assets/images/tamarkin-auction-logo-red-black.svg" alt="Tamarkin Rare Camera Auctions"></a>
                  </div>
                  
                </div>
                <!-- header-left end -->

              </div>
              <div class="col-md-8">
          
                <!-- header-right start -->
                <!-- ================ -->
                <div class="header-right clearfix">
                  <!-- main-navigation start -->
                  <!-- classes: -->
                  <!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
                  <!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
                  <!-- "with-dropdown-buttons": Mandatory class that adds extra space, to the main navigation, for the search and cart dropdowns -->
                  <!-- ================ -->
                  <div class="main-navigation animated">

                    <!-- navbar start -->
                    <!-- ================ -->
                    <nav class="navbar navbar-default" role="navigation">
                      <div class="container-fluid">

                        <!-- Toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1" style="margin-top: 10px;">
                          <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="#banner">Home</a></li>
                            <li><a href="#footer">Contact</a></li>
                            <li><a href="#services">Press</a></li>
                            <li><a href="#services">Past Auctions</a></li>
                            <li><a href="#about">About</a></li>
                          </ul>
                        </div>

                      </div>
                    </nav>
                    <!-- navbar end -->

                  </div>
                  <!-- main-navigation end -->
                </div>
                <!-- header-right end -->
          
              </div>
            </div>
          </div>
          
        </header>
        <!-- header end -->
      </div>
      <!-- header-container end -->
    
      <!-- banner start -->
      <!-- ================ -->
      <div id="banner" class="banner banner-hero dark-translucent-bg padding-bottom-clear clearfix">
        <div class="container">
          <div class="row" style="position: absolute; width: 100%; bottom: 72px;">
            <div class="col-md-8 text-center col-md-offset-2 space-bottom">
              <h1 class="title large_white">
                Upcoming Auction
              </h1>
              <h2 class="title large_white">
                Saturday, November 14, 2015
              </h2>
              <div class="separator"></div>
              <div class="text-center lead" style="margin: 24px 0; color: rgba(255, 255, 255, 0.85); font-weight: 400; font-size: 36px; font-style: italic;">
                Become part of this special auction
              </div>
              <form class="form-inline" role="form">
                <div class="form-group" style="margin-right: 12px;">
                  <label class="sr-only" for="exampleInputEmail2">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Your Email" style="width: 290px; font-size: 20px;">
                </div>
                <button type="submit" class="btn btn-primary btn-lg" style="text-transform: uppercase; font-weight: 400; font-size: 20px;">Get Auction Information</button>
              </form>
            </div>
          </div>
        </div>

      </div>
      <!-- banner end -->
      <section class="pv-30">
        <div class="container" style="padding-top: 36px;padding-bottom: 24px;">
          <div class="row">
            <div class="col-md-6">
              <h2 class="title">Now Accepting <strong>Consignments</strong> for Our Fall 2015 Rare Camera Auction</h2>
              <div class="separator-2"></div>
              <a href="page-about.html" class="btn btn-primary btn-lg" style="text-transform: uppercase;margin: 0 auto; border-radius: 6px; width: 50%; margin-top: 24px;">Consignment Guide</a>
              <p style="margin-top: 24px;"><strong style="text-transform: uppercase; font-weight: 400; font-size: 36px;">Call Us At (800) 289-5342</strong></p>
              <p>
                <strong style="text-transform: uppercase;font-weight: 400;font-size: 19px;">Register for On-line “Real Time” Bidding <span style="font-weight: 600; margin-left: 6px;">(Coming Soon)</span></strong>
                <strong style="text-transform: uppercase; font-weight: 400; font-size: 19px; display: block;">View On-line Catalog <span style="font-weight: 600; margin-left: 6px;">(Coming Soon)</span></strong>
              </p>
            </div>
            <div class="col-md-6" style="padding-left: 36px;">
              <img src="/profiles/solkit/themes/tamaucwrap/assets/images/camera2.jpg" alt="" style="width: 100%;">
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- page-wrapper end -->



<header id="header" class="header" role="header">
  <div class="container">
    <nav class="navbar navbar-default" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
          <span class="sr-only"><?php print t('Toggle navigation'); ?></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <?php if ($site_name || $logo): ?>
          <a href="<?php print $front_page; ?>" class="navbar-brand" rel="home" title="<?php print t('Home'); ?>">
            <?php if ($logo): ?>
              <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" id="logo" />
            <?php endif; ?>
            <?php if ($site_name): ?>
              <span class="site-name"><?php print $site_name; ?></span>
            <?php endif; ?>
          </a>
        <?php endif; ?>
      </div> <!-- /.navbar-header -->

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navbar-collapse">
        <?php if ($main_menu): ?>
          <ul id="main-menu" class="menu nav navbar-nav">
            <?php print render($main_menu); ?>
          </ul>
        <?php endif; ?>
        <?php if ($search_form): ?>
          <?php print $search_form; ?>
        <?php endif; ?>
      </div><!-- /.navbar-collapse -->
    </nav><!-- /.navbar -->
  </div> <!-- /.container -->
</header>
<div id="main-wrapper" style="background-color: #fafafa;">
  <div id="main" class="main">
    <div class="container">
      <?php if ($breadcrumb): ?>
        <div id="breadcrumb" class="visible-desktop">
          <?php print $breadcrumb; ?>
        </div>
      <?php endif; ?>
      <?php if ($messages): ?>
        <div id="messages">
          <?php print $messages; ?>
        </div>
      <?php endif; ?>
      <div id="page-header">
        <?php if ($title): ?>
          <div class="page-header">
            <h1 class="title"><?php print $title; ?></h1>
          </div>
        <?php endif; ?>
        <?php if ($tabs): ?>
          <div class="tabs">
            <?php print render($tabs); ?>
          </div>
        <?php endif; ?>
        <?php if ($action_links): ?>
          <ul class="action-links">
            <?php print render($action_links); ?>
          </ul>
        <?php endif; ?>
      </div>
    </div>
    <div id="content" class="container">
      <?php print render($page['content']); ?>
    </div>
  </div> <!-- /#main -->
</div> <!-- /#main-wrapper -->

<footer id="footer" class="footer" role="footer">
  <div class="container">
    <?php if ($copyright): ?>
      <small class="copyright pull-left"><?php print $copyright; ?></small>
    <?php endif; ?>
    <small class="pull-right"><a href="#"><?php print t('Back to Top'); ?></a></small>
  </div>
</footer>
