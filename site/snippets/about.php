<div class="section" id="about">
  <div class="row">
    <div class="columns">
      <h3><?php echo page('about')->title()->html() ?></h3>
    </div>
    <div class="medium-6 columns">
      <p><?php echo page('about')->text() ?></p>
    </div>
    <div class="medium-6 columns">
      <img src="<?php echo page('about')->images()->first()->url() ?>" alt="<?php echo page('about')->title()->html() ?>" >
    </div>
  </div>
</div>
