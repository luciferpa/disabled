/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : disabled_db

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-10-13 11:55:08
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for account
-- ----------------------------
DROP TABLE IF EXISTS `account`;
CREATE TABLE `account` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `a_id_card` varchar(255) DEFAULT NULL,
  `b_id` int(11) DEFAULT NULL,
  `a_branch` varchar(255) DEFAULT NULL,
  `a_type` varchar(255) DEFAULT NULL,
  `a_account` varchar(255) DEFAULT NULL,
  `a_status` varchar(2) DEFAULT '1',
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of account
-- ----------------------------

-- ----------------------------
-- Table structure for bank
-- ----------------------------
DROP TABLE IF EXISTS `bank`;
CREATE TABLE `bank` (
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  `b_code` varchar(255) DEFAULT NULL,
  `b_name` varchar(255) DEFAULT NULL,
  `b_status` varchar(2) DEFAULT '1',
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bank
-- ----------------------------

-- ----------------------------
-- Table structure for dead
-- ----------------------------
DROP TABLE IF EXISTS `dead`;
CREATE TABLE `dead` (
  `d_id` int(11) NOT NULL AUTO_INCREMENT,
  `d_id_card` varchar(255) DEFAULT NULL,
  `d_no` varchar(255) DEFAULT NULL,
  `d_no1` varchar(255) DEFAULT NULL,
  `t_no` int(11) DEFAULT NULL,
  `d_date` date DEFAULT NULL,
  `d_date1` date DEFAULT NULL,
  `d_date2` date DEFAULT NULL,
  `d_date3` date DEFAULT NULL,
  `d_title` varchar(255) DEFAULT NULL,
  `d_name` varchar(255) DEFAULT NULL,
  `d_surname` varchar(255) DEFAULT NULL,
  `d_birth` date DEFAULT NULL,
  `d_age` int(11) DEFAULT NULL,
  `d_national` varchar(255) DEFAULT NULL,
  `d_address` varchar(255) DEFAULT NULL,
  `d_lane` varchar(255) DEFAULT NULL,
  `d_road` varchar(255) DEFAULT NULL,
  `d_district` varchar(255) DEFAULT NULL,
  `d_amphur` varchar(255) DEFAULT NULL,
  `l_id` int(11) DEFAULT NULL,
  `province_id` int(11) DEFAULT NULL,
  `d_zipcode` varchar(255) DEFAULT NULL,
  `d_tel1` varchar(255) DEFAULT NULL,
  `d_m_status` varchar(255) DEFAULT NULL,
  `d_name1` varchar(255) DEFAULT NULL,
  `d_surname1` varchar(255) DEFAULT NULL,
  `d_tel2` varchar(255) DEFAULT NULL,
  `d_pertain` varchar(255) DEFAULT NULL,
  `d_receive` varchar(255) DEFAULT NULL,
  `d_home` varchar(255) DEFAULT NULL,
  `d_cbid` varchar(255) DEFAULT NULL,
  `d_cbn` varchar(255) DEFAULT NULL,
  `d_month` varchar(255) DEFAULT NULL,
  `d_year` varchar(255) DEFAULT NULL,
  `d_status` varchar(2) DEFAULT '1',
  PRIMARY KEY (`d_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dead
-- ----------------------------

-- ----------------------------
-- Table structure for disability
-- ----------------------------
DROP TABLE IF EXISTS `disability`;
CREATE TABLE `disability` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `a_id_card` varchar(255) DEFAULT NULL,
  `a_no` varchar(255) DEFAULT NULL,
  `a_date` date DEFAULT NULL,
  `a_title` varchar(255) DEFAULT NULL,
  `a_name` varchar(255) DEFAULT NULL,
  `a_surname` varchar(255) DEFAULT NULL,
  `a_birth` date DEFAULT NULL,
  `a_age` int(11) DEFAULT NULL,
  `a_national` varchar(255) DEFAULT NULL,
  `a_address` varchar(255) DEFAULT NULL,
  `a_lane` varchar(255) DEFAULT NULL,
  `a_road` varchar(255) DEFAULT NULL,
  `a_district` varchar(255) DEFAULT NULL,
  `a_amphur` varchar(255) DEFAULT NULL,
  `l_id` int(11) DEFAULT NULL,
  `provice_id` int(11) DEFAULT NULL,
  `a_zipcode` varchar(255) DEFAULT NULL,
  `a_tel1` varchar(255) DEFAULT NULL,
  `a_m_status` varchar(2) DEFAULT NULL,
  `a_other1` varchar(255) DEFAULT NULL,
  `a_name1` varchar(255) DEFAULT NULL,
  `a_surname1` varchar(255) DEFAULT NULL,
  `a_tel2` varchar(255) DEFAULT NULL,
  `a_pertain` varchar(255) DEFAULT NULL,
  `a_other2` varchar(255) DEFAULT NULL,
  `a_receive` varchar(255) DEFAULT NULL,
  `a_home` varchar(255) DEFAULT NULL,
  `a_cbid` varchar(255) DEFAULT NULL,
  `a_cbn` varchar(255) DEFAULT NULL,
  `a_month` varchar(255) DEFAULT NULL,
  `a_year` varchar(255) DEFAULT NULL,
  `a_note` text,
  `a_status` varchar(1) DEFAULT '1',
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of disability
-- ----------------------------

-- ----------------------------
-- Table structure for limit
-- ----------------------------
DROP TABLE IF EXISTS `limit`;
CREATE TABLE `limit` (
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  `l_code` varchar(255) DEFAULT NULL,
  `l_name` varchar(255) DEFAULT NULL,
  `l_status` varchar(2) DEFAULT '1',
  PRIMARY KEY (`l_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of limit
-- ----------------------------

-- ----------------------------
-- Table structure for logfile
-- ----------------------------
DROP TABLE IF EXISTS `logfile`;
CREATE TABLE `logfile` (
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  `l_id_card` varchar(255) DEFAULT NULL,
  `l_date` date DEFAULT NULL,
  `l_time` time DEFAULT NULL,
  `l_ip` varchar(255) DEFAULT NULL,
  `l_status` varchar(2) DEFAULT '1',
  PRIMARY KEY (`l_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of logfile
-- ----------------------------

-- ----------------------------
-- Table structure for logonuser
-- ----------------------------
DROP TABLE IF EXISTS `logonuser`;
CREATE TABLE `logonuser` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id_card` varchar(255) DEFAULT NULL,
  `user_isstaff` varchar(255) DEFAULT NULL,
  `user_title` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_surname` varchar(255) DEFAULT NULL,
  `l_id` int(11) DEFAULT NULL,
  `user_tel` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_pass` varchar(255) DEFAULT NULL,
  `user_status` varchar(2) DEFAULT '1',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of logonuser
-- ----------------------------

-- ----------------------------
-- Table structure for money_rate
-- ----------------------------
DROP TABLE IF EXISTS `money_rate`;
CREATE TABLE `money_rate` (
  `m_no` int(11) NOT NULL AUTO_INCREMENT,
  `m_rate` decimal(10,0) DEFAULT NULL,
  `m_status` varchar(2) DEFAULT '1',
  PRIMARY KEY (`m_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of money_rate
-- ----------------------------

-- ----------------------------
-- Table structure for nominee
-- ----------------------------
DROP TABLE IF EXISTS `nominee`;
CREATE TABLE `nominee` (
  `no_id` int(11) NOT NULL AUTO_INCREMENT,
  `no_id_card` varchar(255) DEFAULT NULL,
  `no_date` date DEFAULT NULL,
  `no_id_nominee` varchar(255) DEFAULT NULL,
  `no_title` varchar(255) DEFAULT NULL,
  `no_name` varchar(255) DEFAULT NULL,
  `no_surname` varchar(255) DEFAULT NULL,
  `no_place` varchar(255) DEFAULT NULL,
  `no_date1` date DEFAULT NULL,
  `no_address` varchar(255) DEFAULT NULL,
  `no_lane` varchar(255) DEFAULT NULL,
  `no_road` varchar(255) DEFAULT NULL,
  `no_district` varchar(255) DEFAULT NULL,
  `no_amphur` varchar(255) DEFAULT NULL,
  `province_id` int(11) DEFAULT NULL,
  `no_status` varchar(2) DEFAULT '1',
  PRIMARY KEY (`no_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nominee
-- ----------------------------

-- ----------------------------
-- Table structure for petitioner
-- ----------------------------
DROP TABLE IF EXISTS `petitioner`;
CREATE TABLE `petitioner` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id_card` varchar(255) DEFAULT NULL,
  `p_p_status` varchar(255) DEFAULT NULL,
  `p_pertain` varchar(255) DEFAULT NULL,
  `p_title` varchar(255) DEFAULT NULL,
  `p_name` varchar(255) DEFAULT NULL,
  `p_surname` varchar(255) DEFAULT NULL,
  `p_id_petitioner` varchar(255) DEFAULT NULL,
  `p_address` varchar(255) DEFAULT NULL,
  `p_lane` varchar(255) DEFAULT NULL,
  `p_road` varchar(255) DEFAULT NULL,
  `p_district` varchar(255) DEFAULT NULL,
  `p_amphur` varchar(255) DEFAULT NULL,
  `province_id` int(11) DEFAULT NULL,
  `p_tel` varchar(255) DEFAULT NULL,
  `p_status` varchar(2) DEFAULT '1',
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of petitioner
-- ----------------------------

-- ----------------------------
-- Table structure for title
-- ----------------------------
DROP TABLE IF EXISTS `title`;
CREATE TABLE `title` (
  `title_id` int(11) NOT NULL AUTO_INCREMENT,
  `title_name` varchar(255) DEFAULT NULL,
  `title_status` varchar(2) DEFAULT '1',
  PRIMARY KEY (`title_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of title
-- ----------------------------
INSERT INTO `title` VALUES ('1', 'นาย', '1');
INSERT INTO `title` VALUES ('2', 'นางสาว', '1');
INSERT INTO `title` VALUES ('3', 'นาง', '1');
INSERT INTO `title` VALUES ('4', 'ด.ช.', '1');
INSERT INTO `title` VALUES ('5', 'ด.ญ.', '1');
