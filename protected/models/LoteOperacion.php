<?php

Yii::import('application.models._base.BaseLoteOperacion');

class LoteOperacion extends BaseLoteOperacion
{
    /**
     * @return LoteOperacion
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'LoteOperacion|LoteOperacions', $n);
    }

}