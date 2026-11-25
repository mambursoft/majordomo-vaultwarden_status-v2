<?php
$dictionary=array(
'VAULTWARDEN_STATUS_ENDPOINT'=>'Адреса API',
'VAULTWARDEN_STATUS_METHOD'=>'HTTP-метод',
'VAULTWARDEN_STATUS_TOKEN'=>'Токен доступу',
'VAULTWARDEN_STATUS_REGION'=>'Регіон / маршрут',
'VAULTWARDEN_STATUS_TRACKING'=>'Номер відправлення',
'VAULTWARDEN_STATUS_PAYLOAD'=>'Шаблон POST-запиту',
'VAULTWARDEN_STATUS_HINT'=>'Локальний модуль. Дані не надсилаються, доки сценарій не викличе api().',
'VAULTWARDEN_STATUS_LAST'=>'Останній результат'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}