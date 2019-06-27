@if($listCategories)
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="jp_rightside_job_categories_wrapper">
            <div class="jp_rightside_job_categories_heading">
                <h4>Jobs by Category</h4>
            </div>
            <div class="jp_rightside_job_categories_content">
                <div class="handyman_sec1_wrapper">
                    <div class="content">
                        <div class="box">
                            @foreach($listCategories as $category)
                                <p>
                                    <input @if (in_array($category->id, explode(',',request('filter-category','')))) checked="checked" @endif type="checkbox" class="job-filter" id="category-{{ $category->id }}" name="filter-category[]" value="{{$category->id }}">
                                    <label for="category-{{ $category->id }}">{{ $category->name }} <span>(214)</span></label>
                                </p>
                            @endforeach
                        </div>
                    </div>
                    <ul>
                        <li><i class="fa fa-plus-circle"></i> <a href="#">SHOW MORE</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endif