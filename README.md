# Flash

# Подключаем

require_once('flash.php');
$flash = new Flash();

# Устанавливаем сообщение
Первая строка это ключ, вторая строка текст сообщения

$flash->addFlash('errorUser', 'Имя не может быть пустым');

# Проверка на наличие ключа в сессии

$flashMessage->issetMessage('errorUser');

# Выводим сообщение по ключу

<?php echo $flash->showFlash('errorUser'); ?>
