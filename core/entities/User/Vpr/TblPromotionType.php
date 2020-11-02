<?php

namespace core\entities\User\Vpr;

use Yii;

/**
 * This is the model class for table "promotion_type".
 *
 * @property string|null $unique_id
 * @property string|null $last_update
 * @property int|null $id
 * @property int|null $id_io_state
 * @property string|null $uuid_t
 * @property string|null $rr_name
 * @property string|null $r_icon
 * @property int|null $record_fill_color
 * @property int|null $record_text_color
 * @property string|null $name
 */
class TblPromotionType extends \yii\db\ActiveRecord
{
    use ViewTypeTrait;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_promotion_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['unique_id', 'uuid_t', 'rr_name', 'r_icon', 'name'], 'string'],
            [['last_update'], 'safe'],
            [['id', 'id_io_state', 'record_fill_color', 'record_text_color'], 'default', 'value' => null],
            [['id', 'id_io_state', 'record_fill_color', 'record_text_color'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'unique_id' => 'Unique ID',
            'last_update' => 'Last Update',
            'id' => 'ID',
            'id_io_state' => 'Id Io State',
            'uuid_t' => 'Uuid T',
            'rr_name' => 'Rr Name',
            'r_icon' => 'R Icon',
            'record_fill_color' => 'Record Fill Color',
            'record_text_color' => 'Record Text Color',
            'name' => 'Название',
        ];
    }
}
