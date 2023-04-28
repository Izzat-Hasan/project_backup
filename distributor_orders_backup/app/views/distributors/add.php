<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="d-flex justify-content-between mb-3">
    <a href="<?php echo URLROOT; ?>/distributors" class="btn btn-light">Back</a>
  </div>
  <div class="card card-body bg-light mt-5 mx-auto" style="max-width: 600px;">
    <h2 class="text-center mb-4">Request Help:</h2>
    <form action="<?php echo URLROOT; ?>/distributors/add" method="post">
      <div class="form-group">
        <label for="distributor_name">Name and situation: <sup>*</sup></label>
        <input type="text" name="distributor_name" class="form-control form-control-lg <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name_err']; ?>">
        <span class="invalid-feedback"><?php echo $data['distributor_name']; ?></span>
      </div>
      <div class="form-group">
        <label for="distributor_email">Email: <sup>*</sup></label>
        <input name="distributor_email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email_err']; ?>">
        <span class="invalid-feedback"><?php echo $data['distributor_email']; ?></span>
      </div>
      <div class="form-group">
        <label for="distributor_number">Number: <sup>*</sup></label>
        <input type="text" name="distributor_number" class="form-control form-control-lg <?php echo (!empty($data['number_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['number_err']; ?>">
        <span class="invalid-feedback"><?php echo $data['distributor_number']; ?></span>
      </div>

      <div class="form-group d-flex justify-content-end mt-4">
        <input type="submit" class="btn btn-success px-5" value="Submit">
      </div>
    </form>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
<style>
  .form-group input[type="submit"] {
    margin: 0 auto;
    display: block;
  }

  .btn {
    padding: 10px;
    margin: 10px;
  }
</style>