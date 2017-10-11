# yii2-back-to-top-widget

A Yii2 widget to add back-to-top button. Base on the .animate jQuery function.

Installation
------------
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist xutl/yii2-back-to-top-widget "*"
```

or add

```
"xutl/yii2-back-to-top-widget": "*"
```

to the require section of your `composer.json` file.

Usage
------------
```php
<?= \xutl\backtop\BackTop::widget() ?>
```

```php
<?php use xutl\backtop\BackTop; ?>
<?= BackTop::widget([
    'options' => 'custom-css class-name'
]); ?>
```

```php
<?php use xutl\backtop\BackTop; ?>
<?= BackTop::widget([
    'tagContent' => '<i class="top-icon"></i>',
    'options' => 'custom-css class-name',
]); ?>
```