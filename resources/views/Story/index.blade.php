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
                <span class="username"><a href="#"></a></span>
                <span class="description">Shared publicly </span>
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
              
              <div class="col-md-12" style="text-align:center">
                @foreach($data as $dt)
                  <div class="col-md-4" id="list-magazine" style="background:url('{{link_story()}}/{{$dt['background']}}');background-size:100%">
                    <div class="col-md-12" id="detmagazine" >
                      
                    </div>
                    <div class="col-md-12" id="judul-magazine">
                      <a href="#" onclick="video_view(`{{$dt['file']}}`)" style="color:#fff">{{$dt['name']}}</a>
                    </div>
                    
                  </div>
                @endforeach
              </div>
            </div>
            <!-- /.box-body -->
            
          </div>
          <div class="row">
            <div class="modal fade" id="modal-video" style="display: none;">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Video View</h4>
                  </div>
                  <div class="modal-body">
                  
                        <div id="tampilvideo"></div>
                
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
          </div>
    </section>
    <!-- /.content -->
</div>
@endsection

@push('ajax')
  <script>
    function video_view(a){

      $('#tampilvideo').html('<video width="100%" height="400" controls><source src="{{link_story()}}/'+a+'" type="video/mp4"><source src="movie.ogg" type="video/ogg">Your browser does not support the video tag.</video>');
      $('#modal-video').modal('show');
    }
  </script>

@endpush