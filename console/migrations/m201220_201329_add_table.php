<?php

use yii\db\Migration;

/**
 * Class m201220_201329_add_table
 */
class m201220_201329_add_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%article_categories}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
        ]);
        $this->insert('{{%article_categories}}', [
            'name' => 'Бессмертный полк',
        ]);
        $this->insert('{{%article_categories}}', [
            'name' => 'Выпускники факультета',
        ]);
        $this->createTable('{{%article}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'text' => $this->text(),
            'image' => $this->string(),
            'category_id' => $this->integer()->notNull(),
            'unit_id' => $this->integer()->notNull(),
        ]);
        $this->addForeignKey('{{%fk-article-category_id}}', '{{%article}}', 'category_id', '{{%article_categories}}', 'id', 'SET NULL');
        $this->addForeignKey('{{%fk-article-unit_id}}', '{{%article}}', 'unit_id', 'tbl_mil_unit', 'id', 'SET NULL');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201220_201329_add_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201220_201329_add_table cannot be reverted.\n";

        return false;
    }
    */
}
