@extends('layouts.admin.default')

@section('title')
    Users
@endsection

@section('content')

    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title">
                        @can('user.store')
                        <button type="button" id="addUser" class="btn btn-success waves-effect waves-light">Add New User</button>
                        @endcan
                            @cannot('user.store')
                                <h1 class="lead text-center">User Informations</h1>
                            <br>
                   @endcannot
                    </div>
                    <div class="modal fade" id="UserModel" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Add New User</h4>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <fieldset class="form-group">
                                            <label for="exampleInputEmail1">User name</label>
                                            <input type="text" class="form-control" id="user_name" placeholder="Enter Name">
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <label for="exampleInputEmail1">User Full Name</label>
                                            <input type="text" class="form-control" id="Full_Name" placeholder="Enter Full name">
                                        </fieldset>

                                        <fieldset class="form-group">
                                            <label for="exampleInputEmail1">User Email</label>
                                            <input type="email" class="form-control" id="Email" placeholder="Enter Email">
                                        </fieldset>


                                        <fieldset class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" id="Password" placeholder="Password">
                                        </fieldset>

                                        <fieldset class="form-group">
                                            <label for="exampleSelect1">choose Department</label>
                                            <select class="form-control" id="Department">
                                                @foreach($departments as $department)
                                                    <option value="{{$department->id}}">{{$department->name}}</option>
                                                @endforeach
                                            </select>
                                        </fieldset>


                                        <fieldset class="form-group">
                                            <label for="exampleSelect1">choose Locations</label>
                                            <select class="form-control" id="Locations">
                                                @foreach($Locations as $Location)
                                                    <option value="{{$Location->id}}">{{$Location->name}}</option>
                                                @endforeach
                                            </select>
                                        </fieldset>


                                        <input type="hidden" id="token" value="{{ csrf_token() }}">
                                        <fieldset class="form-group">
                                            <label for="exampleSelect1">Choose Group</label>
                                            <select class="form-control" id="Permestion_group" name="Permestion_group">
                                                @foreach($PermissionsGroups as $PermissionsGroup)
                                                    <option value="{{$PermissionsGroup->id}}">{{$PermissionsGroup->name}}</option>
                                                @endforeach
                                            </select>
                                        </fieldset>
                                        <button id="Add_user" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
                                            <th>name</th>
                                            <th>fullname</th>
                                            <th>department</th>
                                            <th>location</th>
                                            <th>group</th>
                                            <th>status</th>
                                            <th></th>
                                            @can('user.edit')
                                            <th>Controller</th>
                                            @endcan
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->fullname}}</td>
                                                <td>{{$user->department->name}}</td>
                                                <td>{{$user->location->name}}</td>
                                                <td>{{$user->group->name}}</td>

                                                @if($user->status ==0)
                                                    <td>Unblock</td>
                                                @else
                                                    <td class="red">Blocked</td>
                                                @endif
                                                @can('user.edit')
                                                <td><input type="hidden" id="token" value="{{ csrf_token() }}">
                                                    <button type="button" id="{{$user->id}}"
                                                            class="btn btn-dark waves-effect waves-light Block">
                                                        @if($user->status ==0)
                                                            Blocked
                                                        @else
                                                            Unblock
                                                        @endif

                                                    </button>
                                                </td>
                                                <td>
                                                    <input type="hidden" id="token" value="{{ csrf_token() }}">
                                                    <button type="button" id="{{$user->id}}"class="btn btn-danger waves-effect waves-light  Delete">Delete</button>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-warning waves-effect waves-light check" id="{{$user->id}}">Change Group</button>
                                                </td>
                                                @endcan
                                            </tr>

                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{$users->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="modal fade" id="DeleteModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Alert</h4>
                </div>
                <div class="modal-body">
                    <p class="lead">Are you suer you want delete this perseon!!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" id="DeleteSure" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Change Person Group</h4>
                </div>
                <div class="modal-body">
                    <div class="p-20">
                        <form class="form-horizontal " action="#">
                            <div class="form-group">
                                <label>Chose New Group</label>
                                <select class="form-control" id="Permestions" name="Permestion_group">
                                    @foreach($PermissionsGroups as $PermissionsGroup)
                        <option value="{{$PermissionsGroup->id}}">{{$PermissionsGroup->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="hidden" id="token" value="{{ csrf_token() }}">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" id='change' class="btn btn-danger">Change</button>
                    </div>
                </div>
            </div>
        </div>


        @endsection
        @section('js')
            <script>
                $(document).ready(function () {
                    /*
                     * this is for  user section
                     * add new
                     * delete
                     * block
                     * change grup
                     * add new grup
                     *  edit grup change permestions
                     *
                     * */

                });
                $('#Add_user').on('click', function (event) {
                    event.preventDefault();
                    var Name = $('#user_name').val();
                    var FullNmae = $('#Full_Name').val();
                    var Email = $('#Email').val();
                    var Password = $('#Password').val();
                    var Department = $('#Department').val();
                    var Location = $('#Locations').val();
                    var token = $('#token').val();
                    var Permestion_group = $('#Permestion_group').val();
                    if (Name == '' || FullNmae == '' || Email == '' || Department == '' || Location == '' || Permestion_group == '') {
                        sweetAlert("Oops...", "Something went wrong!", "error");
                    }
                    else {

                        $.ajax({
                            type: "POST",
                            url: 'user/add',
                            data: {
                                name: Name,
                                fullname: FullNmae,
                                email: Email,
                                password: Password,
                                department: Department,
                                location: Location,
                                permestion_group: Permestion_group,
                                _token: token
                            },
                            success: function () {

                                location.reload();
                            },
                            error: function (msg) {
                                sweetAlert("Oops...", "Something went wrong!", "error");
                            }
                        });
                    }
                });

                $('body').on('click', '.check', function () {
                    var id = $(this).attr('id');
                    $('#myModal').modal('show');
                    $('#change').on('click', function () {
                        var group = $('#Permestions').val();
                        var token = $('#token').val();
                        $.ajax({
                            type: "POST",
                            url: 'user/change',
                            data: {id: id, Permestions: group, _token: token},
                            success: function (msg) {
                                location.reload();
                            },
                            error: function (msg) {
                            }
                        });
                    });
                });
                $('body').on('click', '.Block', function () {
                    var id = $(this).attr('id');
                    var token = $('#token').val();
                    $.ajax({
                        type: "POST",
                        url: 'user/block',
                        data: {id: id, _token: token},
                        success: function (msg) {
                            Command: toastr["success"]("Hey!! you have been change user Stutas!!!", "User Status!")
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

                        }
                    });
                });

                $('body').on('click', '.Delete', function () {
                    var id = $(this).attr('id');
                    var token = $('#token').val();
                    $('#DeleteModal').modal('show');
                    $('#DeleteSure').on('click', function (e) {
                        e.preventDefault();
                        $.ajax({
                            type: "POST",
                            url: 'user/delete',
                            data: {id: id, _token: token},
                            success: function (msg) {
                                $('#DeleteModal').modal('toggle');
                                Command: toastr["error"](' user has been delete ')
                                toastr.options = {
                                    "closeButton": true,
                                    "debug": true,
                                    "newestOnTop": false,
                                    "progressBar": false,
                                    "positionClass": "toast-top-full-width",
                                    "preventDuplicates": false,
                                    "onclick": null,
                                    "showDuration": "300",
                                    "hideDuration": "500",
                                    "timeOut": 0,
                                    "extendedTimeOut": 0,
                                    "showEasing": "swing",
                                    "hideEasing": "linear",
                                    "showMethod": "fadeIn",
                                    "hideMethod": "fadeOut",
                                    "tapToDismiss": false
                                }
                                $('#' + id).parents('tr').remove();
                            },
                            error: function (msg) {
                                console.log(msg.responseText);
                            }
                        });
                    });
                });
                $('#addUser').on('click', function () {
                    $('#UserModel').modal('show');
                });

                $(".alert").on("click", function (e) {
                    bootbox.alert("Hello world!", function () {
                        console.log("Alert Callback");
                    });
                });
            </script>

@endsection