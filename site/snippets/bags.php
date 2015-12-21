<div class="section" id="bags">
  <div class="row">
    <div class="column">
      <h3><?php echo page('bags')->title() ?></h3>
    </div>
  </div>
  <div class="row medium-up-2 large-up-3">
    <?php foreach (page('bags')->images()->sortBy('sort', 'asc') as $item): ?>
      <div class="column">
        <img src="<?php echo $item->url() ?>" alt="<?php echo $item->title()->html() ?>" >
        <h5><?php echo $item->caption()->html() ?></h5>
        <p class="pre"><?php echo $item->description() ?></p>
      </div>
    <?php endforeach ?>
  </div>
</div>
