<?php

use yii\db\Migration;

/**
 * Class m200804_170637_add_page
 */
class m200804_170637_add_page extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('{{%page}}', [
            'title' => 'Контакты (Список терминалов)',
            'display_title' => true,
            'alias' => 'contacts-abonent',
            'created_at' => '2020-07-13 09:20:56',
            'updated_at' => '2020-07-13 09:20:56',
        ]);
        $this->insert('{{%page}}', [
            'title' => 'Контакты (Информация)',
            'display_title' => true,
            'alias' => 'contacts-info',
            'created_at' => '2020-07-13 09:20:56',
            'updated_at' => '2020-07-13 09:20:56'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200804_170637_add_page cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200804_170637_add_page cannot be reverted.\n";

        return false;
    }
    */
}
