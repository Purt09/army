<?php

use yii\db\Migration;

/**
 * Class m200828_095305_add_column_in_news_imporatant
 */
class m200828_095305_add_column_in_news_imporatant extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%news}}', 'important', $this->boolean()->defaultValue(false)->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200828_095305_add_column_in_news_imporatant cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200828_095305_add_column_in_news_imporatant cannot be reverted.\n";

        return false;
    }
    */
}
