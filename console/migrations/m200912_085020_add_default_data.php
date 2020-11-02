<?php

use yii\db\Migration;

/**
 * Class m200912_085020_add_default_data
 */
class m200912_085020_add_default_data extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('tbl_science_gradiate', [
            'id' => 1,
            'name' => 'Кандидат наук',
        ]);
        $this->insert('tbl_science_gradiate', [
            'id' => 2,
            'name' => 'Доктор наук',
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200912_085020_add_default_data cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200912_085020_add_default_data cannot be reverted.\n";

        return false;
    }
    */
}
