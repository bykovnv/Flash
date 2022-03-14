<?php

class Flash {
    
    // Проверка на запуск сессии
    public function __construct(){
        if(!isset($_SESSION)){
            session_start();
        }
    }

    // Записываем сообщение в сессию 
    // $name - ключ
    // $messege - сообщение
    public function addFlash(string $name, string $messege){
       $_SESSION[$name] = $messege;
    }

    // Выводим сообщение по ключу и очищаем его
    public function showFlash(string $name){
        if($_SESSION[$name]) {
            echo $_SESSION[$name];
            unset($_SESSION[$name]);
        }
    }
    
    // Проверяем, есть ли такой ключ в $_SESSION
    public function issetFlash(string $name){
        if(isset($_SESSION[$name])){
            return true;
        }
        return false;

    }


}

?>