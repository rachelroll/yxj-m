
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<html lang="zh-cn" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>
        详细信息
    </title>
    <meta name="keywords" content="艺乡建"/>
    <meta name="description" content="艺乡建">
    <meta name="applicable-device" content="pc">
    <meta name="renderer" content="webkit" />
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <link id="css__news_view" rel="stylesheet" type="text/css" href="https://0.rc.xiniu.com/g2/M00/FB/C1/CgAGe1wTCzmAc6RgAAAiDDG83kc894.css?d=28164617935" />
    <link rel="bookmark" href="Images/logo.ico" /><link rel="shortcut icon" href="Images/logo.ico" />

    <script type="text/javascript">var _jtime=new Date();function jqload(){window.jLoad=new Date()-_jtime;}function jqerror(){window.jLoad=-1;}</script>
    <script type="text/javascript" src="https://1.rc.xiniu.com/js/jq/jqueryV173.js" onload="jqload()" onerror="jqerror()" id="jquery"></script>
    <script type="text/javascript" src="https://1.rc.xiniu.com/js/pb/2/Public.js"></script>
    <script type="text/javascript" src="https://1.rc.xiniu.com/js/tl/swfobject_modified.js"></script>
    <script type="text/javascript" src="https://1.rc.xiniu.com/js/tl/swfobject.js"></script>
</head>

<body class="news_view_body">
<form name="form1" method="get" action="#" id="form1" NavigateId="2" Page="/news_view.aspx?Fid=t2:5:2&amp;Id=498&amp;TypeId=5">
    <input type="hidden" name="__VIEWSTATE" id="
__VIEWSTATE" value="" />

    @include('layout/header')

    <div id="ea_ba">
        <div id="products_banner" class="products_banner">
            <div class="products_banner_m">
                <img  src="../img/NewsAndView.jpg" alt="" />
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
                            <span id=''>
                                <a href="{{ route('news-list', ['category_id' => 1]) }}" target="_self">资讯</a>
                            </span>
                        </span>
                        <span class="n_r_wz5">-</span>
                        <span class="n_r_wz6">
                            <a href="" class="curr1">
                                @if($news->category == 1)
                                    机构动态
                                    @elseif($news->category == 2)
                                    项目报道
                                    @elseif($news->category == 3)
                                    乡建观察
                                    @else
                                    最新动态
                                    @endif
                            </a>
                        </span>
                    </li>
                    <li>
                        <img src="https://1.rc.xiniu.com/rc/Contents/47175/Images/icpsp1_n_right_wz.png" alt="" />
                    </li>
                </ul>

            </div>
            <div class="n_content" >
                <div class="n_content_left" >
                    <div id="news_view_head" class="news_view_head">
                        <div class="news_view_title">
                            <h1>
                                <span id='ShoveWebControl_Text2'>{{ $news->title }}</span>
                            </h1>
                        </div>
                        <div class="news_view_date">
                            <span id='ShoveWebControl_Text3'>{{ $news->time }}</span>
                        </div>
                    </div>
                    <div id="xn_c_newsv_22_wrap" class="xn_c_newsv_22_wrap"     >
                        <div class="xn_c_newsv_22_box">
                            <a href="{{ route('news-list', ['category_id' => $news->category]) }}">
                                <span name="_newsv_22_nsmore">返回列表</span>
                            </a>
                        </div>
                    </div>
                    <div class="xn_c_soluv_left" id="xn_c_soluv_left" >
                        <div class="xn_c_soluv_left_top">
                            <span name="_soluv_left_top">相关内容</span>
                        </div>
                        {{--<div id="xn_c_22_wrap" class="xn_c_22_wrap">--}}
                            {{--<div class="xn_c_22_wbox">--}}
                                {{--<div class="xn_c_22_key">--}}
                                    {{--<a href="search.aspx-key=%E5%A4%A7%E8%AE%BE%E8%AE%A1.html">--}}
                                        {{--大设计--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<div class="xn_c_22_key">--}}
                                    {{--<a href="search.aspx-key=%E5%9F%8E%E5%B8%82%E8%BF%90%E8%90%A5.html">--}}
                                        {{--城市运营--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="clear"></div>--}}
                        {{--</div>--}}
                        <div id="xn_c_newsv_9_wrap" class="xn_c_newsv_9_wrap">
                            <div class="xn_c_newsv_9_wbox">
                                <div class="xn_c_newsv_9_cocnt">
                                    @foreach($lists as $item)
                                    <div class="xn_c_newsv_9_li">
                                        <div class="xn_c_newsv_9_cocntlft">
                                            <a title='艺乡建' href="{{ route('news.show', ['id' => $item->id]) }}" target="_blank">
                                                <img  data-original='{{ config('filesystems.disks.oss.cdnDomain') . '/' . $item->cover }}' alt='艺乡建' title='艺乡建' />
                                            </a>
                                        </div>
                                        <div class="xn_c_newsv_9_cocntrit">
                                            <div class="xn_c_newsv_9_cocntrit_name">
                                                <a title='艺乡建' href="NewsStd_506.html" target="_blank">
                                                    {{ $item->title }}
                                                </a>
                                            </div>
                                            <div class="xn_c_newsv_9_cocntrit_cont" ej="edit_span">
                                                <span id='xn_c_newsv_9_Data_ctl00_xn_c_newsv_9_Text4'>
                                                    {!! $item->content !!}
                                                </span>
                                            </div>
                                            <div class="xn_c_newsv_9_cocntrit_more">
                                                <a href="{{ route('news.show', ['id' => $item->id]) }}" target="_blank">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="n_content_right" >
                    <div class="n_content_right_name" >
                    </div>
                    <div class="n_content_right_m" >
                        <div id="news_view" class="news_view">
                            {!! $news->content !!}
                            <div class="news_view_cle1"></div>
                        </div>
                        {{--<div id="news_view_sx" class="news_view_sx">--}}
                            {{--<div id="EIMS_C_3_1_ShowInfo" style="COLOR: red"></div>--}}
                            {{--<div id="EIMS_C_3_1_box_div">--}}
                                {{--<span id="EIMS_C_3_1_Upli" class="EIMS_C_3_1_page">--}}
                                    {{--<a href="NewsStd_499.html" id="EIMS_C_3_1_Up">上一篇：<span id="EIMS_C_3_1_UpNew">光合资讯 | 光合集团——塑造城市生命力</span>--}}
                                    {{--</a>--}}
                                {{--</span>--}}
                                {{--<span id="EIMS_C_3_1_Downli" class="EIMS_C_3_1_page">--}}
                                    {{--<a href="NewsStd_497.html" id="EIMS_C_3_1_Down">下一篇：<span id="EIMS_C_3_1_DownNew">光合资讯 | 风里雨里我在世界水城等你</span>--}}
                                    {{--</a>--}}
                                {{--</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="news_view_foot" >
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>

    @include('layout/footer')
   </form>

{{--导航半透明--}}
<script type="text/javascript" src="https://0.rc.xiniu.com/g2/M00/02/72/CgAGe1wjF9eAejYeAABCcl7PcJM7884.js?d=28164619591" id="js__index"></script>
</body>
</html>


