<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.0
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ims_bf_kanjia_order`;");
E_C("CREATE TABLE `ims_bf_kanjia_order` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '行id',
  `uniacid` int(10) NOT NULL COMMENT '公号id',
  `acid` int(10) NOT NULL COMMENT '子公号id',
  `kid` int(10) NOT NULL COMMENT '砍价id',
  `rid` int(10) NOT NULL COMMENT '砍价记录id',
  `uid` int(10) NOT NULL COMMENT '用户id',
  `openid` varchar(50) NOT NULL COMMENT '粉丝openid',
  `name` varchar(20) NOT NULL COMMENT '姓名',
  `address` varchar(255) NOT NULL COMMENT '地址',
  `tel` varchar(20) NOT NULL COMMENT '联系方式',
  `uniontid` varchar(50) NOT NULL COMMENT '订单编号',
  `price` decimal(10,2) NOT NULL COMMENT '金额',
  `remark` varchar(255) NOT NULL COMMENT '备注',
  `expressname` varchar(50) NOT NULL COMMENT '物流公司',
  `expresscode` varchar(50) NOT NULL COMMENT '物流单号',
  `status` tinyint(1) NOT NULL COMMENT '状态',
  `createtime` int(10) NOT NULL COMMENT '插入时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>