﻿<HTML>
<TITLE> Не Таблица умножения </TITLE>
<BODY>
<TABLE border=3>
<?php
for ($i=1; $i<=91; $i=$i+10) { // запускаем первый цикл
 echo ("<tr>"); // начало строки таблицы
 for ($k=0; $k<=9; $k++) { // запускаем второй цикл
 echo ("<td align=center>"); // открываем ячейку таблицы
 $p=$i+$k; // находим произведение двух чисел и...
     if(($p % 2) == 0){
        echo '<p style="color: red">' . $p. '</p>' ;
    }else{
        echo ($p);
    }
 echo ("</td>"); // а потом закрываем ячейку
 }
 echo ("</tr>"); // конец строки таблицы
}
?>
</TABLE>
</BODY>
</HTML>