<?php

Yii::import('application.models._base.BaseCondiciones');

class Condiciones extends BaseCondiciones
{
    /**
     * @return Condiciones
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Condiciones|Condiciones', $n);
    }

}