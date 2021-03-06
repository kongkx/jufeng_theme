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
<header id="header" class="header" role="header">
  <div class="topbar">
    <div class="container">
      <div class="pull-left">
        <?php print render($page['topbar_left']); ?>
      </div>
      <div class="pull-right hidden-xs">
        <?php print render($page['topbar_right']); ?>
        <?php if(!empty($social_settings)): ?>
          <ul class="social-links">
            <?php foreach($social_settings as $key => $setting): ?>
              <li class="<?php print $key; ?>">
                <i class="icon"></i>
                <div class="inner">
                  <?php print $setting; ?>
                </div>
              </li>
            <?php endforeach;?>
          </ul>
        <?php endif; ?>
      </div>

    </div>
  </div>
  <nav class="navbar navbar-default" role="navigation">
    <div class="container">
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
            <?php if ($site_slogan): ?>
              <span class="site-slogan"><?php print $site_slogan; ?></span>
            <?php endif; ?>
          </a>
        <?php endif; ?>
      </div> <!-- /.navbar-header -->

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navbar-collapse">
        <?php if ($main_menu): ?>
          <ul id="main-menu" class="menu nav navbar-nav navbar-right">
            <?php print render($main_menu); ?>
          </ul>
        <?php endif; ?>
      </div><!-- /.navbar-collapse -->
    </div>
  </nav><!-- /.navbar -->
</header>

<div id="main-wrapper">
  <div id="top">
    <?php print render($page['top']);?>
  </div>
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
    <div id="content">
      <div class="container">
        <?php print render($page['content']); ?>
      </div>
    </div>
  </div> <!-- /#main -->
</div> <!-- /#main-wrapper -->

<footer id="footer" class="footer" role="footer">
  <div class="container">
  <div class="row">
    <?php if (!empty($page['footer_left'])): ?>
    <div class="col-md-3">
      <div id="footer-left">
        <?php print render($page['footer_left']); ?>
      </div>
    </div>
    <div class="col-md-9">
      <div id="footer-right">
    <?php else: ?>
    <div class="col-md-12">
      <div id="footer-right">
    <?php endif; ?>
        <?php print render($page['footer_right']); ?>
        <div class="bottom-block">
          <?php if ($copyright): ?>
            <small class="copyright pull-left"><?php print $copyright; ?></small>
          <?php endif; ?>
          <?php if (!empty($social_settings)): ?>
            <ul class="social-links">
              <?php foreach ($social_settings as $key => $setting): ?>
                <li class="<?php print $key; ?>">
                  <i class="icon fa-star"></i>
                  <div class="inner">
                    <?php print $setting; ?>
                  </div>
                </li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
    </div>
</footer>
