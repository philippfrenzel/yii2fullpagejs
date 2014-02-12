yii2fullpagejs

===============

Widget for fullPage.js layout container for Yii Framework 2
Original sources for the jquery plugin: https://github.com/alvarotrigo/fullPage.js
js license (MIT)

How to install?
---------------

Get it via [composer](http://getcomposer.org/) by adding the package to your `composer.json`:

```json
{
  "require": {
    "philippfrenzel/yii2fullpagejs": "*"
  }
}
```

You may also check the package information on [packagist](https://packagist.org/packages/philippfrenzel/yii2fullpagejs).

Usage
-----

```php
<?php echo \philippfrenzel\yii2fullpagejs\yii2fullpagejs::widget([
    'clientOptions' => [
        ...
    ]
]); ?>
```

Size of columns can be defined within css
```css
  ...
```

