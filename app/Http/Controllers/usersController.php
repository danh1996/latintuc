<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\userthem;
use App\Http\Requests\usersua;
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
        $hinh=end($hinh);
        $user=new user();
        $request->file('hinh')->move(base_path('public/dataupload/images/usersimg/'),$hinh);
        $user->hoten=$request->hoten;
        $user->password=$request->password;
        $user->diachi=$request->diachi;
        $user->dienthoai=$request->dienthoai;
        $user->email=$request->email;
        $user->idgroup=$request->idgroup;
        $user->ngaysinh=$request->ngaysinh;
        $user->hinh=$hinh;
        $user->save();
        return redirect('quantri/thanhvien/danhsach')->with('thongbao','Bạn đã thêm thành công');
    }

    public function getSua($id){
        $user=User::find($id);
        return view('quantri.users.sua',['user'=>$user]);
    }

    public function postSua(usersua $request,$id){
        $user=User::find($id);
        $hinh=$request->file('hinh')->getClientOriginalName();
        $hinh=explode('/',$hinh);
        $hinh=end($hinh);
        $request->file('hinh')->move(base_path('public/dataupload/images/usersimg/'),$hinh);
        $user->hoten=$request->hoten;
        $user->diachi=$request->diachi;
        $user->dienthoai=$request->dienthoai;
        $user->email=$request->email;
        $user->ngaysinh=$request->ngaysinh;
        $user->hinh=$hinh;
        $user->save();
        return redirect('quantri/thanhvien/danhsach')->with('thongbao','Bạn đã sửa thành công');
    }

    public function getXoa($id){
        $user=User::find($id);
        $user->delete();
        return redirect('quantri/thanhvien/danhsach')->with('thongbao','Bạn đã xóa thành công');
    }

}
