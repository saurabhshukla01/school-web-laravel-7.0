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
         <form name="gallaryFrom" id="gallaryFrom" @if(empty($gallarydata)) action="{{ url('admin/add-edit-gallary') }}" @else action="{{ url('admin/add-edit-gallary/'.$gallarydata['id']) }}" @endif
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
                        <label for="image_title">Image Title</label>
                        <input type="text" class="form-control" name="image_title" id="image_title" placeholder="Enter Image Title" @if(!empty($gallarydata['image_title'])) value="{{ $gallarydata['image_title'] }}" @endif>
                     </div>
                  </div>
                  <!-- /.col -->
                  <div class="col-md-6">
                     <div class="form-group">
                        <label>School Category</label>
                        <select name="school_category_id" id="school_category_id" class="form-control select2" style="width: 100%;">
                           <option value="">Select School Category</option>
                           @foreach($schoolCategories as $schoolCategory)
                              <option value="{{ $schoolCategory['id'] }}" @if(!empty($gallarydata['school_category_id']) && $gallarydata['school_category_id'] == $gallarydata['school_category_id']) selected @else @endif>{{ $schoolCategory['school_category'] }}</option>
                           @endforeach
                        </select>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-12 col-sm-6">
                     <div class="form-group">
                        <label for="gallary_image">Gallary Image</label>
                        <div class="input-group">
                           <div class="custom-file">
                              <input type="file" class="custom-file-input" name="gallary_image" id="gallary_image">
                              <label class="custom-file-label" for="gallary_image">Choose file</label>
                           </div>
                           <div class="input-group-append">
                              <span class="input-group-text" id="">Upload</span>
                           </div>
                        </div>
                        @if(!empty($gallarydata['gallary_image']))
                           <div>
                              <img style="width:80px;margin-left:5px;margin-top:5px;" src="{{ asset('adminView/img/school_gallary/'.$gallarydata['gallary_image'])}}">
                              <span class="text-danger"><a href="{{ url('adminView/img/school_gallary/'.$gallarydata['gallary_image'])}}" target="_blank">Gallary Image View</a></span>
                           </div>
                        @endif
                     </div>
                  </div>
                  <div class="col-12 col-sm-6">
                     <div class="form-group">
                        <label for="gallary_video">Gallary Video</label>
                        <div class="input-group">
                           <div class="custom-file">
                              <input type="file" class="custom-file-input" name="gallary_video" id="gallary_video">
                              <label class="custom-file-label" for="gallary_video">Choose file</label>
                           </div>
                           <div class="input-group-append">
                              <span class="input-group-text" id="">Upload</span>
                           </div>
                        </div>
                        @if(!empty($gallarydata['gallary_video']))
                           <div>
                              <span class="text-danger" style="width:80px;margin-left:5px;margin-top:5px;">
                                 <a href="{{ url('adminView/videos/'.$gallarydata['gallary_video'])}}" target="_blank">download Video</a>
                              </span>
                           </div>
                        @endif
                     </div>
                  </div>
                  <div class="col-12 col-sm-6">
                     <div class="form-group">
                        <label>Latest Gallary & video</label>
                        <select name="latest_image_video" id="latest_image_video" class="form-control select2" style="width: 100%;">
                           <option value="">Select Latest Gallary & Video</option>
                           <option value="Yes" @if(!empty($gallarydata['latest_image_video']) && $gallarydata['latest_image_video'] == 'Yes') selected  @endif>Yes It is Latest Gallary Image & video</option>
                           <option value="No" @if(!empty($gallarydata['latest_image_video']) && $gallarydata['latest_image_video'] == 'No') selected  @endif>No It is Latest Gallary Image & video</option>
                        </select>
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

        