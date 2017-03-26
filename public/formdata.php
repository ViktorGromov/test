<?php

$result = mail("djgeneraltitan@yandex.ru","Анкета с сайта","С сайта была получена анкета: \nИмя: $_POST[name] \nПочта: $_POST[mail] \nТелефон: $_POST[tel] \nСообщение: $_POST[text]");
if ($result) {
echo "<p>Сообщение отправлено успешно!</p>";
}
else {
echo "<p>Сообщение не отправлено!</p>";
}
?> 