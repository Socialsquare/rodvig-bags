<h2><?php echo page('bags')->title() ?></h2>


  <?php foreach(page('bags')->children()->visible()->limit(3) as $project): ?>

    <h3><?php echo $project->title()->html() ?></h3>
    <p><?php echo $project->text()->excerpt(160) ?></p>
    <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
      <img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" >
    <?php endif ?>

  <?php endforeach ?>
