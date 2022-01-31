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
      <form action="#">
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

        <button>Login</button>

      </form>
    </div>
  </main>
</body>

<script>
  function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  }

  function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
      var c = ca[i];
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
    } else {
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
          let data = obj.success;
          if (data == 1) {
            let StaffId = obj.StaffId;
            setCookie("StaffId", StaffId, 1);
            window.location.href = "Admin/Index.php";
          } else if (data == 2) {
            let StaffId = obj.StaffId;
            setCookie("StaffId", StaffId, 1);
            window.location.href = "Staff/Dashboard/Index.php";
          } else if (data == 3) {
            let StudentId = obj.StudentId;
            setCookie("StudentId", StudentId, 1);
            window.location.href = "Student/Dashboard/Index.php";
          } else if (data == -1) {
            alert("Access Denied");
          } else if (data == -2) {
            alert("Incorrect Username or Password");
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