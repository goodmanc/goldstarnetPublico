<?php

Yii::import('application.models._base.BaseFbCategoria');

class FbCategoria extends BaseFbCategoria
{
    /**
     * @return FbCategoria
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'FbCategoria|FbCategorias', $n);
    }

}