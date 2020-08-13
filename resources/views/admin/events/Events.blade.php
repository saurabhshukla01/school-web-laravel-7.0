@extends('layouts.adminLayout.adminLayout')
@section('content')
<div class="content-wrapper">
<!-- Main content -->
	<div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0 text-dark">Administration</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                  <li class="breadcrumb-item active">School Events</li>
               </ol>
            </div>
            <!-- /.col -->
         </div>
         <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
   </div>
	<section class="content">
      <div class="container-fluid">
         @if(Session::has('success_message'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <label class="m-auto"> {{ Session::get('success_message') }} </label>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">School Events</h3>
                <a href="{{ url('admin/add-edit-event') }}" class="btn btn-block btn-success" style="max-width: 150px;float:right;display: inline-block;">Add Event</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="events" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sr. ---<br>  ID</th>
                    <th>Event Title</th>
                    <th>Event Category</th>
                    <th>Event Image</th>
                    <th>Event Date</th>
                    <th>Start Time ---<br> End Time</th>
                    <!--<th>Event Description</th>-->
                    <th>Upcoming Event <br>---<br> Event Location</th>
                    <th>Status <br> Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $sn=1;?>
                  @foreach($events as $event)
                  <tr>
                    <td style="vertical-align:middle;">{{ $sn }} <br>---<br> {{ $event->id }}</td>
                    <td style="vertical-align:middle;">{{ $event->event_title }}</td>
                    <td style="vertical-align:middle;">{{ $event->eventcategory->name }}</td>
                    <td style="vertical-align:middle;">
                      @if(!empty($event->event_image))
                        <img class="img-thumbnail" src="{{ url('adminView/img/events/'.$event->event_image ) }}" width="75" height="50">
                      @else
                        <img class="img-thumbnail" src="{{ url('adminView/img/avatar.png') }}" width="75" height="50">
                      @endif
                    </td>
                    <td style="vertical-align:middle;">{{ $event->event_date }}</td>
                    <td style="vertical-align:middle;">
                      {{ $event->start_time }} 
                      ---<br> 
                      {{ $event->end_time }}
                    </td>
                    <!--<td style="vertical-align:middle;">{{ $event->description }}</td>-->
                    <td style="vertical-align:middle;">
                      {{ $event->upcoming_event }} 
                      <br>---<br> 
                      {{ $event->event_location }}
                    </td>
                    <td style="vertical-align:middle;">
                      <span class="btn-group" role="group">
                        <span class="btn btn-sm btn-warning">
                          @if($event->status == 1)
                            <a class="updateEventStatus" id="event-{{ $event->id }}" event_id="{{ $event->id }}" href="javascript:void(0)"><i class="fas fa-toggle-on" aria-hidden="true" title="Active" status="Active"></i></a>
                          @else
                            <a class="updateEventStatus" id="event-{{ $event->id }}" event_id="{{ $event->id }}" href="javascript:void(0)"><i class="fas fa-toggle-off" aria-hidden="true" title="Inactive" status="Inactive"></i></a>
                          @endif
                        </span>
                        &nbsp;
                        <a href="{{ url('admin/add-edit-event/'.$event->id) }}" class="btn btn-sm btn-info" title="Edit Event"><i class="fas fa-edit"></i></a>
                        &nbsp;
                        <a href="javascript:void(0)" class="btn btn-sm btn-danger confirmDelete"
                        record="event" recordid="{{ $event->id }}" title="Delete Category"><i class="fas fa-trash"></i></a>
                      </span>
                    </td>
                  </tr>
                  <?php $sn++; ?>
                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
	</section>
</div>
@endsection