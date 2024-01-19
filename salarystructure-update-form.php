<?php
    if($_GET['id'] == null){
        header("location: wasa.php");
    }
    require_once "dbconnection.php";
    
    include_once "~/../php-includes/header.php";

    $id = $_GET['id'];

    // var_dump($catID);
    $sqlQuery = "SELECT * from salarystructure WHERE id = $id limit 1";
    
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
            <h1 class="m-0">Add Salary Structure</h1>
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
                  <h3 class="card-title">Salary Structure</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="salarystructure-update.php" method="POST">

                    <input type="text" style="display:none" name="id" value="<?php echo $row['id']?>" required >

                <div class="card-body" style="">


                    
                    <!-- <legend>Personal information</legend> -->
                    <div class="row">
                      <div class="col-12">
                        <div class="form-group">
                          <!-- <label for="exampleInputEmail1">First Name</label> -->
                          <!-- <input type="text" class="form-control" id="" placeholder="Category" required name="category"> -->
                          <select class="form-control" name="category" required>
                            <option value="Bachelor" <?php if($row['category'] == "Bachelor"){ echo "selected";} ?>  >Bachelor</option>
                            <option value="Masteral" <?php if($row['category'] == "Masteral"){ echo "selected";} ?>   >Masteral</option>
                            <option value="Doctoral"  <?php if($row['category'] == "Doctoral"){ echo "selected";} ?>  >Doctoral</option>
                            <option value="College Faculty Increment" <?php if($row['category'] == "College Faculty Increment"){ echo "selected";} ?>   >College Faculty Increment</option>
                            <option value="Administration" <?php if($row['category'] == "Administration"){ echo "selected";} ?>   >Administration</option>
                            <option value="Merit Increase" <?php if($row['category'] == "Merit Increase"){ echo "selected";} ?>   >Merit Increase</option>
                          </select>
                        </div>
                      </div>
                    
                    </div>

                    <div class="row">
                      <div class="col-12">
                        <div class="form-group">
                            <!-- <label for="exampleInputEmail1">First Name</label> -->
                            <input type="text" class="form-control" id="" value="<?php echo $row['name']?>"  placeholder="Description" name="name" required>
                        </div>
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-12">
                        <div class="form-group">
                            <!-- <label for="exampleInputEmail1">First Name</label> -->
                            <input type="number" class="form-control" id=""  value="<?php echo $row['residency']?>"   placeholder="Years rendered" name="residency" required>
                        </div>
                      </div>
                    </div>
                    

                    <div class="row">
                      <div class="col-12">
                        <div class="form-group">
                            <!-- <label for="exampleInputEmail1">First Name</label> -->
                            <!-- <input type="text" class="form-control" id="" placeholder="With license" name="license" required> -->
                            <select class="form-control" name="license" required>
                                <option value="License" >License</option>
                                <option value="Without License" >Without License</option>
                            </select>
                        </div>
                      </div>
                    
                    </div>


                    <div class="row">
                      <div class="col-12">
                        <div class="form-group">
                            <!-- <label for="exampleInputEmail1">First Name</label> -->
                            <input type="number" class="form-control" id=""  value="<?php echo $row['salary']?>"    placeholder="salary" name="salary" required>
                            <!-- <select class="form-control" name="category" required>
                                <option value="Bachelor" >Bachelor</option>
                                <option value="Masteral" >Masteral</option>
                          </select> -->
                        </div>
                      </div>
                    
                    </div>

                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="wasa.php" class="btn btn-danger">Back</a>
                  </div>
                </form>
              </div>


          </div>
        </div>


      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    
  </div>