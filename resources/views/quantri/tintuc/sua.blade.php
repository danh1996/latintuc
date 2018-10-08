@extends('quantri.index')
@section('content')

    <div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Sửa nội dung TIN</strong>
        </div>
        @if(count($errors)>0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $error) {{$error}} <br>
                @endforeach
            </div>
        @endif

        <div class="card-body card-block">
            <form action="quantri/tintuc/sua/{{$tinTuc->id}}" method="post"  class="form-horizontal">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tiêu đề</label></div>
                    <div class="col-12 col-md-9"><input value="{{$tinTuc->tieude}}" type="text" name="tieude" placeholder="Nhập tiêu đề tin" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="password-input" class=" form-control-label">Hình</label></div>
                    <div class="col-12 col-md-8"><input value="{{$tinTuc->hinh}}" type="text" placeholder="Mời bạn chọn hình"  id="hinh" name="hinh" class="form-control">
                        <small class="help-block form-text">Please enter a complex password</small>
                    </div>
                    <div class="col col-md-1"><input type="button" onclick="selectFileWithCKFinder('hinh')" value="…"/></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Tóm tắt</label></div>
                    <div class="col-12 col-md-9"><textarea name="tomtat" rows="3" placeholder="Tóm tắt..." class="form-control">{{$tinTuc->tomtat}}</textarea></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Nội dung</label></div>
                    <div class="col-12 col-md-9"><textarea  name="noidung" id="textarea-input" rows="9" placeholder="Nội dung..." class="form-control">{{$tinTuc->content}}</textarea></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="select" class=" form-control-label">Chọn Thể Loại</label></div>
                    <div class="col-12 col-md-9">
                        <select name="theloai" id="theloai" class="form-control">
                            <option>Mời bạn chọn</option>
                            @foreach($dsTheLoai as $tl)
                                @if($tl->id==$tinTuc->idtl)
                                    <option value="{{$tl->id}}" selected>{{$tl->tentl}}</option>
                                @else
                                    <option value="{{$tl->id}}">{{$tl->tentl}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="select" class=" form-control-label">Chọn Loại tin</label></div>
                    <div class="col-12 col-md-9">
                        <select name="loaitin" id="loaitin" class="form-control">
                            <option>Mời bạn chọn</option>
                            @foreach($dsLoaiTin as $lt)
                                @if($lt->id==$tinTuc->idlt)
                                    <option value="{{$lt->id}}" selected>{{$lt->tenlt}}</option>
                                @else
                                    <option value="{{$lt->id}}">{{$lt->tenlt}}</option>
                                @endif
                                    @endforeach
                        </select>
                        </select>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Nổi bật</label></div>
                    <div class="col col-md-9">
                        <div class="form-check-inline form-check">
                            <label for="inline-radio1" class="form-check-label ">
                                <input type="radio" id="inline-radio1" name="noibat"
                                       @if($tinTuc->TinNoiBat==1)
                                       checked
                                       @endif value="1" class="form-check-input">Nổi bật
                            </label>
                            <label for="inline-radio2" class="form-check-label ">
                                <input type="radio" id="inline-radio2"
                                       @if($tinTuc->TinNoiBat==0)
                                            checked
                                       @endif
                                       name="noibat" value="0" class="form-check-input">Bình thường
                            </label>

                        </div>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Ẩn hiện</label></div>
                    <div class="col col-md-9">
                        <div class="form-check-inline form-check">
                            <label for="inline-radio1" class="form-check-label ">
                                <input type="radio" id="inline-radio1"
                                       @if($tinTuc->anhien==1)
                                       checked
                                       @endif
                                       name="anhien" value="1" class="form-check-input">Hiện
                            </label>
                            <label for="inline-radio2" class="form-check-label ">
                                <input
                                        @if($tinTuc->anhien==0)
                                        checked
                                        @endif
                                        type="radio" id="inline-radio2" name="anhien" value="0" class="form-check-input">Ẩn
                            </label>

                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i>Thêm
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i>Hoàn tác
                    </button>

                </div>
            </form>
        </div>
    </div>
</div>
    @endsection