<?php

use yii\db\Migration;

/**
 * Class m210520_012401_add_books
 */
class m210520_012401_add_books extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%books}}', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer()->notNull(),
            'title' => $this->string()->notNull(),
            'description' => $this->string()->notNull(),
            'author' => $this->string()->notNull(),
            'pages' => $this->integer(),
            'date' => $this->date(),
            'image' => $this->string(),
            'created_at' => $this->integer()->notNull(),
        ]);
        $this->createTable('{{%books_category}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
        ]);
        $this->addForeignKey('{{%fk-books-category_id}}', '{{%books}}', 'category_id', '{{%books_category}}', 'id', 'SET NULL');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210520_012401_add_books cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210520_012401_add_books cannot be reverted.\n";

        return false;
    }
    */
}
