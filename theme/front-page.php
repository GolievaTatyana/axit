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

<section id="features">
  <?php if ($features): ?>
    <?php foreach ($features as $key => $item): ?>
      <?php $meta_article_class = get_post_meta( $item->ID, 'article_class', true ); ?>
      <?php $thumbnailUrl = get_the_post_thumbnail_url($item, full);?>
      <article class="feature<?php echo $meta_article_class ?>">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12 col-md-10 col-md-offset-1">
              <div class="row flex-parent">
                <?php if ($key == 0):?>
                  <div class="col-sm-4 col-sm-push-8 flex-child">
                    <div class="flex-content">
                      <img src="<?php echo $thumbnailUrl; ?>" alt="" class="img-responsive">
                    </div>
                  </div>
                  <div class="col-sm-2 col-sm-pull-4 flex-child">
                    <div class="flex-content tabs">
                      <ul class="nav nav-tabs">
                        <li class="active tab"><a href="#tab-1" data-toggle="tab">tab 1</a></li>
                        <li class="tab"><a href="#tab-2" data-toggle="tab" class="tab">tab 2</a></li>
                        <li class="tab"><a href="#tab-3" data-toggle="tab" class="tab">tab 3</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-sm-6 col-sm-pull-4 flex-child">
                    <div class="flex-content">
                      <div class="tab-content">
                        <?php
                        $args = array(
                          'post_parent' => $item->ID,
                          'post_type' => 'page',
                          'post_status' => 'publish',
                        );
                        $children = get_children( $args );
                        ?>
                        <?php $counter = 0; ?>
                        <?php foreach ( $children as $childKey => $child ): ?>
                          <?php $meta_tab_id = get_post_meta( $child->ID, 'tab_id', true ); ?>
                          <?php if ($counter == 0): ?>
                          <div class="tab-pane active fade in" id="tab-<?php echo $meta_tab_id ?>">
                          <?php else: ?>
                          <div class="tab-pane fade" id="tab-<?php echo $meta_tab_id ?>">
                          <?php endif; ?>
                            <h3><?php echo $child->post_title; ?></h3>
                            <?php echo apply_filters('the_content',$child->post_content); ?>
                          </div>
                          <?php $counter++; ?>
                        <?php endforeach; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endif; ?>
                <?php if ($key !== 0 && $key % 2): ?>
                  <div class="col-sm-12 col-md-6 flex-child">
                    <div class="flex-content">
                      <img src="<?php echo $thumbnailUrl; ?>" alt="" class="img-responsive main-img">
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-6 flex-child">
                    <div class="flex-content">
                      <h3><?php echo $item->post_title; ?></h3>
                      <div class="line"></div>
                      <p><?php echo $item->post_content; ?></p>
                      <?php
                      $args = array(
                        'post_parent' => $item->ID,
                        'post_type' => 'page',
                        'post_status' => 'publish',
                      );
                      $children = get_children( $args );
                      ?>
                      <ul class="arrows">
                        <?php foreach ($children as $child): ?>
                        <?php $meta_img_style = get_post_meta( $child->ID, 'img_style', true ); ?>
                        <li>
                          <div class="round"></div>
                          <div class="info">
                            <p><?php echo $item->post_title; ?></p>
                            <p><?php echo $item->post_content; ?></p>
                          </div>
                        </li>
                        <?php endforeach; ?>
                      </ul>
                    </div>
                  </div>
                  <?php elseif ($key !== 0 && $key % 3): ?>
                  <div class="col-sm-6 col-sm-push-6 flex-child">
                    <div class="flex-content">
                      <img src="<?php echo $thumbnailUrl; ?>" alt="" class="img-responsive main-img">
                    </div>
                  </div>
                  <div class="col-sm-6 col-sm-pull-6 flex-child">
                    <div class="flex-content">
                      <h3><?php echo $item->post_title; ?></h3>
                      <div class="line"></div>
                      <?php echo apply_filters('the_content', $item->post_content);  ?>
                    </div>
                  </div>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </article>
    <?php endforeach; ?>
  <?php endif; ?>
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

<?php if ($pricing): ?>
  <section id="pricing">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
          <div class="row text-center caption">
            <h2>Pricing options</h2>
            <div class="line"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </div>
          <div class="row content flex-parent">
            <?php foreach ($pricing as $key => $item): ?>
              <?php $meta_value = get_post_meta( $item->ID, 'price', true ); ?>
              <div class="col-sm-4 text-center options">
                <div class="header">
                  <h3><?php echo $item->post_title; ?></h3>
                </div>
                <div class="main">
                  <p><span>$</span><?php echo $meta_value; ?></p>
                  <p><?php echo $item->post_content; ?></p>
                </div>
                <div class="footer"><p><?php echo $item->post_excerpt; ?></p></div>
                <ul class="description">
                  <div class="panel-group" id="accordion">
                    <?php
                    $args = array(
                      'post_parent' => $item->ID,
                      'post_type' => 'page',
                      'post_status' => 'publish',
                    );
                    $children = get_children( $args );
                    ?>
                    <?php foreach ($children as $child): ?>
                      <?php $meta_id_atribute = get_post_meta( $child->ID, 'id_atribute', true ); ?>
                      <?php $meta_accordion_number = get_post_meta( $child->ID, 'accordion_number', true ); ?>
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion<?php echo $meta_accordion_number; ?>" href="#collapse<?php echo $meta_id_atribute; ?>"><?php echo $child->post_title; ?></a>
                          </h4>
                        </div>
                        <div id="collapse<?php echo $meta_id_atribute; ?>" class="panel-collapse collapse">
                          <div class="panel-body">
                            <p><?php echo $child->post_content; ?></p>
                          </div>
                        </div>
                      </div>
                    <?php endforeach; ?>
                  </div>
                </ul>
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

<?php $contact_section = $contact[0];?>
<section id="contact">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 col-md-10 col-md-offset-1">
        <div class="row text-center caption">
          <h2><?php echo $contact_section->post_title; ?></h2>
          <div class="line"></div>
          <p><?php echo $contact_section->post_excerpt; ?></p>
        </div>
        <div class="row flex-parent">
          <div class="col-sm-12 col-md-6">
            <form role="form">
              <div class="form-group">
                <input type="text" class="form-control" id="name" placeholder="Name">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" id="email" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="subgect" class="form-control" id="subgect" placeholder="Subgect">
              </div>
            </form>
          </div>
          <div class="col-sm-12 col-md-6 area">
            <div class="form-group">
              <textarea class="form-control" placeholder="Message"></textarea>
            </div>
          </div>
        </div>
        <div class="row submit">
          <button type="submit" class="btn btn-default center-block">Send Message</button>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
