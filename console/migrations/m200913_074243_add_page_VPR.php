<?php

use yii\db\Migration;

/**
 * Class m200913_074243_add_page_VPR
 */
class m200913_074243_add_page_VPR extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('{{%page}}', [
            'title' => 'Бессмертный полк факультета',
            'display_title' => true,
            'alias' => 'immortal_regiment_main',
            'created_at' => '2020-07-13 09:20:56',
            'updated_at' => '2020-07-13 09:20:56',
        ]);
        $this->insert('{{%page}}', [
            'title' => 'Бессмертный полк 51 кафедры',
            'display_title' => true,
            'alias' => 'immortal_regiment_51kaf',
            'created_at' => '2020-07-13 09:20:56',
            'updated_at' => '2020-07-13 09:20:56',
        ]);
        $this->insert('{{%page}}', [
            'title' => 'Бессмертный полк 52 кафедры',
            'display_title' => true,
            'alias' => 'immortal_regiment_52kaf',
            'created_at' => '2020-07-13 09:20:56',
            'updated_at' => '2020-07-13 09:20:56',
        ]);
        $this->insert('{{%page}}', [
            'title' => 'Бессмертный полк 53 кафедры',
            'display_title' => true,
            'alias' => 'immortal_regiment_53kaf',
            'created_at' => '2020-07-13 09:20:56',
            'updated_at' => '2020-07-13 09:20:56',
        ]);
        $this->insert('{{%page}}', [
            'title' => 'Бессмертный полк 55 кафедры',
            'display_title' => true,
            'alias' => 'immortal_regiment_55kaf',
            'created_at' => '2020-07-13 09:20:56',
            'updated_at' => '2020-07-13 09:20:56',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200913_074243_add_page_VPR cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200913_074243_add_page_VPR cannot be reverted.\n";

        return false;
    }
    */
}
