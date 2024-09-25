<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
</head>
<body>
<div class="container mt-3">
  <h2>Add User</h2>
  <?php flash_alert(); ?>
  <form action="<?=site_url('product/add');?>" method="POST">
    <div class="mb-3 mt-3">
      <label for="kdpm_last_name">LastName:</label>
      <input type="text" class="form-control" id="kdpm_last_name" name="kdpm_last_name">
    </div>
    <div class="mb-3">
    <label for="kdpm_first_name">FirstName:</label>
    <input type="text" class="form-control" id="kdpm_first_name" name="kdpm_first_name">
    </div>
    <div class="mb-3">
    <label for="kdpm_email">Email:</label>
    <input type="text" class="form-control" id="kdpm_email" name="kdpm_email">
    </div>
    <div class="mb-3">
    <label for="kdpm_gender">Gender:</label>
    <input type="text" class="form-control" id="kdpm_gender" name="kdpm_gender">
    </div>
    <div class="mb-3">
    <label for="kdpm_address">Address:</label>
    <input type="text" class="form-control" id="kdpm_address" name="kdpm_address">
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
    <a class="btn btn-primary mt-1" role="button" href="<?=site_url('product/display')?>">Show Users</a>
  </form>
</div>
</body>
</html>