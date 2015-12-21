  <footer id="contact">
    <div class="row small-up-1 medium-up-3 text-center">
      <?php foreach (page('profiles')->images()->limit(2) as $item): ?>
        <div class="column">
          <img src="<?php echo $item->url() ?>" />
          <div><?php echo $item->profile_name() ?></div>
          <div><a href="mailto:<?php echo $item->email() ?>"><?php echo $item->email() ?></a></div>
          <div><a href="tel:<?php echo $item->phone() ?>"><?php echo $item->phone() ?></a></div>
        </div>
      <?php endforeach ?>
      <div class="column">
        Rodvig Bags ApS<br>
        Ågerupvej 109<br>
        4390 Vipperød<br><br>
        CVR: 36702508
      </div>
    </div>
    <div class="row">
      <div class="columns text-center copyright">
        &copy; <?php echo $site->title()->html() ?> <?php echo date("Y") ?>
      </div>
    </div>
  </footer>
  <script src="assets/bower_components/jquery/dist/jquery.js"></script>
  <script src="assets/bower_components/what-input/what-input.js"></script>
  <script src="assets/bower_components/foundation-sites/dist/foundation.js"></script>
  <script src="assets/js/owl.js"></script>
  <script src="assets/js/app.js"></script>
</body>
</html>
