<?php

use yii\db\Migration;

/**
 * Class m200823_080042_add_no_rank
 */
class m200823_080042_add_no_rank extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('tbl_military_rank', [
            'id' => 1,
            'rr_name' => '-?-',
            'name' => 'Не задано',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200823_080042_add_no_rank cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200823_080042_add_no_rank cannot be reverted.\n";

        return false;
    }
    */
}
