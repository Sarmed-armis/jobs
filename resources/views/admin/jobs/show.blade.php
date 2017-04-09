@extends('layouts.admin.default')

@section('title')
    show  jobs
@endsection
@section('css')
    <style>
        td, th {
            text-align: center;
        }
    </style>
@endsection
@section('content')
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title">

                        jobs

                        <br>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="p-20">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Job Title</th>
                                <th>Job Summary</th>
                                <th>Job Salary</th>
                                <th>nu. positions</th>
                                <th>employment type</th>
                                <th>requirements</th>
                                <th>responsibilities</th>
                                <th>experience</th>
                                <th>expiry</th>
                                <th>min_age</th>
                                <th>max_age</th>
                                <th>delete</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($jobs as $job)
                                <tr>
                                    <td>{{$job->title}}</td>
                                    <td>{{$job->summary}}</td>
                                    <td>{{$job->salary}}</td>
                                    <td>{{$job->number_positions}}</td>
                                    <td>{{$job->employment_type}}</td>
                                    <td>
                                        <input type="hidden" id="token" value="{{ csrf_token() }}">
                                        <button type="button"
                                                class="btn btn-primary waves-effect waves-light requirements fa fa-eye"
                                                id="{{$job->id}}"></button>
                                    </td>
                                    <td>
                                        <button type="button"
                                                class="btn btn-success waves-effect waves-light responsibilities fa fa-eye"
                                                id="{{$job->id}}"></button>
                                    </td>
                                    <td>{{$job->experience}}</td>
                                    @if(Carbon\Carbon::now()>$job->expiry)
                                        <td class="text-danger">{{$job->expiry}}<br>
                                            expired
                                        </td>
                                    @else
                                        <td class="text-success">{{$job->expiry}}</td>
                                    @endif
                                    <td>{{$job->min_age}}</td>
                                    <td>{{$job->max_age}}</td>
                                    <td>
                                        <button type="button" class="btn btn-danger waves-effect waves-light delete fa fa-trash" id="{{$job->id}}"></button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="text-center">{{$jobs->links()}}</div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="DeleteModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">delete of jobs</h4>
                </div>
                <div class="modal-body">
                    <div class="lead">
                    <p>Are sure you want to delete this jobs!!</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" >Close</button>
                        <button type="button" class="btn btn-danger" id="performDelete" >Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="DetailsModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Details of jobs</h4>
                </div>
                <div class="modal-body">
                    <div class="lead">
                        <table class="table">

                            <tbody id="showDetails">
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" id="Clear">Close</button>
                    </div>
                </div>
            </div>
        </div>





            @endsection
        @section('js')
            <script>
                $(document).ready(function () {
                    $('body').on('click', '.responsibilities', function () {
                        var id = $(this).attr('id');
                        var token = $('#token').val();


                        var model = "responsibilities";
                        $.ajax({
                            type: "POST",
                            url: '/interface/jobs/details',
                            data: {
                                id: id,
                                _token: token,
                                model: model

                            },
                            success: function (mag) {
                                console.log(mag)
                                var NumberOfPermissions = mag.length;
                                for (i = 0; i < NumberOfPermissions; i++) {
                                    $('#showDetails').append('<tr><td>' + mag[i] + '</td></tr>');
                                }
                            },
                            error: function (msg) {
                                console.log(msg)
                            }
                        });
                        $('#DetailsModal').modal('show');
                        $('#Clear').on('click', function () {
                            $('#DetailsModal').modal('toggle');
                            location.reload()
                        });


                    });


                    $('body').on('click', '.requirements', function () {
                        var id = $(this).attr('id');
                        var token = $('#token').val();


                        var model = "requirements";
                        $.ajax({
                            type: "POST",
                            url: '/interface/jobs/details',
                            data: {
                                id: id,
                                _token: token,
                                model: model

                            },
                            success: function (mag) {
                                console.log(mag);
                                var NumberOfPermissions = mag.length;
                                for (i = 0; i < NumberOfPermissions; i++) {
                                    $('#showDetails').append('<tr><td>' + mag[i] + '</td></tr>');
                                }
                            },
                            error: function (msg) {
                                console.log(msg)
                            }
                        });
                        $('#DetailsModal').modal('show');
                        $('#Clear').on('click', function () {
                            $('#DetailsModal').modal('toggle');
                            location.reload()
                        });


                    });

                $(document).on('click','.delete',function () {
                   var id=$(this).attr('id');
                   $('#DeleteModal').modal('show');
                   $('#performDelete').on('click',function () {
                       var token = $('#token').val();
                       $.ajax({
                           type: "POST",
                           url: '/interface/jobs/delete',
                           data: {
                               id: id,
                               _token: token

                           },
                           success: function () {
                               Command: toastr["success"]("successfully jobs deleted", "jobs Delete")
                               toastr.options = {
                                   "closeButton": false,
                                   "debug": false,
                                   "newestOnTop": true,
                                   "progressBar": true,
                                   "positionClass": "toast-top-center",
                                   "preventDuplicates": false,
                                   "onclick": null,
                                   "showDuration": "300",
                                   "hideDuration": "1000",
                                   "timeOut": "1000",
                                   "extendedTimeOut": "1000",
                                   "showEasing": "swing",
                                   "hideEasing": "linear",
                                   "showMethod": "fadeIn",
                                   "hideMethod": "fadeOut"
                               }
                               setTimeout(function () {
                                   window.location.reload();
                               }, 1000);
                           },
                           error: function (msg) {
                               console.log(msg)
                           }
                       });
                   });

                });
                });
            </script>
@endsection