$(function () {
    if (!$(".nav_main").length > 0) {
        return;
    }
    $("#ShoveWebControl_VMenu1>li>a").click(function () {
        $(this).addClass("nav_menu1_curr").parent().siblings("li").children("a").removeClass(
            "nav_menu1_curr");
        $(".nav_menu1_curr>ul>li").each(function () {
            var i = $(this).index() + 1;
            m = 90 + i * 90;
            $(this).children("a").siblings().css("top", m + "px")
        });
    });
    $(".nav_main>ul>li>a").removeAttr("href");
    $(".nav_main>ul>li:first>a").attr("href", "/");
    $(".nav_main>ul>li>a").click(function () {
        if ($(this).siblings("ul").css("display") == "block") {
            $(this).siblings("ul").fadeOut();
        } else {
            $(this).siblings("ul").fadeIn();
            $(this).parent().siblings().children("ul").hide();
        }
    })
    $('.xn_mn_3_menu').click(function () {
        $('.xn_mn_3_nav').fadeIn();
        $("body").addClass("bady_over");
    });
    $('.xn_mn_3_close').click(function () {
        $('.xn_mn_3_nav').fadeOut();
        $("body").removeClass("bady_over");
    });
});








$(function () {
    if ($("#xn_mc_about_1_wrap").length > 0) {
        var $ul = $(".xn_mc_about_1_ul");
        var $li = $ul.children("li");
        $li.first().addClass("xn_mc_about_1_curr");
        $li.click(function () {
            var _this = $(this);
            idx = _this.index() + 1;
            _this.addClass("xn_mc_about_1_curr").siblings().removeClass("xn_mc_about_1_curr");
        });
        var url = window.location.href;
        url = url.substring(url.lastIndexOf("/") + 1);
        $li.each(function () {
            var href_url = $(this).find("a").attr("href");
            if (url.indexOf(href_url) != -1) {
                $(this).addClass("xn_mc_about_1_curr").siblings().removeClass("xn_mc_about_1_curr");
            }
        })
    }
});

var _href = window.location.href
$(function () {

    var i = _href.split('?')[1].split('&')[0].split('=')['1'];
    console.log(i);
    if (_href.split('?')[1].split('&')[0].split('=')['1'] == "t2:5:2") {
        $(".xn_mc_about_1_ul>li:nth-child(1)").addClass("xn_mc_about_1_curr");
        $(".xn_mc_about_1_ul>li:nth-child(1)").siblings("li").removeClass("xn_mc_about_1_curr");
    }
    if (_href.split('?')[1].split('&')[0].split('=')['1'] == "t2:4:2") {
        $(".xn_mc_about_1_ul>li:nth-child(2)").addClass("xn_mc_about_1_curr");
        $(".xn_mc_about_1_ul>li:nth-child(2)").siblings("li").removeClass("xn_mc_about_1_curr");
    }


});



function setImagenews1() {
    var img_height = $('.xn_mc_news_1_ul img:eq(0)').height();
    $('.xn_mc_news_1_ul img').each(function () {
        $(this).parent().height(img_height);
    });
    $('.xn_mc_news_1_ul img').unbind('load').bind('load', function () {
        setTimeout(function () {
            var img_height = $('.xn_mc_news_1_ul img:eq(0)').height();
            $('.xn_mc_news_1_ul img').each(function () {
                $(this).parent().height(img_height);
            });
        }, 1000);
    });
}
$(function () {
    if ($("#xn_mc_news_1_wrap").length > 0) {
        setImagenews1();
        $("#xn_mc_news_1_moreBtn").click(function () {
            setTimeout(function () {
                setImagenews1();
            }, 1000);
        });
    }
    $(window).resize(function () {
        setImagenews1();
        $(".xn_mc_news_1_li_i").click(function () {
            $(this).toggle();
        });
    });
    $(".xn_mc_news_1_li_i").click(function () {
        $(this).toggle();
    });
    $("#xn_mc_news_1_moreBtn").click(
        function () {
            $(".xn_mc_news_1_li_i").click(function () {
                $(this).toggle();
            });
        }
    );

});




$(function () {
    $(".xn_mu_1_bottom_bq9").click(function () {
        $(".xn_mu_1_bottom_weixin").fadeIn(500);
    });
    $(".xn_mu_1_bottom_close").click(function () {
        $(".xn_mu_1_bottom_weixin").fadeOut(500);
    });
})