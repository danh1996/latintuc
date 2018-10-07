@extends('quantri.index')
@section('content')

    <div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Sửa LOẠI TIN</strong>
            @if(count($errors)>0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $error) {{$error}} <br>
                @endforeach
            </div>
            @endif
        </div>
        <div class="card-body card-block">
            <form action="quantri/loaitin/sua/{{$loaiTin->id}}" method="post" class="form-horizontal">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên loại tin</label></div>
                    <div class="col-12 col-md-9"><input type="text" value="{{$loaiTin->tenlt}}" name="tenlt" placeholder="Nhập tên loại tin" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="select" class=" form-control-label">Thuộc loại</label></div>
                    <div class="col-12 col-md-9">
                        <select name="theloai" id="select" class="form-control">
                            <option value="0">Mời bạn chọn</option>
                            @foreach($dsTheLoai as $tl )
                                @if($tl->id==$loaiTin->theloai->id)
                                    <option value="{{$tl->id}}" selected>{{$tl->tentl}}</option>
                                    @else
                                    <option value="{{$tl->id}}">{{$tl->tentl}}</option>
                                    @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i>Sửa
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