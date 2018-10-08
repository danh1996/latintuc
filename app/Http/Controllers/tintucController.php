<?php

namespace App\Http\Controllers;
use App\Http\Requests\tintucsua;
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
        $hinh=explode('/',$request->hinh);
        $tinTuc->hinh=$hinh[7];
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
        $dsTheLoai=theloai::select('id','tentl')->get();
        $dsLoaiTin=loaitin::select('id','tenlt')->get();
        return view('quantri.tinTuc.sua',['tinTuc'=>$tinTuc,'dsTheLoai'=>$dsTheLoai,'dsLoaiTin'=>$dsLoaiTin]);
    }

    public function postSua(tintucsua $request,$id){
        $tinTuc=tinTuc::find($id);
        $tinTuc->tieude=$request->tieude;
        $tinTuc->tieudekd=changeTitle( $request->tieude);
        $tinTuc->tomtat=$request->tomtat;
        $hinh=explode('/',$request->hinh);
        if ($hinh[7]===NULL) $tinTuc->hinh=$request->hinh;
        else $tinTuc->hinh=$hinh[7];
        $tinTuc->idtl=$request->theloai;
        $tinTuc->idlt=$request->loaitin;
        $tinTuc->anhien=$request->anhien;
        $tinTuc->content=$request->noidung;
        $tinTuc->TinNoiBat=$request->noibat;
        $tinTuc->save();
        return redirect('quantri/tintuc/danhsach')->with('thongbao','Bạn đã sửa thành công');
    }

    public function getXoa($id){
        $tinTuc=tinTuc::find($id);
        $tinTuc->delete();
        return redirect('quantri/tintuc/danhsach')->with('thongbao','Bạn đã xóa thành công');
    }
}
