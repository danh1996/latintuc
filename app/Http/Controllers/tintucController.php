<?php

namespace App\Http\Controllers;
use App\Http\Requests\tintucthem;
use App\tintuc;
use App\theloai;
use App\loaitin;
use Illuminate\Http\Request;

class tintucController extends Controller
{
    public function danhsach(){
        $dsTin=tintuc::select('id','tieude','tomtat','hinh','idtl','idlt','TinNoiBat','anhien')->orderBy('id','DESC')->get();
        return view('quantri.tintuc.danhsach',['dsTin'=>$dsTin]);
    }

    public function getThem(){
        $dsTheLoai=theloai::select('id','tentl')->get();
        $dsLoaiTin=loaitin::select('id','tenlt')->get();
        return view('quantri.tintuc.them',['dsTheLoai'=>$dsTheLoai,'dsLoaiTin'=>$dsLoaiTin]);
    }

    public function postThem(tintucthem $request){
        //buoc dau no tien hanh kiem tra
        //neu co loi thi no khong luu duoc và trả
        //ve thong bao loi ban dau
        //neu khong co nthino moi tien hanh luu va bao cho ta biet la da luu thanh cong
        $tinTuc=new tinTuc();
        $tinTuc->tieude=$request->tieude;
        $tinTuc->tieudekd=changeTitle( $request->tieude);
        $tinTuc->tomtat=$request->tomtat;
        $tinTuc->hinh=$request->hinh;
        $tinTuc->idtl=$request->theloai;
        $tinTuc->idlt=$request->loaitin;
        $tinTuc->anhien=$request->anhien;
        $tinTuc->content=$request->noidung;
        $tinTuc->TinNoiBat=$request->noibat;
        $tinTuc->save();
        return redirect('quantri/tintuc/danhsach')->with('thongbao','Bạn đã thêm thành công');
    }

    public function getSua($id){
        $tinTuc=tinTuc::find($id);
        return view('quantri.tinTuc.sua',['tinTuc'=>$tinTuc]);
    }

    public function postSua(tinTucRequest $request,$id){
        //buoc dau no tien hanh kiem tra
        //neu co loi thi no khong luu duoc và trả
        //ve thong bao loi ban dau
        //neu khong co nthino moi tien hanh luu va bao cho ta biet la da luu thanh cong
        $tinTuc=tinTuc::find($id);
        $tinTuc->tentl=$request->tentl;
        //echo changeTitle('dadada');
        $tinTuc->tentlkd=changeTitle( $request->tentl);

        $tinTuc->save();
        return redirect('quantri/tinTuc/danhsach')->with('thongbao','Bạn đã thêm thành công');
    }

    public function getXoa($id){
        $soLoaiTin=loaitin::where('idtl',$id)->count();
        if ($soLoaiTin==0){//neu khong co tin nao trong loai thi tien hanh xoa
            $tinTuc=tinTuc::find($id);
            $tinTuc->delete();
            return redirect('quantri/tinTuc/danhsach')->with('thongbao','Bạn đã xóa thành công');
        }
        else{
            echo "<script type='text/javascript'>
                alert('Bạn không thể xóa thể loại này vì nó chứa rất nhiều loại tin bên trong');
                window.location='";
            echo route('quantri/tinTuc/danhsach');
            echo "';
            </script>";
        }
    }
}
