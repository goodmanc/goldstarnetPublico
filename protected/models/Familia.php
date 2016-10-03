<?php

Yii::import('application.models._base.BaseFamilia');

class Familia extends BaseFamilia
{
    /**
     * @return Familia
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Familia|Familias', $n);
    }

}