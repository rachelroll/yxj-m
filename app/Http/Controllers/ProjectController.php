<?php

namespace App\Http\Controllers;

use App\Member;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ProjectController extends Controller
{
    // 案例标签列表页
    public function index($category_id)
    {
        if ($category_id == 22) {
            return view('projects/train', compact('category_id'));
        }
        $projects = Project::where('category', 'like', $category_id.'%')->paginate(5);

        return view('projects.index', compact('projects', 'category_id'));
    }

    // 地区列表页
    public function district($id)
    {
        $projects = Project::where('district', $id)->paginate(5);
        $category_id = 1;

        return view('projects.index', compact('projects', 'category_id'));
    }

    // 详情页
    public function show($id)
    {
        $project = Project::find($id);

        $lists = Project::where('enabled', 1)->get();

        return view('projects.show', compact('project', 'lists'));
    }

    public function search(Request $request)
    {
        $search_item = $request->search_item;

        $projects = Project::where('district', '=', $search_item)
            ->orWhere('category', 'like', '%'.$search_item.'%')
            ->orWhere('content', 'like', '%'.$search_item.'%')
            ->paginate(5);

        return view('projects.search', compact('projects', 'search_item'));
    }

    // 案例检索
    public function aljs()
    {
        $project = Project::all();

        $counted = $project->countBy('district')->all();

        $index = [];

        foreach ($counted as $key => $value) {
            $index[] = $key;
        }
        return view('projects/aljs', compact('counted', 'index'));
    }

    // 培训报名
    public function register()
    {
        return view('projects.register');
    }

    // 提交报名
    public function store(Request $request)
    {
        Input::flash();

        if (!$request->name) {
            return back()->with('fail', '请填写姓名')->withInput();
        } elseif (!$request->company) {
            return back()->with('fail', '请填写公司名称')->withInput();
        } elseif (!$request->phone) {
            return back()->with('fail', '请填写联系方式')->withInput();
        }

        $res = Member::create([
            'name' => $request->name,
            'company' => $request->company,
            'phone' => $request->phone
        ]);

        if ($res) {
            return back()->with('success', '报名成功');
        } else {
            return back()->with('fail', '请稍后重试');
        }
    }
}
