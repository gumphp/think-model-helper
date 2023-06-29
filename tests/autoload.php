<?php
// 加载框架基础文件
require __DIR__ . '/../vendor/topthink/framework/base.php';
\think\Loader::addNamespace('tests', __DIR__ . '/');
\think\Loader::addNamespace('gumphp\\model\\helper', __DIR__ . '/../src/');