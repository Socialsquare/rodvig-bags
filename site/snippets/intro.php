<div class="section" id="intro">
  <div class="row">
    <div class="columns">
      <h2><?php echo page('intro')->title() ?></h2>
    </div>
    <?php foreach (page('intro')->images() as $item): ?>
      <div class="small-6 large-4 columns">
        <img src="<?php echo $item->url() ?>" alt="<?php echo $item->title()->html() ?>" >
        <h3><?php echo $item->caption()->html() ?></h3>
        <p><?php echo $item->description() ?></p>
      </div>
    <?php endforeach ?>
  </div>
</div>
