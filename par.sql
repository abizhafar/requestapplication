/*
 Navicat Premium Data Transfer

 Source Server         : Local MySQL
 Source Server Type    : MySQL
 Source Server Version : 100134
 Source Host           : localhost:3306
 Source Schema         : par

 Target Server Type    : MySQL
 Target Server Version : 100134
 File Encoding         : 65001

 Date: 30/07/2019 08:47:56
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for data_request
-- ----------------------------
DROP TABLE IF EXISTS `data_request`;
CREATE TABLE `data_request`  (
  `no_psa` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_user` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_telp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `divisi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tgl_interview` date NULL DEFAULT NULL,
  `tgl_digunakan` date NULL DEFAULT NULL,
  `nama_aplikasi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tgl_onproses` date NULL DEFAULT NULL,
  `tgl_deploy` date NULL DEFAULT NULL,
  `departemen` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `permasalahan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `fungsi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `pengguna` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `input` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `proses` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `output` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `kebutuhan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `tgl_input` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`no_psa`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of data_request
-- ----------------------------
INSERT INTO `data_request` VALUES ('20192200001', 'Joko', '09237489112', 'Divisi Kapal Niaga', '1970-01-01', '2019-07-31', 'Aplikasi Pendataan', '1', '1970-01-01', '1970-01-01', 'Pengadaan', '- Tidak Ada', '- Tidak Ada', '- Tidak Ada', '- Tidak Ada', '- Tidak Ada', '- Tidak Ada', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2019-07-26 11:31:44');
INSERT INTO `data_request` VALUES ('20192300003', 'Jono', '07565872346', 'Divisi Kapal Perang', '1970-01-01', '2019-07-31', 'Aplikasi Pendataan', '4', '1970-01-01', '1970-01-01', 'Pengadaan', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', '', '', '', '', '', '2019-07-26 13:52:07');
INSERT INTO `data_request` VALUES ('20193100004', 'Ulil', '088876432357', 'Divisi Rekayasa Umum', NULL, '2019-07-08', 'Aplikasi rekayasa', '1', NULL, NULL, 'Rekayasa', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2019-07-26 13:58:58');
INSERT INTO `data_request` VALUES ('20196100002', 'Yani', '02495892375', 'Divisi Naval Technology', NULL, '2019-07-31', 'Aplikasi Pendataan', '1', NULL, NULL, 'Pengadaan', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2019-07-26 11:33:24');

-- ----------------------------
-- Table structure for detail
-- ----------------------------
DROP TABLE IF EXISTS `detail`;
CREATE TABLE `detail`  (
  `no_psad` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `permasalahan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `fungsi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `pengguna` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `input` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `proses` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `output` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `kebutuhan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for divisi
-- ----------------------------
DROP TABLE IF EXISTS `divisi`;
CREATE TABLE `divisi`  (
  `id_divisi` int(50) NOT NULL,
  `divisi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_divisi`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of divisi
-- ----------------------------
INSERT INTO `divisi` VALUES (11000, 'Sekertaris Perusahaan');
INSERT INTO `divisi` VALUES (12000, 'Satuan Pengawasan Intern');
INSERT INTO `divisi` VALUES (13000, 'Divisi Perancanaan Strategis Perusahaan');
INSERT INTO `divisi` VALUES (14000, 'Divisi Keamanan & K3LH');
INSERT INTO `divisi` VALUES (21000, 'Divisi Desain');
INSERT INTO `divisi` VALUES (22000, 'Divisi Kapal Niaga');
INSERT INTO `divisi` VALUES (23000, 'Divisi Kapal Perang');
INSERT INTO `divisi` VALUES (24000, 'Divisi Kapal Selam');
INSERT INTO `divisi` VALUES (25000, 'Divisi Pemasaran & Penjualan Kapal');
INSERT INTO `divisi` VALUES (31000, 'Divisi Rekayasa Umum');
INSERT INTO `divisi` VALUES (32000, 'Divisi Pemeliharaan & Perbaikan');
INSERT INTO `divisi` VALUES (33000, 'Divisi Penjualan Rekumhar');
INSERT INTO `divisi` VALUES (34000, 'Divisi Jaminan Kualitas');
INSERT INTO `divisi` VALUES (35000, 'Divisi Supply Chain');
INSERT INTO `divisi` VALUES (41000, 'Divisi Perbendaharaan');
INSERT INTO `divisi` VALUES (42000, 'Divisi Akuntansi');
INSERT INTO `divisi` VALUES (43000, 'Divisi Teknologi Informasi');
INSERT INTO `divisi` VALUES (51000, 'Divisi HCM & Command Media');
INSERT INTO `divisi` VALUES (52000, 'Divisi Kawasan');
INSERT INTO `divisi` VALUES (61000, 'Divisi Naval Technology');

-- ----------------------------
-- Table structure for saran_evaluasi
-- ----------------------------
DROP TABLE IF EXISTS `saran_evaluasi`;
CREATE TABLE `saran_evaluasi`  (
  `no_psa_se` int(255) NULL DEFAULT NULL,
  `saran_evaluasi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `tgl_se` date NULL DEFAULT NULL,
  `respon` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `tgl_respon` date NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id_user` int(50) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `akses` int(2) NULL DEFAULT NULL,
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);
INSERT INTO `user` VALUES (2, 'User1', 'user1', '24c9e15e52afc47c225b757e7bee1f9d', 1);

SET FOREIGN_KEY_CHECKS = 1;
