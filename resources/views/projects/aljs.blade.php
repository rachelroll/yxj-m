
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>案例检索</title>
    {{--<meta name="copyright" content="Copyright ©2014 创绿家 阿拉善 Inc. All Rights Reserved" />--}}
    <link href="../css/reset.css" rel="stylesheet" media="all" />
    <link href="../css/idangerous.swiper.css" rel="stylesheet" media="all" />
    <link href="../css/layout.css" rel="stylesheet" media="all" />

    <!--首页使用的css文件-->
    <link id="css__index" rel="stylesheet" type="text/css" href="https://0.rc.xiniu.com/g2/M00/FA/BD/CgAGe1wQpieAPhvRAABHB2LIsYA056.css?d=28164619544" />
    <!--一级目录//二级目录 用的css文件-->  <!--可以把相应的css样式拿出来-->
    <link id="css__about" rel="stylesheet" type="text/css" href="https://0.rc.xiniu.com/g2/M00/FB/C1/CgAGe1wTCzOAUKBOAAAhW5-s3D0032.css?d=28164628904" />

    <!--生态合伙人对应的css  用起来标题和文字间隔大-->
    <link id="css__products" rel="stylesheet" type="text/css" href="https://0.rc.xiniu.com/g2/M00/FB/C1/CgAGe1wTCzqAenvTAAAhfnKekwc302.css?d=28164649649" />
    <link rel="bookmark" href="Images/logo.ico" />
    <link rel="shortcut icon" href="Images/logo.ico" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script type="text/javascript">var _jtime=new Date();function jqload(){window.jLoad=new Date()-_jtime;}function jqerror(){window.jLoad=-1;}</script>
    <script type="text/javascript" src="https://1.rc.xiniu.com/js/jq/jqueryV173.js" onload="jqload()" onerror="jqerror()" id="jquery"></script>
    <script type="text/javascript" src="https://1.rc.xiniu.com/js/pb/2/Public.js"></script>
    <script type="text/javascript" src="https://1.rc.xiniu.com/js/tl/swfobject_modified.js"></script>
    <script type="text/javascript" src="https://1.rc.xiniu.com/js/tl/swfobject.js"></script>

    <script src="../js/jquery.min.js"></script>
    <script src="../js/jquery.migrate.min.js"></script>
    <script src="../js/idangerous.swiper.min.js"></script>
    <script src="../js/common.js"></script>
</head>
<body id="body4_1" class="body4">
{{--<form name="form1" method="post" action="greenmap.aspx.html" id="form1">--}}
    {{--<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="VbMn/SQdnqVj8Sob4kJEcDyquwwwm9WSqqnYkXcv7z4VB1pBStCyaJkloHho8PddEc7tINVyN+Tf1S57SNXZ5r4swnFrGEg+S79Sz+PPWFg=" />--}}

    {{--<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="7A372729" />--}}
    {{--<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="kSLdb5/l9Gf5YAZCSNPn7sa0oRB6iSKRhaluDDXSb0KqXNYjsHhnhqBaV/YUJypXlnLYeT76b8awceq+HJH55sMdIYk9Ewpr52n8rnhJYPTmpngPzIRKLvvQellE/gduX/AHIVadd6sgg5FDYPLtBW4OBjzOL2j7XKfiXAY+eb/TO13U6Kptm8+UD4/GNvCTOyDbO9ZGbQ980ywPPRLRXTOOyF7M1mjRxaci/wcOjvqBPwu6tLdz9M6nAAHzs3cApQLEwnD1mwIjxf/F0exV8ZXkOhAlz84L4r8S9IcNkNdis72xemHxr/vJMIRK2p6G" />--}}

    @include('layout/header')

    <div id="ea_ba">
        <div id="products_banner" class="products_banner">
            <div class="products_banner_m">
                <img  src="../img/Research.jpg"alt="" />
            </div>
        </div>
    </div>

    <!-- index-body start -->
    <div class="plan-body" id="ea_c">
        <div class="w1080 green-content n_main">
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
                                <a href="{{ route('projects.index', ['category_id' => 1]) }}" target="_self">执行案例</a>
                            </span>
                        </span>
                        <span class="n_r_wz5">-</span>
                        <span class="n_r_wz6">
                            <a href="" class="curr1">案例检索</a>
                        </span>
                    </li>
                    <li>
                        <img src="https://1.rc.xiniu.com/rc/Contents/47175/Images/icpsp1_n_right_wz.png" alt="" />
                    </li>
                </ul>
            </div>
            <div class="green-map-body clearfix">
                <div class="float-right"  style="border-left: 1px solid #787B88">
                    <div class="h2">案例检索</div>

                    <form class="form-inline my-2 my-lg-0" action="{{ route('projects.search') }}" method="POST">
                        @csrf
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="width: 140px; float: left" name="search_item">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">搜索</button>
                    </form>
                    <div class="clearfix"></div>
                    <div class="yiti-search clearfix" style="border-top: 2px solid #7F7F7F; margin-top: 20px">
                        <div class="h20"></div>
                        <a href="{{ route('projects.index', ['category_id' => 1]) }}" class="yiti-style1 yiti-style">概念规划</a>
                        <a href="{{ route('projects.index', ['category_id' => 2]) }}" class="yiti-style2 yiti-style">总体规划</a>
                        <a href="{{ route('projects.index', ['category_id' => 3]) }}" class="yiti-style3 yiti-style">详细规划</a>
                        <a href="{{ route('projects.index', ['category_id' => 21]) }}" class="yiti-style6 yiti-style">资产管理</a>
                        <a href="{{ route('projects.index', ['category_id' => 5]) }}l" class="yiti-style1 yiti-style">品牌规划</a>
                        <a href="{{ route('projects.index', ['category_id' => 20]) }}l" class="yiti-style3 yiti-style">投资开发</a>
                        <a href="{{ route('projects.index', ['category_id' => 6]) }}" class="yiti-style2 yiti-style">产业振兴</a>
                        <a href="{{ route('projects.index', ['category_id' => 15]) }}" class="yiti-style4 yiti-style">乡建人才</a>
                        <a href="{{ route('projects.index', ['category_id' => 16]) }}" class="yiti-style3 yiti-style">乡建生态</a>
                        <a href="{{ route('projects.index', ['category_id' => 4]) }}" class="yiti-style6 yiti-style">乡振计划</a>
                        <a href="{{ route('projects.index', ['category_id' => 17]) }}" class="yiti-style4 yiti-style">文化振兴</a>
                        <a href="{{ route('projects.index', ['category_id' => 18]) }}" class="yiti-style5 yiti-style">乡村经营</a>
                        <a href="{{ route('projects.index', ['category_id' => 19]) }}" class="yiti-style3 yiti-style">产业植入</a>
                    </div>
                </div>
                <div class="float-left">
                    <div class="h2">区域划分</div>
                    <div class="map-img">
                        <div class="map-img1 map-main" data-nums="{{ in_array(8, $index)? $counted[8]: 0 }}" data-cnname="黑龙江" data-name="heilongjiang" data-id="1" data-link="{{ route('projects.district', ['id' => 8]) }}">
                        </div>
                        <div class="map-img2 map-main" data-nums="{{ in_array(7, $index)? $counted[7]: 0 }}" data-cnname="吉林" data-name="jilin" data-id="2" data-link="{{ route('projects.district', ['id' => 7]) }}">
                        </div>
                        <div class="map-img3 map-main" data-nums="{{ in_array(6, $index)? $counted[6]: 0 }}" data-cnname="辽宁" data-name="liaoning" data-id="3" data-link="{{ route('projects.district', ['id' => 6]) }}">
                        </div>
                        <div class="map-img4 map-main" data-nums="{{ in_array(5, $index)? $counted[5]: 0 }}" data-cnname="内蒙" data-name="neimeng" data-id="4" data-link="{{ route('projects.district', ['id' => 5]) }}">
                        </div>
                        <div class="map-img5 map-main" data-nums="{{ in_array(31, $index)? $counted[31]: 0 }}" data-cnname="新疆" data-name="xinjiang" data-id="5" data-link="{{ route('projects.district', ['id' => 31]) }}">
                        </div>
                        <div class="map-img6 map-main" data-nums="{{ in_array(26, $index)? $counted[26]: 0 }}" data-cnname="西藏" data-name="xizang" data-id="6" data-link="{{ route('projects.district', ['id' => 26]) }}">
                        </div>
                        <div class="map-img7 map-main" data-nums="{{ in_array(29, $index)? $counted[29]: 0 }}" data-cnname="青海" data-name="qinghai" data-id="7" data-link="{{ route('projects.district', ['id' => 29]) }}">
                        </div>
                        <div class="map-img9 map-main" data-nums="{{ in_array(28, $index)? $counted[28]: 0 }}" data-cnname="甘肃" data-name="gansu" data-id="9" data-link="{{ route('projects.district', ['id' => 28]) }}">
                        </div>
                        <div class="map-img10 map-main" data-nums="{{ in_array(23, $index)? $counted[23]: 0 }}" data-cnname="四川" data-name="sichuan" data-id="10" data-link="{{ route('projects.district', ['id' => 23]) }}">
                        </div>
                        <div class="map-img11 map-main" data-nums="{{ in_array(27, $index)? $counted[27]: 0 }}" data-cnname="陕西" data-name="shanxi1" data-id="11" data-link="{{ route('projects.district', ['id' => 27]) }}">
                        </div>
                        <div class="map-img12 map-main" data-nums="{{ in_array(4, $index)? $counted[4]: 0 }}" data-cnname="山西" data-name="shanxi2" data-id="12" data-link="{{ route('projects.district', ['id' => 4]) }}">
                        </div>
                        <div class="map-img13 map-main" data-nums="{{ in_array(25, $index)? $counted[25]: 0 }}" data-cnname="云南" data-name="yunnan" data-id="13" data-link="{{ route('projects.district', ['id' => 25]) }}">
                        </div>
                        <div class="map-img14 map-main" data-nums="{{ in_array(24, $index)? $counted[24]: 0 }}" data-cnname="贵州" data-name="guizhou" data-id="14" data-link="{{ route('projects.district', ['id' => 24]) }}">
                        </div>
                        <div class="map-img15 map-main" data-nums="{{ in_array(22, $index)? $counted[22]: 0 }}" data-cnname="重庆" data-name="chongqing" data-id="15" data-link="{{ route('projects.district', ['id' => 22]) }}">
                        </div>
                        <div class="map-img8 map-main" data-nums="{{ in_array(30, $index)? $counted[30]: 0 }}" data-cnname="宁夏" data-name="ningxia" data-id="30" data-link="{{ route('projects.district', ['id' => 30]) }}">
                        </div>
                        <div class="map-img16 map-main" data-nums="{{ in_array(16, $index)? $counted[16]: 0 }}" data-cnname="河南" data-name="henan" data-id="16" data-link="{{ route('projects.district', ['id' => 16]) }}">
                        </div>
                        <div class="map-img17 map-main" data-nums="{{ in_array(15, $index)? $counted[15]: 0 }}" data-cnname="山东" data-name="shandong" data-id="17" data-link="{{ route('projects.district', ['id' => 15]) }}">
                        </div>
                        <div class="map-img18 map-main" data-nums="{{ in_array(17, $index)? $counted[17]: 0 }}" data-cnname="湖北" data-name="hubei" data-id="117" data-link="{{ route('projects.district', ['id' => 17]) }}">
                        </div>
                        <div class="map-img19 map-main" data-nums="{{ in_array(12, $index)? $counted[12]: 0 }}" data-cnname="安徽" data-name="anhui" data-id="19" data-link="{{ route('projects.district', ['id' => 12]) }}">
                        </div>
                        <div class="map-img20 map-main" data-nums="{{ in_array(10, $index)? $counted[10]: 0 }}" data-cnname="江苏" data-name="jiangsu" data-id="20" data-link="{{ route('projects.district', ['id' => 10]) }}">
                        </div>
                        <div class="map-img21 map-main" data-nums="{{ in_array(20, $index)? $counted[20]: 0 }}" data-cnname="广西" data-name="guangxi" data-id="21" data-link="{{ route('projects.district', ['id' => 20]) }}">
                        </div>
                        <div class="map-img22 map-main" data-nums="{{ in_array(18, $index)? $counted[18]: 0 }}" data-cnname="湖南" data-name="hunan" data-id="22" data-link="{{ route('projects.district', ['id' => 18]) }}">
                        </div>
                        <div class="map-img23 map-main" data-nums="{{ in_array(14, $index)? $counted[14]: 0 }}" data-cnname="江西" data-name="jiangxi" data-id="23" data-link="{{ route('projects.district', ['id' => 14]) }}">
                        </div>
                        <div class="map-img24 map-main" data-nums="{{ in_array(11, $index)? $counted[11]: 0 }}" data-cnname="浙江" data-name="zhejiang" data-id="24" data-link="{{ route('projects.district', ['id' => 11]) }}">
                        </div>
                        <div class="map-img25 map-main" data-nums="{{ in_array(13, $index)? $counted[13]: 0 }}" data-cnname="福建" data-name="fujian" data-id="25" data-link="{{ route('projects.district', ['id' => 13]) }}">
                        </div>
                        <div class="map-img26 map-main" data-nums="{{ in_array(19, $index)? $counted[19]: 0 }}" data-cnname="广东" data-name="guangdong" data-id="26" data-link="{{ route('projects.district', ['id' => 19]) }}">
                        </div>
                        <div class="map-img27 map-main" data-nums="{{ in_array(21, $index)? $counted[21]: 0 }}" data-cnname="海南" data-name="hainan" data-id="27" data-link="{{ route('projects.district', ['id' => 21]) }}">
                        </div>
                        <div class="map-img28 map-main" data-nums="{{ in_array(34, $index)? $counted[34]: 0 }}" data-cnname="台湾" data-name="taiwan" data-id="234" data-link="{{ route('projects.district', ['id' => 34]) }}">
                        </div>
                        <div class="map-img29 map-main" data-nums="{{ in_array(3, $index)? $counted[3]: 0 }}" data-cnname="河北" data-name="hebei" data-id="29" data-link="{{ route('projects.district', ['id' => 3]) }}">
                        </div>
                        <div class="map-img30 map-main" data-nums="{{ in_array(1, $index)? $counted[1]: 0 }}" data-cnname="北京" data-name="beijing" data-id="30" data-link="{{ route('projects.district', ['id' => 1]) }}">
                        </div>
                        <div class="map-img31 map-main" data-nums="{{ in_array(2, $index)? $counted[2]: 0 }}" data-cnname="天津" data-name="tianjin" data-id="31" data-link="{{ route('projects.district', ['id' => 2]) }}">
                        </div>
                        <div class="map-img32 map-main" data-nums="{{ in_array(9, $index)? $counted[9]: 0 }}" data-cnname="上海" data-name="shanghai" data-id="32" data-link="{{ route('projects.district', ['id' => 9]) }}">
                        </div>
                        <div class="map-img33 map-main" data-nums="{{ in_array(33, $index)? $counted[33]: 0 }}" data-cnname="澳门" data-name="aomen" data-id="32" data-link="{{ route('projects.district', ['id' => 33]) }}">
                        </div>
                        <div class="map-img34 map-main" data-nums="{{ in_array(32, $index)? $counted[32]: 0 }}" data-cnname="香港" data-name="xianggang" data-id="33" data-link="{{ route('projects.district', ['id' => 32]) }}">
                        </div>
                    </div>

                    <div id="mapDisBody" class="map-dis-body">
                        <div class="h3">黑贝</div>
                        <div class="con">
                            此地区包含 56 个案例
                        </div>
                        <div id="closeBtn" class="close-btn"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- index-body end -->

    <div class="h80"></div>

    <div style="display: none;">
        <script type="text/javascript">
            var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
            document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F8f52314de540d0d7003cbff49f0a0a9c' type='text/javascript'%3E%3C/script%3E"));
        </script>

        <script language="javascript" type="text/javascript" src="http://js.users.51.la/5739396.js"></script>
        <noscript>
            <a href="http://www.51.la/?5739396" target="_blank">
                <img alt="&#x6211;&#x8981;&#x5566;&#x514D;&#x8D39;&#x7EDF;&#x8BA1;" src="http://img.users.51.la/5739396.asp" style="border: none" /></a>
        </noscript>
        <script type="text/javascript" src="https://0.rc.xiniu.com/g2/M00/02/72/CgAGe1wjF9eAejYeAABCcl7PcJM7884.js?d=28164619591" id="js__index"></script>
    </div>
{{--</form>--}}

<!--页尾--><!--联系方式-->
@include('layout/footer')
</body>
</html>
