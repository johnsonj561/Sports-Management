<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Page Content -->
<div class="container">
  <!-- Contact Form -->
  <div class="home-login-div">
    <h1 class="intro-text text-center">Drop A Message</h1>
    <form role="form" action="<?php echo site_url('contact/form_submitted') ?>" method = "post">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 home-login-border">
          <div class="col-md-4">
            <label>Name</label>
            <input autofocus type="text" class="form-control home-login-input" name = "name" id = "name" required>
          </div>
          <div class="col-md-4">
            <label>Email</label>
            <input type="email" class="form-control home-login-input" name = "email" id = "email" required>
          </div>
          <div class="col-md-4">
            <label>Telephone</label>
            <input type="telephone" class="form-control home-login-input" name = "telephone" id = "telephone" required>
          </div>
          <div class="col-md-12">
            <label>Email</label>
            <textarea class="form-control" rows="6" name = "message" id = "message" required></textarea>
          </div>
          <div class="text-center submit-message-div col-md-12">
            <button type="submit" name = "send-message" class="btn btn-default">Submit <span class="fa-mail"></span></button>
          </div>
        </div>
        <div class="col-md-2"></div>
      </div>
    </form>
    <div class="error-div">
      <p class="error-message text-center" id="error-message"><?php echo $errorMessage; ?></p>
    </div>
  </div>
</div>
</div>