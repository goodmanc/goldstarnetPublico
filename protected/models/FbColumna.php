<?php

Yii::import('application.models._base.BaseFbColumna');

class FbColumna extends BaseFbColumna
{
    /**
     * @return FbColumna
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'FbColumna|FbColumnas', $n);
    }

    public function getFullColumna(){
        return '['.$this->fbGrupoColumna->nombre.'] '.$this->nombre;
    }
}