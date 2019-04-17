<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_goods_attr`;");
E_C("CREATE TABLE `dsc_goods_attr` (
  `goods_attr_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` int(10) unsigned NOT NULL DEFAULT '0',
  `attr_id` int(10) unsigned NOT NULL DEFAULT '0',
  `attr_value` text NOT NULL,
  `color_value` text NOT NULL,
  `attr_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `attr_sort` int(10) unsigned NOT NULL,
  `attr_img_flie` varchar(255) NOT NULL,
  `attr_gallery_flie` varchar(255) NOT NULL,
  `attr_img_site` varchar(255) NOT NULL,
  `attr_checked` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `attr_value1` text,
  `lang_flag` int(2) DEFAULT '0',
  `attr_img` varchar(255) DEFAULT NULL,
  `attr_thumb` varchar(255) DEFAULT NULL,
  `img_flag` int(2) DEFAULT '0',
  `attr_pid` varchar(60) DEFAULT NULL,
  `admin_id` smallint(8) unsigned NOT NULL,
  `cloud_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`goods_attr_id`),
  KEY `goods_id` (`goods_id`),
  KEY `attr_id` (`attr_id`),
  KEY `admin_id` (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=741 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_goods_attr` values('1','700','1',0xe69a97e5a49ce9bb91,'','0.00','0',0x646174612f676f6f64735f617474725f696d672f313439303135343634303435343436393631362e6a7067,0x696d616765732f3230313730332f676f6f64735f696d672f5f505f313439303135343432363532392e6a7067,'','0','','0','','','0','','43','0');");
E_D("replace into `dsc_goods_attr` values('2','700','1',0xe5ae9de79fb3e8939d,'','0.00','0',0x646174612f676f6f64735f617474725f696d672f313439303135343635333530353432333433372e6a7067,0x696d616765732f3230313730332f676f6f64735f696d672f5f505f313439303135343432363135322e6a7067,'','0','','0','','','0','','43','0');");
E_D("replace into `dsc_goods_attr` values('3','700','1',0xe78eabe791b0e98791,'','0.00','0',0x646174612f676f6f64735f617474725f696d672f313439303135343636323732333330333630372e6a7067,0x696d616765732f3230313730332f676f6f64735f696d672f5f505f313439303135343432373833342e6a7067,'','0','','0','','','0','','43','0');");
E_D("replace into `dsc_goods_attr` values('4','700','1',0xe59c9fe8b1aae98791,'','0.00','0',0x646174612f676f6f64735f617474725f696d672f313439303135343637333731393733303538322e6a7067,0x696d616765732f3230313730332f676f6f64735f696d672f5f505f313439303135343432373633362e6a7067,'','0','','0','','','0','','43','0');");
E_D("replace into `dsc_goods_attr` values('5','700','1',0xe4b8ade59bbde7baa2,'','0.00','0',0x646174612f676f6f64735f617474725f696d672f313439303135343731363336323937323632322e6a7067,0x696d616765732f3230313730332f676f6f64735f696d672f5f505f313439303135343432373739322e6a7067,'','1','','0','','','0','','43','0');");
E_D("replace into `dsc_goods_attr` values('6','707','2',0xe799bde889b2,'','0.00','0',0x646174612f676f6f64735f617474725f696d672f313439303135353535363231393135363836302e6a7067,0x696d616765732f3230313730332f676f6f64735f696d672f5f505f313439303135353337383031302e6a7067,'','0','','0','','','0','','43','0');");
E_D("replace into `dsc_goods_attr` values('7','707','2',0xe9bb91e889b2,'','0.00','0',0x646174612f676f6f64735f617474725f696d672f313439303135353536343031343131353730372e6a7067,0x696d616765732f3230313730332f676f6f64735f696d672f5f505f313439303135353337383537302e6a7067,'','0','','0','','','0','','43','0');");
E_D("replace into `dsc_goods_attr` values('8','707','2',0xe98791e889b2,'','0.00','0',0x646174612f676f6f64735f617474725f696d672f313439303135353630303831323639363232332e6a7067,0x696d616765732f3230313730332f676f6f64735f696d672f5f505f313439303135353337383630342e6a7067,'','1','','0','','','0','','43','0');");
E_D("replace into `dsc_goods_attr` values('9','711','3',0xe9bb91e889b2,'','0.00','0',0x646174612f676f6f64735f617474725f696d672f313439303136303039303337323830383731352e6a7067,0x696d616765732f3230313730332f676f6f64735f696d672f5f505f313439303135393433303936362e6a7067,'','0','','0','','','0','','44','0');");
E_D("replace into `dsc_goods_attr` values('10','711','3',0xe7baa2e889b2,'','0.00','0',0x646174612f676f6f64735f617474725f696d672f313439303136303131363632363438353936302e6a7067,0x696d616765732f3230313730332f676f6f64735f696d672f5f505f313439303135393433303138312e6a7067,'','1','','0','','','0','','44','0');");
E_D("replace into `dsc_goods_attr` values('11','726','4',0xe781b0e889b2,'','0.00','0',0x646174612f676f6f64735f617474725f696d672f313439303136313730353930353934313332302e6a7067,0x696d616765732f3230313730332f676f6f64735f696d672f5f505f313439303136313335303536362e6a7067,'','0','','0','','','0','','45','0');");
E_D("replace into `dsc_goods_attr` values('12','726','4',0xe69e9ae7baa2e889b2,'','0.00','0',0x646174612f676f6f64735f617474725f696d672f313439303136313731363435303633383633372e6a7067,0x696d616765732f3230313730332f676f6f64735f696d672f5f505f313439303136313335313135342e6a7067,'','0','','0','','','0','','45','0');");
E_D("replace into `dsc_goods_attr` values('13','726','4',0xe993b6e781b0e889b2,'','0.00','0',0x646174612f676f6f64735f617474725f696d672f313439303136313732353738363032333336322e6a7067,0x696d616765732f3230313730332f676f6f64735f696d672f5f505f313439303136313335313131362e6a7067,'','0','','0','','','0','','45','0');");
E_D("replace into `dsc_goods_attr` values('14','726','4',0xe7b4abe889b2,'','0.00','0',0x646174612f676f6f64735f617474725f696d672f313439303136313735373233373837303932372e6a7067,0x696d616765732f3230313730332f676f6f64735f696d672f5f505f313439303136313335313431322e6a7067,'','1','','0','','','0','','45','0');");
E_D("replace into `dsc_goods_attr` values('16','902','7',0xe799bde7baa2e889b2,'','0.00','0',0x646174612f676f6f64735f617474725f696d672f313439303931353638393532353930313736312e6a7067,0x696d616765732f3230313730332f676f6f64735f696d672f5f505f313439303931353630303137362e6a7067,'','0','','0','','','0','','41','0');");
E_D("replace into `dsc_goods_attr` values('17','902','7',0xe6b5b7e5869be8939d,'','0.00','0',0x646174612f676f6f64735f617474725f696d672f313439303931353639373933333134393234352e6a7067,0x696d616765732f3230313730332f676f6f64735f696d672f5f505f313439303931353630303730312e6a7067,'','0','','0','','','0','','41','0');");
E_D("replace into `dsc_goods_attr` values('18','902','7',0xe9bb84e9bb91e889b2,'','0.00','0',0x646174612f676f6f64735f617474725f696d672f313439303931353730363234303332333036382e6a7067,0x696d616765732f3230313730332f676f6f64735f696d672f5f505f313439303931353630303933322e6a7067,'','1','','0','','','0','','41','0');");
E_D("replace into `dsc_goods_attr` values('721','904','1',0xe69a97e5a49ce9bb91,'','0.00','19','','','','0','','0','','','0','','57','0');");
E_D("replace into `dsc_goods_attr` values('737','907','1',0xe69a97e5a49ce9bb91,'','0.00','722','','','','0','','0','','','0','','57','0');");
E_D("replace into `dsc_goods_attr` values('738','907','1',0xe5ae9de79fb3e8939d,'','0.00','738','','','','0','','0','','','0','','57','0');");
E_D("replace into `dsc_goods_attr` values('739','907','1',0xe78eabe791b0e98791,'','0.00','739','','','','0','','0','','','0','','57','0');");
E_D("replace into `dsc_goods_attr` values('740','907','1',0xe59c9fe8b1aae98791,'','0.00','740','','','','0','','0','','','0','','57','0');");

require("../../inc/footer.php");
?>