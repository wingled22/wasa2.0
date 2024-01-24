<?php
    include_once "~/../php-includes/header.php";
    include "dbconnection.php"; 
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="min-height: 879.062px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Employee Salary Adjustment</h1>

                    <br>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <!-- content goes here -->

                <div class="row">
                    <div class="col-md-9">
                        <div class="card card-primary">
                            <!-- <div class="card-header">
                              <h3 class="card-title">Employee Information</h3>
                            </div> -->
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="employee-salary-adjustment-add.php" method="POST">
                                <div class="card-body" style=" overflow: scroll;">
                                    <legend>Employee Salary Adjustment</legend>
                                    <div class="row">
                                        <input type="hidden" class="form-control" name="empId" value="<?php echo $_GET['id'];?>" required >
                                        <div class="col-4">
                                            <div class="form-group">
                                                <select class="form-control" name="adjustmentId" required>
                                                    <?php
                                                        $sqlQuery = "SELECT * from salarystructure";
                                                        $res = $conn->query($sqlQuery);

                                                        if (!$res) {
                                                            echo "no data on the table";
                                                        }

                                                        while ($row = mysqli_fetch_object($res)) {
                                                    ?>
                                                        <option value="<?php echo $row->id;?>"><?php echo $row->name . " | " . $row->category;?></option>
                                                    <?php
                                                        }
                                                    ?>

                                                </select>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="employee-profile.php?id=<?php echo $_GET['id'];?>" class="btn btn-danger">Back</a>
                                </div>
                            </form>
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
