<?php

use yii\db\Migration;

/**
 * Class m200817_233233_add_column_and_insert_data
 */
class m200817_233233_add_column_and_insert_data extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('{{%page}}', [
            'title' => 'Главная управление фаукльтета',
            'display_title' => true,
            'alias' => 'main_fak_general',
            'created_at' => '2020-07-13 09:20:56',
            'updated_at' => '2020-07-13 09:20:56'
        ]);
        $this->insert('{{%page}}', [
            'title' => 'Главная управление 51кафедрой',
            'display_title' => true,
            'alias' => 'main_51kaf_general',
            'created_at' => '2020-07-13 09:20:56',
            'updated_at' => '2020-07-13 09:20:56'
        ]);
        $this->insert('{{%page}}', [
            'title' => 'Главная управление 52кафедрой',
            'display_title' => true,
            'alias' => 'main_52kaf_general',
            'created_at' => '2020-07-13 09:20:56',
            'updated_at' => '2020-07-13 09:20:56'
        ]);
        $this->insert('{{%page}}', [
            'title' => 'Главная управление 53кафедрой',
            'display_title' => true,
            'alias' => 'main_53kaf_general',
            'created_at' => '2020-07-13 09:20:56',
            'updated_at' => '2020-07-13 09:20:56'
        ]);
        $this->insert('{{%page}}', [
            'title' => 'Главная управление 55кафедрой',
            'display_title' => true,
            'alias' => 'main_55kaf_general',
            'created_at' => '2020-07-13 09:20:56',
            'updated_at' => '2020-07-13 09:20:56'
        ]);

        $this->insert('{{%page}}', [
            'title' => 'Главная управление 51курс',
            'display_title' => true,
            'alias' => 'main_51course',
            'created_at' => '2020-07-13 09:20:56',
            'updated_at' => '2020-07-13 09:20:56'
        ]);
        $this->insert('{{%page}}', [
            'title' => 'Главная управление 52курс',
            'display_title' => true,
            'alias' => 'main_52course',
            'created_at' => '2020-07-13 09:20:56',
            'updated_at' => '2020-07-13 09:20:56'
        ]);

        $this->insert('{{%page}}', [
            'title' => 'Главная управление 53курс',
            'display_title' => true,
            'alias' => 'main_53course',
            'created_at' => '2020-07-13 09:20:56',
            'updated_at' => '2020-07-13 09:20:56'
        ]);

        $this->insert('{{%page}}', [
            'title' => 'Главная управление 54курс',
            'display_title' => true,
            'alias' => 'main_54course',
            'created_at' => '2020-07-13 09:20:56',
            'updated_at' => '2020-07-13 09:20:56'
        ]);

        $this->insert('{{%page}}', [
            'title' => 'Главная управление 55курс',
            'display_title' => true,
            'alias' => 'main_55course',
            'created_at' => '2020-07-13 09:20:56',
            'updated_at' => '2020-07-13 09:20:56'
        ]);


        $this->addColumn('{{%news_publications}}', 'course51', $this->boolean());
        $this->addColumn('{{%news_publications}}', 'course52', $this->boolean());
        $this->addColumn('{{%news_publications}}', 'course53', $this->boolean());
        $this->addColumn('{{%news_publications}}', 'course54', $this->boolean());
        $this->addColumn('{{%news_publications}}', 'course55', $this->boolean());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200817_233233_add_column_and_insert_data cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200817_233233_add_column_and_insert_data cannot be reverted.\n";

        return false;
    }
    */
}
