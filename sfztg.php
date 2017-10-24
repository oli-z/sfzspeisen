<pre>
<?php


$tgkey = 'DONTSTEALMYAPIKEY'; //Telegram API Key
$group = '@sfzspeisen'; //Telegram Group

require('sfz.php');
error_reporting(E_ALL);
@ini_set('display_errors', E_ALL);
setlocale(LC_TIME, "de_DE.utf8");

if(getspeise('Menue_1') == "" || getspeise('Menue_1') == " " || getspeise('Menue_1') == "  "){            // Programmierskills over 9000
  die();
}

$datum=date('j.n.y');
$text=
  "Der Speiseplan vom ".$datum." (".strftime("%A")."):".chr(10).chr(10).
  "🍲 1️⃣: ".emojify(getspeise('Menue_1')).chr(10).chr(10).
  "🍲 2️⃣: ".emojify(getspeise('Menue_2')).chr(10).chr(10).
  "🍲 3️⃣: ".emojify(getspeise('Menue_3')).chr(10).chr(10).
  "🥗: ".emojify(getspeise('Salat')).chr(10).chr(10).
  "🍱 herzhaft: " .emojify(getspeise('Lunchbox_herzhaft')).chr(10).chr(10).
  "🍱 süss: ".emojify(getspeise('Lunchbox_suess')).chr(10).chr(10).
  "🍿 S: ".getspeise('Verpflegungsbeutel_S').chr(10).chr(10).
  "Guten Appetit!	🍽";
  

print $text;
print('<br>');

$url = 'https://api.telegram.org/bot'.$tgkey.'/sendMessage';
$data = array('chat_id' => $group,
              'text' => $text,
              'disable_notification' => 'false');

$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context); // Das hier auskommentieren, um Senden zu verhindern (für Tests)
var_dump($result);
?>
</pre>
