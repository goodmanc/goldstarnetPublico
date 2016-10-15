<?php

Yii::import('application.models._base.BaseVariedad');

class Variedad extends BaseVariedad
{
    /**
     * @return Variedad
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Variedad|Variedads', $n);
    }

}