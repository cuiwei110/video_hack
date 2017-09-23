ThinkCMF5 腾讯、爱奇艺等vip视频接口地址管理插件
===============
### 自带8个接口地址


### 也可作为 ThinkCMF5 插件开发参考


### 前台演示地址
[演示地址](http://a1k4id.cn/portal/video_hack/index.html)


### 使用方法
hooks.php
```
return [
    'get_video_hack_url'              => [
        "type"        => 3,//钩子类型(默认为应用钩子;2:应用钩子;3:模板钩子;4:后台模板钩子)
        "name"        => '腾讯、爱奇艺vip解析接口地址管理', // 钩子名称
        "description" => "腾讯、爱奇艺vip解析接口地址管理", //钩子描述
        "once"        => 0 // 是否只执行一次
    ]
];
```
index.html
```
<hook name="get_video_hack_url"/>
```