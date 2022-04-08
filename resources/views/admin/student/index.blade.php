@extends('admin.layout.admin_layout')

@section('main_content')
<div class="tables">
    <h2 class="title1">Students</h2>
    <div class="bs-example widget-shadow" data-example-id="hoverable-table">
        <!-- <h4 class="title">Students</h4> -->

        <button type="button" onclick="create()" class="btn btn-primary btn-flat btn-pri btn-lg"><i class="fa fa-plus" aria-hidden="true"></i>Create</button>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Academic Session</th>
                    <th scope="col">College ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Year</th>
                    <th scope="col">Branch</th>
                    <th scope="col">Semester</th>
                    <th scope="col">Roll Number</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>

                @php
                $count = 0;
                @endphp

                @foreach($students as $student)

                @php
                $count++;
                @endphp

                <tr>
                    <td>{{$count}}</td>
                    <td>{{$student->Academic_Session_Name}}</td>
                    <td>{{$student->Student_College_Id}}</td>
                    <td>{{$student->First_Name . " " . $student->Middle_Name . " " . $student->Last_Name}}</td>

                    @if($student->Semester == 1 || $student->Semester == 2)
                    <td>FE</td>
                    @elseif($student->Semester == 3 || $student->Semester == 4)
                    <td>SE</td>
                    @elseif($student->Semester == 5 || $student->Semester == 6)
                    <td>TE</td>
                    @elseif($student->Semester == 7 || $student->Semester == 8)
                    <td>BE</td>
                    @endif

                    <td>{{$student->Branch_Name}}</td>
                    <td>{{$student->Semester}}</td>
                    <td>{{$student->Roll_No}}</td>
                    <td><a href="{{ url('admin/student/edit/' . $student->Student_Id) }}"><i class="fa fa-edit"></i></a></td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    function create() {
        window.location.href = "{{url('admin/student/create')}}";
    }
</script>

@stop