@extends('layout/layout')
@section('title')
    <title>
        社会活动
    </title>
@endsection

@section('content')

    <div id="ea_ba">

        <div id="products_banner" class="products_banner">
            <div class="products_banner_m">
                <img  src="img/Research.jpg"alt="" />
            </div>
        </div>
    </div>


    <div id="ea_c">
        <div class="n_main" >

            <div id="n_content_right_name_r" class="n_content_right_name_r">
                <ul>
                    <li>
                        <span class="n_r_wz1">
                            <span name="_n_r_wz1">您现在的位置：</span>
                        </span>
                        <span class="n_r_wz2">
                            <a href="{{ route('home') }}">
                                <span name="_n_r_wz2">首页</span>
                            </a>
                        </span>
                        <span class="n_r_wz3">-</span>
                        <span class="n_r_wz4">
                            <span id='ShoveWebControl_Text_about'>
                                <a href="{{ route('aboutUs') }}" target="_self">研究中心</a></span>
                        </span>
                        <span class="n_r_wz5">-</span>
                        <span class="n_r_wz6">
                            <a href="#" class="curr1">社会活动</a>
                        </span>
                    </li>
                    <li>
                        <img src="https://1.rc.xiniu.com/rc/Contents/47175/Images/icpsp1_n_right_wz.png" alt="" />
                    </li>
                </ul>
            </div>

            <!--下面的都是ea_c中的而可选项-->
            <!--加粗的一级标题-->
            <div id="n_content_left_t" class="n_content_left_t">
                <div id="n_content_left_t1" class="n_content_left_t1">
                    <span id='n_content_left_t_data'>社会活动</span>
                </div>
                <div class="n_content_left_t2">
                    <span id='n_content_left_t_data2'>Social Activities</span>
                </div>
            </div>

            <!--简单的一级目录原型-->
            <div id="n_content_left_cnt" class="n_content_left_cnt">
                <ul id="ShoveWebControl_VMenu2" class="left_typeUl left_typeUl_n000" >
                    <ul id="left_typeUl_t100" class="left_typeUl left_typeUl_t100">
                        <li id="left_typeLi_t100_1" data_id="1_1" class="left_menu1" type="t" index=1 level=0><a href="{{ route('aboutUs') }}" rel="nofollow" target="_self"><span name="ShoveWebControl_VMenu22134030082|T_NewsTypes|Id|1|Name">关于我们</span></a>
                        </li>
                        <li id="left_typeLi_t100_2" data_id="1_2" class="left_menu1" type="t" index=2 level=0><a href="{{ route('researchTeam') }}" rel="nofollow" target="_self"><span name="ShoveWebControl_VMenu21609884532|T_NewsTypes|Id|2|Name">研究团队</span></a>
                        </li>
                        <li id="left_typeLi_t100_3" data_id="1_141" class="left_menu1" type="t" index=3 level=0><a href="{{ route('researchContent') }}" rel="nofollow" target="_self"><span name="ShoveWebControl_VMenu22123378910|T_NewsTypes|Id|141|Name">研究内容</span></a>
                        </li>
                        <li id="left_typeLi_t100_4" data_id="1_3" class="left_menu1" type="t" index=4 level=0><a href="{{ route('researchActivity') }}" rel="nofollow" target="_self"><span name="ShoveWebControl_VMenu21952530233|T_NewsTypes|Id|3|Name">社会活动</span></a>
                        </li>
                        <li id="left_typeLi_t100_4" data_id="1_3" class="left_menu1" type="t" index=5 level=0><a href="{{ route('researchYearbook') }}" rel="nofollow" target="_self"><span name="ShoveWebControl_VMenu21952530233|T_NewsTypes|Id|3|Name">艺乡鉴年鉴</span></a>
                        </li>
                    </ul>
                </ul>
            </div>

            <!--简单的图文竖版,可以插入图片-->
            <div id="xn_c_products_2_warp" class="xn_c_products_2_warp">

                <!--字体大小24px-->
                <div class="xn_c_products_2_text">

                    <p style="margin-top:10px;margin-left:0;text-indent:32px;text-autospace:ideograph-numeric;line-height:130%"><span style=";font-family:宋体;line-height:130%;font-size:16px"><span style="font-family:宋体">艺乡建的工作不是创作某一个具体的艺术作品或设计，而是组织艺术家群落作用于乡村村落发展，以及研究艺术品创化后如何转化为价值，以及艺术产业如何在地化、产业化，促进乡村生态融合，形成乡村村落的内生性成长，可持续地增加乡村收入。</span></span><span style=";font-family:宋体;line-height:130%;font-size:16px"><span style="font-family:宋体">艺乡建推行的乡振计划，主旨在于发现乡村之美、亲近乡村之情、创意乡村未来，在</span></span><span style=";font-family:宋体;line-height:130%;font-size:16px"><span style="font-family:宋体">组织乡村、建设乡村、经营乡村</span></span><span style=";font-family:宋体;line-height:130%;font-size:16px"><span style="font-family:宋体">过程中</span></span><span style=";font-family:宋体;line-height:130%;font-size:16px"><span style="font-family:宋体">推动</span></span><span style=";font-family:宋体;line-height:130%;font-size:16px"><span style="font-family:宋体">乡建</span></span><span style=";font-family:宋体;line-height:130%;font-size:16px"><span style="font-family:宋体">项目落地</span></span><span style=";font-family:宋体;line-height:130%;font-size:16px"><span style="font-family:宋体">。</span></span></p><p style="margin-top:10px;margin-left:0;text-indent:32px;text-autospace:ideograph-numeric;line-height:130%"><span style=";font-family:宋体;line-height:130%;font-size:16px"><span style="font-family:宋体"><br/></span></span></p><p style="margin-top:10px;margin-left:0;text-indent:32px;text-autospace:ideograph-numeric;line-height:130%"><span style=";font-family:宋体;line-height:130%;font-size:16px"><span style="font-family:宋体"><br/></span></span></p><p style="margin-top:10px;margin-left:56px;text-autospace:ideograph-numeric;line-height:130%"><span style="font-family:Wingdings;font-size:16px">l&nbsp;</span><span style=";font-family:宋体;line-height:130%;font-size:16px"><span style="font-family:宋体">主题艺术节：以精品巡展、驻地创作、主题植入等不同形式，为当地组织引入主题艺术节，将特色资源转化为无形资产，发掘独特价值塑造区域品牌，活化乡村文化生态，搭建艺术产业平台。</span></span></p><p style="margin-top:10px;margin-left:56px;text-autospace:ideograph-numeric;line-height:130%"><span style="font-family:Wingdings;font-size:16px">l&nbsp;</span><span style=";font-family:宋体;line-height:130%;font-size:16px"><span style="font-family:宋体">村落发展项目：在提高居民</span></span><span style=";font-family:宋体;line-height:130%;font-size:16px"><span style="font-family:宋体">处理</span></span><span style=";font-family:宋体;line-height:130%;font-size:16px"><span style="font-family:宋体">村落公共事务能力的基础上，综合性地解决村落生态平衡、资源资产保护、合理开发使用、经济持续发展等问题，探索出艺术作用于村落发展的</span>“内生式发展”模式。</span></p><p style="margin-top:10px;margin-left:56px;text-autospace:ideograph-numeric;line-height:130%"><span style="font-family:Wingdings;font-size:16px">l&nbsp;</span><span style=";font-family:宋体;line-height:130%;font-size:16px"><span style="font-family:宋体">培训教育项目：启动</span>“乡振计划”、“村落培训”、“技能建设”、“合伙人计划”、“经理人培训”等执行项目。</span></p><p style="margin-top:10px;margin-left:56px;text-autospace:ideograph-numeric;line-height:130%"><span style="font-family:Wingdings;font-size:16px">l&nbsp;</span><span style=";font-family:宋体;line-height:130%;font-size:16px"><span style="font-family:宋体">资助体系项目：推动</span>“乡振资助计划”和“艺乡建基金”，资助各地乡建团体，同时也扩大艺乡建的社会影响。</span></p><p style="margin-top:10px;margin-left:56px;text-autospace:ideograph-numeric;line-height:130%"><span style="font-family:Wingdings;font-size:16px">l&nbsp;</span><span style=";font-family:宋体;line-height:130%;font-size:16px"><span style="font-family:宋体">调查科研项目：深入了解中国乡村建设情况，委托专家启动系列科研项目，完成</span>“民俗与生态人口分布调查”、“生产生活方式和生态环境保护”、“艺术村落可持续利用研究”项目。</span></p><p style="margin-top:10px;margin-left:56px;text-autospace:ideograph-numeric;line-height:130%"><span style="font-family:Wingdings;font-size:16px">l&nbsp;</span><span style=";font-family:宋体;line-height:130%;font-size:16px"><span style="font-family:宋体">志愿者平台项目：艺乡建为志愿者提供平台，支持志愿者到乡村参与乡村建设工作。（文化生态与艺术驻地创作</span>)</span></p><p style="margin-top:10px;margin-left:56px;text-autospace:ideograph-numeric;line-height:130%"><span style="font-family:Wingdings;font-size:16px">l&nbsp;</span><span style=";font-family:宋体;line-height:130%;font-size:16px"><span style="font-family:宋体">国际合作项目：与国际艺术组织、基金会合作，推进文化交流。</span></span></p><p style="margin-top:10px;margin-left:56px;text-autospace:ideograph-numeric;line-height:130%"><span style="font-family:Wingdings;font-size:16px">l&nbsp;</span><span style=";font-family:宋体;line-height:130%;font-size:16px"><span style="font-family:宋体">媒体合作伙伴：增加社会曝光，参加媒体组织的年度评选，得到政府理解和会员认同，并得到社会公众较广泛的承认。</span></span></p><p><br/></p>

                </div>


            </div>


            <!--确保两页存在留白-->


            <div class="n_content" >
                <div class="n_content_left" >
                </div>
                <div class="n_content_right" >
                    <div class="n_content_right_name" >
                    </div>
                    <div class="n_content_right_m" >
                    </div>
                </div>
                <div class="clear"></div>
            </div>










        </div>
    </div>


    <input type="hidden" id="pageId" value="1" />
    <script type="text/javascript" src="https://0.rc.xiniu.com/g2/M00/02/72/CgAGe1wjF9eAejYeAABCcl7PcJM7884.js?d=28164619591" id="js__index"></script>

    <a style='display:none' href='http://m.ps-cc.com/m'>进入手机网站</a>

    <!--首页留着的html-->
    <!-- <script type='text/javascript'>!function(){var e,f,a=new Date,b=null,c=function(){var a,c,d,e,g,h,i,j;b&&clearTimeout(b),a=document.location.href,c='',c=/\.html|.htm/.test(document.location.href)?document.forms[0].getAttribute('Page'):'',d=window.document.referrer,e='/admin/access/load.ashx?req='+f(a),c&&(e+='&f='+f(c)),g=f(d),e+='&ref='+g+'&sw='+screen.width+'&sh='+screen.height,e+='&cs='+(window.jLoad?window.jLoad:-1),e+='&_t='+Math.random(),h='',i='https:'==document.location.protocol?!0:!1,h=i?'https://':'http://',e+='&ht='+f(h+document.domain),$?$.getScript(e):(j=document.createElement('script'),j.src=e,document.body.appendChild(j))},d=function(){window.acessFinish=new Date-a};window.addEventListener?window.addEventListener('load',d):window.attachEvent&&window.attachEvent('onload',d),b=setTimeout(c,3e3),e=null,f=function(a){var b,c,d,f,g;if(!a)return a;if(!e){for(e={},b=0;10>b;b++)e[String.fromCharCode(97+b)]='0'+b.toString();for(b=10;26>b;b++)e[String.fromCharCode(97+b)]=b.toString()}for(c='',d='',f='',g=a.length,b=0;g>b;b++)d=a.charAt(b),f=e[d],c+=f?'x'+f:d;return encodeURIComponent(c).replace(/%/g,'x50').replace(/\./g,'x51')}}();</script><script type='text/javascript'>!function(){var c,a=document.createElement('script'),b=window.location.protocol.split(':')[0];a.src='/https'===b?'https://zz.bdstatic.com/linksubmit/push.js':'http://push.zhanzhang.baidu.com/push.js',c=document.getElementsByTagName('script')[0],c.parentNode.insertBefore(a,c)}();</script>

@endsection


