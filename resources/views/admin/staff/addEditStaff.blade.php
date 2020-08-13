@extends('layouts.adminLayout.adminLayout')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Facalities</h1>
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
         <form name="staffFrom" id="staffFrom" @if(empty($staffdata)) action="{{ url('admin/add-edit-staff') }}" @else action="{{ url('admin/add-edit-staff/'.$staffdata['id']) }}" @endif
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
                        <label for="teacher_name">Teacher Name</label>
                        <input type="text" class="form-control" name="teacher_name" id="teacher_name" placeholder="Enter Teacher Name" @if(!empty($staffdata['teacher_name'])) value="{{ $staffdata['teacher_name'] }}" @endif>
                     </div>
                  </div>
                  <!-- /.col -->
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="teacher_email">Teacher Email</label>
                        <input type="email" class="form-control" name="teacher_email" id="teacher_email" placeholder="Enter Teacher Email" @if(!empty($staffdata['teacher_email'])) value="{{ $staffdata['teacher_email'] }}" @endif>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-12 col-sm-6">
                     <div class="form-group">
                        <label>Subject Category</label>
                        <select name="subject_category" id="subject_category" class="form-control select2" style="width: 100%;">
                           <option value="">Select Subject Name</option>
                           @foreach($subjectCategories as $subjectCategory)
                              <option value="{{ $subjectCategory['id'] }}" @if(!empty($staffdata['subject_category']) && $staffdata['subject_category'] == $subjectCategory['id']) selected @else @endif>{{ $subjectCategory['subject_name'] }}</option>
                           @endforeach
                        </select>
                     </div>
                  </div>
                  <div class="col-12 col-sm-6">
                     <div class="form-group">
                        <label>Best Teacher</label>
                        <select name="best_teacher" id="best_teacher" class="form-control select2" style="width: 100%;">
                           <option value="">Select Best Teacher</option>
                           <option value="Yes" @if(!empty($staffdata['best_teacher']) && $staffdata['best_teacher'] == 'Yes') selected  @endif>Yes Best Teacher</option>
                           <option value="No" @if(!empty($staffdata['best_teacher']) && $staffdata['best_teacher'] == 'No') selected  @endif>No Best Teacher</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-12 col-sm-6">
                     <div class="form-group">
                        <label for="mobile">Teacher Contact Number</label>
                        <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter Teacher Mobile Number" @if(!empty($staffdata['mobile'])) value="{{ $staffdata['mobile'] }}" @endif>
                     </div>
                  </div>
                  <div class="col-12 col-sm-6">
                     <div class="form-group">
                        <label for="teacher_image">Teacher Image</label>
                        <div class="input-group">
                           <div class="custom-file">
                              <input type="file" class="custom-file-input" name="teacher_image" id="teacher_image">
                              <label class="custom-file-label" for="teacher_image">Choose file</label>
                           </div>
                           <div class="input-group-append">
                              <span class="input-group-text" id="">Upload</span>
                           </div>
                        </div>
                        @if(!empty($staffdata['teacher_image']))
                           <div>
                              <img style="width:80px;margin-left:5px;margin-top:5px;" src="{{ asset('adminView/img/teacher/'.$staffdata['teacher_image'])}}">
                              <span class="text-danger"><a href="{{ url('adminView/img/teacher/'.$staffdata['teacher_image'])}}" target="_blank">Teacher Image View</a></span>
                           </div>
                        @endif
                     </div>
                  </div>
                  <div class="col-12 col-sm-12">
                     <div class="form-group">
                        <label for="about_me">Teacher About Us</label>
                        <textarea class="form-control" rows="8" name="about_me" id="about_me" placeholder="Enter Teacher About Data Here">@if(!empty($staffdata['about_me'])) {{ $staffdata['about_me'] }} @endif</textarea>
                     </div>
                  </div>
                  <div class="col-12 col-sm-12">
                     <div class="form-group">
                        <label for="qualification">Teacher Qualification</label>
                        <textarea class="form-control" rows="8" name="qualification" id="qualification" placeholder="Enter Teacher Qualification Here">@if(!empty($staffdata['qualification'])) {{ $staffdata['qualification'] }} @endif</textarea>
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

        