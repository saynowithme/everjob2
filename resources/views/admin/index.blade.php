@extends('admin.layout.layout')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
           <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-pencil fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{ $num_post_accept }}</div>
                                        <div>Tin đang hoạt động</div>
                                    </div>
                                </div>
                            </div>
                            <a href="post">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{ $num_post_required }}</div>
                                        <div>Tin đang chờ xét duyệt</div>
                                    </div>
                                </div>
                            </div>
                            <a href="admin/category">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{ $num_cate }}</div>
                                        <div>Tiêu đề</div>
                                    </div>
                                </div>
                            </div>
                            <a href="categories">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-users fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{ $num_admin }}</div>
                                        <div>Quản trị viên</div>
                                    </div>
                                </div>
                            </div>
                            <a href="admin/admin">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-users fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{ $num_admin}}</div>
                                        <div>Quản trị viên</div>
                                    </div>
                                </div>
                            </div>
                            <a href="admin/admin">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">Số lượng tin đăng trong 7 ngày</div>
                    <div class="panel-body">
                        <canvas id="line-chart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">Số lượng người đăng kí trong 7 ngày</div>
                    <div class="panel-body">
                        <canvas id="line-chart-user"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script type="text/javascript">
    window.onload = function () {
        Chart.defaults.global.defaultFontColor = '#000000';
        Chart.defaults.global.defaultFontFamily = 'Arial';
        var lineChart_reg = document.getElementById('line-chart');
        var lineChart_user = document.getElementById('line-chart-user');
        var myChart = new Chart(lineChart_reg, {
            type: 'line',
            data: {
                labels: [<?php echo '\''.$weekday.'\'' ?>],
                datasets: [
                    {
                        label: 'Số lượng tin đăng trong 7 ngày',
                        data: [<?php echo $reg_count?>],
                        backgroundColor: 'rgba(0, 128, 128, 0.3)',
                        borderColor: 'rgba(0, 128, 128, 0.7)',
                        borderWidth: 1
                    }
                ]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                },
            }
        });
        var myChart = new Chart(lineChart_user, {
            type: 'line',
            data: {
                labels: [<?php echo '\''.$userday.'\'' ?>],
                datasets: [
                    {
                        label: 'Số người đăng kí trong 7 ngày',
                        data: [<?php echo $user_count?>],
                        backgroundColor: 'rgba(0, 128, 128, 0.7)',
                        borderColor: 'rgba(0, 128, 128, 1)',
                        borderWidth: 1
                    }
                ]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                },
            }
        });
    };
</script>