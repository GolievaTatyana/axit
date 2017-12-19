<?php get_header(); ?>
<div class="banner single">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-11 col-sm-offset-1">
        <div class="row flex-parent">
          <?php while ( have_posts() ) : the_post(); ?>
    				<?php the_content(); ?>
    			<?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>
</div>
</header>
<?php get_footer(); ?>
