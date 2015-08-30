/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50612
Source Host           : localhost:3306
Source Database       : news

Target Server Type    : MYSQL
Target Server Version : 50612
File Encoding         : 65001

Date: 2015-08-30 23:00:42
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for news_manager
-- ----------------------------
DROP TABLE IF EXISTS `news_manager`;
CREATE TABLE `news_manager` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `passwd` char(32) NOT NULL,
  `time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `role_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news_manager
-- ----------------------------
INSERT INTO `news_manager` VALUES ('2', 'xinzhu', 'e10adc3949ba59abbe56e057f20f883e', '2015-08-13 22:07:45', '2');
INSERT INTO `news_manager` VALUES ('3', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '2015-08-27 22:07:49', '1');
INSERT INTO `news_manager` VALUES ('5', 'zhangsan', 'e10adc3949ba59abbe56e057f20f883e', '2015-08-29 22:07:52', '2');

-- ----------------------------
-- Table structure for news_news
-- ----------------------------
DROP TABLE IF EXISTS `news_news`;
CREATE TABLE `news_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of news_news
-- ----------------------------
INSERT INTO `news_news` VALUES ('1', '月入30万，地下招生缘何获利惊人', '华商报揭秘的“地下招生团队”是专门负责自考招生的社会组织，承接自考的招生任务，收入不菲。那么，什么是自考呢？ 自考是“高等教育自学考试”的简称，此项制度始于上世纪80年代初，其产生有着特殊的历史背景：一方面，高考制度刚刚恢复，想要读书深造、接受高等教育的人数量庞大，而现有的教育资源不能满足这么多需求；另一方面，改革开放后我国经济建设加速，社会也需要众多的高素质人才。因此，自考制度以其质量优势、培养成本优势、开放优势等大受考生欢迎。', '2015-08-30 12:47:24');
INSERT INTO `news_news` VALUES ('2', '“美军观察组”如何评价八路军？', '华商报安康讯（记者 王斌 实习生 李生超）8月27日，安康市汉滨区法院一法官爆料称，该院19名法官和司法警察在山西省昔阳县执行案件时遭百余人围攻，4辆警车被扣，多名人员受伤，8个多小时后才被解救出来。', '2015-08-29 12:52:21');
INSERT INTO `news_news` VALUES ('3', '俄罗斯高官称赴美受限是“政治迫害\"', '国际在线专稿：据俄罗斯卫星网27日报道，俄上议院议长瓦莲京娜·马特维延科表示，俄方将在所有的国际议会平台上提出有关不容许将议员加入制裁名单的问题。\r\n\r\n　　马特维延科说：“我们将提出这个问题，即不容许出于政治原因对其他国家的议员进行任何制裁。这应在国际层面上加以保障。”', '2015-08-30 12:52:19');
INSERT INTO `news_news` VALUES ('4', '全球人均寿命延长6年 达71.5岁', '据《每日邮报》报道，由华盛顿大学一所健康研究院牵头进行的一项最新调研表明，全球人均寿命从1990年的65.3岁上升到了2013年的71.5岁。另外值得一提的是，全球平均健康寿命同时上升，意味总体上人们免受疾病侵扰的生活更长久了。', '2015-08-30 12:52:52');
INSERT INTO `news_news` VALUES ('5', '英国工人在公路桥梁下发现百年前威士忌', '中新网8月27日电 据英国媒体报道，近日，在英国凯恩高姆洼地的一些桥梁养护工人在对当地一个桥梁进行翻修维护时，意外地在这座公路桥的桥面下深处，发现了一个“时间胶囊”。工人们打开后发现里面有一份1894年9月的报纸和一瓶威士忌。目前，这些东西都被存放在纽顿莫的“高地民俗博物馆”内。', '2015-08-30 12:53:22');

-- ----------------------------
-- Table structure for news_readers
-- ----------------------------
DROP TABLE IF EXISTS `news_readers`;
CREATE TABLE `news_readers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `passwd` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of news_readers
-- ----------------------------
INSERT INTO `news_readers` VALUES ('1', 'wang', 'e10adc3949ba59abbe56e057f20f883e', '', '');

-- ----------------------------
-- Table structure for news_role
-- ----------------------------
DROP TABLE IF EXISTS `news_role`;
CREATE TABLE `news_role` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `pid` smallint(6) DEFAULT NULL,
  `status` tinyint(1) unsigned DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news_role
-- ----------------------------
INSERT INTO `news_role` VALUES ('2', '管理者', '1', '1', '管理新闻，管理读者');
INSERT INTO `news_role` VALUES ('1', '开发者', '0', '1', '所有操作');

-- ----------------------------
-- Table structure for news_role_user
-- ----------------------------
DROP TABLE IF EXISTS `news_role_user`;
CREATE TABLE `news_role_user` (
  `role_id` mediumint(9) unsigned DEFAULT NULL,
  `user_id` char(32) DEFAULT NULL,
  KEY `group_id` (`role_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news_role_user
-- ----------------------------
INSERT INTO `news_role_user` VALUES ('2', '2');
INSERT INTO `news_role_user` VALUES ('1', '3');
