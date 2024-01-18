<?php
    if($_GET['id'] == null){
        header("location: employees.php");
    }
    
    include_once "~/../php-includes/header.php";
    
    require "dbconnection.php";

?>

<div class="content-wrapper" style="min-height: 1603.32px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
		          <button onclick="window.print()" id = "hit" style="float: right;">Print Report</button>
            <h1>Employee Profile</h1>
          </div>
	
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <!-- <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
                </div> -->
	  	<style>
	
		.alb {
			width: 220px;
			height: 200px;
			padding: 5px;
		}
		.alb img {
			width: 100%;
			height: 100%;
		}
		a {
			text-decoration: none;
			color: black;
		}
	</style>
 
                <?php
                    $empID = $_GET['id'];

                    // var_dump($catID);
                    $sqlQuery = "SELECT * from employee WHERE id = $empID limit 1";
                    
                    $res = $conn->query($sqlQuery);
                
                    $row = $res->fetch_object();
                    $idNum = $row->idnum
                ?>
  <div class="alb">
             	<img src="uploads/<?php echo $row->image_url;?>">
             </div>
                <h3 class="profile-username text-center"><?php echo $row->firstname." ".$row->lastname;?></h3>
                <p class="text-muted text-center"><?php echo $row->department;?></p>
                <hr>

   <strong><i class="fas fa-map-marker-alt mr-1"></i> Employee Status</strong>
               <span class="tag tag-primary"><?php echo $row->empstatus;?></span>
                <hr>
				
                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
                <p class="text-muted"><?php echo $row->address;?></p>
                <hr>

                <strong><i class="fas fa-phone-alt mr-1"></i> Contact</strong>
                <p class="text-muted"><?php echo $row->contact;?></p>
                <hr>

                <strong><i class="fas fa-envelope mr-1"></i> Mail</strong>

                <p class="text-muted">
                  <span class="tag tag-primary"><?php echo $row->email;?></span>
                </p>
                <hr>

                <!-- <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                <hr> -->
                <a href="employee-view-form.php?id=<?php echo $_GET['id']?>" class="btn btn-primary btn-block"><b>View Information</b></a>
                <a href="employee-update-form.php?id=<?php echo $_GET['id']?>" class="btn btn-primary btn-block"><b>Update Information</b></a>
              </div>

            </div>

          </div>
         
          <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <h5>Educational attainments</h5>
                    <hr>
                    <a href="employee-educattain-add-form.php?id=<?php echo $empID;?>&idnum=<?php echo $idNum;?>" class="btn btn-primary">Add Educational Attainment</a>
                    <br>
                    <table class="table table-striped table-valign-middle">
                      <thead>

                        <tr>
                          <th>Type of degree</th>
                          <th>School Attended</th>
                          <th>Date finished</th>
                          <th>More</th>
                        </tr>

                      </thead>

                      <tbody>

                      <?php
                          require "dbconnection.php";
                          $sql = "SELECT * from educattain where empID = $empID";
                          $res = $conn->query($sql);

                          if(!$res)
                              echo "no data on the the book table";


                          while($row =mysqli_fetch_object($res)){
                      ?>

                        <tr>
                          <td><?php echo $row->typeDegree; ?></td>
                          <td><?php echo $row->dateFinished ?></td>
                          <td><?php echo $row->schoolAttended; ?></td>
                          <td>
                            <a href="employee-educattain-update-form.php?empid=<?php echo $_GET['id']?>&id=<?php echo $row->id?>" class="btn btn-success">Update</a>
                            <a href="employee-educattain-delete.php?empid=<?php echo $_GET['id']?>&id=<?php echo $row->id?>" class="btn btn-danger">Delete</a>
                          </td>
                        </tr>
                    
                      <?php
                          }    
                      ?>
                      </tbody>
                    </table>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                  <h5>Certifications</h5>
                  <hr>
                  <a href="employee-certification-add-form.php?id=<?php echo $empID;?>&idnum=<?php echo $idNum;?>" class="btn btn-primary">Add Certification</a>
                  <br>

                  <table class="table table-striped table-valign-middle">
                      <thead>

                        <tr>
                          <th>Certificate name</th>
                          <th>Qualification</th>
                          <th>Venue</th>
                          <th>Date start</th>
                          <th>Date finished</th>
                          <th>More</th>
                        </tr>

                      </thead>

                      <tbody>

                      <?php
                          require "dbconnection.php";
                          $sql = "SELECT * from certification where empID = $empID";
                          $res = $conn->query($sql);

                          if(!$res)
                              echo "no data on the the book table";


                          while($row =mysqli_fetch_object($res)){
                      ?>

                        <tr>
                          <td><?php echo $row->certName; ?></td>
                          <td><?php echo $row->qualification ?></td>
                          <td><?php echo $row->venue ?></td>
                          <td><?php echo $row->dateStart ?></td>
                          <td><?php echo $row->dateEnd; ?></td>
                          <td>
                            <a href="employee-certification-update-form.php?empid=<?php echo $_GET['id']?>&id=<?php echo $row->id?>" class="btn btn-success">Update</a>
                            <a href="employee-certification-delete.php?empid=<?php echo $_GET['id']?>&id=<?php echo $row->id?>" class="btn btn-danger">Delete</a>
                            <a href="" class="btn btn-info">Certificate</a>
                          </td>
                        </tr>
                    
                      <?php
                          }    
                      ?>
                     

                      </tbody>
                    </table>

              </div>
            </div>

            <div class="card">
              <div class="card-body">
                  <h5>Offenses</h5>
                  <hr>
                  <a href="employee-offense-add-form.php?id=<?php echo $empID;?>&idnum=<?php echo $idNum;?>" class="btn btn-primary">Add Offense</a>
                  <br>

                  <table class="table table-striped table-valign-middle">
                      <thead>

                        <tr>
                          <th>Type of offense</th>
                          <th>Description</th>
                          <th>Sanction</th>
                          <th>More</th>
                        </tr>

                      </thead>

                      <tbody>

                      <?php
                          require "dbconnection.php";
                          $sql = "SELECT * from offense where empID = $empID";
                          $res = $conn->query($sql);

                          if(!$res)
                              echo "no data on the table";


                          while($row =mysqli_fetch_object($res)){
                      ?>

                        <tr>
                          <td><?php echo $row->offenseType; ?></td>
                          <td><?php echo $row->descr ?></td>
                          <td><?php echo $row->sanction ?></td>
                          <td>
                            <a href="employee-offense-update-form.php?empid=<?php echo $_GET['id']?>&id=<?php echo $row->id?>" class="btn btn-success">Update</a>
                            <a href="employee-offense-delete.php?empid=<?php echo $_GET['id']?>&id=<?php echo $row->id?>" class="btn btn-danger">Delete</a>
                          </td>
                        </tr>
                    
                      <?php
                          }    
                      ?>
              </tbody>
                    </table>

              </div>
            </div>

		<div class="alert alert-info">My Certificate </div>
		<hr style="border-top:1px dotted #ccc;"/>
		<form method="POST" action="upload.php" enctype="multipart/form-data">
		
	
			<div class="form-inline">
				<label>Upload here</label>
				
				<input type="file" name="image" class="form-control" required="<?php echo $_GET['id']?>"/>
				<button class="btn btn-primary" name="upload"><span class="glyphicon glyphicon-upload"></span> Upload</button>
			</div>
		</form>
		<br />

<?php
		
			
			$query = mysqli_query($conn, "SELECT * FROM `image`") or die(mysqli_error());
			while($fetch = mysqli_fetch_array($query)){
		?>
			<div style="border:1px solid #000; height:190px; width:190px; padding:4px; float:left; margin:10px;">
				<a href="<?php echo $fetch['location']?>"><img src="<?php echo $fetch['location']?>" width="180" height="180"/></a>
			</div>
		<?php
			}
		?>
		
		
	</div>

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>