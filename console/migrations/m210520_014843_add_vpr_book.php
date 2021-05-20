<?php

use yii\db\Migration;

/**
 * Class m210520_014843_add_vpr_book
 */
class m210520_014843_add_vpr_book extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('{{%books_category}}', [
            'id' => 1,
            'title' => 'Книги впр',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210520_014843_add_vpr_book cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210520_014843_add_vpr_book cannot be reverted.\n";

        return false;
    }
    */
}
