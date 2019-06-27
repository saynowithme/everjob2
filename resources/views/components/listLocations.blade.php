@if ($listLocations)
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="jp_rightside_job_categories_wrapper jp_job_location_wrapper">
        <div class="jp_rightside_job_categories_heading">
            <h4>Jobs by Location</h4>
        </div>
        <div class="jp_rightside_job_categories_content">
            <div class="handyman_sec1_wrapper">
                <div class="content">
                    <div class="box">
                        @foreach($listLocations as $location)
                            <p>
                                <input @if (in_array($location->city, explode(',',request('filter-location','')))) checked="checked" @endif type="checkbox" class="job-filter-location" id="location-{{ Str::kebab($location->city) }}" name="filter-city[]" value="{{$location->city }}">
                                <label for="location-{{ Str::kebab($location->city) }}">{{ $location->city }}</label>
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