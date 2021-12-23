<HTML> 
<HEAD> <TITLE> Логин </TITLE> </HEAD>  
<BODY> 
<FORM  method="post" action="<?php print $PHP_SELF ?>"> 
  Введите логин: 
  <INPUT type="text" name="a" size="15"> 
  <INPUT type="hidden" name="h" value="Саттаров"> 
  <INPUT type="hidden" name="h" value="Ян"> 
  <INPUT type="hidden" name="h" value="Эдуард">
  <INPUT type="hidden" name="h" value="vozdyhovod"> 
  <P> <INPUT type="submit" name="obr" value="Проверить"> 
</FORM> 
<?php
if (isset($_POST["obr"])) { 
 if (($_POST["a"]=="Саттаров")||($_POST["a"]=="Ян")||($_POST["a"]=="Эдуард")||($_POST["a"]=="vozdyhovod")) { echo("Здравствуйте, " . $_POST["a"]); 
  } else { 
  	echo "Вы не зарегистрированный пользователь";
    }
    }
?>  
</BODY> 
</HTML>