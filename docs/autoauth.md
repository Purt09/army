
Этот файл необходимо создать в корне moodle для автоматической авторизации!
```
<?php
require('config.php');
$name = $_REQUEST['username'];
$password = $_REQUEST['password'];
$dashboard = $CFG->wwwroot;
$user = authenticate_user_login($name, $password);
if (complete_user_login($user)) {
    $actual_link = "http://$_SERVER[HTTP_HOST]/login/logout.php?sesskey=" . $user->sesskey;
    json_encode(['user' => $user, 'logout' => $actual_link], true);
    header('Location: http://moodle5fak/my');
    die;

} else {
    echo "not login";
    die;
}
```



