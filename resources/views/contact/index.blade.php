@extends('layout/layout')
@section('title')
    <title>
        俱乐部
    </title>
@endsection

@section('content')
    <div id="ea_ba">

        <div id="products_banner" class="products_banner">
            <div class="products_banner_m">
                <img  src="img/PlantForm.jpg" alt="" />
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
                                            <span id='JoinUs_lxwm.html'><a href="ProductsSt_ggxq.html" target="_self">联系我们</a></span>
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
                    <span id='n_content_left_t_data'>联系我们</span>
                </div>
                <div class="n_content_left_t2">
                    <span id='n_content_left_t_data2'>Contact us</span>
                </div>
            </div>
            <!--简单的图文竖版,可以插入图片-->

            <div id="xn_c_products_2_warp" class="xn_c_products_2_warp">

                <div class="xn_c_products_2_text" style="text-align: center" >
                    <br>
                    <br>
                    <br>
                    <!--<div id="mask" class=" BMap_mask" style="position: absolute; left: 139px; top: -79px; z-index: 9; overflow: hidden; user-select: none; width: 800px; height: 400px;"></div>-->
                    <img  src="img/map.png" alt='位置地图'  title='位置地图' style="position:relative;width:800px;height:400px;"/>
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













