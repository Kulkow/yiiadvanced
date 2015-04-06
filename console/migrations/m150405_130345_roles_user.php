<?php

use yii\db\Schema;
use yii\db\Migration;

class m150405_130345_roles_user extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%roles}}', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . '(32) NOT NULL',
            'description' => Schema::TYPE_STRING . '(255) NOT NULL'
        ], $tableOptions);
        $this->createIndex('uniq_name', '{{%roles}}', 'name', 1);
      
    }

    public function down()
    {
        $this->dropTable('{{%roles}}');
        return false;
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
