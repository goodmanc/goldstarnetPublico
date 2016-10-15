<?php

Yii::import('application.models._base.BaseFbGrupoColumna');

class FbGrupoColumna extends BaseFbGrupoColumna
{
    /**
     * @return FbGrupoColumna
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'FbGrupoColumna|FbGrupoColumnas', $n);
    }

}