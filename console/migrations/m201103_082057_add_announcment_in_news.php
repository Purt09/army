<?php

use yii\db\Migration;

/**
 * Class m201103_082057_add_announcment_in_news
 */
class m201103_082057_add_announcment_in_news extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%news_publications}}', 'announcement', $this->boolean()->defaultValue(false));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201103_082057_add_announcment_in_news cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201103_082057_add_announcment_in_news cannot be reverted.\n";

        return false;
    }
    */
}
