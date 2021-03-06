<?php

Yii::import('application.models._base.BaseEspecie');

class Especie extends BaseEspecie
{
    /**
     * @return Especie
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Especie|Especies', $n);
    }

}