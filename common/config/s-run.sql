/*
Navicat MySQL Data Transfer

Source Server         : 120.26.238.163
Source Server Version : 50547
Source Host           : 120.26.238.163:3306
Source Database       : hyii2

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2016-05-16 09:21:04
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `auth_assignment`
-- ----------------------------
DROP TABLE IF EXISTS `auth_assignment`;
CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` varchar(64) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_assignment
-- ----------------------------
INSERT INTO `auth_assignment` VALUES ('游客', '3', '1462504605');
INSERT INTO `auth_assignment` VALUES ('游客', '4', '1463020429');
INSERT INTO `auth_assignment` VALUES ('超级管理员', '1', '1461565010');

-- ----------------------------
-- Table structure for `auth_item`
-- ----------------------------
DROP TABLE IF EXISTS `auth_item`;
CREATE TABLE `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `type` (`type`),
  CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_item
-- ----------------------------
INSERT INTO `auth_item` VALUES ('/*', '2', null, null, null, '1461144290', '1461144290');
INSERT INTO `auth_item` VALUES ('/admin/*', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/assignment/*', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/assignment/assign', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/assignment/index', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/assignment/revoke', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/assignment/view', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/default/*', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/default/index', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/menu/*', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/menu/create', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/menu/delete', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/menu/index', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/menu/update', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/menu/view', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/permission/*', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/permission/assign', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/permission/create', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/permission/delete', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/permission/index', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/permission/remove', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/permission/update', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/permission/view', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/role/*', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/role/assign', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/role/create', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/role/delete', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/role/index', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/role/remove', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/role/update', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/role/view', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/route/*', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/route/assign', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/route/create', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/route/index', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/route/refresh', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/route/remove', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/rule/*', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/rule/create', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/rule/delete', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/rule/index', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/rule/update', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/rule/view', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/user/*', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/user/activate', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/user/change-password', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/user/delete', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/user/index', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/user/login', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/user/logout', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/user/request-password-reset', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/user/reset-password', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/user/signup', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/admin/user/view', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/cat/*', '2', null, null, null, '1462853289', '1462853289');
INSERT INTO `auth_item` VALUES ('/cat/create', '2', null, null, null, '1462853289', '1462853289');
INSERT INTO `auth_item` VALUES ('/cat/delete', '2', null, null, null, '1462853289', '1462853289');
INSERT INTO `auth_item` VALUES ('/cat/index', '2', null, null, null, '1462853289', '1462853289');
INSERT INTO `auth_item` VALUES ('/cat/update', '2', null, null, null, '1462853289', '1462853289');
INSERT INTO `auth_item` VALUES ('/cat/view', '2', null, null, null, '1462853289', '1462853289');
INSERT INTO `auth_item` VALUES ('/debug/*', '2', null, null, null, '1461144290', '1461144290');
INSERT INTO `auth_item` VALUES ('/debug/default/*', '2', null, null, null, '1461144290', '1461144290');
INSERT INTO `auth_item` VALUES ('/debug/default/db-explain', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/debug/default/download-mail', '2', null, null, null, '1461144290', '1461144290');
INSERT INTO `auth_item` VALUES ('/debug/default/index', '2', null, null, null, '1461144289', '1461144289');
INSERT INTO `auth_item` VALUES ('/debug/default/toolbar', '2', null, null, null, '1461144290', '1461144290');
INSERT INTO `auth_item` VALUES ('/debug/default/view', '2', null, null, null, '1461144290', '1461144290');
INSERT INTO `auth_item` VALUES ('/gii/*', '2', null, null, null, '1461144290', '1461144290');
INSERT INTO `auth_item` VALUES ('/gii/default/*', '2', null, null, null, '1461144290', '1461144290');
INSERT INTO `auth_item` VALUES ('/gii/default/action', '2', null, null, null, '1461144290', '1461144290');
INSERT INTO `auth_item` VALUES ('/gii/default/diff', '2', null, null, null, '1461144290', '1461144290');
INSERT INTO `auth_item` VALUES ('/gii/default/index', '2', null, null, null, '1461144290', '1461144290');
INSERT INTO `auth_item` VALUES ('/gii/default/preview', '2', null, null, null, '1461144290', '1461144290');
INSERT INTO `auth_item` VALUES ('/gii/default/view', '2', null, null, null, '1461144290', '1461144290');
INSERT INTO `auth_item` VALUES ('/log/*', '2', null, null, null, '1461578221', '1461578221');
INSERT INTO `auth_item` VALUES ('/log/create', '2', null, null, null, '1461578221', '1461578221');
INSERT INTO `auth_item` VALUES ('/log/delete', '2', null, null, null, '1461578221', '1461578221');
INSERT INTO `auth_item` VALUES ('/log/index', '2', null, null, null, '1461578221', '1461578221');
INSERT INTO `auth_item` VALUES ('/log/update', '2', null, null, null, '1461578221', '1461578221');
INSERT INTO `auth_item` VALUES ('/log/view', '2', null, null, null, '1461578221', '1461578221');
INSERT INTO `auth_item` VALUES ('/plugin/*', '2', null, null, null, '1462265112', '1462265112');
INSERT INTO `auth_item` VALUES ('/plugin/create', '2', null, null, null, '1462265112', '1462265112');
INSERT INTO `auth_item` VALUES ('/plugin/delete', '2', null, null, null, '1462265112', '1462265112');
INSERT INTO `auth_item` VALUES ('/plugin/demo', '2', null, null, null, '1462504682', '1462504682');
INSERT INTO `auth_item` VALUES ('/plugin/index', '2', null, null, null, '1462265112', '1462265112');
INSERT INTO `auth_item` VALUES ('/plugin/ueditor', '2', null, null, null, '1462504682', '1462504682');
INSERT INTO `auth_item` VALUES ('/plugin/update', '2', null, null, null, '1462265112', '1462265112');
INSERT INTO `auth_item` VALUES ('/plugin/upload', '2', null, null, null, '1462504682', '1462504682');
INSERT INTO `auth_item` VALUES ('/plugin/view', '2', null, null, null, '1462265112', '1462265112');
INSERT INTO `auth_item` VALUES ('/post/*', '2', null, null, null, '1462852473', '1462852473');
INSERT INTO `auth_item` VALUES ('/post/create', '2', null, null, null, '1462852473', '1462852473');
INSERT INTO `auth_item` VALUES ('/post/delete', '2', null, null, null, '1462852473', '1462852473');
INSERT INTO `auth_item` VALUES ('/post/index', '2', null, null, null, '1462852473', '1462852473');
INSERT INTO `auth_item` VALUES ('/post/ueditor', '2', null, null, null, '1462852473', '1462852473');
INSERT INTO `auth_item` VALUES ('/post/update', '2', null, null, null, '1462852473', '1462852473');
INSERT INTO `auth_item` VALUES ('/post/upload', '2', null, null, null, '1462852473', '1462852473');
INSERT INTO `auth_item` VALUES ('/post/view', '2', null, null, null, '1462852473', '1462852473');
INSERT INTO `auth_item` VALUES ('/site/*', '2', null, null, null, '1461144290', '1461144290');
INSERT INTO `auth_item` VALUES ('/site/error', '2', null, null, null, '1461144290', '1461144290');
INSERT INTO `auth_item` VALUES ('/site/index', '2', null, null, null, '1461144290', '1461144290');
INSERT INTO `auth_item` VALUES ('/site/login', '2', null, null, null, '1461144290', '1461144290');
INSERT INTO `auth_item` VALUES ('/site/logout', '2', null, null, null, '1461144290', '1461144290');
INSERT INTO `auth_item` VALUES ('/test/*', '2', null, null, null, '1461144290', '1461144290');
INSERT INTO `auth_item` VALUES ('/test/index', '2', null, null, null, '1461144290', '1461144290');
INSERT INTO `auth_item` VALUES ('/test/ueditor', '2', null, null, null, '1462504576', '1462504576');
INSERT INTO `auth_item` VALUES ('/treemanager/*', '2', null, null, null, '1463130922', '1463130922');
INSERT INTO `auth_item` VALUES ('/treemanager/node/*', '2', null, null, null, '1463130922', '1463130922');
INSERT INTO `auth_item` VALUES ('/treemanager/node/manage', '2', null, null, null, '1463130922', '1463130922');
INSERT INTO `auth_item` VALUES ('/treemanager/node/move', '2', null, null, null, '1463130922', '1463130922');
INSERT INTO `auth_item` VALUES ('/treemanager/node/remove', '2', null, null, null, '1463130922', '1463130922');
INSERT INTO `auth_item` VALUES ('/treemanager/node/save', '2', null, null, null, '1463130922', '1463130922');
INSERT INTO `auth_item` VALUES ('/user/*', '2', null, null, null, '1461144290', '1461144290');
INSERT INTO `auth_item` VALUES ('/user/create', '2', null, null, null, '1461144290', '1461144290');
INSERT INTO `auth_item` VALUES ('/user/delete', '2', null, null, null, '1461144290', '1461144290');
INSERT INTO `auth_item` VALUES ('/user/index', '2', null, null, null, '1461144290', '1461144290');
INSERT INTO `auth_item` VALUES ('/user/update', '2', null, null, null, '1461144290', '1461144290');
INSERT INTO `auth_item` VALUES ('/user/view', '2', null, null, null, '1461144290', '1461144290');
INSERT INTO `auth_item` VALUES ('分配管理权限', '2', '分配管理权限', null, null, '1462417459', '1462417459');
INSERT INTO `auth_item` VALUES ('基础权限', '2', null, null, null, '1462417644', '1462417644');
INSERT INTO `auth_item` VALUES ('普通管理员', '1', '普通管理员权限地址', null, null, '1462417293', '1462500953');
INSERT INTO `auth_item` VALUES ('权限管理权限', '2', '权限管理权限', null, null, '1462417355', '1462417355');
INSERT INTO `auth_item` VALUES ('游客', '1', '只有观看权限', null, null, '1462504447', '1462504447');
INSERT INTO `auth_item` VALUES ('组件管理权限', '2', '组件管理权限', null, null, '1462417559', '1462417559');
INSERT INTO `auth_item` VALUES ('菜单管理权限', '2', '菜单管理权限', null, null, '1462417477', '1462417477');
INSERT INTO `auth_item` VALUES ('规则管理权限', '2', '规则管理权限', null, null, '1462417376', '1462417376');
INSERT INTO `auth_item` VALUES ('角色管理权限', '2', '角色管理权限', null, null, '1462417330', '1462417330');
INSERT INTO `auth_item` VALUES ('超级管理员', '1', '拥有该系统所有权限', null, null, '1461564971', '1461564971');
INSERT INTO `auth_item` VALUES ('路由管理权限', '2', '路由管理权限', null, null, '1462417399', '1462417399');

-- ----------------------------
-- Table structure for `auth_item_child`
-- ----------------------------
DROP TABLE IF EXISTS `auth_item_child`;
CREATE TABLE `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_item_child
-- ----------------------------
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/*');
INSERT INTO `auth_item_child` VALUES ('分配管理权限', '/admin/assignment/*');
INSERT INTO `auth_item_child` VALUES ('游客', '/admin/assignment/index');
INSERT INTO `auth_item_child` VALUES ('游客', '/admin/assignment/view');
INSERT INTO `auth_item_child` VALUES ('菜单管理权限', '/admin/menu/*');
INSERT INTO `auth_item_child` VALUES ('游客', '/admin/menu/index');
INSERT INTO `auth_item_child` VALUES ('游客', '/admin/menu/view');
INSERT INTO `auth_item_child` VALUES ('权限管理权限', '/admin/permission/*');
INSERT INTO `auth_item_child` VALUES ('游客', '/admin/permission/index');
INSERT INTO `auth_item_child` VALUES ('游客', '/admin/permission/view');
INSERT INTO `auth_item_child` VALUES ('角色管理权限', '/admin/role/*');
INSERT INTO `auth_item_child` VALUES ('游客', '/admin/role/index');
INSERT INTO `auth_item_child` VALUES ('游客', '/admin/role/view');
INSERT INTO `auth_item_child` VALUES ('路由管理权限', '/admin/route/*');
INSERT INTO `auth_item_child` VALUES ('游客', '/admin/route/index');
INSERT INTO `auth_item_child` VALUES ('规则管理权限', '/admin/rule/*');
INSERT INTO `auth_item_child` VALUES ('游客', '/admin/rule/index');
INSERT INTO `auth_item_child` VALUES ('游客', '/admin/rule/view');
INSERT INTO `auth_item_child` VALUES ('游客', '/admin/user/index');
INSERT INTO `auth_item_child` VALUES ('游客', '/admin/user/view');
INSERT INTO `auth_item_child` VALUES ('游客', '/cat/index');
INSERT INTO `auth_item_child` VALUES ('游客', '/cat/view');
INSERT INTO `auth_item_child` VALUES ('游客', '/debug/default/index');
INSERT INTO `auth_item_child` VALUES ('游客', '/debug/default/view');
INSERT INTO `auth_item_child` VALUES ('游客', '/gii/default/index');
INSERT INTO `auth_item_child` VALUES ('游客', '/gii/default/view');
INSERT INTO `auth_item_child` VALUES ('组件管理权限', '/plugin/*');
INSERT INTO `auth_item_child` VALUES ('游客', '/plugin/demo');
INSERT INTO `auth_item_child` VALUES ('游客', '/plugin/index');
INSERT INTO `auth_item_child` VALUES ('游客', '/plugin/view');
INSERT INTO `auth_item_child` VALUES ('游客', '/post/index');
INSERT INTO `auth_item_child` VALUES ('游客', '/post/ueditor');
INSERT INTO `auth_item_child` VALUES ('游客', '/post/upload');
INSERT INTO `auth_item_child` VALUES ('游客', '/post/view');
INSERT INTO `auth_item_child` VALUES ('基础权限', '/site/*');
INSERT INTO `auth_item_child` VALUES ('游客', '/site/error');
INSERT INTO `auth_item_child` VALUES ('游客', '/site/index');
INSERT INTO `auth_item_child` VALUES ('游客', '/site/login');
INSERT INTO `auth_item_child` VALUES ('游客', '/site/logout');
INSERT INTO `auth_item_child` VALUES ('游客', '/user/index');
INSERT INTO `auth_item_child` VALUES ('游客', '/user/view');
INSERT INTO `auth_item_child` VALUES ('普通管理员', '基础权限');
INSERT INTO `auth_item_child` VALUES ('普通管理员', '权限管理权限');
INSERT INTO `auth_item_child` VALUES ('普通管理员', '组件管理权限');
INSERT INTO `auth_item_child` VALUES ('普通管理员', '菜单管理权限');
INSERT INTO `auth_item_child` VALUES ('普通管理员', '规则管理权限');
INSERT INTO `auth_item_child` VALUES ('普通管理员', '角色管理权限');
INSERT INTO `auth_item_child` VALUES ('普通管理员', '路由管理权限');

-- ----------------------------
-- Table structure for `auth_rule`
-- ----------------------------
DROP TABLE IF EXISTS `auth_rule`;
CREATE TABLE `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_rule
-- ----------------------------

-- ----------------------------
-- Table structure for `cat`
-- ----------------------------
DROP TABLE IF EXISTS `cat`;
CREATE TABLE `cat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) NOT NULL COMMENT '分类名称',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cat
-- ----------------------------
INSERT INTO `cat` VALUES ('3', '技术文章');

-- ----------------------------
-- Table structure for `log`
-- ----------------------------
DROP TABLE IF EXISTS `log`;
CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `route` varchar(255) NOT NULL COMMENT '路由',
  `operator` varchar(255) NOT NULL COMMENT '操作账户',
  `behavior` varchar(255) NOT NULL COMMENT '操作行为',
  `type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '操作类型 0-默认',
  `ip` varchar(255) NOT NULL COMMENT '操作IP',
  `created_at` datetime NOT NULL COMMENT '操作时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='操作日志表';

-- ----------------------------
-- Records of log
-- ----------------------------

-- ----------------------------
-- Table structure for `menu`
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  `parent` int(11) DEFAULT NULL,
  `route` varchar(256) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `data` blob,
  PRIMARY KEY (`id`),
  KEY `parent` (`parent`),
  CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('1', '系统管理', null, null, '1', 0x7B2269636F6E223A2266612066612D636F6773227D);
INSERT INTO `menu` VALUES ('2', '菜单管理', '1', '/admin/menu/index', '7', null);
INSERT INTO `menu` VALUES ('3', '角色管理', '1', '/admin/role/index', '2', null);
INSERT INTO `menu` VALUES ('4', '账户管理', '1', '/admin/user/index', '1', null);
INSERT INTO `menu` VALUES ('7', '权限管理', '1', '/admin/permission/index', '3', null);
INSERT INTO `menu` VALUES ('8', '规则管理', '1', '/admin/rule/index', '4', null);
INSERT INTO `menu` VALUES ('9', '分配权限', '1', '/admin/assignment/index', '6', null);
INSERT INTO `menu` VALUES ('10', '路由管理', '1', '/admin/route/index', '5', null);
INSERT INTO `menu` VALUES ('19', '扩展组件', null, null, '2', 0x7B2269636F6E223A2266612066612D63616C656E6461722D6D696E75732D6F227D);
INSERT INTO `menu` VALUES ('20', '组件管理', '19', '/plugin/index', null, null);
INSERT INTO `menu` VALUES ('21', '内容管理', null, null, '4', 0x7B2269636F6E223A2266612066612D736572766572227D);
INSERT INTO `menu` VALUES ('22', '文章管理', '21', '/post/index', null, null);
INSERT INTO `menu` VALUES ('23', '分类管理', '21', '/cat/index', null, null);

-- ----------------------------
-- Table structure for `plugin`
-- ----------------------------
DROP TABLE IF EXISTS `plugin`;
CREATE TABLE `plugin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plugin_name` varchar(255) NOT NULL COMMENT '扩展名',
  `plugin_desc` varchar(255) DEFAULT NULL COMMENT '描述',
  `plugin_namespace` varchar(255) NOT NULL COMMENT '命名空间',
  `demo_url` varchar(255) DEFAULT NULL COMMENT '演示地址',
  `data` text COMMENT '配置数据',
  `created_at` datetime NOT NULL COMMENT '创建时间',
  `updated_at` datetime NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of plugin
-- ----------------------------
INSERT INTO `plugin` VALUES ('1', '编辑器（Ueditor）', '基于Ueditor的编辑器扩展', 'common\\widgets\\ueditor\\Ueditor', '', '{\"options\":{\"initialFrameWidth\":\"100%\",\"initialFrameHeight\":\"400\"}}', '2016-05-03 17:06:44', '2016-05-03 18:13:13');
INSERT INTO `plugin` VALUES ('2', '图片上传', '图片异步上传扩展', 'common\\widgets\\file_upload\\FileUpload', null, '', '2016-05-05 10:50:37', '2016-05-06 11:09:57');
INSERT INTO `plugin` VALUES ('3', '标签插件', '输入标签回车即可生成标签块，方便美观', 'common\\widgets\\tags\\TagWidget', null, '', '2016-05-09 11:24:35', '2016-05-09 11:24:35');

-- ----------------------------
-- Table structure for `post`
-- ----------------------------
DROP TABLE IF EXISTS `post`;
CREATE TABLE `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `title` varchar(255) DEFAULT NULL COMMENT '标题',
  `summary` varchar(255) DEFAULT NULL COMMENT '摘要',
  `content` text COMMENT '内容',
  `label_img` varchar(255) DEFAULT NULL COMMENT '标签图',
  `cat_id` int(11) DEFAULT NULL COMMENT '分类id',
  `user_id` int(11) DEFAULT NULL COMMENT '用户id',
  `user_name` varchar(255) DEFAULT NULL COMMENT '用户名',
  `top` tinyint(1) DEFAULT '0' COMMENT '置顶',
  `is_valid` tinyint(1) DEFAULT NULL COMMENT '是否有效：0-无效 1-有效',
  `created_at` int(11) DEFAULT NULL COMMENT '创建时间',
  `updated_at` int(11) DEFAULT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`),
  KEY `idx_cat_valid` (`cat_id`,`is_valid`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='文章主表';

-- ----------------------------
-- Records of post
-- ----------------------------
INSERT INTO `post` VALUES ('1', '基于RBAC的后台管理系统（附演示地址）', '1.基础功能：登录，登出，密码修改等常见的功能2.菜单配置：可视化配置菜单，可以根据配置用户的权限显示隐藏菜单', '<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: 微软雅黑, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Hiragino Sans GB&#39;, &#39;Microsoft Yahei&#39;, sans-serif; font-size: 14px; line-height: 20px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; font-size: 24px;\"><strong style=\"box-sizing: border-box;\">演示地址：</strong></span></p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: 微软雅黑, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Hiragino Sans GB&#39;, &#39;Microsoft Yahei&#39;, sans-serif; font-size: 14px; line-height: 20px; white-space: normal; background-color: rgb(255, 255, 255);\">http://admin.hyii2.com</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: 微软雅黑, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Hiragino Sans GB&#39;, &#39;Microsoft Yahei&#39;, sans-serif; font-size: 14px; line-height: 20px; white-space: normal; background-color: rgb(255, 255, 255);\">账户：test 密码：123456</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: 微软雅黑, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Hiragino Sans GB&#39;, &#39;Microsoft Yahei&#39;, sans-serif; font-size: 14px; line-height: 20px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; color: rgb(255, 0, 0);\">备注：</span><span style=\"box-sizing: border-box; color: rgb(255, 0, 0);\">鉴于大家的好奇心异常猛烈，经常修改数据，目前test账户只开了浏览权限，如果要开更多的权限请联系酱油君（下方有联系方式）</span></p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: 微软雅黑, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Hiragino Sans GB&#39;, &#39;Microsoft Yahei&#39;, sans-serif; font-size: 14px; line-height: 20px; white-space: normal; background-color: rgb(255, 255, 255);\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 24px;\">功能：</span></strong></p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: 微软雅黑, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Hiragino Sans GB&#39;, &#39;Microsoft Yahei&#39;, sans-serif; font-size: 14px; line-height: 20px; white-space: normal; background-color: rgb(255, 255, 255);\">1.<strong style=\"box-sizing: border-box;\">基础功能：</strong>登录，登出，密码修改等常见的功能</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: 微软雅黑, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Hiragino Sans GB&#39;, &#39;Microsoft Yahei&#39;, sans-serif; font-size: 14px; line-height: 20px; white-space: normal; background-color: rgb(255, 255, 255);\">2.<strong style=\"box-sizing: border-box;\">菜单配置：</strong>可视化配置菜单，可以根据配置用户的权限显示隐藏菜单</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: 微软雅黑, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Hiragino Sans GB&#39;, &#39;Microsoft Yahei&#39;, sans-serif; font-size: 14px; line-height: 20px; white-space: normal; background-color: rgb(255, 255, 255);\">3.<strong style=\"box-sizing: border-box;\">权限机制：</strong>角色、权限增删改查，以及给用户赋予角色权限</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: 微软雅黑, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Hiragino Sans GB&#39;, &#39;Microsoft Yahei&#39;, sans-serif; font-size: 14px; line-height: 20px; white-space: normal; background-color: rgb(255, 255, 255);\">4.<strong style=\"box-sizing: border-box;\">规则机制：</strong>除了权限角色之外有规则机制，即可以给对应的权限配置规则</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: 微软雅黑, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Hiragino Sans GB&#39;, &#39;Microsoft Yahei&#39;, sans-serif; font-size: 14px; line-height: 20px; white-space: normal; background-color: rgb(255, 255, 255);\">5.<strong style=\"box-sizing: border-box;\">扩展组件：</strong>内置yii2各类扩展组件以及相应的效果演示（定时更新）</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: 微软雅黑, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Hiragino Sans GB&#39;, &#39;Microsoft Yahei&#39;, sans-serif; font-size: 14px; line-height: 20px; white-space: normal; background-color: rgb(255, 255, 255);\">6.<strong style=\"box-sizing: border-box;\">二次开发：</strong>完全可以基于该系统做二次开发，开发一套适合自己的后台管理系统，节约权限控制以及部分基础功能开发的时间成本，后台系统开发的不二之选</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: 微软雅黑, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Hiragino Sans GB&#39;, &#39;Microsoft Yahei&#39;, sans-serif; font-size: 14px; line-height: 20px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; font-size: 24px;\"><strong style=\"box-sizing: border-box;\">源码：</strong></span></p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: 微软雅黑, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Hiragino Sans GB&#39;, &#39;Microsoft Yahei&#39;, sans-serif; font-size: 14px; line-height: 20px; white-space: normal; background-color: rgb(255, 255, 255);\">1.可复制文章顶部的地址进行访问demo，如对源码有浓厚兴趣（收费），请联系酱油君 QQ：391430388</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: 微软雅黑, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Hiragino Sans GB&#39;, &#39;Microsoft Yahei&#39;, sans-serif; font-size: 14px; line-height: 20px; white-space: normal; background-color: rgb(255, 255, 255);\">2.可定制功能，定制功能根据需求收取相应的费用</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: 微软雅黑, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Hiragino Sans GB&#39;, &#39;Microsoft Yahei&#39;, sans-serif; font-size: 14px; line-height: 20px; white-space: normal; background-color: rgb(255, 255, 255);\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 24px;\">效果图：</span></strong></p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: 微软雅黑, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Hiragino Sans GB&#39;, &#39;Microsoft Yahei&#39;, sans-serif; font-size: 14px; line-height: 20px; white-space: normal; background-color: rgb(255, 255, 255);\"><img src=\"http://up.yii-china.com/image/20160505/1462418661105485.png\" title=\"1462418661105485.png\" alt=\"NS9_E4IO5XJ_96US)95)MOT.png\" width=\"831\" height=\"527\" data-bd-imgshare-binded=\"1\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%; width: 831px; height: 527px;\"/></p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: 微软雅黑, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Hiragino Sans GB&#39;, &#39;Microsoft Yahei&#39;, sans-serif; font-size: 14px; line-height: 20px; white-space: normal; background-color: rgb(255, 255, 255);\">登录页</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: 微软雅黑, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Hiragino Sans GB&#39;, &#39;Microsoft Yahei&#39;, sans-serif; font-size: 14px; line-height: 20px; white-space: normal; background-color: rgb(255, 255, 255);\"><img src=\"http://up.yii-china.com/image/20160507/1462560466733114.jpg\" title=\"1462560466733114.jpg\" alt=\"M_A8EYXVCWHZB2Q3I`Z}IEV.jpg\" width=\"830\" height=\"598\" data-bd-imgshare-binded=\"1\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%; width: 830px; height: 598px;\"/></p><p><br/></p>', '/image/20160510/1462854059589490.png', '3', null, null, '0', '1', null, '1462854193');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(256) NOT NULL,
  `password_reset_token` varchar(256) DEFAULT NULL,
  `email` varchar(256) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', 'i8A7YnWnduNh_L0xIlUpEl0p4VENLj2q', '$2y$13$7S4UuyOEe.0s3TN/0OZX1e53cJFtTj6Fqqbp.RA4GgxTIjp6ynAcW', null, '123456@qq.com', '10', '1461143622', '1463361596');
INSERT INTO `user` VALUES ('3', 'test', 'LQhpMWYcEZZvngqn4fP1jlIKMVwori01', '$2y$13$/Ok52xJ40xVckeE5WMxKWOIUi/uVgzesppTHj5bX3LcpadlUlIgCC', null, '123456111@qq.com', '10', '1461557693', '1461557693');
INSERT INTO `user` VALUES ('4', 'test01', 'T7KHuSa7hDsUySKdX9o5fOcA2Pj1kRYU', '$2y$13$i3VdZDLM71ErCuQlj.9jJeG2G1Hm3uNbnNVSn2at2kYMOMB6h8vnS', null, '12345611122@qq.com', '10', '1461557767', '1461557767');
INSERT INTO `user` VALUES ('5', 'test02', 'blDvwbtcOCroUk3aMsxx496gWu9G0z8p', '$2y$13$0iWcHC4YeYSU4Tk.1PSNUOraHwKv5jI2THlo4ktWZNEAtwdgDhUku', null, '123456111221@qq.com', '10', '1461557819', '1463019969');
