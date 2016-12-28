<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Page Content -->
<div class="container">
  <!-- Contact Form -->
  <div class="home-login-div">
    <h1 class="intro-text text-center">Create New Team</h1>
    <form role="form" action="<?php echo site_url('contact/form_submitted') ?>" method = "post">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 home-login-border">


          <!-- 1st Row -->
          <div class="row input-row">
            <div class="col-md-8">
              <label>Team Name</label>
              <input autofocus type="text" class="form-control home-login-input" name = "teamName" id = "teamName" required>
            </div>
            <div class="col-md-4">
              <label>Sport</label>
              <select class="form-control" id="sportType" required>
                <option>Baseball</option>
                <option>Basketball</option>
                <option>Cheerleading</option>
                <option>Hockey</option>
                <option>Lacrosse</option>
                <option>Soccer</option>
                <option>Tennis</option>
                <option>Volleyball</option>
              </select>
            </div>
          </div>

          <!-- 2nd row -->
          <div class="row input-row">
            <div class="col-md-4">
              <label>Start Month</label>
              <select class="form-control" id="startMonth" required>
                <option>January</option>
                <option>February</option>
                <option>March</option>
                <option>April</option>
                <option>May</option>
                <option>June</option>
                <option>July</option>
                <option>August</option>
                <option>September</option>
                <option>October</option>
                <option>November</option>
                <option>December</option>
              </select>
            </div>
            <div class="col-md-4">
              <label>Start Year</label>
              <input type="text" class="form-control " name = "startYear" id = "startYear" required>
            </div>
            <div class="col-md-4">
              <label>City</label>
              <input type="text" class="form-control " name = "teamCity" id = "teamCity" required>
            </div>
          </div>


          <!-- 3rd row -->
          <div class="row input-row">
            <div class="col-md-12 radio">
              <label>Will You Be The Primary Couch?</label>
              <label class="radio-inline"><input checked type="radio" name="primaryCoach" value="yes">Yes</label>
              <label class="radio-inline"><input type="radio" name="primaryCoach" value="no">No</label>
            </div>
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