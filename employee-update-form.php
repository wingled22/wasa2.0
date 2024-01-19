<?php
    include_once "~/../php-includes/header.php";

    require_once "dbconnection.php";
    $empID = $_GET['id'];

    // var_dump($catID);
    $sqlQuery = "SELECT * from employee WHERE id = $empID limit 1";
    
    $res = $conn->query($sqlQuery);

    $row = $res->fetch_assoc();
    
    // var_dump($row)

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="min-height: 879.062px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Update Employee</h1>
        	
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
                  <h3 class="card-title">Employee Information</h3>
                </div>
			
                <!-- /.card-header -->
                <!-- form start -->
                <form action="employee-update.php" method="POST">
                  <div class="card-body" style="height: 85vh; overflow: scroll;">

                    <input type="text" style="display:none" name="id" value="<?php echo $row['id']?>" required >
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

                    <legend>Employment information</legend>
                    <div class="row">
                     
                     <div class="col-12">
                       <div class="form-group">
                         <!-- <label for="exampleInputEmail1">First Name</label> -->
                         <input type="text" class="form-control" id="" placeholder="ID Number" name="idnum" value="<?php echo $row['idnum']?>" required>
                       </div>
                     </div>
                   
                   </div>
                   
                    <div class="row">
                      <div class="col-6">
                        <div class="form-group">
                          <!-- <label for="exampleInputEmail1">First Name</label> -->
                          <input type="date" class="form-control" id="" placeholder="Hired date" name="hireddate" value="<?php echo $row['hireddate']?>" required>
                        </div>
                      </div>

                      <div class="col-6">
                        <div class="form-group">
                          <!-- <label for="exampleInputEmail1">First Name</label> -->
                          <input type="text" class="form-control" id="" placeholder="Department" name="department" value="<?php echo $row['department']?>" required>
                        </div>
                      </div>
                    
                    </div>

                    <legend>Emergency Contact</legend>
                    <div class="row">

                      <div class="col-6">
                        <div class="form-group">
                          <!-- <label for="exampleInputEmail1">First Name</label> -->
                          <input type="text" class="form-control" id="" placeholder="Name" name="emername" value="<?php echo $row['emername']?>" required>
                        </div>
                      </div>

                      <div class="col-6">
                        <div class="form-group">
                          <!-- <label for="exampleInputEmail1">First Name</label> -->
                          <input type="text" class="form-control" id="" placeholder="Contact #" name="emercontact" value="<?php echo $row['emercontact']?>" required>
                        </div>
                      </div>


                    </div>

                    <div class="row">

                      <div class="col-6">
                        <div class="form-group">
                          <!-- <label for="exampleInputEmail1">First Name</label> -->
                          <input type="text" class="form-control" id="" placeholder="Relationship" name="emerrelation" value="<?php echo $row['emerrelation']?>" required>
                        </div>
                      </div>

                      <div class="col-6">
                        <div class="form-group">
                          <!-- <label for="exampleInputEmail1">First Name</label> -->
                          <input type="text" class="form-control" id="" placeholder="Address" name="emeraddress" value="<?php echo $row['emeraddress']?>" required>
                        </div>
                      </div>
                    </div>



                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <!-- <button type="cancel" class="btn btn-danger">Back</button> -->
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