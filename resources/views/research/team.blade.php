<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<html lang="zh-cn" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="HandheldFriendly" content="true"/>
    <meta http-equiv="x-rim-auto-match" content="none"/>
    <meta name="format-detection" content="telephone=no"/>
    <title>
        研究团队
    </title>
    <meta name="applicable-device" content="mobile">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
    <link id="css__about" rel="stylesheet" type="text/css" href="/css/rewrite.css" />

    <script type="text/javascript">var _jtime = new Date();

        function jqload() {
            window.jLoad = new Date() - _jtime;
        }

        function jqerror() {
            window.jLoad = -1;
        }</script>
    <script type="text/javascript" src="https://1.rc.xiniu.com/js/jq/jquery-2.min.js" onload="jqload()"
            onerror="jqerror()" id="jquery"></script>
    <script type = "text/javascript" src = "https://1.rc.xiniu.com/js/pb/2/Public.js" ></script>
    <script type="text/javascript" src="https://1.rc.xiniu.com/js/pb/flexible.js"></script>
    <style>
        .xn_mc_about_2_cont p {
            line-height: 2em;
        }

        p {
            font-size: 17px;
            color: #535353;
            /*text-indent: 38px;*/
        }

        .title {
            text-align: center;
        }

        .avatar {
            text-align:center
        }

        .avatar img {
            width: 300px;
            height:auto;
            margin: 0 auto
        }
    </style>
</head>
<body class="about_body">

@include('layout/header')
    <div id="ea_ba">
        <div class="about_banner" id="about_banner"     >
            <div class="about_banner_m">
                <img  data-original="/img/Research.jpg" alt="" />
            </div>
        </div>
    </div>

    <div id="ea_c">
        <div id="n_content_left_t" class="n_content_left_t">
            <span id="n_content_left_t1" class="n_content_left_t1">
                <span id='ShoveWebControl_Text1'>研究团队</span>
            </span><span class="n_content_left_t2">
                <span id='ShoveWebControl_Text2'>RESEARCH TEAM</span>
            </span>
        </div>

        <div id="xn_mc_about_1_wrap" class="xn_mc_about_1_wrap" >
            <ul class="xn_mc_about_1_ul">
                <li class="xn_mc_about_1_li" style="width: 20%; @if(request()->fullUrl() != route('aboutUs')) background-color: white; @endif" >
                    <a href="{{ route('aboutUs') }}" @if(request()->fullUrl() != route('aboutUs')) style="color: rgb(127, 127, 127);" @endif>
                        关于我们
                    </a>
                </li>
                <li class="xn_mc_about_1_li @if(request()->fullUrl() == route('researchTeam')) xn_mc_about_1_curr @endif">
                    <a href="{{ route('researchTeam') }}">
                        研究团队
                    </a>
                </li>
                <li class="xn_mc_about_1_li @if(request()->fullUrl() == route('researchContent')) xn_mc_about_1_curr @endif">
                    <a href="{{ route('researchContent') }}">
                        研究内容
                    </a>
                </li>
            </ul>
            <ul class="xn_mc_about_1_ul">
                <li class="xn_mc_about_1_li @if(request()->fullUrl() == route('researchActivity')) xn_mc_about_1_curr @endif">
                    <a href="{{ route('researchActivity') }}">
                        社会活动
                    </a>
                </li>
                <li class="xn_mc_about_1_li @if(request()->fullUrl() == route('researchYearbook')) xn_mc_about_1_curr @endif" style="width: 40%">
                    <a href="{{ route('researchYearbook') }}">
                        艺乡建年鉴
                    </a>
                </li>
            </ul>
        </div>

        <div id="xn_mc_about_2_wrap" class="xn_mc_about_2_wrap"     >
            <div class="xn_mc_about_2_cont">
                <span id='xn_mc_about_2_Text'>
                    <p><br/></p>
                    <div class="avatar">
                        <img data-original="img/ct.png" />
                    </div>
                    <p><br/></p>
                    <p><br/></p>
                    <p class="title">
                        <strong>陈炯	 1973.12 副教授</strong>
                    </p>
                    <p class="title">
                        <strong>中国人民大学艺术学院 环境艺术设计</strong>
                    </p>
                    <p>
                        副教授，中国人民大学艺术学院设计系主任，硕士生导师，中央美术学院博士，中国工艺美术学会纤维艺委会常务理事，中国纺织服装教育学会拼布艺委会委员，
                    国家一级美术师。主持国家艺术基金人才培养项目《传统村落艺术创新人才设计培养》，主持中国人民大学面上项目重点项目《艺术激活传统村落途经研究》。主持设计中国公安部派出所建筑外立面统一设计。主持修改中国法院标志设计、全国法庭建筑外立面统一设计。
                    </p>
                <p><br/></p>
                <p><br></p>
                <div class="avatar">
                    <img src="img/lbd.png"/>
                </div>
                    <p><br/></p><p><br/></p><p><br/></p>
                    <p class="title"><strong>李兵弟 教授级高级城市规划师</strong></p>
                    <p class="title"><strong>中国城镇化促进会副主席</strong></p>
                    <p>教授级高级城市规划师，曾连续多年参加中共中央1号文件起草工作。现任中国城镇化促进会副主席，兼城市与乡村统筹发展专业委员会主任、特色小镇委员会常务副会长，曾任住房和城乡建设部村镇建设司司长，建设部村镇建设办公室主任、城乡规划司副司长、巡视员，中国城市规划设计研究院副院长。享受国务院特殊津贴专家待遇。</p><p><br/></p><p><br/></p>
                    <div class="avatar">
                    <img src="img/zfy.png"/>
                    </div>
                    <p><br/></p><p><br/></p><p><br/></p>
                    <p class="title"><strong>张夫也 清华大学美术学院教授 博士生导师</strong></p>
                    <p class="title"><strong>清华大学美术学院世界艺术史研究所所长</strong></p>
                    <p>清华大学美术学院教授、博士生导师，清华大学美术学院世界艺术史研究所所长。兼任中国艺术研究院特聘教授、博士生导师，中国工艺美术研究院专家指导委员会委员，北京工艺美术协会副会长,西南交通大学特聘教授、博士生导师。曾任日本东京艺术大学客座研究员，中国艺术类核心期刊《装饰》杂志主编，清华大学美术学院艺术史论学部主任。</p><p><br/></p><p><br/></p>
                    <div class="avatar">
                    <img src="img/zyj.png"/>
                    </div>
                    <p><br/></p><p><br/></p><p><br/></p>
                    <p class="title"><strong>张耀军 1968.05</strong></p>
                    <p class="title"><strong>教授中国人民大学社会与人口学院</strong></p>
                    <p class="title"><strong>社会人口</strong></p>
                    <p>中国人民大学社会与人口学院教授，博士生导师，副院长。中国人民大学国家发展战略研究院研究员，中国人民大学首都发展研究院研究员。曾在2008年-2009年赴美国华盛顿大学访问学者。研究方向为区域经济，人口资源环境可持续发展，文化与区域发展，区域人力资源开发，空间分析技术，非遗与区域发展。</p><p><br/></p><p><br/></p><p><br/></p>
                    <div class="avatar">
                    <img src="img/sj.png"/>
                    </div>
                    <p><br/></p><p><br/></p><p><br/></p>
                    <p class="title"><strong>孙君 北京绿十字总顾问</strong></p>
                    <p class="title"><strong>中国人民大学艺术学院特聘教授</strong></p>
                    <p>北京绿十字总顾问、中国人民大学艺术学院特聘教授，其建设的美丽乡村有：信阳市郝堂村、襄阳市堰河村、广水市桃源村、十堰市樱桃沟村、雅安市雪山村与戴维村、怀化市高椅古村、汝城县金山古村、荆门市太子山小镇、安徽三瓜公社等，目前已成为中国乡村建设的明星村。2010年获得“2009绿色中国年度人物”称号。</p><p><br/></p><p><br/></p><p><br/></p>
                    <div class="avatar">
                    <img src="img/zg.png"/>
                    </div>
                    <p><br/></p><p><br/></p><p><br/></p>
                    <p class="title"><strong>郑国 1977.04</strong></p>
                    <p class="title"><strong>副教授中国人民大学公共管理学院</strong></p>
                    <p class="title"><strong>公共管理</strong></p>
                    <p>中国人民大学公共管理学院副教授。1995-2005年先后在兰州大学、西北大学和北京大学学习自然地理学和人文地理学。2005年8月进入中国人民大学公共管理学院任教，2006年-2007年任安庆市城市规划局副局长（挂职），2012年-2013年在加州大学伯克利分校访问学习，2014-2016年任中国人民大学公共管理学院城市规划与管理系主任。兼任全国旅游资源规划开发质量评定委员会专家。主要从事城市与区域规划的研究与教学工作，出版《开发区发展与城市空间重构》、《城市发展阶段与阶段性城市空间结构》等专著4部，在Cities、China Economic Review、城市规划、经济地理等杂志上发表文章40余篇。</p><p><br/></p>
                    <div class="avatar">
                    <img src="img/hb.png"/>
                    </div>
                    <p><br/></p><p><br/></p><p><br/></p>
                    <p class="title"><strong>黄波 1981.03 副教授</strong></p>
                    <p class="title"><strong>中国人民大学农业与农村发展学院</strong></p>
                    <p class="title"><strong>农旅与农经</strong></p>
                    <p>中国人民大学农业与农村发展学院副教授、硕士生导师。中国人民大学管理学硕士、日本九州大学农学博士，主要的研究领域为乡村旅游与乡村发展规划、日本农业经济。主要讲授乡村旅游学、涉农产业规划等课程。主持省部级课题3项，横向课题11项，校内课题4项；2013年入选首批北京市“青年英才”计划。关于河北省香河县、山东省安丘市、安徽省金寨县、辽宁省朝阳市、北京市怀柔区、吉林省敦化市、河北省承德市、山东泰安市、江苏省铜山区等地农村区域发展、土地与城市化、休闲农业的相关研究，已经被当地城市发展或区域规划采纳，取得了良好的社会效益。</p><p><br/></p>
                    <div class="avatar">
                    <img src="img/zzl.png"/>
                    </div>
                    <p><br/></p><p><br/></p><p><br/></p>
                    <p class="title"><strong>郑志良 1969.01 副教授</strong></p>
                    <p class="title"><strong>中国人民大学文学院	 古代文学</strong></p>
                    <p>中国人民大学文学院副教授，南京大学文学院博士，北京大学中文系博士后，古代文学教研室主任。中国俗文学学会常务理事、中国儒林外史学会副秘书长、汤显祖国际研究中心客座研究员。获“中国人民大学杰出人文青年学者”称号，科研成果获北京市第十四届哲学社会科学优秀成果二等奖。</p><p><br/></p><p><br/></p><p><br/></p>
                    <div class="avatar">
                    <img src="img/sxy.png"/>
                    </div>
                    <p><br/></p><p><br/></p><p><br/></p>
                    <p class="title"><strong>孙晓阳 北京绿十字主任</strong></p>
                    <p class="title"><strong>湖南农道公益基金会理事长</strong></p>
                    <p>北京绿十字主任，湖南农道公益基金会理事长，农道联众（北京）城乡规划设计研究院有限公司执行院长，清华大学美丽乡村公益基金清农学堂教育长，台湾辅仁大学智慧旅游学院特聘高级讲师，中国民俗学会中国乡愁文化发展研究中心专家委员会副主任。《北京绿十字通讯》主编，《北京青年报》与英国大使馆“环保明星”评委，半汤乡学院特聘研究员。</p><p><br/></p><p><br/></p>
                    <div class="avatar">
                    <img src="img/wwh.png"/>
                    </div>
                    <p><br/></p><p><br/></p><p><br/></p>
                    <p class="title"><strong>王伟华</strong></p>
                    <p class="title"><strong>湖北省村镇建设协会理事长</strong></p>
                    <p class="title"><strong>湖北省文化产业学会副会长</strong></p>
                    <p>湖北省村镇建设协会理事长，长期专注于中华传统文化与现代公司治理、乡村再造的探索和应用，“四位一体”现代乡村振兴建设理念湖北模式的倡导者与践行者。西厢房乡建联合机构创始人，湖北博克景观艺术设计工程公司创始人，湖北省文化产业学会副会长，指导并推动了红安喻畈村、罗田苍葭冲、洪湖珂里湾、孝昌磨山村等十余个湖北省美丽宜居乡村示范点的建设工作。</p><p><br/></p><p><br/></p>
                    <div class="avatar">
                    <img src="img/wjh.png"/>
                    </div>
                    <p><br/></p><p><br/></p><p><br/></p>
                    <p class="title"><strong>王京红 中央美术学院博士</strong></p>
                    <p class="title"><strong>留法色彩学者 国家一级注册建筑师</strong></p>
                    <p>中央美术学院博士，留法色彩学者，国家一级注册建筑师。全国颜色标准化技术委员会（SAC/TC120）委员。中国社会科学院城市营销与品牌化智库专家，年度《中国城市营销发展报告》撰稿人之一。国家人保部“色彩搭配设计师”的职业标准制定和评审专家。中国流行色协会理事、建筑与环境色彩研究专业委员会委员、色彩教育专业委员会委员。中国国际色彩联盟专家委员。  </p><p><br/></p><p><br></p>
                    <div class="avatar">
                    <img src="img/lxj.png"/>
                    </div>
                    <p><br/></p><p><br/></p><p><br/></p>
                    <p class="title"><strong>鲁晓静 中央美术学院建筑系毕业 LUCIELALUNE </strong></p>
                    <p class="title"><strong>路西的月亮生活美学社-传统手工时尚设计品牌创始人</strong></p>
                    <p>中央美术学院建筑系毕业，LUCIELALUNE 路西的月亮生活美学社-传统手工时尚设计品牌创始人，北京MHOUSE毎屋, 低碳模块移动装配集成建筑设计，合伙创始⼈、设计总监。曾任土人生态城市设计中心建筑总工，北京中国科学建筑设计有限公司首席建筑师。</p><p><br/></p><p><br/></p><p><br/></p>
                    <div class="avatar">
                    <img src="img/hw.png"/>
                    </div>
                    <p><br/></p><p><br/></p><p><br/></p>
                    <p class="title"><strong>何崴</strong></p>
                    <p class="title"><strong>中央美术学院建筑学院副教授 实验中心主任 </strong></p>
                    <p>中央美术学院建筑学院副教授，实验中心主任、中国建筑学会建筑师分会乡村建筑专委会副主任委员、中国建筑学会建筑师分会地区建筑专委会委员、中国民族建筑研究会美丽乡村协同建设专委会委员、《小城镇建设》杂志编委。</p><p><br/></p><p><br/></p><p><br/></p>
                    <div class="avatar">
                    <img src="img/zhx.png"/>
                    </div>
                    <p><br/></p><p><br/></p><p><br/></p>
                    <p class="title"><strong>赵海翔 1973.05 副教授</strong></p>
                    <p class="title"><strong>中央民族大学美术学院 建筑设计</strong></p>
                    <p>中央民族大学副教授、硕导，文化部恭王府中华传统技艺研究与保护中心研究员。近年完成《少数民族建筑中的民族性探析》、《现代欧洲城市建筑对历史文化场所的重塑》、《纪念性空间研究》、《云南古建筑地图》等课题和专著；2014年起任住建部传统民居保护专委会工作组成员，参加了《中国传统民居类型全集》和《中国传统建筑解析与传承》等课题工作</p><p><br/></p><p><br/></p>
                    <div class="avatar">
                    <img src="img/zcy.png"/>
                    </div>
                    <p><br/></p><p><br/></p><p><br/></p>
                    <p class="title"><strong>周存玉 国家一级美术师</strong></p>
                    <p class="title"><strong>研究员级高级工艺美术师 中国工艺美术协会常务理事</strong></p>
                    <p>国家一级美术师，研究员级高级工艺美术师，中国工艺美术协会常务理事，江苏省非遗锻铜技艺代表性传承人，江苏省工艺美术大师，江苏省工艺美术学会副会长，江苏省省工艺美术行业协会副会长，中国非遗传承人产业基地艺术总监；世界技能大赛建筑石雕项目中国赛区裁判。其绘画作品获2015米兰世博会艺术金奖；其锻铜作品于2013年至2015年连续三届获中国工艺美术大师精品博览会金奖。主要从事书画、雕塑、陶艺的创作，是一位跨界艺术家。</p><p><br/></p><p><br/></p>
                    <div class="avatar">
                    <img src="img/txg.png"/>
                    </div>
                    <p><br/></p><p><br/></p><p><br/></p>
                    <p class="title"><strong>唐晓刚 中国人民大学艺术学院</strong><br/></p>
                    <p>中国人民大学艺术学院，2003年毕业于东京学艺大学，获得硕士学位。研究方向主要是设计概论,VI设计，广告策划设计。</p><p><br/></p><p><br/></p><p><br/></p><p><br/></p>
                    <div class="avatar">
                    <img src="img/czq.png"/>
                    </div>
                    <p><br/></p>
                    <p class="title"><strong>丛志强 副教授</strong></p>
                    <p class="title"><strong>清华大学美术学院博士</strong></p>
                    <p class="title"><strong>中国人民大学艺术学院硕士研究生导师</strong></p>
                    <p>副教授，清华大学美术学院博士，中国人民大学艺术学院硕士研究生导师，国家一级美术师（文化部考核认定），中国文联民协民族书画创作交流中心学术委员会副主任，北大青鸟文化艺术策划研究院研究员。学术代表作：专著《消费主义语境下当代中国设计生态研究》，论文《消费主义语境下中国设计生态失衡研究——基于资本逻辑与符号逻辑的视角》。主持中国人民大学面上项目重点项目《传统村落中工匠文化的困境与创化策略研究》，在美术观察、文艺争鸣等国家核心期刊发表论文数篇，作品《大观天下》（3.67米）被人民大会堂收藏，绘画与设计作品获国内外奖项30多个。为首安股份、中国装饰集团、八喜冰激凌、承德中药、无锡高达等二十余个企业建设整体品牌。</p><p><br/></p><p><br></p>
                    <div class="avatar">
                    <img src="img/wp.png"/>
                    </div>
                    <p><br/></p><p><br/></p><p><br/></p>
                    <p class="title"><strong>王鹏 著名文化产业策划专家</strong></p>
                    <p class="title"><strong>北大青鸟文化艺术研究院院长</strong></p>
                    <p>著名文化产业策划专家，北大青鸟文化艺术研究院院长、中国人民大学文化艺术策划研究所时任副所长，兼任民委中国民族品牌文化研究院院长、文化部特聘职业教育导师、中国投资协会特色小镇评审专家、2019世界北京园博会大型活动特聘策划专家、多届东盟博览会开幕大会担任策划专家。多次策划国家级大型文化活动。近年来在全国近20多个文旅景区和特色小镇、文旅产业等进行战略、定位、内容、运营、品牌营销策划和前期投资对接服务。2015年荣获"品牌中国功勋人物"奖。</p>
                <p><br/></p>
                <p><br/></p>
                <p><br></p>

                </span>
            </div>
        </div>
    </div>


    @include('layout/footer')

    <div id="ea_sh"></div>
    <div id="ea_mu"></div>

    <script type="text/javascript" src="/js/nav.js" id="js__about"></script>

    <script type='text/javascript'>!function(){var e,f,a=new Date,b=null,c=function(){var a,c,d,e,g,h,i,j;b&&clearTimeout(b),a=document.location.href,c='',c=/\.html|.htm/.test(document.location.href)?document.forms[0].getAttribute('Page'):'',d=window.document.referrer,e='/admin/access/load.ashx?req='+f(a),c&&(e+='&f='+f(c)),g=f(d),e+='&ref='+g+'&sw='+screen.width+'&sh='+screen.height,e+='&cs='+(window.jLoad?window.jLoad:-1),e+='&_t='+Math.random(),h='',i='https:'==document.location.protocol?!0:!1,h=i?'https://':'http://',e+='&ht='+f(h+document.domain),$?$.getScript(e):(j=document.createElement('script'),j.src=e,document.body.appendChild(j))},d=function(){window.acessFinish=new Date-a};window.addEventListener?window.addEventListener('load',d):window.attachEvent&&window.attachEvent('onload',d),b=setTimeout(c,3e3),e=null,f=function(a){var b,c,d,f,g;if(!a)return a;if(!e){for(e={},b=0;10>b;b++)e[String.fromCharCode(97+b)]='0'+b.toString();for(b=10;26>b;b++)e[String.fromCharCode(97+b)]=b.toString()}for(c='',d='',f='',g=a.length,b=0;g>b;b++)d=a.charAt(b),f=e[d],c+=f?'x'+f:d;return encodeURIComponent(c).replace(/%/g,'x50').replace(/\./g,'x51')}}();</script><script type='text/javascript'>!function(){var c,a=document.createElement('script'),b=window.location.protocol.split(':')[0];a.src='/https'===b?'https://zz.bdstatic.com/linksubmit/push.js':'http://push.zhanzhang.baidu.com/push.js',c=document.getElementsByTagName('script')[0],c.parentNode.insertBefore(a,c)}();</script>
</body>
</html>
