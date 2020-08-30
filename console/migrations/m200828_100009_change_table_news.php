<?php

use yii\db\Migration;

/**
 * Class m200828_100009_change_table_news
 */
class m200828_100009_change_table_news extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('{{%news}}', 'img', $this->text()->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200828_100009_change_table_news cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200828_100009_change_table_news cannot be reverted.\n";

        return false;
    }
    */
}
