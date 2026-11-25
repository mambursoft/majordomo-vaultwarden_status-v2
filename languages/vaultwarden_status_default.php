<?php
$dictionary=array(
'VAULTWARDEN_STATUS_ENDPOINT'=>'API endpoint',
'VAULTWARDEN_STATUS_METHOD'=>'HTTP method',
'VAULTWARDEN_STATUS_TOKEN'=>'Access token',
'VAULTWARDEN_STATUS_REGION'=>'Region / route',
'VAULTWARDEN_STATUS_TRACKING'=>'Tracking number',
'VAULTWARDEN_STATUS_PAYLOAD'=>'POST payload template',
'VAULTWARDEN_STATUS_HINT'=>'Local-first module. No data leaves the system until api() is called.',
'VAULTWARDEN_STATUS_LAST'=>'Last result'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}