<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>
    


<form method="post" action="<?= site_url('/add-machine') ?>">

<div class="modal-body">
    <div class="form-group">
        <label>machine_name</label>
        <input type="text" name="machine_name" id="machine_name" class="form-control" required>
    </div>
    <div class="form-group">
        <label>machine_type</label>
        <input type="text" name="machine_type" id="machine_type" class="form-control" required>
    </div>
    <div class="form-group">
        <label>machine_rates</label>
        <input type="number" name="machine_rates" id="machine_rates" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Mobile No</label>
        <input type="number" name="mo_no" id="mo_no" class="form-control" required>
    </div>

</div>





<div class="modal-footer">
    <input type="button" class="btn btn-default" data-bs-dismiss="modal" value="Cancel">
    <input type="submit" class="btn btn-info" value="Save">

</div>
</form> 

</body>
</html>