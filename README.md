Aparat Api
==========
aparat.com/api

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist mamadali/yii2-aparat "*"
```

or add

```
"mamadali/yii2-aparat": "*"
```

to the require section of your `composer.json` file.

Method list usable
-----

```php
login
profile
userBySearch
profilecategories
video
categoryVideos
videoByUser
videoBySearch
videobytag
```

Usage
-----

first add to config.php or if use advanced project add to common/config/main.php

```php
    'components' => [
        ...
        'aparat' => [
            'class' => 'mamadali\Aparat',
        ],
        ...
    ];
```
How to get profile info
```php
   $res = Yii::$app->aparat->profile([
           'username' => 'username',
       ]);
```