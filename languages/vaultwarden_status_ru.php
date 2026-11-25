<?php
$dictionary=array(
'VAULTWARDEN_STATUS_ENDPOINT'=>'Адрес API',
'VAULTWARDEN_STATUS_METHOD'=>'HTTP-метод',
'VAULTWARDEN_STATUS_TOKEN'=>'Токен доступа',
'VAULTWARDEN_STATUS_REGION'=>'Регион / маршрут',
'VAULTWARDEN_STATUS_TRACKING'=>'Номер отправления',
'VAULTWARDEN_STATUS_PAYLOAD'=>'Шаблон POST-запроса',
'VAULTWARDEN_STATUS_HINT'=>'Локальный модуль. Данные не отправляются, пока сценарий не вызовет api().',
'VAULTWARDEN_STATUS_LAST'=>'Последний результат'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}