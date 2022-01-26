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

    <title>Designation</title>
</head>

<body>

    <div class="container" id="main-container">
        <form action="" method="POST">

            <div class="my-4" style="color:#0041b3">
                <h4>Designation</h4>
            </div>

            <div class="form-row mt-5">
                <div class="form-group col-md-4">
                    <label for="txt_DesignationName">Designation Name</label>
                    <input type="text" id="txt_DesignationName" name="txt_DesignationName" class="form-control" required="required" />
                </div>
                <div class="form-group col-md-4">
                    <label for="select_DesignationStatus">Designation Status</label>
                    <select id="select_DesignationStatus" name="select_DesignationStatus" class="form-control">
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

            $DesignationId = $_GET['DesignationId'];

            $sql = "SELECT * FROM designation_master WHERE Designation_Id = " . $DesignationId;
            $result = $con->query($sql);

            while ($row = mysqli_fetch_array($result)) {
                $DesignationName =  $row['Designation_Name'];
                $DesignationStatus =  $row['Designation_Status'];
            }

            if (isset($_POST['submit'])) {
                $DesignationName = $_POST['txt_DesignationName'];
                $DesignationStatus = $_POST['select_DesignationStatus'];

                $sql = "UPDATE designation_master SET Designation_Name='$DesignationName', Designation_Status='$DesignationStatus' WHERE Designation_Id=" . $DesignationId;

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
        let DesignationName = "<?php echo $DesignationName ?>";
        let DesignationStatus = "<?php echo $DesignationStatus ?>";

        $("#txt_DesignationName").val(DesignationName);

        let select_DesignationStatus = document.getElementById("select_DesignationStatus");
        let options_DesignationStatus = select_DesignationStatus.options;
        for (let j = 0, option; option = options_DesignationStatus[j]; j++) {
            if (option.value == DesignationStatus) {
                select_DesignationStatus.selectedIndex = j;
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