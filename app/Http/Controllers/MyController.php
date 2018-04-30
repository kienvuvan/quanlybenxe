<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\NhaXe;
use App\Xe;
use App\TaiKhoan;
use Validator;
use DB;

class MyController extends Controller
{
    public function getIndex(){
        $nhaXe=NhaXe::all();
        // dd($xe);
        return view('views.home',compact('nhaXe'));
    }
    //Lấy thông tin nhà xe
    public function searchCarOwner(Request $request){
        $carOwner = $request->carOwner;
        $nhaXe = NhaXe::where('NhaXe','like','%'.$carOwner.'%')->get();
        return view('views.searchcarowner',compact('nhaXe'));
    }
    //Đặt vé
    public function buyTicket(Request $request){
        $firstpoint = $request->firstpoint;
        $destinationpoint = $request->destinationpoint;
        $carowner = $request->carowner;
        $inforCar = DB::table('xe')->join('chuxe','chuxe.Cmt','=','xe.CmtNhaXe')
        ->join('chuyenxe','chuyenxe.BienSoXe','=','xe.BienSoXe')
        ->where([['LoTrinh','like','%'.$firstpoint.'%-%'.$destinationpoint.'%'],['NhaXe','like','%'.$carowner.'%']])->select('xe.*','chuxe.NhaXe','chuyenxe.MaChuyenXe')->get();
        return view('views.buyticket1',compact(['inforCar','firstpoint','destinationpoint','inforGuest']));
    }

    public function convert(Request $request){
        $firstpoint = $request->firstpoint;
        $destinationpoint = $request->destinationpoint;
        $convert = $firstpoint;
        $firstpoint = $destinationpoint;
        $destinationpoint = $convert;
        return view('views.buyticket',compact(['firstpoint','destinationpoint']));
    }

    public function bookticket($MaChuyenXe){

        $idMaxGuest = DB::table('hanhkhach')->max('MaHanhKhach');
        $idMaxGuest = substr($idMaxGuest, 2)+1;
        if($idMaxGuest<10){
            $idMaxGuest = "KH000".$idMaxGuest;
        }else if($idMaxGuest<100){
            $idMaxGuest = "KH00".$idMaxGuest;
        }else if($idMaxGuest<1000){
            $idMaxGuest = "KH0".$idMaxGuest;
        }else{
            $idMaxGuest = "KH".$idMaxGuest;
        }
        $destroy = rand(0,10000);
        return view('bookticket.datve',compact('MaChuyenXe','idMaxGuest','destroy'));
    }

    public function muave(Request $request){
        $idArriver  = $request->idArriver;
        $idMaxGuest = $request->idMaxGuest;
        $name       = $request->name;
        $id         = $request->id;
        $idDestroy    = $request->idDestroy;

        $validator = Validator::make($request->all(),[
            'name'=>'required|min :3',
            'id'=>'required|min:9|max:13'
        ],[
            'name.required'=>'Bạn chưa nhập tên người dùng',
            'name.min'=>'Tên bạn phải có ít nhất 3 ký tự',
            'id.required'=>'Bạn chưa nhập chứng minh thư',
            'id.min'=>'Chứng minh thư phải ít nhất 9 ký tự',
            'id.max'=>'Chứng minh thư có nhiều nhất 13 ký tự'
        ]);
        if ($validator->fails()) {
            return redirect('bookticket-'.$idArriver)
                        ->withErrors($validator)
                        ->withInput();
        }
        $result     = DB::table('hanhkhach')->insert([
            'MaChuyenXe'=>$idArriver,
            'MaHanhKhach'=>$idMaxGuest,
            'HoTen'=>$name,
            'Cmt'=>$id,
            'MaHuy'=>$idDestroy 
        ]);
        // if(isset($result)){
        //    return redirect('bookticket-'.$idArriver)->with('Đặt vé thành công');
        // }
    }

    public function login(Request $request){
        $username = $_POST['username'];
        $password = $_POST['pass'];
        $users=DB::table('taikhoan')->where([['email','=',$username],['matkhau','=',$password]])->get();
        if(count($users)==0){
            return view('login.loginerror', compact(['username','password']));
        }else{
            foreach ($users as $key) {
                $name = $key->Email;
                $pass = $key->MatKhau;
                $carowner = $key->Loai;
                if($name == $username && $password == $pass){
                    if($carowner=="admin"){
                        return view('admin.index',compact('name'));
                    }else{
                        return view('views.maincarowner',compact('name'));
                    }               
                }
            }
        }
    }

    public function getMaxIdGuest(){
        $result = DB::table('hanhkhach')->max('MaHanhKhach');
        $result =substr($result,2);
        echo ($result+1);
    }

    public function getTabel($name){
        $taikhoan = DB::table('taikhoan')->get();
        return view('admin.tabel',compact('name','taikhoan'));
    }
}
