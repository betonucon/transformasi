@extends('layouts.web')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
      <h1>
        {{$menu}}
        <!-- <small>Preview</small> -->
      </h1>
      <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Advanced Elements</li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="box box-widget">
            <div class="box-header with-border">
              <div class="user-block">
                <span class="username"><a href="#">{{$data['name']}}</a></span>
                <span class="description">Shared publicly - 7:30 PM Today</span>
              </div>
              <!-- /.user-block -->
              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="" data-original-title="Mark as read">
                  <i class="fa fa-circle-o"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="col-md-8">
                {!!$data['deskripsi']!!}
              </div>
              <div class="col-md-4">
                <div class="box-body box-profile">
                  <img  src="img/silmi.jpg" style="width:100%" alt="User profile picture">

                  <h3 class="profile-username text-center">Silmy Karim</h3>
                  <h3 class="profile-username text-center">Direktur Utama PTKS</h3>

                
                </div>
              </div>
            </div>
            <!-- /.box-body -->
            
          </div>
    </section>
    <!-- /.content -->
</div>
@endsection