<?php

use yii\db\Migration;

/**
 * Class m201011_112919_add_column_in_user_and_mil_position
 */
class m201011_112919_add_column_in_user_and_mil_position extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('tbl_staff', 'passport_adderss', $this->string());
        $this->addColumn('tbl_staff', 'autobiography', $this->text());
        $this->addColumn('tbl_mil_position', 'position', $this->integer());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('tbl_staff', 'passport_adderss');
        $this->dropColumn('tbl_staff', 'autobiography');
        $this->dropColumn('tbl_mil_position', 'position');
        echo "m201011_112919_add_column_in_user_and_mil_position cannot be reverted.\n";


        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201011_112919_add_column_in_user_and_mil_position cannot be reverted.\n";

        return false;
    }
    */
}
