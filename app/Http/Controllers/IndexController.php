<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MessageBoard;
use Detection\MobileDetect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller
{
    public function index()
    {
        return view('index.index');
    }

    public function messageBoard()
    {
        // 自定义验证
        $validator = Validator::make(request()->all(), [
            'username' => 'required|string|max:32',
            'email' => 'nullable|email|max:100',    // nullable 可选字段
            'mobile' => 'nullable|digits:11|required_without:email',    // nullable 可选字段
            'content' => 'required|string',
        ], [
            'mobile.required_without' => '邮箱或者手机号必须填写一个',
        ], [
            'username' => '名字',
            'email' => '邮箱',
            'mobile' => '手机号',
            'content' => '内容',
        ]);

        // 验证失败跳转至指定url
        if ($validator->fails()) {
            return redirect("/#fh5co-contact")->withErrors($validator)->withInput();
        }

        // 如果没有则添加,如果存在则不添加
        //MessageBoard::firstOrCreate(request(['username', 'email', 'mobile', 'content']));

        MessageBoard::create(
            array_merge(
                request(['username', 'email', 'mobile', 'content']),
                [
                    'user_id' => Auth::check() ? Auth::id() : null,
                    'user_ip' => request()->getClientIp(),
                    'device' => (new MobileDetect())->getUserAgent(),
                ]
            )
        );

        return redirect("/#fh5co-contact")->with('success', '您的留言已经收到，我们将会尽快给您回复，请注意查收邮件或短信！');
    }
}
