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
         <form name="subjectcategoryForm" id="subjectcategoryForm" @if(empty($subjectCategorydata)) action="{{ url('admin/add-edit-subject-category/') }}" @else action="{{ url('admin/add-edit-subject-category/'.$subjectCategorydata['id']) }}" @endif 
         method="post">@csrf
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
                    <label for="subject_name">Subject Category Name</label>
                    <input type="text" class="form-control" name="subject_name" id="subject_name" placeholder="Enter Subject Category Name" @if(!empty($subjectCategorydata['subject_name'])) value="{{ $subjectCategorydata['subject_name'] }}" @endif>
                  </div>
                </div>
                <div class="col-md-6">
                   <div class="form-group">
                      <label for="description">Subject Carrier Description</label>
                      <textarea class="form-control" rows="3" name="description" id="discription" placeholder="Enter Subject Carrier  Description Here">@if(!empty($subjectCategorydata['description'])) {{ $subjectCategorydata['description'] }} @endif</textarea>
                   </div>
                </div>
              </div>
            </div>
            <div class="card-footer">
               <button type="submit" class="btn btn-primary">Submit Subject Category</button>
            </div>
         </div>
         </form>
      </div>
   </section>
</div>
@endsection

        