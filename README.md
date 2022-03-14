# Flash

# Подключаем

```php
require_once('flash.php');
$flash = new Flash();
```
# Устанавливаем сообщение
Первая строка это ключ, вторая строка текст сообщения
```php
$flash->addFlash('errorUser', 'Имя не может быть пустым');
``` 
# Проверка на наличие ключа в сессии
```php
$flashMessage->issetFlash('errorUser');
```
# Выводим сообщение по ключу
```php
<?php echo $flash->showFlash('errorUser'); ?>
```
