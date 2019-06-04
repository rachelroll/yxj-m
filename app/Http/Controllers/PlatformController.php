<?php

namespace App\Http\Controllers;

use App\Media;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PlatformController extends Controller
{
    // 项目决策委员会
    public function committee()
    {
        $news = News::where('category', 4)
            ->where('enabled', 1)
            ->paginate(5);
        $video = Media::latest()->first()->video;

        if ($news) {
            foreach ($news as &$item) {
                $item->month = Carbon::createFromDate($item->time)->month;
                $item->date = Carbon::createFromDate($item->time)->day;
            }
            return view('platform/committee', compact('news', 'video'));
        }
    }

    // 资助顾问
    public function consultant()
    {
        return view('platform/consultant');
    }

    // 合作伙伴
    public function partner()
    {
        return view('platform/partner');
    }

    // 俱乐部
    public function club()
    {
        return view('platform/club');
    }
}
