<?php
    if($_GET['id'] == null){
        header("location: employees.php");
    }
    
    include_once "~/../php-includes/header.php";
?>


<div class="content-wrapper" style="min-height: 879.062px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Certification</h1>
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
                  <h3 class="card-title"> Certification </h3>
                </div>

                <form action="employee-certification-add.php" method="POST">
                  <div class="card-body" style="">

                    <input type="text" style="display:none" name="empID" value="<?php echo $_GET['id']?>" required >

                    <div class="row">
                      <div class="col-12">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Name</label>
                          <input type="text" class="form-control" id="" placeholder="Certificate name" required name="certName">
                        </div>
                      </div>
                    
                    </div>

                    

                    <div class="row">
                      <div class="col-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Date Start</label>
                            <input type="date" class="form-control" id="" placeholder="Date start" name="dateStart" required>
                        </div>
                      </div>
                      
                    </div>
                    

                    <div class="row">
                      <div class="col-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Date End</label>
                            <input type="date" class="form-control" id="" placeholder="Date end" name="dateEnd" required>
                        </div>
                      </div>
                    
                    </div>

                    <div class="row">
                      <div class="col-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Qualification</label>
                            <input type="text" class="form-control" id="" placeholder="Qualification" name="qualification" required>
                        </div>
                      </div>
                    
                    </div>

                    <div class="row">
                      <div class="col-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Venue</label>
                            <input type="text" class="form-control" id="" placeholder="Venue" name="venue" required>
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