<?php

Yii::import('application.models._base.BaseCondicion');

class Condicion extends BaseCondicion
{
    /**
     * @return Condicion
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Condicion|Condicions', $n);
    }

}