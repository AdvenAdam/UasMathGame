/*
Navicat MySQL Data Transfer

Source Server         : koneksi
Source Server Version : 50625
Source Host           : localhost:3306
Source Database       : mathgame

Target Server Type    : MYSQL
Target Server Version : 50625
File Encoding         : 65001

Date: 2020-05-20 13:46:04
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tbl_identitas`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_identitas`;
CREATE TABLE `tbl_identitas` (
  `Nama` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Score` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_identitas
-- ----------------------------
INSERT INTO `tbl_identitas` VALUES ('Adven', 'adven@a.dam', '7000');
INSERT INTO `tbl_identitas` VALUES ('Antom', 'An@t.on', '800');
INSERT INTO `tbl_identitas` VALUES ('janry', 'J@an.ry', '500');
INSERT INTO `tbl_identitas` VALUES ('muhaim', 'Muh@ai.min', '499');
INSERT INTO `tbl_identitas` VALUES ('fajar', 'Faj@jar.vom', '450');
INSERT INTO `tbl_identitas` VALUES ('yayan', 'yay@ay.an', '400');
INSERT INTO `tbl_identitas` VALUES ('tony', 'Wsa2s@sa.sa', '30');
INSERT INTO `tbl_identitas` VALUES ('adam', '17@as.us', '120');
INSERT INTO `tbl_identitas` VALUES ('nana', 'na@na.na', '300');
INSERT INTO `tbl_identitas` VALUES ('budy', 'bu@d.y', '350');
INSERT INTO `tbl_identitas` VALUES ('asd', 'as', '-10');
