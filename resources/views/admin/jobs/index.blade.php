@extends('layouts.admin.default')

@section('title')
    Jobs
@endsection
@section('css')
    <link href="{{url('admin/css/fileinput.min.css')}}" rel="stylesheet">
@stop
@section('content')

    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title">

                        jobs panel

                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form method="post" action="{{url('/interface/jobs/add')}}" enctype="multipart/form-data" >
        <div class="container">
            <div class="card card-block">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="modal-body">
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="exampleInputEmail1">Job title</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" required="required" name="title" placeholder="Enter jobs title">
                            </div>
                            {{ csrf_field() }}

                            <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="exampleInputEmail1">Job summary<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" required="required" name="summary" placeholder="jobs summary">
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="exampleInputEmail1">Job salary<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" required="required" name="salary" placeholder="jobs salary">
                            </div>
                            </div>

                            <div class="form-group">
                                <label for="experience">Experience<span class="text-danger">*</label>
                                <textarea id="experience" required="required" name="experience" class="form-control" required="required" rows="2"></textarea>
                            </div>

                            <div class="row">

                            <div class="form-group col-lg-6">
                                <label for="title">Employment Type <span class="text-danger">*</span></label>
                                <input type="text" name="employment_type" parsley-trigger="change" placeholder="Enter Employment Type" required="required" class="form-control" id="employment_type">
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="exampleInputEmail1">number of positions</label>
                                <span class="text-danger">*</span>
                                <input type="text" class="form-control" name="number_positions" placeholder="number of positions ">
                            </div>


                            </div>

                                <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="Requirements">Requirements<span class="text-danger">*</label>

                                <div class="input_fields_wrap">
                                    <div class="entry input-group col-xs-12">

                                        <input class="form-control" required="required" name="requirements[]" type="text" placeholder="Enter Requirements"/>
                                        <span class="input-group-btn">
                                               <button class="btn btn-success btn-add add_field_button" type="button"><span class="ion-plus"></span></button>
                                        </span>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group col-lg-6">
                                <label>Responsibilities<span class="text-danger">*</span></label>
                                <div class="input_fields_wrap1">
                                    <div class="entry input-group col-xs-12">
                                        <input class="form-control" required="required" name="responsibilities[]" type="text" placeholder="Enter Responsibilities"/>
                                        <span class="input-group-btn">
                                                 <button class="btn btn-success btn-add add_field_button1" type="button"><span class="ion-plus"></span></button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                             </div>
                                    <label for="exampleInputEmail1">expiry time<span class="text-danger">*</span></label>
                                    <div>
                                        <div class="input-group">
                                            <input name="expiry" expirytype="text" class="form-control" required="required" placeholder="mm/dd/yyyy" id="datepicker-autoclose">
                                            <span class="input-group-addon bg-custom b-0"><i class="icon-calender"></i></span>
                                        </div>
                                    </div>
                                </div>
                            <div>
<br>
                                        <label>Age<span class="text-danger">*</span></label>
                                        <div class="row">
                                            <div class="col-xs-1">
                                                <label>Min<span class="text-danger">*</span></label>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-4">
                                                    <input type="text" required="required" name="min" class="form-control" placeholder="Min">
                                                </div>
                                                <label>Max<span class="text-danger">*</span></label>

                                                <div class="col-xs-4">
                                                    <input type="text" required="required" name="max" class="form-control" placeholder="Max">
                                                </div>
                                            </div>
                                        </div>
                            </div>


                                <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="exampleSelect1">choose locations</label>
                                <span class="text-danger">*</span>
                                <select class="form-control" name="locations" required="required">
                                    <option value="">Select one</option>
                                    @foreach($locations as $location)
                                        <option value="{{$location->id}}">{{$location->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="exampleSelect1">choose department</label>
                                <span class="text-danger">*</span>
                                <select class="form-control" name="department" required="required">
                                    <option value="">Select one</option>
                                    @foreach($departments as $department)
                                        <option value="{{$department->id}}">{{$department->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                                </div>
                            <div class="form-group ">
                                <label for="Language">Languages<span class="text-danger">*</label>
                                @foreach($languages as $Lang)
                                    <div class="checkbox checkbox-success">
                                        <input name="lang[]" value="{{$Lang->id}}" type="checkbox">
                                        <label> {{$Lang->name}} </label>
                                    </div>
                                @endforeach
                            </div>
                                <div class="form-group">
                                    <input type="file" name="image_file">
                                </div>
                        <button type="submit" class="btn btn-primary pull-left">Submit</button>
                            </div>



                    <div class="col-lg-6">
                        <button class="btn btn-success pull-right" id="addButton" type="button"><span class="ion-plus"></span>Add New question</button>

                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"></div>
                    </div>
                </div>
            </div>
        </div>
    </form>


@endsection
@section('js')
    <script src="{{url('admin/plugins/moment/moment.js')}}"></script>
    <script src="{{url('admin/plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
    <script src="{{url('admin/plugins/mjolnic-bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
    <script src="{{url('admin/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{url('admin/plugins/clockpicker/bootstrap-clockpicker.js')}}"></script>
    <script src="{{url('admin/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{url('admin/pages/jquery.form-pickers.init.js')}}"></script>
    <script src="{{url('admin/js/canvas-to-blob.js')}}"></script>
    <script src="{{url('admin/js/fileinput.js')}}"></script>
    <script>

        $(document).ready(function () {
            $('#addJobs').on('click', function () {
                $('#JobsModel').modal('show');
            });

            var counter = 0;
            var coun = -1;
            var wrapper = $("#accordion");

            $("#addButton").on("click", function (e) {
                e.preventDefault();
                ++coun;
                counter++;
                $(wrapper).append('<br><div class="col-sm-6" style="margin-bottom: 0;">' +
                    '<div class="panel panel-default" id="panel' + counter + '">' +
                    '<div class="panel-heading" role="tab" id="heading' + counter + '">' +
                    '<h4 class="panel-title"><a class="" id="panel-lebel' + counter + '" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse' + counter + '" aria-expanded="true" aria-controls="collapse' + counter + '"> Question ' + counter + ' </a>' +
                    '<div class="actions_div" style="position: relative; top: -26px;"><a href="#" accesskey="' + counter + '" class="remove_ctg_panel exit-btn pull-right">' +
                    '<span class="btn waves-effect waves-light btn-danger fa fa-remove"></span></a>' +
                    '<a href="#" accesskey="' + counter + '" class="pull-right" id="addButton2"> ' +
                    '</a></div></h4></div><div id="collapse' + counter + '" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading' + counter + '">' +
                    '<div class="panel-body">' +
                    '<label for="title">Title Question<span class="text-danger">*</span>' +
                    '</label>' +
                    '<input name="questions[]" parsley-trigger="change" placeholder="Enter title" required="required" class="form-control" id="title" type="text">' +
                    ' <label for="department">Type Question<span class="text-danger">*</span></label>  ' +
                    '<select name="typequestion[]" class="form-control">' +
                    '<option value="1">checkbooks </option>' +
                    '<option value="2">linklist </option>' +
                    '<option value="3">radio </option>' +
                    '</select>' +
                    '<label for="title">Answers<span class="text-danger">*</span></label>' +
                    '<input placeholder="Enter answers" required="required"  name="answers[' + counter + '][]" class="form-control" type="text"><a href="#" class="btn btn-success btn-add" id="addButton3" accesskey="' + counter + '"><span class="ion-plus"></span></a>' +
                    '<div id="TextBoxDiv' + counter + '">' +
                    '</div></div>'
                );
            });
            var x = 1;

            $(wrapper).on("click", ".remove_ctg_panel", function (e) {
                e.preventDefault();
                var accesskey = $(this).attr('accesskey');
                $('#panel' + accesskey).remove();
                counter--;
                x--;
                coun--;

            });


            var y = 1;

            $(wrapper).on("click", "#addButton3", function (e) {
                e.preventDefault();
                var accesskey = $(this).attr('accesskey');
                y++;
                ++coun;
                $('#panel' + accesskey).find('#TextBoxDiv' + accesskey).append('<div class="input-group col-xs-12">' +
                    '<span class="input-group-btn remove_field">' +
                    '<button class="btn btn-remove btn-danger" type="button">' +
                    '<span class="ion-minus-round"></span>' +
                    '</button></span>' +
                    '<input class="form-control" required="required"  name="answers[' + counter + '][]" type="text" placeholder="Enter answers"/></div>'
                );

            });


            $(wrapper).on("click", ".remove_field", function (e) {
                e.preventDefault();
                $(this).parent('div').remove();
                y--;
                --coun;
            })


        });

        $(document).ready(function () {
            var max_fields = 20;
            var wrapper = $(".input_fields_wrap1");
            var add_button = $(".add_field_button1");
            var x = 1;
            $(add_button).click(function (e) {
                e.preventDefault();
                if (x < max_fields) {

                }
                $(wrapper).append('<div class="item input-group col-xs-12"><span class="input-group-btn remove_field1"><button class="btn btn-remove btn-danger" type="button"><span class="ion-minus-round"></span></button></span><input class="form-control" name="responsibilities[]"  required="required"  type="text"placeholder="Enter Responsibilities"/></div>');
                $('.remove_field1').click(function (e) { //user click on remove text
                    e.preventDefault();
                    $(this).parent('.item').remove();
                    x--;
                })
            });
        });


        $(document).ready(function () {
            var max_fields = 20;
            var wrapper = $(".input_fields_wrap");
            var add_button = $(".add_field_button");
            var x = 1;
            $(add_button).click(function (e) {
                e.preventDefault();
                if (x < max_fields) {
                    x++;

                    $(wrapper).append('<div class="item input-group col-xs-12"><span class="input-group-btn remove_field"><button class="btn btn-remove btn-danger" type="button"><span class="ion-minus-round"></span></button></span><input class="form-control" name="requirements[]"  required="required"  type="text"placeholder="Enter Requirements"/></div>');
                }
                $('.remove_field').click(function (e) { //user click on remove text
                    e.preventDefault();
                    $(this).parent('.item').remove();
                    x--;
                })
            });
        });


    </script>
@endsection