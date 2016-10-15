<?php

Yii::import('application.models._base.BaseBulto');

class Bulto extends BaseBulto
{
    /**
     * @return Bulto
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Bulto|Bultos', $n);
    }

}