<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<html lang="zh-cn" xmlns="http://www.w3.org/1999/xhtml">
<head><meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /><meta name="HandheldFriendly" content="true" /><meta http-equiv="x-rim-auto-match" content="none" /><meta name="format-detection" content="telephone=no" />
    <title>
        艺乡建
    </title><meta name="keywords" content="光合活动,光合北京文化创意股份有限公司"/><meta name="description" content="光合活动,光合北京文化创意股份有限公司"/><meta name="pc-agent" content="url=http://cn.ps-cc.com/NewsSt_ggdt.html" /><meta name="applicable-device" content="mobile"><meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <link id="css__news" rel="stylesheet" type="text/css" href="https://0.rc.xiniu.com/g2/M00/F6/F6/CgAGfFvrosiABY8LAAAl_-7bYgY686.css?d=08202509903" />
    <link id="css__products" rel="stylesheet" type="text/css" href="https://0.rc.xiniu.com/g2/M00/EC/88/CgAGe1vs85KAOuejAAAtVfnVNlc395.css?d=08202509793" />
    <link rel="stylesheet" type="text/css" href="../../css/font.css">
    <script type="text/javascript">var _jtime=new Date();function jqload(){window.jLoad=new Date()-_jtime;}function jqerror(){window.jLoad=-1;}</script>
    <script type="text/javascript" src="https://1.rc.xiniu.com/js/jq/jquery-2.min.js" onload="jqload()" onerror="jqerror()" id="jquery"></script>
    <script type="text/javascript" src="https://1.rc.xiniu.com/js/pb/2/Public.js"></script>
    <script type="text/javascript" src="https://1.rc.xiniu.com/js/pb/flexible.js"></script>

    <style>
        ul li {
            color: rgb(127, 127, 127); font-size: 12px;
            line-height: 2em;
        }
    </style>
</head>
<body class="news_body">
<form name="form1" method="get" action="#" id="form1" NavigateId="2" Page="/m/news.aspx?fid=t2:4:2&amp;TypeId=4">
    <input type="hidden" name="__VIEWSTATE" id="
__VIEWSTATE" value="" />

    @include('layout/header')
    <div id="ea_n"></div>

    <div id="ea_ba">
        <div class="about_banner" id="about_banner"     >
            <div class="about_banner_m">
                <img data-original="/img/Exmple.jpg" alt="" />
            </div>
        </div>
    </div>

    <div id="ea_c">
        <div id="xn_c_products_2_warp" class="xn_c_products_2_warp">
            <div class="xn_c_products_2_text">
                <br>
                @if($projects->count())
                <p class="p3">
                    <span>关于 <span style="font-size: large; font-weight: bolder">"{{ $search_item }}"</span> 的案例检索</span>
                </p>
                <br>
                <div id="xn_mc_news_1_wrap" class="xn_mc_news_1_wrap">
                    <ul id="xn_mc_news_1_ul" class="xn_mc_news_1_ul">
                            @foreach($projects as $item)
                                <li class="xn_mc_news_1_li">
                                    <i class="xn_mc_news_1_li_i"></i>
                                    <a href="{{ route('projects.show', ['id' => $item->id]) }}">
                                        <div class="xn_mc_news_1_img">
                                            <img data-original='{{ config('filesystems.disks.oss.cdnDomain') . '/' . $item->cover }}' />
                                        </div>
                                        <div class="xn_mc_news_1_cont">
                                            <div class="xn_mc_news_1_name">
                                                {{ $item->title }}
                                            </div>
                                            <div class="xn_mc_news_1_intro" >
                                                <span id='xn_mc_news_1_data_ctl05_xn_mc_news_1_introText'>{{ $item->description }}</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                    </ul>
                </div>
                @else
                    抱歉，目前没有相关案例！
                @endif
            </div>
        </div>
    </div>

    @include('layout/footer')

    <div id="ea_sh"></div>
    <div id="ea_mu"></div>

    <input type="hidden" id="pageId" value="113" />
    <script type="text/javascript" src="/js/projects.js" id="js__news"></script>

    <script type='text/javascript'>!function(){var e,f,a=new Date,b=null,c=function(){var a,c,d,e,g,h,i,j;b&&clearTimeout(b),a=document.location.href,c='',c=/\.html|.htm/.test(document.location.href)?document.forms[0].getAttribute('Page'):'',d=window.document.referrer,e='/admin/access/load.ashx?req='+f(a),c&&(e+='&f='+f(c)),g=f(d),e+='&ref='+g+'&sw='+screen.width+'&sh='+screen.height,e+='&cs='+(window.jLoad?window.jLoad:-1),e+='&_t='+Math.random(),h='',i='https:'==document.location.protocol?!0:!1,h=i?'https://':'http://',e+='&ht='+f(h+document.domain),$?$.getScript(e):(j=document.createElement('script'),j.src=e,document.body.appendChild(j))},d=function(){window.acessFinish=new Date-a};window.addEventListener?window.addEventListener('load',d):window.attachEvent&&window.attachEvent('onload',d),b=setTimeout(c,3e3),e=null,f=function(a){var b,c,d,f,g;if(!a)return a;if(!e){for(e={},b=0;10>b;b++)e[String.fromCharCode(97+b)]='0'+b.toString();for(b=10;26>b;b++)e[String.fromCharCode(97+b)]=b.toString()}for(c='',d='',f='',g=a.length,b=0;g>b;b++)d=a.charAt(b),f=e[d],c+=f?'x'+f:d;return encodeURIComponent(c).replace(/%/g,'x50').replace(/\./g,'x51')}}();</script><script type='text/javascript'>!function(){var c,a=document.createElement('script'),b=window.location.protocol.split(':')[0];a.src='/https'===b?'https://zz.bdstatic.com/linksubmit/push.js':'http://push.zhanzhang.baidu.com/push.js',c=document.getElementsByTagName('script')[0],c.parentNode.insertBefore(a,c)}();</script></form>
</body>
</html>
