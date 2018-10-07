@extends('quantri.index')
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Danh sách các THỂ LOẠI</strong>
        </div>
        {{thongBao()}}
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                <tr class="text-center">
                    <th scope="col">Id Thể loại</th>
                    <th scope="col">Tên Thể loại</th>
                    <th scope="col">Ẩn hiện</th>
                    <th scope="col">Sửa/Xóa</th>
                </tr>
                </thead>
                <tbody>
                @foreach($dsTheLoai as $ds)
                <tr class="text-center">
                    <th scope="row">{{$ds->id}}</th>
                    <td>{{$ds->tentl}}</td>
                    <td>@if($ds->anhien==1) Đang hiện
                            @else Đang ẩn
                        @endif
                        </td>
                    <td>
                        <a type="button" class="btn btn-outline-success" href="quantri/theloai/sua/{{$ds->id}}">Cập nhật</a>
                        <a type="button" class="btn btn-outline-danger" onclick="return xacnhanxoa('Xóa thiệt hả bạn ơi')" href="quantri/theloai/xoa/{{$ds->id}}" >Xóa</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
    @endsection