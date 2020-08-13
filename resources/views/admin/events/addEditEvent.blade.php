@extends('layouts.adminLayout.adminLayout')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Administration</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                  <li class="breadcrumb-item active">{{ $title }}</li>
               </ol>
            </div>
         </div>
      </div>
      <!-- /.container-fluid -->
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
         @if ($errors->any())
         <div class="alert alert-danger alert-dismissible fade show" role="alert">
            @foreach ($errors->all() as $error)
            <p class="m-auto"> {{ $error }} </p>
            @endforeach
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         @endif
         @if(Session::has('success_message'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <p class="m-auto"> {{ Session::get('success_message') }} </p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
         <form name="eventFrom" id="eventFrom" @if(empty($eventdata)) action="{{ url('admin/add-edit-event') }}" @else action="{{ url('admin/add-edit-event/'.$eventdata['id']) }}" @endif
         method="post" enctype="multipart/form-data">@csrf
         <div class="card card-default">
            <div class="card-header">
               <h3 class="card-title">{{ $title }}</h3>
               <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
               </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="event_title">Event Title</label>
                        <input type="text" class="form-control" name="event_title" id="event_title" placeholder="Enter Event Title" @if(!empty($eventdata['event_title'])) value="{{ $eventdata['event_title'] }}" @endif>
                     </div>
                  </div>
                  <!-- /.col -->
                  <div class="col-md-6">
                     <div class="form-group">
                        <label>Event Category</label>
                        <select name="event_category" id="event_category" class="form-control select2" style="width: 100%;">
                           <option value="">Select Event Category</option>
                           @foreach($eventCategories as $eventCategory)
                              <option value="{{ $eventCategory['id'] }}" @if(!empty($eventdata['event_category']) && $eventdata['event_category'] == $eventCategory['id']) selected @else @endif>{{ $eventCategory['name'] }}</option>
                           @endforeach
                        </select>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-12 col-sm-6">
                     <div class="form-group">
                        <label>Event Category</label>
                        <select name="upcoming_event" id="upcoming_event" class="form-control select2" style="width: 100%;">
                           <option value="">Select Upcoming Event</option>
                           <option value="Yes" @if(!empty($eventdata['upcoming_event']) && $eventdata['upcoming_event'] == 'Yes') selected  @endif>Yes It is Upcoming Event</option>
                           <option value="No" @if(!empty($eventdata['upcoming_event']) && $eventdata['upcoming_event'] == 'No') selected  @endif>No It is Upcoming Event</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-12 col-sm-6">
                     <div class="form-group">
                        <label for="event_location">Event Location</label>
                        <input type="text" class="form-control" name="event_location" id="event_location" placeholder="Enter Event Location" @if(!empty($eventdata['event_location'])) value="{{ $eventdata['event_location'] }}" @endif>
                     </div>
                  </div>
                  <div class="col-12 col-sm-6">
                     <div class="form-group">
                        <label for="event_image">Event Image</label>
                        <div class="input-group">
                           <div class="custom-file">
                              <input type="file" class="custom-file-input" name="event_image" id="category_image">
                              <label class="custom-file-label" for="event_image">Choose file</label>
                           </div>
                           <div class="input-group-append">
                              <span class="input-group-text" id="">Upload</span>
                           </div>
                        </div>
                        @if(!empty($eventdata['event_image']))
                           <div>
                              <img style="width:80px;margin-left:5px;margin-top:5px;" src="{{ asset('adminView/img/events/'.$eventdata['event_image'])}}">
                              <span class="text-danger"><a href="{{ url('adminView/img/events/'.$eventdata['event_image'])}}" target="_blank">Event Image View</a></span>
                           </div>
                        @endif
                     </div>
                  </div>
                  <div class="col-12 col-sm-6">
                     <div class="form-group">
                        <label for="event_date">Event Plan Date</label>
                        <input type="date" class="form-control" name="event_date" id="event_date" placeholder="Enter Event Plan Date" @if(!empty($eventdata['event_date'])) value="{{ $eventdata['event_date'] }}" @endif>
                        <small class="text-danger">Event Plan Date : 08/12/2020 </small>
                     </div>
                  </div>
                  <div class="col-12 col-sm-6">
                     <div class="form-group">
                        <label for="start_time">Event Start Time</label>
                        <input type="time" class="form-control" name="start_time" id="start_time" placeholder="Enter Event Start Time" @if(!empty($eventdata['start_time'])) value="{{ $eventdata['start_time'] }}" @endif>
                        <small class="text-danger">Event Start Time : 08:46 PM </small>
                     </div>
                  </div>
                  <div class="col-12 col-sm-6">
                     <div class="form-group">
                        <label for="end_time">Event End Time</label>
                        <input type="time" class="form-control" name="end_time" id="end_time" placeholder="Enter Event End Time" @if(!empty($eventdata['end_time'])) value="{{ $eventdata['end_time'] }}" @endif>
                        <small class="text-danger">Event End Time : 08:46 AM </small>
                     </div>
                  </div>
                  <div class="col-12 col-sm-12">
                     <div class="form-group">
                        <label for="description">Event Description</label>
                        <textarea class="form-control" rows="8" name="description" id="discription" placeholder="Enter Event Description Here">@if(!empty($eventdata['description'])) {{ $eventdata['description'] }} @endif</textarea>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card-footer">
               <button type="submit" class="btn btn-primary">Submit</button>
            </div>
         </div>
         </form>
      </div>
   </section>
</div>
@endsection

        