<?php

Yii::import('application.models._base.BaseClienteDireccion');

class ClienteDireccion extends BaseClienteDireccion
{
    /**
     * @return ClienteDireccion
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'ClienteDireccion|ClienteDireccions', $n);
    }

}