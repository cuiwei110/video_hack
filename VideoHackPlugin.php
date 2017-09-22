<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2017 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: Dean <zxxjjforever@163.com>
// +----------------------------------------------------------------------
namespace plugins\video_hack; //Demo插件英文名，改成你的插件英文就行了
use cmf\lib\Plugin;
use think\Db;

//Demo插件英文名，改成你的插件英文就行了
class VideoHackPlugin extends Plugin
{

    public $info = [
        'name'        => 'VideoHack', //Demo插件英文名，改成你的插件英文就行了
        'title'       => '腾讯、爱奇艺等vip视频接口地址管理',
        'description' => '腾讯、爱奇艺等vip视频接口地址管理',
        'status'      => 1,
        'author'      => 'A1k4id',
        'version'     => '1.0',
        'demo_url'    => 'http://www.a1k4id.cn/portal/video_hack/index.html',
        'author_url'  => 'http://www.a1k4id.cn',
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
        return true; //卸载成功返回true，失败false
    }

    //实现的footer_start钩子方法
    public function getVideoHackUrl()
    {
        $video_hack = Db::name('video_hack')->select();
        $this->assign("video_hack", $video_hack);
        echo $this->fetch("widget");
    }
}
