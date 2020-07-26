<?php

use yii\db\Migration;

/**
 * Class m200720_232717_add_fk_new
 */
class m200720_232717_add_fk_new extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropForeignKey('{{%fk-user-user_base_id}}', '{{%user}}');
        $this->addForeignKey('{{%fk-user-user_base_id}}', '{{%user}}', 'user_base_id', 'tbl_staff', 'id', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addForeignKey('{{%fk-user-user_base_id}}', '{{%user}}', 'user_base_id', 'users', 'id', 'SET NULL');
        $this->dropForeignKey('{{%fk-user-user_base_id}}', '{{%user}}');
        echo "m200720_232717_add_fk_new cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200720_232717_add_fk_new cannot be reverted.\n";

        return false;
    }
    */
}
