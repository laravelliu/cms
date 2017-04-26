/**
 * Created by lfs on 2017/4/26.
 */

var lfs = function () {
    var op = {};
    var theRequest = {};

    var getRequired = function () {
        var url = location.search; //获取url中"?"符后的字串

        if (url.indexOf("?") != -1) {
            var str = url.substr(1);
            var strs = str.split("&");

            for(var i = 0; i < strs.length; i ++) {
                theRequest[strs[i].split("=")[0]]=unescape(strs[i].split("=")[1]);
            }
        }

        return theRequest;
    };
    
    var callBack = function (fn,data,error) {
        if (null !== error){
            console.log('error: '+error);
            return false;
        }

        if(typeof fn !== 'function'){
            console.log('error:' + fn + ' not a function');
            return false;
        }

        fn(data);
    };

    var initValue = function (option) {
        for(var wp in option){
            op[wp] = option[wp];
        }

        toastr.options = {
            "closeButton": true,
            "debug": false,
            "progressBar": true,
            "preventDuplicates": true,
            "positionClass": "toast-top-right",
            "onclick": null,
            "showDuration": "400",
            "hideDuration": "100",
            "timeOut": "5000",
            "extendedTimeOut": "400",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };

    };

    var tip = function (message,title,type) {
        console.log(type);

        toastr[type](message,title);
    };
    
    return {
        init : function (option) {
            initValue(option);
        },
        //获取url链接
        getRequest : function () {
            if(theRequest.length == 0){
                getRequired();
            }

            return theRequest;
        },
        //执行callback函数
        doCallBack : function (fn,data,error) {
            callBack(fn,data,error);
        },

        //设置提示
        showTip :function (message,title,type) {
            tip(message,title,type);
        },

        successTip :function (message,title) {
            tip(message,title,'success');
        },
        infoTip :function (message,title) {
            tip(message,title,'info');
        },
        waningTip :function (message,title) {
            tip(message,title,'warning');
        },
        errorTip :function (message,title) {
            tip(message,title,'error');
        }
    }
}();

$(document).ready(function () {
    lfs.init();
});