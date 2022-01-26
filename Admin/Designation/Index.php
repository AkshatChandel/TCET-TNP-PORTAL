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

    <title>Designations</title>
</head>

<body>
    <div class="container-fluid">
        <div>
            <div class="my-4" style="color:#0041b3">
                <h4>Designations</h4>
            </div>

            <div class="my-5">
                <input type="button" value="Create" onclick="window.location.href='Create.php'" class="btn btn-primary" />
                <?php

                echo '<div class="p-4">';
                echo '<table class="table table-hover">';
                echo '<thead>';
                echo '<tr>';
                echo '<th>Sr. No.</th>';
                echo '<th scope="col">Designation</th>';
                echo '<th scope="col">Designation Status</th>';
                echo '<th></th>';
                echo '</tr> ';
                echo '</thead>';
                echo '<tbody>';

                $count = 1;

                $sql = "SELECT * FROM designation_master";
                $result = $con->query($sql);

                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $count . "</td>";
                    echo "<td>" . $row['Designation_Name'] . "</td>";
                    echo "<td>" . $row['Designation_Status'] . "</td>";
                    echo "<td><button type='button' class='btn btn-success' onclick='edit(" . $row['Designation_Id'] . ")'>Edit</button></td>";
                    echo "</tr>";

                    $count++;
                }

                echo '</tbody>';

                ?>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

        <script>
            function edit(AcademicSessionId) {
                window.location.href = 'Edit.php?DesignationId=' + AcademicSessionId;
            }
        </script>

        <script>
            function logout() {
                window.location.href = '../../Login.php';
            }
        </script>
</body>

</html>