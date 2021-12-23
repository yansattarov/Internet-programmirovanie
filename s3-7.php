<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?php
echo "Исходный текст: " . $_POST["text"] . "<BR>". "<BR>";
$nch =" ";
$ch =" ";
$text=($_POST["text"]);
$length=strlen($_POST["text"]);

for ($i=0;$i<$length;$i++){
if ($i%2==0)
$nch .= "$text[$i]";
else 
$ch.="$text[$i]";}
$nch_rv= strrev($nch);
$b=$ch. $nch_rv;
echo $b;
?>

