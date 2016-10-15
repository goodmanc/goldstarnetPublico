<?php

Yii::import('application.models._base.BaseCatalogo');

class Catalogo extends BaseCatalogo
{
    /**
     * @return Catalogo
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Catalogo|Catalogos', $n);
    }

}