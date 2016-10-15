<?php

Yii::import('application.models._base.BaseMoneda');

class Moneda extends BaseMoneda
{
    /**
     * @return Moneda
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Moneda|Monedas', $n);
    }

}