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
            <h1 class="m-0">Applicant</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <!-- content goes here -->
            <a type="button" href="applicant-add-form.php" class="btn  btn-primary">Add Applicant</a>
            <br>
            <br>

            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header border-0">
                        <!-- <h3 class="card-title">Products</h3> -->
                        <!-- <div class="card-tools">
                            <a href="#" class="btn btn-tool btn-sm">
                            <i class="fas fa-download"></i>
                            </a>
                            <a href="#" class="btn btn-tool btn-sm">
                            <i class="fas fa-bars"></i>
                            </a>
                        </div> -->
                        </div>

                        <div class="card-body table-responsive p-0">
                        <table class="table table-striped table-valign-middle">
                            <thead>

                            <tr>
                                <th>Name</th>
                                <th>Contact number</th>
                                <th>Exam</th>
                                <th>Demo</th>
                                <th>Contract Signing</th>
                                <th>More</th>
                            </tr>

                            </thead>

                            <tbody>

                            <?php
                                require "dbconnection.php";
                                $sql = "SELECT 
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
                                on emp.id = appinf.empid WHERE  status='applicant' order by emp.id desc";
                                $res = $conn->query($sql);

                                if(!$res)
                                    echo "no data on the the book table";


                                while($row =mysqli_fetch_object($res)){
                            ?>
                            <tr>
                                <td><?php echo $row->firstname." ".$row->lastname; ?></td>
                                <td><?php echo $row->contact ?></td>
                                <td><?php if($row->examination == null || $row->examination == "" || $row->examination == "NULL"){echo "No Result Yet";} else{ echo $row->examination;} ?></td>
                                <td><?php if($row->demo == null || $row->demo == "" || $row->demo == "NULL"){echo "No Result Yet";} else{ echo $row->demo;} ?></td>
                                <td><?php if($row->contractSigning == null || $row->contractSigning == "" || $row->contractSigning == "NULL"){echo "No Result Yet";} else{ echo $row->contractSigning;} ?></td>
                                <td>
                                <a href="applicant-profile.php?id=<?php echo $row->id?>" class="btn btn-success">View Profile</a>
                                </td>
                            </tr>
                        
                            <?php
                                }    
                            ?>
                            </tbody>
                        </table>
                        </div>
                    </div>

                </div>
          </div>
        </div>  
    </div>  

</div>