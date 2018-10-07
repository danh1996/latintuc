@extends('quantri.index')
@section('content')

    <div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Sửa THỂ LOẠI</strong>
            {{thongBao()}}
        <div class="card-body card-block">

            <form action="quantri/theloai/sua/{{$theLoai->id}}}" method="post" class="form-horizontal">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên thể loại</label></div>
                    <div class="col-12 col-md-9"><input type="text" value="{{$theLoai->tentl}}" name="tentl" placeholder="Nhập tên thể loại" class="form-control">
                        @if(count($errors)>0)
                            <div class="alert alert-danger">

                            @foreach($errors ->all() as $error)
                                    <small class="form-text text-muted">{{$error}}</small>
                                @endforeach

                            </div>
                            @endif
                        </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i>Cập nhật
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