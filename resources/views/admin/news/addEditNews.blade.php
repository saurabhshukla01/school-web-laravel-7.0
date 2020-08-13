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
         <form name="eventFrom" id="eventFrom" @if(empty($newsdata)) action="{{ url('admin/add-edit-news') }}" @else action="{{ url('admin/add-edit-news/'.$newsdata['id']) }}" @endif
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
                        <label for="news_title">News Title</label>
                        <input type="text" class="form-control" name="news_title" id="news_title" placeholder="Enter News Title" @if(!empty($newsdata['news_title'])) value="{{ $newsdata['news_title'] }}" @endif>
                     </div>
                  </div>
                  <!-- /.col -->
                  <div class="col-md-6">
                     <div class="form-group">
                        <label>News Category</label>
                        <select name="news_category" id="news_category" class="form-control select2" style="width: 100%;">
                           <option value="">Select News Category</option>
                           @foreach($newsCategories as $newsCategory)
                              <option value="{{ $newsCategory['id'] }}" @if(!empty($newsdata['news_category']) && $newsdata['news_category'] == $newsCategory['id']) selected @else @endif>{{ $newsCategory['name'] }}</option>
                           @endforeach
                        </select>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-12 col-sm-6">
                     <div class="form-group">
                        <label>News Category</label>
                        <select name="upcoming_news" id="upcoming_news" class="form-control select2" style="width: 100%;">
                           <option value="">Select Upcoming News</option>
                           <option value="Yes" @if(!empty($newsdata['upcoming_news']) && $newsdata['upcoming_news'] == 'Yes') selected  @endif>Yes It is Upcoming News</option>
                           <option value="No" @if(!empty($newsdata['upcoming_news']) && $newsdata['upcoming_news'] == 'No') selected  @endif>No It is Upcoming News</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-12 col-sm-6">
                     <div class="form-group">
                        <label for="news_image">News Image</label>
                        <div class="input-group">
                           <div class="custom-file">
                              <input type="file" class="custom-file-input" name="news_image" id="news_image">
                              <label class="custom-file-label" for="news_image">Choose file</label>
                           </div>
                           <div class="input-group-append">
                              <span class="input-group-text" id="">Upload</span>
                           </div>
                        </div>
                        @if(!empty($newsdata['news_image']))
                           <div>
                              <img style="width:80px;margin-left:5px;margin-top:5px;" src="{{ asset('adminView/img/news/'.$newsdata['news_image'])}}">
                              <span class="text-danger"><a href="{{ url('adminView/img/news/'.$newsdata['news_image'])}}" target="_blank">News Image View</a></span>
                           </div>
                        @endif
                     </div>
                  </div>
                  <div class="col-12 col-sm-6">
                     <div class="form-group">
                        <label for="news_date">News Published Date</label>
                        <input type="date" class="form-control" name="news_date" id="news_date" placeholder="Enter Public News Date" @if(!empty($newsdata['news_date'])) value="{{ $newsdata['news_date'] }}" @endif>
                        <small class="text-danger">News Published Date : 08/12/2020 </small>
                     </div>
                  </div>
                  <div class="col-12 col-sm-12">
                     <div class="form-group">
                        <label for="description">News Description</label>
                        <textarea class="form-control" rows="8" name="description" id="discription" placeholder="Enter News Description Here">@if(!empty($newsdata['description'])) {{ $newsdata['description'] }} @endif</textarea>
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

        