@extends('quantri.index')
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">DANH SÁCH LOẠI TIN</strong>
        </div>
        {{thongBao()}}
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                <tr class="text-center">
                    <th scope="col">Id</th>
                    <th scope="col">Tên Loại tin</th>
                    <th scope="col">Ẩn hiện</th>
                    <th scope="col">Thuộc loại</th>
                    <th scope="col">Số tin</th>
                    <th scope="col">Sửa/Xóa</th>
                </tr>
                </thead>
                <tbody>
                @foreach($dsLoaiTin as $lt)
                <tr class="text-center">
                    <th scope="row">{{$lt->id}}</th>
                    <td>{{$lt->tenlt}}</td>

                    <td>{{$lt->anhien}}</td>
                    <td>{{$lt->theloai->tentl}}</td>
                    <td>{{count($lt->tintuc)}}</td>
                    <td>
                        <a type="button" href="quantri/loaitin/sua/{{$lt->id}}" class="btn btn-outline-success" >Cập nhật</a>
                        <a type="button" href="quantri/loaitin/xoa/{{$lt->id}}" onclick="return xacnhanxoa('Bạn có chắc?')" class="btn btn-outline-danger">Xóa</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
    @endsection