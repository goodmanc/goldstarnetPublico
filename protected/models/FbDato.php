<?php

Yii::import('application.models._base.BaseFbDato');

class FbDato extends BaseFbDato
{
    /**
     * @return FbDato
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'FbDato|FbDatos', $n);
    }

}