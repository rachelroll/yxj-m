@extends('layout/layout')
@section('title')
    <title>
        研究内容
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
                                            <span id='ShoveWebControl_Text_about'><a href="{{ route('aboutUs') }}" target="_self">研究中心</a></span>
                                        </span>
                        <span class="n_r_wz5">-</span>
                        <span class="n_r_wz6">
                                            <a href="#" class="curr1">研究内容</a>
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
                    <span id='n_content_left_t_data'>研究内容</span>
                </div>
                <div class="n_content_left_t2">
                    <span id='n_content_left_t_data2'>Research Contents</span>
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
                    <br/><p><span style="font-size: 16px;">艺乡建的作用，在于总结艺术振兴乡村的路径与方法，发挥艺术自身所具有的激活性、生长性和在地性优势，以艺术手段促进乡村生态均衡可持续发展，通过艺术设计，既能够服务于当下的乡村建设，又能够弥补文化的裂痕，“传承文脉、留住乡愁”。</span></p><p><span style="font-size: 16px;"><br/></span></p><p><br/></p><span style="font-size: 16px;"><span style="font-size: 20px;"><br/>论文</span><br/><br/>l 人工智能，让艺术变得廉价?<span style="font-size: 12px;"> 陈炯 2017.10 美术观察</span><br/><br/>l 化古开今录梦华—我对材质、结构和时间意义的一点感悟<span style="font-size: 12px;">陈炯 2017.03美术观察</span><br/><br/>l 记忆影射下的公共艺术<span style="font-size: 12px;"> 陈炯 2016.04 美术观察</span><br/><br/>l 自由主义视域中的设计伦理构建 <span style="font-size: 12px;">丛志强 2016.02 美术观察</span><br/><br/>l 本位脱离：消费逻辑主导下中国设计师的危机研究 <span style="font-size: 12px;">丛志强 2017.11 美术观察<br/></span><br/>l 消费主义语境下中国设计生态失衡研究—基于资本逻辑与符号逻辑的视角 <span style="font-size: 12px;">丛志强 2017.05 文艺争鸣</span><br/><br/>l 京津冀县域人口城镇化时空格局及驱动力研究—兼论产业疏解可否调控北京人口 <span style="font-size: 12px;">张耀军 2017.12 经济理论与经济管理<br/></span><br/>l 《海洋之歌》传统与现代碰撞下的民族艺术发展 <span style="font-size: 12px;">赵前2016.11当代电影<br/></span><br/>l 街旁绿地内部行为空间组织—以邻北京市三环辅路的街旁绿地为例<span style="font-size: 12px;"> 李宇宏2017.01华中建筑</span><br/><br/>l 皇城根遗址公园空间环境行为组织探析<span style="font-size: 12px;"> 李宇宏 2017.03 南方建筑</span><br/><br/>l 《儒之理学与心学和中国绘画的内在关联》<span style="font-size: 12px;">王文娟 2015.5 美术研究</span><br/><br/>l 《徐悲鸿的写实主义及其再理解》 <span style="font-size: 12px;">王文娟 2018.08 美术观察</span><br/><br/>l 面向知识生产的邻避设施规划公众参与<span style="font-size: 12px;"> 郑国 2017.4.24 城市规划</span><br/><br/>l 14 Same projects，different endings—Comparative case studies on NIMBY facility construction in Beijing <span style="font-size: 12px;">郑国2018.3.28 CITIES</span><br/><br/>l 利益平衡与知识整合：城市规划公众参与的逻辑与模式<span style="font-size: 12px;">郑国 2016.1.14 中国行政管理</span><br/><br/><br/><br/></span>
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


@endsection

