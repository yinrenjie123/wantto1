-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2017-03-09 02:15:19
-- 服务器版本： 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xiangqu`
--

-- --------------------------------------------------------

--
-- 表的结构 `shops`
--

CREATE TABLE `shops` (
  `id` int(11) NOT NULL COMMENT '主键id',
  `imgurl` varchar(255) DEFAULT NULL COMMENT '图片地址',
  `price` int(11) DEFAULT NULL COMMENT '商品价格',
  `type01` varchar(255) DEFAULT NULL COMMENT '类型01',
  `type02` varchar(255) DEFAULT NULL COMMENT '类型02',
  `num` int(11) DEFAULT NULL COMMENT '库存',
  `color` varchar(255) DEFAULT NULL COMMENT '颜色',
  `size` varchar(255) DEFAULT NULL COMMENT '尺码',
  `who` varchar(255) DEFAULT NULL COMMENT '商户',
  `name` varchar(255) DEFAULT NULL COMMENT '商品名称',
  `sjh` varchar(255) DEFAULT NULL COMMENT '设计师',
  `pp` varchar(255) DEFAULT NULL COMMENT '品牌',
  `productid` int(11) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `shops`
--

INSERT INTO `shops` (`id`, `imgurl`, `price`, `type01`, `type02`, `num`, `color`, `size`, `who`, `name`, `sjh`, `pp`, `productid`, `time`) VALUES
(1, 'img/01.jpg', 128, 'T恤', '百搭', 10, '黑色,白色', 'M,L,XL', 'ET BABY', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', 'ETBABY', 'ETBABY', 3, NULL),
(2, 'img/02.jpg', 179, '套头卫衣', '蝙蝠袖', 12, '大红色,灰色', 'XL,M,L', '物空', '2017春装潮男oversize宽松落肩蝙蝠袖长袖圆领套头卫衣', 'Tony', '物空', 3, NULL),
(3, 'img/03.jpg', 341, '风衣外套', '牛仔', 20, '牛仔蓝', 'L,M', 'DOUBLE', '[DOUBLE S双丛]春夏新款纯棉日系复古牛仔长款宽松休闲风衣外套', 'DOUBLE S 双丛 原创独立品牌', 'DOUBLE S原创', 3, NULL),
(4, 'img/04.jpg', 176, '卫衣外套', '男士', 10, '深灰色', '2XL,XL,L,M', 'DOUBLE', '[DOUBLE S双丛]春夏新款男士撞色拼接款式欧美潮宽松圆领卫衣外套', 'DOUBLE S 双丛 原创独立品牌', 'DOUBLE S原创', 3, NULL),
(5, 'img/05.jpg', 128, 'T恤', '百搭', 10, '深灰色,白色', '2XL,L,M,XL', 'DOUBLE', '[DOUBLE S双丛]春夏新纯棉牛仔拼接宽松撞色男士欧美潮款夹克外套', 'DOUBLE S 双丛 原创独立品牌', 'DOUBLE S原创', 3, NULL),
(6, 'img/06.jpg', 314, '卫衣潮', '外套', 15, '藏青色', 'M,XL', 'DOUBLE', 'DOUBLE S双丛]春夏新侧缝开衩全棉套头宽松款欧美街头运动卫衣潮', 'DOUBLE S 双丛 原创独立品牌', 'DOUBLE S原创', 3, NULL),
(7, 'img/07.jpg', 295, '夹克', '连帽', 10, 'white,black', 'M,XL', 'ET BABY', '[DOUBLE S双丛]春夏新款男士欧美休闲薄款连帽冲锋衣机能夹克防雨', 'DOUBLE S 双丛 原创独立品牌', 'DOUBLE S原创', 3, NULL),
(8, 'img/08.jpg', 197, '衬衫长袖', '法兰绒', 12, 'white', 'L,XL', '骁野', '春季精致法兰绒磨毛衬衫长袖', '骁野', '骁野', 3, NULL),
(9, 'img/09.jpg', 215, '飞行员夹克', '棒球服', 30, 'white,black', 'S,M', 'ET BABY', '[DOUBLE S双丛]春夏新款男士薄款美式飞行员夹克复古外套棒球服', 'DOUBLE S 双丛 原创独立品牌', 'DOUBLE S原创', 3, NULL),
(10, 'img/10.jpg', 138, '薄卫衣', '长袖', 10, 'white', 'S,M', '物空', '纯色基本款错位设计宽松OVERSIZE长袖薄卫衣', 'Tony', '物空', 3, NULL),
(11, 'img/11.jpg', 128, '衬衫', '条纹', 10, 'white', 'S,M,L', '物空', '2017加厚条纹呢料潮男OVERSIZE宽松潮男大衬衫（预计2月23日后发', NULL, NULL, 3, NULL),
(12, 'img/12.jpg', 987, 'T恤', '条纹', 35, 'white', 'M,L', '物空', '物空2017春新款韩版休闲潮男纯色假两件长袖T恤', NULL, NULL, 3, NULL),
(13, 'img/13.jpg', 213, '外套', '连帽', 10, 'white', 'L,XL', 'ORIGINAL', '原创新品美式宽松中长款风衣 日系纯色复古经典多口袋连帽外套男', NULL, NULL, 3, NULL),
(14, 'img/14.jpg', 734, 'T恤', '百搭', 39, 'white,black', 'M', 'ORIGINAL', '物空2017春新款韩版休闲潮男纯色假两件长袖T恤', NULL, NULL, 3, NULL),
(15, 'img/15.jpg', 128, '连帽卫衣', '百搭', 10, 'white,green', 'M,S,L', 'ET BABY', '原创新品美式街头连帽卫衣 日系复古马金路德头像 印花套头罩衫男', NULL, NULL, 3, NULL),
(16, 'img/16.jpg', 213, '上衣', '夹克', 70, 'white', 'M,L', 'ORIGINAL', '原创新款棒球领收口夹克 日系工装复古短款外套 军事风上衣男装潮', NULL, NULL, 3, NULL),
(17, 'img/17.jpg', 128, '夹克', '连帽', 10, 'white,yellow', 'M,L', 'ORIGINAL', '原创春季美式薄款连帽外套 日系宽松撞色拼接内印花冲锋夹克男装', NULL, NULL, 3, NULL),
(18, 'img/18.jpg', 666, '外套', '夹克', 12, 'white', 'XXL', 'ET BABY', '原创新款日系复古宽松夹克 撞色休闲百搭经典棒球衣水洗外套男潮', NULL, NULL, 3, NULL),
(19, 'img/19.jpg', 128, 'T恤', '百搭', 10, 'white', 'M,S', 'TMCAZ', 'TMCAZ 官方商店 / 解构黑白条纹衬衫', NULL, NULL, 3, NULL),
(20, 'img/20.jpg', 785, '衬衫', '格纹', 43, 'white,black', 'M,L', 'ORIGINAL', '原创春装新款宝蓝色套头卫衣 日系字母刺绣圆领套头衫 美式街头潮', NULL, NULL, 3, NULL),
(21, 'img/21.jpg', 128, 'T恤', '百搭', 10, 'white', 'S,M', 'ET BABY', 'TMCAZ 官方商店 / 格纹训练衬衫', NULL, NULL, 3, NULL),
(22, 'img/22.jpg', 981, '男T恤', '百搭', 10, 'white', 'M', 'ET BABY', '原创独立设计师男装-个性定制-暗纹皱麻肌理简洁长款男装风衣外套', NULL, NULL, 3, NULL),
(23, 'img/23.jpg', 1587, 'T恤', '百搭', 10, 'white,gray', 'L,XXL', 'RISIN', '夏季新款日系港风潮牌原创高街字母休闲拼接拼色男女情侣短袖T恤', NULL, NULL, 3, NULL),
(24, 'img/24.jpg', 123, 'T恤衫', '百搭', 66, 'white', 'M', 'ET BABY', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, NULL, 3, NULL),
(25, 'img/25.jpg', 751, '风衣外套', '百搭', 10, 'white', 'S,M,XL', '原创品牌正品店', 'RETROMIND 17SS OVERSIZE黑牛仔外套', NULL, NULL, 3, NULL),
(26, 'img/26.jpg', 128, 'T恤', '飞机', 10, 'white，gray', 'L,M,XL', 'ET BABY', 'ETBABY 原创潮牌 原宿港风纯色t恤日系学生修身圆领百搭短袖男女T', NULL, NULL, 3, NULL),
(27, 'img/27.jpg', 118, '短袖t恤', '夏装新款', 37, 'white', 'S，M', 'ET BABY', 'ETBABY 原创潮牌欧美美式复古简约眼睛印花休闲男半袖中袖短袖T恤', NULL, NULL, 3, NULL),
(28, 'img/28.jpg', 138, 'T恤', '百搭', 10, 'white,gray', 'M,L', 'ET BABY', 'ETBABY 原创潮牌 原宿插肩休闲圆领短袖T恤欧美简约男女tee情侣夏', NULL, NULL, 3, NULL),
(29, 'img/29.jpg', 128, 'T恤', '百搭', 210, 'white', 'L,XL', 'ET BABY', 'ETBABY 原创潮牌 日系复古原宿港风横须贺刺绣插肩短袖T恤男女tee', NULL, NULL, 3, NULL),
(30, 'img/30.jpg', 128, 'T恤', '百搭', 40, 'white', 'M,L', 'ET BABY', 'ETBABY 原创潮牌 日系原宿休闲简约拼接圆领半袖体恤男女短袖T恤', NULL, NULL, 3, NULL),
(31, 'img/31.jpg', 118, 'T恤', '新款', 10, 'white,yellow', 'L,XL', 'ET BABY', 'ETBABY 原创潮牌日系西海岸死飞圆领修身印花百搭男女短袖半袖t恤', NULL, NULL, 3, NULL),
(32, 'img/32.jpg', 118, 'T恤', '百搭', 215, 'white,black', 'S,M', 'ET BABY', 'TBABY 原创潮牌 港风复古简约假两件贴布纯棉短袖T恤男', NULL, NULL, 3, NULL),
(33, 'img/33.jpg', 128, 'T恤', '百搭', 10, 'white', 'L,XL', '皮包', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, NULL, 2, NULL),
(34, 'img/34.jpg', 128, 'T恤', '百搭', 10, 'gray', 'M', '手环', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, NULL, 2, NULL),
(35, 'img/35.jpg', 128, 'T恤', '百搭', 10, 'white', 'S,M', 'USB', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, NULL, 2, NULL),
(36, 'img/36.jpg', 128, 'T恤', '百搭', 10, 'white,blue', 'M', '皮带', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, NULL, 2, NULL),
(37, 'img/37.jpg', 128, 'T恤', '百搭', 10, 'white', 'L', '桂花', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, NULL, 2, NULL),
(38, 'img/38.jpg', 128, 'T恤', '百搭', 10, 'white', 'M', '植物', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, NULL, 2, NULL),
(39, 'img/39.jpg', 128, 'T恤', '百搭', 10, 'yellow', 'S,M,L', '枕头', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, NULL, 1, NULL),
(40, 'img/40.jpg', 128, 'T恤', '百搭', 10, 'blue', 'M', '项链', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, NULL, 1, NULL),
(41, 'img/41.jpg', 128, 'T恤', '百搭', 10, 'black', 'M,L', '衣服', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, NULL, 1, NULL),
(42, 'img/42.jpg', 128, 'T恤', '百搭', 10, 'black', 'M', '书包', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, NULL, 1, NULL),
(43, 'img/43.jpg', 128, 'T恤', '百搭', 10, 'white,black', 'M', '男衣', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, NULL, 1, NULL),
(44, 'img/44.jpg', 128, 'T恤', '百搭', 10, 'white', 'XXL', '女衣', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, NULL, 1, NULL),
(45, 'img/45.jpg', 128, 'T恤', '百搭', 10, 'white,yellow', 'M', 'led灯', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, NULL, 4, NULL),
(46, 'img/46.jpg', 128, 'T恤', '百搭', 10, 'white', 'L,XL', '手机包', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, NULL, 4, NULL),
(47, 'img/47.jpg', 128, 'T恤', '百搭', 10, 'white,gray', 'M', '手提包', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, NULL, 4, NULL),
(48, 'img/48.jpg', 128, 'T恤', '百搭', 10, 'white', 'S,M', '书包', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, NULL, 4, NULL),
(49, 'img/49.jpg', 128, 'T恤', '百搭', 10, 'white,red', 'M', '男装外套', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, NULL, 4, NULL),
(50, 'img/50.jpg', 128, 'T恤', '百搭', 10, 'green', 'M,MM', '外套', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, NULL, 4, NULL),
(51, 'img/51.jpg', 128, 'T恤', '百搭', 10, 'black,red', 'M,L', '衬衣', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, NULL, 4, NULL),
(52, 'img/52.jpg', 128, 'T恤', '百搭', 10, 'white', 'M', '手提包', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, NULL, 4, NULL),
(53, 'img/53.jpg', 128, 'T恤', '百搭', 10, 'white,gray', 'L,XL', '电源', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, NULL, 5, NULL),
(54, 'img/54.jpg', 128, 'T恤', '百搭', 10, 'white', 'M', '男士休闲库', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, NULL, 5, NULL),
(55, 'img/55.jpg', 128, 'T恤', '百搭', 10, 'white', 'S,M', '裙裤', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, NULL, 5, NULL),
(56, 'img/56.jpg', 128, 'T恤', '百搭', 10, 'white,black', 'M', '上衣', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, NULL, 5, NULL),
(57, 'img/57.jpg', 128, 'T恤', '百搭', 10, 'white', 'M', '保温杯', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, NULL, 5, NULL),
(58, 'img/58.jpg', 128, 'T恤', '百搭', 10, 'red,yellow', 'S', '小脚裤', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, NULL, 5, NULL),
(59, 'img/59.jpg', 128, 'T恤', '百搭', 10, 'white', 'M', '长裤', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, NULL, 5, NULL),
(60, 'img/60.jpg', 128, 'T恤', '百搭', 10, 'white,yellow', 'M', '打底衫', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, NULL, 5, NULL),
(61, 'img/61.jpg', 128, 'T恤', '百搭', 10, 'white', 'M,L', 'ET BABY', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, NULL, 6, NULL),
(62, 'img/62.jpg', 128, 'T恤', '百搭', 10, 'white,orange', 'M', 'ET BABY', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, NULL, 6, NULL),
(63, 'img/63.jpg', 128, 'T恤', '百搭', 10, 'white,blue', 'S,M', 'ET BABY', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, NULL, 6, NULL),
(64, 'img/64.jpg', 128, 'T恤', '百搭', 10, 'white', 'M', 'ET BABY', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, NULL, 6, NULL),
(65, 'img/65.jpg', 128, 'T恤', '百搭', 10, 'white', 'M,L', 'ET BABY', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, NULL, 6, NULL),
(66, 'img/66.jpg', 128, 'T恤', '百搭', 10, 'white', 'M', 'ET BABY', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, NULL, 6, NULL),
(67, 'img/67.jpg', 128, 'T恤', '百搭', 10, 'white,red', 'M,MM', 'ET BABY', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, NULL, 6, NULL),
(68, 'img/68.jpg', 110, 'T恤', '百搭', 10, 'white', 'M', '紫光檀木耳坠', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, '方寸木作', 11, NULL),
(69, 'img/69.jpg', 53, 'T恤', '百搭', 10, 'orange,red', 'S,M', '日是茶杯托盘', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, 'grado格度', 11, NULL),
(70, 'img/70.jpg', 200, 'T恤', '百搭', 10, 'white,orange', 'M', '招财猫小夜灯', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, '极简', 11, NULL),
(71, 'img/71.jpg', 120, 'T恤', '百搭', 10, 'white', 'L,XL,XXL', '黑白拼木挂饰项链', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, '方寸木作', 11, NULL),
(72, 'img/72.jpg', 83, 'T恤', '百搭', 10, 'white', 'M', '创意折叠小木镜', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, '匠艺', 11, NULL),
(73, 'img/73.jpg', 119, 'T恤', '百搭', 10, 'black,gray', 'L,XL', '吃货专属进口零食大礼包', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, '味蕾之诗', 11, NULL),
(74, 'img/74.jpg', 78, 'T恤', '百搭', 10, 'white', 'M', '纯银蕾丝感枝叶耳线', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, 'THISNESS', 11, NULL),
(75, 'img/75.jpg', 118, 'T恤', '百搭', 10, 'yellow,blue', 'M,L', '木质无线蓝牙音响', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, '智能集市', 11, NULL),
(76, 'img/76.jpg', 159, 'T恤', '百搭', 10, 'white,yellow', 'S,M', '刺绣日系连帽卫衣', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, 'ETBABY', 11, NULL),
(77, 'img/77.jpg', 32, 'T恤', '百搭', 10, 'white,yellow,black', 'M,L', '《谜题》系列记事本', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, '木与石', 11, NULL),
(78, 'img/78.jpg', 85, 'T恤', '百搭', 10, 'red,orange', 'XL,XXL', '单肩手拿旗袍包', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, '原素时光', 11, NULL),
(79, 'img/79.jpg', 128, 'T恤', '百搭', 10, 'white', 'MM,S,M', '夜莺', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, NULL, 7, '刚刚'),
(80, 'img/80.jpg', 128, 'T恤', '百搭', 10, 'orange', 'M', 'ET BABY', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, NULL, 7, '刚刚'),
(81, 'img/81.jpg', 128, 'T恤', '百搭', 10, 'white', 'S,M', '江尾', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, NULL, 7, '1分钟前'),
(82, 'img/82.jpg', 128, 'T恤', '百搭', 10, 'white,green', 'M,XL', '娇', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, NULL, 7, '1分钟前'),
(83, 'img/83.jpg', 128, 'T恤', '百搭', 10, 'red,green', 'L,XL', '雪梨', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, NULL, 7, '1分钟前'),
(84, 'img/84.jpg', 128, 'T恤', '百搭', 10, 'white', 'L', '小悦', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, NULL, 7, '2分钟前'),
(85, 'img/85.jpg', 128, 'T恤', '百搭', 10, 'white', 'M,L', '将息', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, NULL, 7, '2分钟前'),
(86, 'img/86.jpg', 128, 'T恤', '百搭', 10, 'white,black', 'S,M', '不方', 'ETBABY 原创潮牌t恤百搭宽松休闲短袖男半袖', NULL, NULL, 7, '2分钟前');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键id', AUTO_INCREMENT=87;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
