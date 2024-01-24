<?php
if ($_GET['id'] == null) {
    header("location: employees.php");
}

include_once "~/../php-includes/header.php";

require_once "dbconnection.php";

$certID = $_GET['id'];

$sqlQuery = "SELECT * FROM absent WHERE id = $certID limit 1";

$res = $conn->query($sqlQuery);

$row = $res->fetch_assoc();
?>

<div class="content-wrapper" style="min-height: 879.062px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Update Absent</h1>
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
                            <h3 class="card-title">Absent</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="employee-absent-update.php" method="POST">
                            <div class="card-body" style="">

                                <input type="text" style="display:none" name="empID" value="<?php echo $_GET['empid'] ?>" required>
                                <input type="text" style="display:none" name="Id" value="<?php echo $_GET['id'] ?>" required>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Reason</label>
                                            <input type="text" class="form-control" id="" placeholder="Reason"
                                                name="reason" value="<?php echo $row['reason']?>" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Type</label>
                                            <select class="form-control" id="" placeholder="Type of Absent" required
                                                name="type">
                                                <option value="With Pay" <?php echo ($row['status'] === 'With Pay') ? 'selected' : ''; ?>>With Pay</option>
                                                <option value="With Out Pay" <?php echo ($row['status'] === 'With Out Pay') ? 'selected' : ''; ?>>With Out Pay</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="dateInput">Select a date:</label>
                                            <input type="date" class="form-control" id="dateInput" oninput="showTimeOption()">
                                        </div>
                                    </div>
                                    <div class="col-6" id="timeOptionContainer" style="">
                                        <div class="form-group">
                                            <label for="timeOption">Select time option:</label>
                                            <select class="form-control" id="timeOption" name="timeOption">
                                                <option value="halfDay">Half Day</option>
                                                <option value="fullDay">Full Day</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="result">
                                            <label for="currentDate">Current Date:</label>
                                            <input type="text" name="dateStart" class="form-control" id="currentDate" readonly value="<?php echo $row['datestart']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="result">
                                            <label for="selectedDate">Selected Date:</label>
                                            <input type="text" name="dateEnd" class="form-control" id="selectedDate" readonly value="<?php echo $row['dateEnd']; ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="result">
                                            <label for="daysDifference">Number of Days:</label>
                                            <input type="text" name="days" class="form-control" id="daysDifference" readonly value="<?php echo $row['numday']; ?>">
                                        </div>
                                    </div>
                                </div>

                            </div><!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="employee-profile.php?id=<?php echo $_GET['empid']; ?>"
                                    class="btn btn-danger">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

</div>

<script>
    function showTimeOption() {
        var selectedDate = new Date(document.getElementById('dateInput').value);
        var todayString = new Date().toDateString();

        if (!isNaN(selectedDate.getTime()) && selectedDate.toDateString() === todayString) {
            document.getElementById('timeOptionContainer').style.display = 'block';
        } else {
            document.getElementById('timeOptionContainer').style.display = 'none';
        }

        calculateDays();
    }

    function calculateDays() {
        var selectedDate = new Date(document.getElementById('dateInput').value);
        var today = new Date();
        var timeDiff = selectedDate - today;
        var daysDiff = Math.ceil(timeDiff / (1000 * 60 * 60 * 24));
        var timeOption = document.getElementById('timeOption').value;

        if (timeOption === 'halfDay' && selectedDate.toDateString() === today.toDateString()) {
            daysDiff = 0.5;
        } else if (timeOption === 'fullDay' && selectedDate.toDateString() === today.toDateString()) {
            daysDiff = 1;
        }

        document.getElementById('currentDate').value = today.toDateString();
        document.getElementById('selectedDate').value = selectedDate.toDateString();
        document.getElementById('daysDifference').value = daysDiff;
    }

    //showTimeOption();
</script>
