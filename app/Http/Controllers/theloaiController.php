<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\theloaiRequest;
use App\theloai;
use App\loaitin;
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
        return redirect('quantri/theloai/danhsach')->with('thongbao','Bạn đã thêm thành công');
    }

    public function getSua($id){
        $theLoai=theloai::find($id);
        return view('quantri.theloai.sua',['theLoai'=>$theLoai]);
    }

    public function postSua(theloaiRequest $request,$id){
        //buoc dau no tien hanh kiem tra
        //neu co loi thi no khong luu duoc và trả
        //ve thong bao loi ban dau
        //neu khong co nthino moi tien hanh luu va bao cho ta biet la da luu thanh cong
        $theLoai=theloai::find($id);
        $theLoai->tentl=$request->tentl;
        //echo changeTitle('dadada');
        $theLoai->tentlkd=changeTitle( $request->tentl);
        $theLoai->save();
        return redirect('quantri/theloai/danhsach')->with('thongbao','Bạn đã thêm thành công');
    }

    public function getXoa($id){
        $soLoaiTin=loaitin::where('idtl',$id)->count();
        if ($soLoaiTin==0){//neu khong co tin nao trong loai thi tien hanh xoa
            $theLoai=theLoai::find($id);
            $theLoai->delete();
            return redirect('quantri/theloai/danhsach')->with('thongbao','Bạn đã xóa thành công');
        }
        else{
            echo "<script type='text/javascript'>
                alert('Bạn không thể xóa thể loại này vì nó chứa rất nhiều loại tin bên trong');
                window.location='";
            echo route('quantri/theloai/danhsach');
            echo "';
            </script>";
        }
    }
}
