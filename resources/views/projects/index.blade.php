@extends('layout/layout')
@section('title')
    <title>
        关于我们
    </title>
@endsection

@section('content')
    <!--特写的字体用css-->
    <link rel="stylesheet" type="text/css" href="../../css/font.css">
    <div id="ea_ba">
        <div id="products_banner" class="products_banner">
            <div class="products_banner_m">
                <img  src="../../img/Exmple.jpg" alt="" />
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
                            <span id='ShoveWebControl_Text_about'><a href="{{ route('projects.index', ['category_id' => 1]) }}" target="_self">执行案例</a></span>
                        </span>
                        <span class="n_r_wz5">-</span>
                        <span class="n_r_wz6">
                            @if($category_id == 1)
                            <a href="{{ route('projects.index', ['category_id' => 1]) }}" class="curr1">艺乡建规划</a>
                                @elseif($category_id == 4)
                                <a href="{{ route('projects.index', ['category_id' => 4]) }}" class="curr1">艺乡建行动</a>
                                @elseif($category_id == 22)
                                <a href="{{ route('projects.index', ['category_id' => 22]) }}" class="curr1">艺乡建培训</a>
                                @else
                                <a href="{{ route('aljs') }}" class="curr1">案例检索</a>
                                @endif
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
                    <span id='n_content_left_t_data'>艺乡建规划 -  产业振兴</span>
                </div>
                <div class="n_content_left_t2">
                    <span id='n_content_left_t_data2'>Industry revitalization</span>
                </div>
            </div>
            <!--简单的一级目录原型-->
            <div id="n_content_left_cnt" class="n_content_left_cnt">
                <ul id="ShoveWebControl_VMenu2" class="left_typeUl left_typeUl_n000" >
                    <ul id="left_typeUl_t100" class="left_typeUl left_typeUl_t100">
                        <li id="left_typeLi_t100_1" data_id="1_1" class="left_menu1" type="t" index=1 level=0>
                            <a href="{{ route('projects.index', ['category_id' => 1]) }}" rel="nofollow" target="_self"><span name="ShoveWebControl_VMenu22134030082|T_NewsTypes|Id|1|Name">艺乡建规划</span>
                            </a>
                            @if(in_array($category_id, [1, 2, 3, 5, 6]))
                            <ul id="left_typeUl_t4301"  expend=0 class="left_typeUl left_typeUl_t4301">
                                <li id="left_typeLi_t4301_1" data_id="4_162" class="left_menu2" type="t" index=1 level=1><a href="{{ route('projects.index', ['category_id' => 1]) }}" target="_self"><span name="ShoveWebControl_VMenu21855249497|T_NewsTypes|Id|162|Name">概念规划</span></a>
                                </li>
                                <li id="left_typeLi_t4301_2" data_id="4_163" class="left_menu2" type="t" index=2 level=1><a href="{{ route('projects.index', ['category_id' => 2]) }}" target="_self"><span name="ShoveWebControl_VMenu2426718980|T_NewsTypes|Id|163|Name">总体规划</span></a>
                                </li>
                                <li id="left_typeLi_t4301_3" data_id="4_164" class="left_menu2" type="t" index=3 level=1><a href="{{ route('projects.index', ['category_id' => 3]) }}" target="_self"><span name="ShoveWebControl_VMenu21944844007|T_NewsTypes|Id|164|Name">详细规划</span></a>
                                </li>
                                <li id="left_typeLi_t4301_4" data_id="4_165" class="left_menu2" type="t" index=4 level=1><a href="{{ route('projects.index', ['category_id' => 5]) }}" target="_self"><span name="ShoveWebControl_VMenu269328530|T_NewsTypes|Id|165|Name">品牌规划</span></a>
                                </li>
                                <li id="left_typeLi_t4301_5" data_id="4_166" class="left_menu2" type="t" index=5 level=1><a href="{{ route('projects.index', ['category_id' => 6]) }}" target="_self"><span name="ShoveWebControl_VMenu2509169951|T_NewsTypes|Id|166|Name">产业振兴</span></a>
                                </li>
                            </ul>
                                @endif
                        </li>
                        <li id="left_typeLi_t100_2" data_id="1_2" class="left_menu1" type="t" index=2 level=0><a href="{{ route('projects.index', ['category_id' => 4]) }}" rel="nofollow" target="_self"><span name="ShoveWebControl_VMenu21609884532|T_NewsTypes|Id|2|Name">艺乡建行动</span></a>
                            @if(in_array($category_id, [4, 15, 16, 17, 18, 19, 20, 21]))
                            <ul id="left_typeUl_t4301"  expend=0 class="left_typeUl left_typeUl_t4301">
                                <li id="left_typeLi_t4301_1" data_id="4_162" class="left_menu2" type="t" index=1 level=1><a href="{{ route('projects.index', ['category_id' => 4]) }}" target="_self"><span name="ShoveWebControl_VMenu21855249497|T_NewsTypes|Id|162|Name">乡振计划</span></a>
                                </li>
                                <li id="left_typeLi_t4301_2" data_id="4_163" class="left_menu2" type="t" index=2 level=1><a href="{{ route('projects.index', ['category_id' => 15]) }}" target="_self"><span name="ShoveWebControl_VMenu2426718980|T_NewsTypes|Id|163|Name">乡建人才</span></a>
                                </li>
                                <li id="left_typeLi_t4301_3" data_id="4_164" class="left_menu2" type="t" index=3 level=1><a href="{{ route('projects.index', ['category_id' => 16]) }}" target="_self"><span name="ShoveWebControl_VMenu21944844007|T_NewsTypes|Id|164|Name">乡建生态</span></a>
                                </li>
                                <li id="left_typeLi_t4301_4" data_id="4_165" class="left_menu2" type="t" index=4 level=1><a href="{{ route('projects.index', ['category_id' => 17]) }}" target="_self"><span name="ShoveWebControl_VMenu269328530|T_NewsTypes|Id|165|Name">文化振兴</span></a>
                                </li>
                                <li id="left_typeLi_t4301_5" data_id="4_166" class="left_menu2" type="t" index=5 level=1><a href="{{ route('projects.index', ['category_id' => 18]) }}" target="_self"><span name="ShoveWebControl_VMenu2509169951|T_NewsTypes|Id|166|Name">乡村经营</span></a>
                                </li>
                                <li id="left_typeLi_t4301_6" data_id="4_164" class="left_menu2" type="t" index=6 level=1><a href="{{ route('projects.index', ['category_id' => 19]) }}" target="_self">
                                        <span name="ShoveWebControl_VMenu21944844007|T_NewsTypes|Id|164|Name">产业植入</span></a>
                                </li>
                                <li id="left_typeLi_t4301_7" data_id="4_165" class="left_menu2" type="t" index=7 level=1><a href="{{ route('projects.index', ['category_id' => 20]) }}" target="_self"><span name="ShoveWebControl_VMenu269328530|T_NewsTypes|Id|165|Name">投资开发</span></a>
                                </li>
                                <li id="left_typeLi_t4301_8" data_id="4_166" class="left_menu2" type="t" index=8 level=1><a href="{{ route('projects.index', ['category_id' => 21]) }}" target="_self"><span name="ShoveWebControl_VMenu2509169951|T_NewsTypes|Id|166|Name">资产管理</span></a>
                            </ul>
                                @endif
                        </li>
                        <li id="left_typeLi_t100_3" data_id="1_141" class="left_menu1" type="t" index=3 level=0>
                            <a href="{{ route('projects.index', ['category_id' => 22]) }}" rel="nofollow" target="_self">
                                <span name="ShoveWebControl_VMenu22123378910|T_NewsTypes|Id|141|Name">艺乡建培训</span>
                            </a>
                            @if($category_id ==22)
                            <ul id="left_typeUl_t4301"  expend=0 class="left_typeUl left_typeUl_t4301">
                                <li id="left_typeLi_t4301_1" data_id="4_162" class="left_menu2" type="t" index=1 level=1><a href="#xjxy" target="_self"><span name="ShoveWebControl_VMenu21855249497|T_NewsTypes|Id|162|Name">乡建学院</span></a>
                                </li>
                                <li id="left_typeLi_t4301_2" data_id="4_163" class="left_menu2" type="t" index=2 level=1><a href="#fqrjh" target="_self"><span name="ShoveWebControl_VMenu2426718980|T_NewsTypes|Id|163|Name">发起人计划</span></a>
                                </li>
                                <li id="left_typeLi_t4301_3" data_id="4_164" class="left_menu2" type="t" index=3 level=1><a href="#jlrpx" target="_self"><span name="ShoveWebControl_VMenu21944844007|T_NewsTypes|Id|164|Name">经理人培训</span></a>
                                </li>
                                <li id="left_typeLi_t4301_4" data_id="4_164" class="left_menu2" type="t" index=4 level=1><a href="{{ route('projects.register') }}" rel="nofollow" target="_self"><span name="ShoveWebControl_VMenu22123378910|T_NewsTypes|Id|141|Name">培训报名</span></a>
                                </li>
                            </ul>
                                @endif
                        </li>
                        <li id="left_typeLi_t100_4" data_id="1_3" class="left_menu1" type="t" index=4 level=0><a href="{{ route('aljs') }}" rel="nofollow" target="_self">
                                <span name="ShoveWebControl_VMenu21952530233|T_NewsTypes|Id|3|Name">案例检索</span></a>
                        </li>
                    </ul>
                </ul>
            </div>

            <!--简单的图文竖版,可以插入图片-->
            <div id="xn_c_products_2_warp" class="xn_c_products_2_warp">
                <div class="xn_c_products_2_text">
                    @if($category_id == 1)
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
                        <br>
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
                        @elseif($category_id == 6)
                        <p class="p1">所谓乡村产业振兴就是将现代化科技与传统农业以及乡旅文化、民间传统工艺、乡村视野等领域相结合，利用科技推动产业发展及变化，将乡村有限的资源与现代化科技无限的可能相结合，创造出更为便利的生产、发展模式，推动乡村人民的生活状态，加快整体的进步与发展，使得乡村产业得以振兴。</p>
                        <br>
                        <p class="p1">一是针对种植者搭建的服务体系。围绕着种植者，包括专业的种植大户、种植公司以及普通农户，建立的一套线上线下立体服务体系。种植者只需注册成为会员，丰信农业即根据种植者要求提供个性化种植方案、农资代购、农事提醒、农技指导等全面服务。种植者只需要按指导去干农活，种地变得简单省心。</p>
                        <br>
                        <p class="p1">二是成熟开放的线下服务体系。将多年打造成熟的线下服务体系开放给农村创业者，协助农村创业者在家门口轻松创业，共同服务好种植者。原来需要由专业农技人员从事的服务工作，在丰信模式中，普通农户即可胜任，大幅的提升了运营效率、降低了成本。</p>
                    @endif
                    <br>
                    <p class="p3">乡建案例</p>
                    <br>

                        <div id="nnews_lb" class="nnews_lb">
                                @foreach($projects as $item)
                                    <div class="nnews_lb_m">
                                        <div class="nnews_lb_img">
                                            <a href="{{ route('projects.show', ['id' => $item->id]) }}" target="_blank">
                                                <img  data-original='{{ config('filesystems.disks.oss.cdnDomain') . '/' . $item->cover }}' alt='艺乡建' />
                                            </a>
                                        </div>
                                        <div class="nnews_lb_mdbox">
                                            <div class="nnews_lb_title">
                                                <a title='{{ $item->title }}' href="{{ route('projects.show', ['id' => $item->id]) }}" target="_blank">
                                                    <span name="snnews_lb_tt1506|T_News|Id|506|Title">{{ $item->title }}</span>
                                                </a>
                                            </div>
                                            <div class="nnews_lb_cnt" ej="edit_span">
                                                <span id='nnews_lb1_ctl00_ShoveWebControl_Text4'>{{ $item->description }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                        </div>
                        <div class="mx-auto" style="align-content: center; width: 200px;">
                            {{ $projects->links() }}
                        </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" id="pageId" value="1" />
    <script type="text/javascript" src="https://0.rc.xiniu.com/g2/M00/02/72/CgAGe1wjF9eAejYeAABCcl7PcJM7884.js?d=28164619591" id="js__index"></script>
@endsection













