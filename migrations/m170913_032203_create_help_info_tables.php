<?php

use yii\db\Migration;

class m170913_032203_create_help_info_tables extends Migration
{
    /*public function safeUp()
    {

    }

    public function safeDown()
    {
        echo "m170913_032203_create_help_info_tables cannot be reverted.\n";

        return false;
    }*/


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $sql = <<<SQL
        CREATE TABLE `help_info_content` (
            `id` int(255) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
          `title` varchar(128) NOT NULL COMMENT '标题',
          `content` text NOT NULL COMMENT '内容',
          `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '是否展示 0为不展示，1为展示',
          `is_new` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '0为不是新的，1为新数据',
          `sort` int(1) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
          `cid` int(255) unsigned NOT NULL COMMENT '所属分类',
          `new_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '展示时间',
          `create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
          `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
          PRIMARY KEY (`id`)
        ) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;
        CREATE TABLE `help_info_list` (
          `id` int(255) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
          `classify` varchar(128) NOT NULL COMMENT '分类名称',
          `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '状态是否显示 0不显示1显示',
          `sort` tinyint(3) unsigned NOT NULL COMMENT '位置排序',
          `type` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '平台：0公开，1为登录用户，2为测试者用户，3为专家',
          `create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
          `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
          PRIMARY KEY (`id`)
        ) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;
SQL;
        $this->execute($sql);
    }

    public function down()
    {
        $this->dropTable('help_info_list');
        $this->dropTable('help_info_content');
    }

}
