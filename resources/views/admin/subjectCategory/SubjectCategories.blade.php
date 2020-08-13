@extends('layouts.adminLayout.adminLayout')
@section('content')
<div class="content-wrapper">
<!-- Main content -->
  <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0 text-dark">Facalities</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                  <li class="breadcrumb-item active">Subject Categories</li>
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
                <h3 class="card-title">Subject Category</h3>
                <a href="{{ url('admin/add-edit-subject-category/') }}" class="btn btn-block btn-success" style="max-width: 200px;float:right;display: inline-block;">Add Subject Category</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="eventcategory" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sr <br>--<br> ID</th>
                    <th>Subject Name</th>
                    <th>Subject Carrier Description</th>
                    <th>Status / Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $sn=1; ?>
                  @foreach($subjectcategories as $subjectcategory)
                  <tr>
                    <td>{{ $sn }} <br>--<br> {{ $subjectcategory->id }}</td>
                    <td>{{ $subjectcategory->subject_name }}</td>
                    <td>{{ $subjectcategory->description }}</td>
                    <td>
                      <span class="btn-group" role="group">
                        <span class="btn btn-sm btn-warning">
                          @if($subjectcategory->status == 1)
                            <a class="updateSubjectCategoryStatus" id="subjectCategory-{{ $subjectcategory->id }}" subjectCategory_id="{{ $subjectcategory->id }}" href="javascript:void(0)"><i class="fas fa-toggle-on" aria-hidden="true" title="Active" status="Active"></i></a>
                          @else
                            <a class="updateSubjectCategoryStatus" id="subjectCategory-{{ $subjectcategory->id }}" subjectCategory_id="{{ $subjectcategory->id }}" href="javascript:void(0)"><i class="fas fa-toggle-off" aria-hidden="true" title="Inactive" status="Inactive"></i></a>
                          @endif
                        </span>
                        &nbsp;
                        <a href="{{ url('admin/add-edit-subject-category/'.$subjectcategory->id ) }}" class="btn btn-sm btn-primary" title="Edit Brand"><i class="fas fa-edit"></i></a>
                        &nbsp;
                        <a href="javascript:void(0)" class="btn btn-sm btn-danger confirmDelete"
                        record="subjectCategory" recordid="{{ $subjectcategory->id }}" title="Delete SubjectCategory"><i class="fas fa-trash"></i></a>
                      </span>
                    </td>
                  </tr>
                  <?php $sn++; ?>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
        <!-- /.container-fluid -->
  </section>
<!-- /.content -->
</div>
@endsection