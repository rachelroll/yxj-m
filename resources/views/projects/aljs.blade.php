<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<html lang="zh-cn" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /><meta name="HandheldFriendly" content="true" /><meta http-equiv="x-rim-auto-match" content="none" /><meta name="format-detection" content="telephone=no" />
    <title>
        光合活动 - 城市品牌 - 光合北京文化创意股份有限公司
    </title>
    <meta name="applicable-device" content="mobile">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <link id="css__news" rel="stylesheet" type="text/css" href="https://0.rc.xiniu.com/g2/M00/F6/F6/CgAGfFvrosiABY8LAAAl_-7bYgY686.css?d=08202509903" />
    <link id="css__products" rel="stylesheet" type="text/css" href="https://0.rc.xiniu.com/g2/M00/EC/88/CgAGe1vs85KAOuejAAAtVfnVNlc395.css?d=08202509793" />
    <link rel="stylesheet" type="text/css" href="../../css/font.css">

    <link href="/css/reset.css" rel="stylesheet" media="all" />
    <link href="/css/idangerous.swiper.css" rel="stylesheet" media="all" />
    <link href="/css/layout.css" rel="stylesheet" media="all" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/verify.css">
    {{--<script type="text/javascript" src="/js/jquery.min.js"></script>--}}


    <script type="text/javascript">var _jtime=new Date();function jqload(){window.jLoad=new Date()-_jtime;}function jqerror(){window.jLoad=-1;}</script>
    <script type="text/javascript" src="https://1.rc.xiniu.com/js/jq/jquery-2.min.js" onload="jqload()" onerror="jqerror()" id="jquery"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://1.rc.xiniu.com/js/pb/2/Public.js"></script>
    <script type="text/javascript" src="https://1.rc.xiniu.com/js/pb/flexible.js"></script>
    <script type="text/javascript" src="/js/verify.js" ></script>
    <style>
        ul li {
            color: rgb(127, 127, 127); font-size: 12px;
            line-height: 2em;
        }

        .labels a {
            margin: 10px 0 0 10px;
        }
    </style>
</head>
<body class="news_body">
{{--<form name="form1" method="get" action="#" id="form1" NavigateId="2" Page="/m/news.aspx?fid=t2:4:2&amp;TypeId=4">--}}
{{--<input type="hidden" name="__VIEWSTATE" id="--}}
{{--__VIEWSTATE" value="" />--}}

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
    <div class="n_main" >
        <!--加粗的一级标题-->
        <div id="n_content_left_t" class="n_content_left_t">
            <div id="n_content_left_t1" class="n_content_left_t1">
                <span id='n_content_left_t_data'>案例检索</span>
            </div>
            <div class="n_content_left_t2">
                <span id='n_content_left_t_data2'>Example Search</span>
            </div>
        </div>

        <div id="xn_c_products_2_warp" class="xn_c_products_2_warp" style="padding: 20px">
            <div class="" style="margin: 0 auto; width: 100%">
                <form class="form-inline" action="{{ route('projects.search') }}" method="POST">
                    @csrf
                    <input class="form-control col-8" type="search" style="font-size: 12px; margin-right: 10px;" placeholder="Search" aria-label="Search"  name="search_item">
                    <button class="btn-sm btn-secondary col-3" style="font-size: 14px" type="submit">搜索</button>
                </form>
                <div class="labels">
                    <div class="h20"></div>
                    <a href="{{ route('projects.index', ['category_id' => 1]) }}" class="btn btn-outline-secondary btn-sm" style="font-size: 14px">概念规划</a>
                    <a href="{{ route('projects.index', ['category_id' => 2]) }}" class="btn btn-outline-secondary btn-sm" style="font-size: 14px"  >总体规划</a>
                    <a href="{{ route('projects.index', ['category_id' => 3]) }}" class="btn btn-secondary btn-sm" style="font-size: 14px"  >详细规划</a>
                    <a href="{{ route('projects.index', ['category_id' => 21]) }}" class="btn btn-outline-secondary btn-sm" style="font-size: 14px" >资产管理</a>
                    <a href="{{ route('projects.index', ['category_id' => 5]) }}" class="btn btn-secondary btn-sm" style="font-size: 14px" >品牌规划</a>
                    <a href="{{ route('projects.index', ['category_id' => 20]) }}" class="btn btn-outline-secondary btn-sm" style="font-size: 14px">投资开发</a>
                    <a href="{{ route('projects.index', ['category_id' => 6]) }}" class="btn btn-secondary btn-sm" style="font-size: 14px"  >产业振兴</a>
                    <a href="{{ route('projects.index', ['category_id' => 15]) }}" class="btn btn-secondary btn-sm" style="font-size: 14px" >乡建人才</a>
                    <a href="{{ route('projects.index', ['category_id' => 16]) }}" class="btn btn-outline-secondary btn-sm" style="font-size: 14px" >乡建生态</a>
                    <a href="{{ route('projects.index', ['category_id' => 4]) }}" class="btn btn-outline-secondary btn-sm" style="font-size: 14px"  >乡振计划</a>
                    <a href="{{ route('projects.index', ['category_id' => 17]) }}" class="btn btn-outline-secondary btn-sm" style="font-size: 14px" >文化振兴</a>
                    <a href="{{ route('projects.index', ['category_id' => 18]) }}" class="btn btn-secondary btn-sm" style="font-size: 14px" >乡村经营</a>
                    <a href="{{ route('projects.index', ['category_id' => 19]) }}" class="btn btn-secondary btn-sm" style="font-size: 14px" >产业植入</a>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
@include('layout/footer')

<div id="ea_sh"></div>
<div id="ea_mu"></div>

<input type="hidden" id="pageId" value="113" />
<script type="text/javascript" src="/js/nav.js" id="js__news"></script>
{{--<script type="text/javascript" src="https://0.rc.xiniu.com/g2/M00/02/72/CgAGe1wjF9eAejYeAABCcl7PcJM7884.js?d=28164619591" id="js__index"></script>--}}

{{--<script type="text/javascript">--}}
    {{--var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");--}}
    {{--document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F8f52314de540d0d7003cbff49f0a0a9c' type='text/javascript'%3E%3C/script%3E"));--}}
{{--</script>--}}

{{--<script language="javascript" type="text/javascript" src="http://js.users.51.la/5739396.js"></script>--}}
{{--<noscript>--}}
    {{--<a href="http://www.51.la/?5739396" target="_blank">--}}
        {{--<img alt="&#x6211;&#x8981;&#x5566;&#x514D;&#x8D39;&#x7EDF;&#x8BA1;" src="http://img.users.51.la/5739396.asp" style="border: none" /></a>--}}
{{--</noscript>--}}
{{--<script type="text/javascript" src="https://0.rc.xiniu.com/g2/M00/02/72/CgAGe1wjF9eAejYeAABCcl7PcJM7884.js?d=28164619591" id="js__index"></script>--}}

<script type='text/javascript'>!function(){var e,f,a=new Date,b=null,c=function(){var a,c,d,e,g,h,i,j;b&&clearTimeout(b),a=document.location.href,c='',c=/\.html|.htm/.test(document.location.href)?document.forms[0].getAttribute('Page'):'',d=window.document.referrer,e='/admin/access/load.ashx?req='+f(a),c&&(e+='&f='+f(c)),g=f(d),e+='&ref='+g+'&sw='+screen.width+'&sh='+screen.height,e+='&cs='+(window.jLoad?window.jLoad:-1),e+='&_t='+Math.random(),h='',i='https:'==document.location.protocol?!0:!1,h=i?'https://':'http://',e+='&ht='+f(h+document.domain),$?$.getScript(e):(j=document.createElement('script'),j.src=e,document.body.appendChild(j))},d=function(){window.acessFinish=new Date-a};window.addEventListener?window.addEventListener('load',d):window.attachEvent&&window.attachEvent('onload',d),b=setTimeout(c,3e3),e=null,f=function(a){var b,c,d,f,g;if(!a)return a;if(!e){for(e={},b=0;10>b;b++)e[String.fromCharCode(97+b)]='0'+b.toString();for(b=10;26>b;b++)e[String.fromCharCode(97+b)]=b.toString()}for(c='',d='',f='',g=a.length,b=0;g>b;b++)d=a.charAt(b),f=e[d],c+=f?'x'+f:d;return encodeURIComponent(c).replace(/%/g,'x50').replace(/\./g,'x51')}}();</script><script type='text/javascript'>!function(){var c,a=document.createElement('script'),b=window.location.protocol.split(':')[0];a.src='/https'===b?'https://zz.bdstatic.com/linksubmit/push.js':'http://push.zhanzhang.baidu.com/push.js',c=document.getElementsByTagName('script')[0],c.parentNode.insertBefore(a,c)}();</script>
{{--</form>--}}
</body>
</html>
