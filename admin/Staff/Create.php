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

    <title>Staff</title>
</head>

<body>

    <div class="container" id="main-container">
        <form action="" method="POST">
            <div class="my-4" style="color:#0041b3">
                <h4>Staff Master</h4>
            </div>
            <hr color="grey">
            <div class="my-4" style="color:#0041b3">
                <h5>Personal Details</h5>
            </div>
            <div class="form-row mt-5">
                <div class="form-group col-md-4">
                    <label for="txt_FirstName">First Name</label>
                    <input type="text" id="txt_FirstName" name="txt_FirstName" class="form-control" required="required" />
                </div>
                <div class="form-group col-md-4">
                    <label for="txt_MiddleName">Middle Name</label>
                    <input type="text" id="txt_MiddleName" name="txt_MiddleName" class="form-control" />
                </div>
                <div class="form-group col-md-4">
                    <label for="txt_LastName">Last Name</label>
                    <input type="text" id="txt_LastName" name="txt_LastName" class="form-control" required="required" />
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="txt_DateOfBirth">Date Of Birth</label>
                    <input type="date" id="txt_DateOfBirth" name="txt_DateOfBirth" class="form-control" />
                </div>
                <div class="form-group col-md-3">
                    <label for="select_Gender">Gender</label>
                    <select id="select_Gender" name="select_Gender" class="form-control">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="txt_Contact">Contact</label>
                    <input type="text" id="txt_Contact" name="txt_Contact" class="form-control" />
                </div>
                <div class="form-group col-md-3">
                    <label for="txt_Email">Email ID</label>
                    <input type="email" id="txt_Email" name="txt_Email" class="form-control" required="required" />
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="txt_Address">Address</label>
                    <input type="text" id="txt_Address" name="txt_Address" class="form-control" />
                </div>
            </div>
    </div>




    <?php

    $sql = "SELECT * FROM branch_master WHERE branch_status = \"Active\"";
    $result = $con->query($sql);
    while ($row = $result->fetch_array()) {
        echo "<option value ='" . $row['Branch_Id'] . "'>" . $row['Branch_Name'] . "</option>";
    }

    ?>

    </div>
    </div> -

    <div class="form-row">

        <div class="my-4">
            <center>
                <button type="submit" name="submit" value="submit" class="btn btn-success">Submit</button>
                <button type="reset" class="btn btn-success">Reset</button>
            </center>
        </div>

        <?php
        if (isset($_POST['submit'])) {
            $FirstName = $_POST['txt_FirstName'];
            $MiddleName = $_POST['txt_MiddleName'];
            $LastName = $_POST['txt_LastName'];
            $DateOfBirth = $_POST['txt_DateOfBirth'];
            $Gender = $_POST['select_Gender'];
            $ContactNo = $_POST['txt_Contact'];
            $EmailId = $_POST['txt_Email'];
            $Address = $_POST['txt_Address'];

            $StaffStatus = "Active";

            $BranchId = $_POST['select_Branch'];

            $sql1 = "INSERT INTO staff_master(First_Name, Middle_Name, Last_Name, Date_Of_Birth, Gender, Contact_No, Email_Id, Address, Staff_Status) VALUES('" . $FirstName . "','" . $MiddleName . "','" . $LastName . "','" . $DateOfBirth . "','" . $Gender . "','" . $ContactNo . "','" . $EmailId . "','" . $Address . ",'" . $StaffStatus . "')";

            if ($con->query($sql1) === TRUE) {

                $sql2 = "SELECT max(Staff_Id) as id from staff_master";
                $result2 = $con->query($sql2);
                $row2 = $result2->fetch_assoc();

                $Staff_Id = $row2['id'];
                $StudentClassStatus = "Active";

                $sql3 = "INSERT INTO student_class(Student_Id, Academic_Id, Branch_Id, Semester, Roll_No, Student_Class_Status) VALUES(" . $Student_Id . "," . $AcademicId . "," . $BranchId . "," . $Semester . "," . $RollNo . ",'" . $StudentClassStatus . "')";

                if ($con->query($sql3) === TRUE) {
                    echo "<script> location.href='Index.php'</script>";
                }
            } else {
                echo "<br>error: " . $sql . "<br>" . $con->error;
            }
        }
        ?>

        <input type="button" value="Back To List" onclick="window.location.href='Index.php'" class="btn btn-primary" />

        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script>
        function logout() {
            window.location.href = '../../Login.php';
        }
    </script>

</body>

</html>