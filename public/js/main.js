$(document).ready(function() {
    //$( ".datepicker" ).datepicker({dateFormat:'yy-mm-dd'});
    $( "#form" ).validationEngine();
    
    var options = {
        format: '%A, %d %B, %Y %H:%M:%S' // 12-hour
    }
    $('.jclock').jclock(options);
});