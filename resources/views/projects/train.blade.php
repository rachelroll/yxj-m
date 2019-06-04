@extends('layout/layout')
@section('title')
    <title>
        艺乡建培训
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
                            <a href="" class="curr1">艺乡建培训</a>
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
                    <span id='n_content_left_t_data'>艺乡建培训</span>
                </div>
                <div class="n_content_left_t2">
                    <span id='n_content_left_t_data2'>YXJ Train</span>
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

                    <p class="p3" id="xjxy">1 乡建学院</p>
                    <br>
                    <p class="p1">乡建学院是艺乡建平台为广大渴望乡建技能、管理提升的乡建人才学习平台，以人才储备、人才培训和人才输送为己任，为从事或有意从事乡建行业从业者提供共享学习和专业学习的平台。共同探讨解决各学员间在乡建发展过程中瓶颈和思维提升问题。</p>
                    <br>
                    <p class="p4">课程设置</p>
                    <p class="p1">三个教学模块一个完整的乡建经理人学习计划，也可以拆分学习，只选择一个或二个模块学习，只颁发一个单项学习证明。</p>
                    <p class="p1">一、研学模块（研学会)</p>
                    <p class="p1">二、授业模块（讲学班）</p>
                    <p class="p1">三、实践模块（游学班）</p>
                    <br>
                    <p class="p4" >学习时间</p>
                    <p class="p1">学习周期，三个月</p>
                    <p class="p1">研学模块，时间3天</p>
                    <p class="p1">授业模块，时间6天</p>
                    <p class="p1">实践模块，时间3-10天</p>
                    <br>
                    <p class="p4">学习收获</p>
                    <p class="p1">参加系统乡旅经理人培训班学习，颁发乡旅经理人学习证书，加入乡建经理人俱乐部成为乡建人才库成员，可以免费终身复训，赠送会员学习卡一张，并获得职业推荐、项目合作和兼职讲师资格。</p>
                    <br><br><br><br>



                    <p class="p3" id="fqrjh">2 发起人计划</p>
                    <br>
                    <p class="p1">发起人计划主要是以探索乡村文化、乡村需求、乡村资源以及智力为目的、以实现资产的融合发展为最终导向的计划方案。</p>
                    <br>
                    <p class="p2">政府引领者：相关政策，提出需求</p>
                    <p class="p2">乡村经营者：部署安排，展现方案成果以及设计效果</p>
                    <p class="p2">投资发起人：投资资源评估，投资商业模式，投资方案和执行步骤，投资的规划以及布局</p>
                    <p class="p2">相关志愿者：清晰工作目标以及工作内容</p>
                    <br><br><br><br>



                    <p class="p3" id="jlrpx">3 经理人培训</p>
                    <p class="p1">经理人培训目的是培养乡建人才和队伍，为未来艺术乡村的发展提供人才支持，通过艺乡建输送管理体系，以乡建论坛和专家队伍推荐的教材编写以及标准设计，提高乡建经营人员的个人素养及专业知识体系。编写适应项目特点的教材和管理手册。</p>
                    <p class="p1">艺乡建联合中国著名名校讲师以及乡建带头机构，汇集一批乡建行业以及各个领域专家指点江山、激扬文字，开展艺术乡村振兴高峰论坛，及业内经理人聚会，组建艺乡建经理人俱乐部，探求实践艺术乡村振兴的健康快速发展。</p>
                    <br>
                    <p class="p2">人才培训和输送:经理人、中层管理、服务人员</p>
                    <p class="p2">活动策划和实施:艺乡建论坛、标准化研讨、项目推广四季活动。</p>
                    <p class="p2">标准设计和推送:运营模块和管理标准编制、标准化实行培训、标准化实施督查修正。</p>






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

@endsection













