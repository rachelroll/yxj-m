@extends('layout/layout')
@section('title')
    <title>
        项目决策委员会
    </title>
@endsection

<style>
    video:focus{
        outline:none;
    }
</style>

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
                            <span id='ShoveWebControl_Text_about'><a href="{{ route('platform-committee') }}" target="_self">平台资源</a>
                            </span>
                        </span>
                        <span class="n_r_wz5">-</span>
                        <span class="n_r_wz6">
                            <a href="" class="curr1">项目决策委员会</a>
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
                    <span id='n_content_left_t_data'>项目决策委员会</span>
                </div>
                <div class="n_content_left_t2">
                    <span id='n_content_left_t_data2'>Decision-making Committee</span>
                </div>
            </div>

            <!--简单的一级目录原型-->
            <div id="n_content_left_cnt" class="n_content_left_cnt">
                <ul id="ShoveWebControl_VMenu2" class="left_typeUl left_typeUl_n000" >
                    <ul id="left_typeUl_t100" class="left_typeUl left_typeUl_t100">
                        <li id="left_typeLi_t100_1" data_id="1_1" class="left_menu1" type="t" index=1 level=0>
                            <a href="{{ route('platform-committee') }}" rel="nofollow" target="_self">
                                <span name="ShoveWebControl_VMenu22134030082|T_NewsTypes|Id|1|Name">项目决策委员会</span>
                            </a>
                        </li>
                        <li id="left_typeLi_t100_2" data_id="1_2" class="left_menu1" type="t" index=2 level=0>
                            <a href="{{route('platform-consultant')}}" rel="nofollow" target="_self">
                                <span name="ShoveWebControl_VMenu21609884532|T_NewsTypes|Id|2|Name">资助顾问</span>
                            </a>
                        </li>
                        <li id="left_typeLi_t100_3" data_id="1_141" class="left_menu1" type="t" index=3 level=0><a href="{{ route('platform-partner') }}" rel="nofollow" target="_self"><span name="ShoveWebControl_VMenu22123378910|T_NewsTypes|Id|141|Name">合作伙伴</span></a>
                        </li>
                        <li id="left_typeLi_t100_3" data_id="1_141" class="left_menu1" type="t" index=3 level=0><a href="{{ route('platform-club') }}" rel="nofollow" target="_self"><span name="ShoveWebControl_VMenu22123378910|T_NewsTypes|Id|141|Name">俱乐部</span></a>
                        </li>
                    </ul>
                </ul>
            </div>

            <!--简单的图文竖版,可以插入图片-->
            <div id="xn_c_products_2_warp" class="xn_c_products_2_warp">
                <h4>
                    <strong><span style=";font-family:黑体;font-weight:bold;font-size:19px"><span style="font-family:黑体">决策委员</span></span></strong>
                </h4>
                <div><p><br/></p></div><p style="margin-top:10px;text-indent:32px;text-autospace:ideograph-numeric;line-height:130%"><span style=";font-family:宋体;line-height:130%;font-size:16px"><span style="font-family:宋体">为了帮助筛选出富有潜力的创业团队，</span>“艺乡建”邀请诸多在创业或识人方面有着丰富经验的知名企业家，及对艺术乡村振兴或乡村发展领域有深入见解的专家或社会组织创办者，作为“项目决策委员”参与终审；确定最终资助决策与金额；持续跟进与支持感兴趣的艺乡建团队；帮助乡村乡建事业找到最有潜力的乡建工作者、创业者以及引领者，并且为他们提供一些富有价值的建议。</span></p><p><br/></p>
            </div>

            <!--目录放一个-->
            <div id="nnews_lb" class="nnews_lb">
                @foreach($news as $item)
                <div class="nnews_lb_m">
                    <div class="nnews_lb_img">
                        <a href="{{ route('news.show', ['id' => $item->id]) }}" target="_blank">
                            <img  data-original='{{ config('filesystems.disks.oss.cdnDomain') . '/' . $item->cover }}'/></a>
                    </div>
                    <div class="nnews_lb_mdbox">
                        <div class="nnews_lb_title">
                            <a href="{{ route('news.show', ['id' => $item->id]) }}" target="_blank">
                                <span name="snnews_lb_tt1506|T_News|Id|506|Title">{{ $item->title }}</span>
                            </a>
                        </div>
                        <div class="nnews_lb_cnt" ej="edit_span">
                            <span id='nnews_lb1_ctl00_ShoveWebControl_Text4'>
                                {{ $item->content }}
                            </span>
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
            {{ $news->links() }}
    </div>
        <input type="hidden" id="pageId" value="1" />
    <script type="text/javascript" src="https://0.rc.xiniu.com/g2/M00/02/72/CgAGe1wjF9eAejYeAABCcl7PcJM7884.js?d=28164619591" id="js__index"></script>

@endsection










