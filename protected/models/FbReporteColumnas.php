<?php

Yii::import('application.models._base.BaseFbReporteColumnas');

class FbReporteColumnas extends BaseFbReporteColumnas
{
    /**
     * @return FbReporteColumnas
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'FbReporteColumnas|FbReporteColumnases', $n);
    }

}