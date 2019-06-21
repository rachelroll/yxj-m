@extends('layout/layout')
@section('title')
    <title>
        艺乡建培训
    </title>
@endsection

@section('content')

    <!--特写的字体用css-->
    <link rel="stylesheet" type="text/css" href="../../css/font.css">

    <link id="css__news" rel="stylesheet" type="text/css" href="https://0.rc.xiniu.com/g2/M00/F6/F6/CgAGfFvrosiABY8LAAAl_-7bYgY686.css?d=08202509903" />
    <link id="css__products" rel="stylesheet" type="text/css" href="https://0.rc.xiniu.com/g2/M00/EC/88/CgAGe1vs85KAOuejAAAtVfnVNlc395.css?d=08202509793" />

    <div id="ea_ba">
        <div class="about_banner" id="about_banner"     >
            <div class="about_banner_m">
                <img data-original="/img/Exmple.jpg" alt="" />
            </div>
        </div>
    </div>
    <div id="ea_c">
        <div class="n_main" >
            <!--下面的都是ea_c中的而可选项-->
            <div id="n_content_left_t" class="n_content_left_t">
            <span id="n_content_left_t1" class="n_content_left_t1">
                <span id='xn_c_75_newstypename'>艺乡建培训</span>
            </span>
            </div>
            <div id="xn_mc_about_1_wrap" class="xn_mc_about_1_wrap">
                <ul class="xn_mc_about_1_ul">
                    <li class="xn_mc_about_1_li @if(request()->fullUrl() == route('projects.index', ['category_id' => 22])) xn_mc_about_1_curr @endif">
                        <a href="#xjxy">
                            乡建学院
                        </a>
                    </li>
                    <li class="xn_mc_about_1_li">
                        <a href="#fqrjh">
                            发起人计划
                        </a>
                    </li>
                </ul>
                <ul class="xn_mc_about_1_ul">
                    <li class="xn_mc_about_1_li">
                        <a href="#jlrpx">
                            经理人培训
                        </a>
                    </li>
                    <li class="xn_mc_about_1_li">
                        <a href="{{ route('projects.register') }}">
                            培训报名
                        </a>
                    </li>
                </ul>
            </div>

            <!--简单的图文竖版,可以插入图片-->
            <div id="xn_c_products_2_warp" class="xn_c_products_2_warp">
                <div class="xn_c_products_2_text">
                    <p class="p3" id="xjxy">1. 乡建学院</p>
                    <br>
                    <p class="p1">乡建学院是艺乡建平台为广大渴望乡建技能、管理提升的乡建人才学习平台，以人才储备、人才培训和人才输送为己任，为从事或有意从事乡建行业从业者提供共享学习和专业学习的平台。共同探讨解决各学员间在乡建发展过程中瓶颈和思维提升问题。</p>
                    <br>
                    <p class="p4">课程设置</p>
                    <br>
                    <p class="p1">三个教学模块一个完整的乡建经理人学习计划，也可以拆分学习，只选择一个或二个模块学习，只颁发一个单项学习证明。</p>
                    <p class="p1">一、研学模块（研学会)</p>
                    <p class="p1">二、授业模块（讲学班）</p>
                    <p class="p1">三、实践模块（游学班）</p>
                    <br>
                    <p class="p4" >学习时间</p>
                    <br>
                    <p class="p1">学习周期，三个月</p>
                    <p class="p1">研学模块，时间3天</p>
                    <p class="p1">授业模块，时间6天</p>
                    <p class="p1">实践模块，时间3-10天</p>
                    <br>
                    <p class="p4">学习收获</p>
                    <br>
                    <p class="p1">参加系统乡旅经理人培训班学习，颁发乡旅经理人学习证书，加入乡建经理人俱乐部成为乡建人才库成员，可以免费终身复训，赠送会员学习卡一张，并获得职业推荐、项目合作和兼职讲师资格。</p>
                    <br><br>

                    <p class="p3" id="fqrjh">2. 发起人计划</p>
                    <br>
                    <p class="p1">发起人计划主要是以探索乡村文化、乡村需求、乡村资源以及智力为目的、以实现资产的融合发展为最终导向的计划方案。</p>
                    <br>
                    <p class="p2">政府引领者：相关政策，提出需求</p>
                    <p class="p2">乡村经营者：部署安排，展现方案成果以及设计效果</p>
                    <p class="p2">投资发起人：投资资源评估，投资商业模式，投资方案和执行步骤，投资的规划以及布局</p>
                    <p class="p2">相关志愿者：清晰工作目标以及工作内容</p>
                    <br><br>

                    <p class="p3" id="jlrpx">3. 经理人培训</p>
                    <br>
                    <p class="p1">经理人培训目的是培养乡建人才和队伍，为未来艺术乡村的发展提供人才支持，通过艺乡建输送管理体系，以乡建论坛和专家队伍推荐的教材编写以及标准设计，提高乡建经营人员的个人素养及专业知识体系。编写适应项目特点的教材和管理手册。</p>
                    <br>
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













