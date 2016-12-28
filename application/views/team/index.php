<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Page Content -->
<div class="container">

  <!-- Service Panels -->
  <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
  <div class="row">
    <div class="col-lg-12">
      <h2 class="page-header">Coach Services</h2>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <span class="fa-stack fa-5x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-plus fa-stack-1x fa-inverse"></i>
          </span>
        </div>
        <div class="panel-body">
          <h4>Create A Team</h4>
          <p>Establish a new team and join an active league.</p>
          <a href="<?php echo site_url('team/build-team-form') ?>" class="btn btn-primary">Learn More</a>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <span class="fa-stack fa-5x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
          </span>
        </div>
        <div class="panel-body">
          <h4>Team Management</h4>
          <p>Edit rosters, view schedules, and make changes.</p>
          <a href="#" class="btn btn-primary">Learn More</a>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <span class="fa-stack fa-5x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-comment fa-stack-1x fa-inverse"></i>
          </span>
        </div>
        <div class="panel-body">
          <h4>Message Center</h4>
          <p>Communicate with your players and their families.</p>
          <a href="#" class="btn btn-primary">Learn More</a>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <span class="fa-stack fa-5x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-play fa-stack-1x fa-inverse"></i>
          </span>
        </div>
        <div class="panel-body">
          <h4>Training zone</h4>
          <p>Upload training videos and tutorials for your team to view.</p>
          <a href="#" class="btn btn-primary">Learn More</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Service List -->
  <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ 
  <div class="row">
    <div class="col-lg-12">
      <h2 class="page-header">Service List</h2>
    </div>
    <div class="col-md-4">
      <div class="media">
        <div class="pull-left">
          <span class="fa-stack fa-2x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-tree fa-stack-1x fa-inverse"></i>
          </span> 
        </div>
        <div class="media-body">
          <h4 class="media-heading">Service One</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
        </div>
      </div>
      <div class="media">
        <div class="pull-left">
          <span class="fa-stack fa-2x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-car fa-stack-1x fa-inverse"></i>
          </span> 
        </div>
        <div class="media-body">
          <h4 class="media-heading">Service Two</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
        </div>
      </div>
      <div class="media">
        <div class="pull-left">
          <span class="fa-stack fa-2x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-support fa-stack-1x fa-inverse"></i>
          </span> 
        </div>
        <div class="media-body">
          <h4 class="media-heading">Service Three</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="media">
        <div class="pull-left">
          <span class="fa-stack fa-2x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-database fa-stack-1x fa-inverse"></i>
          </span> 
        </div>
        <div class="media-body">
          <h4 class="media-heading">Service Four</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
        </div>
      </div>
      <div class="media">
        <div class="pull-left">
          <span class="fa-stack fa-2x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-bomb fa-stack-1x fa-inverse"></i>
          </span> 
        </div>
        <div class="media-body">
          <h4 class="media-heading">Service Five</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
        </div>
      </div>
      <div class="media">
        <div class="pull-left">
          <span class="fa-stack fa-2x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-bank fa-stack-1x fa-inverse"></i>
          </span> 
        </div>
        <div class="media-body">
          <h4 class="media-heading">Service Six</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="media">
        <div class="pull-left">
          <span class="fa-stack fa-2x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-paper-plane fa-stack-1x fa-inverse"></i>
          </span> 
        </div>
        <div class="media-body">
          <h4 class="media-heading">Service Seven</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
        </div>
      </div>
      <div class="media">
        <div class="pull-left">
          <span class="fa-stack fa-2x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-space-shuttle fa-stack-1x fa-inverse"></i>
          </span> 
        </div>
        <div class="media-body">
          <h4 class="media-heading">Service Eight</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
        </div>
      </div>
      <div class="media">
        <div class="pull-left">
          <span class="fa-stack fa-2x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-recycle fa-stack-1x fa-inverse"></i>
          </span> 
        </div>
        <div class="media-body">
          <h4 class="media-heading">Service Nine</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- /.row -->
