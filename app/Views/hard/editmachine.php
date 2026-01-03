<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="<?= site_url('/update-machine') ?>">
    <div class="modal-header">
        <h4 class="modal-title">Update Product</h4>
            </div>
 
    <div class="form-group">
        <label>Machine Name</label>
        <input type="text" 
        name="machine_name" id="edit_product" 
        class="form-control"
        value="<?=$machine['machine_name']?>" 
        required>
    </div>
    <div class="form-group">
        <label>Machine Type</label>
        <input type="text" name="machine_type" id="edit_category"
         class="form-control" 
         value="<?=$machine['machine_type']?>" 
         required>
    </div>
    <div class="form-group">
        <label>Rates</label>
        <input type="text" name="machine_rates" id="edit_category"
         class="form-control" 
         value="<?=$machine['machine_rates']?>" 
         required>
    </div>
    <div class="form-group">
        <label>Mobile No</label>
        <input type="number" name="mo_no" id="edit_price"
         class="form-control" 
         value="<?=$machine['mo_no']?>" 
         required>
         <input type="hidden" name="machine_id" 
        id="edit_id" 
        value="<?=$machine['machine_id']?>"
        required>
    </div>
    
    </div>






    <div class="modal-footer">
        <input type="button" class="btn btn-default" data-bs-dismiss="modal" value="Cancel">
        <input type="submit" class="btn btn-info" value="Update">
    </div>
</form>
</body>
</html>