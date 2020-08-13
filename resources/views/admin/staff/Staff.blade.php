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
                  <li class="breadcrumb-item active">School Staff</li>
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
                <h3 class="card-title">School Staff</h3>
                <a href="{{ url('admin/add-edit-staff') }}" class="btn btn-block btn-success" style="max-width: 150px;float:right;display: inline-block;">Add Staff</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="events" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sr. ---<br>  ID</th>
                    <th>Teacher Name</th>
                    <th>Teacher Email</th>
                    <th>Teacher Contact</th>
                    <th>Subject Teacher</th>
                    <th>Teacher Image</th>
                    <!--<th>Teacher About</th>
                    <th>Teacher Qualification</th>-->
                    <th>Best Teacher</th>
                    <th>Status <br> Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $sn=1;?>
                  @foreach($staffs as $staff)
                  <tr>
                    <td style="vertical-align:middle;">{{ $sn }} <br>---<br> {{ $staff->id }}</td>
                    <td style="vertical-align:middle;">{{ $staff->teacher_name }}</td>
                    <td style="vertical-align:middle;">{{ $staff->teacher_email }}</td>
                    <td style="vertical-align:middle;">{{ $staff->mobile }}</td>
                    <td style="vertical-align:middle;">{{ $staff->subjectcategory->subject_name }}</td>
                    <td style="vertical-align:middle;">
                      @if(!empty($staff->teacher_image))
                        <img class="img-thumbnail" src="{{ url('adminView/img/teacher/'.$staff->teacher_image ) }}" width="75" height="50">
                      @else
                        <img class="img-thumbnail" src="{{ url('adminView/img/avatar.png') }}" width="75" height="50">
                      @endif
                    </td>
                    <!--<td style="vertical-align:middle;">{{ $staff->about_me }}</td>
                    <td style="vertical-align:middle;">{{ $staff->qualification }}</td>-->
                    <td style="vertical-align:middle;">
                      {{ $staff->best_teacher }} 
                    </td>
                    <td style="vertical-align:middle;">
                      <span class="btn-group" role="group">
                        <span class="btn btn-sm btn-warning">
                          @if($staff->status == 1)
                            <a class="updateStaffStatus" id="staff-{{ $staff->id }}" staff_id="{{ $staff->id }}" href="javascript:void(0)"><i class="fas fa-toggle-on" aria-hidden="true" title="Active" status="Active"></i></a>
                          @else
                            <a class="updateStaffStatus" id="staff-{{ $staff->id }}" staff_id="{{ $staff->id }}" href="javascript:void(0)"><i class="fas fa-toggle-off" aria-hidden="true" title="Inactive" status="Inactive"></i></a>
                          @endif
                        </span>
                        &nbsp;
                        <a href="{{ url('admin/add-edit-staff/'.$staff->id) }}" class="btn btn-sm btn-info" title="Edit Staff"><i class="fas fa-edit"></i></a>
                        &nbsp;
                        <a href="javascript:void(0)" class="btn btn-sm btn-danger confirmDelete"
                        record="staff" recordid="{{ $staff->id }}" title="Delete Staff"><i class="fas fa-trash"></i></a>
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