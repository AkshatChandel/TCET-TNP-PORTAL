<?php

require 'connection.php';

$Username = $_GET["Username"];
$Password = $_GET["Password"];
$UserType = $_GET["UserType"];

$areUsernameAndPasswordCorrect = false;;

if ($UserType == "Admin" || $UserType == "Staff") {

    $sql1 = "SELECT * FROM Staff_Login WHERE Staff_Username = '" . $Username . "' AND Staff_Password = '" . $Password . "'";
    $result1 = $con->query($sql1);

    while ($row1 = mysqli_fetch_array($result1)) {
        if ($Username == $row['Staff_Username'] && $Password == $row['Staff_Password']) {

            $areUsernameAndPasswordCorrect = true;

            $StaffId = $row1['Staff_Id'];

            if ($UserType == "Admin" && $row['Is_Admin'] == "Yes") {
                $RoleType = "Admin";
                echo json_encode(array('StaffId' => $StaffId, 'RoleType' => $RoleType));
            } else if ($UserType == "Staff") {
                echo json_encode(array('StaffId' => $StaffId));
            } else {
                echo json_encode(array('StaffId' => 0)); // NOT LOGGED IN BECAUSE HE IS TRYING TO ACCESS THE ADMIN PAGE BUT HE IS NOT GIVEN THE ADMIN ACCESS
            }
        }
    }
} else if ($Admin == "Student") {

    $sql2 = "SELECT * FROM Student_Login WHERE Student_Username = '" . $Username . "' AND Student_Password = '" . $Password . "'";
    $result2 = $con->query($sql2);

    while ($row2 = mysqli_fetch_array($result2)) {
        if ($Username == $row1['Student_Username'] && $Password == $row1['Student_Password']) {

            $areUsernameAndPasswordCorrect = true;

            $StudentId = $row2['Student_Id'];

            echo json_encode(array('Student_Id' => $StudentId));
        }
    }
}
if (!$areUsernameAndPasswordCorrect) {
    echo json_encode(array('id' => "0"));
}
