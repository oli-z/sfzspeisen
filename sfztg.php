<pre>
<?php


$tgkey = ''; //Telegram API Key
$group = '@sfzspeisen'; //Telegram Group

require('sfz.php');
error_reporting(E_ALL);
@ini_set('display_errors', E_ALL);
$datum="00.00.0000";
$text=
  "Der Sepiseplan vom ".$datum.":".chr(10).chr(10).
  "Speise 1: ".getspeise('Menue_1').chr(10).chr(10).
  "Speise 2: ".getspeise('Menue_2').chr(10).chr(10).
  "Speise 3: ".getspeise('Menue_3').chr(10).chr(10).
  "Salat: ".getspeise('Salat').chr(10).chr(10).
  "Lunchbox herzhaft: ".getspeise('Lunchbox_herzhaft').chr(10).chr(10).
  "Lunchbox süss: ".getspeise('Lunchbox_suess').chr(10).chr(10).
  "Guten Appetit!	\xF0\x9F\x98\x89";
  //"Verpflegungsbeutel S: ".getspeise('Verpflegungsbeutel_S')
  

print $text;
print('<br>');
//$text='Test, bitte ignorieren';
//$temp=file_get_contents(('https://api.telegram.org/bot'.$tgkey.'/sendMessage?chat_id='.$group.'&text='.$text));
//print $temp;

$url = 'https://api.telegram.org/bot'.$tgkey.'/sendMessage';
$data = array('chat_id' => $group,
              'text' => $text,
              'disable_notification' => 'true');

// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
var_dump($result);

print('test');
?>
</pre>
