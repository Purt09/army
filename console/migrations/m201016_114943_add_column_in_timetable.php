<?php

use yii\db\Migration;

/**
 * Class m201016_114943_add_column_in_timetable
 */
class m201016_114943_add_column_in_timetable extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%timetable}}', 'summary', $this->boolean());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201016_114943_add_column_in_timetable cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201016_114943_add_column_in_timetable cannot be reverted.\n";

        return false;
    }
    */
}
