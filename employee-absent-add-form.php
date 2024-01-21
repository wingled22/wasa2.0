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
                            <div class="card-body" style="">

                                <input type="text" style="display:none" name="empID" value="<?php echo $_GET['id'] ?>" required>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Reason</label>
                                            <input type="text" class="form-control" id="" placeholder="Reason"
                                                name="reason" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Type</label>
                                            <select class="form-control" id="" placeholder="Type of Absent" required
                                                name="type">
                                                <option value="With Pay">With Pay</option>
                                                <option value="With Out Pay">With Out Pay</option>
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
                                    <div class="col-6" id="timeOptionContainer" style="display:none;">
                                        <div class="form-group">
                                            <label for="timeOption">Select time option:</label>
                                            <select class="form-control" id="timeOption" name="timeOption">
                                                <!-- <option value=""></option> -->
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
                                            <input type="text" name="dateStart" class="form-control" id="currentDate" readonly>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="result">
                                            <label for="selectedDate">Selected Date:</label>
                                            <input type="text" name="dateEnd" class="form-control" id="selectedDate" readonly>
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

                            </div><!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="employee-profile.php?id=<?php echo $_GET['id']; ?>"
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
        // Get the selected date from the input
        var selectedDate = new Date(document.getElementById('dateInput').value);

        // Get today's date as a string
        var todayString = new Date().toDateString();

        // Check if a valid date is selected and if it's the current date
        if (!isNaN(selectedDate.getTime()) && selectedDate.toDateString() === todayString) {
            // Show the time option container
            document.getElementById('timeOptionContainer').style.display = 'block';
        } else {
            // Hide the time option container
            document.getElementById('timeOptionContainer').style.display = 'none';
        }

        // Calculate and display the current date, selected date, and result
        calculateDays();
    }

    function calculateDays() {
        // Get the selected date from the input
        var selectedDate = new Date(document.getElementById('dateInput').value);

        // Get today's date
        var today = new Date();

        // Calculate the difference in milliseconds
        var timeDiff = selectedDate - today;

        // Convert the difference to days
        var daysDiff = Math.ceil(timeDiff / (1000 * 60 * 60 * 24));

        // Get the selected time option
        var timeOption = document.getElementById('timeOption').value;

        // Adjust the days difference based on the time option if the selected date is the current date
        if (timeOption === 'halfDay' && selectedDate.toDateString() === today.toDateString()) {
            daysDiff = 0.5;
        } else if (timeOption === 'fullDay' && selectedDate.toDateString() === today.toDateString()) {
            daysDiff = 1;
        }

        // Display the current date, selected date, and result
        document.getElementById('currentDate').value = today.toDateString();
        document.getElementById('selectedDate').value = selectedDate.toDateString();
        document.getElementById('daysDifference').value = daysDiff;
    }

    // Call showTimeOption() initially to set the initial state of the time option container
    showTimeOption();
</script>

<!-- Include any other necessary scripts or libraries here -->
