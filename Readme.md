Yii2 Helpers - Formatter
============================

This is a custome formatter that provides shortcuts to two formats I use in my projects. `hex` and `cent`.

`asHex` will return an uppercase hex string from the value

`asCent` will return asCurrency but with the $value/100


To use these formatters, set the formatter copmponent in your config/web.php or config/main.php depending on your yii2 app structure.


    'formatter' => [
        'class' => '\wartron\yii2helpers\formatter\Formatter'
    ],