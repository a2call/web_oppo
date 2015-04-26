/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : web_oppo

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-04-26 13:49:50
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for web_user
-- ----------------------------
DROP TABLE IF EXISTS `web_user`;
CREATE TABLE `web_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(33) DEFAULT NULL,
  `passwd` varchar(33) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `bAdministrator` tinyint(1) NOT NULL DEFAULT '0',
  `registertime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;
