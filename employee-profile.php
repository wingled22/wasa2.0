<?php
// Check if 'id' parameter is not set in the URL
if ($_GET['id'] == null) {
    header("location: employees.php");
}

// Include header file
include_once "~/../php-includes/header.php";

// Require database connection
require "dbconnection.php";
?>

<div class="content-wrapper" style="min-height: 1603.32px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <!-- Button to trigger the print function -->
                    <button onclick="window.print()" id="hit" style="float: right;">Print Report</button>
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
                                // Get employee details based on the 'id' parameter
                                $empID = $_GET['id'];
                                $sqlQuery = "SELECT * from employee WHERE id = $empID limit 1";
                                $res = $conn->query($sqlQuery);
                                $row = $res->fetch_object();
                                $idNum = $row->idnum;
                                $salary = $row->salary;
                            ?>

                            <div class="alb">
                                <img src="uploads/<?php echo $row->image_url; ?>" alt="Employee Image">
                            </div>
                            <h3 class="profile-username text-center"><?php echo $row->firstname . " " . $row->lastname; ?></h3>
                            <p class="text-muted text-center"><?php echo $row->department; ?></p>
                            <hr>

                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Employee Status</strong>
                            <span class="tag tag-primary"><?php echo $row->empstatus; ?></span>
                            <hr>

                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
                            <p class="text-muted"><?php echo $row->address; ?></p>
                            <hr>

                            <strong><i class="fas fa-phone-alt mr-1"></i> Contact</strong>
                            <p class="text-muted"><?php echo $row->contact; ?></p>
                            <hr>

                            <strong><i class="fas fa-envelope mr-1"></i> Mail</strong>
                            <p class="text-muted">
                                <span class="tag tag-primary"><?php echo $row->email; ?></span>
                            </p>
                            <hr>

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
                                        if (!$res) {
                                            echo "no data on the table";
                                        }
                                        while ($row = mysqli_fetch_object($res)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row->typeDegree; ?></td>
                                            <td><?php echo $row->dateFinished; ?></td>
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
                                        if (!$res) {
                                            echo "no data on the table";
                                        }
                                        while ($row = mysqli_fetch_object($res)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row->certName; ?></td>
                                            <td><?php echo $row->qualification; ?></td>
                                            <td><?php echo $row->venue; ?></td>
                                            <td><?php echo $row->dateStart; ?></td>
                                            <td><?php echo $row->dateEnd; ?></td>
                                            <td>
                                                <a href="employee-certification-update-form.php?empid=<?php echo $_GET['id']?>&id=<?php echo $row->id?>" class="btn btn-success">Update</a>
                                                <a href="employee-certification-delete.php?empid=<?php echo $_GET['id']?>&id=<?php echo $row->id?>" class="btn btn-danger">Delete</a>
                                                <a  class="btn btn-warning view-cert" src-img="upload/<?php echo $row->image; ?>" >View Certificate</a>
                                                <!-- <img src="upload/" height="100" width="100" alt=""/> -->
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
                                        if (!$res) {
                                            echo "no data on the table";
                                        }
                                        while ($row = mysqli_fetch_object($res)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row->offenseType; ?></td>
                                            <td><?php echo $row->descr; ?></td>
                                            <td><?php echo $row->sanction; ?></td>
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

                    <!-- Button to trigger the modal -->
                    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#imageModal">
                        Open Image Modal
                    </button> -->
                    <div class="card">
                        <div class="card-body">
                            <h5>Absents</h5>
                            <hr>
                            <a href="employee-absent-add-form.php?id=<?php echo $empID;?>&idnum=<?php echo $idNum;?>" class="btn btn-primary">Add Absent</a>
                            <br>
                            <table class="table table-striped table-valign-middle">
                                <thead>
                                    <tr>
                                        <th>Date Start</th>
                                        <th>Date End</th>
                                        <th>Reason</th>
                                        <th>Duty Time</th>
                                        <th>Days</th>
                                        <th>Status</th>
                                        <th>More</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        require "dbconnection.php";
                                        $sql = "SELECT * from absent where empID = $empID";
                                        $res = $conn->query($sql);
                                        if (!$res) {
                                            echo "no data on the table";
                                        }
                                        while ($row = mysqli_fetch_object($res)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row->datestart; ?></td>
                                            <td><?php echo $row->dateEnd; ?></td>
                                            <td><?php echo $row->reason; ?></td>
                                            <td><?php echo $row->daystatus; ?></td>
                                            <td><?php echo $row->numday; ?></td>
                                            <td><?php echo $row->status; ?></td>
                                            <td>
                                                <!-- <a href="employee-absent-update-form.php?empid=<?php echo $_GET['id']?>&id=<?php echo $row->id?>" class="btn btn-success">Update</a> -->
                                                <a href="employee-absent-delete.php?empid=<?php echo $_GET['id']?>&id=<?php echo $row->id?>" class="btn btn-danger">Delete</a>
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
                            <h5>Salary Adjustments</h5>
                            <hr>
                            <a href="employee-salary-adjustment-add-form.php?id=<?php echo $empID;?>" class="btn btn-primary">Add Salary Adjustment</a>
                           
                             <br>
                            <table class="table table-striped table-valign-middle">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category</th>
                                        <th>Name</th>
                                        <th>Increase</th>
                                        <th>More</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        require "dbconnection.php";
                                        $sql = "SELECT adj.id, adj.adjustmentId, str.category, str.name, str.salary, adj.empId FROM salaryadjustment as adj
                                                inner join salarystructure as str on adj.adjustmentId = str.id
                                                where adj.empId = $empID;";
                                        $res = $conn->query($sql);
                                        if (!$res) {
                                            echo "no data on the table";
                                        }
                                        $sumSalary = 0;
                                        while ($row = mysqli_fetch_object($res)) {
                                            $sumSalary += $row-> salary;
                                    ?>
                                        <tr>
                                            <td><?php echo $row->id; ?></td>
                                            <td><?php echo $row->category; ?></td>
                                            <td><?php echo $row->name; ?></td>
                                            <td><?php echo $row->salary; ?></td>
                                            <td>
                                                <a href="employee-salary-adjustment-delete.php?empid=<?php echo $empID; ?>&id=<?php echo $row->id;?>" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    <?php
                                        }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer p-3">
                            <h5> Salary: <?php echo $salary; ?> </h5>
                            <h5> Salary Adujstments: <?php echo $sumSalary; ?> </h5>
                            <h5> Total: <?php echo $sumSalary + $salary; ?> </h5>

                        </div>
                    </div>


                    
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Pesting modal sections -->
<div class="modal" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="imageModalLabel">Image Preview</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <img src="" class="img-fluid" id="certificateImageHighlight" alt="Image">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
  $(document).ready(function(){

    $('.view-cert').click(function(){

      var srcImgValue = $(this).attr('src-img');
      $('#certificateImageHighlight').attr('src', srcImgValue);
      $('#imageModal').modal('show');
    })



  });

</script>

<?php
// Close the database connection if needed
$conn->close();
// Include footer file if needed
// include_once "~/../php-includes/footer.php";
?>
