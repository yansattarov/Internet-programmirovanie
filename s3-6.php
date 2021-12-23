<?php
foreach ($_POST as $key => $string) {
  $_POST[$key] = iconv("cp1251", "UTF-8", $string); }
echo "Исходный текст: " . $_POST["text"] . "<BR>". "<BR>";
echo "Текст после замены символов: " . mb_strtoupper($_POST["text"]) . "<BR>" ;
?>
