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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COMMENT='视频vip会员hack';


--
-- 转存表中的数据 `cmf_video_hack`
--

INSERT INTO `cmf_video_hack` (`id`, `name`, `url`, `create_time`, `update_time`) VALUES
(1, '线路1', 'http://www.dgua.xyz/webcloud/?url=', 1505199028, 1505199028),
(2, '线路2', 'http://yun.mt2t.com/yun?url=', 1505199047, 1505199047),
(3, '线路3', 'http://000o.cc/jx/ty.php?url=', 1505199065, 1505199065),
(4, '线路4', 'http://jx.618g.com/?url=', 1505199082, 1505199082),
(5, '线路5', 'http://aikan-tv.com/?url=', 1505199099, 1505199099),
(6, '线路6', 'http://api.baiyug.cn/vip/index.php?url=', 1505199118, 1505199118),
(7, '线路7', 'http://api.1008net.com/v.php?url=', 1505199147, 1505199147),
(8, '线路8', 'https://www.3aym.cn/?url=', 1505199166, 1505199166);
