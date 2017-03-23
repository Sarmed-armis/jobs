@extends('layouts.admin.default')
@section('title')
    Users
@endsection
@section('content')
    <div class="wrapper">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">

                    <h4 class="page-title">Add New User</h4>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box">


                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6">
                                        <form>
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1">User name</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                       placeholder="Enter Name">

                                            </fieldset>


                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1">User Full Name</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                       placeholder="Enter Full name">

                                            </fieldset>


                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1">User Email</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1"
                                                       placeholder="Enter Email">

                                            </fieldset>


                                            <fieldset class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" class="form-control"
                                                       id="exampleInputPassword1" placeholder="Password">
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <label for="exampleSelect1">chose Department</label>
                                                <select class="form-control" id="exampleSelect1">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </fieldset>


                                            <fieldset class="form-group">
                                                <label for="exampleSelect1">chose Locations</label>
                                                <select class="form-control" id="exampleSelect1">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </fieldset>


                                            <fieldset class="form-group">
                                                <label for="exampleSelect1">Chose Permestion</label>
                                                <select class="form-control" id="exampleSelect1">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </fieldset>

                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

@endsection