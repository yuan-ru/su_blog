<?php

namespace core;

// 核心控制器
class Controller
{
    public function redirect($url, $msg = '', $waitSeconds = 3)
    {
        echo $msg;
        header('Refresh: ' . $waitSeconds . '; url=' . $url);
    }
}





















