<?php foreach($site->languages() as $language): ?>
  <li<?php e($site->language() == $language, ' style=display:none;') ?>>
    <a href="<?php echo $language->url() ?>">
      <?php echo html(strtoupper($language->code())) ?>
    </a>
  </li>
<?php endforeach ?>
