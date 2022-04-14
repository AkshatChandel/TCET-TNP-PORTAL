@extends('student.layout.student_layout')

@section('title', 'TCET | Companies')

@section('main_content')

<div id="modal-div"></div>

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

                @for($i = 0; $i < count($companies); $i++) @php $currentCompanyId=$companies[$i]->Company_Id;
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

                    @if($i == (count($companies) - 1))
                    @php
                    $NoOfRounds++;
                    @endphp
                    @endif

                    @php

                    $SrNo++;
                    $NoOfRounds--;

                    @endphp

                    <tr>
                        <td>{{$SrNo}}</td>
                        <td>{{$companies[$i - 1]->Company_Name}}</td>
                        <td>{{$NoOfRounds}}</td>
                        <td>{{$companies[$i - 1]->Company_Status}}</td>
                        <td><a href="{{ url('student/company/view/' . $companies[$i - 1]->Company_Id) }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"><i class="fa fa-eye"></i></a></td>
                    </tr>

                    @php
                    $NoOfRounds = 1;
                    @endphp

                    @endif

                    @php

                    $previousCompanyId = $currentCompanyId;

                    @endphp

                    @endfor
            </tbody>
        </table>
    </div>
</div>

@stop