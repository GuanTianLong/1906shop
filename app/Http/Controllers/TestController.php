<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;       //Redis

class TestController extends Controller
{
    /**
        * 测试Redis(Redis设置值)
     */
    public function testRedis(){
        $key = '1906shop';
        $val = time();
        //set 一个键 并赋值
        Redis::set($key,$val);
    }

    /**
     * 测试Redis(Redis取值)
     */
    public function testRedis1(){
        $key = '1906shop';
        //获取key的值
        $value = Redis::get($key);
        echo 'value:'.$value;
    }

}
