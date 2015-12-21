<div class="section" id="bags">
  <div class="row">
    <div class="columns">
      <h3><?php echo page('bags')->title() ?></h3>
    </div>
    <?php foreach (page('bags')->images() as $item): ?>
      <div class="medium-6 large-4 columns">
        <img src="<?php echo $item->url() ?>" alt="<?php echo $item->title()->html() ?>" >
        <h5><?php echo $item->caption()->html() ?></h5>
        <p class="pre"><?php echo $item->description() ?></p>
      </div>
    <?php endforeach ?>
  </div>
</div>
