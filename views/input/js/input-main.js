$(document).ready( function() {
    $("#profile").on("click", function() {
        
        var start_link = $(this).attr('href'),
            input_value = $("#client_id").val()
            
        $.isNumeric(input_value)
            ? $(this).attr('href', start_link + input_value)
            : $(this).attr('href', "#")
    })
})