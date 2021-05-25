<?php

use yii\db\Migration;

/**
 * Class m210525_181734_alter_column_book_image
 */
class m210525_181734_alter_column_book_image extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('{{%books}}', 'image', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210525_181734_alter_column_book_image cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210525_181734_alter_column_book_image cannot be reverted.\n";

        return false;
    }
    */
}
