<?php
namespace plugins\video_hack\validate;

use think\Validate;

class PluginVideoHackValidate extends Validate
{
    protected $rule = [
        'name' => 'require|unique:video_hack',
        'url'  => 'require|unique:video_hack',
    ];
    protected $message = [
        'name.require' => '线路名称不能为空',
        'name.unique'  => '线路名称已存在',
        'url.require'  => '线路地址不能为空',
        'url.unique'   => '线路地址已经存在',
    ];
}
