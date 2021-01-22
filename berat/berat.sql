/*
 Navicat Premium Data Transfer

 Source Server         : Local_bri
 Source Server Type    : MySQL
 Source Server Version : 100138
 Source Host           : localhost:3306
 Source Schema         : berat

 Target Server Type    : MySQL
 Target Server Version : 100138
 File Encoding         : 65001

 Date: 22/01/2021 13:49:37
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for log
-- ----------------------------
DROP TABLE IF EXISTS `log`;
CREATE TABLE `log`  (
  `message` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `message_type` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `from_api` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_datetime` datetime(0) NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of log
-- ----------------------------
INSERT INTO `log` VALUES ('{\"Api\":\"Request Save Berat\",\"tanggal\":\"2021-08-18\",\"max\":\"50\",\"min\":\"48\"}', '01RQ', 'SaveData', '2021-01-22 13:11:49');
INSERT INTO `log` VALUES ('{\"code\":\"00\",\"message\":\"Insert Data Berhasil\"}', '02RP', 'SaveData', '2021-01-22 13:11:49');
INSERT INTO `log` VALUES ('{\"Api\":\"Request Save Berat\",\"tanggal\":\"2021-08-19\",\"max\":\"51\",\"min\":\"50\"}', '01RQ', 'SaveData', '2021-01-22 13:12:12');
INSERT INTO `log` VALUES ('{\"code\":\"00\",\"message\":\"Insert Data Berhasil\"}', '02RP', 'SaveData', '2021-01-22 13:12:13');
INSERT INTO `log` VALUES ('{\"Api\":\"Request Save Berat\",\"tanggal\":\"2021-08-20\",\"max\":\"52\",\"min\":\"50\"}', '01RQ', 'SaveData', '2021-01-22 13:12:28');
INSERT INTO `log` VALUES ('{\"code\":\"00\",\"message\":\"Insert Data Berhasil\"}', '02RP', 'SaveData', '2021-01-22 13:12:28');
INSERT INTO `log` VALUES ('{\"Api\":\"Request Save Berat\",\"tanggal\":\"2021-08-21\",\"max\":\"49\",\"min\":\"49\"}', '01RQ', 'SaveData', '2021-01-22 13:12:44');
INSERT INTO `log` VALUES ('{\"code\":\"00\",\"message\":\"Insert Data Berhasil\"}', '02RP', 'SaveData', '2021-01-22 13:12:44');
INSERT INTO `log` VALUES ('{\"Api\":\"Request Save Berat\",\"tanggal\":\"2021-08-22\",\"max\":\"50\",\"min\":\"49\"}', '01RQ', 'SaveData', '2021-01-22 13:13:01');
INSERT INTO `log` VALUES ('{\"code\":\"00\",\"message\":\"Insert Data Berhasil\"}', '02RP', 'SaveData', '2021-01-22 13:13:01');
INSERT INTO `log` VALUES ('{\"Api\":\"Request Save Berat\",\"tanggal\":\"2021-10-10\",\"max\":\"100\",\"min\":\"10\"}', '01RQ', 'SaveData', '2021-01-22 13:25:44');
INSERT INTO `log` VALUES ('{\"code\":\"00\",\"message\":\"Insert Data Berhasil\"}', '02RP', 'SaveData', '2021-01-22 13:25:44');
INSERT INTO `log` VALUES ('{\"Api\":\"Request Save Berat\",\"tanggal\":\"2021-10-10\",\"max\":\"100\",\"min\":\"10\"}', '01RQ', 'SaveData', '2021-01-22 13:33:40');
INSERT INTO `log` VALUES ('{\"code\":\"00\",\"message\":\"Insert Data Berhasil\"}', '02RP', 'SaveData', '2021-01-22 13:33:40');
INSERT INTO `log` VALUES ('{\"Api\":\"Request Update Berat\",\"id\":\"6\",\"tanggal\":\"2021-10-10\",\"max\":\"100\",\"min\":\"5\"}', '01RQ', 'UpdateData', '2021-01-22 13:33:50');
INSERT INTO `log` VALUES ('{\"code\":\"00\",\"message\":\"Update Data Berhasil\"}', '02RP', 'UpdateData', '2021-01-22 13:33:50');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for tbl_berat
-- ----------------------------
DROP TABLE IF EXISTS `tbl_berat`;
CREATE TABLE `tbl_berat`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NULL DEFAULT NULL,
  `max` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `min` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_berat
-- ----------------------------
INSERT INTO `tbl_berat` VALUES (1, '2021-08-18', '50', '48');
INSERT INTO `tbl_berat` VALUES (2, '2021-08-19', '51', '50');
INSERT INTO `tbl_berat` VALUES (3, '2021-08-20', '52', '50');
INSERT INTO `tbl_berat` VALUES (4, '2021-08-21', '49', '49');
INSERT INTO `tbl_berat` VALUES (5, '2021-08-22', '50', '49');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'admin', 'admin@gmail.com', '$2y$10$yhwgnXxse4mXZLHgb1VkZeQ7ZKFgHaJpT1bkXIAWgzP4lYGYoZHym', 'nCnCVoSZ5C0kzFWURCudQfSqP3HZYNqUaTK27RmsQ3QlSq3zgMH0EgY8BANs', '2021-01-20 18:15:12', '2021-01-20 18:15:12');

SET FOREIGN_KEY_CHECKS = 1;
