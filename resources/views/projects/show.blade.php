<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<html lang="zh-cn" xmlns="http://www.w3.org/1999/xhtml">
<head><meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /><meta name="HandheldFriendly" content="true" /><meta http-equiv="x-rim-auto-match" content="none" /><meta name="format-detection" content="telephone=no" /><title>
        光合活动 | 一根绳子的较量 - 光合活动 - 光合北京文化创意股份有限公司
    </title><meta name="keywords" content="光合活动 | 一根绳子的较量,光合北京文化创意股份有限公司"/><meta name="description" content="拔河，是一场力量之间的对抗，也是考验团结的试金石；拔河，拔的是一种默契，拔的是一种潜力。为了丰富员工的业余文化生活，拉近同事间的距离，增强团队协作精神，塑造良好的企业文化，9月15日光合文化产业集团组织..."/><meta name="pc-agent" content="url=http://cn.ps-cc.com/NewsStd_386.html" /><meta name="applicable-device" content="mobile"><meta content="text/html; charset=utf-8" http-equiv="Content-Type" /><link id="css__news_view" rel="stylesheet" type="text/css" href="https://0.rc.xiniu.com/g2/M00/F6/F6/CgAGfFvrosiAGX38AAAt9fCndEM950.css?d=08202509777" /><link rel="bookmark" href="../Images/logo.ico" /><link rel="shortcut icon" href="../Images/logo.ico" />

    <script type="text/javascript">var _jtime=new Date();function jqload(){window.jLoad=new Date()-_jtime;}function jqerror(){window.jLoad=-1;}</script>
    <script type="text/javascript" src="https://1.rc.xiniu.com/js/jq/jquery-2.min.js" onload="jqload()" onerror="jqerror()" id="jquery"></script>
    <script type="text/javascript" src="https://1.rc.xiniu.com/js/pb/2/Public.js"></script>
    <script type="text/javascript" src="https://1.rc.xiniu.com/js/pb/flexible.js"></script>
</head>
<body class="news_view_body">
<form name="form1" method="get" action="#" id="form1" NavigateId="2" Page="/m/news_view.aspx?Fid=t2:4:2&amp;Id=386&amp;TypeId=4">
    <input type="hidden" name="__VIEWSTATE" id="
__VIEWSTATE" value="" />

    @include('layout/header')

    <div id="ea_n"></div>
    <div id="ea_ba">
        <div class="about_banner" id="about_banner"     >
            <div class="about_banner_m">
                <img  data-original="/img/Exmple.jpg" alt="" />
            </div>
        </div>
    </div>

    <div id="ea_c">
        <div id="xn_mc_casev_1_wrap" class="xn_mc_casev_1_wrap"     >
            <div class="xn_mc_casev_1_box">
                <div class="xn_mc_casev_1_title">
                    <span id='xn_mc_casev_1_Text'>{{ $project->title }}</span>
                </div>
                <div class="xn_mc_casev_1_time">
                    <span id='xn_mc_newsv_1_Text3'>{{ $project->time }}</span>
                </div>
            </div>
        </div>

        <div id="xn_mc_casev_5_wrap" class="xn_mc_casev_5_wrap"     >
            <div class="xn_mc_casev_5_inner">
                <div class="xn_mc_casev_5_name">
                    <a target="_blank" href="{{ route('projects.index', ['category_id' => $project->category]) }}"> <&nbsp;&nbsp;&nbsp; 返回列表</a>
                </div>
            </div>

            <div class="xn_mc_casev_5_contone">
                <span id='xn_mc_casev_1_Text41'>
                    {!! $project->content !!}
                </span>
            </div>
        </div>

        {{--<div id="xn_mc_casev_2_wrap" class="xn_mc_casev_2_wrap"     >--}}
        {{--<div id="EIMS_C_3_1_ShowInfo"></div>--}}
        {{--<div id="EIMS_C_3_1_box_div">--}}
        {{--<span id="EIMS_C_3_1_Upli" class="EIMS_C_3_1_page">上一篇：无</span><span id="EIMS_C_3_1_Downli" class="EIMS_C_3_1_page">下一篇：无</span>--}}
        {{--</div>--}}
        {{--</div>--}}

        <div id="xn_h_27_wrap" class="xn_h_27_wrap"     >
            <div class="xn_h_27_mswenzi">
                <span name="_xn_h_27_mswenzi|">相关内容</span>
            </div>
        </div>

        <div id="xn_mc_news_1ishot_wrap" class="xn_mc_news_1ishot_wrap"     >
            <ul id="xn_mc_news_1ishot_ul" class="xn_mc_news_1ishot_ul">
                @foreach($lists as $item)
                    <li class="xn_mc_news_1ishot_li">
                        <a href="{{ route('news.show', ['id' => $item->id]) }}">
                            <div class="xn_mc_news_1ishot_img">
                                <img  data-original='{{ config('filesystems.disks.oss.cdnDomain') . '/' . $item->cover }}' />
                            </div>
                            <div class="xn_mc_news_1ishot_cont">
                                <div class="xn_mc_news_1ishot_name">
                                    {{ $item->title }}
                                </div>
                                <div class="xn_mc_news_1ishot_intro" >
                                <span id='xn_mc_news_1ishot_data_ctl00_xn_mc_news_1ishot_introText'>
                                    {{ $item->description }}
                                </span>
                                </div>
                                <div class="xn_mc_news_1ishot_more"></div>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    @include('layout/footer')

    <div id="ea_sh"></div>
    <div id="ea_mu"></div>

    <input type="hidden" id="pageId" value="114" />
    <script type="text/javascript" src="https://0.rc.xiniu.com/g2/M00/E8/C2/CgAGfFvGvjqAMd6MAAAGYv8Ds0o9869.js?d=08202509793" id="js__news_view"></script>

    <script type='text/javascript'>!function(){var e,f,a=new Date,b=null,c=function(){var a,c,d,e,g,h,i,j;b&&clearTimeout(b),a=document.location.href,c='',c=/\.html|.htm/.test(document.location.href)?document.forms[0].getAttribute('Page'):'',d=window.document.referrer,e='/admin/access/load.ashx?req='+f(a),c&&(e+='&f='+f(c)),g=f(d),e+='&ref='+g+'&sw='+screen.width+'&sh='+screen.height,e+='&cs='+(window.jLoad?window.jLoad:-1),e+='&_t='+Math.random(),h='',i='https:'==document.location.protocol?!0:!1,h=i?'https://':'http://',e+='&ht='+f(h+document.domain),$?$.getScript(e):(j=document.createElement('script'),j.src=e,document.body.appendChild(j))},d=function(){window.acessFinish=new Date-a};window.addEventListener?window.addEventListener('load',d):window.attachEvent&&window.attachEvent('onload',d),b=setTimeout(c,3e3),e=null,f=function(a){var b,c,d,f,g;if(!a)return a;if(!e){for(e={},b=0;10>b;b++)e[String.fromCharCode(97+b)]='0'+b.toString();for(b=10;26>b;b++)e[String.fromCharCode(97+b)]=b.toString()}for(c='',d='',f='',g=a.length,b=0;g>b;b++)d=a.charAt(b),f=e[d],c+=f?'x'+f:d;return encodeURIComponent(c).replace(/%/g,'x50').replace(/\./g,'x51')}}();</script><script type='text/javascript'>!function(){var c,a=document.createElement('script'),b=window.location.protocol.split(':')[0];a.src='/https'===b?'https://zz.bdstatic.com/linksubmit/push.js':'http://push.zhanzhang.baidu.com/push.js',c=document.getElementsByTagName('script')[0],c.parentNode.insertBefore(a,c)}();</script></form>
</body>
</html>
