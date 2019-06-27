$('.job-filter').on('click', function (eventData) {
    let checkedCategory = $(eventData.target).val();
    let currentFilters = new URLSearchParams(window.location.search);
    let currentCategoryFilters = null;
    if (currentFilters.get('filter-category') === null) {
        currentCategoryFilters = new Array();
    } else {
        currentCategoryFilters = currentFilters.get('filter-category').split(',');
    }
    const checkedPosition = currentCategoryFilters.indexOf(checkedCategory);
    if (checkedPosition > -1) {
        currentCategoryFilters.splice(checkedPosition, 1);
    } else {
        currentCategoryFilters.push(checkedCategory);
    }
    currentFilters.set('filter-category', currentCategoryFilters.join(','));

    window.location.href = window.location.origin + window.location.pathname + '?' + currentFilters.toString();
});

$('.job-filter-location').on('click', function (eventData) {
    let checkedLocation = $(eventData.target).val();
    let currentFilters = new URLSearchParams(window.location.search);
    let currentLocationFilters = null;
    if (currentFilters.get('filter-location') === null) {
        currentLocationFilters = new Array();
    } else {
        currentLocationFilters = currentFilters.get('filter-location').split(',');
    }
    const checkedPosition = currentLocationFilters.indexOf(checkedLocation);
    if (checkedPosition > -1) {
        currentLocationFilters.splice(checkedPosition, 1);
    } else {
        currentLocationFilters.push(checkedLocation);
    }
    currentFilters.set('filter-location', currentLocationFilters.join(','));

    window.location.href = window.location.origin + window.location.pathname + '?' + currentFilters.toString();
});