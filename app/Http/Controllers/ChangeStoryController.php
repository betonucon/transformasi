<?php

namespace App\Http\Controllers;
use App\Story;
use Illuminate\Http\Request;

class ChangeStoryController extends Controller
{
    public function index(request $request){
        $menu='Change Story';
        $data=Story::orderBy('id','Desc')->get();
        return view('Story.index',compact('menu','data'));
    }

    public function simpan(request $request){
        error_reporting(0);

        if (trim($request->name) == '') {$error[] = '<p>- Isi Kolom Nama</p>';}
        if (trim($request->file) == '') {$error[] = '<p>- Upload file video story</p>';}
        if (trim($request->backgr) == '') {$error[] = '<p>- Upload Background</p>';}
        if (isset($error)) {echo '<b>Error</b>: <br />'.implode('', $error);} 
        else{
            $file = $request->file('file');
            $fileFileName =date('Ymdhis').'.'. $file->getClientOriginalExtension();
            $filePath =$fileFileName;
            $filelokasi='_file/';
            if($file->getClientOriginalExtension()=='mp4' || $file->getClientOriginalExtension()=='3gpp' ){
                $bg = $request->file('backgr');
                $bgFileName ='BG'.date('Ymdhis').'.'. $bg->getClientOriginalExtension();
                $bgPath =$bgFileName;
                $cek=explode('/',$_FILES['backgr']['type']);
                $bglokasi='_file/';
                if($cek[0]=='image'){
                    if(move_uploaded_file($file, $filelokasi.$filePath)){
                        if(move_uploaded_file($bg, $filelokasi.$bgPath)){
                            $data               = New Story;
                            $data->name         = $request->name;
                            $data->file         = $filePath;
                            $data->background   = $bgPath;
                            $data->save();

                            echo 'ok';
                        }
                    }
                }else{
                    echo'<p>-Background Harus berformat Gambar</p>';
                }
                    
                    
            }else{
                echo'<p>-File Harus berformat Video</p>';
            }
            
                
            
            
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
        $menu='Change Story';
        $data=Story::orderBy('id','Desc')->get();
        return view('Story.StoryAdmin',compact('menu','data'));
    }

    public function hapus(request $request){
        $data=Story::where('id',$request->id)->delete();
        
    }
}
