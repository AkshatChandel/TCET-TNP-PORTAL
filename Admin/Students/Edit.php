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

    <title>Students</title>
</head>

<body>

    <div class="container" id="main-container">
        <form action="" method="POST">
            <div class="my-4" style="color:#0041b3">
                <h4>Student Master</h4>
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

            $StudentId = $_GET["StudentId"];
            $sql1 = "SELECT * FROM student_master NATURAL JOIN student_class WHERE Student_Id = " . $StudentId;
            $result1 = $con->query($sql1);

            while ($row1 = mysqli_fetch_array($result1)) {
                $StudentClassId = $row1['Student_Class_Id'];
                $FirstName =  $row1['First_Name'];
                $MiddleName =  $row1['Middle_Name'];
                $LastName =  $row1['Last_Name'];
                $DateOfBirth =  $row1['Date_Of_Birth'];
                $Gender =  $row1['Gender'];
                $ContactNo =  $row1['Contact_No'];
                $EmailId =  $row1['Email_Id'];
                $Address =  $row1['Address'];

                $Class10Percentage =  $row1['Class_10_Percentage'];
                $Class12OrDiploma =  $row1['From_Class12_Or_Diploma'];
                $DiplomaPercentage =  $row1['Diploma_Percentage'];
                $Class12Percentage =  $row1['Class_12_Percentage'];
                $JEEScore =  $row1['JEE_Marks'];
                $JEEScoreOutOf =  $row1['JEE_Out_Of'];
                $CETScore =  $row1['CET_Marks'];
                $CETScoreOutOf =  $row1['CET_Out_Of'];
                $StudentStatus = $row1['Student_Status'];

                $AcademicId = $row1['Academic_Id'];
                $BranchId = $row1['Branch_Id'];
                $Semester = $row1['Semester'];
                $RollNo = $row1['Roll_No'];
            }

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

                $sql2 = "UPDATE student_master SET First_Name = '" . $FirstName . "', Middle_Name = '" . $MiddleName . "', Last_Name = '" . $LastName . "', Date_Of_Birth = '" . $DateOfBirth . "', Gender = '" . $Gender . "', Contact_No = '" . $ContactNo . "', Email_Id = '" . $EmailId . "', Address = '" . $Address . "', Class_10_Percentage = " . $Class10Percentage . ", From_Class12_Or_Diploma = '" . $DiplomaStudent_Or_Class12 . "', Class_12_Percentage = " . $Class12Percentage . ", Diploma_Percentage = " . $DiplomaPercentage . ", JEE_Marks = " . $JEEScore . ", JEE_Out_Of = " . $JEEScoreOutOf . ", CET_Marks = " . $CETScore . ", CET_Out_Of = " . $CETScoreOutOf . ", Student_Status = '" . $StudentStatus . "' WHERE Student_Id = " . $StudentId;

                if ($con->query($sql2) === TRUE) {

                    $StudentClassStatus = "Active";

                    $sql3 = "UPDATE student_class SET Student_Id = " . $StudentId . ", Academic_Id = " . $AcademicId . ", Branch_Id = " . $BranchId . ", Semester = " . $Semester . ", Roll_No = " . $RollNo . ", Student_Class_Status = '" . $StudentClassStatus . "' WHERE student_class_id = " . $StudentClassId;

                    if ($con->query($sql3) === TRUE) {
                        echo "<script> location.href='Index.php'</script>";
                    } else {
                        echo "<br>error: " . $sql3 . "<br>" . $con->error;
                    }
                } else {
                    echo "<br>error: " . $sql2 . "<br>" . $con->error;
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
        let FirstName = "<?php echo $FirstName ?>";
        let MiddleName = "<?php echo $MiddleName ?>";
        let LastName = "<?php echo $LastName ?>";
        let DateOfBirth = "<?php echo $DateOfBirth ?>";
        let Gender = "<?php echo $Gender ?>";
        let ContactNo = "<?php echo $ContactNo ?>";
        let EmailId = "<?php echo $EmailId ?>";
        let Address = "<?php echo $Address ?>";

        let Class10Percentage = "<?php echo $Class10Percentage ?>";
        let Class12OrDiploma = "<?php echo $Class12OrDiploma ?>";
        let Class12Percentage = "<?php echo $Class12Percentage ?>";
        let DiplomaPercentage = "<?php echo $DiplomaPercentage ?>";
        let JEEScore = "<?php echo $JEEScore ?>";
        let JEEScoreOutOf = "<?php echo $JEEScoreOutOf ?>";
        let CETScore = "<?php echo $CETScore ?>";
        let CETScoreOutOf = "<?php echo $CETScoreOutOf ?>";

        let AcademicId = "<?php echo $AcademicId ?>";
        let BranchId = "<?php echo $BranchId ?>";
        let Semester = "<?php echo $Semester ?>";
        let RollNo = "<?php echo $RollNo ?>";

        $("#txt_FirstName").val(FirstName);
        $("#txt_MiddleName").val(MiddleName);
        $("#txt_LastName").val(LastName);
        $("#txt_DateOfBirth").val(DateOfBirth);
        $("#txt_Contact").val(ContactNo);
        $("#txt_Email").val(EmailId);
        $("#txt_Address").val(Address);

        $("#txt_10thPercentage").val(Class10Percentage);

        $("#txt_RollNo").val(RollNo);

        if (Class12OrDiploma == "Class 12") {
            $(".diploma-form-group").hide();
            $("#txt_12thPercentage").val(Class12Percentage);
            $("#txt_JEEScore").val(JEEScore);
            $("#txt_JEEScoreOutOf").val(JEEScoreOutOf);
            $("#txt_CETScore").val(CETScore);
            $("#txt_CETScoreOutOf").val(CETScoreOutOf);
        } else {
            $(".class12-form-group").hide();
            $("#txt_DiplomaPercentage").val(DiplomaPercentage);
        }

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

        let select_Gender = document.getElementById("select_Gender");
        let options_Gender = select_Gender.options;
        for (let j = 0, option; option = options_Gender[j]; j++) {
            if (option.value == Gender) {
                select_Gender.selectedIndex = j;
            }
        }

        let select_Class12OrDiploma = document.getElementById("select_IsDiplomaStudent");
        let options_Class12OrDiploma = select_Class12OrDiploma.options;
        for (let j = 0, option; option = options_Class12OrDiploma[j]; j++) {
            if (option.value == Class12OrDiploma) {
                select_Class12OrDiploma.selectedIndex = j;
            }
        }

        let select_AcademicId = document.getElementById("select_Academic_Session_Id");
        let options_AcademicId = select_AcademicId.options;
        for (let j = 0, option; option = options_AcademicId[j]; j++) {
            if (option.value == AcademicId) {
                select_AcademicId.selectedIndex = j;
            }
        }

        let select_Branch = document.getElementById("select_Branch");
        let options_Branch = select_Branch.options;
        for (let j = 0, option; option = options_Branch[j]; j++) {
            if (option.value == BranchId) {
                select_Branch.selectedIndex = j;
            }
        }

        let select_Semester = document.getElementById("select_Semester");
        let options_Semester = select_Semester.options;
        for (let j = 0, option; option = options_Semester[j]; j++) {
            if (option.value == Semester) {
                select_Semester.selectedIndex = j;
            }
        }

        let select_Year = document.getElementById("select_Year");
        let options_Year = select_Year.options;

        $("#select_Semester").empty();

        let html = "";

        if (Semester == 1 || Semester == 2) {
            html = "<option value='1'>Semester 1</option><option value='2'>Semester 2</option>"
            for (let j = 0, option; option = options_Year[j]; j++) {
                if (option.value == 1) {
                    select_Year.selectedIndex = j;
                }
            }
        } else if (Semester == 3 || Semester == 4) {
            html = "<option value='3'>Semester 3</option><option value='4'>Semester 4</option>"
            for (let j = 0, option; option = options_Year[j]; j++) {
                if (option.value == 2) {
                    select_Year.selectedIndex = j;
                }
            }
        } else if (Semester == 5 || Semester == 6) {
            html = "<option value='5'>Semester 5</option><option value='6'>Semester 6</option>"
            for (let j = 0, option; option = options_Year[j]; j++) {
                if (option.value == 3) {
                    select_Year.selectedIndex = j;
                }
            }
        } else if (Semester == 7 || Semester == 8) {
            html = "<option value='7'>Semester 7</option><option value='8'>Semester 8</option>"
            for (let j = 0, option; option = options_Year[j]; j++) {
                if (option.value == 4) {
                    select_Year.selectedIndex = j;
                }
            }
        }

        $("#select_Semester").append(html);

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
                html = "";
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

            Semester = parseInt($("#select_Semester").val());

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