$(document).ready(function(){
    $('.nav-item.dropdown').on('mouseenter', function() {
        $(this).find('.dropdown-menu.hoverable').stop(true, true).slideDown(300).css({
            'opacity': 1,'box-shadow':'0 0.5rem 1rem rgba(0, 0, 0, 0.15)','border':'none'})
            .css('transform', 'translateY(0)');
    }).on('mouseleave', function() {
        $(this).find('.dropdown-menu.hoverable').stop(true, true).slideUp(300)
        .css('opacity', 0).css('transform', 'translateY(-10px)');
    });
});