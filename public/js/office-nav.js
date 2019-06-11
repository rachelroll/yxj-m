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
    if ($('#xn_mc_casev_4_wrap').length > 0) {
        // function setImagenews1(){
        //     var img_height=$('#xn_mc_casev_4_srollbox img:eq(0)').height();
        //     $('#xn_mc_casev_4_srollbox li img').each(function(){
        //         $(this).parent().height(img_height);
        //     });
        //     $('#xn_mc_casev_4_srollbox img').unbind('load').bind('load',function(){
        //         setTimeout(function() {
        //             var img_height=$('.xn_mc_casev_4_bigimg img:eq(0)').height();
        //             $('.xn_mc_casev_4_bigimg img').each(function(){
        //                $(this).parent().height(img_height);
        //                $(this).parent().parent().height(img_height);
        //             });
        //         }, 1000);
        //     });
        // }
        // $(function(){
        //     if($("#xn_mc_casev_4_wrap").length > 0){
        //         setImagenews1();
        //     }
        // $(window).resize(function(){ setImagenews1();})
        // });
        //定义每个关键部分的盒子，使用只需要修改此处ID号
        var oBigImg = $("#xn_mc_casev_4_bigimg"); //大图外层的盒子ID命名
        var oBtnL = $("#xn_mc_casev_4_btnleft"); //上按钮命名
        var oBtnR = $("#xn_mc_casev_4_btnright"); //下按钮命名
        var oSroll = $("#xn_mc_casev_4_srollbox"); //小图外层盒子名，也是执行滚动的盒子
        var timer = null,
            speed = 500; //大图切换的速度
        var iLiW = oSroll.children("li").outerWidth(true);
        var iliN = oSroll.children("li").length;
        //oSroll.css('width',iLiW*iliN + 'px');
        oSroll.children("li:eq(0)").addClass("xn_mc_casev_4_curr"); //默认为第一个显示的小图添加焦点样式
        //点击大图切换小图
        oSroll.children("li").bind('click', function () {
            oBigImg.css('display', 'none');
            oSroll.children("li").removeClass("xn_mc_casev_4_curr");
            oBigImg.html($(this).html()).fadeIn(speed);
            $(this).addClass("xn_mc_casev_4_curr");
        });
        //小图滚动，执行切换大图的动画
        function showImg() {
            oBigImg.css('display', 'none');
            oSroll.children("li").removeClass("xn_mc_casev_4_curr");
            oBigImg.html(oSroll.children("li:eq(0)").html()).fadeIn(speed);
            oSroll.children("li:eq(0)").addClass("xn_mc_casev_4_curr");
        }
        //向上滚动方法
        function srollL() {
            oSroll.stop().animate({
                "left": -iLiW + "px"
            }, 'slow', function () {
                oSroll.append(oSroll.children("li:eq(0)"));
                oSroll.css("left", "0");
                showImg();
                //clearInterval()
            });
        }
        //向下滚动方法
        function srollR() {
            oSroll.css('left', -iLiW);
            oSroll.prepend(oSroll.children("li:last"));
            oSroll.stop().animate({
                "left": 0
            }, 'slow', function () {
                showImg();
            });
        }
        //按钮点击事件
        oBtnL.bind('click', function () {
            srollL()
        });
        oBtnR.bind('click', function () {
            srollR()
        });
        //自动滚动定时器
        //timer=setInterval( srollL(),speed )
    }
});




$(function () {
    $(".xn_mu_1_bottom_bq9").click(function () {
        $(".xn_mu_1_bottom_weixin").fadeIn(500);
    });
    $(".xn_mu_1_bottom_close").click(function () {
        $(".xn_mu_1_bottom_weixin").fadeOut(500);
    });
})