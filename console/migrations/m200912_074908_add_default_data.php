<?php

use yii\db\Migration;

/**
 * Class m200912_074908_add_default_data
 */
class m200912_074908_add_default_data extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('tbl_education_level', [
            'id' => 1,
            'name' => 'Без уровня',
        ]);
        $this->insert('tbl_country', [
            'id' => 1,
            'name' => 'Россия',
        ]);
        $this->insert('tbl_city', [
            'id' => 1,
            'name' => 'Санкт-Петербург',
        ]);
        $this->insert('tbl_univercity', [
            'id' => 1,
            'name' => 'ВКА',
            'title' => 'Военно-космическая академия имени А.Ф.Можайского',
            'id_country' => 1,
            'id_city' => 1,
            'postcode' => '197198',
            'phone' => '8 (812) 347-97-70',
            'fax' => '8 (812) 237-12-49',
            'email' => 'vka@mil.ru',
            'note' => 'note',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200912_074908_add_default_data cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200912_074908_add_default_data cannot be reverted.\n";

        return false;
    }
    */
}
