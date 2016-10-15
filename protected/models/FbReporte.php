<?php

Yii::import('application.models._base.BaseFbReporte');

class FbReporte extends BaseFbReporte
{
    /**
     * @return FbReporte
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'FbReporte|FbReportes', $n);
    }

}