<?php
// +----------------------------------------------------------------------
// | ThinkCMF5 腾讯、爱奇艺等vip视频解析接口管理插件
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2018 https://www.a1k4id.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: A1k4id <alkaid@a1k4id.com>
// +----------------------------------------------------------------------
namespace plugins\video_hack;

use cmf\lib\Plugin;
use think\Db;

class VideoHackPlugin extends Plugin
{

    public $info = [
        'name'        => 'VideoHack',
        'title'       => '腾讯、爱奇艺等vip视频接口地址管理',
        'description' => '腾讯、爱奇艺等vip视频接口地址管理',
        'status'      => 1,
        'author'      => 'A1k4id',
        'version'     => '1.0',
        'demo_url'    => 'https://www.a1k4id.com/portal/video_hack/index.html',
        'author_url'  => 'https://www.a1k4id.com',
    ];

    public $hasAdmin = 1; //插件是否有后台管理界面

    // 插件安装
    public function install()
    {
        $config = config('database');
        $sql    = cmf_split_sql(PLUGINS_PATH . 'video_hack/data/video_hack.sql', $config['prefix'], $config['charset']);
        foreach ($sql as &$value) {Db::execute($value);}
        return true;
    }

    // 插件卸载
    public function uninstall()
    {
        $config = config('database');
        Db::execute('DROP TABLE ' . $config['prefix'] . 'video_hack');
        return true;
    }

    // 钩子方法
    public function getVideoHackUrl()
    {
        $video_hack = Db::name('video_hack')->select();
        $this->assign("video_hack", $video_hack);
        echo $this->fetch("widget");
    }
}
