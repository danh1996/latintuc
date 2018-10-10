@extends('quantri.index')
@section('content')

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Thêm THÀNH VIÊN</strong>
            </div>
            <div class="card-body card-block">
                <form action="quantri/thanhvien/them" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Họ tên</label></div>
                        <div class="col-12 col-md-9"><input type="text" name="hoten" placeholder="Nhập họ tên..." class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Mật khẩu</label></div>
                        <div class="col-12 col-md-9"><input type="password" name="password" placeholder="Nhập mật khẩu..." class="form-control"><small class="help-block form-text">Please enter a complex password</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Địa chỉ</label></div>
                        <div class="col-12 col-md-9"><input type="text" name="diachi" placeholder="Nhập địa chỉ..." class="form-control"><small class="help-block form-text">Please enter your email</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Điện thoại</label></div>
                        <div class="col-12 col-md-9"><input type="text" name="dienthoai" placeholder="Nhập số điện thoại..." class="form-control"><small class="help-block form-text">Please enter your email</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email</label></div>
                        <div class="col-12 col-md-9"><input type="text" name="email" placeholder="Nhập email..." class="form-control"><small class="help-block form-text">Please enter your email</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Ngày sinh</label></div>
                        <div class="col-12 col-md-9"><input type="date" name="ngaysinh" class="form-control"><small class="help-block form-text">Please enter your email</small></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Hình</label></div>
                        <div class="col-12 col-md-9"><input type="file" name="hinh" class="form-control"><small class="help-block form-text">Please enter your email</small></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">Giới tính</label></div>
                        <div class="col col-md-9">
                            <div class="form-check-inline form-check">
                                <label for="inline-radio1" class="form-check-label ">
                                    <input type="radio" id="inline-radio1" name="inline-radios" value="1" class="form-check-input">Nam
                                </label>
                                <label for="inline-radio2" class="form-check-label ">
                                    <input type="radio" id="inline-radio2" name="inline-radios" value="0" class="form-check-input">Nữ
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban"></i> Reset
                        </button>
                    </div>
                </form>
            </div>
            <div class="card-footer">

            </div>
        </div>
    </div>
    @endsection