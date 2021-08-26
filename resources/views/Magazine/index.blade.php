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
                <span class="username"><a href="#">{{$aktif['nm_magazine']}}</a></span>
                <span class="description">Shared publicly -{{$aktif['start_dt']}}</span>
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
              <div class="col-md-3" id="first-magazine">
                <div class="col-md-12" id="list-magazine-utama" style="background:url('{{link_magazine()}}{{$aktif['magazine_pic']}}');background-size:100%">
                    <div class="col-md-12" id="detmagazine-utama" >
                      
                    </div>
                    <div class="col-md-12" id="judul-magazine">
                      <a href="{{link_magazine()}}{{$aktif['link_address']}}" style="color:#fff" target="_blank">{{$aktif['nm_magazine']}}</a>
                    </div>
                    
                </div>
              </div>
              <div class="col-md-9" style="text-align:center">
                @foreach($data as $dt)
                  <div class="col-md-3" id="list-magazine" style="background:url('{{link_magazine()}}{{$dt['magazine_pic']}}');background-size:100%">
                    <div class="col-md-12" id="detmagazine" >
                      
                    </div>
                    <div class="col-md-12" id="judul-magazine">
                      <a href="{{link_magazine()}}{{$dt['link_address']}}" style="color:#fff" target="_blank">{{$dt['nm_magazine']}}</a>
                    </div>
                    
                  </div>
                @endforeach
              </div>
            </div>
            <!-- /.box-body -->
            
          </div>
    </section>
    <!-- /.content -->
</div>
@endsection