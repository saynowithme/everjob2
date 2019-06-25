@extends('admin.layout.layout')
@section('content')     
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-11">
                <h1 class="page-header">Admin
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
            <div class="form-group">
                <a type="button" class="btn btn-success" href="admin/admin/add" >
                    <i class="fa fa-plus-circle" aria-hidden="true"></i> Thêm Admin
                </a>
            </div>
            <table class="table table-striped table-bordered table-hover" id="taglist">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Số Bài Viết</th>
                        <th>Tạo Lúc</th>
                        <th>Hành Động</th>
                    </tr>
                </thead>
                <tbody> 
                        @foreach($list as $list)
                        <tr>
                            <td>{{ $list->id }}</td>
                            <td>
                                {{ $list->name }}
                            </td>
                            <td>    
                                {{ $list->posts->count() }}
                            </td>
                            <td>    
                                {{ $list->created_at }}
                            </td>                        
                            <td>
                                <button data-id="{{$list->id}}" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#show-delete">
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

<!-- Modal Add-->
<div class="modal fade" id="show-add" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Thêm Admin</h4>
            @if(count($errors)>0)
                <div class="alert alert-danger">
            @foreach($errors->all() as $err)
                {{ $err }}<br>
            @endforeach
            </div>
            @endif
        </div>
        <div class="modal-body">
            <form id="form-add">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="recipient-name" class="control-label">Tên</label>
                    <input type="text" class="form-control" id="adminname" name="adminname">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="control-label">Mật Khẩu</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button id="add" type="submit" class="btn btn-success">Thêm</button>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>

<!-- Modal Delete-->
<div class="modal fade" id="show-delete" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Xóa Admin</h4>
        </div>
        <div class="modal-body">
            <form id="form-delete">
                {{ csrf_field() }}
                <input type="hidden" name="id" id="del-id">
                <p>Bạn có chắc muốn xóa tài khoản id <strong id="del-id"></strong> cũng như các bài viết của họ ?</p>
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
 <!-- DataTables JavaScript -->
 <script type="text/javascript">
    $(document).ready(function() {
        $('#taglist').DataTable({'iDisplayLength': '10',"order": [[ 0, "asc" ]]});


        $('#show-delete').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var iddel = button.data('id')
            var modal = $(this)
            modal.find('.modal-body #del-id').html(iddel);
            modal.find('.modal-body #delete').attr('href', 'admin/admin/delete/'+iddel);
        });

        $('#show-add').on( "submit", function (event) {
            var button = $(event.Target)
            var modal = $(this)
            modal.find('.modal-body #add').attr('href', 'admin/admin/add/');
        });
        
        
    });
 </script>
<script src="admin_asset/bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
<script src="admin_asset/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
<script src="js/bootstrap-flash-alert.js"></script>
@endsection
