<HTML>
<TITLE> Задача 1-3 </TITLE>
<BODY>
<?php
$N=rand ();
$M=rand ();
echo "Все целые числа из интервала от N до М, которые делятся на сумму всех своих цифр:";
for ($l=$N; $l<=$M; $l++)
{
    $summ = 0;
    $l_tmp = $l;
   
    while ($l_tmp)
    {
        $summ += $l_tmp % 10;
        $l_tmp = floor($l_tmp/10);
    }
    if ($l % $summ == 0)
    {
        echo "$l   ";
    }
   
}
?>
</BODY>
</HTML>