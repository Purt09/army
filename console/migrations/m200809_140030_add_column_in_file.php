<?php

use yii\db\Migration;

/**
 * Class m200809_140030_add_column_in_file
 */
class m200809_140030_add_column_in_file extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%file}}', 'delete_id', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200809_140030_add_column_in_file cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200809_140030_add_column_in_file cannot be reverted.\n";

        return false;
    }
    */
}
