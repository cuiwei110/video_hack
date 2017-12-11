--
-- 表的结构 `cmf_video_hack`
--
CREATE TABLE `cmf_video_hack` (
 `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
 `name` varchar(15) NOT NULL,
 `url` varchar(100) NOT NULL,
 `create_time` int(11) NOT NULL,
 `update_time` int(11) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COMMENT='视频vip会员hack';


--
-- 转存表中的数据 `cmf_video_hack`
--

INSERT INTO `cmf_video_hack` (`id`, `name`, `url`, `create_time`, `update_time`) VALUES
(1, '爱奇艺线路', 'http://www.1717yun.com/jx/ty.php?url=', 1505199028, 1512961468),
(2, '腾讯线路1', 'http://yooomm.com/index.php?url=', 1505199047, 1512961468),
(3, '腾讯线路2', 'http://y.mt2t.com/lines?url=', 1505199065, 1512961468),
(4, '主线路1', 'http://suo.5aill.cn/yll/?url=', 1505199082, 1512961468),
(5, '主线路2', 'http://api.baiyug.cn/vip/?url=', 1505199099, 1512961468),
(6, '主线路3', 'http://lcoc.top/coc/v2.php?url=', 1505199118, 1512961468),
(7, '通用线路1', 'http://jx.biaoge.tv/index.php?url=', 1505199147, 1512961468),
(8, '通用线路2', 'http://api.bingdou.net/?url=', 1505199166, 1512961468),
(9, '特殊线路', 'https://player.jidiaose.com/newsupapi/player.php?v=', 1506238015, 1512961468);
