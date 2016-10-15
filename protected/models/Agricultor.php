<?php

Yii::import('application.models._base.BaseAgricultor');

class Agricultor extends BaseAgricultor
{
    /**
     * @return Agricultor
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Agricultor|Agricultors', $n);
    }

}