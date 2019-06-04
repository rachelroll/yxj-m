@extends('layout/layout')
@section('title')
    <title>
        资讯
    </title>
@endsection
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
    .page-item.active .page-link {
        background-color: grey;
        border-color: grey;
    }

    .page-link {
        color: grey;
    }
</style>
@section('content')
    <div id="ea_ba">
        <div id="products_banner" class="products_banner">
            <div class="products_banner_m">
                <img  src="../../img/NewsAndView.jpg" alt="" />
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
                                <a href="{{ route('news-list', ['category_id' => 1]) }}" target="_self">资讯</a>
                            </span>
                        </span>
                        <span class="n_r_wz5">-</span>
                        <span class="n_r_wz6">
                            <a href="" class="curr1">
                                @if($category_id == 1)
                                    机构动态
                                    @elseif($category_id == 2)
                                    项目报道
                                    @elseif($category_id == 3)
                                    乡建观察
                                    @else
                                    合作方资讯
                                    @endif
                            </a>
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
                        <li id="left_typeLi_t400_1" data_id="4_30" class="left_menu1" type="t" index=1 level=0><a href="{{ route('news-list', ['category_id' => 1]) }}" target="_self"><span name="ShoveWebControl_VMenu21051382564|T_NewsTypes|Id|30|Name">机构动态</span></a></li>
                        <li id="left_typeLi_t400_2" data_id="4_140" class="left_menu1" type="t" index=2 level=0><a href="{{route('news-list', ['category_id' => 2])}}" target="_self"><span name="ShoveWebControl_VMenu21689490442|T_NewsTypes|Id|140|Name">项目报道</span></a></li>
                        <li id="left_typeLi_t400_1" data_id="4_30" class="left_menu1" type="t" index=5 level=0><a href="{{route('news-list', ['category_id' => 3])}}" target="_self"><span name="ShoveWebControl_VMenu21051382564|T_NewsTypes|Id|30|Name">乡建观察</span></a></li>
                        <li id="left_typeLi_t400_2" data_id="4_140" class="left_menu1" type="t" index=6 level=0><a href="{{route('news-list', ['category_id' => 4])}}" target="_self"><span name="ShoveWebControl_VMenu21689490442|T_NewsTypes|Id|140|Name">最新动态</span></a>
                        </li>
                    </ul>
                </ul>
            </div>
            <!--列表页面-->
            <!--简单的列表版式-->
            <div id="nnews_lb" class="nnews_lb">
                @foreach($news as $item)
                <div class="nnews_lb_m">
                    <div class="nnews_lb_img">
                        <a href="{{ route('news.show', ['id' => $item->id]) }}" target="_blank">
                            <img  data-original='{{ config('filesystems.disks.oss.cdnDomain') . '/' . $item->cover }}' alt='艺乡建' />
                        </a>
                    </div>
                    <div class="nnews_lb_mdbox">
                        <div class="nnews_lb_title">
                            <a title='{{ $item->title }}' href="{{ route('news.show', ['id' => $item->id]) }}" target="_blank">
                                <span name="snnews_lb_tt1506|T_News|Id|506|Title">{{ $item->title }}</span>
                            </a>
                        </div>
                        <div class="nnews_lb_cnt" ej="edit_span">
                            <span id='nnews_lb1_ctl00_ShoveWebControl_Text4'>{{ $item->content }}</span>
                        </div>
                    </div>
                    <div class="nnews_lb_rtbox">
                        <div class="nnews_lb_date">
                            <span class="nnews_lb_date3">
                                <span id='nnews_lb1_ctl00_ShoveWebControl_Text2'>{{ $item->month }}</span>
                            </span><span class="nnews_lb_date4">-</span><span class="nnews_lb_date5">
                                <span id='nnews_lb1_ctl00_ShoveWebControl_Text3'>{{ $item->date }}</span>
                            </span>
                        </div>
                        <div class="nnews_lb_xq">
                            <a href="{{ route('news.show', ['id' => $item->id]) }}" target="_blank"></a>
                        </div>
                    </div>
                </div>
                    @endforeach
            </div>
            <div class="mx-auto" style="align-content: center; width: 200px;">
                {{ $news->links() }}
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













