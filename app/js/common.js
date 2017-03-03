$(function() {
    $(document).on('click', function(e){
        var target = e.target;
        var searchField = $('#search-field');
        if(target.className == 'icon-search') {
            searchField.slideDown();
            searchField.find('input').focus();
        } else {
            searchField.slideUp();
        }

    });
});