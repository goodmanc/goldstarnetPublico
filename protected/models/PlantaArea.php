<?php

Yii::import('application.models._base.BasePlantaArea');

class PlantaArea extends BasePlantaArea
{
    /**
     * @return PlantaArea
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'PlantaArea|PlantaAreas', $n);
    }

}