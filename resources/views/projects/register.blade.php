@extends('layout/layout')
@section('title')
    <title>
        艺乡建培训
    </title>
@endsection

@section('content')

    <link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/verify.css">
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/verify.js" ></script>

    <div id="ea_ba">
        <div id="products_banner" class="products_banner">
            <div class="products_banner_m">
                <img  src="/img/Exmple.jpg" alt="" />
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
                                                <a href="{{ route('projects.index', ['category_id' => 1]) }}" target="_self">执行案例</a>
                                            </span>
                                        </span>
                        <span class="n_r_wz5">-</span>
                        <span class="n_r_wz6">
                                            <a href="{{ route('projects.register') }}" class="curr1">培训报名</a>
                                        </span>
                    </li>
                    <li>
                        <img src="https://1.rc.xiniu.com/rc/Contents/47175/Images/icpsp1_n_right_wz.png" alt="" />
                    </li>
                </ul>
            </div>

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
                        <div class="col-sm-10 text-center" style="position: relative ;left:100px">
                            <button type="submit" class="btn btn-primary ">提交报名信息</button>
                        </div>
                    </div>
                </form>
            </div>
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

@endsection

