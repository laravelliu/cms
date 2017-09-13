<?php

use yii\db\Migration;
use yii\db\Schema;

class m170909_065457_create_table_test extends Migration
{
    public function safeUp()
    {
        $this->createTable('test', [
            'id' => $this->primaryKey(),
            'title' => $this->string(128)->notNull(),
            'content' => $this->text(),
        ]);
    }

    //如果不可恢复（删除表）,return false
    public function safeDown()
    {
        $this->dropTable('test');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170909_065457_create_table_test cannot be reverted.\n";

        return false;
    }
    */
}
