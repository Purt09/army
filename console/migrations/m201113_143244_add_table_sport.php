<?php

use yii\db\Migration;

/**
 * Class m201113_143244_add_table_sport
 */
class m201113_143244_add_table_sport extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%sport}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'text' => $this->text(),
            'semester_id' => $this->integer()->notNull(),
            'unit_id' => $this->integer()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'sort' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201113_143244_add_table_sport cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201113_143244_add_table_sport cannot be reverted.\n";

        return false;
    }
    */
}
