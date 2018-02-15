//TinyMCE settings
var editor_config = {
    path_absolute : "/",
    selector: "textarea.richTextBox",
    language: 'ru',
    height : "300",
    autosave_interval: "10s",
    browser_spellcheck: true,
    contextmenu: false,
    plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime nonbreaking save table directionality",
        "emoticons template paste textcolor colorpicker textpattern youtube media autosave"
    ],
    toolbar: "insertfile undo redo | styleselect removeformat | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link unlink | image youtube | media",
    relative_urls: false,
    rel_list: [
        {title: '---', value: ''},
        {title: 'nofollow', value: 'nofollow'}
    ],
    file_browser_callback : function(field_name, url, type, win) {
        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
        var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

        var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;

        if (type == 'image') {
            cmsURL = cmsURL + "&type=Images";
        } else {
            cmsURL = cmsURL + "&type=Files";
        }

        tinyMCE.activeEditor.windowManager.open({
            file : cmsURL,
            title : 'Filemanager',
            width : x * 0.8,
            height : y * 0.8,
            resizable : "yes",
            close_previous : "no"
        });
    },
    init_instance_callback: function (editor) {
        editor.on('dblClick', function (e) {
            if (e.target.nodeName === 'IMG') {
                tinyMCE.activeEditor.execCommand('mceImage');
            }
        });
    }
};

tinymce.init(editor_config);
//end TinyMCE settings

//friendurl
if ($('input[name=slug]').length) {
    var pagesWithFriendurl = ['articles', 'tags', 'specials'];
    var page = window.location.pathname.split('/')[2];
    if (pagesWithFriendurl.indexOf(page) > -1) {
        if ($('input[name=active]').is(":checked")) {
            $('input[name=slug]').attr('readonly', 'readonly');
        } else {
            $('input[name=title]').friendurl({name : 'slug', transliterate: true});
        }
    }
}
//end friendurl

//maxlength
var details;
var inputs = $("form.form-edit-add").find(':text, textarea');
var validation;
var maxlength;
if (inputs.length) {
    inputs.each(function(key, input){
        details = $(input).data('details');
        if (details != null) {
            if (details.validation != null) {
                validation = details.validation;
                if (validation.rule.split('max:')[1] != null) {
                    maxlength = validation.rule.split('max:')[1].split('|')[0];
                    $(input).maxlength({max: maxlength});
                }
            }
        }
    });
}
//end maxlength
