<?php

use yii\db\Migration;

/**
 * Class m201029_151439_add_table_tasks
 */
class m201029_151439_add_table_tasks extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%task_common}}', [
            'id' => $this->primaryKey(),
            'order_id' => $this->string()->notNull(),
            'order_date_finish' => $this->integer()->notNull(),
            'date_finish' => $this->integer()->notNull(),
            'name' => $this->string(),
            'description' => $this->text(),
            'is_complete_cafedra_51' => $this->boolean()->defaultValue(false),
            'is_complete_cafedra_52' => $this->boolean()->defaultValue(false),
            'is_complete_cafedra_53' => $this->boolean()->defaultValue(false),
            'is_complete_cafedra_55' => $this->boolean()->defaultValue(false),
            'is_complete_course_51' => $this->boolean()->defaultValue(false),
            'is_complete_course_52' => $this->boolean()->defaultValue(false),
            'is_complete_course_53' => $this->boolean()->defaultValue(false),
            'is_complete_course_54' => $this->boolean()->defaultValue(false),
            'is_complete_course_55' => $this->boolean()->defaultValue(false),
            'is_complete_manager_cv' => $this->boolean()->defaultValue(false),
            'is_complete_manager_vpr' => $this->boolean()->defaultValue(false),
            'is_complete_manager_teacher' => $this->boolean()->defaultValue(false),
            'created_at' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201029_151439_add_table_tasks cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201029_151439_add_table_tasks cannot be reverted.\n";

        return false;
    }
    */
}
