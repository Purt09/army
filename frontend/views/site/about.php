<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use llagerlof\moodlerest\MoodleRest;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;

$parameters = ['criteria' =>
    ['0' => [
        'key' => 'id',
        'value' => 'string'
            ]
    ]
];


?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php
        $postData = array('username' => Yii::$app->user->identity->getUsername(), 'password' => Yii::$app->user->identity->getPassword());
        $post = http_post_fields(Yii::$app->params['moodle_host_info'] . 'login/index.php', $postData);
        $headers = http_parse_headers($post);
        foreach($headers['Set-Cookie'] as $cookie)
        {
            $details = http_parse_cookie($cookie);
            foreach ($details->cookies as $name => $value)
                setcookie($name, $value, $details->expires, $details->path, 'moodle5fak');
        }
    ?>

    <p>This is the About page. You may modify the following file to customize its content:</p>

    <code><?= __FILE__ ?></code>
</div>
