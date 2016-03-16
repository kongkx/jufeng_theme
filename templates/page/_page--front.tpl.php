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
          微交易服务热线：<span class="em">440-7889-222</span>
          <button class="btn btn-primary btn-sm">微交易开户</button>
        </div>
        <div class="pull-right">
          <ul class="menu">
            <li>软件下载</li>
            <li>赛事活动</li>
            <li>新闻中心</li>
          </ul>
          <ul class="social-links">
            <li>
              <i class="icon fa-star"></i>
              <div class="inner">
                Lorem ipsum dolor sit amet.
              </div>
            </li>
            <li>
              <i class="icon fa-star"></i>
              <div class="inner">
                Lorem ipsum dolor sit.
              </div>
            </li>
            <li>
              <i class="icon fa-star"></i>
              <div class="inner">
                Lorem ipsum dolor sit amet.
              </div>
            </li>
          </ul>
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
        <?php print render($page['content']); ?>
    </div>
  </div> <!-- /#main -->
</div> <!-- /#main-wrapper -->

<footer id="footer" class="footer" role="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div id="qrcode">
          <div class="qrcode">
            <img src="http://placehold.it/130x130" alt="" class="center-block">
            <p class="caption">扫一扫，关注“微交易平台”公众号</p>
          </div>
          <div class="qrcode">
            <img src="http://placehold.it/130x130" alt="" class="center-block">
            <p class="caption">扫一扫，微交易手机注册开户</p>
          </div>
        </div>
      </div>
      <div class="col-md-9">
        <?php print render($page['footer']); ?>
        <?php if ($copyright): ?>
          <small class="copyright pull-left"><?php print $copyright; ?></small>
        <?php endif; ?>
      </div>
    </div>

  </div>
</footer>
