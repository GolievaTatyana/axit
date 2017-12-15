<?php $templateUri = get_template_directory_uri();?>

<?php
$args = array(
  'sort_column' => 'menu_order',
  'hierarchical' => 0,
  'meta_key' => 'add_to',
);
$pagesForSections = get_pages($args);

$banner = [];
$brand_bar = [];
$features = [];
$about = [];
$pricing = [];
$reviews = [];
$free = [];
$contact = [];
// $counter  = 0;

foreach ($pagesForSections as $page) {
  switch ($page->meta_value) {
    case 'banner':
		$banner[] = $page;
		break;
		case 'brand_bar':
		$brand_bar[] = $page;
		break;
		case 'features':
		$features[] = $page;
		break;
		case 'about':
		$about[] = $page;
		break;
		case 'pricing':
		$pricing[] = $page;
		break;
		case 'reviews':
		$reviews[] = $page;
		break;
		case 'free':
		$free[] = $page;
		break;
		case 'contact':
		$contact[] = $page;
		break;
	}

}
?>

<?php get_header(); ?>

<?php if ($banner): ?>
  <div class="banner">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-11 col-sm-offset-1">
          <div class="row flex-parent">
            <?php foreach ($banner as $key => $item): ?>
              <?php $meta_value = get_post_meta( $item->ID, 'style', true ); ?>
              <div class="col-sm-12 col-md-6 <?php echo $meta_value; ?>">
              <?php if ($key == 0): ?>
                <h1>ax<span>it</span></h1>
                <h2><?php echo $item->post_title; ?></h2>
                <div class="line"></div>
                <p><?php echo $item->post_content; ?></p>
                <a href="#" class="download"><?php echo $item->post_excerpt; ?></a>
                <?php else: ?>
                  <div class="flex-content form-content">
                    <h3>Try Your <span>FREE</span> Trial Today</h3>
                    <?php echo apply_filters('the_content', $item->post_content);  ?>
                  </div>
              <?php endif; ?>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>
</header>

<?php $brand = $brand_bar[0];?>
<section id="brand-bar">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 col-md-10 col-md-offset-1">
        <div class="row flex-parent">
          <div class="col-sm-12 col-md-4">
            <h3><?php echo $brand->post_title; ?></h3>
            <p><?php echo $brand->post_content; ?></p>
          </div>
          <div class="col-sm-12 col-md-8 flex-child">
            <div class="flex-content fa-bar">
              <?php
                if ( function_exists('dynamic_sidebar') )
                  dynamic_sidebar('brandbar');
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php if ($about): ?>
  <section id="about">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
          <div class="row text-center caption">
            <h2>Why this is awesome</h2>
            <div class="line"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </div>
          <div class="row content">
            <?php foreach ($about as $key => $item): ?>
              <?php $thumbnailUrl = get_the_post_thumbnail_url($item, full);?>
              <div class="col-sm-4 text-center">
                <div class="round">
                  <img src="<?php echo $thumbnailUrl; ?>" alt="design" class="img-responsive">
                </div>
                <h3><?php echo $item->post_title; ?></h3>
                <p><?php echo $item->post_content; ?></p>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>

<?php if ($reviews): ?>
  <section id="reviews">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
          <div class="row text-center caption">
            <h2>What our customers are saying</h2>
            <div class="line"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </div>
          <div class="row content">
            <?php foreach ($reviews as $key => $item): ?>
              <div class="col-sm-4 text-center padd">
                <div class="saying">
                  <p><?php echo $item->post_content; ?></p>
                </div>
                <div class="flex-parent description">
                  <div class="photo-round" style="background-image: url(<?php echo $templateUri ?>/img/jeremy.png)"></div>
                  <div class="photo-desc">
                    <h3><?php echo $item->post_title; ?></h3>
                    <p><?php echo $item->post_excerpt; ?></p>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>

<?php $free_section = $free[0];?>
<section id="free">
  <div class="container-fluid">
    <div class="row text-center caption">
      <h2><?php echo $free_section->post_title; ?></h2>
      <div class="line"></div>
      <p><?php echo $free_section->post_content; ?></p>
      <a href="#" class="download">Download</a>
    </div>
  </div>
</section>

<?php get_header(); ?>
