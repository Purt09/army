<?php

use yii\db\Migration;

/**
 * Class m201105_191804_add_plan_category
 */
class m201105_191804_add_plan_category extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('{{%plan_category}}', [
            'name' => 'План учебного совета на год',
            'alias' => 'learning_advice',
            'text' => '',
        ]);
        $this->insert('{{%plan_category}}', [
            'name' => 'План ВНО',
            'alias' => 'VNO',
            'text' => '',
        ]);
        $this->insert('{{%plan_category}}', [
            'name' => 'ПИСП',
            'alias' => 'PISP',
            'text' => '',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201105_191804_add_plan_category cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201105_191804_add_plan_category cannot be reverted.\n";

        return false;
    }
    */
}
