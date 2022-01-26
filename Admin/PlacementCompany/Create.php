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
                <div class="form-group col-md-4">
                    <label for="txt_CompanyName">Company Name</label>
                    <input type="text" id="txt_CompanyName" name="txt_CompanyName" class="form-control" required="required" />
                </div>
                <div class="form-group col-md-4">
                    <label for="txt_MinimumClass10Percentage">Minimum Class 10 Percentage</label>
                    <input type="text" id="txt_MinimumClass10Percentage" name="txt_MinimumClass10Percentage" class="form-control" />
                </div>
                <div class="form-group col-md-4">
                    <label for="txt_MinimumClass12Percentage">Minimum Class 12 Percentage</label>
                    <input type="text" id="txt_MinimumClass12Percentage" name="txt_MinimumClass12Percentage" class="form-control" required="required" />
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

            <hr color="grey">
            <div class="my-4" style="color:#0041b3">
                <h5>Previous Academic Details </h5>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="txt_10thPercentage">Class 10 Percentage</label>
                    <input type="text" id="txt_10thPercentage" name="txt_10thPercentage" class="form-control" />
                </div>
                <div class="form-group col-md-4">
                    <label for="select_IsDiplomaStudent">Are you a Diploma Student?</label>
                    <select id="select_IsDiplomaStudent" name="select_DiplomaStudent_Or_Class12" class="form-control">
                        <option value="Class 12">No</option>
                        <option value="Diploma">Yes</option>
                    </select>
                </div>
                <div class="form-group col-md-4 class12-form-group">
                    <label for="txt_12thPercentage">12th Percentage</label>
                    <input type="text" id="txt_12thPercentage" name="txt_12thPercentage" class="form-control" />
                </div>
                <div class="form-group col-md-4 diploma-form-group">
                    <label for="txt_DiplomaPercentage">Diploma Percentage</label>
                    <input type="text" id="txt_DiplomaPercentage" name="txt_DiplomaPercentage" class="form-control" />
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3 class12-form-group">
                    <label for="txt_JEEScore">JEE Score</label>
                    <input type="text" id="txt_JEEScore" name="txt_JEEScore" class="form-control" />
                </div>
                <div class="form-group col-md-3 class12-form-group">
                    <label for="txt_JEEScoreOutOf">JEE Score Out Of</label>
                    <input type="text" id="txt_JEEScoreOutOf" name="txt_JEEScoreOutOf" class="form-control" />
                </div>
                <div class="form-group col-md-3 class12-form-group">
                    <label for="txt_CETScore">CET Score</label>
                    <input type="text" id="txt_CETScore" name="txt_CETScore" class="form-control" />
                </div>
                <div class="form-group col-md-3 class12-form-group">
                    <label for="txt_CETScoreOutOf">CET Score Out Of</label>
                    <input type="text" id="txt_CETScoreOutOf" name="txt_CETScoreOutOf" class="form-control" />
                </div>
            </div>

            <hr color="grey">
            <div class="my-4" style="color:#0041b3">
                <h5>Academic Details </h5>
            </div>

            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="select_Academic_Session_Id">Academic Session</label>
                    <select id="select_Academic_Session_Id" name="select_Academic_Session_Id" class="form-control">
                        <?php

                        $sql = "SELECT * FROM academic_master";
                        $result = $con->query($sql);
                        while ($row = $result->fetch_array()) {
                            echo "<option value ='" . $row['Academic_Id'] . "'>" . $row['Academic_Name'] . "</option>";
                        }

                        ?>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="select_Branch">Branch</label>
                    <select id="select_Branch" name="select_Branch" class="form-control">
                        <?php

                        $sql = "SELECT * FROM branch_master WHERE branch_status = \"Active\"";
                        $result = $con->query($sql);
                        while ($row = $result->fetch_array()) {
                            echo "<option value ='" . $row['Branch_Id'] . "'>" . $row['Branch_Name'] . "</option>";
                        }

                        ?>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="select_Year">Year</label>
                    <select id="select_Year" name="select_Year" class="form-control">
                        <option value='0'>--Select--</option>
                        <option value='1'>FE</option>
                        <option value='2'>SE</option>
                        <option value='3'>TE</option>
                        <option value='4'>BE</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="select_Semester">Semester</label>
                    <select id="select_Semester" name="select_Semester" class="form-control">
                        <option value='0'>--Select--</option>
                        <option value='1'>Semester 1</option>
                        <option value='2'>Semester 2</option>
                        <option value='3'>Semester 3</option>
                        <option value='4'>Semester 4</option>
                        <option value='5'>Semester 5</option>
                        <option value='6'>Semester 6</option>
                        <option value='7'>Semester 7</option>
                        <option value='8'>Semester 8</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <!-- <div class="form-group col-md-3">
                    <label for="txt_Student_College_Id">College ID Number</label>
                    <input type="text" id="txt_Student_College_Id" name="txt_Student_College_Id" class="form-control">
                    </input>
                </div> -->
                <div class="form-group col-md-3">
                    <label for="txt_RollNo">Roll Number</label>
                    <input type="number" min="1" max="120" id="txt_RollNo" name="txt_RollNo" class="form-control">
                    </input>
                </div>
            </div>

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

                $Class10Percentage = $_POST['txt_10thPercentage'];
                $DiplomaStudent_Or_Class12 = $_POST['select_DiplomaStudent_Or_Class12'];
                $Class12Percentage = $_POST['txt_12thPercentage'];
                $DiplomaPercentage = $_POST['txt_DiplomaPercentage'];
                $JEEScore = $_POST['txt_JEEScore'];
                $JEEScoreOutOf = $_POST['txt_JEEScoreOutOf'];
                $CETScore = $_POST['txt_CETScore'];
                $CETScoreOutOf = $_POST['txt_CETScoreOutOf'];
                $StudentStatus = "Active";

                if ($DiplomaStudent_Or_Class12 == "Class 12") {
                    $DiplomaPercentage = 0;
                } else {
                    $Class12Percentage = 0;
                    $JEEScore = 0;
                    $JEEScoreOutOf = 0;
                    $CETScore = 0;
                    $CETScoreOutOf = 0;
                }


                $AcademicId = $_POST['select_Academic_Session_Id'];
                $BranchId = $_POST['select_Branch'];
                $Semester = $_POST['select_Semester'];
                // $StudentCollegeId = $_POST['txt_StudentCollegeId'];
                $RollNo = $_POST['txt_RollNo'];

                $sql1 = "INSERT INTO student_master(First_Name, Middle_Name, Last_Name, Date_Of_Birth, Gender, Contact_No, Email_Id, Address, Class_10_Percentage, From_Class12_Or_Diploma, Class_12_Percentage, Diploma_Percentage, JEE_Marks, JEE_Out_Of, CET_Marks, CET_Out_Of, Student_Status) VALUES('" . $FirstName . "','" . $MiddleName . "','" . $LastName . "','" . $DateOfBirth . "','" . $Gender . "','" . $ContactNo . "','" . $EmailId . "','" . $Address . "'," . $Class10Percentage . ",'" . $DiplomaStudent_Or_Class12 . "'," . $Class12Percentage . "," . $DiplomaPercentage . "," . $JEEScore . "," . $JEEScoreOutOf . "," . $CETScore . "," . $CETScoreOutOf . ",'" . $StudentStatus . "')";

                if ($con->query($sql1) === TRUE) {

                    $sql2 = "SELECT max(Student_Id) as id from student_master";
                    $result2 = $con->query($sql2);
                    $row2 = $result2->fetch_assoc();

                    $Student_Id = $row2['id'];
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
        $(".diploma-form-group").hide();

        $("#select_IsDiplomaStudent").change(function() {
            let isDiplomaStudent = $("#select_IsDiplomaStudent").val();

            if (isDiplomaStudent == "Diploma") {
                $(".diploma-form-group").show();
                $(".class12-form-group").hide();
            } else {
                $(".diploma-form-group").hide();
                $(".class12-form-group").show();
            }
        });

        $("#select_Year").change(function() {
            let year = parseInt($("#select_Year").val());
            $("#select_Semester").empty();

            if (year == 0) {
                let html = "<option value='0'>--Select--</option>" +
                    "<option value='1'>Semester 1</option>" +
                    "<option value='2'>Semester 2</option>" +
                    "<option value='3'>Semester 3</option>" +
                    "<option value='4'>Semester 4</option>" +
                    "<option value='5'>Semester 5</option>" +
                    "<option value='6'>Semester 6</option>" +
                    "<option value='7'>Semester 7</option>" +
                    "<option value='8'>Semester 8</option>";
                $("#select_Semester").append(html);
            } else {
                let html = "";
                switch (year) {
                    case 1:
                        html = "<option value='1'>Semester 1</option><option value='2'>Semester 2</option>"
                        break;
                    case 2:
                        html = "<option value='3'>Semester 3</option><option value='4'>Semester 4</option>"
                        break;
                    case 3:
                        html = "<option value='5'>Semester 5</option><option value='6'>Semester 6</option>"
                        break;
                    case 4:
                        html = "<option value='7'>Semester 7</option><option value='8'>Semester 8</option>"
                        break;
                }

                $("#select_Semester").append(html);
            }
        });

        $("#select_Semester").change(function() {

            let select_Year = document.getElementById("select_Year");
            let options_Year = select_Year.options;

            let Semester = parseInt($("#select_Semester").val());

            if (Semester == 1 || Semester == 2) {
                for (let j = 0, option; option = options_Year[j]; j++) {
                    if (option.value == 1) {
                        select_Year.selectedIndex = j;
                    }
                }
            } else if (Semester == 3 || Semester == 4) {
                for (let j = 0, option; option = options_Year[j]; j++) {
                    if (option.value == 2) {
                        select_Year.selectedIndex = j;
                    }
                }
            } else if (Semester == 5 || Semester == 6) {
                for (let j = 0, option; option = options_Year[j]; j++) {
                    if (option.value == 3) {
                        select_Year.selectedIndex = j;
                    }
                }
            } else if (Semester == 7 || Semester == 8) {
                for (let j = 0, option; option = options_Year[j]; j++) {
                    if (option.value == 4) {
                        select_Year.selectedIndex = j;
                    }
                }
            }
        });
    </script>
    <script>
        function logout() {
            window.location.href = '../../Login.php';
        }
    </script>

</body>

</html>