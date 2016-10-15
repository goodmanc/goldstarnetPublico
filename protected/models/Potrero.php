<?php

Yii::import('application.models._base.BasePotrero');

class Potrero extends BasePotrero
{
    /**
     * @return Potrero
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Potrero|Potreros', $n);
    }

}