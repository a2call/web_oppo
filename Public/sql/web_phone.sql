/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : web_oppo

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-04-28 01:19:42
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for web_phone
-- ----------------------------
DROP TABLE IF EXISTS `web_phone`;
CREATE TABLE `web_phone` (
  `id` int(32) unsigned NOT NULL,
  `pname` varchar(64) NOT NULL,
  `type` tinyint(2) unsigned NOT NULL,
  `network` tinyint(3) unsigned NOT NULL,
  `price` smallint(16) unsigned NOT NULL,
  `pic` varchar(64) NOT NULL,
  `description` text,
  `addtime` datetime DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(1) DEFAULT '0',
  `priced` smallint(16) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
