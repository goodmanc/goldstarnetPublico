<?php

Yii::import('application.models._base.BaseFbColAsignada');

class FbColAsignada extends BaseFbColAsignada
{
    /**
     * @return FbColAsignada
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'FbColAsignada|FbColAsignadas', $n);
    }

}