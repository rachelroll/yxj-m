@extends('layout/layout')
@section('title')
    <title>
        关于我们
    </title>
    @endsection

@section('content')

    <div id="ea_ba">
        <div id="products_banner" class="products_banner">
            <div class="products_banner_m">
                <img src="../img/Research.jpg"alt="" />
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
                                <a href="{{ route('aboutUs') }}" target="_self">研究中心</a>
                            </span>
                        </span>
                        <span class="n_r_wz5">-</span>
                        <span class="n_r_wz6">
                            <a href="#" class="curr1">关于我们</a>
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
                    <span id='n_content_left_t_data'>关于我们</span>
                </div>
                <div class="n_content_left_t2">
                    <span id='n_content_left_t_data2'>About Us</span>
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
                    <p style="margin-top:10px;text-indent:32px;text-autospace:ideograph-numeric;line-height:130%"><span style=";font-family:宋体;line-height:130%;font-size:16px"><span style="font-family:宋体">中国人民大学艺术学院艺乡建艺术振兴乡村研究中心（简称艺乡建）针对国家乡村振兴战略实施与城乡融合发展进行理论研究与项目实践。</span></span></p><p style="margin-top:10px;text-indent:32px;text-autospace:ideograph-numeric;line-height:130%"><span style=";font-family:宋体;line-height:130%;font-size:16px"><span style="font-family:宋体">艺乡建汇集中国人民大学艺术学院、社会与人口学院、农业与农村发展学院、公共管理学院、文学院、经济学院等教授，以及多年从事乡村建设与发展的一线专家，以艺术与创新设计为抓手、跨专业、多维度研究并实践实现乡村振兴、精准扶贫和农村产业升级。经过多年的学理研究和项目实践，艺乡建探索出一条系统性的艺术激活乡村、实现乡村振兴的新路。</span></span></p><p style="margin-top:10px;text-indent:32px;text-autospace:ideograph-numeric;line-height:130%"><span style=";font-family:宋体;line-height:130%;font-size:16px"><span style="font-family:宋体">基于中国人民大学多年来农村经济与产业研究的基础性成果，艺乡建团队围绕当前乡村振兴战略、传统村落（城镇）保护、工匠精神与工匠文化传承、精准扶贫、社区营造、乡村文化自信和乡村价值认同等乡村建设焦点问题，跨界式融合了宏观经济与区域经济研究方法、社会学领域的产业人口关系模数分析、农村经济发展模式研究、艺术学、设计学、传播学和品牌经济作业模式等学科与专业，以多种乡建模式的项目实践、经验与技能传授、策略与方法创新为特色，逐渐总结了一套以艺术手段促进乡村生态平衡、可持续发展的系统化作业路径。</span></span></p><p style="margin-top:10px;text-indent:32px;text-autospace:ideograph-numeric;line-height:130%"><span style=";font-family:宋体;line-height:130%;font-size:16px"><span style="font-family:宋体">艺乡建的作业模式则是基于系统化顶层设计，以区域资源禀赋为根基，在组织乡村、建设乡村、经营乡村的各个阶段，充分发挥艺术自身所具有的激活性、生长性和在<span style="line-height: 130%; font-family: 宋体; font-size: 24px;"></span>地性优势，形成乡村村落（城镇）的内生性成长。艺乡建的项目作业，则强调策划导入的基础与策略，以及总体规划、分步实施的执行落地。近年来已经成功完成了贵州丹寨</span>“乡村艺术驻地创作模式”、河南淅川“自然生态产业导入模式”、湖北孝感“工匠精神与工匠文化传承模式”、浙江衢州“产业艺术节植入模式”等多个乡建项目的有效实施。</span></p><p><br/></p>
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

    // 导航半透明
    <script type="text/javascript" src="https://0.rc.xiniu.com/g2/M00/02/72/CgAGe1wjF9eAejYeAABCcl7PcJM7884.js?d=28164619591" id="js__index"></script>
@endsection





