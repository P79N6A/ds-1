<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_order_info`;");
E_C("CREATE TABLE `dsc_order_info` (
  `order_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `main_order_id` int(10) unsigned NOT NULL DEFAULT '0',
  `order_sn` varchar(255) NOT NULL DEFAULT '',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `order_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `shipping_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pay_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `consignee` varchar(60) NOT NULL DEFAULT '',
  `country` int(10) unsigned NOT NULL DEFAULT '0',
  `province` int(10) unsigned NOT NULL DEFAULT '0',
  `city` int(10) unsigned NOT NULL DEFAULT '0',
  `district` int(10) unsigned NOT NULL DEFAULT '0',
  `street` int(10) unsigned NOT NULL DEFAULT '0',
  `address` varchar(255) NOT NULL DEFAULT '',
  `zipcode` varchar(60) NOT NULL DEFAULT '',
  `tel` varchar(60) NOT NULL DEFAULT '',
  `mobile` varchar(60) NOT NULL DEFAULT '',
  `email` varchar(60) NOT NULL DEFAULT '',
  `best_time` varchar(120) NOT NULL DEFAULT '',
  `sign_building` varchar(120) NOT NULL DEFAULT '',
  `postscript` varchar(255) NOT NULL DEFAULT '',
  `shipping_id` text NOT NULL,
  `shipping_name` text NOT NULL,
  `shipping_code` text NOT NULL,
  `shipping_type` text NOT NULL,
  `pay_id` tinyint(3) NOT NULL DEFAULT '0',
  `pay_name` varchar(120) NOT NULL DEFAULT '',
  `how_oos` varchar(120) NOT NULL DEFAULT '',
  `how_surplus` varchar(120) NOT NULL DEFAULT '',
  `pack_name` varchar(120) NOT NULL DEFAULT '',
  `card_name` varchar(120) NOT NULL DEFAULT '',
  `card_message` varchar(255) NOT NULL DEFAULT '',
  `inv_payee` varchar(120) NOT NULL DEFAULT '',
  `inv_content` varchar(120) NOT NULL DEFAULT '',
  `goods_amount` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `cost_amount` decimal(10,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '订单成本',
  `shipping_fee` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `insure_fee` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `pay_fee` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `pack_fee` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `card_fee` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `money_paid` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `surplus` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `integral` int(10) unsigned NOT NULL DEFAULT '0',
  `integral_money` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `bonus` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `order_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `return_amount` decimal(10,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '订单整站退款金额',
  `from_ad` smallint(5) NOT NULL DEFAULT '0',
  `referer` varchar(255) NOT NULL DEFAULT '',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `confirm_time` int(10) unsigned NOT NULL DEFAULT '0',
  `pay_time` int(10) unsigned NOT NULL DEFAULT '0',
  `shipping_time` int(10) unsigned NOT NULL DEFAULT '0',
  `confirm_take_time` int(10) unsigned NOT NULL DEFAULT '0',
  `auto_delivery_time` int(11) unsigned NOT NULL DEFAULT '15',
  `pack_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `card_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `bonus_id` int(10) unsigned NOT NULL DEFAULT '0',
  `invoice_no` varchar(255) NOT NULL DEFAULT '',
  `extension_code` varchar(30) NOT NULL DEFAULT '',
  `extension_id` int(10) unsigned NOT NULL DEFAULT '0',
  `to_buyer` varchar(255) NOT NULL DEFAULT '',
  `pay_note` varchar(255) NOT NULL DEFAULT '',
  `agency_id` int(10) unsigned NOT NULL,
  `inv_type` varchar(60) NOT NULL,
  `tax` decimal(10,2) unsigned NOT NULL,
  `is_separate` tinyint(1) NOT NULL DEFAULT '0',
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  `discount` decimal(10,2) unsigned NOT NULL,
  `discount_all` decimal(10,2) unsigned NOT NULL,
  `is_delete` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_settlement` tinyint(1) NOT NULL DEFAULT '0',
  `sign_time` int(30) DEFAULT NULL,
  `is_single` tinyint(1) DEFAULT '0',
  `point_id` varchar(255) NOT NULL DEFAULT '',
  `shipping_dateStr` varchar(255) NOT NULL,
  `supplier_id` int(10) NOT NULL DEFAULT '0',
  `froms` char(10) NOT NULL DEFAULT 'pc',
  `coupons` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `uc_id` int(10) unsigned NOT NULL DEFAULT '0',
  `is_zc_order` int(10) DEFAULT '0',
  `zc_goods_id` int(10) NOT NULL,
  `is_frozen` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `drp_is_separate` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '订单分销状态',
  `team_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '开团记录id',
  `team_parent_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '团长id',
  `team_user_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '团员id',
  `team_price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '拼团商品价格',
  `chargeoff_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `invoice_type` tinyint(1) NOT NULL DEFAULT '0',
  `vat_id` int(10) NOT NULL DEFAULT '0' COMMENT '增值税发票信息ID 关联 users_vat_invoices_info表自增ID',
  `tax_id` varchar(255) NOT NULL DEFAULT '',
  `is_update_sale` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`order_id`),
  UNIQUE KEY `order_sn` (`order_sn`),
  KEY `user_id` (`user_id`),
  KEY `order_status` (`order_status`),
  KEY `shipping_status` (`shipping_status`),
  KEY `pay_status` (`pay_status`),
  KEY `shipping_id` (`shipping_id`(255)),
  KEY `pay_id` (`pay_id`),
  KEY `extension_code` (`extension_code`,`extension_id`),
  KEY `agency_id` (`agency_id`),
  KEY `main_order_id` (`main_order_id`),
  KEY `uc_id` (`uc_id`),
  KEY `parent_id` (`parent_id`),
  KEY `supplier_id` (`supplier_id`),
  KEY `is_zc_order` (`is_zc_order`),
  KEY `zc_goods_id` (`zc_goods_id`),
  KEY `chargeoff_status` (`chargeoff_status`),
  KEY `country` (`country`),
  KEY `province` (`province`),
  KEY `city` (`city`),
  KEY `district` (`district`),
  KEY `street` (`street`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_order_info` values('2','0',0x32303137313032303134323130373331323537,'0','3','0','0','','0','0','0','0','0','','','','','','','','','','','','','0','','','','','','','','','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','0.00','0.00','0',0xe7aea1e79086e59198e6b7bbe58aa0,'1508451486','0','0','0','0','15','0','0','0','','','0','','','0','','0.00','0','0','0.00','0.00','0','0','0','0','0','','0',0x7063,'0.00','0','0','0','0','0','0','0','0','0.00','0','0','0','','0');");
E_D("replace into `dsc_order_info` values('3','0',0x32303137313032303135323733343039313331,'108','0','0','0',0xe587b6e6a188e8bf87,'1','3','37','410','0',0x31323331333132333132333133,'','',0x3133353234313232323232,'','','','',0x39,0xe794b3e9809ae5bfabe98092,0x73746f5f65787072657373,0x307c30,'9',0xe694afe4bb98e5ae9d,'','','','','',0xe4b8aae4baba,0xe4b88de5bc80e58f91e7a5a8,'3500.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','3500.00','0.00','0',0x746f756368,'1508455359','0','0','0','0','15','0','0','0','','','0','','','0','0','0.00','0','0','0.00','0.00','0','0','0','0','0','','0',0x7063,'0.00','0','0','0','0','0','0','0','0','0.00','0','0','0','0','0');");
E_D("replace into `dsc_order_info` values('4','0',0x32303137313032303232353236353131313636,'94','1','0','2',0xe4b99fe4b880e6a0b7,'1','9','137','1060','0',0xe58f91e694be34e58f91,'','',0x3138303839383932353033,'','','','',0x31387c322c307c39,0x31387ce59c86e9809ae9809fe980922c307ce794b3e9809ae5bfabe98092,0x31387c79746f2c307c73746f5f65787072657373,0x31387c302c307c30,'11',0xe4bd99e9a29de694afe4bb98,0xe7ad89e5be85e68980e69c89e59586e59381e5a487e9bd90e5908ee5868de58f91,'','','','',0xe4b8aae4baba,0xe4b88de5bc80e58f91e7a5a8,'320.00','0.00','5.00','0.00','0.00','0.00','0.00','0.00','325.00','0','0.00','0.00','0.00','0.00','0',0xe69cace7ab99,'1508482271','1508482271','1508482271','0','0','15','0','0','0','','','0','','','0','','0.00','0','0','0.00','0.00','0','0',NULL,'0','0','','0',0x7063,'0.00','0','0','0','0','0','0','0','0','0.00','0','0','0','','0');");
E_D("replace into `dsc_order_info` values('5','4',0x32303137313032303232353533333231353939,'94','1','0','2',0xe4b99fe4b880e6a0b7,'1','9','137','1060','0',0xe58f91e694be34e58f91,'','',0x3138303839383932353033,'','','','',0x39,0xe794b3e9809ae5bfabe98092,0x73746f5f65787072657373,'0','11',0xe4bd99e9a29de694afe4bb98,0xe7ad89e5be85e68980e69c89e59586e59381e5a487e9bd90e5908ee5868de58f91,'','','','',0xe4b8aae4baba,0xe4b88de5bc80e58f91e7a5a8,'120.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','120.00','0','0.00','0.00','0.00','0.00','0',0xe69cace7ab99,'1508482271','1508482271','1508482271','0','0','15','0','0','0','','','0','','','0','','0.00','0','0','0.00','0.00','0','0','0','0','0','','0',0x7063,'0.00','0','0','0','0','0','0','0','0','0.00','0','0','0','','0');");
E_D("replace into `dsc_order_info` values('6','4',0x32303137313032303232353632353735363238,'94','5','2','2',0xe4b99fe4b880e6a0b7,'1','9','137','1060','0',0xe58f91e694be34e58f91,'','',0x3138303839383932353033,'','','','',0x32,0xe59c86e9809ae9809fe98092,0x79746f,'0','11',0xe4bd99e9a29de694afe4bb98,0xe7ad89e5be85e68980e69c89e59586e59381e5a487e9bd90e5908ee5868de58f91,'','','','',0xe4b8aae4baba,0xe4b88de5bc80e58f91e7a5a8,'200.00','0.00','5.00','0.00','0.00','0.00','0.00','0.00','205.00','0','0.00','0.00','0.00','0.00','0',0xe69cace7ab99,'1508482271','1508482271','1508482271','1508482333','1508482347','15','0','0','0',0x32343532343533353433,'','0','','','0','','0.00','0','0','0.00','0.00','0','1','0','0','0','','0',0x7063,'0.00','0','0','0','0','0','0','0','0','0.00','1','0','0','','0');");
E_D("replace into `dsc_order_info` values('7','0',0x32303137313032313030303939343634363633,'94','5','2','2',0xe4b99fe4b880e6a0b7,'1','9','137','1060','0',0xe58f91e694be34e58f91,'','',0x3138303839383932353033,'','','','',0x32,0xe59c86e9809ae9809fe98092,'','','11',0xe4bd99e9a29de694afe4bb98,0xe7ad89e5be85e68980e69c89e59586e59381e5a487e9bd90e5908ee5868de58f91,'','','','',0xe4b8aae4baba,0xe4b88de5bc80e58f91e7a5a8,'140.00','0.00','5.00','0.00','0.00','0.00','0.00','0.00','145.00','0','0.00','0.00','0.00','0.00','0',0xe69cace7ab99,'1508486827','1508486827','1508486827','1508486863','1508486873','15','0','0','0','','','0','','','0','','0.00','0','0','0.00','0.00','0','1',NULL,'0','0','','0',0x7063,'0.00','0','0','0','0','0','0','0','0','0.00','0','0','0','','0');");
E_D("replace into `dsc_order_info` values('8','0',0x32303137313032333233323832363437373839,'115','0','0','0',0x6735346572,'1','9','120','1054','0',0x6677657167623132,'','',0x3138303839383932353035,'','','','',0x3136,0xe9a1bae4b8b0e9809fe8bf90,'','','18',0xe982aee5b180e6b187e6acbe,0xe7ad89e5be85e68980e69c89e59586e59381e5a487e9bd90e5908ee5868de58f91,'','','','',0xe4b8aae4baba,0xe4b88de5bc80e58f91e7a5a8,'509.00','0.00','0.00','0.00','0.10','0.00','0.00','0.00','0.00','0','0.00','0.00','509.10','0.00','0',0xe69cace7ab99,'1508743260','0','0','0','0','15','0','0','0','','','0','','','0','','0.00','0','0','0.00','0.00','0','0',NULL,'0','0','','0',0x7063,'0.00','0','0','0','0','0','0','0','0','0.00','0','0','0','','0');");
E_D("replace into `dsc_order_info` values('9','0',0x32303137313032333233333332313436333631,'94','5','1','2',0xe4b99fe4b880e6a0b7,'1','9','137','1060','0',0xe58f91e694be34e58f91,'','',0x3138303839383932353033,'','','','',0x32,0xe59c86e9809ae9809fe98092,'','','11',0xe4bd99e9a29de694afe4bb98,0xe7ad89e5be85e68980e69c89e59586e59381e5a487e9bd90e5908ee5868de58f91,'','','','',0xe4b8aae4baba,0xe4b88de5bc80e58f91e7a5a8,'140.00','0.00','5.00','0.00','0.00','0.00','0.00','0.00','145.00','0','0.00','0.00','0.00','0.00','0',0xe69cace7ab99,'1508743526','1508743526','1508743526','1508743593','0','15','0','0','0','','','0','','','0','','0.00','0','0','0.00','0.00','0','0',NULL,'0','0','','0',0x7063,'0.00','0','0','0','0','0','0','0','0','0.00','0','0','0','','0');");
E_D("replace into `dsc_order_info` values('14','0',0x32303137313233303136343639363831393230,'120','5','2','2',0x313131,'1','3','38','418','0',0x6577,'','',0x3138383838383838383838,'','','','',0x39,0xe794b3e9809ae5bfabe98092,'','','15',0xe59ca8e7babfe694afe4bb98,0xe7ad89e5be85e68980e69c89e59586e59381e5a487e9bd90e5908ee5868de58f91,'','','','',0xe4b8aae4baba,0xe4b88de5bc80e58f91e7a5a8,'798.00','0.00','0.00','0.00','0.00','0.00','0.00','798.00','0.00','0','0.00','0.00','0.00','0.00','0',0xe69cace7ab99,'1514594303','1514594327','1514594337','1514594346','1514594379','15','0','0','0',0x33323435353433,'','0','','','0','','0.00','0','0','0.00','0.00','0','0',NULL,'0','0','','0',0x7063,'0.00','0','0','0','0','0','0','0','0','0.00','0','0','0','','0');");

require("../../inc/footer.php");
?>