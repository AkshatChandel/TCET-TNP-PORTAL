@extends('admin.layout.admin_layout')

@section('main_content')

<div class="forms">
    <div class=" form-grids row form-grids-right">
        <div class="widget-shadow " data-example-id="basic-forms">
            <div class="form-title">
                <h4>Messages</h4>
            </div>
            <div class="form-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="txt_MessageDraftHead" class="col-sm-2 control-label">Message Draft Head</label>
                        <div class="col-sm-9">
                            <input disabled type="text" value="{{$messageDraft->Message_Draft_Head}}" id="txt_MessageDraftHead" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_MessageContent" class="col-sm-2 control-label">Message Content</label>
                        <div class="col-sm-8">
                            <textarea disabled id="txt_MessageContent" rows="10" class="form-control">{{$messageDraft->Message_Content}}</textarea>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="tables">
    <div class="bs-example widget-shadow" data-example-id="hoverable-table">
        <h2 class="title1">Send Message To</h2>
        <div class="row">
            <div class="col-md-2">
                <select id="select_AcademicSessionId" class="form-control">
                    @foreach($academicSessions as $academicSession)
                    <option value="{{$academicSession->Academic_Session_Id}}">{{$academicSession->Academic_Session_Name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3">
                <select id="select_BranchId" class="form-control">
                    @foreach($branches as $branch)
                    <option value="{{$branch->Branch_Id}}">{{$branch->Branch_Name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-2">
                <select id="select_Semester" class="form-control">
                    <option value="0">--All Semesters--</option>
                    @for($i = 1; $i <= 8; $i++) <option value="{{$i}}">Semester {{$i}}</option>
                        @endfor
                </select>
            </div>
            <div>
                <button type="button" onclick="searchStudents()" class="btn btn-primary">Search</button>
            </div>
        </div>

        <hr />

        <div>
            <table class="table table-hover table-bordered">
                <thead>
                    <tr class="active">
                        <th scope="col">#</th>
                        <th scope="col">Academic Session</th>
                        <th scope="col">College ID</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Branch Name</th>
                        <th scope="col">Semester</th>
                        <th scope="col">Roll No.</th>
                        <th scope="col"></th>
                        <!-- <th scope="col"><button id="btn_selectAllStudents">Select All</button></th> -->
                    </tr>
                </thead>
                <tbody id="tbody_Students">
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    function searchStudents() {

        let AcademicSessionId = $("#select_AcademicSessionId").val();
        let BranchId = $("#select_BranchId").val();
        let Semester = $("#select_Semester").val();

        $.ajax({
            type: "GET",
            url: "{{url('/admin/message/searchStudents/')}}",
            contentType: "application/json; charset=utf-8",
            datatype: "Json",
            data: {
                AcademicSessionId: AcademicSessionId,
                BranchId: BranchId,
                Semester: Semester
            },
            success: function(data) {

                let students = data;
                let html = "";

                for (let i = 0; i < students.length; i++) {
                    html += "<tr id='tr_student" + students[i].Student_Id + "'>";
                    html += "<td>" + (i + 1) + "</td>";
                    html += "<td>" + students[i].Academic_Session_Name + "</td>";
                    html += "<td>" + students[i].Student_College_Id + "</td>";
                    html += "<td>" + students[i].First_Name + " " + students[i].Middle_Name + " " + students[i].Last_Name + "</td>";
                    html += "<td>" + students[i].Branch_Name + "</td>";
                    html += "<td>Semester " + students[i].Semester + "</td>";
                    html += "<td>" + students[i].Roll_No + "</td>";
                    html += "<td><button id='btn_sendMessageToStudent" + students[i].Student_Id + "' class='btn btn-success' onclick=\"sendMessageTo({{$messageDraft->Message_Draft_Id}}, 'Student', " + students[i].Student_Id + ")\">Send</button></td>";
                    html += "</tr>";
                }

                $("#tbody_Students").empty();
                $("#tbody_Students").append(html);
            },
            error: function() {
                alert("Unable to fetch data");
            }
        });
    }

    function sendMessageTo(MessageDraftId, Send_To, UserId) {
        // Send_To => Staff, Student

        $.ajax({
            type: "GET",
            url: "{{url('/admin/message/sendMessageTo/')}}",
            contentType: "application/json; charset=utf-8",
            datatype: "Json",
            data: {
                MessageDraftId: MessageDraftId,
                Send_To: Send_To,
                UserId: UserId
            },
            success: function(data) {
                if (data == "success") {
                    let trId = "tr_student" + UserId;
                    document.getElementById(trId).className = "success";

                    let btnId = "btn_sendMessageToStudent" + UserId;
                    let btn = document.getElementById(btnId);
                    $(btn).remove();
                }
            },
            error: function() {
                alert("Unable to send message");
            }
        });
    }
</script>

@stop