<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.0
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ims_bf_kanjia_shop`;");
E_C("CREATE TABLE `ims_bf_kanjia_shop` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) NOT NULL COMMENT '公号id',
  `uid` int(10) NOT NULL COMMENT '对应的用户id',
  `rule` varchar(2000) NOT NULL COMMENT '权限',
  `createtime` int(10) NOT NULL COMMENT '插入时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>