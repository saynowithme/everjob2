@if(isset($listJobs) && sizeof($listJobs) > 0)
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="tab-content">
        <div id="grid" class="tab-pane fade in active">
            <div class="row">
            @foreach($listJobs as $job)
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                        <div class="jp_job_post_main_wrapper jp_job_post_grid_main_wrapper">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="jp_job_post_side_img">
                                        <a href="{{route('job1',$job->RecID)}}"> <img src="{{asset('images/content/job_post_img1.jpg')}}" alt="post_img"/> </a>
                                    </div>
                                    <div class="jp_job_post_right_cont jp_job_post_grid_right_cont">
                                        <h4>{{$job->JobName}} ({{$job->Experience}} Exp.)</h4>
                                        <p>{{$job->CompanyName}}</p>
                                        <ul>
                                            <li><i class="fa fa-cc-paypal"></i>&nbsp; {{$job->LevelGra}}$ P.A.</li>
                                            <li><i class="fa fa-map-marker"></i>&nbsp; {{$job->CompanyAdd}}</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="jp_job_post_right_btn_wrapper jp_job_post_grid_right_btn_wrapper">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#">Part Time</a></li>
                                        <li><a href="{{route('job',$job->id)}}">Apply</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="jp_job_post_keyword_wrapper">
                            <ul>
                                <li><i class="fa fa-tags"></i>Keywords :</li>
                                <li><a href="#">ui designer,</a></li>
                                <li><a href="#">developer,</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach    
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                    <div class="pager_wrapper gc_blog_pagination">
                        <ul class="pagination">
                            <li><a href="#">Priv.</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li class="hidden-xs"><a href="#">4</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@else
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="tab-content">
        <div id="grid" class="tab-pane fade in active">
            <div class="row">
                NOT FOUND
            </div>
        </div>
    </div>
</div>
@endif