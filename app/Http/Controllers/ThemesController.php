<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemesController extends Controller
{
    // ����ò
    public function villageStyle()
    {
        return view('themes/village');
    }

    // ��������ϵͳ
    public function artSystem()
    {
        return view('themes/art');
    }

    // ������ҵ��ϵ
    public function industrySystem()
    {
        return view('themes/industry');
    }

    // ��������·��
    public function townsPath()
    {
        return view('themes/towns');
    }
}
