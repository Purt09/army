<?php

use yii\db\Migration;

/**
 * Class m200722_230452_change_news_table
 */
class m200722_230452_change_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('{{%news}}', 'alias');
        $this->addColumn('{{%news}}', 'publications', $this->integer());

        $this->createTable('{{%news_publications}}', [
            'id' => $this->primaryKey(),
            'main' => $this->boolean(),
            '51_cafedra' => $this->boolean(),
            '52_cafedra' => $this->boolean(),
            '53_cafedra' => $this->boolean(),
            '54_cafedra' => $this->boolean(),
        ]);

        $this->addForeignKey('{{%fk-news-publications}}', '{{%news}}', 'publications', '{{%news_publications}}', 'id', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200722_230452_change_news_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200722_230452_change_news_table cannot be reverted.\n";

        return false;
    }
    */
}
