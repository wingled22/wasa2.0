<?php
include_once "~/../php-includes/header.php";
?>
<?php include "dbconnection.php"; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="min-height: 879.062px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Employee</h1>

                    <br>
                    <?php if (isset($_GET['error'])): ?>
                        <p><?php echo $_GET['error']; ?></p>
                    <?php endif ?>
                    <form action="employee-add.php" method="post" enctype="multipart/form-data">
                        <input type="file" name="my_image" id="my_image">
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
                            <form action="employee-add.php" method="POST">
                                <div class="card-body" style="height: 85vh; overflow: scroll;">
                                    <legend>Employee Status</legend>
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <select class="form-control" name="empstatus" required>
                                                    <option value="Probationary">Probationary</option>
                                                    <option value="Regular">Regular</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                          <div class="form-group ">
                                            <input type="number" class="form-control" id="" placeholder="Salary"
                                                required name="salary">
                                          </div>
                                        </div>
                                    </div>
                                    <legend>Personal information</legend>
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="" placeholder="First name"
                                                    required name="firstname">
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id=""
                                                    placeholder="Middle name" name="middlename" required>
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id=""
                                                    placeholder="Last name" name="lastname" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <input type="number" class="form-control" id="" placeholder="Age"
                                                    name="age" required>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <select class="form-control" name="gender" required>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id=""
                                                    placeholder="Civil Status" name="civilstat" required>
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id=""
                                                    placeholder="Citizenship" name="citizenship" required>
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id=""
                                                    placeholder="Religion" name="religion" required>
                                            </div>
                                        </div>
                                    </div>

                                    <legend>Contact information</legend>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id=""
                                                    placeholder="Contact" name="contact" required>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <input type="Email" class="form-control" id=""
                                                    placeholder="Email" name="email" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id=""
                                                    placeholder="Address" name="address" required>
                                            </div>
                                        </div>
                                    </div>

                                    <legend>Birth information</legend>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id=""
                                                    placeholder="Place of Birth" name="birthplace" required>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <input type="date" class="form-control" id=""
                                                    placeholder="Date of birth" name="birthdate" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id=""
                                                    placeholder="Father's name" name="fathername" required>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id=""
                                                    placeholder="Mother's name" name="mothername" required>
                                            </div>
                                        </div>
                                    </div>

                                    <legend>Employment information</legend>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id=""
                                                    placeholder="ID Number" name="idnum" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <input type="date" class="form-control" id=""
                                                    placeholder="Hired date" name="hireddate" required>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id=""
                                                    placeholder="Department" name="department" required>
                                            </div>
                                        </div>
                                    </div>

                                    <legend>Emergency Contact</legend>
                                    <div class="row">

                                        <div class="col-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id=""
                                                    placeholder="Name" name="emername" required>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id=""
                                                    placeholder="Contact #" name="emercontact" required>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id=""
                                                    placeholder="Relationship" name="emerrelation" required>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id=""
                                                    placeholder="Address" name="emeraddress" required>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
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
