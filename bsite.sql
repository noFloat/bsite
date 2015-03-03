/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50612
Source Host           : localhost:3306
Source Database       : bsite

Target Server Type    : MYSQL
Target Server Version : 50612
File Encoding         : 65001

Date: 2015-03-03 22:09:29
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `movie`
-- ----------------------------
DROP TABLE IF EXISTS `movie`;
CREATE TABLE `movie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) NOT NULL,
  `video_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `classes` varchar(255) NOT NULL,
  `site` varchar(255) NOT NULL,
  `pic_site` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of movie
-- ----------------------------
INSERT INTO `movie` VALUES ('5', '', '0', '0', '飓风营救', '2', '../movie/13.mp4', 'img/1.png');
INSERT INTO `movie` VALUES ('6', '', '0', '0', 'boom', '0', '../movie/25.mp4', 'img/2.png');
INSERT INTO `movie` VALUES ('7', '', '0', '0', 'cat', '1', '../movie/32.mp4', null);
INSERT INTO `movie` VALUES ('8', '', '0', '0', '超能陆战队', '0', '../movie/44.mp4', 'img/3.png');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(15) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('19', '12345', '1f32aa4c9a1d2ea010adcf2348166a04', 'sdsd');
INSERT INTO `user` VALUES ('20', 'wcgwcg', '14e1b600b1fd579f47433b88e8d85291', 'fsfa!22');
INSERT INTO `user` VALUES ('21', '111111', '9db06bcff9248837f86d1a6bcf41c9e7', 'sdhasjhdoksjodjo');
