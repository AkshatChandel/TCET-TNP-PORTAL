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
                <div class="form-group col-md-6">
                    <label for="txt_CompanyName">Company Name</label>
                    <input type="text" id="txt_CompanyName" name="txt_CompanyName" class="form-control" required="required" />
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
                            echo "<td><input type='checkbox' name='radio_CompanyOpenForBranchId'/></td>";
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
                            <th>Duration</th>
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

            <input type="button" value="Back To List" onclick="window.location.href='Index.php'" class="btn btn-primary">

        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script>
        function addCompanyCriteriaRow() {
            let html = "<tr><td><input type='text' class='form-control' name='txt_CompanyCriteria' /></td>" +
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
            let html = "<tr><td><input type='text' class='form-control' name='txt_CompanyRoundName' /></td><td><input type='datetime' class='form-control' name='txt_CompanyRoundDateTime' /></td><td><input type='number' class='form-control' name='txt_CompanyRoundDuration' /></td><td><button type='button' class='btn btn-danger btn_CompanyRound_RemoveRow' onclick='removeCompanyRoundRow(this)'>-</button></td></tr>";

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