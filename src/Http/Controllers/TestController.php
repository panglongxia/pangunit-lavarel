<?php

namespace Panglongxia\PangunitLaravel\Http\Controllers;

use Illuminate\Routing\Controller;
class TestController extends Controller
{

    public function index(){
        return "这是测试 junit 的一个测试控制器，于laravel控制器和服务";
    }

}