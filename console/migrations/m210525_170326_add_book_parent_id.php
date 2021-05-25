<?php

use yii\db\Migration;

/**
 * Class m210525_170326_add_book_parent_id
 */
class m210525_170326_add_book_parent_id extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%books_category}}', 'parent_id', $this->integer());

        $this->insert('{{%books_category}}', [
            'id' => 2,
            'title' => 'Книги впр рекомендуемые',
            'parent_id' => 1
        ]);
        $this->insert('{{%books_category}}', [
            'id' => 3,
            'title' => 'Книги впр обязательные',
            'parent_id' => 1
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210525_170326_add_book_parent_id cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210525_170326_add_book_parent_id cannot be reverted.\n";

        return false;
    }
    */
}
