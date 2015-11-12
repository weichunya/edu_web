ALTER TABLE `sh_duobaohui`.`sh_shop_tel`
ADD COLUMN `scene` VARCHAR(1) NOT NULL COMMENT '1：桌贴，2：桌立，3：易拉宝，4：厕所' AFTER `create_time`;
ALTER TABLE `sh_duobaohui`.`sh_shop_tel`
CHANGE COLUMN `scene` `scene` VARCHAR(1) NOT NULL DEFAULT '1' COMMENT '1：桌贴，2：桌立，3：易拉宝，4：厕所' ;