<?php
/**
 * eBestCMS - 授权界面
 * ============================================================================
 * Copyright © 2015-2018 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2018/3/1 17:17
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpowerController extends Controller
{
    public function index()
    {
        return view('empower.index');
    }

}