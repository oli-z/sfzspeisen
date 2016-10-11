<?php
$tgkey = ''; //Telegram API Key
$group = '@sfzspeisen'; //Telegram Group

require('sfz.php');
$text="Heute gibt es entweder ".getspeise(1)." oder ".getspeise(2)." oder auch ".getspeise(3).". Alternativ gibt es auch ".getspeise(4).".";
$temp=file_get_contents(('https://api.telegram.org/bot'.$tgkey.'/sendMessage?chat_id='.$group.'&text='.$text));
print $temp;
?>
