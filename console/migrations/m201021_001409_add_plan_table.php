<?php

use yii\db\Migration;

/**
 * Class m201021_001409_add_plan_table
 */
class m201021_001409_add_plan_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%plan_category}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'text' => $this->text()->notNull(),
        ]);
        $this->createTable('{{%plan}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'text' => $this->text(),
            'category_id' => $this->integer()->notNull(),
            'unit_id' => $this->integer()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'date' => $this->integer(),
            'sort' => $this->integer(),
        ]);
        $this->addForeignKey('{{%fk-plan-semester_id}}', '{{%plan}}', 'category_id', '{{%plan_category}}', 'id', 'SET NULL');
        $this->addForeignKey('{{%fk-plan-unit_id}}', '{{%plan}}', 'unit_id', 'tbl_mil_unit', 'id', 'SET NULL');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201021_001409_add_plan_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201021_001409_add_plan_table cannot be reverted.\n";

        return false;
    }
    */
}
