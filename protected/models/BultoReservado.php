<?php

Yii::import('application.models._base.BaseBultoReservado');

class BultoReservado extends BaseBultoReservado
{
    /**
     * @return BultoReservado
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'BultoReservado|BultoReservados', $n);
    }

}