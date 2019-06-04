@extends('layout/layout')
@section('title')
    <title>
        案例
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
                                <a href="{{ route('projects.index', ['category_id' => 1]) }}" target="_self">执行案例</a>
                            </span>
                        </span>
                    </li>
                    <li>
                        <img src="https://1.rc.xiniu.com/rc/Contents/47175/Images/icpsp1_n_right_wz.png" alt="" />
                    </li>
                </ul>
            </div>


            <div id="n_content_left_cnt" class="n_content_left_cnt">
                <span>关于 <span style="font-size: large; font-weight: bolder">"{{ $search_item }}"</span> 的案例检索</span>
            </div>
            <!--简单的列表版式-->
            <div id="nnews_lb" class="nnews_lb">
                @if($projects)
                @foreach($projects as $item)
                    <div class="nnews_lb_m">
                        <div class="nnews_lb_img">
                            <a href="{{ route('projects.show', ['id' => $item->id]) }}" target="_blank">
                                <img  data-original='{{ config('filesystems.disks.oss.cdnDomain') . '/' . $item->cover }}' alt='艺乡建' />
                            </a>
                        </div>
                        <div class="nnews_lb_mdbox">
                            <div class="nnews_lb_title">
                                <a title='{{ $item->title }}' href="{{ route('projects.show', ['id' => $item->id]) }}" target="_blank">
                                    <span name="snnews_lb_tt1506|T_News|Id|506|Title">{{ $item->title }}</span>
                                </a>
                            </div>
                            <div class="nnews_lb_cnt" ej="edit_span">
                                <span id='nnews_lb1_ctl00_ShoveWebControl_Text4'>{{ $item->content }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
                    @else
                抱歉，目前没有相关案例！
                @endif
            </div>
            <div class="mx-auto" style="align-content: center; width: 200px;">
                {{ $projects->links() }}
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













