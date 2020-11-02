<?php

use yii\db\Migration;

/**
 * Class m201016_114056_add_semesters
 */
class m201016_114056_add_semesters extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('{{%semester}}', 'year');
        $this->addColumn('{{%semester}}', 'year', $this->integer());
        $this->insert('{{%semester}}', [
            'title' => 'Расписание занятий Весна 2020-2021',
            'year' => '2020',
            'season' => 1,
        ]);
        $this->insert('{{%semester}}', [
            'title' => 'Расписание занятий Осень 2020-2021',
            'year' => '2020',
            'season' => 2,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201016_114056_add_semesters cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201016_114056_add_semesters cannot be reverted.\n";

        return false;
    }
    */
}
