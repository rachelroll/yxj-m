@extends('layout/layout')
@section('title')
    <title>
        艺乡建年鉴
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
                                            <span id='ShoveWebControl_Text_about'><a href="{{ route('aboutUs') }}">研究中心</a></span>
                                        </span>
                        <span class="n_r_wz5">-</span>
                        <span class="n_r_wz6">
                                            <a href="#" class="curr1">艺乡建年鉴</a>
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
                    <span id='n_content_left_t_data'>艺乡建年鉴</span>
                </div>
                <div class="n_content_left_t2">
                    <span id='n_content_left_t_data2'>YXJ Yearbooks</span>
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

                    <div id="xn_c_down_15_ndown_lb" class="xn_c_down_15_ndown_lb">


                        <div class="xn_c_down_15_ndown_lb_m">
                            <div class="xn_c_down_15_ndown_lb_img">
                                <img data-original='https://0.rc.xiniu.com/g2/M00/03/BD/CgAGfFwNwb6AB_UBAAHcxEfSgZQ553.jpg' alt='光合生态手册' title='光合生态手册' />
                                <div class="xn_c_down_15_bg">
                                    <a href='Private/Files/98a9511c63574c6081f213d9baaf26a1.pdf' target="_blank">
                                    </a>
                                </div>
                            </div>
                            <div class="xn_c_down_15_ndown_lb_title">
                                光合生态手册
                            </div>
                            <div class="xn_c_down_15_ndown_lb_xq">
                                <a href='Private/Files/98a9511c63574c6081f213d9baaf26a1.pdf' target="_blank">

                                    <span name="_15_ndown_lb_xq">下载</span>

                                </a>
                            </div>
                        </div>


                        <div class="xn_c_down_15_ndown_lb_m">
                            <div class="xn_c_down_15_ndown_lb_img">
                                <img data-original='https://0.rc.xiniu.com/g2/M00/1B/B1/CgAGfFxiHfuAIF-SAAGJnCo-qQw351.png' alt='光合2018年鉴-明德至善' title='光合2018年鉴-明德至善' />
                                <div class="xn_c_down_15_bg">
                                    <a href='Private/Files/aa17712c7adf488eb5a9c982b89b0c58.pdf' target="_blank">
                                    </a>
                                </div>
                            </div>
                            <div class="xn_c_down_15_ndown_lb_title">
                                光合2018年鉴-明德至善
                            </div>
                            <div class="xn_c_down_15_ndown_lb_xq">
                                <a href='Private/Files/aa17712c7adf488eb5a9c982b89b0c58.pdf' target="_blank">

                                    <span name="_15_ndown_lb_xq">下载</span>

                                </a>
                            </div>
                        </div>


                        <div class="xn_c_down_15_ndown_lb_m">
                            <div class="xn_c_down_15_ndown_lb_img">
                                <img data-original='https://0.rc.xiniu.com/g2/M00/DE/28/CgAGe1vIKVCAG5tHAAFDh_1OLo4407.jpg' alt='光合2017年鉴-格物正心' title='光合2017年鉴-格物正心' />
                                <div class="xn_c_down_15_bg">
                                    <a href='Private/Files/7eb2bd48cd3c44978e91aaa98192da19.pdf' target="_blank">
                                    </a>
                                </div>
                            </div>
                            <div class="xn_c_down_15_ndown_lb_title">
                                光合2017年鉴-格物正心
                            </div>
                            <div class="xn_c_down_15_ndown_lb_xq">
                                <a href='Private/Files/7eb2bd48cd3c44978e91aaa98192da19.pdf' target="_blank">

                                    <span name="_15_ndown_lb_xq">下载</span>

                                </a>
                            </div>
                        </div>


                        <div class="xn_c_down_15_ndown_lb_m">
                            <div class="xn_c_down_15_ndown_lb_img">
                                <img data-original='https://0.rc.xiniu.com/g2/M00/DE/29/CgAGe1vIKlGAZMBZAAFNRr2Lm_o521.jpg' alt='光合2016年鉴-天地合德' title='光合2016年鉴-天地合德' />
                                <div class="xn_c_down_15_bg">
                                    <a href='Private/Files/5b15b6de73204469ab69353c7eae8aba.pdf' target="_blank">
                                    </a>
                                </div>
                            </div>
                            <div class="xn_c_down_15_ndown_lb_title">
                                光合2016年鉴-天地合德
                            </div>
                            <div class="xn_c_down_15_ndown_lb_xq">
                                <a href='Private/Files/5b15b6de73204469ab69353c7eae8aba.pdf' target="_blank">

                                    <span name="_15_ndown_lb_xq">下载</span>

                                </a>
                            </div>
                        </div>


                        <div class="xn_c_down_15_ndown_lb_m">
                            <div class="xn_c_down_15_ndown_lb_img">
                                <img data-original='https://0.rc.xiniu.com/g2/M00/DE/77/CgAGe1vIhQ-AItBxAAFNQkbv1wc666.jpg' alt='光合2015年鉴-诚明致知' title='光合2015年鉴-诚明致知' />
                                <div class="xn_c_down_15_bg">
                                    <a href='Private/Files/8d25819af2304939ac78a473c300ec87.pdf' target="_blank">
                                    </a>
                                </div>
                            </div>
                            <div class="xn_c_down_15_ndown_lb_title">
                                光合2015年鉴-诚明致知
                            </div>
                            <div class="xn_c_down_15_ndown_lb_xq">
                                <a href='Private/Files/8d25819af2304939ac78a473c300ec87.pdf' target="_blank">

                                    <span name="_15_ndown_lb_xq">下载</span>

                                </a>
                            </div>
                        </div>




                    </div></div>


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

        <a style='display:none' href='http://m.ps-cc.com/m'>进入手机网站</a>

        <!--首页留着的html-->
        <!-- <script type='text/javascript'>!function(){var e,f,a=new Date,b=null,c=function(){var a,c,d,e,g,h,i,j;b&&clearTimeout(b),a=document.location.href,c='',c=/\.html|.htm/.test(document.location.href)?document.forms[0].getAttribute('Page'):'',d=window.document.referrer,e='/admin/access/load.ashx?req='+f(a),c&&(e+='&f='+f(c)),g=f(d),e+='&ref='+g+'&sw='+screen.width+'&sh='+screen.height,e+='&cs='+(window.jLoad?window.jLoad:-1),e+='&_t='+Math.random(),h='',i='https:'==document.location.protocol?!0:!1,h=i?'https://':'http://',e+='&ht='+f(h+document.domain),$?$.getScript(e):(j=document.createElement('script'),j.src=e,document.body.appendChild(j))},d=function(){window.acessFinish=new Date-a};window.addEventListener?window.addEventListener('load',d):window.attachEvent&&window.attachEvent('onload',d),b=setTimeout(c,3e3),e=null,f=function(a){var b,c,d,f,g;if(!a)return a;if(!e){for(e={},b=0;10>b;b++)e[String.fromCharCode(97+b)]='0'+b.toString();for(b=10;26>b;b++)e[String.fromCharCode(97+b)]=b.toString()}for(c='',d='',f='',g=a.length,b=0;g>b;b++)d=a.charAt(b),f=e[d],c+=f?'x'+f:d;return encodeURIComponent(c).replace(/%/g,'x50').replace(/\./g,'x51')}}();</script><script type='text/javascript'>!function(){var c,a=document.createElement('script'),b=window.location.protocol.split(':')[0];a.src='/https'===b?'https://zz.bdstatic.com/linksubmit/push.js':'http://push.zhanzhang.baidu.com/push.js',c=document.getElementsByTagName('script')[0],c.parentNode.insertBefore(a,c)}();</script>



@endsection
