<?php
namespace gumphp\model\helper;

class Service extends \think\Service
{
    public function boot()
    {
        $this->commands([
            Command::class
        ]);
    }
}