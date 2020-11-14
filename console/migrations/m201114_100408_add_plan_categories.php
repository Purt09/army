<?php

use yii\db\Migration;

/**
 * Class m201114_100408_add_plan_categories
 */
class m201114_100408_add_plan_categories extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('{{%plan_category}}', [
            'name' => 'График контроля Осень 20/21',
            'alias' => 'method_control_oc',
            'text' => '',
        ]);
        $this->insert('{{%plan_category}}', [
            'name' => 'График контроля Весна 20/21',
            'alias' => 'method_control_ves',
            'text' => '',
        ]);
        $this->insert('{{%plan_category}}', [
            'name' => 'Открытые и показательные занятия',
            'alias' => 'method_open_lessons',
            'text' => '',
        ]);
        $this->insert('{{%plan_category}}', [
            'name' => 'Повышении квалификации',
            'alias' => 'method_up_skill',
            'text' => '',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201114_100408_add_plan_categories cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201114_100408_add_plan_categories cannot be reverted.\n";

        return false;
    }
    */
}
