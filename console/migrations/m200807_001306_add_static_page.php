<?php

use yii\db\Migration;

/**
 * Class m200807_001306_add_static_page
 */
class m200807_001306_add_static_page extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('{{%page}}', [
            'title' => 'Выпускники 51 кафедра',
            'display_title' => true,
            'alias' => 'department_51kaf',
            'created_at' => '2020-07-13 09:20:56',
            'updated_at' => '2020-07-13 09:20:56',
        ]);
        $this->insert('{{%page}}', [
            'title' => 'Выпускники 52 кафедра',
            'display_title' => true,
            'alias' => 'department_52kaf',
            'created_at' => '2020-07-13 09:20:56',
            'updated_at' => '2020-07-13 09:20:56',
        ]);
        $this->insert('{{%page}}', [
            'title' => 'Выпускники 53 кафедра',
            'display_title' => true,
            'alias' => 'department_53kaf',
            'created_at' => '2020-07-13 09:20:56',
            'updated_at' => '2020-07-13 09:20:56',
        ]);
        $this->insert('{{%page}}', [
            'title' => 'Выпускники 55 кафедра',
            'display_title' => true,
            'alias' => 'department_55kaf',
            'created_at' => '2020-07-13 09:20:56',
            'updated_at' => '2020-07-13 09:20:56',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200807_001306_add_static_page cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200807_001306_add_static_page cannot be reverted.\n";

        return false;
    }
    */
}
