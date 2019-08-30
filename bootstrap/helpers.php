<?php
/**
 * Created by PhpStorm.
 * User: zwe
 * Date: 2019/8/28
 * Time: 16:56
 */
/**测试辅助函数
 * @return string
 */
function test_helper(){
    return 'OK';
}

/**将当前请求的路由名称转换为 CSS 类名称
 * @return mixed
 */
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}