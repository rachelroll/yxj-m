@extends('layout/layout')
@section('title')
    <title>
        国内办公室
    </title>
@endsection

@section('content')
    <div id="ea_ba">
        <div id="products_banner" class="products_banner">
            <div class="products_banner_m">
                <img  src="img/TownShipVision.jpg" alt="" />
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
                                <a href="{{ route('view-internal-office') }}" target="_self">乡建视野</a>
                            </span>
                        </span>
                        <span class="n_r_wz5">-</span>
                        <span class="n_r_wz6">
                            <a href="" class="curr1">国内办公室</a>
                        </span>
                    </li>
                    <li>
                        <img src="https://1.rc.xiniu.com/rc/Contents/47175/Images/icpsp1_n_right_wz.png" alt="" />
                    </li>
                </ul>
            </div>

            <!--国内的二级目录用-->
            <div id="n_content_left_cnt" class="n_content_left_cnt">
                <ul id="ShoveWebControl_VMenu2" class="left_typeUl left_typeUl_n000" >
                    <ul id="left_typeUl_t400" class="left_typeUl left_typeUl_t400">
                        <li id="left_typeLi_t400_1" data_id="4_30" class="left_menu1" type="t" index=1 level=0><a href="{{ route('view-internal-office') }}" target="_self"><span name="ShoveWebControl_VMenu21051382564|T_NewsTypes|Id|30|Name">国内办公室</span></a>
                            <ul id="left_typeUl_t4301"  expend=0 class="left_typeUl left_typeUl_t4301">
                                <li id="left_typeLi_t4301_1" data_id="4_162" class="left_menu2" type="t" index=1 level=1><a href="" target="_self"><span name="ShoveWebControl_VMenu21855249497|T_NewsTypes|Id|162|Name">北京</span></a>
                                </li>
                                <li id="left_typeLi_t4301_2" data_id="4_163" class="left_menu2" type="t" index=2 level=1><a href="" target="_self"><span name="ShoveWebControl_VMenu2426718980|T_NewsTypes|Id|163|Name">湖北</span></a>
                                </li>
                                <li id="left_typeLi_t4301_3" data_id="4_164" class="left_menu2" type="t" index=3 level=1><a href="" target="_self"><span name="ShoveWebControl_VMenu21944844007|T_NewsTypes|Id|164|Name">杭州</span></a>
                                </li>
                                <li id="left_typeLi_t4301_4" data_id="4_165" class="left_menu2" type="t" index=4 level=1><a href="" target="_self"><span name="ShoveWebControl_VMenu269328530|T_NewsTypes|Id|165|Name">运城</span></a>
                                </li>
                            </ul>
                        </li>
                        <li id="left_typeLi_t400_2" data_id="4_140" class="left_menu1" type="t" index=2 level=0><a href="{{ route('view-overseas-office') }}" target="_self"><span name="ShoveWebControl_VMenu21689490442|T_NewsTypes|Id|140|Name">国外办公室</span></a>
                            <ul id="left_typeUl_t41401" style="display:none" expend=0 class="left_typeUl left_typeUl_t41401">
                                <li id="left_typeLi_t41401_1" data_id="4_167" class="left_menu2" type="t" index=1 level=1><a href="CaseSt_dj.html" target="_self"><span name="ShoveWebControl_VMenu2835542704|T_NewsTypes|Id|167|Name">加拿大</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </ul>
            </div>

            <!--简单的图文竖版,可以插入图片-->
            <div id="xn_c_products_2_warp" class="xn_c_products_2_warp">
                <!--放福利，先放一个图文竖版-->
                <div id="n_case_m" class="n_case_m">
                    <div class="n_case_main">
                        <div class="n_case_img"><a target="_blank" href="{{ route('view.office.show', ['id' => 'bj']) }}">
                                <img  data-original='https://0.rc.xiniu.com/g2/M00/F6/9F/CgAGfFvqpTCAQxuTAAC68_SzyRw866.jpg' alt='北京事业部'  title='北京事业部' /></a> </div>
                        <div class="n_case_main_name">
                            <a target="_blank" title='北京事业部' href="{{ route('view.office.show', ['id' => 'bj']) }}">
                                北京艺乡建事业部
                            </a>
                        </div>
                        <div class="n_case_main_cnt">
                            <span id='n_case_m1_ctl00_ShoveWebControl_Text3'>简 介 北京艺乡建事业部创立于2010年 ...</span>
                        </div>
                    </div>
                    <div class="n_case_main">
                        <div class="n_case_img"><a target="_blank" href="{{ route('view.office.show', ['id' => 'hb']) }}">
                                <img  data-original='https://0.rc.xiniu.com/g2/M00/F4/E8/CgAGfFvlSM2Ab7WDAADWmVQsTR4890.jpg' /></a> </div>
                        <div class="n_case_main_name">
                            <a target="_blank" href="{{ route('view.office.show', ['id' => 'hb']) }}">
                                湖北艺乡建志愿者
                            </a>
                        </div>
                        <div class="n_case_main_cnt">
                            <span id='n_case_m1_ctl01_ShoveWebControl_Text3'>简 介 天行不止，时序如轮，转我去日，周三十春，曰高 ...</span>
                        </div>
                    </div>
                    <div class="n_case_main">
                        <div class="n_case_img"><a target="_blank" href="{{ route('view.office.show', ['id' => 'hz']) }}">
                                <img  data-original='https://0.rc.xiniu.com/g2/M00/F6/9F/CgAGfFvqpc-Aa8b-AAEt20C0o-g774.jpg' /></a> </div>
                        <div class="n_case_main_name">
                            <a target="_blank" title='江西事业部' href="{{ route('view.office.show', ['id' => 'hz']) }}">
                                杭州艺乡建志愿者
                            </a>
                        </div>
                        <div class="n_case_main_cnt">
                            <span id='n_case_m1_ctl02_ShoveWebControl_Text3'>简 介 张文英，河南郑州人，中国美术学院在读博士，河 ...</span>
                        </div>
                    </div>
                    <div class="n_case_main">
                        <div class="n_case_img"><a target="_blank" href="{{ route('view.office.show', ['id' => 'yc']) }}">
                                <img  data-original='https://0.rc.xiniu.com/g2/M00/F4/E9/CgAGfFvlSR6AdPXsAAEvV6iOiZ8303.jpg'/></a> </div>
                        <div class="n_case_main_name">
                            <a target="_blank" title='江苏事业部' href="{{ route('view.office.show', ['id' => 'yc']) }}">
                                运城艺乡建志愿者
                            </a>
                        </div>
                        <div class="n_case_main_cnt">
                            <span id='n_case_m1_ctl03_ShoveWebControl_Text3'>简 介 周洋，山西运城学院教师，运城市平面协会副主席 ...</span>
                        </div>
                    </div>
                    <p class="clear"></p>
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












