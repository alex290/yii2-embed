Видео Плеер 
===========
Video Embed

Установка
------------

Предпочтительным способом установки этого расширения является [composer](http://getcomposer.org/download/).

Установка

```
php composer.phar require --prefer-dist alex290/yii2-embed "*"
```

или добавить

```
"alex290/yii2-embed": "*"
```

вставить в раздел Вашего `composer.json` файла.


Использование
-----

После установки расширения просто используйте его в своем коде  :

```php
<?= \alex290\embed\Embed::widget(['url' => 'https://www.youtube.com/watch?v=Pwe-pA6TaZk']); ?>```


или

```php
<?= \alex290\embed\Embed::widget(['url' => 'https://www.youtube.com/watch?v=Pwe-pA6TaZk', 'type'=> 'video']); ?>```

Также можно изменить размеры

```php
<?= \alex290\embed\Embed::widget(['url' => 'https://www.youtube.com/watch?v=Pwe-pA6TaZk', 'type'=> 'video', 'width'=> 800, 'height' => 600 ]); ?>```

А токже можно получить ссылку изображения

```php
<?= \alex290\embed\Embed::widget(['url' => 'https://www.youtube.com/watch?v=Pwe-pA6TaZk', 'type'=> 'img']); ?>```