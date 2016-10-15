<?php

Yii::import('application.models._base.BaseContratoAgricultor');

class ContratoAgricultor extends BaseContratoAgricultor
{
    /**
     * @return ContratoAgricultor
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'ContratoAgricultor|ContratoAgricultors', $n);
    }

}