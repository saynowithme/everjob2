@extends('admin.layout.layout')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Chuyên Mục
                    <small>Thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7">
                @if(count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{ $err }}<br>
                        @endforeach
                    </div>
                @endif
                @if(Session::has('flash_success'))
                <div class="alert alert-success">
                    {{ session('flash_success') }}
                </div>
                @endif
                <form action="add" method="POST">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label>Tên Chuyên Mục</label>
                        <input class="form-control" name="cate_name" id="title" placeholder="Tên Chuyên Mục" />
                    </div>
                    <button type="reset" class="btn btn-default">Làm mới</button>
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
