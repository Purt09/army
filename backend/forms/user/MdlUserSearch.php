<?php

namespace backend\forms\user;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use core\entities\User\MdlUser;

/**
 * MdlUserSearch represents the model behind the search form of `core\entities\User\MdlUser`.
 */
class MdlUserSearch extends MdlUser
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'confirmed', 'policyagreed', 'deleted', 'suspended', 'mnethostid', 'emailstop', 'firstaccess', 'lastaccess', 'lastlogin', 'currentlogin', 'picture', 'descriptionformat', 'mailformat', 'maildigest', 'maildisplay', 'autosubscribe', 'trackforums', 'timecreated', 'timemodified', 'trustbitmask'], 'integer'],
            [['auth', 'username', 'password', 'idnumber', 'firstname', 'lastname', 'email', 'icq', 'skype', 'yahoo', 'aim', 'msn', 'phone1', 'phone2', 'institution', 'department', 'address', 'city', 'country', 'lang', 'calendartype', 'theme', 'timezone', 'lastip', 'secret', 'url', 'description', 'imagealt', 'lastnamephonetic', 'firstnamephonetic', 'middlename', 'alternatename'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = MdlUser::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'confirmed' => $this->confirmed,
            'policyagreed' => $this->policyagreed,
            'deleted' => $this->deleted,
            'suspended' => $this->suspended,
            'mnethostid' => $this->mnethostid,
            'emailstop' => $this->emailstop,
            'firstaccess' => $this->firstaccess,
            'lastaccess' => $this->lastaccess,
            'lastlogin' => $this->lastlogin,
            'currentlogin' => $this->currentlogin,
            'picture' => $this->picture,
            'descriptionformat' => $this->descriptionformat,
            'mailformat' => $this->mailformat,
            'maildigest' => $this->maildigest,
            'maildisplay' => $this->maildisplay,
            'autosubscribe' => $this->autosubscribe,
            'trackforums' => $this->trackforums,
            'timecreated' => $this->timecreated,
            'timemodified' => $this->timemodified,
            'trustbitmask' => $this->trustbitmask,
        ]);

        $query->andFilterWhere(['ilike', 'auth', $this->auth])
            ->andFilterWhere(['ilike', 'username', $this->username])
            ->andFilterWhere(['ilike', 'password', $this->password])
            ->andFilterWhere(['ilike', 'idnumber', $this->idnumber])
            ->andFilterWhere(['ilike', 'firstname', $this->firstname])
            ->andFilterWhere(['ilike', 'lastname', $this->lastname])
            ->andFilterWhere(['ilike', 'email', $this->email])
            ->andFilterWhere(['ilike', 'icq', $this->icq])
            ->andFilterWhere(['ilike', 'skype', $this->skype])
            ->andFilterWhere(['ilike', 'yahoo', $this->yahoo])
            ->andFilterWhere(['ilike', 'aim', $this->aim])
            ->andFilterWhere(['ilike', 'msn', $this->msn])
            ->andFilterWhere(['ilike', 'phone1', $this->phone1])
            ->andFilterWhere(['ilike', 'phone2', $this->phone2])
            ->andFilterWhere(['ilike', 'institution', $this->institution])
            ->andFilterWhere(['ilike', 'department', $this->department])
            ->andFilterWhere(['ilike', 'address', $this->address])
            ->andFilterWhere(['ilike', 'city', $this->city])
            ->andFilterWhere(['ilike', 'country', $this->country])
            ->andFilterWhere(['ilike', 'lang', $this->lang])
            ->andFilterWhere(['ilike', 'calendartype', $this->calendartype])
            ->andFilterWhere(['ilike', 'theme', $this->theme])
            ->andFilterWhere(['ilike', 'timezone', $this->timezone])
            ->andFilterWhere(['ilike', 'lastip', $this->lastip])
            ->andFilterWhere(['ilike', 'secret', $this->secret])
            ->andFilterWhere(['ilike', 'url', $this->url])
            ->andFilterWhere(['ilike', 'description', $this->description])
            ->andFilterWhere(['ilike', 'imagealt', $this->imagealt])
            ->andFilterWhere(['ilike', 'lastnamephonetic', $this->lastnamephonetic])
            ->andFilterWhere(['ilike', 'firstnamephonetic', $this->firstnamephonetic])
            ->andFilterWhere(['ilike', 'middlename', $this->middlename])
            ->andFilterWhere(['ilike', 'alternatename', $this->alternatename]);

        return $dataProvider;
    }
}
