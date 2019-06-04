@extends('layout/layout')
@section('title')
    <title>
        国外办公室
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
                            <span id='ShoveWebControl_Text_about'><a href="ProductsSt_ggxq.html" target="_self">乡建视野</a></span>
                        </span>
                        <span class="n_r_wz5">-</span>
                        <span class="n_r_wz6">
                            <a href="ProductsSt_ggjk.html" class="curr1">国外办公室</a>
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
                        </li>
                        <li id="left_typeLi_t400_2" data_id="4_140" class="left_menu1" type="t" index=2 level=0><a href="{{ route('view-overseas-office') }}" target="_self"><span name="ShoveWebControl_VMenu21689490442|T_NewsTypes|Id|140|Name">国外办公室</span></a>
                            <ul id="left_typeUl_t41401" style="display:none" expend=0 class="left_typeUl left_typeUl_t41401">
                                <li id="left_typeLi_t41401_1" data_id="4_167" class="left_menu2" type="t" index=1 level=1>
                                    <a href="CaseSt_dj.html" target="_self">
                                        <span name="ShoveWebControl_VMenu2835542704|T_NewsTypes|Id|167|Name">加拿大</span>
                                    </a>
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
                        <div class="n_case_img"><a target="_blank" href="CaseStd_480.html">
                                <img  data-original='https://0.rc.xiniu.com/g2/M00/F6/9F/CgAGfFvqpTCAQxuTAAC68_SzyRw866.jpg' alt='北京事业部'  title='北京事业部' /></a> </div>
                        <div class="n_case_main_name">
                            <a target="_blank" title='北京事业部' href="CaseStd_480.html">
                                国外办公室
                            </a>
                        </div>
                        <div class="n_case_main_cnt">
                            <span id='n_case_m1_ctl00_ShoveWebControl_Text3'>加拿大艺乡建事业部创立于2010年，总部位于加拿大。“猷光明，合天然”源于对“至善和谐”的发展理念的不渝追求。光合集团开创性的将大设计方法论与国际化的资源相结合，创造了卓尔不凡的光合基因和引领卓越的光合价值。</span>
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


















