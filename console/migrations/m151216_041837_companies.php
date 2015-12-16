<?php

use yii\db\Schema;
use yii\db\Migration;

class m151216_041837_companies extends Migration
{
    public function up()
    {
        $this->createTable('{{%companies}}', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'about' => Schema::TYPE_TEXT . ' NULL',
            'url' => Schema::TYPE_STRING . ' NULL',
            'logo_url' => Schema::TYPE_STRING . ' NULL',
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%companies}}');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
