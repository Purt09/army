<?php

use yii\db\Migration;

/**
 * Class m201001_003742_create_table_yii_log_file
 */
class m201001_003742_create_table_yii_log_file extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%file_log}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'type' => $this->string()->notNull(),
            'description' => $this->string()->notNull(),
        ]);
        $this->addForeignKey('{{%fk-file_log-user_id}}', '{{%file_log}}', 'user_id', '{{%user}}', 'id', 'SET NULL');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201001_003742_create_table_yii_log_file cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201001_003742_create_table_yii_log_file cannot be reverted.\n";

        return false;
    }
    */
}
