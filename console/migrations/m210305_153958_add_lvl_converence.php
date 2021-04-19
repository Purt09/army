<?php

use yii\db\Migration;

/**
 * Class m210305_153958_add_lvl_converence
 */
class m210305_153958_add_lvl_converence extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('tbl_conference_rank', [
            'name' => 'Конференция'
        ]);
        $this->insert('tbl_conference_rank', [
            'name' => 'Конкурс'
        ]);
        $this->insert('tbl_conference_rank', [
            'name' => 'Олимпиада'
        ]);
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
