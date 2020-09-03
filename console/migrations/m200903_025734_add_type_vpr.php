<?php

use yii\db\Migration;

/**
 * Class m200903_025734_add_type_vpr
 */
class m200903_025734_add_type_vpr extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('tbl_penalty_type', [
            'id' => 1,
            'name' => 'Выговор',
        ]);
        $this->insert('tbl_promotion_type', [
            'id' => 1,
            'name' => 'Благодарность',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200903_025734_add_type_vpr cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200903_025734_add_type_vpr cannot be reverted.\n";

        return false;
    }
    */
}
