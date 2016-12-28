<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dev Sports</title>
    <!-- Bootstrap Core CSS -->
    <link href="/assetts/css/bootstrap.yeti.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/assetts/css/modern-business.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="/assetts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url() ?>">Dev Sports</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="about.html">About</a>
            </li>
            <li>
              <a href="services.html">Services</a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li>
                  <a href="#">Coaches</a>
                </li>
                <li>
                  <a href="#">Players</a>
                </li>
                <li>
                  <a href="#">Families</a>
                </li>
                <li>
                  <a href="#">League Managers</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="<?php echo site_url('contact/form') ?>">Contact</a>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>
