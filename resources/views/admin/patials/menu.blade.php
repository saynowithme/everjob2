 <div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a href="admin"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="admin/profile"><i class="fa fa-user fa-fw"></i> Cá Nhân</a>
            </li>
            <li>
                <a href="admin/post"><i class="fa fa-pencil fa-fw"></i> Bài viết<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="admin/post"> Danh Sách Bài Viết</a>
                    </li>
                    <li>
                        <a href="admin/post/add"> Thêm Bài Viết</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            @if(Auth::user()->role=='admin')
            <li>
                <a href="admin/category"><i class="fa fa-table fa-fw"></i> Chuyên Mục<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="admin/category">Danh Sách Chuyên Mục</a>
                    </li>
                    <li>
                        <a href="admin/category/add">Thêm Chuyên Mục</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="admin/admin"><i class="fa fa-users fa-fw"></i> Quản lý Admin</a>
            </li>
            <li>
                <a href=""><i class="fa fa-home fa-fw"></i> Về trang tin tức</a>
            </li>
            @endif
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>