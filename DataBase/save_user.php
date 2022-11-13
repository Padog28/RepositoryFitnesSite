<?php
     //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
     if (isset($_POST['login'])) 
          { 
               $login = $_POST['login']; 
               if ($login == '') 
               { 
                    unset($login);
               } 
          } 
?>