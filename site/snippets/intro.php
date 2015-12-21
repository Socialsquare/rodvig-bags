<div class="section" id="intro">
  <div class="row">
    <?php foreach (page('intro')->images() as $item): ?>
      <div class="medium-6 large-4 columns">
        <img src="<?php echo $item->url() ?>" alt="<?php echo $item->title()->html() ?>" >
        <h5><?php echo $item->caption()->html() ?></h5>
        <p class="pre"><?php echo $item->description() ?></p>
      </div>
    <?php endforeach ?>
  </div>
</div>
