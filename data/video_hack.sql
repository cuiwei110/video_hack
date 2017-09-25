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
(1, '爱奇艺线路', 'http://www.dgua.xyz/webcloud/?url=', 1505199028, 1506237769),
(2, '腾讯线路1', 'http://api.1008net.com/v.php?url=', 1505199047, 1506237856),
(3, '腾讯线路2', 'https://www.3aym.cn/?url=', 1505199065, 1506237873),
(4, '主线路1', 'http://000o.cc/jx/ty.php?url=', 1505199082, 1506237895),
(5, '主线路2', 'http://jx.618g.com/?url=', 1505199099, 1506237913),
(6, '主线路3', 'http://aikan-tv.com/?url=', 1505199118, 1506237932),
(7, '通用线路1', 'http://api.88fenxiang.cn/duoxianlu1/66.php?v=', 1505199147, 1506237972),
(8, '通用线路2', 'http://kppev.cn/jx.php?url=', 1505199166, 1506237990),
(9, '特殊线路', 'http://y.mt2t.com/lines?url=', 1506238015, 1506238015);