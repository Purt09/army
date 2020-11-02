<?php

use yii\db\Migration;

/**
 * Class m200912_114058_add_default_data
 */
class m200912_114058_add_default_data extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('tbl_vacation_type', [
            'id' => 1,
            'name' => 'Основной',
        ]);
        $this->insert('tbl_duty_type', [
            'id' => 1,
            'name' => 'Дежурный по факультету',
        ]);
    }
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200912_114058_add_default_data cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200912_114058_add_default_data cannot be reverted.\n";

        return false;
    }
    */
}
