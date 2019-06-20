<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<html lang="zh-cn" xmlns="http://www.w3.org/1999/xhtml">
<head><meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /><meta name="HandheldFriendly" content="true" /><meta http-equiv="x-rim-auto-match" content="none" /><meta name="format-detection" content="telephone=no" />
    <title>
        艺乡建
    </title>
    <meta name="applicable-device" content="mobile">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <link id="css__news" rel="stylesheet" type="text/css" href="https://0.rc.xiniu.com/g2/M00/F6/F6/CgAGfFvrosiABY8LAAAl_-7bYgY686.css?d=08202509903" />
    <link id="css__products" rel="stylesheet" type="text/css" href="https://0.rc.xiniu.com/g2/M00/EC/88/CgAGe1vs85KAOuejAAAtVfnVNlc395.css?d=08202509793" />
    <link rel="stylesheet" type="text/css" href="../../css/font.css">

    <link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/verify.css">
    {{--<script type="text/javascript" src="/js/jquery.min.js"></script>--}}


    <script type="text/javascript">var _jtime=new Date();function jqload(){window.jLoad=new Date()-_jtime;}function jqerror(){window.jLoad=-1;}</script>
    <script type="text/javascript" src="https://1.rc.xiniu.com/js/jq/jquery-2.min.js" onload="jqload()" onerror="jqerror()" id="jquery"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://1.rc.xiniu.com/js/pb/2/Public.js"></script>
    <script type="text/javascript" src="https://1.rc.xiniu.com/js/pb/flexible.js"></script>
    <script type="text/javascript" src="/js/verify.js" ></script>
    <style>
        ul li {
            color: rgb(127, 127, 127); font-size: 12px;
            line-height: 2em;
        }
    </style>
</head>
<body class="news_body">
{{--<form name="form1" method="get" action="#" id="form1" NavigateId="2" Page="/m/news.aspx?fid=t2:4:2&amp;TypeId=4">--}}
    {{--<input type="hidden" name="__VIEWSTATE" id="--}}
{{--__VIEWSTATE" value="" />--}}

    @include('layout/header')
    <div id="ea_n"></div>

    <div id="ea_ba">
        <div class="about_banner" id="about_banner"     >
            <div class="about_banner_m">
                <img data-original="/img/Exmple.jpg" alt="" />
            </div>
        </div>
    </div>

    <div id="ea_c">
        <div class="n_main" >
            @if (session('success'))
                <br>
                <div class="container">
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <br>

            @elseif(session('fail'))
                <div class="container">
                    <div class="alert alert-warning" role="alert">
                        {{ session('fail') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <br>
        @endif

        <!--加粗的一级标题-->
            <div id="n_content_left_t" class="n_content_left_t">
                <div id="n_content_left_t1" class="n_content_left_t1">
                    <span id='n_content_left_t_data'>培训报名</span>
                </div>
                <div class="n_content_left_t2">
                    <span id='n_content_left_t_data2'>Registration training</span>
                </div>
            </div>

            <div id="xn_c_products_2_warp" class="xn_c_products_2_warp">
                <div class="xn_c_products_2_text">
                    <form method="POST" action="{{ route('projects.register.store') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">姓名</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">公司</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="company" name="company">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tel" class="col-sm-2 col-form-label">电话</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="tel" name="phone" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tel" class="col-sm-2 col-form-label">验证码</label>
                            <div class="col-sm-7 col-form-label">
                                <!-- <div id="demo2"></div>-->
                                <div id="demo1"></div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <div class="col-sm-10 text-center">
                                <button type="submit" class="btn btn-primary ">提交报名信息</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('layout/footer')

    <div id="ea_sh"></div>
    <div id="ea_mu"></div>

    <input type="hidden" id="pageId" value="113" />

    <script type="text/javascript" src="/js/projects.js" id="js__news"></script>

    <script type="text/javascript" src="https://0.rc.xiniu.com/g2/M00/02/72/CgAGe1wjF9eAejYeAABCcl7PcJM7884.js?d=28164619591" id="js__index"></script>


    <script>
        console.log("控制台输出");
        $('#demo1').slideVerify({
            type : 1,		//类型
            vOffset : 5,	//误差量，根据需求自行调整
            barSize : {
                width : '80%',
                height : '40px',
            },
            ready : function() {
            },
            success : function() {
                //......后续操作
            },
            error : function() {
                //alert('验证失败！');
            }
        });
    </script>

    <script type='text/javascript'>!function(){var e,f,a=new Date,b=null,c=function(){var a,c,d,e,g,h,i,j;b&&clearTimeout(b),a=document.location.href,c='',c=/\.html|.htm/.test(document.location.href)?document.forms[0].getAttribute('Page'):'',d=window.document.referrer,e='/admin/access/load.ashx?req='+f(a),c&&(e+='&f='+f(c)),g=f(d),e+='&ref='+g+'&sw='+screen.width+'&sh='+screen.height,e+='&cs='+(window.jLoad?window.jLoad:-1),e+='&_t='+Math.random(),h='',i='https:'==document.location.protocol?!0:!1,h=i?'https://':'http://',e+='&ht='+f(h+document.domain),$?$.getScript(e):(j=document.createElement('script'),j.src=e,document.body.appendChild(j))},d=function(){window.acessFinish=new Date-a};window.addEventListener?window.addEventListener('load',d):window.attachEvent&&window.attachEvent('onload',d),b=setTimeout(c,3e3),e=null,f=function(a){var b,c,d,f,g;if(!a)return a;if(!e){for(e={},b=0;10>b;b++)e[String.fromCharCode(97+b)]='0'+b.toString();for(b=10;26>b;b++)e[String.fromCharCode(97+b)]=b.toString()}for(c='',d='',f='',g=a.length,b=0;g>b;b++)d=a.charAt(b),f=e[d],c+=f?'x'+f:d;return encodeURIComponent(c).replace(/%/g,'x50').replace(/\./g,'x51')}}();</script><script type='text/javascript'>!function(){var c,a=document.createElement('script'),b=window.location.protocol.split(':')[0];a.src='/https'===b?'https://zz.bdstatic.com/linksubmit/push.js':'http://push.zhanzhang.baidu.com/push.js',c=document.getElementsByTagName('script')[0],c.parentNode.insertBefore(a,c)}();</script>
{{--</form>--}}
</body>
</html>
