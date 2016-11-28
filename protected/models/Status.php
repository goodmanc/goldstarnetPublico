<?php

Yii::import('application.models._base.BaseStatus');

class Status extends BaseStatus
{
    /**
     * @return Status
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Status|Statuses', $n);
    }

}