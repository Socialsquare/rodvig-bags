<div class="owl-carousel">
  <?php foreach(page('carousel')->images() as $item): ?>
    <div class="item">
      <img src="<?php echo $item->url() ?>" alt="<?php echo $item->title()->html() ?>" >
      <div class="owl-text">
        <div class="row">
          <div class="columns">
            <h3><?php echo $item->caption()->html() ?></h3>
            <p><?php echo $item->description() ?></p>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach  ?>
</div>
