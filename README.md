# NewsSite
## Запуск
1. Устанавливаем OpenServer
2. Скачиваем PHP, распаковываем в удобное место и добавляем путь в переменные системы, например: c:\php
3. Клонируем проект
4. Проверяем, чтобы в index.php были указаны правильные данные для подключения к бд
5. В OpenServer в phpmyadmin создаем базу данных news_site и в нее импортируем sql файл из папки db
6. В папке проекта из папки ini копируем файл в корневую (главную) папку php, например: c:\php
7. Перезапускаем terminal/cmd, если до этого был открыт
8. Открываем terminal/cmd и запускаем start.bat
9. После запуска сайт будет доступен на ip адресах: 127.0.0.1:8000, 192.168...:8000 и другие, кроме localhost:8000