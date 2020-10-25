<?php

use yii\db\Migration;

/**
 * Class m201025_085222_create_table_Distsiplina_and_Evaluation
 */
class m201025_085222_create_table_Distsiplina_and_Evaluation extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%subject}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'description' => $this->text(),
            'unit_id' => $this->integer()->notNull(),
            'special' => $this->boolean()->defaultValue(false),
        ]);
        $this->addForeignKey('{{%fk-subject-unit_id}}', '{{%subject}}', 'unit_id', 'tbl_mil_unit', 'id', 'SET NULL');
        $this->createTable('{{%evaluation}}', [
            'id' => $this->primaryKey(),
            'result' => $this->integer()->notNull(),
            'semester_id' => $this->integer()->notNull(),
            'user_id' => $this->integer()->notNull(),
            'subject_id' => $this->integer()->notNull(),
        ]);
        $this->addForeignKey('{{%fk-evaluation-semester_id}}', '{{%evaluation}}', 'semester_id', '{{%semester}}', 'id', 'SET NULL');
        $this->addForeignKey('{{%fk-evaluation-user_id}}', '{{%evaluation}}', 'user_id', '{{%user}}', 'id', 'SET NULL');
        $this->addForeignKey('{{%fk-evaluation-subject_id}}', '{{%evaluation}}', 'subject_id', '{{%subject}}', 'id', 'SET NULL');
        $this->createIndex('{{%idx-evaluation-semester_id-user_id-subject_id}}', '{{%evaluation}}', ['semester_id', 'user_id', 'subject_id'], true);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%subject}}');
        $this->dropForeignKey('{{%fk-subject-unit_id}}', '{{%subject}}');
        $this->dropTable('{{%evaluation}}');
        $this->dropForeignKey('{{%fk-evaluation-semester_id}}', '{{%evaluation}}');
        $this->dropForeignKey('{{%fk-evaluation-user_id}}', '{{%evaluation}}');
        $this->dropForeignKey('{{%fk-evaluation-subject_id}}', '{{%evaluation}}');
        $this->dropIndex('{{%idx-evaluation-semester_id-user_id-subject_id}}', '{{%user_networks}}');
        echo "m201025_085222_create_table_Distsiplina_and_Evaluation cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201025_085222_create_table_Distsiplina_and_Evaluation cannot be reverted.\n";

        return false;
    }
    */
}
