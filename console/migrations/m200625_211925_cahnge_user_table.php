<?php

use yii\db\Migration;

/**
 * Class m200625_211925_cahnge_user_table
 */
class m200625_211925_cahnge_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('{{%user}}', 'email');
        $this->addColumn('{{%user}}', 'user_moodle_id', $this->integer());
        $this->addColumn('{{%user}}', 'user_base_id', $this->integer());
        $this->addForeignKey('{{%fk-user-user_moodle_id}}', '{{%user}}', 'user_moodle_id', 'mdl_user', 'id', 'SET NULL');
        $this->addForeignKey('{{%fk-user-user_base_id}}', '{{%user}}', 'user_base_id', 'users', 'id', 'SET NULL');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('{{%user}}', 'email', $this->string()->notNull()->unique());
        $this->dropColumn('{{%user}}', 'user_moodle_id');
        $this->dropColumn('{{%user}}', 'user_base_id');
        $this->dropForeignKey('{{%fk-$user-user_moodle_id}}', '{{%user}}');
        $this->dropForeignKey('{{%fk-$user-user_base_id}}', '{{%user}}');
        echo "m200625_211925_cahnge_user_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200625_211925_cahnge_user_table cannot be reverted.\n";

        return false;
    }
    */
}
