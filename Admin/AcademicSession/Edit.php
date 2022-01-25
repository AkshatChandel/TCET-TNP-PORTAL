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

    <title>Academic Session</title>
</head>

<body>

    <div class="container" id="main-container">
        <form action="" method="POST">

            <div class="my-4" style="color:#0041b3">
                <h4>Academic Session</h4>
            </div>

            <div class="form-row mt-5">
                <div class="form-group col-md-4">
                    <label for="txt_SessionName">Session Name</label>
                    <input type="text" id="txt_SessionName" name="txt_SessionName" class="form-control" required="required" />
                </div>
                <div class="form-group col-md-4">
                    <label for="select_SessionStatus">Session Status</label>
                    <select id="select_SessionStatus" name="select_SessionStatus" class="form-control">
                        <option>Active</option>
                        <option>De-Active</option>
                    </select>
                </div>
            </div>

            <div class="my-4">
                <center>
                    <button type="submit" name="submit" value="submit" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-success">Reset</button>
                </center>
            </div>

            <?php

            $AcademicSessionId = $_GET['AcademicSessionId'];

            $sql = "SELECT * FROM academic_master WHERE Academic_Id = " . $AcademicSessionId;
            $result = $con->query($sql);

            while ($row = mysqli_fetch_array($result)) {
                $SessionName =  $row['Academic_Name'];
                $SessionStatus =  $row['Academic_Status'];
            }

            if (isset($_POST['submit'])) {
                $SessionName = $_POST['txt_SessionName'];
                $SessionStatus = $_POST['select_SessionStatus'];

                $sql = "UPDATE academic_master SET Academic_Name='$SessionName',Academic_Status='$SessionStatus' WHERE Academic_Id='$AcademicSessionId'";

                if ($con->query($sql) === TRUE) {
                    echo "<script> location.href='Index.php'; </script>";
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
        let SessionName = "<?php echo $SessionName ?>";
        let SessionStatus = "<?php echo $SessionStatus ?>";

        $("#txt_SessionName").val(SessionName);

        let select_SessionStatus = document.getElementById("select_SessionStatus");
        let options_SessionStatus = select_SessionStatus.options;
        for (let j = 0, option; option = options_SessionStatus[j]; j++) {
            if (option.value == SessionStatus) {
                select_SessionStatus.selectedIndex = j;
            }
        }
    </script>

    <script>
        function logout() {
            window.location.href = '../../Login.php';
        }
    </script>

</body>

</html>