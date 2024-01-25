<?php
if ($_GET['id'] == null) {
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
                    <h1 class="m-0">Add Absent</h1>
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
                        <form action="employee-absent-add.php" method="POST">
    <div class="card-body">

        <!-- Input for Employee ID (I kept it hidden as in your original code) -->
        <input type="text" style="display:none" name="empID" value="<?php echo $_GET['id'] ?>" required>

        <!-- Reason and Type inputs -->
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Reason</label>
                    <input type="text" class="form-control" id="" placeholder="Reason" name="reason" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Type</label>
                    <select class="form-control" id="" placeholder="Type of Absent" required name="type">
                        <option value="With Pay">With Pay</option>
                        <option value="With Out Pay">With Out Pay</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Date inputs and time option container -->
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="dateInput">Date Applied:</label>
                    <input type="date" class="form-control"  name="dateapplied" required >
                </div>
            </div>
            <div class="col-6" id="timeOptionContainer" style="display:none;">
                <div class="form-group">
                    <label for="timeOption">Select time option:</label>
                    <select class="form-control" id="timeOption" name="timeOption">
                        <option value="fullDay">Full Day</option>
                        <option value="halfDay">Half Day</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Date range inputs and days difference -->
        <div class="row">
            <div class="col-6">
                <div class="result">
                    <label for="currentDate">Date From:</label>
                    <input type="date" name="dateStart" class="form-control" id="currentDate" >
                </div>
            </div>
            <div class="col-6">
                <div class="result">
                    <label for="selectedDate">Date To:</label>
                    <input type="date" name="dateEnd" class="form-control" id="dateInput" onchange="showTimeOption()" >
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="result">
                    <label for="daysDifference">Number of Days:</label>
                    <input type="text" name="days" class="form-control" id="daysDifference" readonly>
                </div>
            </div>
        </div>

    </div>

    <!-- Submit and Back buttons -->
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="employee-profile.php?id=<?php echo $_GET['id']; ?>" class="btn btn-danger">Back</a>
    </div>
</form>

<!-- JavaScript code -->
<script>
    function showTimeOption() {
        var selectedDate = new Date(document.getElementById('dateInput').value);
        var today = new Date();

        if (!isNaN(selectedDate.getTime()) && selectedDate.toDateString() === today.toDateString()) {
            document.getElementById('timeOptionContainer').style.display = 'block';
        } else {
            document.getElementById('timeOptionContainer').style.display = 'none';
        }

        calculateDays(today, selectedDate);
    }



    function calculateDays(today, selectedDate) {
        var timeDiff = selectedDate - today;
        var daysDiff = Math.ceil(timeDiff / (1000 * 60 * 60 * 24));

        var timeOption = document.getElementById('timeOption').value;

        if (timeOption === 'halfDay' && selectedDate.toDateString() === today.toDateString()) {
            daysDiff = 0.5;
        } else if (timeOption === 'fullDay' && selectedDate.toDateString() === today.toDateString()) {
            daysDiff = 1;
        }

        document.getElementById('currentDate').value = today.toISOString().split('T')[0];
        document.getElementById('dateInput').value = selectedDate.toISOString().split('T')[0];
        document.getElementById('daysDifference').value = daysDiff;
    }

    // Call showTimeOption on page load
    showTimeOption();
</script>

