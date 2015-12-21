<div class="owl-carousel">
  <?php foreach(page('carousel')->images()->sortBy('sort', 'asc') as $item): ?>
    <div class="item">
      <div class="background-image" style="background-image: url('<?php echo $item->url()?>')">
        <div class="owl-text">
          <div class="row">
            <div class="columns">
              <h1><?php echo $item->caption() ?></h1>
              <div></div>
              <p><?php echo $item->description() ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach  ?>
</div>
