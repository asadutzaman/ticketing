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
              <h3 class="box-title">Ticket# {{$ticket->code}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-6">Ticket Number</div>
                    <div class="col-md-6">: {{$ticket->code}}</div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">Catagory</div>
                    <div class="col-md-6">: </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">Subject</div>
                    <div class="col-md-6">: {{$ticket->subject}}</div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">Created At:</div>
                    <div class="col-md-6">: {{$ticket->created_at}}</div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">Updated At</div>
                    <div class="col-md-6">: {{$ticket->updated_at}}</div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">Created By</div>
                    <div class="col-md-6">: {{$ticket->Createdby->name}}</div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">Updated By</div>
                    <div class="col-md-6">: {{$ticket->Updatedby->name}}</div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-6">Status:</div>
                    <div class="col-md-6">: {{$ticket->status}}</div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">SLA</div>
                    <div class="col-md-6">:</div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">Priority</div>
                    <div class="col-md-6">: {{$ticket->priority}}</div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">Source</div>
                    <div class="col-md-6">: {{$ticket->source}}</div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">OU:</div>
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
              <h3 class="box-title">Ticket Leads</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  @foreach($ticket->Leads as $lead)
                    @if($lead->leadtype == 'ORIGINAL_LEAD')  
                      @php
                        echo "<h5 style='text-align: right; color: blue'><i>Original Ticket</i></h5><br>";
                        echo $lead->lead;
                      @endphp
                    @elseif($lead->leadtype == 'COMMENT')  
                      @php
                        echo "<h5 style='text-align: right; color: red'><i>".$lead->Createdby->name."</i> <span style='color:black'>replied on ".$lead->created_at."</span></h5> <br>";
                        echo $lead->lead;
                      @endphp
                    @else
                    @endif
                  @endforeach
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
                  <!-- /. tools -->
                </div>
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <!-- /.box-header -->
                <form name="comment_form" action="{{route('ticketlead.store')}}" method="POST">
                  {{csrf_field()}}
                  <input type="hidden" name="ticket_id" value="{{$ticket->id}}">
                  <div class="box-body pad">
                    <textarea name="comment"></textarea>
                    <script>
                            CKEDITOR.replace( 'comment' );
                    </script>
                    @if ($errors->has('comment'))
                        <div class="error">{{ $errors->first('comment') }}</div>
                    @endif
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
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