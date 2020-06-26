<?php

namespace core\entities\User;

use core\entities\Common\Maclabels;
use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id ое обдп ьфп рпме дембфш SERIAL! пОП ОБУМЕДХЕФУС ПФ kks_roles. рПУМЕ УПЪДБОЙС ДБООПК ФБВМЙГЩ ПФТБВБФЩЧБЕФ УЛТЙРФ, ЛПФПТЩК ЪБДБЕФ ЕНХ ЪОБЮЕОЙЕ РП ХНПМЮБОЙА Ч nextval('kks_roles_id_seq');
 * @property string $role_name
 * @property bool $with_inheritance
 * @property string $unique_id
 * @property string $last_update
 * @property int $id_rank
 * @property int $id_state
 * @property int $id_maclabel
 * @property string $lastname
 * @property string $firstname
 * @property string $sirname
 * @property string $fio
 * @property string $insert_time
 * @property string|null $email
 * @property string|null $acc_right_num
 * @property string|null $acc_right_date
 * @property bool $is_connected
 *
 * @property Log[] $logs
 * @property Position[] $positions
 * @property Position[] $positions0
 * @property SearchTemplates[] $searchTemplates
 * @property TblIoObjects[] $tblIoObjects
 * @property UserAclTemplates[] $userAclTemplates
 * @property UserRubricator $userRubricator
 * @property UserTemplates[] $userTemplates
 * @property Maclabels $maclabel
 * @property Ranks $rank
 * @property UserState $state
 */
class UsersBase extends \yii\db\ActiveRecord
{
    public static function create($firstname, $lastname, $sirname, $fio): UsersBase
    {
        $model = new UsersBase();
        $model->role_name = 'test';
        $model->unique_id = 'test';
        $model->id_rank = 1;
        $model->id_state = 1;
        $model->firstname = $firstname;
        $model->lastname = $lastname;
        $model->sirname = $sirname;
        $model->fio = $fio;
        if($model->save())
            return $model;
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['role_name', 'unique_id', 'id_rank', 'id_state', 'lastname', 'firstname', 'sirname', 'fio'], 'required'],
            [['role_name', 'unique_id', 'lastname', 'firstname', 'sirname', 'fio', 'email', 'acc_right_num'], 'string'],
            [['with_inheritance', 'is_connected'], 'boolean'],
            [['last_update', 'insert_time', 'acc_right_date'], 'safe'],
            [['id_rank', 'id_state', 'id_maclabel'], 'default', 'value' => null],
            [['id_rank', 'id_state', 'id_maclabel'], 'integer'],
            [['id_maclabel'], 'exist', 'skipOnError' => true, 'targetClass' => Maclabels::className(), 'targetAttribute' => ['id_maclabel' => 'id']],
            [['id_rank'], 'exist', 'skipOnError' => true, 'targetClass' => Ranks::className(), 'targetAttribute' => ['id_rank' => 'id']],
            [['id_state'], 'exist', 'skipOnError' => true, 'targetClass' => UserState::className(), 'targetAttribute' => ['id_state' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'role_name' => 'Role Name',
            'with_inheritance' => 'With Inheritance',
            'unique_id' => 'Unique ID',
            'last_update' => 'Last Update',
            'id_rank' => 'Id Rank',
            'id_state' => 'Id State',
            'id_maclabel' => 'Id Maclabel',
            'lastname' => 'Lastname',
            'firstname' => 'Firstname',
            'sirname' => 'Sirname',
            'fio' => 'Fio',
            'insert_time' => 'Insert Time',
            'email' => 'Email',
            'acc_right_num' => 'Acc Right Num',
            'acc_right_date' => 'Acc Right Date',
            'is_connected' => 'Is Connected',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLogs()
    {
        return $this->hasMany(Log::className(), ['id_user' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPositions()
    {
        return $this->hasMany(Position::className(), ['id_user_vrio' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPositions0()
    {
        return $this->hasMany(Position::className(), ['id_user' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSearchTemplates()
    {
        return $this->hasMany(SearchTemplates::className(), ['author' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblIoObjects()
    {
        return $this->hasMany(TblIoObjects::className(), ['author' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserAclTemplates()
    {
        return $this->hasMany(UserAclTemplates::className(), ['id_user' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserRubricator()
    {
        return $this->hasOne(UserRubricator::className(), ['id_user' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserTemplates()
    {
        return $this->hasMany(UserTemplates::className(), ['id_user' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMaclabel()
    {
        return $this->hasOne(Maclabels::className(), ['id' => 'id_maclabel']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRank()
    {
        return $this->hasOne(Ranks::className(), ['id' => 'id_rank']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getState()
    {
        return $this->hasOne(UserState::className(), ['id' => 'id_state']);
    }
}
