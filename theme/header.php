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

            <div class="collapse navbar-collapse top-menu pull-right" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a class="active" href="#features">Features</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#pricing">Pricing</a></li>
                <li><a href="#reviews">Reviews</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="banner">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-11 col-sm-offset-1">
            <div class="row flex-parent">
              <div class="col-sm-12 col-md-6 slogan">
                <h1>ax<span>it</span></h1>
                <h2>Modern axure template for beautiful prototypes</h2>
                <div class="line"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                <a href="#" class="download">Download</a>
              </div>
              <div class="col-sm-12 col-md-6 flex-child">
                <div class="flex-content form-content">
                  <h3>Try Your <span>FREE</span> Trial Today</h3>
                  <form role="form">
                    <div class="form-group">
                      <input type="text" class="form-control" id="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-default">Get Started</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
