  @section('title')
    <title>form</title>
  @endsection
  @extends('layouts.master')
  @section('content')
  <script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>
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
        <div class="col-md-10">
          <!-- general form elements -->
           <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Ticket#123456789</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-6">Ticket Number:</div>
                    <div class="col-md-6">g</div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">Catagory:</div>
                    <div class="col-md-6">:</div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">Subject</div>
                    <div class="col-md-6">g</div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">Created At:</div>
                    <div class="col-md-6">:</div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">Updated At</div>
                    <div class="col-md-6">g</div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-6">Status:</div>
                    <div class="col-md-6">g</div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">SLA:</div>
                    <div class="col-md-6">:</div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">Priority</div>
                    <div class="col-md-6">g</div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">Source:</div>
                    <div class="col-md-6">:</div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">OU:</div>
                    <div class="col-md-6">g</div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">Created By:</div>
                    <div class="col-md-6">:</div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">Updated By:</div>
                    <div class="col-md-6">g</div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <div class="col-md-10">
          <!-- general form elements -->
           <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Comment</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                    With supporting text below as a natural lead-in to additional content.
                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <div class="col-md-10">
            <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">CK Editor
                    <small>Advanced and full of features</small>
                  </h3>
                  <!-- tools box -->
                  <div class="pull-right box-tools">
                    <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                      <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
                      <i class="fa fa-times"></i></button>
                  </div>
                  <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body pad">
                  <textarea name="editor1"></textarea>
                <script>
                        CKEDITOR.replace( 'editor1' );
                </script>
                <br>
                <button type="button" class="btn btn-primary">Submit</button>
                </div>
              </div>
        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection
