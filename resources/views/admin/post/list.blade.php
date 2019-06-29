@extends('admin.layout.layout')
@section('content')     
<!-- Page Content -->

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12" style="margin-bottom: 50px;">
                <h1 class="page-header">Bài viết
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
                <table class="table table-striped table-bordered table-hover " id="example">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên Công Ty</th>
                            <th>Tên Công Việc</th>
                            <th>Trạng Thái</th>
                            <th>Ngày Đăng</th>
                            <th>Hành Động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                        <tr class="odd gradeX">
                            <td>{{ $post->RecID }}</td>
                            <td>
                                {{ $post->CompanyName}}
                            </td>
                            <td>
                                {{ $post->JobName}}
                            </td>
                            @if($post->RegStatus==1)
                                <td class="text-center status"><i  class="fa fa-check-square-o true" aria-hidden="true"> On</i></td>
                            @else
                                <td class="text-center status"><i class="fa fa-ban false" aria-hidden="true"> Off</i></td>
                            @endif
                            <td>{{ $post->RegDate }}</td>
                            <td>
                                <button data-id="{{$post->id}}" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete">
                                    <i class="fa fa-trash" aria-hidden="true"></i> Xoá
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

<!-- Modal Delete-->
<div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Xóa Bài Viết</h4>
        </div>
        <div class="modal-body">
            <form id="form-delete">
                {{ csrf_field() }}
                <input type="hidden" name="id" id="del-id">
                <p>Bạn có chắc muốn xóa bài viết với id <strong id="del-id"></strong> này?</p>
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
 <script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable({'iDisplayLength': '10',"order": [[ 0, "desc" ]]});
        $('.status').css('cursor', 'pointer');
        /*Changer Status */
        $('.status').click(function(event) {
            RecID = $(this).parent().find("td:eq(0)").text();
            var status = $(this).find('i.fa-ban').text();
            var div = $(this);
            if(status){
                status = 1;
            } else status = 0;
            $.ajax({
                url: 'post/updateStatus',
                type: 'Put',
                data: {"RecID": RecID,"status":status,"_token": "{{ csrf_token() }}"},
            })
            
            .done(function(data) {
                if(data=='ok'){
                    $.alert("Thay đổi thành công.",{
                        autoClose: true,  closeTime: 3000, type: 'success',
                        position: ['top-right', [45, 30]],
                        withTime: 200,
                        title: 'Thành Công',
                        icon: 'glyphicon glyphicon-ok',
                        animation: true,
                        animShow: 'fadeIn',
                        animHide: 'fadeOut',
                    });
                    if(status == 1){
                        div.html('<i class="fa fa-check-square-o true" aria-hidden="true"> On</i>');
                    } else  div.html('<i class="fa fa-ban false" aria-hidden="true"> Off</i>');
                } else {
                    $.alert(data,{
                        autoClose: true,  closeTime: 3000, type: 'danger',
                        position: ['top-right', [45, 30]],
                        withTime: 200,
                        title: 'Lỗi',
                        icon: 'glyphicon glyphicon-ok',
                        animation: true,
                        animShow: 'fadeIn',
                        animHide: 'fadeOut',
                    });
                }
            })
            .fail(function() {
                console.log("error");
            })
        });
       
        $('#modal-delete').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) 
          var iddel = button.data('id')
          var modal = $(this)
          modal.find('.modal-body #del-id').html(iddel);
          modal.find('.modal-body #delete').attr('href', 'post/delete/'+iddel);
        })
    });   
 </script>
<script src="admin_asset/bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
<script src="admin_asset/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
<script src="js/bootstrap-flash-alert.js"></script>
@endsection
