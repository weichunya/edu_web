ALTER TABLE `sh_duobaohui`.`sh_red_packet`
ADD COLUMN `channel` VARCHAR(10) NOT NULL DEFAULT '7' COMMENT '渠道标志：1：微信朋友圈  2：微信好友   3：新浪微博   4：QQ   5: QQ空间  6：电子邮件   7：商户推广' AFTER `os_type`;

