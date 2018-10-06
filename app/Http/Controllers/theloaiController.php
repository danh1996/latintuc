<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\theloaiRequest;
use App\theloai;

class theloaiController extends Controller
{
    //
    public function danhsach(){
        $dsTheLoai=theloai::select('id','tentl','anhien')->get();
        return view('quantri.theloai.danhsach',['dsTheLoai'=>$dsTheLoai]);
    }

    public function getThem(){
        return view('quantri.theloai.them');
    }

    public function postThem(theloaiRequest $request){
        //buoc dau no tien hanh kiem tra
        //neu co loi thi no khong luu duoc và trả
        //ve thong bao loi ban dau
        //neu khong co nthino moi tien hanh luu va bao cho ta biet la da luu thanh cong
        $theLoai=new theloai();
        $theLoai->tentl=$request->tentl;
        //echo changeTitle('dadada');
        $theLoai->tentlkd=changeTitle( $request->tentl);
        $theLoai->save();
        return redirect('quantri/theloai/them')->with('thongbao','Bạn đã thêm thành công');
    }
}
