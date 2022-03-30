@extends('student.layout.student_layout')

@section('main_content')

<!-- Bootstrap CSS -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

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
                    <!-- <th scope="col"></th> -->
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

                    @php

                    $SrNo++;

                    @endphp

                    <tr>
                        <td>{{$SrNo}}</td>
                        <td>{{$companies[$i - 1]->Company_Name}}</td>
                        <td>{{$NoOfRounds}}</td>
                        <td>{{$companies[$i - 1]->Company_Status}}</td>
                        <td><button type="button" onclick="viewCompanyDetails('{{$companies[$i]->Company_Id}}')">View Details</button></td>
                        <!-- <td><button type="button" onclick="registerForCompany('{{$companies[$i]->Company_Id}}')">Register</button></td> -->
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

<!-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#gridSystemModal">Demo modal </button>
<div class="modal fade" id="gridSystemModal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                <div class="row-info">
                    <div class="col-md-4">.col-md-4</div>
                    <div class="col-md-4 col-md-offset-4">.col-md-4 .col-md-offset-4</div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">.col-md-6 .col-md-offset-3</div>
                </div>
                <div class="row">
                    <div class="col-sm-9"> Level 1: .col-sm-9
                        <div class="row">
                            <div class="col-xs-8 col-sm-6"> Level 2: .col-xs-8 .col-sm-6 </div>
                            <div class="col-xs-4 col-sm-6"> Level 2: .col-xs-4 .col-sm-6 </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>/.modal-content
    </div>/.modal-dialog -->
<!-- </div>/.modal --> -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> -->

<script>
    function viewCompanyDetails(CompanyId) {
        window.location.href = "{{url('student/company/view/')}}" + "/" + CompanyId;
    }

    // function viewCompanyDetails(CompanyId) {
    //     $.ajax({
    //         type: "GET",
    //         url: "{{url('/student/company/getCompanyDetails/')}}",
    //         contentType: "application/json; charset=utf-8",
    //         datatype: "Json",
    //         data: {
    //             CompanyId: CompanyId
    //         },
    //         success: function(data) {
    //             // console.log(data);
    //             // let obj = JSON.parse(data);;
    //             // console.log(obj);

    //             // <!-- Modal -->

    //             // let CompanyDetails = data[0];
    //             // let CompanyBranches = data[1];
    //             // let CompanyCriterias = data[2];
    //             // let CompanyRounds = data[3];

    //             // let html = `<div class="modal fade" id="modal_CompanyDetails` + CompanyId + `" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">`;
    //             // html += `<div class="modal-dialog" role="document">`;

    //             // html += `<div class="modal-content">`;

    //             // html += `<div class="modal-header">
    //             //             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    //             //             <h4 class="modal-title" id="gridSystemModalLabel">` + data[0].Company_Name + `</h4>
    //             //         </div>`;

    //             // html += `<div class="modal-body">`;



    //             // html += `</div>`;

    //             // html += `<div class="modal-footer">
    //             //             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    //             //             <button type="button" class="btn btn-primary">Save changes</button>
    //             //         </div>`;

    //             // html += `</div><!-- /.modal-content -->`;
    //             // html += `</div><!-- /.modal-dialog -->`;
    //             // html += `</div>`;

    //             // let html = `
    //             // <div class="modal fade" id="gridSystemModal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
    //             // 			<div class="modal-dialog" role="document">
    //             // 				<div class="modal-content">
    //             // 					<div class="modal-header">
    //             // 						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    //             // 						<h4 class="modal-title" id="gridSystemModalLabel">Modal title</h4>
    //             // 					</div>
    //             // 					<div class="modal-body">
    //             // 						<div class="row-info"> 
    //             // 							<div class="col-md-4">.col-md-4</div> 
    //             // 							<div class="col-md-4 col-md-offset-4">.col-md-4 .col-md-offset-4</div> 
    //             // 						</div>  
    //             // 						<div class="row"> 
    //             // 							<div class="col-md-6 col-md-offset-3">.col-md-6 .col-md-offset-3</div> 
    //             // 						</div> 
    //             // 						<div class="row">
    //             // 							<div class="col-sm-9"> Level 1: .col-sm-9 
    //             // 						<div class="row"> <div class="col-xs-8 col-sm-6"> Level 2: .col-xs-8 .col-sm-6 </div> 
    //             // 						<div class="col-xs-4 col-sm-6"> Level 2: .col-xs-4 .col-sm-6 </div> </div> </div> </div> </div>
    //             // 					<div class="modal-footer">
    //             // 						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    //             // 						<button type="button" class="btn btn-primary">Save changes</button>
    //             // 					</div>
    //             // 				</div><!-- /.modal-content -->
    //             // 			</div><!-- /.modal-dialog -->
    //             // 		</div><!-- /.modal -->
    //             // `;

    //             // let btnId = "btn" + CompanyId;

    //             // html += `<button type="button" id="` + btnId + `" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#gridSystemModal" style="display: none;"></button>`;

    //             // $("#modal-div").append(html);

    //             // document.getElementById(btnId).click();
    //         },
    //         error: function() {
    //             alert("Unable to fetch company data");
    //         }
    //     });
    // }
</script>

@stop