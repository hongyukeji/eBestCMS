<?php
/**
 * eBestCMS
 * ============================================================================
 * Copyright © 2015-2018 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2018/3/4 20:23
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MessageBoard;
use Detection\MobileDetect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SiteController extends Controller
{
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