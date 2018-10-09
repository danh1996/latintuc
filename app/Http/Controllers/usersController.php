<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\userthem;
class usersController extends Controller
{
    //
    public function danhsach(){
        $userList=User::select('id','hoten','diachi','dienthoai','email','idgroup','ngaysinh','gioitinh','hinh')->get();
        return view('quantri.users.danhsach',['userList'=>$userList]);
    }

    public function getThem(){
        return view('quantri.users.them');
    }

    public function postThem(userthem $request){
        //buoc dau no tien hanh kiem tra
        //neu co loi thi no khong luu duoc và trả
        //ve thong bao loi ban dau
        //neu khong co nthino moi tien hanh luu va bao cho ta biet la da luu thanh cong
        $hinh=$request->file('hinh')->getClientOriginalName();
        $hinh=explode('/',$hinh);
        echo $hinh=end($hinh);
        $user=new user();
        echo $request->file('hinh')->move(base_path('public/dataupload/images/'),$hinh);
        $user->hoten=$request->hoten;
        $user->username=$request->username;
        $user->password=$request->password;
        $user->diachi=$request->diachi;
        $user->dienthoai=$request->dienthoai;
        $user->email=$request->email;
        $user->idgroup=$request->idgroup;
        $user->ngaysinh=$request->ngaysinh;
        echo $user->hinh=$hinh;
        $user->save();
        return redirect('quantri/thanhvien/danhsach')->with('thongbao','Bạn đã thêm thành công');
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
