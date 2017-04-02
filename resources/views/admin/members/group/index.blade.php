@extends('layouts.admin.default')
@section('title')
    Groups
@endsection
@section('content')
    <div class="wrapper">
        <div class="container">
            <div class="page-title">
                @can('group.store')
                    <button type="button" id="addNewGroup" class="btn btn-danger waves-effect waves-light lead">Add New
                        Group
                    </button>
                @endcan
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <div class="p-20">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>GroupName</th>
                                    <th>Description</th>
                                    @can('group.edit')
                                        <th>Permission</th>
                                    @endcan('group.edit')
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($permissionGroupModel as $permissionGroup)
                                    <tr>
                                        <td>{{$permissionGroup->name}}</td>
                                        <td>{{$permissionGroup->description}}</td>


                                            <td>
                                                <button type="button" id="{{$permissionGroup->id}}"
                                                        class="btn btn-success waves-effect waves-light lead  Details">
                                                    Details
                                                </button>
                                            </td>
                                        @can('group.edit')
                                            <td>
                                                <button type="button" id="{{$permissionGroup->id}}"
                                                        class="btn btn-dark waves-effect waves-light lead  editGroup">
                                                    Edit
                                                </button>
                                            </td>

                                            <td>
                                                <input type="hidden" id="token" value="{{ csrf_token() }}">
                                                <button type="button" id="{{$permissionGroup->id}}"
                                                        class="btn btn-danger waves-effect waves-light lead  changePermission">
                                                    Change permission
                                                </button>
                                            </td>
                                    </tr>
                                    @endcan
                                @endforeach
                                </tbody>

                            </table>
                            {{$permissionGroupModel->links()}}
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="DetailsModal" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Details of group permission</h4>
                            </div>
                            <div class="modal-body">
                                <div class="lead">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Description of permission group</th>
                                        </tr>
                                        </thead>
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
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addGroupModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add new group </h4>
                </div>
                <div class="modal-body">
                    <div class="p-20">
                        <form action="{{action('Admin\Members\GroupController@add')}}" method="post"
                              data-parsley-validate novalidate>
                            <div class="form-group">
                                <label for="userName">Group Name<span class="text-danger">*</span></label>
                                <input type="text" parsley-trigger="change" required
                                       placeholder="Enter Group name" class="form-control" name="groupname">
                            </div>
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="userName">description<span class="text-danger">*</span></label>
                                <input type="text" parsley-trigger="change" required
                                       placeholder="description" class="form-control" name="description">
                            </div>
                            <label>Check Permission</label>
                            <div class="form-group">
                                <div>
                                    @foreach($permissionsModel as $premissions)
                                        <div class="checkbox checkbox-success">
                                            <input id="checkbox3" name="permissions[]" value="{{$premissions->id}}"
                                                   type="checkbox"
                                                   data-parsley-multiple="groups"
                                                   data-parsley-mincheck="1" required>
                                            <label for="checkbox3"> {{$premissions->description}} </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="form-group text-right m-b-0">
                                <button class="btn btn-primary waves-effect waves-light" type="submit">Submit</button>
                                <button type="reset" class="btn btn-secondary waves-effect m-l-5">Clear</button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Group</h4>
                </div>
                <div class="modal-body">

                    <form data-parsley-validate novalidate>
                        <div class="form-group">
                            <label for="userName">Group Name<span class="text-danger">*</span></label>
                            <input type="text" parsley-trigger="change" required
                                   placeholder="Enter Group name" class="form-control" name="GroupName" id="GroupName">
                        </div>

                        <div class="form-group">
                            <label for="userName">description<span class="text-danger">*</span></label>
                            <input type="text" parsley-trigger="change" required
                                   placeholder="description" class="form-control" name="description" id="description">

                        </div>

                        <div class="form-group text-right m-b-0">

                            <button type="reset" class="btn btn-secondary waves-effect m-l-5">Clear</button>
                        </div>

                    </form>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary waves-effect waves-light" id="Editfrom">Submit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="changePermissionModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Change permission</h4>
                </div>
                <div class="modal-body">

                    <form action="{{action('Admin\Members\GroupController@changePermission')}}" method="post" data-parsley-validate novalidate>

                        {{ csrf_field() }}
                        <label>Check Permission</label>
                        <div class="form-group">
                            <input type="hidden" name="id" id="checkid">
                            <div>
                                @foreach($permissionsModel as $premissions)

                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox{{$premissions->id}}"  name="permissiions[]" value="{{$premissions->id}}"
                                               type="checkbox"
                                               data-parsley-multiple="groups"
                                               data-parsley-mincheck="1" required>
                                        <label for="checkbox3"> {{$premissions->description}} </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                    </form>

                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script>
        $('body').on('click', '.Details', function () {
            var id = $(this).attr('id');
            var token = $('#token').val();
            $.ajax({
                type: "POST",
                url: 'group/show',
                data: {
                    id: id,
                    _token: token
                },
                success: function (mag) {
                    var NumberOfPermissions = mag.length;
                    for (i = 0; i < NumberOfPermissions; i++) {
                        $('#showDetails').append('<tr><td>' + mag[i] + '</td></tr>');
                    }
                },
                error: function (msg) {
                }
            });
            $('#DetailsModal').modal('show');
            $('#Clear').on('click', function () {
                $('#DetailsModal').modal('toggle');
                location.reload()
            });
        });
        $('#addNewGroup').on('click', function () {
            $('#addGroupModal').modal('show');
        });


        $('body').on('click', '.editGroup', function () {
            var id = $(this).attr('id');
            var token = $('#token').val();
            $.ajax({
                type: "POST",
                url: 'group/edit',

                data: {id: id, _token: token},
                success: function (msg) {
                    console.log(msg);
                    $('#editModal').modal('show');
                    $('#GroupName').val(msg.name);
                    $('#description').val(msg.description);


                    $('#Editfrom').on('click', function () {


                        var GroupName = $('#GroupName').val();
                        var description = $('#description').val();
                        var token = $('#token').val();
                        $.ajax({
                            type: "POST",
                            url: 'group/edit',

                            data: {
                                id: msg.id,
                                groupname: GroupName,
                                description: description,
                                _token: token
                            },
                            success: function () {
                                Command: toastr["success"]("Hey!! you have been change group information!!!", "group!")
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
                                $('#editModal').modal('toggle');
                                setTimeout(function () {
                                    window.location.reload();
                                }, 1000);


                            },
                            error: function (msg) {
                                console.log(msg);
                            }
                        });
                    });
                },
                error: function () {

                }
            });
        });

        $('body').on('click', '.changePermission', function () {
            var ID = $(this).attr('id');
            $('#checkid').val(ID);
            var token = $('#token').val();
            $.ajax({
                type: "POST",
                url: 'group/getOldPermission',
                data: {
                    id: ID,
                    _token: token
                },
                success: function (msg) {
                    var NumberOfPermissions = msg.length;
                    for (i = 0; i < NumberOfPermissions; i++) {
                      $('#checkbox'+msg[i]).prop('checked', true) ;


                    }
                },
                error: function (msg) {
                }
            });


            $('#changePermissionModal').modal('show');


        });


    </script>
@endsection