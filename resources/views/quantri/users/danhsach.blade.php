@extends('quantri.index')
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Danh sách Thành viên</strong>
        </div>
        @if(count($errors)>0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $error) {{$error}} <br>
                @endforeach
            </div>
        @endif

        {{thongBao()}}
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                <tr class="text-center">
                    <th scope="col">Id</th>
                    <th scope="col">Họ tên/Chức năng</th>
                    <th scope="col">Địa chỉ/Điện thoai/Email</th>
                    <th scope="col">Ngày sinh/Giới tính</th>
                    <th scope="col">Sửa/Xóa</th>
                </tr>
                </thead>
                <tbody>
                @foreach($userList as $ds)
                <tr class="text-center">
                    <th scope="row">{{$ds->id}}
                        <p><img width="100px" height="70px" src="dataupload/images/{{$ds->hinh}}"></p>
                    </th>
                    <td>
                        <p>{{$ds->hoten}}</p>
                        <p>
                            @if($ds->idgroup==1) Quản trị viên
                        @else Khách hàng
                        @endif
                            </p>
                    </td>
                    <td>
                        <p>{{$ds->diachi}}</p>
                        <p>{{$ds->dienthoai}}</p>
                        <p>{{$ds->email}}</p>

                    </td>
                    <td>
                        <p>{{$ds->ngaysinh}}</p>
                        <p>@if($ds->idgroup==1) Nam
                            @else Nữ
                            @endif
                        </p>

                    </td>

                    <td>
                        <a type="button" class="btn btn-outline-success" href="quantri/thanhvien/sua/{{$ds->id}}">Cập nhật</a>
                        <a type="button" class="btn btn-outline-danger" onclick="return xacnhanxoa('Xóa thiệt hả bạn ơi')" href="quantri/thanhvien/xoa/{{$ds->id}}" >Xóa</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
    @endsection