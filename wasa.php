<?php
    include_once "~/../php-includes/header.php";
?>


           
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="min-height: 879.062px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Salary Structure</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <!-- content goes here -->
            <a type="button" href="salarystructure-add-form.php" class="btn  btn-primary">Add info</a>
            <br>
            <br>

            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header border-0">
                        </div>

                        <div class="card-body table-responsive p-0">
                        <table class="table table-striped table-valign-middle">
                            <thead>

                            <tr>
                                <th>Category</th>
                                <th>Name</th>
                                <th>Residency</th>
                                <th>License</th>
                                <th>Salary</th>
                                <th>More</th>
                            </tr>

                            </thead>

                            <tbody>

                            <?php
                                require "dbconnection.php";
                                $sql = "SELECT * from salarystructure";
                                $res = $conn->query($sql);

                                if(!$res)
                                    echo "no data on the  table";


                                while($row =mysqli_fetch_object($res)){
                            ?>
                            <tr>
                                <td><?php echo $row->category; ?></td>
                                <td><?php echo $row->name ?></td>
                                <td><?php echo $row->residency ?></td>
                                <td><?php echo $row->license ?></td>
                                <td><?php echo $row->salary ?></td>
                                <td>
                                    <a href="salarystructure-update-form.php?id=<?php echo $row->id?>" class="btn btn-success">Update</a>
                                    <a href="salarystructure-delete.php?id=<?php echo $row->id?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        
                            <?php
                                }    
                            ?>
                            </tbody>
                        </table>
                        </div>
                    </div>

                </div>
          </div>
        </div>  
    </div>  

</div>