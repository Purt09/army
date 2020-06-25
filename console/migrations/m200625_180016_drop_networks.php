<?php

use yii\db\Migration;

/**
 * Class m200625_180016_drop_networks
 */
class m200625_180016_drop_networks extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('{{%user}}', 'password_reset_token');
        $this->dropColumn('{{%user}}', 'email_confirm_token');
        $this->dropTable('{{%user_networks}}');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200625_180016_drop_networks cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200625_180016_drop_networks cannot be reverted.\n";

        return false;
    }
    */
}
