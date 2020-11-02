<?php

use yii\db\Migration;

/**
 * Class m201016_103604_add_raspisanie
 */
class m201016_103604_add_raspisanie extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%semester}}', [
            'id' => $this->primaryKey(),
            'year' => $this->date()->notNull(),
            'season' => $this->smallInteger()->notNull(),
            'title' => $this->string()->notNull(),
        ]);
        $this->createTable('{{%timetable}}', [
            'id' => $this->primaryKey(),
            'semester_id' => $this->integer()->notNull(),
            'unit_id' => $this->integer()->notNull(),
            'title' => $this->string()->notNull(),
        ]);
        $this->addForeignKey('{{%fk-timetable-semester_id}}', '{{%timetable}}', 'semester_id', '{{%semester}}', 'id', 'SET NULL');
        $this->addForeignKey('{{%fk-timetable-unit_id}}', '{{%timetable}}', 'unit_id', 'tbl_mil_unit', 'id', 'SET NULL');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201016_103604_add_raspisanie cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201016_103604_add_raspisanie cannot be reverted.\n";

        return false;
    }
    */
}
