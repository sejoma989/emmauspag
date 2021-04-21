jQuery(document).ready(function ($) {
    $("#Fbuscar").change(function(){
        jQuery.ajax({
            type: "post",
            url: ajax_var.url,
            data: "action=" + ajax_var.action + "&nonce=" + ajax_var.nonce,
            success: function(result){
                $('#my-events-list').html(result);
            }
        });
    });
});
