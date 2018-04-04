<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <title></title>
</head>
<body>
<?php

$client_id = '201231104'; // Application ID
$public_key = 'CBAMIPPMABABABABA'; // Публичный ключ приложения
$client_secret = '18D1703328EA3CCF6110DE68'; // Секретный ключ приложения
$redirect_uri = 'http://genii.sumy.ua/smacom2/inc/ok_auth.php'; // Ссылка на приложение

$url = 'http://www.odnoklassniki.ru/oauth/authorize';

$params = array(
    'client_id'     => $client_id,
    'response_type' => 'code',
    'redirect_uri'  => $redirect_uri
);

echo $link = '<p><a href="' . $url . '?' . urldecode(http_build_query($params)) . '">Аутентификация через Одноклассники</a></p>';

if (isset($_GET['code'])) {
    $result = false;

    $params = array(
        'code' => $_GET['code'],
        'redirect_uri' => $redirect_uri,
        'grant_type' => 'authorization_code',
        'client_id' => $client_id,
        'client_secret' => $client_secret
    );

    $url = 'http://api.odnoklassniki.ru/oauth/token.do';

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, urldecode(http_build_query($params)));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($curl);
    curl_close($curl);

    $tokenInfo = json_decode($result, true);

    if (isset($tokenInfo['access_token']) && isset($public_key)) {
        $sign = md5("application_key={$public_key}format=jsonmethod=users.getCurrentUser" . md5("{$tokenInfo['access_token']}{$client_secret}"));

        $params = array(
            'method'          => 'users.getCurrentUser',
            'access_token'    => $tokenInfo['access_token'],
            'application_key' => $public_key,
            'format'          => 'json',
            'sig'             => $sign
        );

        $userInfo = json_decode(file_get_contents('http://api.odnoklassniki.ru/fb.do' . '?' . urldecode(http_build_query($params))), true);
        if (isset($userInfo['uid'])) {
            $result = true;
        }
    }

    if ($result) {
        echo "Социальный ID пользователя: " . $userInfo['uid'] . '<br />';
        echo "Имя пользователя: " . $userInfo['name'] . '<br />';
        echo "Ссылка на профиль пользователя: " . 'http://www.odnoklassniki.ru/profile/' . $userInfo['uid'] . '<br />';
        echo "Пол пользователя: " . $userInfo['gender'] . '<br />';
        echo "День Рождения: " . $userInfo['birthday'] . '<br />';
        echo '<img src="' . $userInfo['pic_2'] . '" />'; echo "<br />";
    }
}
?>
</body>
</html>
