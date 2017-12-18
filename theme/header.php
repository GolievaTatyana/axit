<?php $templateUri = get_template_directory_uri();?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php echo $templateUri ?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $templateUri ?>/style.css">
  <link rel="stylesheet" href="<?php echo $templateUri ?>/css/jquery.mCustomScrollbar.css">
  <link rel="stylesheet" href="<?php echo $templateUri ?>/font-awesome/css/font-awesome.min.css">
  <link rel="shortcut icon" href="axit.ico" type="image/x-icon">
  <title>axit</title>
  <?php wp_head();?>
</head>
<body>
  <header id="header">
    <div class="main-nav">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 col-md-10 col-md-offset-1">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

              <a class="navbar-brand" href="#">ax<span>it</span></a>
            </div>
            <?php
              wp_nav_menu( array(
                'theme_location'  => 'primary',
                'menu'            => 'primary',
                'container'       => 'div',
                'container_class' => 'collapse navbar-collapse top-menu pull-right',
                'container_id'    => 'bs-example-navbar-collapse-1',
                'menu_class'      => 'nav navbar-nav',
                )
              );
            ?>
          </div>
        </div>
      </div>
    </div>
