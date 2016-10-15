<?php

Yii::import('application.models._base.BaseClienteContacto');

class ClienteContacto extends BaseClienteContacto
{
    /**
     * @return ClienteContacto
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'ClienteContacto|ClienteContactos', $n);
    }

}