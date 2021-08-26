<?php

function name(){
   $data='PT Krakatau IT';
   return $data;
}
function judul_halaman(){
   $data='Page';
   return $data;
}


function get_ceo(){
   
   $data=App\Ceo::orderBy('id','Asc')->get();
   
   return $data;
}

function bulnya($id){
   if($id>9){
      $data=$id;
   }else{
      $data='0'.$id;
   }
   return $data;
}

function link_magazine(){
   $data="https://sso.krakatausteel.com/upload/magazine/";
   return $data;
}
function link_story(){
   $data=url('_file');
   return $data;
}
function encode($kode){
   $data=base64_encode(base64_encode($kode));
   return $data;
}

function decode($kode){
   $data=base64_decode(base64_decode($kode));
   return $data;
}
function bulan($bulan)
{
   Switch ($bulan){
      case '01' : $bulan="Januari";
         Break;
      case '02' : $bulan="Februari";
         Break;
      case '03' : $bulan="Maret";
         Break;
      case '04' : $bulan="April";
         Break;
      case '05' : $bulan="Mei";
         Break;
      case '06' : $bulan="Juni";
         Break;
      case '07' : $bulan="Juli";
         Break;
      case '08' : $bulan="Agustus";
         Break;
      case '09' : $bulan="September";
         Break;
      case 10 : $bulan="Oktober";
         Break;
      case 11 : $bulan="November";
         Break;
      case 12 : $bulan="Desember";
         Break;
      }
   return $bulan;
}



?>