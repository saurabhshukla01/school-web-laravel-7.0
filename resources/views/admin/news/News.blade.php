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
                  <li class="breadcrumb-item active">Newses</li>
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
                <h3 class="card-title">Newses</h3>
                <a href="{{ url('admin/add-edit-news') }}" class="btn btn-block btn-success" style="max-width: 150px;float:right;display: inline-block;">Add News</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="events" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sr. ---<br>  ID</th>
                    <th>News Title</th>
                    <th>News Category</th>
                    <th>News Image</th>
                    <th>News Date</th>
                    <!--<th>News Description</th>-->
                    <th>Upcoming News</th>
                    <th>Status <br> Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $sn=1;?>
                  @foreach($newses as $news)
                  <tr>
                    <td style="vertical-align:middle;">{{ $sn }} <br>---<br> {{ $news->id }}</td>
                    <td style="vertical-align:middle;">{{ $news->news_title }}</td>
                    <td style="vertical-align:middle;">{{ $news->newscategory->name }}</td>
                    <td style="vertical-align:middle;">
                      @if(!empty($news->news_image))
                        <img class="img-thumbnail" src="{{ url('adminView/img/news/'.$news->news_image) }}" width="75" height="50">
                      @else
                        <img class="img-thumbnail" src="{{ url('adminView/img/avatar.png') }}" width="75" height="50">
                      @endif
                    </td>
                    <td style="vertical-align:middle;">{{ $news->news_date }}</td>
                    <!--<td style="vertical-align:middle;">{{ $news->description }}</td>-->
                    <td style="vertical-align:middle;">
                      {{ $news->upcoming_news }} 
                    </td>
                    <td style="vertical-align:middle;">
                      <span class="btn-group" role="group">
                        <span class="btn btn-sm btn-warning">
                          @if($news->status == 1)
                            <a class="updateNewsStatus" id="news-{{ $news->id }}" news_id="{{ $news->id }}" href="javascript:void(0)"><i class="fas fa-toggle-on" aria-hidden="true" title="Active" status="Active"></i></a>
                          @else
                            <a class="updateNewsStatus" id="news-{{ $news->id }}" news_id="{{ $news->id }}" href="javascript:void(0)"><i class="fas fa-toggle-off" aria-hidden="true" title="Inactive" status="Inactive"></i></a>
                          @endif
                        </span>
                        &nbsp;
                        <a href="{{ url('admin/add-edit-news/'.$news->id) }}" class="btn btn-sm btn-info" title="Edit News"><i class="fas fa-edit"></i></a>
                        &nbsp;
                        <a href="javascript:void(0)" class="btn btn-sm btn-danger confirmDelete"
                        record="news" recordid="{{ $news->id }}" title="Delete News"><i class="fas fa-trash"></i></a>
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