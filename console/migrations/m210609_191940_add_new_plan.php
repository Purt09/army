<?php

use yii\db\Migration;

/**
 * Class m210609_191940_add_new_plan
 */
class m210609_191940_add_new_plan extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('{{%plan_category}}', [
            'name' => 'График контроля Весна 21/22',
            'alias' => 'method_control_vc_21_22',
            'text' => '',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210609_191940_add_new_plan cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210609_191940_add_new_plan cannot be reverted.\n";

        return false;
    }
    */
}
