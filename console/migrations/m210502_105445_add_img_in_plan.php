<?php

use yii\db\Migration;

/**
 * Class m210502_105445_add_img_in_plan
 */
class m210502_105445_add_img_in_plan extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%plan}}', 'img', $this->text()->defaultValue(""));
        $this->insert('{{%plan_category}}', [
            'name' => 'Выпускники',
            'alias' => 'graduates',
            'text' => '',
        ]);
        $this->insert('{{%plan_category}}', [
            'name' => 'Бессмертный полк 52 кафедра',
            'alias' => 'five_two__regiment',
            'text' => '',
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210502_105445_add_img_in_plan cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210502_105445_add_img_in_plan cannot be reverted.\n";

        return false;
    }
    */
}
