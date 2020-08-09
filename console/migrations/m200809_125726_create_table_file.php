<?php

use yii\db\Migration;

/**
 * Class m200809_125726_create_table_file
 */
class m200809_125726_create_table_file extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%file}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'name' => $this->string(),
            'user_id' => $this->integer(),
            'path' => $this->string(),
            'create_at' => $this->integer(),
            'size' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200809_125726_create_table_file cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200809_125726_create_table_file cannot be reverted.\n";

        return false;
    }
    */
}
