<?php
namespace System;
/**
 * Created by PhpStorm.
 * User: canyuanc
 * Date: 16/7/13
 * Time: 下午5:21
 */
class Xwork{
    const DEVELOPMENT = 'development';
    const PRODUCT = 'product';

    public static function start(){
        //记录开始时间
        $runTime = -microtime(TRUE);

        //加载全局配置

        //加载全局方法

        //加载对应项目

        //加载项目配置(默认覆盖全局配置)

        //记录结束时间
        $runTime += microtime(TRUE);

        if (ENV === self::DEVELOPMENT) {
            $debugInfo = '此次访问共运行' . $runTime . '毫秒';
        }
    }
}