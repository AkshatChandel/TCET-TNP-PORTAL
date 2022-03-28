@extends('student.layout.student_layout')

@section('main_content')
<div class="tables">
    <h2 class="title1">Companies</h2>
    <div class="bs-example widget-shadow" data-example-id="hoverable-table">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Company Name</th>
                    <th scope="col">No. of Rounds</th>
                    <th scope="col">Company Status</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>

                @php
                $count = 0;
                $SrNo = 0;
                $previousCompanyId = 0;
                $currentCompanyId = 0;
                $NoOfRounds = 0;
                @endphp

                @for($i = 0; $i < count($companies); $i++) 
                
                    @php

                        $currentCompanyId = $companies[$i]->Company_Id;

                    @endphp

                    @if($i == 0)

                        @php

                            $previousCompanyId = $currentCompanyId;

                        @endphp

                    @endif

                    @php

                        $NoOfRounds++;

                    @endphp

                    @if($currentCompanyId != $previousCompanyId || $i == (count($companies) - 1))

                        @php

                            $SrNo++;

                        @endphp

                        <tr>
                            <td>{{$SrNo}}</td>
                            <td>{{$companies[$i - 1]->Company_Name}}</td>
                            <td>{{$NoOfRounds}}</td>
                            <td>{{$companies[$i - 1]->Company_Status}}</td>
                            <td><button type="button" onclick="registerForCompany('{{$companies[$i]->Company_Id}}')">View Details</button></td>
                            <td><button type="button" onclick="registerForCompany('{{$companies[$i]->Company_Id}}')">Register</button></td>
                        </tr>

                    @endif

                    @php

                        $previousCompanyId = $currentCompanyId;

                    @endphp

                @endfor
            </tbody>
        </table>
    </div>
</div>

<script>
    function attemptQuiz(QuizId) {
        window.location.href = "{{url('student/quiz/attempt/')}}" + "/" + QuizId;
    }
</script>

@stop