<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Page Content -->
<div class="container">
  <!-- Contact Form -->
  <h1 class="intro-text text-center">User Registration</h1>
  <form role="form" action="<?php echo site_url('contact/form_submitted') ?>" method = "post">
    <div class="row">

      <div class="col-md-2"></div>

      <div class="col-md-8">

        <h3>Personal Information</h3>
        <div class="input-section">
          <div class="row">
            <div class="col-md-4">
              <label>First Name</label>
              <input autofocus type="text" class="form-control" name = "firstName" id = "firstName" required>
            </div>
            <div class="col-md-4">
              <label>Last Name</label>
              <input type="text" class="form-control" name = "lastName" id = "lastName" required>
            </div>
            <div class="col-md-4">
              <label>Date of Birth</label>
              <input type="date" class="form-control" name="dateOfBirth" id="dateOfBirth" required min="1950-01-01">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label>Street Address</label>
              <input autofocus type="text" class="form-control" name = "street" id = "street">
            </div>
            <div class="col-md-4">
              <label>City</label>
              <input autofocus type="text" class="form-control" name = "city" id = "city">
            </div>
            <div class="col-md-2">
              <label>State</label>
              <select class="form-control" name="state" id="state">
                <option selected value="AL">AL</option>
                <option value="AK">AK</option>
                <option value="AZ">AZ</option>
                <option value="AR">AR</option>
                <option value="CA">CA</option>
                <option value="CO">CO</option>
                <option value="CT">CT</option>
                <option value="DE">DE</option>
                <option value="DC">DC</option>
                <option value="FL">FL</option>
                <option value="GA">GA</option>
                <option value="HI">HI</option>
                <option value="ID">ID</option>
                <option value="IL">IL</option>
                <option value="IN">IN</option>
                <option value="IA">IA</option>
                <option value="KS">KS</option>
                <option value="KY">KY</option>
                <option value="LA">LA</option>
                <option value="ME">ME</option>
                <option value="MD">MD</option>
                <option value="MA">MA</option>
                <option value="MI">MI</option>
                <option value="MN">MN</option>
                <option value="MS">MS</option>
                <option value="MO">MO</option>
                <option value="MT">MT</option>
                <option value="NE">NE</option>
                <option value="NV">NV</option>
                <option value="NH">NH</option>
                <option value="NJ">NJ</option>
                <option value="NM">NM</option>
                <option value="NY">NY</option>
                <option value="NC">NC</option>
                <option value="ND">ND</option>
                <option value="OH">OH</option>
                <option value="OK">OK</option>
                <option value="OR">OR</option>
                <option value="PA">PA</option>
                <option value="RI">RI</option>
                <option value="SC">SC</option>
                <option value="SD">SD</option>
                <option value="TN">TN</option>
                <option value="TX">TX</option>
                <option value="UT">UT</option>
                <option value="VT">VT</option>
                <option value="VA">VA</option>
                <option value="WA">WA</option>
                <option value="WV">WV</option>
                <option value="WI">WI</option>
                <option value="WY">WY</option>
              </select>
            </div>
          </div>
        </div>

        <h3>Create An Account</h3>
        <div class="input-section">
          <div class="row">
            <div class="col-md-6">
              <label>Username</label>
              <input type="text" class="form-control" name = "username" id = "username" required>
            </div>
            <div class="col-md-6">
              <label>Email</label>
              <input type="text" class="form-control" name = "email" id = "email" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label>Password</label>
              <input type="password" class="form-control" name = "password1" id = "password1" required>
            </div>
            <div class="col-md-6">
              <label>Confirm Password</label>
              <input type="password" class="form-control" name = "password2" id = "password2" required>
            </div>
          </div>
        </div>


        <h3>Define Your User Type</h3>
        <div class="input-section">
          <div class="row">
            <div class="col-md-12">
              <label class="define-user-type">User Type: <em>Check All That Apply</em></i></label>
            <label class="checkbox-inline"><input type="checkbox" value="">League Manager</label>
            <label class="checkbox-inline"><input type="checkbox" value="">Coach</label>
            <label class="checkbox-inline"><input type="checkbox" value="">Player</label>
            <label class="checkbox-inline"><input type="checkbox" value="">Parent</label>
          </div>
        </div>
      </div>

      <div class="text-center submit-message-div col-md-12">
        <a type="submit" name = "send-message" class="btn btn-primary">Submit <span class="glyphicon glyphicon-ok"></span> </a>
      </div>
    </div>



    <div class="col-md-2"></div>

    </div>

  </form>
<div class="error-div">
  <p class="error-message text-center" id="error-message"><?php echo $errorMessage; ?></p>
</div>
</div>