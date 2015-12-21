<section>
    <div class="large-8">
      <img src="<?php echo page('about')->images()->first()->url() ?>" alt="<?php echo page('about')->title()->html() ?>" >
      <h3><?php echo page('about')->title()->html() ?></h3>
      <p><?php echo page('about')->text() ?></p>
    </div>
</section>
