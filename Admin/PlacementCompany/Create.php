<?php
require '../../connection.php';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Company</title>
</head>

<body>

    <div class="container" id="main-container">
        <form action="" method="POST">
            <div class="my-4" style="color:#0041b3">
                <h4>Company Master</h4>
            </div>
            <hr color="grey">
            <div class="form-row mt-5">
                <div class="form-group col-md-8">
                    <label for="txt_CompanyName">Company Name</label>
                    <input type="text" id="txt_CompanyName" name="txt_CompanyName" placeholder="Company Name" class="form-control" required="required" />
                </div>
                <div class="form-group col-md-4">
                    <label for="txt_CompanyStatus">Company Status</label>
                    <select id="txt_CompanyStatus" name="txt_CompanyStatus" class="form-control" required="required">
                        <option value="Active">Active</option>
                        <option value="De-Active">De-Active</option>
                    </select>
                </div>
                <!-- <div class="form-group col-md-3">
                    <label for="txt_MinimumClass10Percentage">Minimum Class 10 Percentage</label>
                    <input type="text" id="txt_MinimumClass10Percentage" name="txt_MinimumClass10Percentage" class="form-control" />
                </div>
                <div class="form-group col-md-3">
                    <label for="txt_MinimumClass12Percentage">Minimum Class 12 Percentage</label>
                    <input type="text" id="txt_MinimumClass12Percentage" name="txt_MinimumClass12Percentage" class="form-control" required="required" />
                </div> -->
            </div>
            <!-- <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="txt_MinimumClass10Percentage">Minimum Diploma Percentage</label>
                    <input type="text" id="txt_MinimumClass10Percentage" name="txt_MinimumClass10Percentage" class="form-control" />
                </div>
                <div class="form-group col-md-3">
                    <label for="txt_MinimumClass10Percentage">Minimum CGPA</label>
                    <input type="text" id="txt_MinimumClass10Percentage" name="txt_MinimumClass10Percentage" class="form-control" />
                </div>
            </div> -->

            <hr color="grey">
            <div class="my-4" style="color:#0041b3">
                <h5>Company Criteria</h5>
            </div>

            <div class="form-row">
                <button class="btn btn-primary mb-3" type="button" id="btn_CompanyCriteria_AddRow" onclick="addCompanyCriteriaRow()">Add Row</button>
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <!-- <th>Sr. No.</th> -->
                            <th>Company Criteria</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="company-criteria-tbody"></tbody>
                </table>
            </div>

            <hr color="grey">
            <div class="my-4" style="color:#0041b3">
                <h5>Open For Branches</h5>
            </div>

            <div class="form-row">
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>Sr. No.</th>
                            <th>Branch</th>
                            <th>Code</th>
                            <th><input type='checkbox' id='radio_CompanyOpenForBranchId_SelectAllBranches' /></th>
                        </tr>
                    </thead>
                    <tbody id="company-branches-tbody">
                        <?php

                        $sql1 = "SELECT * FROM Branch_Master WHERE Branch_Status = 'Active'";
                        $result1 = $con->query($sql1);

                        $rowCount = 0;

                        while ($row1 = mysqli_fetch_array($result1)) {
                            $rowCount++;
                            echo "<tr>";
                            echo "<td>" . $rowCount . "</td>";
                            echo "<td>" . $row1['Branch_Name'] . "</td>";
                            echo "<td>" . $row1['Branch_Code'] . "</td>";
                            echo "<td><input type='checkbox' name='checkbox_CompanyOpenForBranchId' value='" . $row1['Branch_Id'] . "'/></td>";
                            echo "</tr>";
                        }

                        ?>
                    </tbody>
                </table>
            </div>

            <hr color="grey">
            <div class="my-4" style="color:#0041b3">
                <h5>Company Rounds</h5>
            </div>

            <div class="form-row">
                <button class="btn btn-primary mb-3" type="button" id="btn_AddCompanyRound" onclick="addCompanyRound()">Add Row</button>
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <!-- <th>Sr. No.</th> -->
                            <th>Round</th>
                            <th>Date Time</th>
                            <th>Duration (in minutes)</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="company-round-tbody"></tbody>
                </table>
            </div>

            <div class="my-4">
                <center>
                    <button type="submit" name="submit" value="submit" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-success">Reset</button>
                </center>
            </div>

            <?php
            if (isset($_POST['submit'])) {
                $CompanyName = $_POST['txt_CompanyName'];
                // $CompanyStatus = $_POST['select_CompanyStatus'];
                $CompanyStatus = "Active";

                $sql1 = "INSERT INTO placement_company(Company_Name, Placement_Company_Status) VALUES('$CompanyName', '$CompanyStatus')";

                if ($con->query($sql1) === TRUE) {

                    $sql2 = "SELECT max(Placement_Company_Id) as id from placement_company";
                    $result2 = $con->query($sql2);
                    $row2 = $result2->fetch_assoc();

                    $CompanyId = $row2['id'];

                    $CompanyCriterias = $_POST['txt_CompanyCriteria'];

                    echo $CompanyCriterias;

                    for ($i = 0; $i < count($CompanyCriterias); $i++) {
                        $CompanyCriteria = $CompanyCriterias[$i];
                        $sql3 = "INSERT INTO company_criteria(Company_Id, Criteria) VALUES( " . $CompanyId . ", " . $CompanyCriteria . ")";
                        $con->query($sql3);
                    }

                    $CompanyOpenForBranches = $_POST['checkbox_CompanyOpenForBranchId'];
                    for ($i = 0; $i < count($CompanyOpenForBranches); $i++) {
                        $CompanyOpenForBranchId = $CompanyOpenForBranches[$i];
                        $sql4 = "INSERT INTO company_branch(Company_Id, Branch_Id) VALUES(" . $CompanyId . ", " . $CompanyOpenForBranchId . ")";
                        $con->query($sql4);
                    }

                    $CompanyRounds = $_POST['txt_CompanyRoundName'];
                    $CompanyRoundDateTimes = $_POST['txt_CompanyRoundDateTime'];
                    $CompanyRoundDurations = $_POST['txt_CompanyRoundDuration'];
                    $CompanyRoundStatus = $_POST['select_CompanyRoundStatus'];
                    for ($i = 0; $i < count($CompanyRounds); $i++) {
                        $CompanyRound = $CompanyCriterias[$i];
                        $CompanyRoundDateTime = $CompanyRoundDateTimes[$i];
                        $CompanyRoundDuration = $CompanyRoundDurations[$i];
                        $Status = $CompanyRoundStatus[$i];
                        $sql5 = "INSERT INTO company_round(Company_Id, Round_Name, Round_DateTime, Round_Duration, Round_Status) VALUES( " . $CompanyId . ", " . $CompanyRound . ", " . $CompanyRoundDateTime . ", " . $CompanyRoundDuration . ", " . $Status . ")";
                        $con->query($sql5);
                    }

                    // echo "<script> location.href='Index.php'; </script>";
                } else {
                    echo "<br>error: " . $sql1 . "<br>" . $con->error;
                }
            }
            ?>

            <input type="button" value="Back To List" onclick="window.location.href='Index.php'" class="btn btn-primary">

        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script>
        function addCompanyCriteriaRow() {
            let html = "<tr><td><input type='text' class='form-control' name='txt_CompanyCriteria' required /></td>" +
                "<td><button type='button' class='btn btn-danger btn_CompanyCriteria_RemoveRow' onclick='removeCompanyCriteriaRow(this)'>-</button></td></tr>";
            $("#company-criteria-tbody").append(html);
        }

        function removeCompanyCriteriaRow(btn) {
            btn.parentNode.parentNode.remove();
        }

        addCompanyCriteriaRow();
        addCompanyCriteriaRow();
        addCompanyCriteriaRow();

        function addCompanyRound() {
            let html = "<tr><td><input type='text' class='form-control' name='txt_CompanyRoundName' required /></td><td><input type='datetime-local' class='form-control' name='txt_CompanyRoundDateTime' required /></td><td><input type='number' class='form-control' name='txt_CompanyRoundDuration' required /></td><td><select class='form-control' name='select_CompanyRoundStatus'><option value='To be held'>To be held</option><option value='In Progress'>In Progress</option><option value='Completed'>Completed</option><option>Cancelled</option></select></td><td><button type='button' class='btn btn-danger btn_CompanyRound_RemoveRow' onclick='removeCompanyRoundRow(this)'>-</button></td></tr>";

            $("#company-round-tbody").append(html);
        }

        function removeCompanyRoundRow(btn) {
            btn.parentNode.parentNode.remove();
        }

        addCompanyRound();
        addCompanyRound();
        addCompanyRound();
    </script>

    <script>
        function logout() {
            window.location.href = '../../Login.php';
        }
    </script>

</body>

</html>