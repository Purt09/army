<?php

use yii\db\Migration;

/**
 * Class m201001_012848_add_column
 */
class m201001_012848_add_column extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->addColumn('{{%file_log}}', 'created_at', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201001_012848_add_column cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201001_012848_add_column cannot be reverted.\n";

        return false;
    }
    */
}
