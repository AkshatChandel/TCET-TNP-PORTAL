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

    <title>Branch</title>
</head>

<body>
    <div class="container-fluid">
        <div>
            <div class="my-4" style="color:#0041b3">
                <h4>Branch Master</h4>
            </div>

            <div class="my-5">

                <input type="button" value="Create" onclick="window.location.href='Create.php'" class="btn btn-primary" />
                <!-- <div class="p-4">
                     <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Branch Name</th>
                                <th scope="col">Branch Code</th>
                                <th scope="col">Branch Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table> 
                </div> -->
                <?php

                echo '<div class="p-4">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Branch Name</th>
                    <th scope="col">Branch Code</th>
                    <th scope="col">Branch Status</th>
                    <th></th>
                  </tr> 
                </thead>';
                $sql = "SELECT Branch_Id,Branch_Name,Branch_Code,Branch_Status FROM branch_master";
                $result = $con->query($sql);
                //if ($result->num_rows > 0)

                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['Branch_Name'] . "</td>";
                    echo "<td>" . $row['Branch_Code'] . "</td>";
                    echo "<td>" . $row['Branch_Status'] . "</td>";
                    echo "<td><button type='button' class='btn btn-success' onclick='edit(" . $row['Branch_Id'] . ")'>Edit</button></td>";
                    echo "</tr>";
                }

                ?>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

        <script>
            function edit(BranchId) {
                window.location.href = 'Edit.php?BranchId=' + BranchId;
            }
        </script>

        <script>
            function logout() {
                window.location.href = '../../Login.php';
            }
        </script>

</body>

</html>