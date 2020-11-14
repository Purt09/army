<?php

use yii\db\Migration;

/**
 * Class m201113_143606_add_table_sport_fk
 */
class m201113_143606_add_table_sport_fk extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey('{{%fk-sport-semester_id}}', '{{%sport}}', 'semester_id', '{{%semester}}', 'id', 'SET NULL');
        $this->addForeignKey('{{%fk-sport-unit_id}}', '{{%sport}}', 'unit_id', 'tbl_mil_unit', 'id', 'SET NULL');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201113_143606_add_table_sport_fk cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201113_143606_add_table_sport_fk cannot be reverted.\n";

        return false;
    }
    */
}
