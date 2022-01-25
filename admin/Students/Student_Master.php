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
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="txt_Contact">Contact</label>
                    <input type="text" id="txt_Contact" name="txt_Contact" class="form-control" />
                </div>
                <div class="form-group col-md-4">
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
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="txt_10thpercentage">Class 10 Percentage</label>
                    <input type="text" id="txt_10thpercentage" name="txt_10thpercentage" class="form-control" />
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="12thordiploma">Are you a Diploma Student?</label>
                    <select id="12thordiploma" name="12thordiploma" class="form-control">
                        <option value="No">No</option>
                        <option value="Yes">Yes</option>
                    </select>
                </div>
            </div>
            <div class="form-row ">
                <div class="form-group col-md-4 class12th">
                    <label for="txt_12thpercentage">12th Percentage</label>
                    <input type="text" id="txt_12thpercentage" name="txt_12thpercentage" class="form-control" />
                </div>
                <div class="form-group col-md-4 class12th">
                    <label for="txt_JEEscore">JEE Score</label>
                    <input type="text" id="txt_JEEscore" name="txt_JEEscore" class="form-control" />
                </div>
                <div class="form-group col-md-4 class12th">
                    <label for="txt_CETscore">CET Score</label>
                    <input type="text" id="txt_CETscore" name="txt_CETscore" class="form-control" />
                </div>
                <div class="form-group col-md-4 diploma-form-group">
                    <label for="txt_diplomapercentage">Diploma Percentage</label>
                    <input type="text" id="txt_diplomapercentage" name="txt_diplomapercentage" class="form-control" />
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

                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="select_Branch">Branch</label>
                    <select id="select_Branch" name="select_Branch" class="form-control">

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
                <div class="form-group col-md-3">
                    <label for="txt_Student_College_Id">College ID Number</label>
                    <input type="text" id="txt_Student_College_Id" name="txt_Student_College_Id" class="form-control">
                    </input>
                </div>
                <div class="form-group col-md-3">
                    <label for="select_Roll_Number">Roll Number</label>
                    <input type="number" min="1" max="120" id="select_Roll_Number" name="select_Roll_Number" class="form-control">
                    </input>
                </div>
            </div>

            <div class="my-4">
                <center>
                    <button type="submit" name="submit" value="submit" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-success">Reset</button>
                </center>
            </div>

            <input type="button" value="Back To List" onclick="window.location.href='Index.php'" class="btn btn-primary" />

        </form>


    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>
        $(".diploma-form-group").hide();

        $("#12thordiploma").change(function() {
            let isDiplomaStudent = $("#12thordiploma").val();

            if (isDiplomaStudent == "Yes") {
                $(".diploma-form-group").show();
                $(".class12th").hide();
            } else {
                $(".diploma-form-group").hide();
                $(".class12th").show();
            }
        });

        // $("#select_Year").change(function() {
        //     var year = parseInt($("#select_Year").val());
        //     $("#select_Semester").empty();

        //     if (year == 0) {
        //         html = "<option value='0'>--Select--</option>" +
        //             "<option value='1'>Semester 1</option>" +
        //             "<option value='2'>Semester 2</option>" +
        //             "<option value='3'>Semester 3</option>" +
        //             "<option value='4'>Semester 4</option>" +
        //             " <option value='5'>Semester 5</option>" +
        //             "<option value='6'>Semester 6</option>" +
        //             "<option value='7'>Semester 7</option>" +
        //             "<option value='8'>Semester 8</option>";
        //         $("#select_Semester").append(html);
        //     } else {
        //         var html = "";
        //         switch (year) {
        //             case 1:
        //                 html = "<option value='1'>Semester 1</option><option value='2'>Semester 2</option>"
        //                 break;
        //             case 2:
        //                 html = "<option value='3'>Semester 3</option><option value='4'>Semester 4</option>"
        //                 break;
        //             case 3:
        //                 html = "<option value='5'>Semester 5</option><option value='6'>Semester 6</option>"
        //                 break;
        //             case 4:
        //                 html = "<option value='7'>Semester 7</option><option value='8'>Semester 8</option>"
        //                 break;
        //         }

        //         $("#select_Semester").append(html);
        //     }
        // });

        // $(".diploma-form-group").hidefg();
    </script>
    <!-- <script>
        function logout() {
            window.location.href = '../../Login.php';
        }
    </script> -->
</body>

</html>