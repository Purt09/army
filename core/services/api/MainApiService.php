<?php

namespace core\services\api;

use core\vendor\MoodleRest;

class MainApiService extends \core\services\MainService
{

    private $token;
    private $link;

    public function __construct()
    {
        $this->token = \Yii::$app->params['moodle_api_key'];
        $this->link = \Yii::$app->params['moodle_host_info'] . \Yii::$app->params['moodle_api_link'];
    }

    protected function request($method, $params){
        $json =
            (new MoodleRest())->setServerAddress($this->link)->
            setToken($this->token)->
            setReturnFormat(MoodleRest::RETURN_JSON)->request($method, $params);

        return $json;
    }
}