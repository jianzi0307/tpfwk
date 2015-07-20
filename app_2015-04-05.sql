/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table app_useradmin
# ------------------------------------------------------------

DROP TABLE IF EXISTS `app_useradmin`;

CREATE TABLE `app_useradmin` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '管理用户ID',
  `uname` varchar(50) NOT NULL DEFAULT '' COMMENT '用户名',
  `passwd` varchar(50) NOT NULL DEFAULT '' COMMENT '密码',
  `nickname` varchar(50) DEFAULT NULL COMMENT '昵称',
  PRIMARY KEY (`id`),
  KEY `uname` (`uname`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `app_useradmin` WRITE;
/*!40000 ALTER TABLE `app_useradmin` DISABLE KEYS */;

INSERT INTO `app_useradmin` (`id`, `uname`, `passwd`, `nickname`)
VALUES
	(1,'admin','9931a42da138132c04c97a55a6eec855',NULL),
	(2,'jianzi','9931a42da138132c04c97a55a6eec855',NULL);

/*!40000 ALTER TABLE `app_useradmin` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table sys_auth_group
# ------------------------------------------------------------

DROP TABLE IF EXISTS `sys_auth_group`;

CREATE TABLE `sys_auth_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '组ID',
  `title` char(100) NOT NULL DEFAULT '' COMMENT '组名',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态（启用，禁用）',
  `rules` char(80) NOT NULL DEFAULT '' COMMENT '认证规则',
  `description` text COMMENT '组描述',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



# Dump of table sys_auth_group_access
# ------------------------------------------------------------

DROP TABLE IF EXISTS `sys_auth_group_access`;

CREATE TABLE `sys_auth_group_access` (
  `uid` mediumint(8) unsigned NOT NULL COMMENT '用户ID',
  `group_id` mediumint(8) unsigned NOT NULL COMMENT '组ID',
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



# Dump of table sys_auth_rule
# ------------------------------------------------------------

DROP TABLE IF EXISTS `sys_auth_rule`;

CREATE TABLE `sys_auth_rule` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '规则ID',
  `name` char(80) NOT NULL DEFAULT '' COMMENT '规则标识',
  `title` char(20) NOT NULL DEFAULT '' COMMENT '规则描述',
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '规则类型',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '规则状态（启用，禁用）',
  `condition` char(100) NOT NULL DEFAULT '' COMMENT '扩展条件',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
