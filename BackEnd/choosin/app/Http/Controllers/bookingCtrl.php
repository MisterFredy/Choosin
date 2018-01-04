<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\MenuMakanan;
use Response;
use Illuminate\Support\Facades\Input;


class bookingCtrl extends Controller
{
    //

    public function __construct(){
        $this->middleware('auth');
    }

    function generate($qtd){
        //generator angka dan huruf dengan panjang length yg bisa di set sesuka.
        $Caracteres = 'ABCDEFGHIJKLMOPQRSTUVXWYZ0123456789';
        $QuantidadeCaracteres = strlen($Caracteres);
        $QuantidadeCaracteres--;
        
        $Hash=NULL;
            for($x=1;$x<=$qtd;$x++){
                $Posicao = rand(0,$QuantidadeCaracteres);
                $Hash .= substr($Caracteres,$Posicao,1);
            }
        return $Hash;
        } 


    public function index(){
        $model = Booking::Lihat_booking();
        return Response::json($model,200);
    }

    public function lihatdaftarbooking(request $request,$id){
        $model = Booking::Lihat_daftar_booking($id);
        return Response::json($model,200);
    }

    public function buat_bookingfrm(request $request,$id,$foto,$nama){
        return view('booking',['ids'=>$id,'fotos'=>$foto,'namas'=>$nama]);
    }

    public function buat_booking(request $request){
        $id = Input::get('iduser');
        $atasnama = Input::get('nama');
        $tanggal = Input::get('tanggal');
        $waktu = Input::get('waktu');
        $datetime = date('Y-m-d H:i', strtotime("$tanggal $waktu"));
        $idtempatmakan = Input::get('idtempatmakan');
        //$catatan = Input::get('catatan');
        $kode = bookingCtrl::generate(12);
        
        $data = array([
            'id_user' => $id,
            'atas_nama' => $atasnama,
            'kode' => $kode,
            'tanggal' => $datetime,
            'id_tempat_makan' => $idtempatmakan,
            'status' => '1',
        ]);
        $model2 = Booking::tambah_booking($data);
        $model = MenuMakanan::menumakan($idtempatmakan);
        return view('menu1',['kodes'=>$kode,'data'=>$model,'ids'=>$idtempatmakan]);
    }


    public function delete_booking(request $request,$id){
        $model = Booking::Delete_booking($id);
        return Response::json('sucess',200);
    }

    public function metode_pembayaran(request $request,$kode){
        $metode = Input::get('metode');
        $total = Input::get('total_bayar');
        $data = array([
            'metode_bayar'=>$metode,
            'total_bayar'=>$total,
            'status_bayar'=>'0'
        ]);
        $model = Booking::edit_booking($kode,$data);
        return Response::json("sucess",200);
    }

    public function konfirmasi_pembayaran(request $request,$kode){
        $atasnama = Input::get('atasnama');
        $tanggal = Input::get('tanggal');
        $data = array([
            'atas_nama' => $atasnama,
            'tanggal_konfirmasi' => $tanggal,
            'status_bayar'=>'1'
        ]);
        return Response::json("sucess",200);
    }
    

}
