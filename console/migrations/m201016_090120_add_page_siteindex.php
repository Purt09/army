<?php

use yii\db\Migration;

/**
 * Class m201016_090120_add_page_siteindex
 */
class m201016_090120_add_page_siteindex extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('{{%page}}', [
            'title' => 'Объявления факультета',
            'display_title' => true,
            'alias' => 'fakultet_announcement',
            'created_at' => '2020-07-13 09:20:56',
            'updated_at' => '2020-07-13 09:20:56',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201016_090120_add_page_siteindex cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201016_090120_add_page_siteindex cannot be reverted.\n";

        return false;
    }
    */
}
