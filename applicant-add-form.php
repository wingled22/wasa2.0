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
            <h1 class="m-0">Add Applicant</h1>
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
                <!-- <div class="card-header">
                  <h3 class="card-title">Employee Information</h3>
                </div> -->
                <!-- /.card-header -->
                <!-- form start -->
                <form action="applicant-add.php" method="POST">
                  <div class="card-body" >

                    <legend>Personal information</legend>
                    <div class="row">
                      
                    <div class="col-4">
                        <div class="form-group">
                          <!-- <label for="exampleInputEmail1">First Name</label> -->
                          <input type="text" class="form-control" id="" placeholder="First name" required name="firstname">
                        </div>
                      </div>

                      <div class="col-4">
                        <div class="form-group">
                            <!-- <label for="exampleInputEmail1">First Name</label> -->
                            <input type="text" class="form-control" id="" placeholder="Middle name" name="middlename" required>
                        </div>
                      </div>
                    
                      <div class="col-4">
                        <div class="form-group">
                            <!-- <label for="exampleInputEmail1">First Name</label> -->
                            <input type="text" class="form-control" id="" placeholder="Last name" name="lastname" required>
                        </div>
                      </div>
                    
                    </div>


                    <div class="row">
                      <div class="col-6">
                        <div class="form-group">
                          <!-- <label for="exampleInputEmail1">First Name</label> -->
                          <input type="number" class="form-control" id="" placeholder="Age" name="age" required>
                        </div>
                      </div>

                      <div class="col-6">
                        <div class="form-group">
                           <select class="form-control" name="gender" required>
                            <option value="Male" >Male</option>
                            <option value="Female" >Female</option>
                          </select>
                        </div>
                       
                      </div>
                    
                     
                    
                    </div>

                    

                    <div class="row">
                      <div class="col-4">
                        <div class="form-group">
                          <!-- <label for="exampleInputEmail1">First Name</label> -->
                          <input type="text" class="form-control" id="" placeholder="Civil Status" name="civilstat" required>
                        </div>
                      </div>

                      <div class="col-4">
                        <div class="form-group">
                          <!-- <label for="exampleInputEmail1">First Name</label> -->
                          <input type="text" class="form-control" id="" placeholder="Citizenship" name="citizenship" required>
                        </div>
                      </div>
                    
                      <div class="col-4">
                        <div class="form-group">
                            <!-- <label for="exampleInputEmail1">First Name</label> -->
                            <input type="text" class="form-control" id="" placeholder="Religion" name="religion" required>
                        </div>
                      </div>
                    
                    </div>


                    <legend>Contact information</legend>
                    <div class="row">
                      <div class="col-6">
                          <div class="form-group">
                              <!-- <label for="exampleInputEmail1">First Name</label> -->
                              <input type="text" class="form-control" id="" placeholder="Contact" name="contact" required>
                          </div>
                      </div>
                      <div class="col-6">
                          <div class="form-group">
                              <!-- <label for="exampleInputEmail1">First Name</label> -->
                              <input type="Email" class="form-control" id="" placeholder="Email" name="email" required>
                          </div>
                      </div>
                      
                    </div>

                    <div class="row">
                      <div class="col-12">
                          <div class="form-group">
                              <!-- <label for="exampleInputEmail1">First Name</label> -->
                              <input type="text" class="form-control" id="" placeholder="Adrress" name="address" required>
                          </div>
                      </div>
                    </div>

                    <legend>Birth information</legend>
                    <div class="row">
                      <div class="col-6">
                        <div class="form-group">
                          <!-- <label for="exampleInputEmail1">First Name</label> -->
                          <input type="text" class="form-control" id="" placeholder="Place of Birth" name="birthplace" required>
                        </div>
                      </div>

                      <div class="col-6">
                        <div class="form-group">
                            <!-- <label for="exampleInputEmail1">First Name</label> -->
                            <input type="date" class="form-control" id="" placeholder="Date of birth" name="birthdate" required>
                        </div>
                      </div>
                    
                    </div>

                    <div class="row">
                      <div class="col-6">
                        <div class="form-group">
                          <!-- <label for="exampleInputEmail1">First Name</label> -->
                          <input type="text" class="form-control" id="" placeholder="Father's name" name="fathername" required>
                        </div>
                      </div>

                      <div class="col-6">
                        <div class="form-group">
                          <!-- <label for="exampleInputEmail1">First Name</label> -->
                          <input type="text" class="form-control" id="" placeholder="Mother's name" name="mothername" required>
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