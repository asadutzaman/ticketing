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
                    <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Open Ticket</a></li>
                    <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">My Ticket</a></li>
                    <li ><a href="#tab_3" data-toggle="tab" aria-expanded="true">Closed Ticket</a></li>
                    <li ><a href="#tab_4" data-toggle="tab" aria-expanded="true">Overdue Ticket</a></li>
                  </ul>
                  <div class="tab-content" style="overflow: scroll;">
                    <div class="tab-pane" id="tab_1">
                      <div class="container">
                        <h2>Basic Table</h2>

                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>Ticket ID</th>
                              <th>Subject</th>
                              <th>Ticket Initiator</th>
                              <th>Time</th>
                              <th>Status</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($openTickets as $key => $value)
                            <tr>  
                              <td><a href="{{route('ticket.show', $value->id)}}">{{$value->code}}</a></td>
                              <td>{{$value->subject}}</td>
                              <td>{{$value->initiator}}</td>
                              <td>{{$value->created_at}}</td>
                              <td>{{$value->status}}</td>
                            </tr>
                            @endforeach
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

      <!-- //////////Customer Replay////////// -->
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
           <div class="box box-success">
           <div class="pull-left">
              &nbsp; &nbsp; &nbsp;
              Customer: Asad
          </div>
          <div class="pull-right">
              Time:12-12-2019 &nbsp; &nbsp; &nbsp;
            </div>
            <br>
              <hr>
            <div class="box-header with-border">
              <div class="col-md-12">
                <!-- Custom Tabs -->
                llll
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
      <!-- //////////////// -->

       <!-- //////////Engineer Replay////////// -->
       <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
             <div class="box box-normal">
             <div class="pull-left">
                &nbsp; &nbsp; &nbsp;
                Engineer: Asad
            </div>
            <div class="pull-right">
                Time:12-12-2019 &nbsp; &nbsp; &nbsp;
              </div>
              <br>
              <hr>
              <div class="box-header with-border">
                <div class="col-md-12">
                  <!-- Custom Tabs -->
                  llll
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
        <!-- //////////////// -->

         <!-- //////////Internal Note Replay////////// -->
      <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
             <div class="box box-info">
             <div class="pull-left">
                &nbsp; &nbsp; &nbsp;
                Internal Note: Asad
            </div>
            <div class="pull-right">
                Time:12-12-2019 &nbsp; &nbsp; &nbsp;
              </div>
              <br>
              <hr>
              <div class="box-header with-border">
                <div class="col-md-12">
                  <!-- Custom Tabs -->
                  So, I guess there must be a /vendor/autoload.php file somewhere in my computer (I have installed composer and ran composer require phpmailer/phpmailer).

So, I looked for this file using: dir /s autoload.php in the Windows command line, and found one here: C:\Windows\SysWOW64\vendor\autoload.php,
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
        <!-- //////////////// -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection
