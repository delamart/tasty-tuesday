
$(document).ready(function(){
    
    $('.lightbox').click(function(e) {
        var el = $(this);
        var id = el.attr('data-target');
        $('#' + id).lightbox_me({centered: true});        
        e.preventDefault();
    }).css('cursor', 'pointer');    
    
    $('.datepicker').each(function() {
        var el = $(this);
        var max = el.attr('data-max');
        var min = el.attr('data-min');
        var opts = {inline: true, dateFormat: 'dd-mm-yy'};
        if(max) { opts['maxDate'] = max; }
        if(min) { opts['minDate'] = min; }
        el.datepicker(opts);
    });
    
});