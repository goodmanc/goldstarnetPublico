<?php

Yii::import('application.models._base.BaseProcesoPlantilla');

class ProcesoPlantilla extends BaseProcesoPlantilla
{
    /**
     * @return ProcesoPlantilla
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'ProcesoPlantilla|ProcesoPlantillas', $n);
    }

}