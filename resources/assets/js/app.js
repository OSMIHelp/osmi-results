window.$ = window.jQuery = require('jquery')
require('bootstrap-sass');

$( document ).ready(function() {
    // console.log($.fn.tooltip.Constructor.VERSION);

    $('a.list-group-item').click( function(e) {
        e.preventDefault();
        
        if ($(this).children('.answer').hasClass('hidden')) {
            $(this).children('.answer').removeClass('hidden').addClass('visible');
        } else {
            $(this).children('.answer').removeClass('visible').addClass('hidden');
        }
    });
});
