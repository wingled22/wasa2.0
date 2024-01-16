<?php
    include_once "~/../php-includes/header.php";

    require_once "dbconnection.php";
    $empID = $_GET['id'];

    // var_dump($catID);
    $sqlQuery = "SELECT 
                    emp.id ,
                    emp.firstname ,
                    emp.middlename ,
                    emp.lastname ,
                    emp.age ,
                    emp.gender ,
                    emp.civilstat ,
                    emp.citizenship ,
                    emp.religion ,
                    emp.contact ,
                    emp.email ,
                    emp.address ,
                    emp.birthplace ,
                    emp.birthdate ,
                    emp.fathername ,
                    emp.mothername ,
                    
                    appinf.id as appinfID,
                    appinf.examination,
                    appinf.demo,
                    appinf.contractSigning,
                    appinf.startDate

                FROM employee AS emp
                inner join applicationinfo AS appinf 
                on emp.id = appinf.empid WHERE emp.id = $empID limit 1";
    
    $res = $conn->query($sqlQuery);

    $row = $res->fetch_assoc();
    
    //  var_dump($row)

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="min-height: 879.062px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Update Applicant</h1>
          </div><!-- /.col -->
          
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
                <div class="card-header">
                  <h3 class="card-title">Applicant Information</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="applicant-update.php" method="POST">
                  <div class="card-body" style="height: 85vh; overflow: scroll;">

                    <input type="text" style="display:none" name="id" value="<?php echo $row['id']?>" required >
                    <input type="text" style="display:none" name="appinfID" value="<?php echo $row['appinfID']?>" required >
                    <!-- appinfID -->
                    <legend>Personal information</legend>
                    <div class="row">
                      
                        <div class="col-4">
                            <div class="form-group">
                            <!-- <label for="exampleInputEmail1">First Name</label> -->
                            <input type="text" class="form-control" id="" placeholder="First name" required name="firstname" value="<?php echo $row['firstname']?>" >
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-group">
                                <!-- <label for="exampleInputEmail1">First Name</label> -->
                                <input type="text" class="form-control" id="" placeholder="Middle name" name="middlename" value="<?php echo $row['middlename']?>" required>
                            </div>
                        </div>
                        
                        <div class="col-4">
                            <div class="form-group">
                                <!-- <label for="exampleInputEmail1">First Name</label> -->
                                <input type="text" class="form-control" id="" placeholder="Last name" name="lastname" value="<?php echo $row['lastname']?>" required>
                            </div>
                        </div>
                        
                        </div>


                        <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                            <!-- <label for="exampleInputEmail1">First Name</label> -->
                            <input type="number" class="form-control" id="" placeholder="Age" name="age" value="<?php echo $row['age']?>" required>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                            <select class="form-control" name="gender" value="<?php echo $row['gender']?>" required>
                                <option value="Male" <?php if($row['gender'] == "Male"){ echo "selected";} ?> >Male</option>
                                <option value="Female" <?php if($row['gender'] == "Female"){ echo "selected";}?> >Female</option>
                            </select>
                            </div>
                        
                        </div>
                        
                        </div>

                    

                        <div class="row">
                        
                            <div class="col-4">
                                <div class="form-group">
                                    <select class="form-control" name="civilstat" value="<?php echo $row['gender']?>" required>
                                        <option value="Single" <?php if($row['civilstat'] == "Single"){ echo "selected";} ?> >Single</option>
                                        <option value="Married" <?php if($row['civilstat'] == "Married"){ echo "selected";} ?> >Married</option>
                                        <option value="Separated" <?php if($row['civilstat'] == "Separated"){ echo "selected";} ?> >Separated</option>
                                        <option value="Divorced" <?php if($row['civilstat'] == "Divorced"){ echo "selected";} ?> >Divorced</option>
                                        <option value="Widowed" <?php if($row['civilstat'] == "Widowed"){ echo "selected";}?> >Widowed</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-4">
                                <div class="form-group">
                                <!-- <label for="exampleInputEmail1">First Name</label> -->
                                <input type="text" class="form-control" id="" placeholder="Citizenship" name="citizenship" value="<?php echo $row['citizenship']?>" required>
                                </div>
                            </div>
                            
                            <div class="col-4">
                                <div class="form-group">
                                    <!-- <label for="exampleInputEmail1">First Name</label> -->
                                    <input type="text" class="form-control" id="" placeholder="Religion" name="religion" value="<?php echo $row['religion']?>" required>
                                </div>
                            </div>
                            
                        </div>


                        <legend>Contact information</legend>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <!-- <label for="exampleInputEmail1">First Name</label> -->
                                    <input type="text" class="form-control" id="" placeholder="Contact" name="contact" value="<?php echo $row['contact']?>" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <!-- <label for="exampleInputEmail1">First Name</label> -->
                                    <input type="Email" class="form-control" id="" placeholder="Email" name="email" value="<?php echo $row['email']?>" required>
                                </div>
                            </div>
                            
                            </div>

                            <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <!-- <label for="exampleInputEmail1">First Name</label> -->
                                    <input type="text" class="form-control" id="" placeholder="Adrress" name="address" value="<?php echo $row['address']?>" required>
                                </div>
                            </div>
                        </div>

                        <legend>Birth information</legend>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                <!-- <label for="exampleInputEmail1">First Name</label> -->
                                <input type="text" class="form-control" id="" placeholder="Place of Birth" name="birthplace" value="<?php echo $row['birthplace']?>" required>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <!-- <label for="exampleInputEmail1">First Name</label> -->
                                    <input type="date" class="form-control" id="" placeholder="Date of birth" name="birthdate" value="<?php echo $row['birthdate']?>" required>
                                </div>
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                <!-- <label for="exampleInputEmail1">First Name</label> -->
                                <input type="text" class="form-control" id="" placeholder="Father's name" name="fathername" value="<?php echo $row['fathername']?>" required>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                <!-- <label for="exampleInputEmail1">First Name</label> -->
                                <input type="text" class="form-control" id="" placeholder="Mother's name" name="mothername" value="<?php echo $row['mothername']?>" required>
                                </div>
                            </div>
                            
                            </div>

                            <legend>Application Details</legend>
                            <div class="row">
                            
                                <div class="col-12">
                                    <label for="exampleInputEmail1">Examination</label>
                                    <div class="form-group">
                                        <select class="form-control" name="examination" >
                                            <option disabled selected value="null">-- select an option -- </option>
                                            <option value="Failed"<?php if($row['examination'] == "Failed"){ echo "selected";} ?> >Failed</option>
                                            <option value="Passed" <?php if($row['examination'] == "Passed"){ echo "selected";} ?> >Passed</option>
                                          
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="exampleInputEmail1">Demo</label>
                                    <div class="form-group">
                                        <select class="form-control" name="demo" >
                                            <option disabled selected value="null">-- select an option -- </option>
                                            <option value="Failed"<?php if($row['demo'] == "Failed"){ echo "selected";} ?> >Failed</option>
                                            <option value="Passed" <?php if($row['demo'] == "Passed"){ echo "selected";} ?> >Passed</option>
                                          
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="exampleInputEmail1">Contract Signing</label>
                                    <div class="form-group">
                                        <select class="form-control" name="contractSigning" >
                                            <option disabled selected value="null">-- select an option -- </option>
                                            <option value="Failed"<?php if($row['contractSigning'] == "Failed"){ echo "selected";} ?> >Failed</option>
                                            <option value="Passed" <?php if($row['contractSigning'] == "Passed"){ echo "selected";} ?> >Passed</option>
                                         
                                        </select>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                    <!-- <label for="exampleInputEmail1">First Name</label> -->
                                    <input type="date" class="form-control" id="" placeholder="Place of Birth" name="startDate" value="<?php echo $row['startDate']?>" >
                                </div>

                            
                            </div>
                        </div>
                    

                  <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="cancel" class="btn btn-danger">Back</button>
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