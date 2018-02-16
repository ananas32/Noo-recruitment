$.ajaxSetup({
    headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
});
/**
 * Send ajax form registration user
 */
$( document ).ready(function() {
    $(".send-register-form-vacancy").click(
        function(){
            sendFrom('register-form-vacancy', '/registration-vacancy', '', 'success-send');
            return false;
        }
    );
});

// Отправка форми AJAX (contacts, forTalent)
function sendFrom(form_id, url, prefix, alertId) {
    jQuery.ajax({
        url: url,
        type: "POST",
        dataType: "html",
        data: jQuery("." + form_id).serialize(),
        success: function (response) {
            console.log(response);
            var res = JSON.parse(response);
            if (is_object(res.response)) {
                var key, obj = res.response;
                for (key in obj) {
                    if(obj[key]){
                        var block = $('#'+prefix+key);
                        block.parent().find('.error').text(obj[key]).show();
                        var thisClass = block.attr('class');
                        block.attr('class', function () {
                            return thisClass + ' input-error';
                        })
                    }
                }
            } else {
                console.log(url);
                $("#" + alertId).css({'display': 'block'});
                if (alertId === 'account-alert') {
                    var login = $("input[name='login']").val();
                    var server = $("input[name='server']").val();
                    addAccount(login, server);
                }
                jQuery("#" + form_id)[0].reset();
                deleteErrorResponse($("#" + form_id));
            }
        },
        error: function (response) {
            alert('Форма не отправлена так как ошибка на сервере');
        }
    });
}

$('form input[type="text"], input[type="password"], input[type="email"], textarea[name="message"]').on('click', function () {
    deleteError($(this));
});
function deleteError(form) {
    form.parent().find('.error').text('').hide();
    form.removeClass("input-error");
}

// is object?
function is_object(mixed_var){
    if(mixed_var instanceof Array) {
        return false;
    } else {
        return (mixed_var !== null) && (typeof( mixed_var ) == 'object');
    }
}