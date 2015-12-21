<!doctype html>
<html class="no-js" lang="da">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php echo $site->title()->html() ?> |
      <?php echo $page->title()->html() ?>
  </title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <?php echo css('assets/css/app.css') ?>
</head>

<body>

  <header>
    <div class="title-bar" data-responsive-toggle="rodvig-menu" data-hide-for="medium">
      <button class="menu-icon" type="button" data-toggle></button>
      <div class="title-bar-title">Menu</div>
    </div>

    <div class="top-bar" id="rodvig-menu">
      <div class="top-bar-left">
          <?php snippet('logo') ?>
      </div>
      <div class="top-bar-right">
        <ul class="dropdown menu" data-dropdown-menu>
          <li class="menu-text">Site Title</li>
          <li><a href="#">Two</a></li>
          <li><a href="#">Three</a></li>
        </ul>
      </div>
    </div>
  </header>
