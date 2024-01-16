<?php
    if($_GET['id'] == null){
        header("location: employees.php");
    }
    
    include_once "~/../php-includes/header.php";

    require_once "dbconnection.php";
    $offenseID = $_GET['id'];

    // var_dump($catID);
    $sqlQuery = "SELECT * from offense WHERE id = $offenseID limit 1";
    
    $res = $conn->query($sqlQuery);

    $row = $res->fetch_assoc();
    
    // var_dump($row)
?>


<div class="content-wrapper" style="min-height: 879.062px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Update Offense</h1>
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
                  <h3 class="card-title"> Offense </h3>
                </div>

                <form action="employee-offense-update.php" method="POST">
                  <div class="card-body" style="">

                    <input type="text" style="display:none" name="empid" value="<?php echo $row['empID']?>" required >
                    <input type="text" style="display:none" name="id" value="<?php echo $row['id']?>" required >

                    <div class="row">
                      <div class="col-12">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Type of Offense</label>
                          <input type="text"  value="<?php echo $row['offenseType']?>"  class="form-control" id="" 
                            placeholder="Certificate name" required name="offenseType">
                        </div>
                      </div>
                    
                    </div>

                    

                    <div class="row">
                      <div class="col-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <input type="text" value="<?php echo $row['descr']?>"  class="form-control" id="" 
                                placeholder="Description" name="descr" required>
                        </div>
                      </div>
                      
                    </div>
                    

                    <div class="row">
                      <div class="col-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Sanction</label>
                            <input type="text" value="<?php echo $row['sanction']?>"  class="form-control" id="" 
                                placeholder="Date end" name="sanction" required>
                        </div>
                      </div>
                    
                    </div>


                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="employee-profile.php?id=<?php echo $_GET['empid'];?>" class="btn btn-danger">Back</a>
                  </div>
                </form>
              </div>


          </div>
        </div>


      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    
  </div>