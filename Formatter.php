<?php

namespace wartron\yii2helpers\formatter;

use yii\i18n\Formatter as BaseFormatter;

class Formatter extends BaseFormatter
{
    public function asHex($value, $format = null)
    {
        return strtoupper(bin2hex($value));
    }

    public function asCent($tevalue, $format = null)
    {
        return $this->asCurrency($value/100,$format);
    }

}