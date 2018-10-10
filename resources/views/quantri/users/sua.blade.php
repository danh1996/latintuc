@extends('quantri.index')
@section('content')

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Sửa thông tin THÀNH VIÊN</strong>
            </div>
            <div class="card-body card-block">
                <form action="quantri/thanhvien/sua/{{$user->id}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Họ tên</label></div>
                        <div class="col-12 col-md-9"><input type="text" name="hoten" value="{{$user->hoten}}" placeholder="Nhập họ tên..." class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Địa chỉ</label></div>
                        <div class="col-12 col-md-9"><input type="text" name="diachi" value="{{$user->diachi}}" placeholder="Nhập địa chỉ..." class="form-control"><small class="help-block form-text">Please enter your email</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Điện thoại</label></div>
                        <div class="col-12 col-md-9"><input type="text" name="dienthoai" value="{{$user->dienthoai}}" placeholder="Nhập số điện thoại..." class="form-control"><small class="help-block form-text">Please enter your email</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email</label></div>
                        <div class="col-12 col-md-9"><input type="text" name="email" value="{{$user->email}}" placeholder="Nhập email..." class="form-control"><small class="help-block form-text">Please enter your email</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Ngày sinh</label></div>
                        <div class="col-12 col-md-9"><input type="date" name="ngaysinh" value="{{$user->ngaysinh}}" class="form-control"><small class="help-block form-text">Please enter your email</small></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Hình</label></div>
                        <div class="col-12 col-md-9">
                            <div class="row">
                                <div class="col-md-6">
                                    <img id="hinhuser" src="public/dataupload/images/userimg/{{$user->hinh}}">
                                </div>
                                <div class="col-md-6">
                                    <input type="file" value="{{$user->hinh}}" id="chonhinhhuser"  onchange="readURL(this);"  name="hinh" class="form-control">
                                    <small class="help-block form-text">Please enter your email</small>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">Giới tính</label></div>
                        <div class="col col-md-9">
                            <div class="form-check-inline form-check">
                                <label for="inline-radio1" class="form-check-label ">
                                    @if($user->gioitinh==1)
                                    <input type="radio" id="inline-radio1" name="inline-radios" value="1" checked class="form-check-input">Nam
                                        @else
                                        <input type="radio" id="inline-radio1" name="inline-radios" value="1" class="form-check-input">Nam
                                        @endif
                                </label>
                                <label for="inline-radio2" class="form-check-label ">
                                    @if($user->gioitinh==0)
                                    <input type="radio" id="inline-radio2" name="inline-radios" checked value="0" class="form-check-input">Nữ
                                    @else
                                        <input type="radio" id="inline-radio1" name="inline-radios" value="0" class="form-check-input">Nữ
                                    @endif
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
    <script type="text/javascript">



    </script>
    @endsection