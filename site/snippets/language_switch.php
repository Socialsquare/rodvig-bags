<?php foreach ($site->languages() as $language): ?>
  <li <?php e($site->language() == $language, 'style=display:none;') ?>>
    <a href="<?php echo $language->url() ?>" class="switcher">
      <svg height="100%" version="1" viewBox="0 0 166 166" width="100%" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
        <?php if ($language == 'en'): ?>
          <path class="rodvig-red" d="M97 69l78 0 0 29 -78 0 0 77 -29 0 0-77 -78 0 0-29 78 0 0-78 29 0 0 78ZM-9 143l52-35 15 0 0 2 -67 44 0-11ZM175 132l0 12 -53-35 18 0 35 23ZM175 12l0 12 -53 35 -14 0 0-3 67-44ZM-9 35l0-12 53 36 -18 0 -35-23Z" />
          <path class="ukblue" d="M-27 109l43 0 -43 28 0-28ZM58 175l-86 0 86-57 0 57ZM196 175l-88 0 0-58 88 58ZM149 109l44 0 0 29 -44-29ZM-27 59l0-28 43 28 -43 0ZM193 30l0 29 -44 0 44-29ZM108 48l0-58 87 0 -87 58ZM58 50l-91-59 91 0 0 59Z" /></g>
        <?php else: ?>
          <path class="rodvig-red" d="M39 105l0 62l-39 0l0 -62l39 0ZM166 165.984l-87 0l0 -60.984l87 0l0 62l0 -1.016ZM79 62l0 -62l87 0l0 62l-87 0ZM39 62l-39 0l0 -62l39 0l0 62Z" />
        <?php endif ?>
      </svg>
    </a>
  </li>
<?php endforeach ?>
