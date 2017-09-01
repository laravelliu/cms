var DocMaster = {
    treeMenu: function() {
        $(".sidebar-nav > li > a").on('click', function(e) {
            $(this).siblings("ul").slideToggle();
            e.preventDefault();
        });
    },
    sideToggle: function() {
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("active");
        });
    },
    scrollToElement: function() {
        //jquery 1.9版本之后为了安全性加入了$.parseHTML，必须将script中的html内容parseHTML转换后使用
        $($.parseHTML('.sidebar-nav li a[href*=#]:not([href=#])')).click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    }
};
