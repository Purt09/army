<?php

use yii\db\Migration;

/**
 * Class m200823_075605_add_all_ranks
 */
class m200823_075605_add_all_ranks extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('tbl_military_rank', [
            'rr_name' => 'ефр.',
            'name' => 'Ефрейтор',
        ]);
        $this->insert('tbl_military_rank', [
            'rr_name' => 'мл.с-т',
            'name' => 'Младший сержант ',
        ]);
        $this->insert('tbl_military_rank', [
            'rr_name' => 'с-т',
            'name' => 'Сержант',
        ]);
        $this->insert('tbl_military_rank', [
            'rr_name' => 'ст.с-т.',
            'name' => 'Старший сержант',
        ]);
        $this->insert('tbl_military_rank', [
            'rr_name' => 'ст-на',
            'name' => 'Старшина',
        ]);
        $this->insert('tbl_military_rank', [
            'rr_name' => 'мл.л-т',
            'name' => 'Младший лейтенант ',
        ]);
        $this->insert('tbl_military_rank', [
            'rr_name' => 'л-т',
            'name' => 'Лейтенант',
        ]);
        $this->insert('tbl_military_rank', [
            'rr_name' => 'ст.л-т',
            'name' => 'Старший лейтенант ',
        ]);
        $this->insert('tbl_military_rank', [
            'rr_name' => 'к-н',
            'name' => 'Капитан',
        ]);
        $this->insert('tbl_military_rank', [
            'rr_name' => 'м-р',
            'name' => 'Майор',
        ]);
        $this->insert('tbl_military_rank', [
            'rr_name' => 'п/п-к',
            'name' => 'Подполковник',
        ]);
        $this->insert('tbl_military_rank', [
            'rr_name' => 'ген.м-р',
            'name' => 'Генерал-майор',
        ]);
        $this->insert('tbl_military_rank', [
            'rr_name' => 'ген.л-т',
            'name' => 'Генерал-лейтенант ',
        ]);
        $this->insert('tbl_military_rank', [
            'rr_name' => 'ген.п-к',
            'name' => 'Генерал-полковник',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200823_075605_add_all_ranks cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200823_075605_add_all_ranks cannot be reverted.\n";

        return false;
    }
    */
}
