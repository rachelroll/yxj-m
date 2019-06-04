<?php

namespace App\Http\Controllers;

use App\Media;
use App\News;
use Carbon\Carbon;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    // 首页
    public function home()
    {
        $news_lists = News::where('enabled', 1)->get();

        $video = Media::latest()->first()->video;

        if ($news_lists) {
            foreach ($news_lists as &$item) {
                $item->month = Carbon::createFromDate($item->time)->month;
                $item->date = Carbon::createFromDate($item->time)->day;
                $item->year = Carbon::createFromDate($item->time)->year;
            }
            return view('home', compact('news_lists', 'video'));
        }
    }

    // 资讯列表页
    public function index($category_id)
    {
        $news = News::where('category', $category_id)
            ->where('enabled', 1)
            ->paginate(5);
        if ($news) {
            foreach ($news as &$item) {
                $item->month = Carbon::createFromDate($item->time)->month;
                $item->date = Carbon::createFromDate($item->time)->day;
            }
            return view('news/index', compact('news','category_id'));
        }
    }

    // 资讯详情页
    public function show($id)
    {
        $news = News::find($id);

        $lists = News::where('enabled', 1)->orderby('time')->limit(4)->get();

        return view('news/show', compact('news', 'lists'));
    }
}
