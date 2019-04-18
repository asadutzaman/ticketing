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
                        
                        <form name="ticket-creation" method="POST" action="#" enctype="multipart/form-data">
                          {{csrf_field()}}
                          <div class="col-md-6">
                              <!-- full name -->
                              <div class="form-group">
                                  <label for="fullname">Fullname:</label>
                                  <input type="text" class="form-control" id="fullname" name="fullname">
                                  @if ($errors->has('fullname'))
                                      <div class="error">{{ $errors->first('fullname') }}</div>
                                  @endif
                              </div>
                              <!-- email -->
                              <div class="form-group">
                                  <label for="email">Email:</label>
                                  <input type="text" class="form-control" id="email" name="email">
                                  @if ($errors->has('email'))
                                      <div class="error">{{ $errors->first('email') }}</div>
                                  @endif
                              </div>
                              <!-- passowrd -->
                              <div class="form-group">
                                  <label for="password">Password:</label>
                                  <input type="text" class="form-control" id="password" name="password">
                                  @if ($errors->has('password'))
                                      <div class="error">{{ $errors->first('password') }}</div>
                                  @endif
                              </div>
                              <!-- varify password -->
                              <div class="form-group">
                                  <label for="password">Retype Password:</label>
                                  <input type="text" class="form-control" id="password" name="password">
                                  @if ($errors->has('password'))
                                      <div class="error">{{ $errors->first('password') }}</div>
                                  @endif
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
                              <button type="submit" class="btn btn-primary pull-right">Create</button>
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
