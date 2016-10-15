<?php

Yii::import('application.models._base.BaseLoteHistorico');

class LoteHistorico extends BaseLoteHistorico
{
    /**
     * @return LoteHistorico
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'LoteHistorico|LoteHistoricos', $n);
    }

}