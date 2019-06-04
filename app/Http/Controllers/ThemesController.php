<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemesController extends Controller
{
    // 乡村风貌
    public function villageStyle()
    {
        return view('themes/village');
    }

    // 公共艺术系统
    public function artSystem()
    {
        return view('themes/art');
    }

    // 艺术产业体系
    public function industrySystem()
    {
        return view('themes/industry');
    }

    // 艺术乡镇路径
    public function townsPath()
    {
        return view('themes/towns');
    }
}
