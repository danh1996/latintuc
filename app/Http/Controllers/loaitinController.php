<?php

namespace App\Http\Controllers;
use App\theloai;
use App\loaitin;
use App\tintuc;
use Illuminate\Http\Request;
use App\Http\Requests\loaitinRequest;

class loaitinController extends Controller
{
    //
    public function danhsach(){
        $dsLoaiTin=loaitin::select('id','tenlt','idtl','anhien')->orderBy('id','asc')->get();

        return view('quantri.loaitin.danhsach',['dsLoaiTin'=>$dsLoaiTin]);
    }

    public function getThem(){
        $dsTheLoai=theloai::select('id','tentl')->get();
        return view('quantri.loaitin.them',['dsTheLoai'=>$dsTheLoai]);
    }

    public function postThem(loaitinRequest $request){
        //buoc dau no tien hanh kiem tra
        //neu co loi thi no khong luu duoc và trả
        //ve thong bao loi ban dau
        //neu khong co nthino moi tien hanh luu va bao cho ta biet la da luu thanh cong
        $loaiTin=new loaitin();
        $loaiTin->tenlt=$request->tenlt;
        //echo changeTitle('dadada');
        $loaiTin->tenltkd=changeTitle( $request->tenlt);
        $loaiTin->idtl=$request->theloai;
        $loaiTin->save();
        return redirect('quantri/loaitin/danhsach')->with('thongbao','Bạn đã thêm thành công');
    }

    public function getSua($id){
        $dsTheLoai=theloai::select('id','tentl')->get();
        $loaiTin=loaitin::find($id);
        return view('quantri.loaitin.sua',['dsTheLoai'=>$dsTheLoai,'loaiTin'=>$loaiTin]);
    }

    public function postSua(loaitinRequest $request,$id){
        echo $id;

        //buoc dau no tien hanh kiem tra
        //neu co loi thi no khong luu duoc và trả
        //ve thong bao loi ban dau
        //neu khong co nthino moi tien hanh luu va bao cho ta biet la da luu thanh cong
        $loaiTin=loaitin::find($id);
        $loaiTin->tenlt=$request->tenlt;
        //echo changeTitle('dadada');
        $loaiTin->tenltkd=changeTitle( $request->tenlt);
        $loaiTin->idtl=$request->theloai;
        $loaiTin->save();
        return redirect('quantri/loaitin/danhsach')->with('thongbao','Bạn đã sửa thành công');
    }

    public function getXoa($id){
        $soTin=tintuc::where('idlt',$id)->count();
        if ($soTin==0){//neu khong co tin nao trong loai thi tien hanh xoa
            $loaiTin=loaitin::find($id);
            $loaiTin->delete();
            return redirect('quantri/loaitin/danhsach')->with('thongbao','Bạn đã xóa thành công');
        }
        else{
            echo "<script type='text/javascript'>
                alert('Bạn không thể xóa loại tin này vì nó chứa rất nhiều tin bên trong');
                window.location='";
            echo route('quantri/loaitin/danhsach');
            echo "';
            </script>";
        }

    }
}
