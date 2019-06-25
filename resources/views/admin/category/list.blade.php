@extends('admin.layout.layout')
@section('content')     
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-11">
                <h1 class="page-header">Chuyên Mục
                    <small>Danh Sách</small>
                </h1>
                @if(session('flash_success'))
                <div class="alert alert-success">
                    <strong>Thành Công! </strong>{{ session('flash_success') }}
                </div>
                @endif
                 @if(session('flash_err'))
                <div class="alert alert-danger">
                    <strong>Cảnh Báo! </strong>{{ session('flash_err') }}
                </div>
                @endif
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="example">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên</th> 
                        <th>Đường Dẫn</th>
                        <th>Số bài đăng</th>
                        <th>Hành Động</th>
                    </tr>
                </thead>
                <tbody> 
                        @foreach($cates as $cate)
                        <tr>
                            <td>{{ $cate->id }}</td>
                            <td>
                                {{ $cate->name }}
                            </td>
                            <td>
                                {{ $cate->slug }}
                            </td>
                            <td>    
                                {{ $cate->posts->count() }}
                            </td>                      
                            <td>
                                <a href="admin/category/update/{{$cate->id}}" class="btn btn-info btn-sm">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sửa 
                                </a>
                                <button data-id="{{$cate->id}}" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#show-delete">
                                    <i class="fa fa-trash" aria-hidden="true"></i> Xoá
                                </button>
                            </td>
                        </tr>
                        @endforeach
                </tbody> 
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

<!-- Modal Delete-->
<div class="modal fade" id="show-delete" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Xóa Chuyên Mục</h4>
        </div>
        <div class="modal-body">
            <form id="form-delete">
                {{ csrf_field() }}
                <input type="hidden" name="id" id="del-id">
                <p>Bạn có chắc muốn xóa chuyên mục <strong id="del-name"></strong> cũng như các bài viết trong đó?</p>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <a href="" class="btn btn-danger" id="delete">Xóa</a>
            </div>
            </form> 
        </div>
    </div>
  </div>
</div>

@endsection
@section('script')
<script src="js/slug.js"></script>
 <!-- DataTables JavaScript -->
 <script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable({'iDisplayLength': '10',"order": [[ 0, "asc" ]]});

        $('#show-delete').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var iddel = button.data('id')
            var modal = $(this)
            modal.find('.modal-body #del-id').html(iddel);
            modal.find('.modal-body #delete').attr('href', 'admin/category/delete/'+iddel);
        });
       
    });
 </script>
   <script src="admin_asset/bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
   <script src="admin_asset/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
   <script src="js/bootstrap-flash-alert.js"></script>
@endsection
