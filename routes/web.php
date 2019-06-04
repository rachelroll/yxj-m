<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\NewsController;

// 首页
Route::get('/', 'NewsController@home')->name('home');


// 资讯
Route::get('news/category/{category_id}', 'NewsController@index')->name('news-list');
Route::get('news/{id}', 'NewsController@show')->name('news.show');


// 案例
// 根据案例标签的列表页
Route::get('projects/category/{category_id}', 'ProjectController@index')->name('projects.index');
// 根据地区的列表页
Route::get('projects/district/{id}', 'ProjectController@district')->name('projects.district');
// 案例检索页面
Route::get('projects/aljs', 'ProjectController@aljs')->name('aljs');
// 案例详情页
Route::get('projects/{id}', 'ProjectController@show')->name('projects.show');
// 搜索
Route::post('projects', 'ProjectController@search')->name('projects.search');
// 报名页
Route::get('projects/register', 'ProjectController@register')->name('projects.register');
// 上传报名信息
Route::post('projects/register/store', 'ProjectController@store')->name('projects.register.store');


// 联系我们
Route::get('contact', 'AboutController@index')->name('contact');


// 研究中心
// 关于我们
Route::get('about-us', 'ResearchController@aboutUs')->name('aboutUs');
// 研究团队
Route::get('research-team', 'ResearchController@researchTeam')->name('researchTeam');
// 研究内容
Route::get('research-content', 'ResearchController@researchContent')->name('researchContent');
// 社会活动
Route::get('research-activity', 'ResearchController@researchActivity')->name('researchActivity');
// 年鉴
Route::get('research-yearbook', 'ResearchController@researchYearbook')->name('researchYearbook');


// 建设主题
// 乡村风貌
Route::get('themes-village', 'ThemesController@villageStyle')->name('themes-village');
// 公共艺术系统
Route::get('themes-art-system', 'ThemesController@artSystem')->name('themes-art-system');
// 艺术产业体系
Route::get('themes-industry-system', 'ThemesController@industrySystem')->name('themes-industry-system');
// 艺术乡镇路径
Route::get('themes-towns-path', 'ThemesController@townsPath')->name('themes-towns-path');


// 平台资源
// 项目决策委员会
Route::get('platform-committee', 'PlatformController@committee')->name('platform-committee');
// 资助顾问
Route::get('platform-consultant', 'PlatformController@consultant')->name('platform-consultant');
// 合作伙伴
Route::get('platform-partner', 'PlatformController@partner')->name('platform-partner');
// 俱乐部
Route::get('platform-club', 'PlatformController@club')->name('platform-club');


// 乡建视野
// 国内办公室
Route::get('view-internal-office', 'ViewController@internalOffice')->name('view-internal-office');
// 国外办公室
Route::get('view-overseas-office', 'ViewController@overseasOffice')->name('view-overseas-office');
// 办公室详情页
Route::get('view-office-show/{id}', 'ViewController@show')->name('view.office.show');

