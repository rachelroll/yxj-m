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
            color: rgb(127, 127, 127);
            font-size: 12px;
            line-height: 2em;
        }

        .xn_mc_news_1_name {
            font-size: 17px;
            line-height: 26px;
            color: #535353;
        }

        .xn_mc_news_1_intro {
            font-size: 15px;
            line-height: 26px;
            color: #535353;
        }

        .xn_c_products_2_warp {
            padding: 20px 0 119px
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
        @if(in_array($category_id, [1, 2, 3, 5, 6]))
        <div id="n_content_left_t" class="n_content_left_t">
            <span id="n_content_left_t1" class="n_content_left_t1">
                <span id='xn_c_75_newstypename'>艺乡建规划</span>
            </span>
        </div>
        <div id="xn_mc_about_1_wrap" class="xn_mc_about_1_wrap">
            <ul class="xn_mc_about_1_ul">
                <li class="xn_mc_about_1_li" @if(request()->fullUrl() != route('projects.index', ['category_id' => 1])) style="background-color: white;"  @endif>
                    <a href="{{ route('projects.index', ['category_id' => 1]) }}" @if(request()->fullUrl() != route('projects.index', ['category_id' => 1])) style="color: rgb(127, 127, 127);"  @endif>
                        概念规划
                    </a>
                </li>
                <li class="xn_mc_about_1_li @if(request()->fullUrl() == route('projects.index', ['category_id' => 2])) xn_mc_about_1_curr @endif">
                    <a href="{{ route('projects.index', ['category_id' => 2]) }}">
                        总体规划
                    </a>
                </li>
            </ul>
            <ul class="xn_mc_about_1_ul">
                <li class="xn_mc_about_1_li @if(request()->fullUrl() == route('projects.index', ['category_id' => 3])) xn_mc_about_1_curr @endif">
                    <a href="{{ route('projects.index', ['category_id' => 3]) }}">
                        详细规划
                    </a>
                </li>
                <li class="xn_mc_about_1_li  @if(request()->fullUrl() == route('projects.index', ['category_id' => 5])) xn_mc_about_1_curr @endif">
                    <a href="{{ route('projects.index', ['category_id' => 5]) }}">
                        品牌规划
                    </a>
                </li>
                <li class="xn_mc_about_1_li  @if(request()->fullUrl() == route('projects.index', ['category_id' => 6])) xn_mc_about_1_curr @endif">
                    <a href="{{ route('projects.index', ['category_id' => 6]) }}">
                        产业振兴
                    </a>
                </li>
            </ul>
        </div>
        @elseif(in_array($category_id, [4, 15, 16, 17, 18, 19, 20, 21]))
            <div id="n_content_left_t" class="n_content_left_t">
            <span id="n_content_left_t1" class="n_content_left_t1">
                <span id='xn_c_75_newstypename'>艺乡建行动</span>
            </span>
            </div>
            <div id="xn_mc_about_1_wrap" class="xn_mc_about_1_wrap">
                <ul class="xn_mc_about_1_ul">
                    <li class="xn_mc_about_1_li" @if(request()->fullUrl() != route('projects.index', ['category_id' => 4])) style="background-color: white;"  @endif>
                        <a href="{{ route('projects.index', ['category_id' => 4]) }}" @if(request()->fullUrl() != route('projects.index', ['category_id' => 4])) style="color: rgb(127, 127, 127);"  @endif>
                            乡镇计划
                        </a>
                    </li>
                    <li class="xn_mc_about_1_li @if(request()->fullUrl() == route('projects.index', ['category_id' => 15])) xn_mc_about_1_curr @endif">
                        <a href="{{ route('projects.index', ['category_id' => 15]) }}">
                            乡建人才
                        </a>
                    </li>
                </ul>
                <ul class="xn_mc_about_1_ul">
                    <li class="xn_mc_about_1_li @if(request()->fullUrl() == route('projects.index', ['category_id' => 16])) xn_mc_about_1_curr @endif">
                        <a href="{{ route('projects.index', ['category_id' => 16]) }}">
                            乡建生态
                        </a>
                    </li>
                    <li class="xn_mc_about_1_li  @if(request()->fullUrl() == route('projects.index', ['category_id' => 17])) xn_mc_about_1_curr @endif">
                        <a href="{{ route('projects.index', ['category_id' => 17]) }}">
                            文化振兴
                        </a>
                    </li>
                </ul>
                <ul class="xn_mc_about_1_ul">
                    <li class="xn_mc_about_1_li  @if(request()->fullUrl() == route('projects.index', ['category_id' => 18])) xn_mc_about_1_curr @endif">
                        <a href="{{ route('projects.index', ['category_id' => 18]) }}">
                            乡村经营
                        </a>
                    </li>
                    <li class="xn_mc_about_1_li  @if(request()->fullUrl() == route('projects.index', ['category_id' => 19])) xn_mc_about_1_curr @endif">
                        <a href="{{ route('projects.index', ['category_id' => 19]) }}">
                            产业植入
                        </a>
                    </li>
                </ul>
                <ul class="xn_mc_about_1_ul">
                    <li class="xn_mc_about_1_li  @if(request()->fullUrl() == route('projects.index', ['category_id' => 20])) xn_mc_about_1_curr @endif">
                        <a href="{{ route('projects.index', ['category_id' => 20]) }}">
                            投资开发
                        </a>
                    </li>
                    <li class="xn_mc_about_1_li  @if(request()->fullUrl() == route('projects.index', ['category_id' => 21])) xn_mc_about_1_curr @endif">
                        <a href="{{ route('projects.index', ['category_id' => 21]) }}">
                            资产管理
                        </a>
                    </li>
                </ul>
            </div>
        @endif
        <div id="xn_c_products_2_warp" class="xn_c_products_2_warp">
            <div class="xn_c_products_2_text">
                @if($category_id == 1 || $category_id == 6)
                    <p class="p1">所谓乡村产业振兴就是将现代化科技与传统农业以及乡旅文化、民间传统工艺、乡村视野等领域相结合，利用科技推动产业发展及变化，将乡村有限的资源与现代化科技无限的可能相结合，创造出更为便利的生产、发展模式，推动乡村人民的生活状态，加快整体的进步与发展，使得乡村产业得以振兴。</p>
                    <br>
                    <p class="p1">一是针对种植者搭建的服务体系。围绕着种植者，包括专业的种植大户、种植公司以及普通农户，建立的一套线上线下立体服务体系。种植者只需注册成为会员，丰信农业即根据种植者要求提供个性化种植方案、农资代购、农事提醒、农技指导等全面服务。种植者只需要按指导去干农活，种地变得简单省心。</p>
                    <br>
                    <p class="p1">二是成熟开放的线下服务体系。将多年打造成熟的线下服务体系开放给农村创业者，协助农村创业者在家门口轻松创业，共同服务好种植者。原来需要由专业农技人员从事的服务工作，在丰信模式中，普通农户即可胜任，大幅的提升了运营效率、降低了成本。</p>
                @elseif($category_id == 2)
                    <p class="p1">在乡村建设振兴资源调查评价的基础上，根据国家的方针政策和国民经济发展的需要，综合分析相关乡村资源特点和社会经济技术条件，提出乡村发展战略；确定乡建规划的性质；划定乡建范围及外围保护地带；定义乡建其他功能区；制定保护和开发利用风景名胜资源的措施；确定旅游区的接待容量和游览活动的组织管理措施；对风景区的总体布局、绿化、交通、水电、旅游服务设施进行统筹安排、全面规划；进行总体投资预算和效益分析；进行环境经济及社会影响评价分析。</p>
                    <br>
                    <p class="p3">成果框架</p>
                    <br>
                    <p class="p1">规划背景  规划依据  规划区概况 规划定位  总体布局  分区规划 产业发展规划  旅游开发策划    智慧旅游规划  旅游品牌策划  旅游设施规划  专项规划  投资估算与效益分析  组织管理与保障措施    总规区位图  总平面图  鸟瞰图  土地利用分析图 交通规划分析图  绿化景观分析图  水系景观分析图   给水排水分析图</p>

                @elseif($category_id == 3 )
                    <p class="p1">详细规划分为控制性详细规划和修建性详细规划。体量较小的景区可以直接做旅游修建性详细规划，一般景区则要在策划、总体规划后才做修建性详细规划。其作用是为旅游区景区修建服务的。旅游区修建性详细规划并不能直接指导施工而是指导建筑设计和景观设计的</p>
                    <br>
                    <p class="p3">成果框架</p>
                    <p class="p1">在总体规划框架基础上，细化旅游分区产品开发策划，旅游活动策划等，增加旅游设施规划，道路交通规划，建筑设计规划，景观设计规划  图件含 坡度分析图  现状植被分析图  土地利用现状分析图  景观结构分析图  场地建设分析图  道路交通系统规划图  游憩项目规划图  旅游线路规划图  服务设施规划图  竖向规划图   建筑意向图等。</p>
                @elseif($category_id == 5)
                    <p class="p1">深入挖掘艺术基因与文化底蕴，锻造“艺术乡村”文化品牌，打造区域文化名片。推进艺术融入规划建设管理，实施艺术广场、艺术街区、艺术景点建设，打造并形成地方特色品牌。以艺术理念引领城乡规划和建设，提升重点地区、重要地段艺术设计，打造具有历史记忆、文化特质、鲜明特色和典型意义的标志性建筑，显著提升艺术形象。</p>
                    <br>
                    <p class="p3">《艺乡建品牌构建服务体系》</p>
                    <br>
                    <p class="p2">艺乡建品牌的顶层规划（输出一个核心品牌）</p>
                    <p class="p2">艺乡建品牌的视觉输出系统与氛围包装</p>
                    <p class="p2">艺乡建品牌的导视系统规划</p>
                    <p class="p2">艺乡建品牌的文化输出与表现系统</p>
                    <p class="p2">艺乡建品牌旗下特色产业的品牌规划建设</p>
                    <p class="p2">艺乡建品牌特色产品的梳理、提升与创意包装设计</p>
                    <p class="p2">艺乡建品牌宣传推广与活动策划；</p>
                    <br>
                    <p class="p3">《全域乡建品牌策划与构建服务专案》</p>
                    <br>
                    <p class="p2">全域乡建的品牌建设</p>
                    <p class="p2">全域乡建整体品牌(公用品牌)顶层建设</p>
                    <p class="p2">全域乡建整体品牌形象系统开发</p>
                    <p class="p2">全域乡建旗下产业（产品）的品牌打造及文化包装</p>
                    <p class="p2">全域乡建的品牌营销推广</p>
                    <p class="p2">全域乡建全媒体推广</p>
                    <p class="p2">全域乡建主题活动策划与推广</p>
                @endif
                <br>
                <p class="p3">乡建案例</p>
                <br>
                <div id="xn_mc_news_1_wrap" class="xn_mc_news_1_wrap">
                    <ul id="xn_mc_news_1_ul" class="xn_mc_news_1_ul"  style="border-bottom: 1px solid #dcdcdc;">
                        @if($projects)
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
                        @endif
                    </ul>
                </div>
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
