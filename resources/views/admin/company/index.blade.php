@extends('admin.layout.admin_layout')

@section('main_content')
<div class="tables">
    <h2 class="title1">Companies</h2>
    <div class="bs-example widget-shadow" data-example-id="hoverable-table">

        <button type="button" onclick="create()" class="btn btn-primary btn-flat btn-pri btn-lg"><i class="fa fa-plus" aria-hidden="true"></i>Create</button>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Academic Session</th>
                    <th scope="col">Company Name</th>
                    <th scope="col">Rounds</th>
                    <th scope="col">Company Status</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>

                @php
                $count = 0;
                @endphp

                @foreach($companies as $company)

                @php
                $count++;
                @endphp

                <tr>
                    <td>{{$count}}</td>
                    <td>{{$company->Academic_Session_Name}}</td>
                    <td>{{$company->Company_Name}}</td>
                    <td>{{$company->Number_Of_Rounds}}</td>
                    <td>{{$company->Company_Status}}</td>
                    <td>
                        <a href="{{ url('admin/company/edit/' . $company->Company_Id) }}" data-toggle="tooltip" data-placement="left" title="" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                        <a href="{{ url('admin/company/view/' . $company->Company_Id) }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"><i class="fa fa-eye"></i></a>
                        <a href="{{ url('admin/company/update/' . $company->Company_Id) }}" data-toggle="tooltip" data-placement="right" title="" data-original-title="Promote"><i class="fa fa-check-circle-o"></i></a>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    function create() {
        window.location.href = "{{url('admin/company/create')}}";
    }

    function updateCompany(CompanyId) {
        window.location.href = "{{url('admin/company/update')}}" + "/" + CompanyId;
    }
</script>

@stop