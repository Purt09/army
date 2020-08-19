<?php

namespace core\entities\User;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use lhs\Yii2SaveRelationsBehavior\SaveRelationsBehavior;
use yii\db\ActiveQuery;
use core\entities\User\Network;

/**
 * User model
 *
 * @property integer $id
 * @property string $username
 * @property string $password_hash
 * @property string $auth_key
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $password
 * @property int $user_moodle_id
 * @property int $user_base_id
 *
 * @property MdlUser $moodle
 * @property TblStaff $base
 */
class User extends ActiveRecord implements IdentityInterface
{
    const STATUS_WAIT = 0;
    const STATUS_ACTIVE = 10;

    public static function requestSignup(string $username, string $password): self
    {
        $user = new User();
        $user->username = $username;
        $user->password = $password;
        $user->setPassword($password);
        $user->created_at = time();
        $user->updated_at = time();
        $user->status = self::STATUS_ACTIVE;
        $user->generateAuthKey();
        return $user;
    }
    public function isWait(): bool
    {
        return $this->status === self::STATUS_WAIT;
    }

    public function isActive(): bool
    {
        return $this->status === self::STATUS_ACTIVE;
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
            [
                'class' => SaveRelationsBehavior::className(),
                'relations' => ['networks'],
            ],
        ];
    }
    public function transactions()
    {
        return [
            self::SCENARIO_DEFAULT => self::OP_ALL,
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['auth_key', 'created_at', 'updated_at', 'user_moodle_id', 'user_base_id'], 'required'],
            [['status', 'created_at', 'updated_at', 'user_moodle_id', 'user_base_id'], 'default', 'value' => null],
            [['status', 'created_at', 'updated_at', 'user_moodle_id', 'user_base_id'], 'integer'],
            [['username', 'password_hash', 'verification_token'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['password'], 'string', 'max' => 15],
            [['username'], 'unique'],
            [['user_moodle_id'], 'exist', 'skipOnError' => true, 'targetClass' => MdlUser::className(), 'targetAttribute' => ['user_moodle_id' => 'id']],
            [['user_base_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblStaff::className(), 'targetAttribute' => ['user_base_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    private function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    /**
     * Generates "remember me" authentication key
     */
    private function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMoodle()
    {
        return $this->hasOne(MdlUser::className(), ['id' => 'user_moodle_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBase()
    {
        return $this->hasOne(TblStaff::className(), ['id' => 'user_base_id']);
    }
}
