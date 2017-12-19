<?php $templateUri = get_template_directory_uri();?>

<footer id="footer">
  <div class="container-fluid">
    <div class="row text-center">
      <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
        <div class="row center-block fa-bar">
          <?php
            if ( function_exists('dynamic_sidebar') )
              dynamic_sidebar('brandbar');
          ?>
        </div>
        <div class="row text-center">
          <p>&copy; 2015 Axure Theme</p>
        </div>
      </div>
    </div>
  </div>
</footer>

<script src="<?php echo $templateUri ?>/js/jquery.js"></script>
<script src="<?php echo $templateUri ?>/js/classie.js"></script>
<script src="<?php echo $templateUri ?>/js/bootstrap.min.js"></script>
<script src="<?php echo $templateUri ?>/js/jquery.mCustomScrollbar.js"></script>
<script src="<?php echo $templateUri ?>/js/main.js"></script>
<?php wp_footer(); ?>
</body>
</html>
