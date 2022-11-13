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
          
     //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
     if (isset($_POST['password'])) 
          { 
               $password=$_POST['password']; 
               if ($password =='') 
                    {
                         unset($password);
                    } 
          }
?>