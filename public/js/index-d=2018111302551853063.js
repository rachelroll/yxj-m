/*public*/

/*public*/
/*ea_h*/
/*xn_mn_3_wrap*/
        $(function(){
            if(!$(".nav_main").length > 0){
                return;
            }
            $("#ShoveWebControl_VMenu1>li>a").click(function () {
               $(this).addClass("nav_menu1_curr").parent().siblings("li").children("a").removeClass("nav_menu1_curr");
               $(".nav_menu1_curr>ul>li").each(function () {
               var i=$(this).index()+1;
               m=90+i*90;
                $(this).children("a").siblings().css("top",m+"px")
            });
            });
            $(".nav_main>ul>li>a").removeAttr("href");
            $(".nav_main>ul>li:first>a").attr("href","/");
            $(".nav_main>ul>li>a").click(function(){
                if($(this).siblings("ul").css("display") == "block"){
                    $(this).siblings("ul").fadeOut();
                }else{
                    $(this).siblings("ul").fadeIn();
                    $(this).parent().siblings().children("ul").hide();
                }
            })
            $('.xn_mn_3_menu').click(function(){
                $('.xn_mn_3_nav').fadeIn();
                $("body").addClass("bady_over");
            });
            $('.xn_mn_3_close').click(function(){
                $('.xn_mn_3_nav').fadeOut();
                $("body").removeClass("bady_over");
            });
        });
/*end_xn_mn_3_wrap*/
/*ea_h*/
/*ea_n*/
/*ea_n*/
/*ea_ba*/
/*xn_index_mba_1_wrap*/
    var IsFast=true;
    var isAutoPlay = 0;
    var banner=function(){
    if($("#xn_index_mba_1_wrap").length > 0){
        var $wrap = $("#xn_index_mba_1_wrap");
        var $main = $(".xn_index_mba_1_main");
        var $ul = $(".xn_index_mba_1_ul");
        var $li = $ul.children("li");
        var $lights = $(".xn_index_mba_1_lights");
        var speed =300;
        var $curr_class = "xn_index_mba_1_lightsCurr";
        var timeInterval = 3000;
        $li.css("width",parseInt($main.outerWidth(true)));
        $ul.css("width",$li.length * $li.outerWidth(true));
        $lights.html("");
        $li.each(function(){
            $lights.append("<span></span>");
            $(this).attr("lights",$(this).index());
        });
        var idx;
        var size = $li.size();
        //点击焦点图切换：
        $lights.children().first().addClass($curr_class);
        $lights.children("span").click(function(){
            var index = $(this).index();
            idx = parseInt($ul.children().first().attr("lights"));
            var num = index-idx;
            num = num>0?num:num+size;
            for(var i = 0;i < num ;i++){
                $ul.append($ul.children().first());
            }
            $ul.stop().animate({"left":0},speed);
            idx = $ul.children().first().attr("lights");
            $lights.children().eq(idx).addClass($curr_class).siblings().removeClass($curr_class);
            //$ul.animate({"left":-index*$li.outerWidth(true)},speed);
            //$(this).addClass($curr_class).siblings().removeClass($curr_class);
        });
        //左右切换：
        function nextImg(){
            $ul.stop().animate({left:"-"+$li.outerWidth(true) +"px"},speed,function(){
                $ul.append($ul.children().first());
                $ul.css("left",0);
                idx = $ul.children().first().attr("lights");
                $lights.children().eq(idx).addClass($curr_class).siblings().removeClass($curr_class);
                return idx;
            });
        }
        function prevImg(){
            $ul.css('left',-$li.outerWidth(true));
            $ul.prepend($ul.children().last());
            $ul.stop().animate({"left":0},speed);
            idx = $ul.children().first().attr("lights");
            $lights.children().eq(idx).addClass($curr_class).siblings().removeClass($curr_class);
        }
        $(".xn_index_mba_1_left").click(
              function () {
                  nextImg();
              }
            );
        $(".xn_index_mba_1_right").click(
              function () {
                  nextImg();
              }
            );
        if(IsFast){
            IsFast=false;
            var auto = setInterval(function(){
                if(isAutoPlay){
                    prevImg();
                }
            },timeInterval);
        }
        $ul.mouseover(function(){
            clearInterval(auto);
        });
        $ul.mouseleave(function(){
            IsFast=false;
            auto = setInterval(function(){
            if(isAutoPlay){
                nextImg();
            }
        },timeInterval);
        });
        var dragDistance = 80 ;
        var dragY = 20;
    }
    }
$(function(){
  banner();
  $(window).resize(function(){ banner();})
});
/*end_xn_index_mba_1_wrap*/
/*ea_ba*/
/*ea_c*/
/*xn_c_index_507_wrap*/
$(function(){
    if($("#xn_c_index_507_wrap").length > 0) {
        var isAutoPlay = false;   //是否自动
        var speed = 600;        //速度
        var cul = $(".xn_c_index_507_ul");
        var cli = $(".xn_c_index_507_li");
        var nums = $(".xn_c_index_507_nums");
        var count = cli.length;
        var index = 0;
        var curr_index = 0;
        var pn_index = 0;
        //初始化
        cli.each(function(){
            $(this).attr("mark",$(this).index());
            $(this).addClass("xn_c_index_507_li"+$(this).index());
            //nums.append("<span></span>");
            if($(this).index() == 0){
                $(this).addClass("iscurr");
            }
            if($(this).index() == (count-1)){
                $(this).addClass("islast");
            }
        });
        // nums.find("span:first").addClass("curr");
        $(".xn_c_index_507_curr").text("0"+(index+1));
        $(".xn_c_index_507_count").text("0"+count);
        //获取相关参数
        var cbox_w = $(".xn_c_index_507_cbox").width();
        var iscurr = cul.children(".iscurr");
        var iscurr_w = iscurr.width();
        var iscurr_h = iscurr.height();
        var lfpadding= iscurr.css("padding-left");
        var rtpadding= iscurr.css("padding-right");
        var iscurr_left = parseInt(iscurr.css("left"));
        var cli_w = cli.eq(index+1).width();
        var cli_h = cli.eq(index+1).height();
        var cli_left = parseInt(cli.eq(index+1).css("left"));
        var cli_top = parseInt(cli.eq(index+1).css("top"));
        //左右切换
        function movePrev(){
            curr_index = index;
            index--;
            if(index < 0){
                index = count-1;
            }
            //当前元素
            cli.eq(curr_index).stop().animate({"width":cli_w,"height":cli_h,"left":cli_left,"top":cli_top,"z-index":"24","padding":0},speed).next().css("z-index","23");
            //切换后当前元素
            cli.eq(index).stop().animate({"width":iscurr_w,"height":iscurr_h,"left":iscurr_left,"top":"0px","z-index":"25","paddingLeft":lfpadding,"paddingRight":rtpadding},speed).addClass("iscurr").siblings().removeClass("iscurr");
            //切换后当前元素下一个元素
            cli.eq(index-1).css({"left":"-100%","z-index":"22","padding":0}).stop().animate({"left":"0px","z-index":"23","padding":0},speed);
            //焦点元素切换
            //nums.find("span").eq(index).addClass("curr").siblings().removeClass("curr");
            $(".xn_c_index_507_curr").text("0"+(index+1));
        }
        function moveNext(){
            curr_index = index;
            index++;
            if(index > (count-1)){
                index = 0;
            }
            if(curr_index == 0){
                pn_index = count-1;
            }else{
                pn_index = curr_index-1;
            }
            //当前元素
            if(index == (count-1)){
                cli.eq(0).stop().animate({"left":cli_left,"z-index":"24"},speed);
            }else{
                cli.eq(index+1).stop().animate({"left":cli_left,"z-index":"24"},speed);
            }
            //切换后当前元素
            cli.eq(index).stop().animate({"width":iscurr_w,"height":iscurr_h,"left":iscurr_left,"top":"0px","z-index":"25","paddingLeft":lfpadding,"paddingRight":rtpadding},speed,function(){
                cli.eq(pn_index).css({"left":cbox_w,"z-index":"23"});
            }).addClass("iscurr").siblings().removeClass("iscurr");
            //切换后当前元素下一个元素
            cli.eq(curr_index).stop().animate({"width":cli_w,"height":cli_h,"left":"0px","top":cli_top,"z-index":"23","padding":0},speed);
            //焦点元素切换
            //nums.find("span").eq(index).addClass("curr").siblings().removeClass("curr");
            $(".xn_c_index_507_curr").text("0"+(index+1));
        }
        $(".xn_c_index_507_prev").bind("click",function(){
            movePrev();
        });
        $(".xn_c_index_507_next").bind("click",function(){
            moveNext();
        });
        //是否自动切换
        if(isAutoPlay){
            var isAuto = setInterval(moveNext,3000);
            $(".xn_c_index_507_inner").hover(function(){
                clearInterval(isAuto);
            },function(){
                isAuto = setInterval(moveNext,3000);
            });
        }
    }
});
/*end_xn_c_index_507_wrap*/
/*xn_c_index_268_wrap*/
$(function(){
    var wrap_len = $("#xn_c_index_268_wrap");
    if(wrap_len.length > 0){
        var speed = 1000;                      //滚动速度
        var autoque = 0;                  //是否自动滚动
        var timeInterval = 3000;             //自动滚动速度
        var n = 4;                          //当前显示个数
        var tsp = $(".xn_c_case_55_tname");
        var cbox = $(".xn_c_index_268_cbox");
        var cli = $(".xn_c_index_268_li");
        var tcur = "xn_c_index_268_tcur";       //选项卡当前样式
        var spcur = "xn_c_index_268_spcur";     //内容区当前切换样式
        var cli_w = cli.outerWidth(true);
        var count,size;
        var fst = 0;     //当前点击切换数
        var showcur = 0;     //记录当前显示的盒子是第几个
        var dq_len,dq_cur;   //记录当前盒子中滚动屏数和当前是第几屏
      $(".xn_c_index_268_type>span").eq(0).before($(".xn_c_index_507_topbox>xn_c_case_55_tname"));
        cbox.each(function(index,element){
            count = $(this).find("li").length;
            size = Math.ceil(count/n);
            $(this).find("ul").css("width",n*cli_w*size);
            for(var i=0; i<size; i++){
                $(this).find(".xn_c_index_268_nums").append("<span id="+i+"></span>");
            }
            $(this).find(".xn_c_index_268_nums span").eq(0).addClass(spcur);
        });
        tsp.eq(fst).addClass(tcur);
        cbox.eq(fst).css("display","block").siblings().css("display","none");
        tsp.bind("click",function(){
            showcur = $(this).index();
            $(this).addClass(tcur).siblings().removeClass(tcur);
            cbox.eq(showcur).css("display","block").siblings().css("display","none");
        });
        $(".xn_c_index_268_nums span").bind("click",function(){
            fst = $(this).index();
            $(this).addClass(spcur).siblings().removeClass(spcur);
            $(this).parent().siblings("ul").stop(false,true).animate({"left":-fst*n*cli_w},speed);
        });
        function autoPlay(){
            dq_len = cbox.eq(showcur).find(".xn_c_index_268_nums span").length;
            dq_cur = cbox.eq(showcur).find("."+spcur).index();
            dq_cur = dq_cur+1;
            if(dq_cur < dq_len){
                cbox.eq(showcur).find("ul").stop(false,true).animate({"left":-dq_cur*n*cli_w},speed);
                cbox.eq(showcur).find(".xn_c_index_268_nums span").eq(dq_cur).addClass(spcur).siblings().removeClass(spcur);
            }else{
                dq_cur = 0;
                cbox.eq(showcur).find("ul").stop(false,true).animate({"left":-dq_cur*n*cli_w},speed);
                cbox.eq(showcur).find(".xn_c_index_268_nums span").eq(dq_cur).addClass(spcur).siblings().removeClass(spcur);
            }
        }
        if(autoque){
            var auto = setInterval(autoPlay,timeInterval);
            cbox.hover(function(){
                clearInterval(auto);
            },function(){
                auto = setInterval(autoPlay,timeInterval);
            });
        }
    }
})
$(function(){
	$(".xn_c_index_268_cbox").eq(0).append($("#xn_c_index_268_cbox>ul"));
})
/*end_xn_c_index_268_wrap*/
/*xn_c_index_63_wrap*/
$(document).ready(function(){
    var i=$(".xn_c_index_63_wbox").width();
    $(".xn_c_index_63_list").width(i);
    var boxWidth = $(".xn_c_index_63_wbox").innerWidth();
    var listWidth = $(".xn_c_index_63_list").innerWidth();
    var index = boxWidth / listWidth;
    var indexSlide = Math.ceil($(".xn_c_index_63_list").length / index);
    $(".xn_c_index_63_leftButton").bind("click", function() {
        if($(".xn_c_index_63_wbox").scrollLeft() > "0"){
            $(".xn_c_index_63_wbox").animate({"scrollLeft":$(".xn_c_index_63_wbox").scrollLeft()-boxWidth},"slow");
        }
    });
    $(".xn_c_index_63_rightButton").bind("click",function(){
        if($(".xn_c_index_63_wbox").scrollLeft() < (indexSlide-1)*boxWidth){
            $(".xn_c_index_63_wbox").animate({"scrollLeft":boxWidth+$(".xn_c_index_63_wbox").scrollLeft()},"slow");
        }
    });
});
/*end_xn_c_index_63_wrap*/
/*xn_c_index_303_wrap*/
$(function(){
    if ($("#xn_c_index_303_wrap").length>0) {
        var oTul=$("#xn_c_index_303_tUl");
        var oTul_li=oTul.children("li");
        var oTul_li_curr="xn_c_index_303_tLicurr";
        var oCul=$("#xn_c_index_303_cUl");
        var oCul_li=oCul.children("li");
        var _this=null;
        oCul_li.eq(1).addClass("isfirst1");
        oCul_li.each(function(){
            var ind=$(this).index();
            oTul_li.eq(ind).find(".xn_c_index_303_mark").text("0"+(ind+1));
            if(ind == 0){
                $(this).addClass("iscurr1");
            }
            if(ind == (oCul_li.length-1)){
                $(this).addClass("islast11");
            }
        })
        var i=$(".xn_c_index_303_cUl").width();
        console.log(i);
        var m=i/2;
        console.log(m);
        $(".iscurr1").find(".xn_c_index_303_cIntro").width(i);
        $(".iscurr1").find(".xn_c_index_303_cIntro").css("margin-left","-"+m+"px");
        //oCul_li.hide();
        oTul_li.first().addClass(oTul_li_curr);
        var currL=oCul.children(".iscurr1");
        var firstL=oCul.children(".isfirst1");
        var lastL=oCul.children(".islast111");
        var currW=currL.width();
        var currH=currL.height();
        var currLf=currL.css("left");
        var numW=firstL.width();
        var numH=firstL.height();
        var numLf=firstL.css("left");
        var lastLf=lastL.css("left");
        //oCul_li.first().fadeIn(300);
        var index=0;
        function nexNum(dind){
            var pind=oCul.children(".iscurr1").index();
            index=dind;
            oTul_li.eq(index).addClass(oTul_li_curr).siblings().removeClass(oTul_li_curr);
            oCul_li.eq(index).addClass("iscurr1").siblings().removeClass("iscurr1");
            if(index == 0){
                oCul_li.eq(index).stop().animate({"width":currW,"height":currL,"left":currLf},300);
                oCul_li.eq(index+1).stop().animate({"width":numW,"height":numH,"left":numLf},300);
                oCul_li.eq(index+2).stop().animate({"width":numW,"height":numH,"left":lastLf},300);
            }
            if(index == 1){
                oCul_li.eq(index).stop().animate({"width":currW,"height":currL,"left":currLf},300);
                oCul_li.eq(index+1).stop().animate({"width":numW,"height":numH,"left":lastLf},300);
                oCul_li.eq(0).stop().animate({"width":numW,"height":numH,"left":numLf},300);
            }
            if(index == 2){
                oCul_li.eq(index).stop().animate({"width":currW,"height":currL,"left":currLf},300);
                oCul_li.eq(0).stop().animate({"width":numW,"height":numH,"left":lastLf},300);
                oCul_li.eq(1).stop().animate({"width":numW,"height":numH,"left":numLf},300);
            }
        }
        oTul_li.bind("click",function(){
            var dind=$(this).index()
            nexNum(dind)
        });
    };
})
/*end_xn_c_index_303_wrap*/
/*ea_c*/
/*ea_b*/
/*xn_mu_1_wrap*/
$(function () {
   $(".xn_mu_1_bottom_bq9").click(function(){
    $(".xn_mu_1_bottom_weixin").fadeIn(500);
   });
    $(".xn_mu_1_bottom_close").click(function(){
    $(".xn_mu_1_bottom_weixin").fadeOut(500);
   });
})
/*end_xn_mu_1_wrap*/
/*ea_b*/
/*ea_bg*/
/*ea_bg*/
/*ea_sh*/
/*ea_sh*/
/*ea_mu*/
/*ea_mu*/