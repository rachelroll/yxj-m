<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<html lang="zh-cn" xmlns="http://www.w3.org/1999/xhtml">
<head><meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /><meta name="HandheldFriendly" content="true" /><meta http-equiv="x-rim-auto-match" content="none" /><meta name="format-detection" content="telephone=no" />
    <title>
        艺乡建年鉴
    </title>
    <meta name="applicable-device" content="mobile"><meta content="text/html; charset=utf-8" http-equiv="Content-Type" /><link id="css__down" rel="stylesheet" type="text/css" href="https://0.rc.xiniu.com/g2/M00/F6/F6/CgAGfFvroseAXykYAAAqq6mR0eA919.css?d=08202511058" />

    <script type="text/javascript">var _jtime=new Date();function jqload(){window.jLoad=new Date()-_jtime;}function jqerror(){window.jLoad=-1;}</script>
    <script type="text/javascript" src="https://1.rc.xiniu.com/js/jq/jquery-2.min.js" onload="jqload()" onerror="jqerror()" id="jquery"></script>
    <script type="text/javascript" src="https://1.rc.xiniu.com/js/pb/2/Public.js"></script>
    <script type="text/javascript" src="https://1.rc.xiniu.com/js/pb/flexible.js"></script>

    <style>
        .xn_mc_about_1_li {
            float: left;line-height: 1rem;width: 20%;
        }
    </style>
</head>
<body class="down_body">
    @include('layout/header')
    <div id="ea_ba">
        <div class="about_banner" id="about_banner"     >
            <div class="about_banner_m">
                <img  data-original="/img/Research.jpg" alt="" />
            </div>
        </div>
    </div>

    <div id="ea_c">
        <div id="n_content_left_t" class="n_content_left_t">
            <span id="n_content_left_t1" class="n_content_left_t1">
                <span id='ShoveWebControl_Text1'>艺乡建年鉴</span>
            </span><span class="n_content_left_t2">
                <span id='ShoveWebControl_Text2'>YXJ YEARBOOKS</span>
            </span>
        </div>

        <div id="xn_mc_about_1_wrap" class="xn_mc_about_1_wrap" >
            <ul class="xn_mc_about_1_ul">
                <li class="xn_mc_about_1_li" style="width: 20%">
                    <a href="{{ route('aboutUs') }}">
                        关于我们
                    </a>
                </li>
                <li class="xn_mc_about_1_li">
                    <a href="{{ route('researchTeam') }}">
                        研究团队
                    </a>
                </li>
                <li class="xn_mc_about_1_li">
                    <a href="{{ route('researchContent') }}">
                        研究内容
                    </a>
                </li>
                <li class="xn_mc_about_1_li">
                    <a href="{{ route('researchActivity') }}">
                        社会活动
                    </a>
                </li>
                <li class="xn_mc_about_1_li">
                    <a href="{{ route('researchYearbook') }}">
                        年鉴
                    </a>
                </li>
            </ul>
        </div>

        <div id="xn_mc_down_1_wrap" class="xn_mc_down_1_wrap">
            <ul id="xn_mc_down_1_ul" class="xn_mc_down_1_ul">
                @if($books)
                    @foreach($books as $book)
                <li class="xn_mc_down_1_li">
                    <div class="xn_mc_down_1_li_cont">
                        <a href='{{ config('filesystems.disks.oss.cdnDomain') . '/' . $book->content }}'>
                            <div class="xn_mc_down_1_img">
                                <img  data-original='{{ config('filesystems.disks.oss.cdnDomain') . '/' . $book->cover }}'/>
                                <div class="xn_mc_down_1_i"></div>
                            </div></a>
                        <div class="xn_mc_down_1_name">
                            {{ $book->title }}
                        </div>
                        <div class="xn_mc_down_1_down">
                            <a href='{{ config('filesystems.disks.oss.cdnDomain') . '/' . $book->content }}'>下载</a>
                        </div>
                    </div>
                </li>
                    @endforeach
                    @endif
            </ul>
            <div class="xn_mc_down_1_more">
            </div>
        </div>
    </div>

    <br>
    <br>
    @include('layout/footer')

    <div id="ea_sh"></div>
    <div id="ea_mu"></div>

    <script type="text/javascript" src="https://0.rc.xiniu.com/g2/M00/E8/C2/CgAGfFvGvjuAG_qoAAAJfVQ1EQk4601.js?d=08202511074" id="js__down"></script>

    <script type='text/javascript'>!function(){var e,f,a=new Date,b=null,c=function(){var a,c,d,e,g,h,i,j;b&&clearTimeout(b),a=document.location.href,c='',c=/\.html|.htm/.test(document.location.href)?document.forms[0].getAttribute('Page'):'',d=window.document.referrer,e='/admin/access/load.ashx?req='+f(a),c&&(e+='&f='+f(c)),g=f(d),e+='&ref='+g+'&sw='+screen.width+'&sh='+screen.height,e+='&cs='+(window.jLoad?window.jLoad:-1),e+='&_t='+Math.random(),h='',i='https:'==document.location.protocol?!0:!1,h=i?'https://':'http://',e+='&ht='+f(h+document.domain),$?$.getScript(e):(j=document.createElement('script'),j.src=e,document.body.appendChild(j))},d=function(){window.acessFinish=new Date-a};window.addEventListener?window.addEventListener('load',d):window.attachEvent&&window.attachEvent('onload',d),b=setTimeout(c,3e3),e=null,f=function(a){var b,c,d,f,g;if(!a)return a;if(!e){for(e={},b=0;10>b;b++)e[String.fromCharCode(97+b)]='0'+b.toString();for(b=10;26>b;b++)e[String.fromCharCode(97+b)]=b.toString()}for(c='',d='',f='',g=a.length,b=0;g>b;b++)d=a.charAt(b),f=e[d],c+=f?'x'+f:d;return encodeURIComponent(c).replace(/%/g,'x50').replace(/\./g,'x51')}}();</script><script type='text/javascript'>!function(){var c,a=document.createElement('script'),b=window.location.protocol.split(':')[0];a.src='/https'===b?'https://zz.bdstatic.com/linksubmit/push.js':'http://push.zhanzhang.baidu.com/push.js',c=document.getElementsByTagName('script')[0],c.parentNode.insertBefore(a,c)}();</script></form>
</body>
</html>
