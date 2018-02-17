$.ajaxSetup({
    headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
});
/**
 * Send ajax form registration user
 */
$( document ).ready(function() {
    $(".send-register-form-vacancy").click(
        function(){
            sendFrom('register-form-vacancy', '/registration-resume', '', 'success-send', 'danger-send');
            return false;
        }
    );
});

// Отправка форми AJAX (contacts, forTalent)
function sendFrom(form_class, url, prefix, successAlertId, dangerAlertId) {
    jQuery.ajax({
        url: url,
        type: "POST",
        dataType: "html",
        data: jQuery("." + form_class).serialize(),
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
                $("#" + dangerAlertId).css({'display': 'block'});
            } else {
                $("#" + dangerAlertId).css({'display': 'none'});
                $("#" + successAlertId).css({'display': 'block'});
                if (successAlertId === 'account-alert') {
                    var login = $("input[name='login']").val();
                    var server = $("input[name='server']").val();
                    addAccount(login, server);
                }
                jQuery("#" + form_class)[0].reset();
                deleteErrorResponse($("#" + form_class));
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

function bs_input_file() {
    $(".input-file").before(
        function() {
            if ( ! $(this).prev().hasClass('input-ghost') ) {
                var element = $("<input type='file' class='input-ghost' style='visibility:hidden; height:0'>");
                element.attr("name",$(this).attr("name"));
                element.change(function(){
                    element.next(element).find('input').val((element.val()).split('\\').pop());
                });
                $(this).find("button.btn-choose").click(function(){
                    element.click();
                });
                $(this).find("button.btn-reset").click(function(){
                    element.val(null);
                    $(this).parents(".input-file").find('input').val('');
                });
                $(this).find('input').css("cursor","pointer");
                $(this).find('input').mousedown(function() {
                    $(this).parents('.input-file').prev().click();
                    return false;
                });
                return element;
            }
        }
    );
}
$(function() {
    bs_input_file();
});