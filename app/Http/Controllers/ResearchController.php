<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResearchController extends Controller
{
    // 关于我们
    public function aboutUs()
    {
        return view('research/aboutUs');
    }

    // 研究团队
    public function researchTeam()
    {
        return view('research/team');
    }

    // 研究内容
    public function researchContent()
    {
        return view('research/content');
    }

    // 活动内容
    public function researchActivity()
    {
        return view('research/activity');
    }

    // 年鉴
    public function researchYearbook()
    {
        return view('research/yearbook');
    }
}
