<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?php
foreach ($_POST as $key => $string) {
  $_POST[$key] = iconv("windows-1251", "UTF-8", $string); }
echo "Исходный текст: " . $_POST["text"] . "<BR>". "<BR>";
$data = str_split($_POST["text"]);
$tab = count($data);
$tab = $tab - 3;
$result = array_merge(array_slice($data, $tab), array_slice($data, 0, $tab));
foreach($result as $val)
    echo $val;
?>
