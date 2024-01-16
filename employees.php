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
            <h1 class="m-0">Employees</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <!-- content goes here -->
        <a type="button" href="employee-add-form.php" class="btn  btn-primary">Add Employee</a>
        <br>
        <br>
        
        <div class="row">
          <div class="col-12">

            <div class="card">
                <div class="card-header border-0">
                  <!-- <h3 class="card-title">Products</h3> -->
                  <!-- <div class="card-tools">
                    <a href="#" class="btn btn-tool btn-sm">
                      <i class="fas fa-download"></i>
                    </a>
                    <a href="#" class="btn btn-tool btn-sm">
                      <i class="fas fa-bars"></i>
                    </a>
                  </div> -->
                </div>

                <div class="card-body table-responsive p-0">
                  <table class="table table-striped table-valign-middle">
                    <thead>

                      <tr>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Hired Date</th>
                        <th>More</th>
                      </tr>

                    </thead>

                    <tbody>

                    <?php
                        require "dbconnection.php";
                        $sql = "SELECT * from employee where status='active' or status='inactive'";
                        $res = $conn->query($sql);

                        if(!$res)
                            echo "no data on the the book table";


                        while($row =mysqli_fetch_object($res)){
                    ?>
                      <tr>
                        <td><?php echo $row->firstname." ".$row->lastname; ?></td>
                        <td><?php echo $row->department ?></td>
                        <td><?php echo $row->hireddate; ?></td>
                        <td>
                                                  <a href="employee-profile.php?id=<?php echo $row->id?>" class="btn btn-success">View Profile</a>
                           <a href="empdelete.php?id=<?php echo $row->id?>" class="btn btn-danger">Delete</a>

    </script>
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

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



<?php
    include_once "~/../php-includes/footer.php";
?>