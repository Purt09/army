<?php

use yii\db\Migration;

/**
 * Class m200823_074851_test_add_rank
 */
class m200823_074851_test_add_rank extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('tbl_military_rank', [
            'rr_name' => 'ряд.',
            'name' => 'Рядовой',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200823_074851_test_add_rank cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200823_074851_test_add_rank cannot be reverted.\n";

        return false;
    }
    */
}
