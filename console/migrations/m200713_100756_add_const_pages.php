<?php

use yii\db\Migration;

/**
 * Class m200713_100756_add_const_page
 */
class m200713_100756_add_const_pages extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('{{%page}}', [
            'title' => 'Главная о факультете',
            'display_title' => true,
            'alias' => 'main',
            'created_at' => '2020-07-13 09:20:56',
            'updated_at' => '2020-07-13 09:20:56'
        ]);
        $this->insert('{{%page}}', [
            'title' => 'Главная 51 кафедра',
            'display_title' => true,
            'alias' => 'main_51kaf',
            'created_at' => '2020-07-13 09:20:56',
            'updated_at' => '2020-07-13 09:20:56'
        ]);
        $this->insert('{{%page}}', [
            'title' => 'Главная 52 кафедра',
            'display_title' => true,
            'alias' => 'main_52kaf',
            'created_at' => '2020-07-13 09:20:56',
            'updated_at' => '2020-07-13 09:20:56'
        ]);
        $this->insert('{{%page}}', [
            'title' => 'Главная 53 кафедра',
            'display_title' => true,
            'alias' => 'main_53kaf',
            'created_at' => '2020-07-13 09:20:56',
            'updated_at' => '2020-07-13 09:20:56'
        ]);
        $this->insert('{{%page}}', [
            'title' => 'Главная 55 кафедра',
            'display_title' => true,
            'alias' => 'main_55kaf',
            'created_at' => '2020-07-13 09:20:56',
            'updated_at' => '2020-07-13 09:20:56'
        ]);
        $this->insert('{{%page}}', [
            'title' => 'История 51 кафедра',
            'display_title' => true,
            'alias' => 'history_51kaf',
            'created_at' => '2020-07-13 09:20:56',
            'updated_at' => '2020-07-13 09:20:56'
        ]);
        $this->insert('{{%page}}', [
            'title' => 'История 52 кафедра',
            'display_title' => true,
            'alias' => 'history_52kaf',
            'created_at' => '2020-07-13 09:20:56',
            'updated_at' => '2020-07-13 09:20:56'
        ]);
        $this->insert('{{%page}}', [
            'title' => 'История 53 кафедра',
            'display_title' => true,
            'alias' => 'history_53kaf',
            'created_at' => '2020-07-13 09:20:56',
            'updated_at' => '2020-07-13 09:20:56'
        ]);
        $this->insert('{{%page}}', [
            'title' => 'История 55 кафедра',
            'display_title' => true,
            'alias' => 'history_55kaf',
            'created_at' => '2020-07-13 09:20:56',
            'updated_at' => '2020-07-13 09:20:56'
        ]);
        $this->insert('{{%page}}', [
            'title' => 'Спортивно-массовая работа',
            'display_title' => true,
            'alias' => 'sport_main',
            'created_at' => '2020-07-13 09:20:56',
            'updated_at' => '2020-07-13 09:20:56'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200713_100756_add_const_page cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200713_100756_add_const_page cannot be reverted.\n";

        return false;
    }
    */
}
