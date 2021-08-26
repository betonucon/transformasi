<?php

namespace App\Http\Controllers;
use App\Magazine;
use Illuminate\Http\Request;

class MagazineController extends Controller
{
    public function index(request $request){
        $menu='Magazine';
        $aktif=Magazine::orderBy('id','Desc')->firstOrFail();
        $data=Magazine::orderBy('id','Desc')->get();
        return view('Magazine.index',compact('menu','data','aktif'));
    }
}
