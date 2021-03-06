<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{url('css/login_style.css')}}" rel="stylesheet">
    <title>TCET</title>
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
            <form action="index" method="POST">
                @csrf
                
                @if(Session::has('fail'))
                <div style="color: red;">{{ Session::get('fail') }}</div>
                @endif

                <div class="formHead">
                    <h2>Login</h2>
                </div>
                <div class="inputElements">

                    <div class="dropdown">
                        <!--              <label for="cars">Role:</label> -->
                        <select id="select_UserType" name="UserType" value="{{ old('UserType') }}">
                            {{-- <option value="select" class="defaultRole">Role</option> --}}
                            <option value="Student">Student</option>
                            <option value="Staff">Staff</option>
                            <option value="Admin">Admin</option>
                        </select>
                    </div>
                    <span style="color: red;">@error('UserType') {{ $message }} @enderror</span>

                    <input type="text" name="Username" id="txt_Username" placeholder="Username" value="{{ old('Username') }}">
                    <span style="color: red;">@error('Username') {{ $message }} @enderror</span>
                    <input type="password" name="Password" id="txt_Password" placeholder="Password">
                    <span style="color: red;">@error('Password') {{ $message }} @enderror</span>
                </div>

                <a href="#">Forgot Password?</a>

                <button type="submit">Login</button>

            </form>
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