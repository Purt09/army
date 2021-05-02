<?php

use yii\db\Migration;

/**
 * Class m210502_113818_add_plan_category
 */
class m210502_113818_add_plan_category extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('{{%plan_category}}', [
            'name' => 'Выпускники',
            'alias' => 'graduates',
            'text' => '',
        ]);
        $this->insert('{{%plan_category}}', [
            'name' => 'Бессмертный полк 52 кафедра',
            'alias' => 'egiment',
            'text' => '',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210502_113818_add_plan_category cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210502_113818_add_plan_category cannot be reverted.\n";

        return false;
    }
    */
}
