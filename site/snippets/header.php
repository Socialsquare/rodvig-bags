<!doctype html>
<html class="no-js" lang="<?php echo $site->language()?>">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php echo $site->title()->html() ?>
  </title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <?php snippet('favicon') ?>
  <?php echo css('assets/css/app.css') ?>
  <link href="assets/bower_components/lightbox2/dist/css/lightbox.min.css" rel="stylesheet">
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
              <li><a href="#bags" class="scroll"><?php echo page('bags')->title() ?></a></li>
              <li><a href="#about" class="scroll"><?php echo page('about')->title() ?></a></li>
              <li><a href="#contact" class="scroll">
                <?php if ($site->language() == 'en'): ?>
                  Contact
                <?php else: ?>
                  Kontakt
                <?php endif ?>
              </a></li>
              <?php snippet('language_switch') ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>
