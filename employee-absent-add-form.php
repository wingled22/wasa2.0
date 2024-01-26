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
                                            <input type="date" class="form-control" name="dateapplied" required>
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
                                            <input type="date" name="dateStart" class="form-control" id="dateFrom" oninput="calculateDateDifference()" value="<?php echo date('Y-m-d'); ?>">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="result">
                                            <label for="selectedDate">Date To:</label>
                                            <input type="date" name="dateEnd" class="form-control" id="dateTo" oninput="calculateDateDifference()">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="result">
                                            <label for="daysDifference">Number of Days:</label>
                                            <input type="text" name="days" class="form-control" id="result" readonly>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                     <!-- JavaScript code -->
 <script>
            function calculateDateDifference() {
                // Get input values from the user
                var dateFromStr = document.getElementById("dateFrom").value;
                var dateToStr = document.getElementById("dateTo").value;

                // Convert input strings to Date objects
                var dateFrom = new Date(dateFromStr);
                var dateTo = new Date(dateToStr);

                // Check if both dates are valid
                if (isNaN(dateFrom) || isNaN(dateTo)) {
                    document.getElementById("result").value = "";
                    return;
                }

                // Calculate the difference between the two dates in milliseconds
                var dateDifferenceMs = dateTo - dateFrom;

                // Convert the difference to days
                var dateDifferenceDays = dateDifferenceMs / (1000 * 60 * 60 * 24);

                // Display the result
                document.getElementById("result").value = "" + dateDifferenceDays;

                // Show time option container and set its value based on conditions
                showTimeOption(dateFrom, dateTo, dateDifferenceDays);
            }

            function showTimeOption(dateFrom, dateTo, dateDifferenceDays) {
                // Check if the selected date range is the same
                var isSameDate = dateFrom.toDateString() === dateTo.toDateString();

                // Get the time option container and the time option element
                var timeOptionContainer = document.getElementById("timeOptionContainer");
                var timeOptionElement = document.getElementById("timeOption");

                // Display the time option container if the date range is the same, otherwise hide it
                timeOptionContainer.style.display = isSameDate ? "block" : "none";

                // Set the value for the time option based on conditions
                if (isSameDate) {
                    // If it's the same date, set the default value to "fullDay"
                    timeOptionElement.value = "fullDay";

                    // Update the number of days based on the selected time option
                    timeOptionElement.addEventListener("change", function() {
                        var selectedTimeOption = timeOptionElement.value;
                        if (selectedTimeOption === "fullDay") {
                            document.getElementById("result").value = "1";
                        } else if (selectedTimeOption === "halfDay") {
                            document.getElementById("result").value = "0.5";
                        }
                    });
                }
            }
</script>


 
