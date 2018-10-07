@extends('quantri.index')
@section('content')
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Danh sách Tin</strong>
                        </div>
                        {{thongBao()}}
                        <div class="card-body">
                            <table id="danhsachtin" class="table table-striped table-bordered">
                                <thead>
                                <tr class="text-center">
                                    <th>id Tin</th>
                                    <th>Tiêu đề/Tóm tắt</th>
                                    <th>Hình</th>
                                    <th>Thuộc loại tin/Thể loại</th>
                                    <th>Nổi bật/Ân hiện</th>
                                    <th>Sửa/Xóa</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($dsTin as $tin)
                                <tr>
                                    <td><p>{{$tin->id}}</p>
                                    </td>
                                    <td><p>{{$tin->tieude}}</p>
                                        {{$tin->tomtat}}</td>
                                    <td><img src="{{asset('dataupload/images/'.$tin->hinh)}}"></td>
                                    <td>
                                        <p>Thuộc loại tin:{{$tin->loaitin->tenlt}}</p>
                                        <p>Thuộc thể loại:{{$tin->loaitin->theloai->tentl}}</p>
                                    </td>
                                    <td>
                                        <p>@if($tin->anhien==1) Đang hiện
                                            @else Đang ẩn
                                            @endif
                                        </p>
                                        <p>@if($tin->TinNoiBat==1) Tin nổi bật
                                            @else Tin thường
                                            @endif</p>
                                    </td>
                                    <td>
                                        <a type="button" class="btn btn-outline-success" href="quantri/theloai/sua/{{$tin->id}}">Cập nhật</a>
                                        <a type="button" class="btn btn-outline-danger" onclick="return xacnhanxoa('Xóa thiệt hả bạn ơi')" href="quantri/theloai/xoa/{{$tin->id}}" >Xóa</a>
                                    </td>
                                </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- .animated -->
    </div><!-- .content -->
@endsection