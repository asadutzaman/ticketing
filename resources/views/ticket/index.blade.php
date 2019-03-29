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
                  <ul class="nav nav-tabs">
                    <li class=""><a href="#tab_1" data-toggle="tab" aria-expanded="false">Open Ticket</a></li>
                    <li class="active"><a href="#tab_2" data-toggle="tab" aria-expanded="false">My Ticket</a></li>
                    <li ><a href="#tab_3" data-toggle="tab" aria-expanded="true">Closed Ticket</a></li>
                    <li ><a href="#tab_3" data-toggle="tab" aria-expanded="true">Overdue Ticket</a></li>
                    
                    <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane" id="tab_1">
                      <div class="container">
                        <h2>Basic Table</h2>
                  
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Firstname</th>
                              <th>Lastname</th>
                              <th>Email</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>John</td>
                              <td>Doe</td>
                              <td>john@example.com</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_2">
                      <div class="container">
                        <h2>Basic Table</h2>
                  
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Firstname</th>
                              <th>Lastname</th>
                              <th>Email</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>John</td>
                              <td>Doe</td>
                              <td>john@example.com</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane active" id="tab_3">
                      <div class="container">
                        <h2>Basic Table</h2>
                  
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Firstname</th>
                              <th>Lastname</th>
                              <th>Email</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>John</td>
                              <td>Doe</td>
                              <td>john@example.com</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <!-- /.tab-pane -->
                  </div>
                  <!-- /.tab-content -->
                </div>
                <!-- nav-tabs-custom -->
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection
