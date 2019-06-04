<?php

namespace App\Http\Controllers;

use App\Office;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    // 国内办公室
    public function internalOffice()
    {
        return view('xj_view.internal');
    }

    // 国外办公室
    public function overseasOffice()
    {
        return view('xj_view.overseas');
    }

    // 办公室详情页
    public function show($id)
    {
        switch ($id) {
            case 'bj':
                return view('xj_view.show.bj');
                break;
            case 'hb':
                return view('xj_view.show.hb');
                break;
            case 'hz':
                return view('xj_view.show.hangzhou');
                break;
            case 'yc':
                return view('xj_view.show.yuncheng');
                break;
            case 'jnd':
                return view('xj_view.show.jnd');
                break;
            default:
                return view('xj_view.show.bj');
        }
    }
}
