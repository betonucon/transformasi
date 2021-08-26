<?php

namespace App\Http\Controllers;
use App\Ceo;
use Illuminate\Http\Request;

class CeoController extends Controller
{
    public function index(request $request){
        $menu='CEO Notes';
        $data=Ceo::where('id',decode($request->id))->first();
        return view('ceo.index',compact('menu','data'));
    }

    public function simpan(request $request){
        error_reporting(0);

        if (trim($request->name) == '') {$error[] = '<p>- Isi Kolom Ceo Name</p>';}
        if (trim($request->deskripsi) == '') {$error[] = '<p>- Isi Deskripsi</p>';}
        if (isset($error)) {echo '<b>Error</b>: <br />'.implode('<br />', $error);} 
        else{
            
            
                $data               = New Ceo;
                $data->name = $request->name;
                $data->deskripsi = $request->deskripsi;
                $data->startdate = date('Y-m-d H:i:s');
                $data->save();

                echo 'ok';
            
            
        }
    }

    public function simpan_ubah(request $request){
        error_reporting(0);

        if (trim($request->name) == '') {$error[] = '<p>- Isi Kolom Ceo Name</p>';}
        if (trim($request->deskripsi) == '') {$error[] = '<p>- Isi Deskripsi</p>';}
        if (isset($error)) {echo '<b>Error</b>: <br />'.implode('<br />', $error);} 
        else{
            
            
                $data               = Ceo::find($request->id);
                $data->name         = $request->name;
                $data->deskripsi    = $request->deskripsi;
                $data->startdate    = date('Y-m-d H:i:s');
                $data->save();

                echo 'ok';
            
            
        }
    }

    public function index_admin(request $request){
        $menu='CEO Notes';
        $data=Ceo::orderBy('id','Desc')->get();
        return view('ceo.CeoAdmin',compact('menu','data'));
    }

    public function ubah(request $request){
        $data=Ceo::where('id',$request->id)->first();
        echo'
            <input type="text" name="id" value="'.$data['id'].'">
            <div class="form-group">
                <label>Ceo Name</label>
                <input type="text" name="name" placeholder="Ceo Name" value="'.$data['name'].'"class="form-control">
            </div>
            <textarea class="textarea" placeholder="Place some text here" id="deskripsi" name="deskripsi" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">'.$data['deskripsi'].'</textarea>

        ';
        echo'
            <script>
                $(function () {
    
                    $(".textarea").wysihtml5()
                })
            </script>

        ';
    }
}
