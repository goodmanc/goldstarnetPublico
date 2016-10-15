<?php

Yii::import('application.models._base.BaseProceso');

class Proceso extends BaseProceso
{
    /**
     * @return Proceso
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Proceso|Procesos', $n);
    }

}