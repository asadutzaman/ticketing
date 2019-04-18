@section('title')
    <title>Index</title>
  @endsection
  @extends('layouts.master')
  @section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Table
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Table</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
           <div class="box box-success">
            <div class="box-header with-border">
              <div class="col-md-12">
                <!-- Custom Tabs -->
                <div class="nav-tabs-custom">
                  <div class="tab-content" style="overflow: scroll;">
                      <div class="container">
                        <h2>Users</h2>
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Department</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($users as $user)
                              <tr>  
                                <td><a href="">{{$user->name}}</a></td>
                                <td>{{$user->email}}</td>
                                <td></td>
                                <td><a href="" class="btn btn-xs btn-primary">EDIT</a></td>
                              </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
      </div>
    </section>
  </div>
  @endsection
