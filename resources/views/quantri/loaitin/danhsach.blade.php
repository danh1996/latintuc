@extends('quantri.index')
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">THÊM LOẠI TIN</strong>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Thứ tự</th>
                    <th scope="col">Tên Loại tin</th>
                    <th scope="col">Ẩn hiện</th>
                    <th scope="col">Thuộc loại</th>
                    <th scope="col">Sửa/Xóa</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>
                        <button type="button" class="btn btn-outline-success">Cập nhật</button>
                        <button type="button" class="btn btn-outline-danger">Xóa</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>
    @endsection