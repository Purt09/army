<?php

use yii\db\Migration;

/**
 * Class m200807_003741_add_row
 */
class m200807_003741_add_row extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('{{%page}}', [
            'title' => 'Лучшие выпускиники факультета',
            'display_title' => true,
            'alias' => 'department_main',
            'created_at' => '2020-07-13 09:20:56',
            'updated_at' => '2020-07-13 09:20:56',
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200807_003741_add_row cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200807_003741_add_row cannot be reverted.\n";

        return false;
    }
    */
}
