<?php

use yii\db\Migration;

/**
 * Class m200825_101010_addParentIDInFM
 */
class m200825_101010_addParentIDInFM extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
          $this->addColumn('{{%file}}', 'parent_id', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200825_101010_addParentIDInFM cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200825_101010_addParentIDInFM cannot be reverted.\n";

        return false;
    }
    */
}
