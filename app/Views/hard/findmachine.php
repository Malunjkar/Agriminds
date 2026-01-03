<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="row">
        <div class="col-sm-6">
            <h2>Manage<b> Machine</b></h2>
        </div>
        <div class="col-sm-6">
            <a href="create-machine"  > 
                <span>Add machine</span></a>

        </div>
    </div>
    </div>
    <!--  -->
    <!-- Button trigger modal -->


     

 

 

        <table class="table table-striped table-hover">
            <thead>
                <tr>

                    <th>Machine Name</th>
                    <th>Machine Type</th>
                    <th>Rates</th>
                    <th>Mobile No</th>
                   
                </tr>
            </thead>
            <tbody>
                <?php foreach ($machine as $machine) { ?>
                    <tr>

                        <td>
                            <?= $machine['machine_name'] ?>
                        </td>
                        <td>
                            <?= $machine['machine_type'] ?>
                        </td>
                        <td>
                            <?= $machine['machine_rates'] ?>
                        </td>
                        <td>
                            <?= $machine['mo_no'] ?>
                        </td>
                        
                        <td>
                            <a href="edit-machine/<?= $machine['machine_id'] ?>"    class="edit"
                                
                                    title="Edit">Edit   </a>
                            <a href="delete-machine/<?= $machine['machine_id'] ?> "  class="delete"
                                 
                                    title="Delete">Delete </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
            
 

</body>

</html>