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
                  <li class="breadcrumb-item active">Gallaries</li>
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
                     <h3 class="card-title">Gallaries</h3>
                     <a href="{{ url('admin/add-edit-gallary') }}" class="btn btn-block btn-success" style="max-width: 150px;float:right;display: inline-block;">Add Gallary</a>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                     <table id="events" class="table table-bordered table-striped">
                        <thead>
                           <tr>
                              <th>Sr. <br>---<br>  ID</th>
                              <th>Image Title</th>
                              <th>School Category</th>
                              <th>Gallary Image</th>
                              <th>Gallry Video</th>
                              <th>Latest Image Or Video</th>
                              <th>Status <br> Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php $sn=1;?>
                           @foreach($gallaries as $gallary)
                           <tr>
                              <td style="vertical-align:middle;">{{ $sn }} <br>---<br> {{ $gallary->id }}</td>
                              <td style="vertical-align:middle;">{{ $gallary->image_title }}</td>
                              <td style="vertical-align:middle;">{{ $gallary->gallaries->school_category }}</td>
                              <td style="vertical-align:middle;">
                                 @if(!empty($gallary->gallary_image))
                                 <img class="img-thumbnail" src="{{ url('adminView/img/school_gallary/'.$gallary->gallary_image) }}" width="75" height="50">
                                 @else
                                 <img class="img-thumbnail" src="{{ url('adminView/img/avatar.png') }}" width="75" height="50">
                                 @endif
                              </td>
                              <td style="vertical-align:middle;">
                                 @if(!empty($gallary->gallary_video))
                                 {{ $gallary->gallary_video }}
                                 <a href="{{ url('adminView/videos/'.$gallary->gallary_video) }}" download="">
                                 download
                                 </a>
                                 @else
                                 <span class="text-danger">no video here</span>
                                 @endif
                              </td>
                              <td style="vertical-align:middle;">{{ $gallary->latest_image_video }}</td>
                              <td style="vertical-align:middle;">
                                 <span class="btn-group" role="group">
                                 <span class="btn btn-sm btn-warning">
                                 @if($gallary->status == 1)
                                 <a class="updateGallaryStatus" id="gallary-{{ $gallary->id }}" gallary_id="{{ $gallary->id }}" href="javascript:void(0)"><i class="fas fa-toggle-on" aria-hidden="true" title="Active" status="Active"></i></a>
                                 @else
                                 <a class="updateGallaryStatus" id="gallary-{{ $gallary->id }}" gallary_id="{{ $gallary->id }}" href="javascript:void(0)"><i class="fas fa-toggle-off" aria-hidden="true" title="Inactive" status="Inactive"></i></a>
                                 @endif
                                 </span>
                                 &nbsp;
                                 <a href="{{ url('admin/add-edit-gallary/'.$gallary->id) }}" class="btn btn-sm btn-info" title="Edit News"><i class="fas fa-edit"></i></a>
                                 &nbsp;
                                 <a href="javascript:void(0)" class="btn btn-sm btn-danger confirmDelete"
                                    record="gallary" recordid="{{ $gallary->id }}" title="Delete Gallary"><i class="fas fa-trash"></i></a>
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