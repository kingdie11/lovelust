<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="containner">
        <div class="row mx-auto mt-5">
            <div class="col-md-8">
            <a class="btn btn-primary mb-2" role="button" href="<?=site_url('product/add')?>">Add User</a>
            <?php flash_alert(); ?>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                    
                    <?php foreach($prod as $p): ?>
                    <tr>
                        <td><?=$p['id']?></td>
                        <td><?=$p['kdpm_last_name']?></td>
                        <td><?=$p['kdpm_first_name']?></td>
                        <td><?=$p['kdpm_email']?></td>
                        <td><?=$p['kdpm_gender']?></td>
                        <td><?=$p['kdpm_address']?></td>
                        <td>
                            <a href="<?=site_url('product/update/'.$p['id']);?>">Update</a> |
                            <a href="<?=site_url('product/delete/'.$p['id']);?>">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>