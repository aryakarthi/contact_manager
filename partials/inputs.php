<div class="mb-3">
  <label for="name" class="form-label">Name</label>
  <input type="text" name="name" id="name" class="form-control <?php echo $nameErr ? 'is-invalid' : null; ?>" placeholder="Enter Name" value="<?php echo $name; ?>">
  <span class="invalid-feedback"><?php echo $nameErr; ?></span>
</div>

<div class="mb-3">
  <label for="email" class="form-label">Email</label>
  <input type="email" name="email" id="email" class="form-control <?php echo $emailErr ? 'is-invalid' : null; ?>" placeholder="Enter Email" value="<?php echo $email; ?>">
  <span class="invalid-feedback"><?php echo $emailErr; ?></span>
</div>

<div class="mb-3">
  <label for="mobile" class="form-label">Mobile No</label>
  <input type="text" name="mobile" id="mobile" class="form-control <?php echo $mobileErr ? 'is-invalid' : null; ?>" placeholder="Enter Mobile No" value="<?php echo $mobile; ?>">
  <span class="invalid-feedback"><?php echo $mobileErr; ?></span>
</div>

<div class="mb-3">
  <label for="city" class="form-label">City</label>
  <input type="text" name="city" id="city" class="form-control <?php echo $cityErr ? 'is-invalid' : null; ?>" placeholder="Enter City" value="<?php echo $city; ?>">
  <span class="invalid-feedback"><?php echo $cityErr; ?></span>
</div>

<input type="reset" name="reset" class="btn btn-danger me-3" value="Reset">