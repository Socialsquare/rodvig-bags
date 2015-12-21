<div class="row">
  <div class="columns">
    <h2 class="bags"><?php echo page('bags')->title() ?></h2>
  </div>
  
  <?php foreach (page('bags')->children()->visible()->limit(3) as $project): ?>
    <div class="small-6 large-4 columns">
      <h3><?php echo $project->title()->html() ?></h3>
      <p><?php echo $project->text()->excerpt(160) ?></p>
      <?php if ($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
        <img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" >
      <?php endif ?>
    </div>
  <?php endforeach ?>
</div>
