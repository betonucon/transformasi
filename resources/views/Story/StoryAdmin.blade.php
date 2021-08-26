@extends('layouts.web')

@section('content')
<style>
  #bttn{
    height:200px;
    overflow-y:scroll;
    padding:1%;
  }
  #bttn:hover {
    /* background:#ebebf5 !important;
    height:400px; */
  }
  #bttn::-webkit-scrollbar {
      width: 5px;               /* width of the entire scrollbar */
  }

  #bttn::-webkit-scrollbar-track {
      background: #9999c1;        /* color of the tracking area */
  }
  #bttn::-webkit-scrollbar-thumb {
      background-color: #a6a6bd;
      border-radius: 20px;
      border: 3px solid #fde5ba;
  }
</style>
<div class="content-wrapper">
    <section class="content-header">
      <h1>
        {{$menu}}
        <!-- <small>Preview</small> -->
      </h1>
      <ol class="breadcrumb">
        <span class="btn btn-sm btn-success" onclick="tambah()"><i class="fa fa-plus"></i> Buat Baru</span>
      </ol>
    </section>

    <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title"></h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">

              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th width="5%">No</th>
                    <th >Name</th>
                    <th width="15%">Video</th>
                    <th width="15%">CreateDate</th>
                    <th width="5%"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $no=>$o)
                    <tr>
                      <td>{{$no+1}}</td>
                      <td>{{$o['name']}}</td>
                      <td ><img src="{{link_story()}}/{{$o['background']}}" onclick="video_view(`{{$o['file']}}`)" style="width:100%"></td>
                      <td>{{$o['startdate']}}</td>
                      <td><span class="btn btn-sm btn-danger" onclick="hapus({{$o['id']}})" ><i class="fa fa-remove"></i></span></td>
                    </tr>
                  @endforeach
               </tbody>
              </table>


              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="modal fade" id="modal-tambah" style="display: none;">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                  <h4 class="modal-title">Buat Story</h4>
                </div>
                <div class="modal-body">
                  <form method="post"   enctype="multipart/form-data" id="my_data">
                     @csrf
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" placeholder="Ceo Name" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>File Video</label>
                        <input type="file" name="file" placeholder="Ceo Name" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>Background Video</label>
                        <input type="file" name="backgr" placeholder="Ceo Name" class="form-control">
                      </div>
                      
                </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" onclick="simpan()">Simpan</button>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <div class="modal fade" id="modal-ubah" style="display: none;">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                  <h4 class="modal-title">Default Modal</h4>
                </div>
                <div class="modal-body">
                  <form method="post"   enctype="multipart/form-data" id="my_data_ubah">
                     @csrf
                      <div id="tampilubah"></div>
                </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" onclick="simpan_ubah()">Simpan</button>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
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

          @include('layouts.notif')
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection
@push('ajax')
<script>
  $(function () {
    $('#example2').DataTable()
    $('#example1').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
  $(function () {
    
    $('.textarea').wysihtml5()
  })

  function tambah(){
    $('#modal-tambah').modal('show');
  }
  function video_view(a){

    $('#tampilvideo').html('<video width="100%" height="400" controls><source src="{{link_story()}}/'+a+'" type="video/mp4"><source src="movie.ogg" type="video/ogg">Your browser does not support the video tag.</video>');
    $('#modal-video').modal('show');
  }
  function hapus(a){
    
    $.ajax({
        type: 'GET',
        url: "{{url('ChangeStoryAdmin/hapus')}}",
        data: "id="+a,
        success: function(results) {
            location.reload();
        }
    });
   
  }

  function simpan(){
        var form=document.getElementById('my_data');
        $.ajax({
                type: 'POST',
                url: "{{url('ChangeStoryAdmin/simpan')}}",
                data: new FormData(form),
                contentType: false,
                cache: false,
                processData:false,
                beforeSend: function() {
                    document.getElementById("loadnya").style.width = "100%";
                },
                success: function(msg){
                    
                    if(msg=='ok'){
                        location.reload();
                    }else{
                    document.getElementById("loadnya").style.width = "0px";
                        $('#modal-notif').modal('show');
                        $('#notif').html(msg);
                    }
                            
                    
                }
        });
    
    }
  function simpan_ubah(){
        var form=document.getElementById('my_data_ubah');
        $.ajax({
                type: 'POST',
                url: "{{url('ChangeStoryAdmin/simpan_ubah')}}",
                data: new FormData(form),
                contentType: false,
                cache: false,
                processData:false,
                beforeSend: function() {
                    document.getElementById("loadnya").style.width = "100%";
                },
                success: function(msg){
                    
                    if(msg=='ok'){
                        location.reload();
                    }else{
                    document.getElementById("loadnya").style.width = "0px";
                        $('#modal-notif').modal('show');
                        $('#notif').html(msg);
                    }
                            
                    
                }
        });
    
    }
</script>
@endpush