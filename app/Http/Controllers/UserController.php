<?php

namespace App\Http\Controllers;

use App\Models\Staff_Login;
use App\Models\Student_Login;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'UserType' => 'required',
        ]);

        $UserType = $request->UserType;

        if ($UserType == "Admin") {
            $request->validate([
                'Username' => ['required'],
                'Password' => 'required'
            ]);

            $UserName = $request->Username;
            $Password = $request->Password;

            $user = Staff_Login::where('Staff_Username', '=', $UserName)->first();

            if ($user) {

                if ($user->Is_Admin == "Yes") {
                    if ($user->Staff_Password == $Password) {

                        $UserId = $user->Staff_Id;
                        $request->session()->put("UserType", "Admin");
                        $request->session()->put("UserId", $UserId);
                        return redirect("admin");
                    } else {
                        return back()->with('fail', 'Incorrect Password');
                    }
                } else {
                    return back()->with('fail', 'Only admins can access.');
                }
            } else {
                return back()->with('fail', 'Incorrect Username');
            }
        } else if ($UserType == "Staff") {
            $request->validate([
                'Username' => ['required'],
                'Password' => 'required'
            ]);

            $UserName = $request->Username;
            $Password = $request->Password;

            $user = Staff_Login::where('Staff_Username', '=', $UserName)->first();

            if ($user) {
                if ($user->Staff_Password == $Password) {
                    $UserId = $user->Staff_Id;
                    $request->session()->put("UserType", "Staff");
                    $request->session()->put("UserId", $UserId);
                    return redirect("staff");
                } else {
                    return back()->with('fail', 'Incorrect Password');
                }
            } else {
                return back()->with('fail', 'Incorrect Username');
            }
        } else if ($UserType == "Student") {
            $request->validate([
                'Username' => ['required'],
                'Password' => 'required'
            ]);

            $UserName = $request->Username;
            $Password = $request->Password;

            $user = Student_Login::where('Student_Username', '=', $UserName)->first();

            if ($user) {
                if ($user->Student_Password == $Password) {
                    $UserId = $user->Student_Id;
                    $request->session()->put("UserType", "Student");
                    $request->session()->put("UserId", $UserId);
                    return redirect("student");
                } else {
                    return back()->with('fail', 'Incorrect Password');
                }
            } else {
                return back()->with('fail', 'Incorrect Username');
            }
        }

        return redirect("/");
    }
}
