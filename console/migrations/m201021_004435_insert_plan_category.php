<?php

use yii\db\Migration;

/**
 * Class m201021_004435_insert_plan_category
 */
class m201021_004435_insert_plan_category extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%plan_category}}', 'alias', $this->string());
        $this->insert('{{%plan_category}}', [
            'name' => 'План факультета на месяц',
            'alias' => 'fak_plan_month',
            'text' => '',
        ]);
        $this->insert('{{%plan_category}}', [
            'name' => 'План факультета на год',
            'alias' => 'fak_plan_year',
            'text' => '',
        ]);
        $this->insert('{{%plan_category}}', [
            'name' => 'План факультета УМС',
            'alias' => 'fak_plan_yms',
            'text' => '',
        ]);
        $this->insert('{{%plan_category}}', [
            'name' => 'План академии на месяц',
            'alias' => 'academy_plan_month',
            'text' => '',
        ]);
        $this->insert('{{%plan_category}}', [
            'name' => 'План курса на ПХД',
            'alias' => 'course_plan_phd',
            'text' => '',
        ]);
        $this->insert('{{%plan_category}}', [
            'name' => 'План курса на выходной день',
            'alias' => 'course_plan_free_day',
            'text' => '',
        ]);
        $this->insert('{{%plan_category}}', [
            'name' => 'План курса на спортивно-массовую работу',
            'alias' => 'course_plan_sport',
            'text' => '',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201021_004435_insert_plan_category cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201021_004435_insert_plan_category cannot be reverted.\n";

        return false;
    }
    */
}
