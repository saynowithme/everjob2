@extends('admin.layout.layout')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tài Khoản
                    <small>Thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-12" style="padding-bottom:70px">
            @if(count($errors)>0)
             <div class="alert alert-danger">
                @foreach($errors->all() as $err)
                {{ $err }}<br>
                @endforeach
            </div>
            @endif
           
            <form action="admin/admin/add" method="POST" enctype="multipart/form-data">
                 <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="form-group">
                    <label>Tên đăng nhập</label>
                    <input type="text" name="adminname" id="adminname" class="form-control" value="{{ old('adminname')}}" placeholder="Nhập Tên Đăng Nhập">
                </div>
                <div class="form-group">
                    <label>Mật khẩu</label>
                    <input type="password" name="password" id="password" class="form-control" value="{{ old('password')}}" placeholder="Nhập Mật Khẩu">
                </div>               
                <button type="reset" class="btn btn-default">Làm Mới</button>
                <button type="submit" class="btn btn-primary">Thêm</button>
            </form>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection
