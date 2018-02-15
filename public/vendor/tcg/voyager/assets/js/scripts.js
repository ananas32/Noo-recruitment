/*
* jQuery FriendURL plugin 1.7
*
* http://www.bulgaria-web-developers.com/projects/javascript/friendurl/
*
* Copyright (c) 2009-2012 Dimitar Ivanov
*
* Dual licensed under the MIT and GPL licenses:
*   http://www.opensource.org/licenses/mit-license.php
*   http://www.gnu.org/licenses/gpl.html
*
* Bugfixed by: Vitaliy Stepanenko (http://nayjest.ru)
*/
! function(e, t) {
    function n(e) {
        return u = r(a, o, e)
    }

    function r(e, n, r, i) {
        var a = 0,
            o = 0,
            u = "",
            c = "",
            l = 0,
            s = 0,
            h = [].concat(e),
            f = [].concat(n),
            d = r,
            g = f instanceof Array,
            v = d instanceof Array;
        for (d = [].concat(d), i && (this.window[i] = 0), a = 0, l = d.length; l > a; a++)
            if ("" !== d[a])
                for (o = 0, s = h.length; s > o; o++) u = d[a] + "", c = g ? f[o] !== t ? f[o] : "" : f[0], d[a] = u.split(h[o]).join(c), i && d[a] !== u && (this.window[i] += (u.length - d[a].length) / h[o].length);
        return v ? d : d[0]
    }

    function i() {
        this.defaults = {
            divider: "-",
            transliterate: !1
        }
    }
    var a = ["а", "б", "в", "г", "д", "е", "ж", "з", "и", "й", "к", "л", "м", "н", "о", "п", "р", "с", "т", "у", "ф", "х", "ц", "ч", "ш", "щ", "ъ", "ь", "э", "ю", "я", "А", "Б", "В", "Г", "Д", "Е", "Ж", "З", "И", "Й", "К", "Л", "М", "Н", "О", "П", "Р", "С", "Т", "У", "Ф", "Х", "Ц", "Ч", "Ш", "Щ", "Ъ", "Ь", "Э", "Ю", "Я", "Ї", "ї", "І", "і", "Є", "є", "Ы", "ы", "Ё", "ё", "ı", "İ", "ğ", "Ğ", "ü", "Ü", "ş", "Ş", "ö", "Ö", "ç", "Ç", "Á", "á", "Â", "â", "Ã", "ã", "À", "à", "Ç", "ç", "É", "é", "Ê", "ê", "Í", "í", "Ó", "ó", "Ô", "ô", "Õ", "õ", "Ú", "ú"],
        o = ["a", "b", "v", "g", "d", "e", "zh", "z", "i", "y", "k", "l", "m", "n", "o", "p", "r", "s", "t", "u", "f", "h", "ts", "ch", "sh", "sht", "", "", "e", "yu", "ya", "A", "B", "V", "G", "D", "E", "Zh", "Z", "I", "Y", "K", "L", "M", "N", "O", "P", "R", "S", "T", "U", "F", "H", "Ts", "Ch", "Sh", "Sht", "", "", "E", "Yu", "Ya", "I", "i", "I", "i", "Ye", "ye", "I", "y", "Yo", "yo", "i", "I", "g", "G", "u", "U", "s", "S", "o", "O", "c", "C", "A", "a", "A", "a", "A", "a", "A", "a", "C", "c", "E", "e", "E", "e", "I", "i", "O", "o", "O", "o", "O", "o", "U", "u"],
        u = "";
    i.prototype = {
        _initFriendurl: function(t, r) {
            var i = this;
            e(t).keyup(function() {
                r = e.extend(i.defaults, r);
                var t = e(this).val();
                r.transliterate && (t = n(t)), t = t.toLowerCase().replace(/^\s+|\s+$/g, "").replace(/[_|\s]+/g, "-").replace(/[^a-z\u0400-\u04FF0-9-]+/g, "").replace(/[-]+/g, "-").replace(/^-+|-+$/g, "").replace(/[-]+/g, r.divider);
                var a = e("input[name="+ r.name +"]");
                if (a.length > 0) {
                    var o = a.get(0).tagName;
                    switch (o) {
                        case "INPUT":
                            a.val(t);
                            break;
                        default:
                            a.text(t)
                    }
                }
            })
        }
    }, e.friendurl = new i, e.friendurl.version = "1.6", e.fn.friendurl = function(t) {
        return this.each(function() {
            e.friendurl._initFriendurl(this, t)
        })
    }
}(jQuery);

/** Abstract base class for collection plugins v1.0.1.
 Written by Keith Wood (kbwood{at}iinet.com.au) December 2013.
 Licensed under the MIT (http://keith-wood.name/licence.html) license. */
(function(){var j=false;window.JQClass=function(){};JQClass.classes={};JQClass.extend=function extender(f){var g=this.prototype;j=true;var h=new this();j=false;for(var i in f){h[i]=typeof f[i]=='function'&&typeof g[i]=='function'?(function(d,e){return function(){var b=this._super;this._super=function(a){return g[d].apply(this,a||[])};var c=e.apply(this,arguments);this._super=b;return c}})(i,f[i]):f[i]}function JQClass(){if(!j&&this._init){this._init.apply(this,arguments)}}JQClass.prototype=h;JQClass.prototype.constructor=JQClass;JQClass.extend=extender;return JQClass}})();(function($){JQClass.classes.JQPlugin=JQClass.extend({name:'plugin',defaultOptions:{},regionalOptions:{},_getters:[],_getMarker:function(){return'is-'+this.name},_init:function(){$.extend(this.defaultOptions,(this.regionalOptions&&this.regionalOptions[''])||{});var c=camelCase(this.name);$[c]=this;$.fn[c]=function(a){var b=Array.prototype.slice.call(arguments,1);if($[c]._isNotChained(a,b)){return $[c][a].apply($[c],[this[0]].concat(b))}return this.each(function(){if(typeof a==='string'){if(a[0]==='_'||!$[c][a]){throw'Unknown method: '+a;}$[c][a].apply($[c],[this].concat(b))}else{$[c]._attach(this,a)}})}},setDefaults:function(a){$.extend(this.defaultOptions,a||{})},_isNotChained:function(a,b){if(a==='option'&&(b.length===0||(b.length===1&&typeof b[0]==='string'))){return true}return $.inArray(a,this._getters)>-1},_attach:function(a,b){a=$(a);if(a.hasClass(this._getMarker())){return}a.addClass(this._getMarker());b=$.extend({},this.defaultOptions,this._getMetadata(a),b||{});var c=$.extend({name:this.name,elem:a,options:b},this._instSettings(a,b));a.data(this.name,c);this._postAttach(a,c);this.option(a,b)},_instSettings:function(a,b){return{}},_postAttach:function(a,b){},_getMetadata:function(d){try{var f=d.data(this.name.toLowerCase())||'';f=f.replace(/'/g,'"');f=f.replace(/([a-zA-Z0-9]+):/g,function(a,b,i){var c=f.substring(0,i).match(/"/g);return(!c||c.length%2===0?'"'+b+'":':b+':')});f=$.parseJSON('{'+f+'}');for(var g in f){var h=f[g];if(typeof h==='string'&&h.match(/^new Date\((.*)\)$/)){f[g]=eval(h)}}return f}catch(e){return{}}},_getInst:function(a){return $(a).data(this.name)||{}},option:function(a,b,c){a=$(a);var d=a.data(this.name);if(!b||(typeof b==='string'&&c==null)){var e=(d||{}).options;return(e&&b?e[b]:e)}if(!a.hasClass(this._getMarker())){return}var e=b||{};if(typeof b==='string'){e={};e[b]=c}this._optionsChanged(a,d,e);$.extend(d.options,e)},_optionsChanged:function(a,b,c){},destroy:function(a){a=$(a);if(!a.hasClass(this._getMarker())){return}this._preDestroy(a,this._getInst(a));a.removeData(this.name).removeClass(this._getMarker())},_preDestroy:function(a,b){}});function camelCase(c){return c.replace(/-([a-z])/g,function(a,b){return b.toUpperCase()})}$.JQPlugin={createPlugin:function(a,b){if(typeof a==='object'){b=a;a='JQPlugin'}a=camelCase(a);var c=camelCase(b.name);JQClass.classes[c]=JQClass.classes[a].extend(b);new JQClass.classes[c]()}}})(jQuery);

/* http://keith-wood.name/maxlength.html
   Textarea Max Length for jQuery v2.0.1.
   Written by Keith Wood (kwood{at}iinet.com.au) May 2009.
   Licensed under the MIT (http://keith-wood.name/licence.html) license.
   Please attribute the author if you use it. */
(function($){var h='maxlength';$.JQPlugin.createPlugin({name:h,defaultOptions:{max:200,truncate:true,showFeedback:true,feedbackTarget:null,onFull:null},regionalOptions:{'':{feedbackText:'{r} characters remaining ({m} maximum)',overflowText:'{o} characters too many ({m} maximum)'}},_getters:['curLength'],_feedbackClass:h+'-feedback',_fullClass:h+'-full',_overflowClass:h+'-overflow',_disabledClass:h+'-disabled',_instSettings:function(a,b){return{feedbackTarget:$([])}},_postAttach:function(c,d){c.on('keypress.'+d.name,function(a){if(!d.options.truncate){return true}var b=String.fromCharCode(a.charCode==undefined?a.keyCode:a.charCode);return(a.ctrlKey||a.metaKey||b=='\u0000'||$(this).val().length<d.options.max)}).on('keyup.'+d.name+' paste.'+d.name+' cut.'+d.name,function(e){if(e.type==='keyup'){$.maxlength._checkLength(c)}else{setTimeout(function(){$.maxlength._checkLength(c)},1)}})},_optionsChanged:function(a,b,c){$.extend(b.options,c);if(b.feedbackTarget.length>0){if(b.hadFeedbackTarget){b.feedbackTarget.empty().val('').removeClass(this._feedbackClass+' '+this._fullClass+' '+this._overflowClass)}else{b.feedbackTarget.remove()}b.feedbackTarget=$([])}if(b.options.showFeedback){b.hadFeedbackTarget=!!b.options.feedbackTarget;if($.isFunction(b.options.feedbackTarget)){b.feedbackTarget=b.options.feedbackTarget.apply(a[0],[])}else if(b.options.feedbackTarget){b.feedbackTarget=$(b.options.feedbackTarget)}else{b.feedbackTarget=$('<div></div>').insertAfter(a)}b.feedbackTarget.addClass(this._feedbackClass)}a.off('mouseover.'+b.name+' focus.'+b.name+'mouseout.'+b.name+' blur.'+b.name);if(b.options.showFeedback=='active'){a.on('mouseover.'+b.name,function(){b.feedbackTarget.css('visibility','visible')}).on('mouseout.'+b.name,function(){if(!b.focussed){b.feedbackTarget.css('visibility','hidden')}}).on('focus.'+b.name,function(){b.focussed=true;b.feedbackTarget.css('visibility','visible')}).on('blur.'+b.name,function(){b.focussed=false;b.feedbackTarget.css('visibility','hidden')});b.feedbackTarget.css('visibility','hidden')}this._checkLength(a)},curLength:function(a){var b=this._getInst(a);var c=a.val();var d=c.replace(/\r\n/g,'~~').replace(/\n/g,'~~').length;return{used:d,remaining:b.options.max-d}},_checkLength:function(a){var b=this._getInst(a);var c=a.val();var d=c.replace(/\r\n/g,'~~').replace(/\n/g,'~~').length;a.toggleClass(this._fullClass,d>=b.options.max).toggleClass(this._overflowClass,d>b.options.max);if(d>b.options.max&&b.options.truncate){var f=a.val().split(/\r\n|\n/);c='';var i=0;while(c.length<b.options.max&&i<f.length){c+=f[i].substring(0,b.options.max-c.length)+'\r\n';i++}a.val(c.substring(0,b.options.max));a[0].scrollTop=a[0].scrollHeight;d=b.options.max}b.feedbackTarget.toggleClass(this._fullClass,d>=b.options.max).toggleClass(this._overflowClass,d>b.options.max);var g=(d>b.options.max?b.options.overflowText:b.options.feedbackText).replace(/\{c\}/,d).replace(/\{m\}/,b.options.max).replace(/\{r\}/,b.options.max-d).replace(/\{o\}/,d-b.options.max);try{b.feedbackTarget.text(g)}catch(e){}try{b.feedbackTarget.val(g)}catch(e){}if(d>=b.options.max&&$.isFunction(b.options.onFull)){b.options.onFull.apply(a,[d>b.options.max])}},enable:function(a){a=$(a);if(!a.hasClass(this._getMarker())){return}var b=this._getInst(a);a.prop('disabled',false).removeClass(b.name+'-disabled');b.feedbackTarget.removeClass(b.name+'-disabled')},disable:function(a){a=$(a);if(!a.hasClass(this._getMarker())){return}var b=this._getInst(a);a.prop('disabled',true).addClass(b.name+'-disabled');b.feedbackTarget.addClass(b.name+'-disabled')},_preDestroy:function(a,b){if(b.feedbackTarget.length>0){if(b.hadFeedbackTarget){b.feedbackTarget.empty().val('').css('visibility','visible').removeClass(this._feedbackClass+' '+this._fullClass+' '+this._overflowClass)}else{b.feedbackTarget.remove()}}a.removeClass(this._fullClass+' '+this._overflowClass).off('.'+b.name)}})})(jQuery);

/* http://keith-wood.name/maxlength.html
   French initialisation for the jQuery Max Length extension
   Written by Keith Wood (kbwood{at}iinet.com.au) April 2012. */
(function($) { // hide the namespace

    $.maxlength.regionalOptions['fr'] = {
        feedbackText: '{r} осталось из {m}',
        overflowText: '{o} осталось из {m}'
    };

    $.maxlength.setDefaults($.maxlength.regionalOptions['fr']);

})(jQuery);
