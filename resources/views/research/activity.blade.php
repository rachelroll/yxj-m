<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<html lang="zh-cn" xmlns="http://www.w3.org/1999/xhtml">
<head><meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /><meta name="HandheldFriendly" content="true" /><meta http-equiv="x-rim-auto-match" content="none" /><meta name="format-detection" content="telephone=no" />
    <title>
        社会活动
    </title>
    <meta name="applicable-device" content="mobile"><meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <link id="css__about" rel="stylesheet" type="text/css" href="/css/rewrite.css" />

    <script type="text/javascript">var _jtime=new Date();function jqload(){window.jLoad=new Date()-_jtime;}function jqerror(){window.jLoad=-1;}</script>
    <script type="text/javascript" src="https://1.rc.xiniu.com/js/jq/jquery-2.min.js" onload="jqload()" onerror="jqerror()" id="jquery"></script>
    <script type="text/javascript" src="https://1.rc.xiniu.com/js/pb/2/Public.js"></script>
    <script type="text/javascript" src="https://1.rc.xiniu.com/js/pb/flexible.js"></script>
    <style>

        .list {
            font-size: 17px;
            color: #535353;
            line-height: 28px;
        }
        .list ul li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body class="about_body">
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
                <span id='ShoveWebControl_Text1'>社会活动</span>
            </span><span class="n_content_left_t2">
                <span id='ShoveWebControl_Text2'>SOCIAL ACTIVITIES</span>
            </span>
    </div>

    <div id="xn_mc_about_1_wrap" class="xn_mc_about_1_wrap" >
        <ul class="xn_mc_about_1_ul">
            <li class="xn_mc_about_1_li" style="width: 20%; @if(request()->fullUrl() != route('aboutUs')) background-color: white; @endif" >
                <a href="{{ route('aboutUs') }}" @if(request()->fullUrl() != route('aboutUs')) style="color: rgb(127, 127, 127);" @endif>
                    关于我们
                </a>
            </li>
            <li class="xn_mc_about_1_li @if(request()->fullUrl() == route('researchTeam')) xn_mc_about_1_curr @endif">
                <a href="{{ route('researchTeam') }}">
                    研究团队
                </a>
            </li>
            <li class="xn_mc_about_1_li @if(request()->fullUrl() == route('researchContent')) xn_mc_about_1_curr @endif">
                <a href="{{ route('researchContent') }}">
                    研究内容
                </a>
            </li>
        </ul>
        <ul class="xn_mc_about_1_ul">
            <li class="xn_mc_about_1_li @if(request()->fullUrl() == route('researchActivity')) xn_mc_about_1_curr @endif">
                <a href="{{ route('researchActivity') }}">
                    社会活动
                </a>
            </li>
            <li class="xn_mc_about_1_li @if(request()->fullUrl() == route('researchYearbook')) xn_mc_about_1_curr @endif" style="width: 40%">
                <a href="{{ route('researchYearbook') }}">
                    艺乡建年鉴
                </a>
            </li>
        </ul>
    </div>

    <div id="xn_mc_about_2_wrap" class="xn_mc_about_2_wrap">
        <div class="xn_mc_about_2_cont">
                <span id='xn_mc_about_2_Text'>
                    <p style="font-size: 18px; color: #535353;">
                        <span style="color: rgb(89, 89, 89); font-size: 14px;">
                            <strong><br/></strong>
                        </span>
                    </p>
                    <p style="line-height: 28px;">
                        <span style="font-size: 17px; color: #535353;">
                            艺乡建的工作不是创作某一个具体的艺术作品或设计，而是组织艺术家群落作用于乡村村落发展，以及研究艺术品创化后如何转化为价值，以及艺术产业如何在地化、产业化，促进乡村生态融合，形成乡村村落的内生性成长，可持续地增加乡村收入。艺乡建推行的乡振计划，主旨在于发现乡村之美、亲近乡村之情、创意乡村未来，在组织乡村、建设乡村、经营乡村过程中推动乡建项目落地。
                        </span>
                    </p>
                    <br>
                    <div class="list">
                       <ul>
                           <li>
                               主题艺术节：以精品巡展、驻地创作、主题植入等不同形式，为当地组织引入主题艺术节，将特色资源转化为无形资产，发掘独特价值塑造区域品牌，活化乡村文化生态，搭建艺术产业平台。
                           </li>
                           <li>
                               村落发展项目：在提高居民处理村落公共事务能力的基础上，综合性地解决村落生态平衡、资源资产保护、合理开发使用、经济持续发展等问题，探索出艺术作用于村落发展的“内生式发展”模式。
                           </li>
                           <li>
                               培训教育项目：启动“乡振计划”、“村落培训”、“技能建设”、“合伙人计划”、“经理人培训”等执行项目。
                           </li>
                           <li>
                               资助体系项目：推动“乡振资助计划”和“艺乡建基金”，资助各地乡建团体，同时也扩大艺乡建的社会影响。
                           </li>
                           <li>
                               调查科研项目：深入了解中国乡村建设情况，委托专家启动系列科研项目，完成“民俗与生态人口分布调查”、“生产生活方式和生态环境保护”、“艺术村落可持续利用研究”项目。
                           </li>
                           <li>
                               志愿者平台项目：艺乡建为志愿者提供平台，支持志愿者到乡村参与乡村建设工作。（文化生态与艺术驻地创作)
                           </li>
                           <li>
                               国际合作项目：与国际艺术组织、基金会合作，推进文化交流。
                           </li>
                           <li>
                               媒体合作伙伴：增加社会曝光，参加媒体组织的年度评选，得到政府理解和会员认同，并得到社会公众较广泛的承认。
                           </li>
                       </ul>
                    </div>
                </span>
        </div>
    </div>
</div>
<br>
<br>

@include('layout/footer')

<div id="ea_sh"></div>
<div id="ea_mu"></div>

<script type="text/javascript" src="/js/nav.js" id="js__about"></script>

<script type='text/javascript'>
    !function(){
        var e,f,a=new Date,
            b=null,
            c=function(){
            var a,c,d,e,g,h,i,j;
            b&&clearTimeout(b),
                a=document.location.href,
                c='',
                c=/\.html|.htm/.test(document.location.href)?document.forms[0].getAttribute('Page'):'',
                d=window.document.referrer,
                e='/admin/access/load.ashx?req='+f(a),
            c&&(e+='&f='+f(c)),
                g=f(d),
                e+='&ref='+g+'&sw='+screen.width+'&sh='+screen.height,
                e+='&cs='+(window.jLoad?window.jLoad:-1),
                e+='&_t='+Math.random(),
                h='',
                i='https:'==document.location.protocol?!0:!1,
                h=i?'https://':'http://',
                e+='&ht='+f(h+document.domain),
                $?$.getScript(e):(j=document.createElement('script'),
                    j.src=e,
                    document.body.appendChild(j)
                )
            },
            d=function(){
            window.acessFinish=new Date-a
        };
        window.addEventListener?window.addEventListener('load',d):window.attachEvent&&window.attachEvent('onload',d),
            b=setTimeout(c,3e3),
            e=null,
            f=function(a){
            var b,c,d,f,g;
            if(!a)
                return a;
            if(!e){
                for(e={},b=0;10>b;b++)
                    e[String.fromCharCode(97+b)]='0'+b.toString();
                for(b=10;26>b;b++)e[String.fromCharCode(97+b)]=b.toString()
            }
            for(c='',d='',f='',g=a.length,b=0;g>b;b++)d=a.charAt(b),
                f=e[d],
                c+=f?'x'+f:d;
            return encodeURIComponent(c).replace(/%/g,'x50').replace(/\./g,'x51')
        }}();
</script>

<script type='text/javascript'>
    !function(){
        var c,a=document.createElement('script'),
            b=window.location.protocol.split(':')[0];
        a.src='/https'===b?'https://zz.bdstatic.com/linksubmit/push.js':'http://push.zhanzhang.baidu.com/push.js',
            c=document.getElementsByTagName('script')[0],
            c.parentNode.insertBefore(a,c)
    }();
</script>

</body>
</html>
