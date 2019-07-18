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

 Date: 18/07/2019 14:55:41
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for data_request
-- ----------------------------
DROP TABLE IF EXISTS `data_request`;
CREATE TABLE `data_request`  (
  `no_psa` int(50) NOT NULL,
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
  PRIMARY KEY (`no_psa`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of data_request
-- ----------------------------
INSERT INTO `data_request` VALUES (1030562019, 'Supra', '09986', 'Supply Chain', '2019-07-09', '2019-07-09', 'Pengarsipan Data', '2', '2019-07-31', '2019-07-23', NULL);

-- ----------------------------
-- Table structure for detail
-- ----------------------------
DROP TABLE IF EXISTS `detail`;
CREATE TABLE `detail`  (
  `no_psad` int(255) NULL DEFAULT NULL,
  `permasalahan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `fungsi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `pengguna` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `input` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `proses` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `output` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `kebutuhan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of detail
-- ----------------------------
INSERT INTO `detail` VALUES (1030562019, 'gudang arsip penuh', 'pengarsipan data gfsgfdytdcfty6rtfcgfdcttgfdctrddtyhgvgvyftyfcrt5dfcfgxtrdtufjhvyjfytdcxytfjv btfftfv ctyfytrfgfcyr ffyf tyr76rttv nfn  fyntfytfm v ftymh vg', 'sekretaris divisi', 'data scan', 'proses', 'data tabel arsip', 'server');

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
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

SET FOREIGN_KEY_CHECKS = 1;
