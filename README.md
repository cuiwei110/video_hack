腾讯、爱奇艺等vip视频接口地址管理插件
===============


插件适用于ThinkCMF5，可作为ThinkCMF5插件开发的范例


[前台演示地址](http://a1k4id.cn/portal/video_hack/index.html)


### 使用范例
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
<script>
    $(function(){
        $('iframe').height($('iframe').width() * 0.625);
    });
    $('a.video_hack').click(function() {
        var url = $('input').val();
        if (!url) {
            return false;
        }
        var hack_url = $(this).attr('data-url') + url;
        $('iframe').attr('src', hack_url);
    });   
</script>
```


### 申明
接口地址均来源于网络如有侵权请私信作者 04h6n4y@gmail.com 删除