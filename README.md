Aparat Api
==========
Aparat Api

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


Usage
-----

Add this code to config file

```php
    'modules' => [
        ...
        'aparat' => [
            'class' => 'mamadali\Aparat',
        ],
        ...
    ];
```
