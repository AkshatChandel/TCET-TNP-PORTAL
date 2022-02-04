<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/login_style.css" rel="stylesheet">
  <title>Document</title>
</head>

<body>
  <main>
    <div class="left">
      <!-- The image container you want to add will come here       -->
      <div class="imgContainer">
        <!--  put image tag here and style it accordingly        -->
      </div>
    </div>
    <div class="right">
      <form action="" method="POST">
        <div class="formHead">
          <h2>Login</h2>
        </div>
        <div class="inputElements">

          <div class="dropdown">
            <!--              <label for="cars">Role:</label> -->
            <select id="select_UserType" name="select_UserType">
              <option value="select" class="defaultRole">Role</option>
              <option value="Student">Student</option>
              <option value="Staff">Staff</option>
              <option value="Admin">Admin</option>
            </select>
          </div>

          <input type="text" name="txt_Username" id="txt_Username" placeholder="Username">
          <input type="password" name="txt_Password" id="txt_Password" placeholder="Password">
        </div>

        <a href="#">Forgot Password?</a>

        <button type="submit">Login</button>

      </form>

      <?php
      if (isset($_POST['submit'])) {

        $Username = $_GET["txt_Username"];
        $Password = $_GET["txt_Password"];
        $UserType = $_GET["select_UserType"];

        if ($UserType == "Admin" || $UserType == "Staff") {
          
        } else if ($UserType == "Student") {
        }

        // $sql1 = "SELECT * FROM Student_Login";

        $sql1 = "INSERT INTO academic_master(Academic_Name, Academic_Status) VALUES('" . $AcademicName . "', '" . $AcademicStatus . "')";

        if ($con->query($sql1) === TRUE) {
          echo "<script> location.href='Index.php'; </script>";
        } else {
          echo "<br>error: " . $sql1 . "<br>" . $con->error;
        }
      }
      ?>
    </div>
  </main>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<script>
  function setCookie(cname, cvalue, exdays) {
    let d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    let expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  }

  function getCookie(cname) {
    let name = cname + "=";
    let ca = document.cookie.split(';');
    for (let i = 0; i < ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }

  function checkLogin() {
    let Username = $("#txt_Username").val();
    let Password = $("#txt_Password").val();
    let UserType = $("#select_UserType").val();

    if (UserType == "select") {
      alert('Please Select The User Type')
    } else if (UserType == "Admin") {
      $.ajax({
        type: "GET",
        url: 'check_login.php',
        contentType: "application/json; charset=utf-8",
        datatype: "Json",
        data: {
          UserType: UserType,
          Username: Username,
          Password: Password
        },
        success: function(data) {
          let obj = JSON.parse(data);
          data = obj.success;

          let StaffId = obj.StaffId;

          if (StaffId == -1) {
            alert("Incorrect Username or Password");
          } else {
            setCookie("Admin", 1, 1);
            setCookie("StaffId", StaffId, 1);
            window.location.href = "Admin/Index.php";
          }
        },
        error: function() {
          console.log("error");
        }
      });
    } else if (UserType == "Staff") {
      $.ajax({
        type: "GET",
        url: 'check_login.php',
        contentType: "application/json; charset=utf-8",
        datatype: "Json",
        data: {
          UserType: UserType,
          Username: Username,
          Password: Password
        },
        success: function(data) {
          let obj = JSON.parse(data);
          data = obj.success;

          let StaffId = obj.StaffId;

          if (StaffId == -1) {
            alert("Incorrect Username or Password");
          } else if (StaffId == 0) {
            alert("Access Denied");
          } else {
            setCookie("StaffId", StaffId, 1);
            window.location.href = "Staff/Index.php";
          }
        },
        error: function() {
          console.log("error");
        }
      });
    } else if (UserType == "Student") {
      $.ajax({
        type: "GET",
        url: 'check_login.php',
        contentType: "application/json; charset=utf-8",
        datatype: "Json",
        data: {
          UserType: UserType,
          Username: Username,
          Password: Password
        },
        success: function(data) {
          let obj = JSON.parse(data);
          data = obj.success;

          let StudentId = obj.StudentId;

          if (StudentId == -1) {
            alert("Incorrect Username or Password");
          } else {
            setCookie("StudentId", StudentId, 1);
            window.location.href = "Student/Index.php";
          }
        },
        error: function() {
          console.log("error");
        }
      });
    }
  }
</script>

</html>