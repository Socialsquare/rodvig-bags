<!doctype html>
<html class="no-js" lang="da">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php echo $site->title()->html() ?>
  </title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <?php echo css('assets/css/app.css') ?>
</head>

<body>

  <header>
    <div class="title-bar" data-responsive-toggle="rodvig-menu" data-hide-for="medium">
      <button class="menu-icon" type="button" data-toggle></button>
      <?php snippet('logo') ?>
    </div>

    <div class="top-bar" id="rodvig-menu">
      <div class="row">
        <div class="columns">
          <div class="top-bar-left hide-for-small-only">
              <?php snippet('logo') ?>
          </div>
          <div class="top-bar-right">
            <ul class="dropdown menu" data-dropdown-menu>
              <li><a href="#">About</a></li>
              <li><a href="#bags">Bags</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>
