<?php foreach(page('carousel')->images() as $item): ?>
  <h3><?php echo $item->caption()->html() ?></h3>
  <p><?php echo $item->description()->excerpt(160) ?></p>
  <img src="<?php echo $item->url() ?>" alt="<?php echo $item->title()->html() ?>" >
<?php endforeach  ?>
