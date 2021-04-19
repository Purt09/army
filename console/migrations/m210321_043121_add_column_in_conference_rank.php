<?php

use yii\db\Migration;

/**
 * Class m210321_043121_add_column_in_conference_rank
 */
class m210321_043121_add_column_in_conference_rank extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210321_043121_add_column_in_conference_rank cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210321_043121_add_column_in_conference_rank cannot be reverted.\n";

        return false;
    }
    */
}
