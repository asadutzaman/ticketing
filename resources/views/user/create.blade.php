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
                            @if(session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                        <form name="ticket-creation" method="POST" action="{{ route('user.store') }}"enctype="multipart/form-data">
                          {{csrf_field()}}
                          <div class="col-md-6">
                              <!-- full name -->
                              <div class="form-group">
                                  <label for="name">Fullname:</label>
                                  <input type="text" class="form-control" id="fullname" name="name" placeholder="Full Name">
                                  @if ($errors->has('name'))
                                      <div class="error">{{ $errors->first('name') }}</div>
                                  @endif
                              </div>
                              
                              <!-- email -->
                              <div class="form-group">
                                  <label for="email">Email:</label>
                                  <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                                  @if ($errors->has('email'))
                                      <div class="error">{{ $errors->first('email') }}</div>
                                  @endif
                              </div>
                              

                              <div class="form-group has-feedback">
                                  <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">
                                  <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                  @if ($errors->has('password'))
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('password') }}</strong>
                                      </span>
                                  @endif
                              </div>
                              <div class="form-group has-feedback">
                                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Retype password">
                                  <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                              </div>

                              <!-- department -->
                              <div class="form-group">
                                  <label>Department</label>
                                  <select class="form-control" name="department">
                                      <option>Dep 1</option>
                                      <option>Dep 2</option>
                                  </select>
                                  @if ($errors->has('department'))
                                      <div class="error">{{ $errors->first('department') }}</div>
                                  @endif
                              </div>
                              <!-- user role -->
                              <div class="form-group">
                                  <label>User Role</label>
                                  <select class="form-control" name="role">
                                      <option>Admin 1</option>
                                      <option>User 2</option>
                                  </select>
                                  @if ($errors->has('role'))
                                      <div class="error">{{ $errors->first('role') }}</div>
                                  @endif
                              </div>
                              <br>
                              <button type="submit" class="btn btn-primary pull-right">CREATE</button>
                          </div>    
                      </form>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
      </div>
    </section>
  </div>
  @endsection
