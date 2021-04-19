<?php

use yii\db\Migration;

/**
 * Class m210305_153958_add_lvl_converence
 */
class m210321_153958_add_column_in_ranks extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('tbl_science_conference', 'description', $this->text());
        $this->addColumn('tbl_science_conference', 'responsible_id', $this->integer());
        $this->addForeignKey('{{%fk-tbl_science_conference-responsible_id}}', 'tbl_science_conference', 'responsible_id', 'tbl_staff', 'id', 'SET NULL');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210305_153958_add_lvl_converence cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210305_153958_add_lvl_converence cannot be reverted.\n";

        return false;
    }
    */
}
