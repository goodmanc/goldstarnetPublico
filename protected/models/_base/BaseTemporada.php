<?php

/**
 * This is the model base class for the table "temporada".
 * DO NOT MODIFY THIS FILE! It is automatically generated by AweCrud.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Temporada".
 *
 * Columns in table "temporada" available as properties of the model,
 * followed by relations of table "temporada" available as properties of the model.
 *
 * @property integer $id
 * @property integer $year
 * @property integer $periodo
 * @property string $CANCELED
 * @property string $status
 * @property integer $used_by
 * @property string $check_in
 * @property integer $created_by
 * @property string $created
 * @property integer $modified_by
 * @property string $modified
 *
 * @property Contratocliente[] $contratoclientes
 */
abstract class BaseTemporada extends AweActiveRecord {


    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'temporada';
    }

    public static function representingColumn() {
        return 'status';
    }

    public function rules() {
        return array(
            array(	'year',
					'required',
					'message' => Yii::t('app', 'Field is required')
			),
            array(	'year, periodo, used_by, created_by, modified_by',
					'numerical',
					'integerOnly'=>true
			),
            array(	'CANCELED, status',
					'length',
					'max'=>1,
					'tooLong' => Yii::t('app', 'Field is required')
			),
            array(	'check_in, created, modified',
					'safe'
			),
            array('periodo, CANCELED, status, used_by, check_in, created_by, created, modified_by, modified',
					'default',
					'setOnEmpty' => true,
					'value' => null
			),
            array('id, year, periodo, CANCELED, status, used_by, check_in, created_by, created, modified_by, modified', 'safe', 'on'=>'search'),
        );
    }

    public function relations() {
        return array(
            'contratoclientes' => array(self::HAS_MANY, 'Contratocliente', 'temporada_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
                'id' => Yii::t('app', 'ID'),
                'year' => Yii::t('app', 'Year'),
                'periodo' => Yii::t('app', 'Periodo'),
                'CANCELED' => Yii::t('app', 'Canceled'),
                'status' => Yii::t('app', 'Status'),
                'used_by' => Yii::t('app', 'Used By'),
                'check_in' => Yii::t('app', 'Check In'),
                'created_by' => Yii::t('app', 'Created By'),
                'created' => Yii::t('app', 'Created'),
                'modified_by' => Yii::t('app', 'Modified By'),
                'modified' => Yii::t('app', 'Modified'),
                'contratoclientes' => null,
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('year', $this->year);
        $criteria->compare('periodo', $this->periodo);
        $criteria->compare('CANCELED', $this->CANCELED, true);
        $criteria->compare('status', $this->status, true);
        $criteria->compare('used_by', $this->used_by);
        $criteria->compare('check_in', $this->check_in, true);
        $criteria->compare('created_by', $this->created_by);
        $criteria->compare('created', $this->created, true);
        $criteria->compare('modified_by', $this->modified_by);
        $criteria->compare('modified', $this->modified, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function behaviors() {
        return array_merge(array(
        ), parent::behaviors());
    }
}