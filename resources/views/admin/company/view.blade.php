@extends('admin.layout.admin_layout')

@section('main_content')
<div class="tables">
    <h2 class="title1">Company Details</h2>

    <div class="bs-example widget-shadow" data-example-id="hoverable-table">

        <div>
            <h3>Company Name: {{$companyDetails->Company_Name}}</h3>
        </div>

        <div>
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Branch Name</th>
                        <th scope="col">Branch Code</th>
                    </tr>
                </thead>
                <tbody>

                    @php
                    $count = 0;
                    @endphp

                    @foreach($companyBranches as $branch)

                    @php
                    $count++;
                    @endphp

                    <tr>
                        <td>{{$count}}</td>
                        <td>{{$branch->Branch_Name}}</td>
                        <td>{{$branch->Branch_Code}}</td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>

        <div>
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Company Criteria</th>
                    </tr>
                </thead>
                <tbody>

                    @php
                    $count = 0;
                    @endphp

                    @foreach($companyCriterias as $criteria)

                    @php
                    $count++;
                    @endphp

                    <tr>
                        <td>{{$count}}</td>
                        <td>{{$criteria->Company_Criteria}}</td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>

        <div>
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Company Rounds</th>
                        <th scope="col">Company Date Time</th>
                        <th scope="col">Company Duration</th>
                        <th scope="col">Company Status</th>
                    </tr>
                </thead>
                <tbody>

                    @php
                    $count = 0;
                    @endphp

                    @foreach($companyRounds as $round)

                    @php
                    $count++;
                    @endphp

                    <tr>
                        <td>{{$count}}</td>
                        <td>{{$round->Round_Name}}</td>
                        <td>{{$round->Round_DateTime}}</td>
                        <td>{{$round->Round_Duration}} minutes</td>
                        <td>{{$round->Round_Status}}</td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@stop