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
        Create Ticket
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Create Ticket</a></li>
        <li><a href="#">Table</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title">Create a Ticket
                        </h3>
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                            <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        </div>
                        <!-- /. tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body pad">
                        <div class="row">
                            @if(session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                            <form name="ticket-creation" method="POST" action="{{route('ticket.store')}}" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Subject</label>
                                        <select class="form-control" name="category">
                                            <option>option 1</option>
                                            <option>option 2</option>
                                            <option>option 3</option>
                                            <option>option 4</option>
                                            <option>option 5</option>
                                        </select>
                                        @if ($errors->has('category'))
                                            <div class="error">{{ $errors->first('category') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="subject">Subject:</label>
                                        <input type="text" class="form-control" id="subject" name="subject">
                                        @if ($errors->has('subject'))
                                            <div class="error">{{ $errors->first('subject') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>File Upload</label>
                                        <input type="file" id="exampleInputFile" name="file">
                                        @if ($errors->has('file'))
                                            <div class="error">{{ $errors->first('file') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">    
                                    <label for="pwd">Details:</label>          
                                    <textarea name="body"></textarea>
                                    <script>
                                        CKEDITOR.replace( 'body' );
                                    </script>
                                    @if ($errors->has('body'))
                                        <div class="error">{{ $errors->first('body') }}</div>
                                    @endif
                                    <br>
                                    <button type="submit" class="btn btn-primary pull-right">Create Ticket</button>
                                </div>    
                            </form>
                        </div>
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
